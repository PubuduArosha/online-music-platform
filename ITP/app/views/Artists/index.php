<?php

   $AM = new Artists_model();
   $SM = new Songs_model();
   $AD = $AM->getArtist( $this->data['ArtistID'] ); 
   $SongList = $SM->getArtistAllSongs( $this->data['ArtistID'] );
   $AristDetails = mysqli_fetch_row($AD);
   $zeroSongs = ( $SongList->num_rows > 0 ) ?  true : false;
   
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
  <link rel="stylesheet" href="<?=PR?>/css/Artist.css">
    
    <title>Document</title>
</head>
<body style="background: rgb(12,12,12) !important;">
 
    <div class="d-flex" id="wrapper">

         <!-- Sidebar -->
         <?php    
            $navbar = new View();
            $navbar->assign('Selected', '' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
    
          <div class="container-fluid">
              
           <div class="row card-container" style="padding: 0px !important">
            <div class="col-md-12 Artist-cover"
            style=" background-image:  linear-gradient(0deg, rgba(12,12,12,1) 10%, rgba(12,12,12,0.2) 100%) ,url(<?=PR?><?=$AristDetails[5]?>);"
            >
              <h1 class="artist-name-text"><?=$AristDetails[1]?> <?=$AristDetails[2]?><br>
                  <button style="padding: 5px 20px; font-size: 0.25em; font-style: normal !important" type="button"  class="btn btn-success btn-lg">
                    <b><i class="fa fa-play-circle "></i> Play</b></button>
                    <button style="padding: 5px 20px; font-size: 0.25em; font-style: normal !important" type="button"  class="btn btn-warning btn-lg">
                        <b> Overview</b></button>
              </h1>
             
            </div>
            </div>
            <!----------------------------------------------------------------------------------------------------------------------->
            <div class="row card-container" style="margin-bottom: 20px">
                <div class="col-md-12 col-12 songs-list" >
                    <br>
                    <h3 class="app-header" style="margin-bottom: 20px">Popular Songs</h3>
                    <?php  
                        while($row = $SongList->fetch_assoc()) {
                    ?>
                    <a href = "<?=PR?>/Songs/View/<?=$row['SongID']?>">
                    <div class="row song-row">
                        <div class=" col-10  text-left " >
                           <h4  class="song-text" > <i class="fa fa-music" style="margin-right: 15px"></i>  <?=$row['SongName']?>  </h4>
                        </div>
                        <div class=" col-2 text-right">
                           <h4 class="song-text" >  <?=$row['Duration']?> </h4>
                        </div>
                        
                    </div>
                  </a>
                    <?php   }  ?>
                    </div>
                    <!-- <div class="col-md-4 " >
                      <br>
                      <h3 class="app-header" style="margin-bottom: 20px">About Artist</h3>
                      <p class="about ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                         remaining essentially unchanged. It was popularised </p>
                    </div> -->
                    
                  </div>
            <!----------------------------------------------------------------------------------------------------------------------->
            <div class="row card-container" style="margin-bottom: 60px">
                <div class="col-md-12 songs-list" >
                  <br>
                    <h3 class="app-header"><b>New Release</b></h3>
                    <div class="row">
                    <div class="col-md-2  col-sm-4 col-6  card-wrapper">
                      <div class="col-md-12 card" style="background-image: linear-gradient(0deg, rgba(9,9,16,1) 30%, rgba(0,0,0,0.01) 100%) ,url(<?=PR?>/uploads/02.jpg)">
                        <h6  class="Song">Heena Maka <br><span class="artist-name">Harshadewa ft. Ravi Jay</span></h6>
                       
                      </div>
                    </div>
                    <div class="col-md-2  col-sm-4 col-6 card-wrapper">
                      <div class="col-md-12 card" style="background-image:linear-gradient(0deg, rgba(9,9,16,1) 30%, rgba(0,0,0,0.01) 100%) ,  url(<?=PR?>/uploads/03.jpg)">
                        <h6  class="Song">Nadagam Geeya <br><span class="artist-name">Ridma Weerawardhana</span></h6>
                      </div>
                    </div>
                    <div class="col-md-2  col-sm-4 col-6 card-wrapper">
                      <div class="col-md-12 card" style="background-image:linear-gradient(0deg, rgba(9,9,16,1) 30%, rgba(0,0,0,0.01) 100%),  url(<?=PR?>/uploads/04.jpg)">
                        <h6  class="Song">Kampa Nowan Mahamaya <br><span class="artist-name">Ridma Weerawardhana</span></h6>
                      </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6  card-wrapper">
                      <div class="col-md-12 card" style="background-image:linear-gradient(0deg, rgba(9,9,16,1) 30%, rgba(0,0,0,0.01) 100%) ,  url(<?=PR?>/uploads/05.jpg)">
                        <h6  class="Song">Kuveniyee Ma <br><span class="artist-name">Ridma Weerawardhana</span></h6>
                      </div>
                    </div>
                 
                   
                   
                    </div>
                </div>
              </div>
          </div>   
          </div>
          <!----------------------------------------------------------------------------------------------------------------------->
         
            </div>
        </div>
       
    
     
</body>
</html>