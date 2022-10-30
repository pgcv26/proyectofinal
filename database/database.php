<?php 

class conexion {
   const DB_HOTS ="localhost";
   const DB_NAME ="minimarket";
   const DB_USERNAME ="root";
   const DB_PASSWORD ="";

   public function getconexion(){
        $host= self:: DB_HOTS;
        $db= self:: DB_NAME;
        $username= self:: DB_USERNAME;
        $password= self:: DB_PASSWORD;
        

        $conexion = new PDO("mysql:dbname=$db;host=$host;charset=utf8",$username, $password);

    
        return $conexion;

    }

}

//$con = new conexion();
//print_r ($con);
//print_r($con->getconexion());

?>