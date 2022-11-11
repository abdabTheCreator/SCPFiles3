<?php

    // Database credentials remember to fill in your own details
    $user = "a30057554_admin";
    $pw = "q!KG8)xZe-wV";
    $db = "a30057554_scpdata";
    
    // Database connection
    $conn = new mysqli('localhost', $user, $pw, $db);
    
    // variable that returns all records in database input name of your DB Table
    $result = $conn->query("select * from scpfiles");
   

?>