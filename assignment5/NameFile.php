<?php 
//some sort of class
//when submit you will have a name and sometext.

//first test that the directory already exists, if it exists return error message


//based upon the name create the directory, this directory will go into the directories you created
//if does not exist create directory something like mkdir("Directories/$_POST[name]")

//create a file that contains the text sent from the textara.  The file will be named readme.txt

//Once created you will need to return a link to the file.   <a href="path to file">Path to file</a>

//Directories/scott/readme.txt

//http://157.245.90.140/cps276/assignments/assignment5/Directories/$_POST[folderName]/readme.txt add the subdir and file





class NameFile{
    
    
    
    public function makeDir(){

        $filename = "Directories/$_POST[folderName]";

    if(file_exists($filename)) {
        return "Sorry, that folder already exists";
    } else {
        
       //$path =  getcwd() . "/Directories/$_POST[folderName]";
       mkdir("Directories/$_POST[folderName]", 0777);
       chmod("Directories/$_POST[folderName]", 0777);
        
        $handle = fopen("/var/www/html/cps276/assignments/assignment5/Directories/$_POST[folderName]/readme.txt", "w" );

        fwrite($handle,$_POST['fileContent'] );
        fclose($handle);
        
        $directoryName = $_POST['folderName'];
        $filepath = "<p><a href='http://157.245.90.140/cps276/assignments/assignment5/Directories/{$directoryName}/readme.txt'>Path were file is located</a></p>";
       // return "Directory created successfully:" . " ". '<a href="http://157.245.90.140/cps276/assignments/assignment5/Directories/$_POST[folderName]/readme.txt">Link to file</a>';
        
            return "Directory created successfully: " .$filepath;
        
    }

    
    
}//end of function


}//end of class











?>