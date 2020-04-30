<?php
require_once Pdo_methods.php
//write the code for adding and displaying the names here when the "Add Name" button is clicked
/*
1. format name to last, first
2. put name into database; NAMES
3. query the database to get all the names into alphabetical order
4. create string to seperat each name with /n
5. send the string back to the client 
*/

$data = $_POST['data'];
//echo $data;




$nameArr = explode(" ", $data);





$temp = $nameArr[1] . ", " . $nameArr[0];



if($post['data'] != ""){
    
    $masterarr = explode("\n", $post['data']);
    
    array_push($masterarr, $temp);

    
    sort($masterarr);
    return implode("\n", $masterarr);
    
}
else {
    
    return $nm . "\n";
}


    if(isset($_POST['add name'])){
        
        
    
        
    
        $sql = "INSERT INTO NAMES (data, name) VALUES (:data, :name)";
    
                $bindings = [
                    [':data', $_POST['name'], 'str'],
                    [':data', $data, 'str']
                ];
    
                $records = $pdo->otherBinded($sql, $bindings);
    
                if($records === "error"){
                    $output = "<p>There was an error adding the record.</p>";
                }
                else {
                    $output = "<p>name has been added.</p>";
                }
            }

if(object == $data ){


$response =(object)[
    'masterstatus'=>'error',
    'msg'=>"There was a problem"
];
}else {


$names = "ben, douglas\n fred, zeb\n";

$response =(object)[
    'masterstatus'=>'success',
    'names'=>$names
];
echo json_encode($response);

}


?>