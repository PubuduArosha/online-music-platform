<?php

class Charts_model extends Model{

    public function __construct(){
               
    }
    public function getChartImgs(){
        $DB = Database::getDbConnection();
        $sql = "SELECT chartImgSrc FROM charts LIMIT 6" ;
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function getAllCharts(){
        $DB = Database::getDbConnection();
        $sql = "SELECT * FROM charts";
        $result = $DB->queryData( $sql );
        return $result;
    }

    public function getChart($ChartID){
        $DB = Database::getDbConnection();
        $chart = (int) $ChartID;
        $sql = "SELECT * FROM music_streaming.charts where ChartID = " . $chart;
        $result = $DB->queryData( $sql );
        return $result;

    }
  


}

?>