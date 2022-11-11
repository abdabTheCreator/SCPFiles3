<?php include 'header.php'; ?>


  <div class="container">
    <h1>Use form below to add a record into the database</h1>
    <p><a href="../index.php" class="btn btn-primary">Back to index page</a></p>
    
    <form method="post" action="addRecord.php" class="form-group" enctype="multipart/form-data">
        <label>Item: </label>
        <br>
        <input type="text" name="item" placeholder="Item" class="form-control">
        <br><br>
        <label>Title:</label>
        <br>
        <input type="text" name="title" placeholder="Title" class="form-control">
        <br><br>
        <label>Class:</label>
        <br>
        <input type="text" name="class" placeholder="Class" class="form-control">
        <br><br>
        <label>Special Containment Procedure:</label>
        <br>
        <textarea rows= "10" name="containment" placeholder="Containment" class="form-control"> </textarea>
        <br><br>
        <label>Description:</label>
        <br>
        <textarea  rows='10' name="description" placeholder="Description" class="form-control"> </textarea>
        <br><br>
       
         <label> Select image to upload: </label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Submit" name="submit">
    </form>
    <footer class="footer mt-auto py-3 bg-dark">
      <div class="container">
        <span class="text-light">@Copyright SCP Foundation</span>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
