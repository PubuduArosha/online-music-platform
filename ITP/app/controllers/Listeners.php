<?php

class Listeners extends Controller{

    public function __construct($controller , $action){
        parent::__construct($controller , $action);
    }

    public function indexAction(){
        $this->view->render('Home/index');
       
    }

    public function viewAction(){
      
        $this->view->render('Listeners/view_listeners');
    }
}

?>
