<?php
 
  $model = new Playlist_model();
  $results = $model->getAllPlaylists( Session::get('UserID') );
  $results1 = $model->PublicPlaylists( Session::get('UserID') );
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
   <link rel="stylesheet" href="<?=PR?>/css/AddPlaylist.css">
  
    <title>Document</title>
</head>
<body>
 
    <div class="d-flex" id="wrapper">

         <!-- Sidebar -->
         <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'Playlist' );
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
                <h3 class="app-header"><b>My Playlists</b></h3>
                <div class="row">
                <?php   while($row = $results->fetch_assoc()) {   ?>
                  <a href="<?=PR?>/Playlist/view/<?=$row['PlaylistID']?>" >
                <div class="col-md-2  col-sm-4 col-6  card-wrapper">
                  <div class="col-md-12 card" style="background-image: linear-gradient(0deg, rgba(9,9,16,1) 20%, rgba(0,0,0,0.01) 100%) ,url(<?=PR?><?=$row['ArtworkSrc']?>)">
                    <h6  class="Song" style="font-size : 1.2em !important;" ><?=$row['PlaylistName']?> <br></h6>
                   
                  </div> </a>
                  
                </div>
                <?php  }  ?>
                
                <div class="col-md-2  col-sm-4 col-6 card-wrapper" id="myBtn">
                    <div class="col-md-12 card" style="background-image: ">
                        <h3  class="sixCardText addbtntext" >
                          <img src="<?=PR?>/uploads/AddBtn.png" class="image-add-btn"><br>
                          Add Playlist</h3></a>
                    </div>
                   
                  </div>
                </div>
           </div></div><br>
<!--------------------------------------------------------------------------------------------------------------------------------->
                <div class="row card-container ">
            <div class="col-md-12" >
              <br>
                <h3 class="app-header"><b>Public Playlists</b></h3>
                <div class="row">
                <?php   while($row1 = $results1->fetch_assoc()) {   ?>
                  <a href="<?=PR?>/Playlist/view/<?=$row1['PlaylistID']?>" >
                <div class="col-md-2  col-sm-4 col-6  card-wrapper">
                  <div class="col-md-12 card" style="background-image: linear-gradient(0deg, rgba(9,9,16,1) 20%, rgba(0,0,0,0.01) 100%) ,url(<?=PR?><?=$row1['ArtworkSrc']?>)">
                    <h6  class="Song" style="font-size : 1.2em !important;" ><?=$row1['PlaylistName']?> <br></h6>
                   
                  </div> </a>
                  
                </div>
                <?php  }  ?>
             
                </div>
   
                <br>
               
               
                </div>
               
            </div>
            

          </div>
         
         
          <!----------------------------------------------------------------------------------------------------------------------->
         
          <!----------------------------------------------------------------------------------------------------------------------->
          
            </div>
      
    <?php   
          $view = new View();
          $view->render('Playlist/addPlaylist');
    ?>
   
</body>
</html>