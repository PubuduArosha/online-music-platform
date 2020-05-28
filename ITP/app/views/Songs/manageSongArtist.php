<?php

   $SM = new Songs_model();
   $SongsList = $SM->getArtistAllSongs( Session::get('UserID') );
   $audience = $SM->getTotalAudience( Session::get('UserID') );
   $dates = array();
   $count = 1;
   $total = 0;
   $audienceCount = array();
   foreach($audience as $r) {
            $total += (int) $r['Count'];
            if( $count % 3 == 0 ){
            $dates[] = date("M-d", strtotime($r['Date'])) ; 
            $audienceCount[] = (int) $r['Count'];
            }
            $count++;
    }
    $dateLabels = json_encode($dates);
    $data = json_encode($audienceCount);
    
   
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
   <link rel="stylesheet" href="<?=PR?>/css/navbar.css">
      <link rel="stylesheet" href="<?PR?>/css/ManageSongs.css">
      <link rel="stylesheet" href="<?=PR?>/css/AdminPanel.css">
   

    
   <title>Document</title>
</head>
<body >
 
    <div class="d-flex" id="wrapper">

       <!-- Sidebar -->
       <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'mysongs' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper" style="background: white;">
    
          <div class="container-fluid">
            
                <div class="row card-container" >
                        <div class="col-md-12  "  >
                                <br>
                                <h4 class="app-header" style="font-size: 1.8em !important;"><b>Audience</b>
                                <span  class="btn btn-info btn-sm"><b>In Last 30 Days</b></span>
                                </h4>
                                <h5 class="card-subtitle text-muted"><b><?=$total?> Total Listens</b></h5>
                                <div class="table-responsive">
                                        <canvas id="myChart" width="100%" height="25%"></canvas>
                                        
                                </div>
                        </div>
                </div>
              
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="row card-container" >
                        <div class="col-md-12 mt-4 "  >
                                <br>
                                <h4 class="app-header"><b>My Songs</b>
                                  <button class="btn btn-success btn-sm" onclick="window.location.href='<?=PR?>/Songs/add/'" ><b>Add Songs</b></button>
                                </h4>
                                <div class="table-responsive">
                                <table class="table mysongs ">
                                <thead  class="thead-primary ">
                                  <tr>
                                    <th scope="col"  width="5%">Rank</th>
                                    <th scope="col"  width="25%">Song Name</th>
                                    <th scope="col"  width="15%">Uploaded Date</th>
                                    <th scope="col" width="10%">Genre</th>
                                    <th scope="col" width="10%">Year</th>
                                    <th scope="col" width="10%">Duration</th>
                                    <th scope="col" width="10%">Listens</th>
                                    <th scope="col" width="15%" class="actions" >Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php while($row =  $SongsList->fetch_assoc()) {        ?>
                                  <tr>
                                    <th scope="row"> 01 </th>
                                    <td><img src="<?=PR?><?=$row['AlbumArtSrc']?>" class="table-image-song"> <?=$row['SongName']?></td> 
                                    <td><?=$row['UploadedDate']?></td>    
                                    <td><?=$row['Genre']?></td>
                                    <td><?=$row['year']?></td>
                                    <td><?=$row['Duration']?></td>
                                    <td>20150</td>
                                    <td> <button class="btn btn-sm btn-success"><i class="fa fa-eye" ></i></button> 
                                        <button class="btn btn-sm btn-info"><i class="fa fa-edit" ></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash" ></i></button>
                                    </td>
                                  </tr>
                                  <?php    }     ?>
                                   
                                      </tbody>
                                      </table>
                                      </div>
                    </div>
                    </div>
                       <!----------------------------------------------------------------------------------------------------------------------->
                <div class="row card-container" >
                    <div class="col-md-4 mt-4 "  >
                            <br>
                            <h5 class="app-header "><b>Audience By Gender</b></h5>
                            <br>
                            <div class="table-responsive">
                                    <canvas id="pieChart" width="100%" height="65%"></canvas>
                                    
                            </div>
                    </div>
                    <div class="col-md-7 mt-4 pb-1"  >
                        <br>
                        <h5 class="app-header"><b>Audience By Age</b></h5>
                        <br>
                        <div class="table-responsive">
                                <canvas id="barChart" width="100%" height="40%"></canvas>
                                
                        </div>
                </div>
                  </div>
            
              
          
        </div>
          </div>
          </div>
     
          <script src="../js/Vibrant.js" ></script>
          <script src="https://unpkg.com/wavesurfer.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
          <script>
                var ctx = document.getElementById('myChart');
                var piechart = document.getElementById('pieChart');
                var barchart = document.getElementById('barChart');

                var labels = <?=$dateLabels?>;
                var data = <?=$data?>;
                var PieChartlabels = ['Male', 'Female'];
                var PieChartdata = [56.43, 67.870];
                var barlabels = ['0-17', '18-22', '23-27', '28-34', '35-44', '45-59', '60+' ];
                var bardata = [10, 39, 29, 13, 5, 3 , 1];

                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Listeners',
                            data: data,
                            backgroundColor:'rgba(52, 152, 219, 0.4)',
                            borderColor: 'rgba(41, 128, 185, 0.6)',
                            borderWidth: 1
                        }]
                    },
                   
                });

                var myChart = new Chart(barchart, {
                    type: 'bar',
                    data: {
                        labels: barlabels,
                        datasets: [{
                            label: 'Listeners',
                            data: data,
                            backgroundColor:'rgba(26, 188, 156, 0.5)',
                            borderColor: 'rgba(26, 188, 156, 0.6)',
                            borderWidth: 1
                        }]
                    },
                   
                });

                var myChart = new Chart(piechart, {
                    type: 'doughnut',
                    data: {
                        labels:  PieChartlabels,
                        datasets: [{
                            label: 'Listeners',
                            data:  PieChartdata,
                            backgroundColor: ['rgba(231, 76, 60 ,0.5)' ,'rgba(241, 196, 15, 0.5)'],
                            borderColor: ['rgba(231, 76, 60 ,.6)' ,'rgba(241, 196, 15, .6)'],
                            borderWidth: 2
                        }]
                    },
                   
                });
                </script>
          
     
    
      
</body>
</html>