

<?php

$output = "";


if(isset($_POST['upload'])){
  require_once 'FileUploadProc.php';
  $addName = new upload();
  //print_r($_POST);
  $output = $addName->uploadF($_POST);
 }
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Add to File</title>
  </head>
  <body>
  <div class="container">
    <h1>File and Directory Assignment</h1>

    <p><?php echo $output; ?></p>
    
    <form method="post" action="#">
  <div class="form-group">
    <label for="name">File Name</label> 
    <input type="string" class="form-control" id="name" name="folderName">
    
  </div>
  
  
  
  <button type="upload" class="btn btn-primary" name="upload">upload</button>
</form>
</div>
    
  </body>
</html>
