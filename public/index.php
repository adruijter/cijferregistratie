<?php 
 // Bepaalt het directory scheidingsteken
 define("DS", DIRECTORY_SEPARATOR); 

 // Bepaalt de root directory van ons project
 define("ROOT", dirname(dirname(__FILE__)));

if (isset($_GET['url']))
    {
        $url = $_GET['url'];
    }
    else
    {
        // Verwijzing naar onze homepage
    }

 session_start();

 require_once(ROOT.DS.'library'.DS.'bootstrap.php');
?>
