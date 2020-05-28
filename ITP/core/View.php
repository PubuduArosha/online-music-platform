<?php
class View{

    protected $data;
    public function render($viewName){
        $viewAray = explode( '/' , $viewName );
        $viewString = implode( DS , $viewAray );

        if( file_exists( ROOT . DS . 'app' . DS . 'views'. DS .  $viewString . '.php' )){
            include(ROOT . DS . 'app' . DS . 'views'. DS .  $viewString . '.php');
        }else{
            die( 'This view \"' . $viewName . '\" does not exist');
        }
    }
    
    function assign($key, $val) {
        $this->data[$key] = $val;
    }
}
?>