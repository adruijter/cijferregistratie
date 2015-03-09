<?php
 class Controller
 {
    // Fields
    private $model;
    private $controller;
    private $action;
    private $template;     
     
     
    // Constructor
    public function __construct($model, $controller, $action)
    {
        $this->model = new $model(); 
        $this->controller = $controller;
        $this->action = $action;
        $this->template = new Template($controller, $action);
        
    }
     
    public function __destruct()
    {
        $this->template->render();
    }
     
 }
?>