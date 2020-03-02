<?php




class Calculator{
public $num1;
public $num2; 
public $operator;




//public function __construct($operator="error", $num1="error", $num2="error"){


//}

public function Calc($operator="error", $num1="error",$num2="error"){
   
    
    
       
    
    if($operator != '+' and $operator != '-' and $operator != '*' and $operator != '/'){
        echo "Invalid operator";
    }else if(!is_int($num1) || !is_int($num2)){
return "Must enter string and two numbers";
    }else {
    if ($operator =="+"){
        
        return $num1 + $num2;
        }
        else if ($operator =="-"){ 
         return $num1 - $num2;
        }
        else if ($operator =="*"){
        return $num1 * $num2;
        }
        
        else if($operator == "/"){
            if($num2 == 0){
                echo "Can not divide by 0";
            }else{
                return $num1/$num2;
            }
            //return $num1/$num2

        }

    }//end of if statement

}//end of function

}
        
       
   
        
    


 





?>