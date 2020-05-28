<?php
   $model = new Home_model();
   $PM = new Playlist_model();
   $CM = new Charts_model();
   $ArtistModel = new Artists_model();

   $CImages = $CM->getChartImgs();
   $PMImages = $PM->getPlaylistsImgs( Session::get('UserID') );
   $Trendingartists = $ArtistModel-> getAllArtist();
   $recentSongs = $model->getRecentSongs();
  
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
   <link rel="stylesheet" href="<?=PR?>/css/navbar.css">
    
    <title>Document</title>
</head>
<body>
 
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'Home' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper" style="padding: 0px 2% !important">
       

          <div class="container-fluid">
              <div class="row card-container" >
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
              </div>
              
           <div class="row card-container ">
            <div class="col-md-12" >
              <br>
                <h3 class="app-header"><b>New Release</b></h3>
                <div class="row">
                <?php  if ($recentSongs->num_rows > 0) {
                         while($row = $recentSongs->fetch_assoc()) {   ?> 
                        <a href="<?=PR?>/Songs/View/<?=$row['SongID']?>" >
                  <div class="col-md-2  col-sm-4 col-6  card-wrapper">
                  <div class="col-md-12 card" style="background-image: linear-gradient(0deg, rgba(9,9,16,1) 30%, rgba(0,0,0,0.01) 100%) ,url(<?=PR?><?=$row['AlbumArtSrc']?>">
                    <h6  class="Song"><?=$row['SongName']?> <br><span class="artist-name"><?=$row['FirstName']?> <?=$row['LastName']?></span></h6>
                  </div>
                         </a>
                </div>
                         <?php  }}   ?> 
               
                </div>
            </div>
          </div>
          <!----------------------------------------------------------------------------------------------------------------------->
          <div class="row card-container  mt-5">
              <div class="col-md-12" >
                <br>
                  <h3 class="app-header"><b>Recommendation </b></h3>
                  <div class="row ">
                  <a href="<?=PR?>/Charts" >
                      <div class="col-md-3  col-sm-4 col-xs-4 card-wrapper" >
                        <div class="col-md-12">
                        <div class="row" >
                        <?php   while($row = $CImages->fetch_assoc()) {   ?> 
                            <div class="col-4 sixCardImg" style="background-image:linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(<?=PR?><?=$row['chartImgSrc']?>"></div>
                            <?php   }  ?>
                            <?php  for( $x = $CImages->num_rows ; $x < 6 ; $x++   ) {   ?> 
                            <div class="col-4 sixCardImg" style="background-image:linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(<?=PR?>/uploads/playlistIcon.jpg"></div>
                            <?php   }  ?>
                        </div>
                        
                        <h3  class="sixCardText">Charts</h3>
                      </div></a>
                      </div> 

                      <!----------------------------------->
                      <a href="<?=PR?>/Playlist" >
                      <div class="col-md-3  col-sm-4 col-xs-4 card-wrapper" >
                          <div class="col-md-12">
                          <div class="row" >
                            <?php   while($row = $PMImages->fetch_assoc()) {   ?> 
                            <div class="col-4 sixCardImg" style="background-image:linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(<?=PR?><?=$row['ArtworkSrc']?>"></div>
                            <?php   }  ?>
                            <?php  for( $x = $PMImages->num_rows ; $x < 6 ; $x++   ) {   ?> 
                            <div class="col-4 sixCardImg" style="background-image:linear-gradient(0deg,rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(<?=PR?>/uploads/playlistIcon.jpg"></div>
                            <?php   }  ?>
                            
                          </div>
                          
                          <h3  class="sixCardText">Playlists</h3>
                        </div></a>
                        </div> 
                    <!---------------------------------------->
                  </div>
              </div>
            </div>
          <!----------------------------------------------------------------------------------------------------------------------->
          <div class="row card-container  mt-5">
              <div class="col-md-10 col-sm-10" >
                <br>
                  <h3 class="app-header"><b>Artists </b></h3>
                  <div class="row" style="background-color: #1313135d;padding-top : 8px;
                  border-radius: 10px; ">
                   <?php  if ($Trendingartists->num_rows > 0) {
                    while($row = $Trendingartists->fetch_assoc()) {   ?> 
                      <a href="<?=PR?>/Artist/View/<?=$row['ArtistID'] ?>" >
                      <div class="col-md-2  col-sm-4 col-6 card-wrapper" style="padding: 0px; !important">
                              <div class="col-md-12" style="padding: 0px; !important">
                              <div class="avatar" 
                              style="background-image:
                              radial-gradient(circle, rgba(0,0,0,0.3) 46%, rgba(0,0,0,1) 88%),
                              url(<?=PR?><?=$row['ProfilePic']?> ); "
                              ></div>
                              <h6 class="artist-text"><?=$row['FirstName']?> <?=$row['LastName']?></h6>
                            </div>
                            </a>
                          </div>
                   
                    <?php } } ?>

           
                      </div> 

                  </div>
              </div>
            </div>
        </div>
          </div>
          </div>
    
    
      
</body>
</html>