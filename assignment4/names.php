<?php
if(isset($_POST)){
 require_once 'addNameProc.php';
 $addName = new AddNamesProc();
 //print_r($_POST);
 $output = $addName->addClearNames($_POST);
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

    <title>Add names!</title>
  </head>
  <body>
    <h1>Add names</h1>
    <form method="post" action="#">
    <button type="submit" class="btn btn-primary" name="addName">Add Name</button>
    <button type="submit" class="btn btn-primary" name="clearNames">Clear Names</button>

  <div class="form-group">
  
    <label for="Ename">Enter names:</label>
    <input type="text" class="form-control" name="name">
   
  </div>
  
  <div class="form-group">
  <label for="lname">List of names:</label><br>
  
  
  
  <textarea cols="191" rows="15" type = "Password" class = "form-control"  name="namelist" ><?php echo $output; ?></textarea>
<br/></div></form>
  
 
 

  
    
  </body>
</html>