<?php

class Login_model extends Model{

    public function __construct(){
               
    }

    public function validateUserLogin( $Uname , $Password ){
        $DB = Database::getDbConnection();
        $sql = "SELECT * FROM listeners where email = '".$Uname."' and password = '". $Password . "'";
        $result = $DB->queryData( $sql);
        return $result;
    }

    public function validateArtistLogin( $Uname , $Password ){
        $DB = Database::getDbConnection();
        $sql = "SELECT * FROM artists where email = '".$Uname."' and Password = '". $Password . "'";
        $result = $DB->queryData( $sql);
        return $result;
    }
    
    public function validateAdminLogin( $Uname , $Password ){
        $DB = Database::getDbConnection();
        $sql = "SELECT * FROM manager where email = '".$Uname."' and password = '". $Password . "'";
        $result = $DB->queryData( $sql);
        return $result;
    }


}

?>