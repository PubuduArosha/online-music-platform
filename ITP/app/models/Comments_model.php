<?php

class Comments_model extends Model{

    public function __construct(){
               
    }

    public function getAllComments( $songID ){
        $DB = Database::getDbConnection();
        $SD = (int) $songID;
        $sql = "SELECT * , l.FirstName , l.LastName FROM comments c  , listeners l where  c.ListnerID = l.ListnerID and  c.SongID = " . $SD ;
        $result = $DB->queryData( $sql );
        return $result;
    }


}

?>