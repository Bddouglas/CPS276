<?php




class Calculator{
public $num1;
public $num2; 
public $operator;




public function __construct( $operator, $num1, $num2 ) {
    $this-> $operator = 'error';
     $this-> $num1 = 'error';
     $this-> $num2 = 'error';
    }

public function Calc($operator, $num1,$num2){
   
    
    
       
    
    if($num1 !=int or $num2 !=int){
        echo "Must enter a String and two numbers";
    }else if($operator != '+' or $operator != '-' or $operator != '*' or $operator != '/'){
echo "Invalid operator";
    }else {
    if ($operator ==="+"){
        
        return $num1 + $num2;
        }
        else if ($operator ==="-"){ 
         return $num1 - $num2;
        }
        else if ($operator ==="*"){
        return $num1 * $num2;
        }
        
        else if($operator== "/"){
            if($num2 == 0){
                echo "Can not divide by 0";
            }else{
                return $num1/$num2;
            }
            //return $num1/$num2

        }

    }

}//end of function

}
        
       
   
        
    


 





?>