<?php 
require_once classes/Pdo_methods.php


$date = $_POST['date'];
$sql = SELECT * From NOTES; 
$records = $pdo selectNotBinded($sql)


if($date== $POST_['date']){




if(count($records) === 0){
    $output = "There are no records to display";
  }
  
  else {
    $output = "<ul>";
  
    foreach($records as $row){
      $output .= "<li><a target='_blank' href='{$row['date']}'>{$row['note']}</a></li>";
    }
  
    $output .= "</ul>";
  }
}

?>