<?php
 function callHook()
 {
     /* Stel dit is de link:
        http://localhost/2014-2015/cijferregistratie/users/adduser/123
        Dan wordt users als controllernaam gebruikt, adduser als methodnaam en         alles wat daarna komt wordt als argument(en) gebruikt voor de adduser         method*/
        
     global $url;
          
     // Hiermee zetten we de url onderdelen in een array
     $urlArray = explode('/', $url);
     
     $controller = $urlArray[0];  // $controller = 'users'
     
     array_shift($urlArray);
     
     $action = $urlArray[0]; //$action = 'adduser' (method in de users class)
     
     array_shift($urlArray);
     
     $queryString = $urlArray; //$queryString is de argumentenlijst van adduser
     
     // Dit word de mapnaam waar de views in komen te staan
     $controllerName = strtolower($controller); //users
          
     $controller = ucwords(strtolower($controller)); // Users
     
     // Dit wordt de naam van de model class, dit is voor de database
     $model = rtrim($controller, 's'); // model = user
          
     // Dit is de naam van de controller class in dit geval: UsersController
     $controller = $controller."Controller";
     
    // echo "Controller: ". $controller. "<br>";
     
     
     $dispatch = new $controller($model, $controllerName, $action);
     
     
     
     if (method_exists($controller, $action))
     {
         
         call_user_func_array(array($dispatch, $action), $queryString);
         
     }
     else
     {
         echo "method '".$action."' bestaat niet";
     }
    
     
     
     
 }

 function __autoload($classname)
 {
     if (file_exists(ROOT.DS.'application'.DS.
                     'controllers'.DS.strtolower($classname).'.php'))
     {
         require_once(ROOT.DS.'application'.DS.
                     'controllers'.DS.strtolower($classname).'.php');
     }
     else if (file_exists(ROOT.DS.'application'.DS.
                     'models'.DS.strtolower($classname).'.php'))
     {
         require_once(ROOT.DS.'application'.DS.
                     'models'.DS.strtolower($classname).'.php');
     }
     else if (file_exists(ROOT.DS.'library'.DS.strtolower($classname).'.class.php'))
     {
         require_once(ROOT.DS.'library'.DS.strtolower($classname).'.class.php');
     }
     else
     {
         echo $classname.'class not found';
     }
 }

 callHook();
?>