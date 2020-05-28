<?php

class Subscriptions_model extends Model{

    public function __construct(){
        
    }

   
    public function getAllSubscriptions($ArtistID){
        $DB = Database::getDbConnection();
        $Artist = (int) $ArtistID;
        $sql = "SELECT * FROM subscription where ArtistID = " . $Artist;
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function getLatestSubscription($ArtistID){
        $DB = Database::getDbConnection();
        $Artist = (int) $ArtistID;
        $sql = "SELECT * FROM  subscription where ArtistID = ".$Artist." Order By Date DESC LIMIT 1";
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function calMonth( $month){
        $time = strtotime($month);
        return date("Y-m-d", strtotime("+1 month", $time));
    }

    public function getRemainingDays( $startDate , $endDate ){
            return ($endDate - $startDate)/60/60/24;
    }


}

?>