<?php


class AddNamesProc{

public $first; 
public $last;

public function addClearNames($post){
    //print_r($post);
    if (isset( $post["addName"])){
        return $this->aname($post);    
        
        }
    else if(isset($post["clearNames"])){
           return  $this->cname($post);
        }
}
   
    
public function aname($post){
$name = $post['name'];

$nameArr = explode(" ", $name);

//print_r($nameArr);

//convert string to an array explode;
//once an array then switch first and last name and add comma
//take the changed name and put back into string

$nm = $nameArr[1] . ", " . $nameArr[0];

//echo $nm;

if($post['namelist'] != ""){
    //expode on what? \n
    $masterarr = explode("\n", $post['namelist']);
    //$masterArr will equal the array exploded on
    array_push($masterarr, $nm);

    //print_r($masterArr);
    //add $nm to $masterArr .... push 
    //sort the $masterArr ... sort
    sort($masterarr);
    return implode("\n", $masterarr);
    //$output = implode("\n", $masterArr)
    //return $output;
}
else {
    //echo $nm;
    return $nm . "\n";
}


//$names = [$name];
//$output = $names;

}

public function cname(){
    $output = "";
    return $output;
}


}//end of class





?>