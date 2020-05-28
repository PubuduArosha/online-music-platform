<?php

class Login extends Controller{

    public function __construct($controller , $action){
        parent::__construct($controller , $action);
    }

    public function ArtistAction(){
        $this->view->render('Login/artistLogin');
    }

    public function ListenerAction(){
       $this->view->render('Login/listenerLogin');
        
    }

    public function AdminAction(){
      $this->view->render('Login/adminLogin');
       
   }

   public function ValidateAdminAction(){
      $userName =  $_POST['userName'];
      $password =  $_POST['password'];
      $LM = new Login_model();
      $result = $LM->validateAdminLogin(  $userName , $password );

      if( $result->num_rows == 1 ){
         $row = mysqli_fetch_row($result);
         Session::set( 'UserName' , $row[2] . " " . $row[3]  );
         Session::set( 'UserID' , $row[0]  );
         Session::set( 'Access' , 2 );
         header("Location: ".PR."/Admin/");
      }else{
         header("Location: ".PR."/Login/Admin");
      }
       
   }

    public function ValidateAction( $id ){
       $userName =  $_POST['userName'];
       $password =  $_POST['password'];
       echo $password;
       $LM = new Login_model();
       
       if( $id === 'Artist' ){
          $result = $LM->validateArtistLogin(  $userName , $password );
       }else if( $id === 'Listener' ){
          $result = $LM->validateUserLogin(  $userName , $password );
       }

       if( $result->num_rows == 1 ){
            $row = mysqli_fetch_row($result);
            Session::set( 'UserImage' , $row[6]  );
            Session::set( 'UserName' , $row[1] . " " . $row[2]  );
            Session::set( 'UserID' , $row[0]  );

            if( $id === 'Artist' ){
                Session::set( 'Access' , 1 );
                header("Location: ".PR."/Songs/mysongs");
             }else if( $id === 'Listener' ){
                Session::set( 'Access' , 0 );
                header("Location: ".PR."/Home/");
             }
            
           
       }else{
         header("Location: ".PR."/Login/Listener");
       }
    }

    public function LogoutAction(){
      if( Session::get('Access') == '0' ){
        $location = "/Login/Listener";
     }elseif( Session::get('Access') == '1' ){
        $location = "/Login/Artist";
     }elseif( Session::get('Access') == '2' ){
        $location = "/Login/Admin";
     }
        session_destroy(); 
        header("Location: ".PR.$location);
         
     }

}

?>