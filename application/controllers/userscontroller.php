<?php
 class UsersController extends Controller
 {
     
     
     //Constructor
     public function __construct($model, $controllerName, $action)
     {
         parent::__construct($model, $controllerName, $action);
         echo "Dit is na de aanroep van de parentclass";
     }
     
     public function adduser($id, $naam, $leeftijd)
     {
         echo "Dit is mijn id: ".$id.
              "Dit is mijn naam: ".$naam.
              "Dit is mijn leeftijd: ".$leeftijd;
         
     }
 }
?>