<?php

class Charts extends Controller{

    public function __construct($controller , $action){
        parent::__construct($controller , $action);
    }

    public function indexAction(){
        $this->view->render('Charts/index');
       
    }

    public function viewAction($ChartID){
        $this->view->assign('ChartID', $ChartID);

        $this->view->render('Charts/viewChart');
        
}



public function manageChartsAction(){
    $this->view->render('Charts/manageCharts');
    
}
public function chartDetailsAction(){
    $this->view->render('Charts/chartDetails');
}
public function editChartAction($ChartID){
    $this->view->assign('ChartID', $ChartID);
    
    $this->view->render('Charts/editChart');
}
}
?>