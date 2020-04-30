

<?php 
require_once classes/Pdo_methods.php



$sql = "SELECT * From finalproject";

$records = $pdo selectNotBinded($sql)

if(count($records) === 0){
    $output = "There are no records to display";
  }
  
  else {
    $output = "<ul>";
  
    foreach($records as $row){
      $output .= "<li><a target='_blank' href='{$row['userName']}'>{$row['useraddress']}'>{$row['usercity']}'>{$row['userstate']}'>{$row['userphone']}'>{$row['useremail']}'>{$row['userDOB']}</a></li>";
    }
  
    $output .= "</ul>";
  }


?>

