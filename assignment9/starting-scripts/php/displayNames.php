<?php 
require_once classes/Pdo_methods.php



$sql = SELECT * From NAMES; 
$records = $pdo selectNotBinded($sql)

if(count($records) === 0){
    $output = "There are no records to display";
  }
  
  else {
    $output = "<ul>";
  
    foreach($records as $row){
      $output .= "<li><a target='_blank' href='{$row['name']}'>{$row['name']}</a></li>";
    }
  
    $output .= "</ul>";
  }

//write the code for displaying the names when the "Display Names" button is clicked here.
?>