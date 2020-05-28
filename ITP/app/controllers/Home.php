<?php

class Home extends Controller{

    public function __construct($controller , $action){
        parent::__construct($controller , $action);
    }

    public function LandAction(){
        $this->view->render('Home/LandingPage');
    }

    public function indexAction(){
        if( Session::get('UserID') === null ){
            $this->view->render('Home/LandingPage');
        }else{
            $this->view->render('Home/index');
        }
        
       
       
    }

    public function viewAction(){
        echo 'Home view function';
    }
}

?>