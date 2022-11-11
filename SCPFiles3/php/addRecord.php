<?php
  include 'conn.php';
  include 'header.php';
 if(isset($_POST['submit']))
 {
     // create variables from our form post data
     $item = $_POST['item'];
     $title = $_POST['title'];
     $class = $_POST['class'];
     $containment = $_POST['containment'];
     $description = $_POST['description'];
     $target_dir = "../images/";
     $target_file =  basename($_FILES["fileToUpload"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     
     // Check if image file is a actual image or fake image
     if(basename($_FILES["fileToUpload"]["name"])){
         
         
             $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
             //move image into folder and set variable as path 
             if($check !== false) {
                
                 $uploadOk = 1;
                 $getValue = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir  . $_FILES["fileToUpload"]["name"] );
                 if($getValue){
                   
                     $image = strval($target_file);
                    
                 }else{
                     $image = '../images/default.png';
        
                 }
                 
             } else {
                 echo "File is not an image.";
                 $uploadOk = 0;
                 $image = '../images/default.png';
                 }
             }
         

     }else{
         
         $image = '../images/default.png';
         
     }

     // create a sql insert command
     $insert = "insert into scpfiles(Item, Title, Object_Class, Containment, Description, Image) 
     values('$item', '$title', '$class', '$containment', '$description', '$image')";
     
     if($conn->query($insert) === TRUE)
     {
         echo "
         <div class='container'>
             <h1>Record added succesfully</h1>
             <p><a href='../index.php'>Return to index page</a></p>
         </div
         ";
     }
     else
     {
         echo "
             <h1>Error submitting data</h1>
             <p>{$conn->error}</p>
             <p><a href='addrecordForm.php'>Return to form</a></p>
         
         ";
     }



?>
