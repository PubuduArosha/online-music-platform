<?php

class Playlist_model extends Model{

    public function __construct(){
               
    }

    public function getPlaylistsImgs($userID ){
        $DB = Database::getDbConnection();
        $ls = (int) $userID;
        $sql = "SELECT ArtworkSrc FROM Playlists where ListnerID = " . $ls." LIMIT 6" ;
        $result = $DB->queryData( $sql );
        return $result;
    }


    public function getAllPlaylists($userID ){
        $DB = Database::getDbConnection();
        $ls = (int) $userID;
        $sql = "SELECT * FROM Playlists where ListnerID = " . $ls ;
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function PublicPlaylists($userID ){
        $DB = Database::getDbConnection();
        $ls = (int) $userID;
        $sql = "SELECT * FROM playlists where Privacy = 1 and ListnerID != ".$ls." LIMIT 12";
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function getPlaylistSongs($PlaylistID){
        $DB = Database::getDbConnection();
        $PID = (int) $PlaylistID;
        $sql = "SELECT s.* ,  a.FirstName , a.LastName FROM  playlistsongs ps , songs s , artists a where ps.playlistID = ". $PID." and ps.SongID = s.SongID and a.ArtistID = s.ArtistID";  
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function getPlaylist( $PlaylistID ){
        $DB = Database::getDbConnection();
        $PID = (int) $PlaylistID;
        $sql = "SELECT * FROM Playlists where PlaylistID = " .  $PID ;  
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function insertPlaylist($playlistName , $Description , $ImgSrc  ){
        $DB = Database::getDbConnection();
        $sql=" INSERT INTO playlists ( PlaylistName, ListnerID, ArtworkSrc, CreatedDate , Description ) VALUES 
        ( '".$playlistName."', ".Session::get('UserID')." , '".$ImgSrc."', '".date("y-m-d")."' , '".$Description."')";
        $result = $DB->insertData($sql);
        return $result;
    }

    public function addSongToPlaylist( $PID , $SID  ){
        $DB = Database::getDbConnection();
        $sql="INSERT INTO  playlistsongs ( PlaylistID, SongID ) VALUES ( ".$PID." , ".$SID.")";
        $result = $DB->insertData($sql);
        return $result;
    }

    public function updatePlaylistPrivacy( $PID , $PR  ){
        $DB = Database::getDbConnection();
        $sql="UPDATE playlists SET Privacy  =  ".$PR."   WHERE  PlaylistID  =  ".$PID;
        $result = $DB->insertData($sql);
        return $result;
    }

    public function getPublicPlaylists(){
        $DB = Database::getDbConnection();
        $result = $DB->queryData( " SELECT p.PlaylistID,PlaylistName ,p.ArtworkSrc, l.FirstName , l.LastName ,l.ListnerID FROM playlists p , listeners l where p.ListnerID = l.ListnerID and Privacy = 1");
        return $result;
    }

}

?>