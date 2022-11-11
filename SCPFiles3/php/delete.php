


<?php 


 include 'conn.php';
 include 'header.php';


   
if(isset($_POST['submit']))
    {
        
        $id = $_POST['id'];
        $delete = "DELETE FROM scpfiles WHERE id=$id";
            
        if($conn->query($delete) === TRUE)
        {
            echo "
            <body>
                <div class='container mx-auto' style='padding:50px;'>
                    <h1>Record Deleted succesfully</h1>
                    <p><a href='../index.php'>Return to index page</a></p>
                </div>
                </body>
            ";
        }
        else
        {
            echo "
                <h1>Error submitting data</h1>
                <p>{$connection->error}</p>
                <p><a href='addrecordForm.php'>Return to form</a></p>
            
            ";
        }
    } // end isset post
    
    
?>
