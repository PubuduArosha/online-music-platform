<?php

class Songs_model extends Model{

    public function __construct(){
               
    }

    public function getSong($songID){
        $DB = Database::getDbConnection();
        $song = (int) $songID;
        $sql = "select s.* , a.FirstName , a.LastName  from songs s , artists a where s.ArtistID = a.ArtistID AND s.SongID = " . $song;
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function getArtistAllSongs($ArtistID){
        $DB = Database::getDbConnection();
        $Artist = (int) $ArtistID;
        $sql = "select * from songs where ArtistID  = " . $Artist;
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function getAllSongs(){
        $DB = Database::getDbConnection();
        $result = $DB->queryData( "select s.* , a.FirstName , a.LastName  from songs s , artists a where s.ArtistID = a.ArtistID ");
        return $result;
    }

    public function insertSong($songName , $ArtistID , $genre , $albumArt , $Duration , $Description , $year, $songSrc  ){
        $DB = Database::getDbConnection();
        $sql="INSERT INTO songs ( SongName, ArtistID,  UploadedDate,  Genre,  AlbumArtSrc,  Duration, Description, year, SongSrc) VALUES 
        ( '".$songName."', ".$ArtistID." , '".date("y-m-d")."', '".$genre."', '".$albumArt."', 
        '".$Duration."', '".$Description."' , ".$year." , '".$songSrc."')";
        $result = $DB->insertData($sql);
        return $result;
    }

    public function countSongs($songID){
        $DB = Database::getDbConnection();
        $sql = "INSERT INTO songcount ( ListnerID, SongID, Date ) VALUES (  ".Session::get('UserID')." , ".$songID." , '".date("y-m-d")."' )";
        $result = $DB->insertData($sql);
        return $result;
    }

    public function getTotalAudience($ArtistID){
        $DB = Database::getDbConnection();
        $AID = (int) $ArtistID;
        $sql = "SELECT sc.Date , count(*) as'Count' FROM songcount sc , songs s where s.SongID = sc.SongID 
        and s.ArtistID = ".$AID." group by sc.Date order by sc.date";
        $result = $DB->queryData( $sql );
        return $result;
    }


}

?>