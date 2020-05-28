<?php

class Listeners_model extends Model{

    public function __construct(){
               
    }

    public function getListeners($ListenerID){
        $DB = Database::getDbConnection();
        $LID = (int) $ListenerID;
        $sql = "SELECT * FROM music_streaming.listeners where ListnerID = " . $LID;
        $result = $DB->queryData( $sql);
        return $result;
    }

    public function getAllListeners(){
        $DB = Database::getDbConnection();
        $sql = "SELECT * FROM listeners";
        $result = $DB->queryData( $sql);
        return $result;
    }

}

?>