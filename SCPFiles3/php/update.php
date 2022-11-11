<?php 
include 'header.php';
 // Database credentials remember to fill in your own details
    $user = "a30057554_admin";
    $pw = "q!KG8)xZe-wV";
    $db = "a30057554_scpdata";
    
    // Database connection
    $conn = new mysqli('localhost', $user, $pw, $db);

//if post retrieve values and check image
if(isset($_POST["submit"])) {
    $id = $_POST['id'];
    $item = $_POST['item'];
    $title = $_POST['title'];
    $class = $_POST['class'];
    $containment = $_POST['containment'];
    $description = $_POST['description'];
    $target_dir = "C:/xampp/htdocs/SCPFiles/images/";
    $target_file =  basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    if($_FILES["fileToUpload"]["name"]){
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        // if image is image then move file into directory and store path in db
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
        
    
    }else{
        $image = '../images/default.png';

    }
   
    //update db connection
    $update = "UPDATE scpfiles SET Item = '$item', Title = '$title', Object_Class = '$class', Containment = '$containment', Description = '$description', Image = '$image'  WHERE Id = '$id'";
      
    if($conn->query($update) === TRUE)
    {
        echo "
        <body>
        <div class='container mx-auto' style='padding:50px;'>
            <h1>Record Updated succesfully</h1>
            <p><a href='../index.php'>Return to index page</a></p>
        </div>
        </body>
        ";
    }
}
?>

