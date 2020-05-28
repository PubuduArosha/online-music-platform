<?php
   $model = new Songs_model();
   $Song = $model->getSong($this->data['data']);
   $row=mysqli_fetch_row($Song);
 
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
   <link rel="stylesheet" href="<?=PR?>/css/song.css">
   <link rel="stylesheet" href="<?=PR?>/css/comments.css">
    
    
    <title>Document</title>
    
   
</head>
<body>
 
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
                            <div class="col-md-2 offset-md-0 col-sm-6 offset-sm-3 col-12 song-image-container"
                            style="background-image:url(<?=PR?><?=$row[5]?>) !important;"
                            >
                           
                            </div>
                            <div class="col-md-10 col-sm-12 col-12"  >
                                <h2 class="song-name-text"  ><?=$row[1]?> - <?=$row[10]?>  <?=$row[11]?>
                                <i onclick="playpause()" class="fa fa-pause-circle fa-lg" id="playpauseIcon"></i>
                                <button id="addModel" class="btn btn-info btn-sm" ><b><i class="fa fa-plus-circle"></i> Playlist</b></button>
                                <div id="waveform" width="100%"></div>
                              </div></div>
                              </div>
                            
                 
                    </div>
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="row card-container" >
                         <!-------------------------------------------------------------------------------------------------------->
                         <?php   
                         $CommentView = new View();    
                         $CommentView->assign('songID', $row[0] );
                         $CommentView->render('Comments/index');
                ?>                           
         <!-------------------------------------------------------------------------------------------------------->
                        <div class="col-sm-4 col-12" >
                            <h3 class="more"><b>More songs from Artist</b></h3>
                        
                            <div class="card-wrapper">
                                <div class="col-md-10 col-sm-12  card" style="background-image: linear-gradient(0deg, rgba(9,9,16,1) 30%, rgba(0,0,0,0.01) 100%) ,url(<?=PR?>/uploads/02.jpg)">
                                  <h6  class="Song">Heena Maka <br><span class="artist-name">Harshadewa ft. Ravi Jay</span></h6>
                                 
                                </div>
                              </div>
                              <div class="card-wrapper">
                                  <div class="col-md-10 col-sm-12  card" style="background-image:linear-gradient(0deg, rgba(9,9,16,1) 30%, rgba(0,0,0,0.01) 100%) ,  url(<?=PR?>/uploads/03.jpg)">
                                    <h6  class="Song">Nadagam Geeya <br><span class="artist-name">Ridma Weerawardhana</span></h6>
                                  </div>
                                </div>
                        </div>
                  </div>
             
             
              
          
        </div>
          </div>
          </div>
     
          <script src="<?=PR?>/js/Vibrant.js" ></script>
          <script src="https://unpkg.com/wavesurfer.js"></script>
        <script>
        var color = "red"
        var img = document.createElement('img');
          img.setAttribute('src', '<?=PR?> <?=$row[5]?>')
          img.addEventListener('load', function() {
    var vibrant = new Vibrant(img);
    var swatches = vibrant.swatches()
    var rgb = swatches["DarkVibrant"].getRgb();
     window.color =  "rgba( "+rgb[0] +", " + rgb[1]+", " + rgb[2] + ", " + ".2 )" ;
       
     document.getElementById("page-content-wrapper").style.background = "linear-gradient(135deg, " + color + 
     " 0%, rgba(0,0,0,0) 110%)";

});
  
var wavesurfer = WaveSurfer.create({
    container: '#waveform',
    waveColor: '#f4f4f4',
    progressColor: '#16a085',
    hideScrollbar : true,
    barWidth : 3,
    cursorWidth : 4,
    backend: 'MediaElement',
    cursorColor : "#1abc9c"
});
wavesurfer.setHeight(180);

       
    function playpause(){
      wavesurfer.playPause();
      if(wavesurfer.isPlaying()  === true ){
        document.getElementById("playpauseIcon").className = "fa fa-pause-circle fa-lg";
      }else{
        document.getElementById("playpauseIcon").className = "fa fa-play-circle fa-lg";
      }
      
    }
    document.addEventListener("DOMContentLoaded", function() {
        wavesurfer.load('<?=PR?><?=$row[9]?>');
        wavesurfer.play();
        
});
    
       </script>
    <!-------------------------------------------------------------------------------------------->
    <?php   
          $view = new View();
          $view->assign( 'SongID' , $row[0] );
          $view->render('Playlist/addSongToPlaylist');
    ?>
</body>
</html>