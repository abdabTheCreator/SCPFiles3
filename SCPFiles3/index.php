

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SCP</title>
  <link rel="stylesheet" href="css/style.css?v=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/loader.js"></script>

</head>

<body class="d-flex flex-column h-100">

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark dark">
    <a class="navbar-brand" href="index.php"><img src="images/scp.gif" width="64" height="64" alt="SCP secret files logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav mr-auto lpt-width ">
        <hr>
        <ul>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a href="php/addrecordForm.php"class="btn btn-success">Add Record</a>
        </li>
       </ul>
        <hr>
        
      </div>
    </div>
  </nav>
  <div class="container">


    <?php include "php/conn.php";
    
    
          foreach($result as $row)
          {
      
            echo "
            <div class='card shadow p-3 mb-5 bg-white rounded' style='padding:5px; margin:20px;'>
              <div class='d-flex justify-content-between'>
              
                <div> <h2>{$row['Item']}</h2> </div>
                <div class='d-flex justify-content-between'>
                    <form method='post' action= 'php/updateForm.php' class='form-group' style='padding:5px;'>
                        <input type ='hidden' name='id' value={$row['Id']}  > 
                        <input type='submit' name='submit' value='Edit'/>
                  
                    </form>
                     <form method='post' action= 'php/delete.php' class='form-group' style='padding:5px;'>
                        <input type ='hidden' name='id' value='".$row['Id']."'  > 
                        <input type='submit' name='submit' value='Delete'/>
                      
                     </form>
                </div>
               </div>
                <h3>{$row['Title']}</h3>
                <h3>{$row['Object_Class']}</h3>
                <p><img src='images/".$row['Image']."'alt='{$row['Item']}' ></p>
                <p>{$row['Containment']}</p>
                <p>{$row['Description']}</p>
              </div>
              ";
             
          }

        ?>
  </div>






<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <span class="text-light">@Copyright SCP Foundation</span>
  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <script src="js/loader.js"></script>
</body>