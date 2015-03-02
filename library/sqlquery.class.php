<?php
 class SqlQuery
 {
     private $db_connect;
     
     
     public function connect($host, $user, $password, $dbname)
     {
         $this->db_connect = msqli_connect($host, $user, $password, $dbname);         
     }    
     
 }
?>