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
             $this->set('header', "Uw record is toegevoegd");
             $this->model->insert_into_users($_POST);
             header("refresh:4;url=".BASE_URL."users/adduser");
         }
         else
         {
             $introtext = "Geef uw naam A.U.B:";             
             $this->set('header', $introtext); 
         }
     }
     
     public function selectuser()
     {
         $this->set('header', 'Alle gebruikers in de users tabel');
         $result = $this->model->select_all();
         $table =  "<table>";
         foreach ($result as $value)
         {
             $table .= "<tr>
                         <td>".$value->id."</td>
                         <td>".$value->voornaam."</td>
                         <td>".$value->tussenvoegsel."</td>
                         <td>".$value->achternaam."</td>
                        </tr>";
         }
         $table .= "</table>";
         $this->set('table', $table);
     }
 }
?>