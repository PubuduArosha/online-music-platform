<?php

class Home_model extends Model{

    public function __construct(){
               
    }

    public function getRecentSongs(){
        $DB = Database::getDbConnection();
        $result = $DB->queryData( "select s.* , a.FirstName , a.LastName  from songs s , artists a where s.ArtistID = a.ArtistID ");
        return $result;
    }

}

?>