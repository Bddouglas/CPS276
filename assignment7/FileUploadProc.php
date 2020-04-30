<?php
class uploadF{
    
    
    
    public function upload(){

        $filename = "Directories/$_POST[folderName]";

    if(file_exists($filename)) {
        return "Sorry, that folder already exists";
    } else {
        
       //$path =  getcwd() . "/Directories/$_POST[folderName]";
       mkdir("Directories/$_POST[folderName]", 0777);
       chmod("Directories/$_POST[folderName]", 0777);
        
        $handle = fopen("/var/www/html/cps276/assignments/assignment5/Directories/$_POST[folderName]/readme.txt", "w" );

        
      
    }

    
    
}//end of function


}//end of class

?>