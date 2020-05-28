<?php
     $AM = new Artists_model();
     $ArtistsList = $AM->ManageAllArtist();
     $rank = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="<?=PR?>/css/lightbootstrap.min.css" >
   <link href="<?=PR?>/css/simple-sidebar.css" rel="stylesheet">
   <link rel="stylesheet" href="<?=PR?>/css/main.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=PR?>/css/AdminPanel.css">

    
    <title>Document</title>
</head>
<body >
 
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <?php    
            $navbar = new View();
            $navbar->assign('Selected', '' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper" style="background: white;">
    
          <div class="container-fluid">
            
          
              
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="row card-container" >
                        <div class="col-md-12 mt-2 "  >
                                <br>
                                <h3 class="app-header">Manage Artists</h3> 
                     <!------------------------------------------------------------------------------------------------------>
                     <div class="input-group  mt-3 mb-3 col-6 " style="padding: 0px !important; ">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search" ></i></button>
                            </div>
                          </div>
                          
                     <!------------------------------------------------------------------------------------------------------>
                                <div class="table-responsive">
                            <table class="table mysongs ">
                                <thead  class="thead-primary ">
                                  <tr>
                                    <th scope="col"  width="5%" >Rank</th>
                                    <th scope="col" width="25%" >Artist</th>
                                    <th scope="col"  width="20%" >Record Label</th>
                                    <th scope="col" width="15%">Email</th>
                                    <th scope="col" width="10%">Songs Count</th>
                                    <th scope="col" width="10%">Listens</th>
                                    <th scope="col" width="15%"class="actions" >Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = $ArtistsList->fetch_assoc()) {   ?>
                                  <tr>
                                    <th scope="row"> <?=( $rank < 10 ) ? '0'.$rank : $rank ?> </th>
                                    <td><img src="<?=PR?><?=$row['ProfilePic']?>" class="table-image"><?=$row['FirstName']?> <?=$row['LastName']?></td>     
                                    <td><?=$row['RecordLabel']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['COUNT(*)']?></td>
                                    <td>20150</td>
                                    <td> <button class="btn btn-sm btn-success"><i class="fa fa-eye" ></i> View</button></td>
                                  </tr>
                                    <?php  $rank++; }   ?>
                                      </tbody>
                                      </table>
                                      </div>
                                      <div>
                                            <ul class="pagination mt-2">
                                              <li class="page-item disabled">
                                                <a class="page-link" href="#">&laquo;</a>
                                              </li>
                                              <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                              </li>
                                              <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                              </li>
                                              <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                              </li>
                                              <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                              </li>
                                              <li class="page-item">
                                                <a class="page-link" href="#">5</a>
                                              </li>
                                              <li class="page-item">
                                                <a class="page-link" href="#">&raquo;</a>
                                              </li>
                                            </ul>
                                          </div>
                    </div>
                    </div>
                       <!----------------------------------------------------------------------------------------------------------------------->
             
          
        </div>
          </div>
          </div>
     
          <script src="../js/Vibrant.js" ></script>
          <script src="https://unpkg.com/wavesurfer.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
       
          
     
    
      
</body>
</html>