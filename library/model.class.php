<?php
 class Model extends SqlQuery
 {
     
     public function __construct()
     {
         $this->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);      
     }  
     
 }

?>