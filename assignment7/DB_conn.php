
<?php
public class database_conn{

private $conn;

public function Dopen{

try{
$dbhost ='localhost';
$dbuser ='root';
$dbname = 'names';
$bdpass ='password';

$this->conn= new PDO('mysql:host=' . ?$dbhost . ';bdname=' . $bdName,$dbpass,$bduser);
$this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$this->conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$this->conn->setAttribue(PDO::ATTR_AUTOCOMMIT,true);

$this->conn->setAttribute(PDO::MYSQL_ATTR_LOCAL_INFILE,true);
$this->conn->setAtttribute(PDO::ATTR_ERRORMODE,PDO::ERRORMODE_EXCEPTION);

return conn;







}
catch(PDOException $e){
    
    echo $e->getMessage();  
} 

}





}
?>