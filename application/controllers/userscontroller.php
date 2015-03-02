<?php
 class UsersController
 {
     
     
     //Constructor
     public function __contruct($model, $controllerName, $action)
     {
         
     }
     
     public function adduser($id, $naam, $leeftijd)
     {
         echo "Dit is mijn id: ".$id.
              "Dit is mijn naam: ".$naam.
              "Dit is mijn leeftijd: ".$leeftijd;
         
     }
 }
?>