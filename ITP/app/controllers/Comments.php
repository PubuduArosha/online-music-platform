<?php
class Comments extends Controller{

public function __construct($controller , $action){
    parent::__construct($controller , $action);
}

public function ManageCommentsAction(){
    $this->view->render('Comments/ManageComments');
}

}
?>