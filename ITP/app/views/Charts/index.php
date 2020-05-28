<?php
   $model = new Charts_model();
   $results = $model->getAllCharts();
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
 <style>
       col-md-12 card:hover{
		transform: scale(1.3);
		background: #gray;
		z-index: 2;
		box-shadow: 5px 5px 5px #000;
		
	}
    
    
</style>
</head>
<body>
 
    <div class="d-flex" id="wrapper">

         <!-- Sidebar -->
         <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'Chart' );
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
                <h3 class="app-header"><b>Top Charts</b></h3>
                <div class="row">
              <?php   while($row = $results->fetch_assoc()) {   ?>
                 <a href="<?=PR?>/Charts/view/<?= $row['ChartID']?>" >
                 <div class="col-md-2  col-sm-4 col-6  card-wrapper">
                  <div class="col-md-12 card" style="background-image: linear-gradient(0deg, rgba(9,9,16,1) 30%, rgba(0,0,0,0.01) 100%) ,url(<?=PR?><?=$row['chartImgSrc']?> )">
                    <h6  class="Song"><?=$row['ChartName']?> <br></h6>
                   </div></a>
                  </div>
              <?php  }  ?>
                
               
                </div>
          

               
                </div>
            </div>
          </div>
          <!----------------------------------------------------------------------------------------------------------------------->
         
          <!----------------------------------------------------------------------------------------------------------------------->
          
            </div>
        </div>
          </div>
          </div>
    
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
        
    
      
</body>
</html>