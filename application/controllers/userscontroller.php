<?php
 class UsersController extends Controller
 {
     
     
     //Constructor
     public function __construct($model, $controllerName, $action)
     {
         parent::__construct($model, $controllerName, $action);
     }
     
     public function adduser()
     {
         $introtext = "Geef uw naam:";
         $this->set('header', $introtext);         
     }
 }
?>