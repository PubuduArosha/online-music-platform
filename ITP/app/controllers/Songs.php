<?php

class Songs extends Controller{

    public function __construct($controller , $action){
        parent::__construct($controller , $action);
    }

    public function indexAction(){
        $this->view->render('Home/index');
    }

    public function viewAction($songID){ 
        $SM  = new Songs_model();
        $result = $SM->countSongs($songID);
        $this->view->assign('data', $songID);
        $this->view->render('Songs/index');
    }

    public function manageAction(){
        $this->view->render('Songs/manageSongs');
    }

    public function mysongsAction(){
        $this->view->render('Songs/manageSongArtist');
    }

    public function addAction(){
        
        $this->view->render('Songs/addSong');
    }

    public function uploadAction(){
      
       $parts = explode('-',   $_POST['date'] );
       $year = $parts[0];
       echo $_FILES['mp3File']['error'] ;
       $SM = new Songs_model();
      $AlbumArtPath = Util::fileUpload( $_FILES['albumArtFile'] , 'uploads/songs/albumart/' );
       $SongPath = Util::fileUpload(  $_FILES['mp3File'] , 'uploads/songs/' );
        echo $SongPath;
       if(  $AlbumArtPath != null &&  $SongPath != null ){
          $result =  $SM->insertSong(  $_POST['songName'] , Session::get('UserID') ,  $_POST['genre'] , $AlbumArtPath , $_POST['duration'] ,  $_POST['description'] , $year,  $SongPath  );
          
          header("Location: ".PR."/Songs/mysongs" );
        }
      
    }
}

?>  