<?php
 class SqlQuery
 {
     private $db_connect;
     
     
     public function connect($host, $user, $password, $dbname)
     {
         $this->db_connect = mysqli_connect($host, $user, $password, $dbname);         
     }    
     
     public function query($query)
     {
         return mysqli_query($this->db_connect, $query);         
     }
 }
?>