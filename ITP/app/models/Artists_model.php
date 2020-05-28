<?php

class Artists_model extends Model{

    public function __construct(){
               
    }

    public function getArtist($ArtistID){
        $DB = Database::getDbConnection();
        $AID = (int) $ArtistID;
        $sql = "SELECT * FROM music_streaming.artists where ArtistID = " . $AID;
        $result = $DB->queryData( $sql);
        return $result;
    }

    public function getAllArtist(){
        $DB = Database::getDbConnection();
        $sql = "SELECT * FROM artists";
        $result = $DB->queryData( $sql);
        return $result;
    }

    public function ManageAllArtist(){
        $DB = Database::getDbConnection();
        $sql = "SELECT  a.* , COUNT(*) FROM artists a , songs s  where a.ArtistID = s.ArtistID group by a.ArtistID";
        $result = $DB->queryData( $sql);
        return $result;
    }

    // public function test(){
    //     $DB = Database::getDbConnection();
    //     $sql = "INSERT INTO manager ( AccessLevel, FirstName, LastName, Age, email) VALUES
    //      ( 'admin', 'Sergey', 'Brin', '31', 'sergeyb7@gmail.com')";
    //     $result = $DB->insertData($sql);
    //     return $result;
    // }

}

?>