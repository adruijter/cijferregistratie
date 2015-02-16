<?php
 function callHook()
 {
     // http://localhost/2014-2015/cijferregistratie/users/adduser/123
     // users/adduser/123
     global $url;
     echo $url;
     
     // Hiermee zetten we de url onderdelen in een array
     $urlArray = explode('/', $url);
     
     var_dump($urlArray);
     
     $controller = $urlArray[0];  // $controller = 'users'
     
     echo $controller;
     
     array_shift($urlArray);
     
     var_dump($urlArray);
     
     $action = $urlArray[0]; //$action = 'addusers' (method in de users class)
     
     echo $action;
     
     array_shift($urlArray);
     
     var_dump($urlArray);
     
     $queryString = $urlArray; //$queryString is de argumentenlijst
     
     // Dit word de mapnaam waar de controller in komt te staan
     $controllerName = strtolower($controller);
     
     echo "Mapnaam: ".$controllerName."<br>";
     
     
     $controller = ucwords(strtolower($controller));
     
     $model = rtrim(strtolower($controller), 's');
     
     echo "Model: ".$model."<br>";
     
     // Dit is de naam van de controller class
     $controller = $controller."Controller";
     
     echo "Controller: ". $controller. "<br>";
     
     
     
     
     
 }

 function __autoload($classname)
 {
     
 }

 callHook();
?>