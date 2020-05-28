<?php

class Artist extends Controller{

    public function __construct($controller , $action){
        parent::__construct($controller , $action);
    }

    public function indexAction(){
        $this->view->render('Home/index');
       
    }

    public function manageAction(){
        $this->view->render('Artists/manageArtists');
       
    }

    public function detailsAction(){
        $this->view->render('Artists/artistDetails');
       
    }

    public function viewAction($ArtistID ){
        $this->view->assign('ArtistID', $ArtistID );
        $this->view->render('Artists/index');
    }

   
}

?>