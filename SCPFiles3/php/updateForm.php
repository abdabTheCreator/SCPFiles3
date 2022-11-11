<?php 
include 'conn.php';
include 'header.php';

// find result in db that matches id
if(isset($_POST['submit'])) {

    $id = $_POST['id'];
    $row = $conn->query("select * from scpfiles where Id=$id");

       foreach($row as $row){
            echo "
            <h1 class='mx-auto' style='padding:50px;'>Record retreived succesfully</h1>
        ";
        echo "
        <div class='container mx-auto' style='padding:50px;'>

            <form method='post' action='update.php' class='form-group' enctype='multipart/form-data'>
            <input type ='hidden' name='id' value={$row['Id']}  > 
            
            <label>Item: </label>
            <br>
            <input type='text' name='item' value={$row['Item']} placeholder='Item' class='form-control'>
            <br><br>
            <label>Title:</label>
            <br>
            <input type='text' name='title'  value={$row['Title']} class='form-control'>
            <br><br>
            <label>Class:</label>
            <br>
            <input type='text' name='class' value={$row['Object_Class']} class='form-control'>
            <br><br>
            <label>Special Containment Procedure:</label>
            <br>
            <textarea name='containment' rows='10'  class='form-control'>
                {$row['Containment']}
            </textarea>
            <br><br>
            <label>Description:</label>
            <br>
            <textarea name='description' rows='10'  class='form-control'>
                {$row['Description']}
            </textarea>
            
            <br><br>
        
            <label> Select image to upload: </label>
            <input type='file' name='fileToUpload' value={$row['Image']} id='fileToUpload'>
            <input type='submit'  Update name='submit'>
            </form>
        </div>
        ";
        }
    }
      
?>


