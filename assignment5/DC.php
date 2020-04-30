<?php

$output = "";

//check for post array length to be greater than zero count($_POST), or just check for $_POST['submit']
//if so require file, instatiate class, $output call method
//side note the method will return either an error message or link to file (both will be strings);
if(isset($_POST['submit'])){
  require_once 'NameFile.php';
  $addName = new NameFile();
  //print_r($_POST);
  $output = $addName->makeDir($_POST);
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
    <label for="name">Folder name</label>
    <input type="string" class="form-control" id="name" name="folderName">
    
  </div>
  
  <div class="form-group">
    <label for="file"> File content</label>
    <textarea class="form-control" id="file" name="fileContent" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
    
  </body>
</html>
