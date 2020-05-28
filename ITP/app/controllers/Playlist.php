<?php

class Playlist extends Controller{

    public function __construct($controller , $action){
        parent::__construct($controller , $action);
    }

    public function indexAction(){
        $this->view->render('Playlist/index');
       
    }

    public function viewAction($PlaylistID){
        $this->view->assign('playlistID', $PlaylistID );
        $this->view->render('Playlist/viewPlaylist');
    }

    public function manageAction(){
        $this->view->render('Playlist/managePlaylist');
    }

    public function shareAction( $playlistID , $privacy ){
          $PM = new Playlist_model();
          $PR = (int) $privacy;
          $changedPrivacy = ( $PR === 1 ) ? 0 : 1; 
          $R = $PM->updatePlaylistPrivacy( (int) $playlistID , $changedPrivacy  );
          header("Location: ".PR."/Playlist/view/".$playlistID );
    }

    public function addAction( $PlaylistID , $SongID ){
        $PM = new Playlist_model();
        $R = $PM->addSongToPlaylist( (int) $PlaylistID , (int) $SongID  );
        header("Location: ".PR."/Playlist/view/".$PlaylistID );
    }

    public function uploadAction(){
       
        $PM = new Playlist_model();
        $AlbumArtPath = Util::fileUpload(  $_FILES['playlistArt'] , 'uploads/Playlists/' );

        
        $result = $PM->insertPlaylist( $_POST['name'] , $_POST['description'] , $AlbumArtPath  );
        if($result != null ){
            header("Location: ".PR."/Playlist/");
        }
    }

    
}
?>