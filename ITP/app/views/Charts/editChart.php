<?php
   $model = new Charts_model();
   $results = $model->getChart($this->data['ChartID']);
   $row=mysqli_fetch_row( $results);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="<?=PR?>/css/bootstrap.min.css" >
   <link href="<?=PR?>/css/simple-sidebar.css" rel="stylesheet">
   <link rel="stylesheet" href="<?=PR?>/css/main.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=PR?>/css/chart.css">

    
    <title>Document</title>
    <style>
        /*       .song-image-container{
            
            background-image:url(<?=PR?><?=$row[3]?>);
        }*/
       
        .d-flex{
            
            background-color: aliceblue;
            
        }
        h4{
            
            color: black;
        }
     
    </style>
</head>
<body >
 
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'Chart' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
    
          <div class="container-fluid">
            
              <div class="row card-container" style="padding: 0px !important;">
                <div class="col-md-12" id="song-banner" >
                  <div class="row" >
                    <div class="col-md-6 offset-md-3 mt-5">
                        <div class="p-1 bg-dark rounded rounded-pill  mb-1">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <button id="button-addon2" type="submit" class="btn btn-link text-success"><i class="fa fa-search"></i></button>
                              </div>
                              <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon2" class="form-control border-0 bg-dark">
                            </div>
                          </div>
                    </div>
                  </div></div>
                      <div class="col-12 song-container" >
                              <div class="row" style="padding: 0px !important" >
                            <div class="col-md-3  col-sm-6  col-12 song-image-container" style="background-image:url(<?=PR?><?=$row[3]?> )">
                           
                            </div>
                            <div class="col-md-9 col-sm-6 col-12 pl-4"  >
                              <h4 class="descrption card-subtitle text-muted mt-2" ><b>TOP CHART</b></h4>
                                <h2 class="song-name-text"  style="color: black" ><?=$row[1]?></h2>
                                <h6 class="descrption text-muted mt-2"><?=$row[2]?></h6>
                                   <a href="ManageSongAdmin.html">   <button style="padding: 10px 20px; font-size: 1em; font-style: normal !important" type="button"  class="btn btn-success btn-lg">
                                      <b><i class="fa fa-plus"></i>Add Songs</b></button></a>
                              </div></div>
                              </div>
                            
                 
                    </div>
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="row card-container" >
                        <div class="col-md-12 mt-4 playlist-table-wrapper"  >
                            <table class="table " style="color: black">
                                <thead>
                                  <tr>
                                    <th scope="col" width="30%" >TITLE</th>
                                    <th scope="col" width="30%" >ARTIST</th>
                                    <th scope="col" width="20%">DATE</th>
                                    <th scope="col" width="10%">TIME</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Back At One</th>
                                    <td>Mark Wils</td>
                                    <td>2019-05-12</td>
                                    <td>4:34</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Hold On </th>
                                    <td>Jamie Walters</td>
                                    <td>2019-05-12</td>
                                    <td>4:34</td>
                                  </tr>
                                  <tr>
                                      <th scope="row">I Believe</th>
                                      <td>Belessid Union of Souls</td>
                                      <td>2019-10-11</td>
                                      <td>3:22</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">I Believed You </th>
                                      <td>FLETCHER</td>
                                      <td>2019-04-13</td>
                                      <td>4:34</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">What I Like About You</th>
                                        <td>Jonas Blue</td>
                                        <td>2019-05-15</td>
                                        <td>2:56</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Kawulu Piyanpath </th>
                                        <td>Kasun Kalhara</td>
                                        <td>2019-04-04</td>
                                        <td>3:31</td>
                                      </tr>
                    </div>
                    </div>
             
             
              
          
        </div>
          </div>
          </div>
     
         
      
    
      
</body>
</html>