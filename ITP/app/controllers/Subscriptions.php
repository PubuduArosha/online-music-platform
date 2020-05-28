<?php

class Subscriptions extends Controller{

    public function __construct($controller , $action){
        parent::__construct($controller , $action);
    }

    public function indexAction(){
        $this->view->render('Subscriptions/index');
      
    }

    public function addAction(){
        $this->view->render('Subscriptions/addPayments');
      
    }

   
}

?>