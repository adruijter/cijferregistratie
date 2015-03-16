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
         if (isset($_POST['submit']))
         {
             $this->set('header', "Het record is geupdate");
             //var_dump($_POST);exit();
             $this->model->insert_into_users($_POST);
             header("refresh:4;url=".BASE_URL."users/adduser");
         }
         else
         {
             $introtext = "Geef uw naam A.U.B:";
             $this->set('header', $introtext); 
         }
     }
 }
?>