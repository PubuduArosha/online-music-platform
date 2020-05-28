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
            $navbar->assign('Selected', 'DashBoard' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper" style="background: #ebe9e9;">
    
          <div class="container-fluid">
            
          
                  <div class="row card-container mt-3" >
                      <div class="col-12 cards-in-admin">
                          <h3 class="app-header h3-no-margin" style="padding: 0px !important;">
                              <i class="fa fa-tachometer"></i> Dashboard</h3> 
                          </div>
                    </div>
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="row card-container" >
                        <div class="col-md-7 mt-2 " style="padding: 0px 20px !important;" >
                        <div class="row" >
                          
                     <!------------------------------------------------------------------------------------------------------>
                   
                        
                          <div class="col-3 cardholder">
                            <div class="col-12 cards" id="card01">
                              <h1 class="cardNo">1456</h1>
                              <h5 class="card-text" >Users</h5>
                            </div>
                          </div>

                           <div class="col-3 cardholder">
                            <div class="col-12 cards" id="card02">
                              <h1 class="cardNo">36</h1>
                              <h5 class="card-text" >Artist</h5>
                            </div>
                          </div>

                           <div class="col-3 cardholder">
                            <div class="col-12 cards" id="card03">
                              <h1 class="cardNo">230</h1>
                              <h5 class="card-text" >Songs</h5>
                            </div>
                          </div>

                           <div class="col-3 cardholder">
                            <div class="col-12 cards" id="card04">
                              <h1 class="cardNo">10</h1>
                              <h5 class="card-text" >Charts</h5>
                            </div>
                          </div>
                        
                      
                     <!------------------------------------------------------------------------------------------------------>
                     <div class="col-md-12 mt-2 cards-in-admin"  >  
                        <h3  style="font-size: 1.6em !important;"><b>Revenue </b></h3>
                        <div class="table-responsive">
                                <canvas id="myChart" width="100%" height="35%"></canvas>       
                        </div>
                </div>  
                <!----------------------------------------------------------------------------------------------------->
                <div class="col-md-12 mt-3 cards-in-admin"  >  
                    <h3  style="font-size: 1.6em !important;"><b>Audience </b></h3>
                    <div class="table-responsive">
                            <canvas id="Audiance" width="100%" height="35%"></canvas>       
                    </div>
            </div>  

            <div class="col-md-12 mt-3 cards-in-admin card-no-padding"  >  
        <!----------------------------------------------------------------------------------------------------------------------->
        <div class="col-12  back-card" >
                              <h5 class="text-in-backcard " style="padding: 0px !important; "> Most Streamed Songs </h5> 
                             
                              </div>
                              <div class="table-responsive">
                                  <table class="table mysongs ">
                                      <thead  class="thead-primary ">
                                        <tr>
                                          <th scope="col"  width="5%">Rank</th>
                                          <th scope="col"  width="25%">Song Name</th>
                                          <th scope="col"  width="25%">Artist</th>
                                         
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row"> 01 </th>
                                          <td><img src="<?=PR?>/uploads/02.jpg" class="table-image-song"> Hina maka</td>     
                                          <td>Ridma Weerawardhana</td> 
                                        </tr>
                                        <tr>
                                          <th scope="row"> 02 </th>
                                          <td><img src="<?=PR?>/uploads/03.jpg" class="table-image-song"> Nadagam Geeya</td>     
                                          <td>Ridma Weerawardhana</td>
                                        </tr>
                                        <tr>
                                          <th scope="row"> 03 </th>
                                          <td><img src="<?=PR?>/uploads/02.jpg" class="table-image-song"> Kampa Nowan Mahamaya</td>     
                                          <td>Supun Perera</td>
                                         
                                        </tr>
                                        <tr>
                                            <th scope="row"> 04 </th>
                                            <td><img src="<?=PR?>/uploads/03.jpg" class="table-image-song"> Kuweniye Ma</td>     
                                            <td>Ridma Weerawardhana</td>
                                           
                                          </tr>
                                          <tr>
                                            <th scope="row"> 05 </th>
                                            <td><img src="<?=PR?>/uploads/02.jpg" class="table-image-song"> Radhawani</td>     
                                            <td>Supun Perera</td>
                                          
                                          </tr>
                                         
                                         
                                            </tbody>
                                            </table>
                                            </div>
                                            <div>
                          </div>          
        </div>  
              </div>               
                    </div>
                  
                   <!----------------------------------------------------------------------------------------------------------------------->
                   <div class="col-md-5 mt-3 " style="padding: 0px 20px !important; " >
                      <div class="row" >
                          <div class="col-12 cards-in-admin card-no-padding mt-2" >
                             
                                <div class="col-12  back-card" >
                              <h5 class="text-in-backcard " style="padding: 0px !important; "> Most Streamed Songs </h5> 
                             
                              </div>
                              <div class="table-responsive">
                                  <table class="table mysongs ">
                                      <thead  class="thead-primary ">
                                        <tr>
                                          <th scope="col"  width="5%">Rank</th>
                                          <th scope="col"  width="25%">Song Name</th>
                                          <th scope="col"  width="25%">Artist</th>
                                         
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row"> 01 </th>
                                          <td><img src="<?=PR?>/uploads/02.jpg" class="table-image-song"> Hina maka</td>     
                                          <td>Ridma Weerawardhana</td> 
                                        </tr>
                                        <tr>
                                          <th scope="row"> 02 </th>
                                          <td><img src="<?=PR?>/uploads/03.jpg" class="table-image-song"> Nadagam Geeya</td>     
                                          <td>Ridma Weerawardhana</td>
                                        </tr>
                                        <tr>
                                          <th scope="row"> 03 </th>
                                          <td><img src="<?=PR?>/uploads/02.jpg" class="table-image-song"> Kampa Nowan Mahamaya</td>     
                                          <td>Supun Perera</td>
                                         
                                        </tr>
                                        <tr>
                                            <th scope="row"> 04 </th>
                                            <td><img src="<?=PR?>/uploads/03.jpg" class="table-image-song"> Kuweniye Ma</td>     
                                            <td>Ridma Weerawardhana</td>
                                           
                                          </tr>
                                          <tr>
                                            <th scope="row"> 05 </th>
                                            <td><img src="<?=PR?>/uploads/02.jpg" class="table-image-song"> Radhawani</td>     
                                            <td>Supun Perera</td>
                                          
                                          </tr>
                                         
                                         
                                            </tbody>
                                            </table>
                                            </div>
                                            <div>
                          </div>
                      </div>
                      <!-------------------------------------------------------------------------------->
                      <div class="col-12 cards-in-admin card-no-padding mt-3" >
                      <div class="col-12  back-card" >
                              <h5 class="text-in-backcard  " style="padding: 0px !important; "> Audience By Gender </h5> 
                             
                              </div>
                          <div class="table-responsive">
                              <canvas id="pie" width="100%" height="50%"></canvas>
                              
                      </div>
                      </div>

                      <!-------------------------------------------------------------------------------->
                      <div class="col-12 cards-in-admin card-no-padding mt-3" >
                             
                                <div class="col-12  back-card" >
                              <h5 class="text-in-backcard  " style="padding: 0px !important; "> Most Streamed By Artist </h5> 
                             
                              </div>
                              <div class="table-responsive">
                                  <table class="table mysongs ">
                                      <thead  class="thead-primary ">
                                        <tr>
                                          <th scope="col"  width="5%" >Rank</th>
                                          <th scope="col" width="25%" >Artist</th>
                                          <th scope="col" width="10%">Listens</th>
                                         
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row"> 01 </th>
                                          <td><img src="<?=PR?>/uploads/Artists/kasun-kalhara.jpg" class="table-image"> Kasun Kalhara</td>     
                                         
                                          <td>20150</td>
                                          </tr>
                                         <tr>
                                          <th scope="row"> 02 </th>
                                          <td><img src="<?=PR?>/uploads/Artists/danith.jpg" class="table-image"> Danith Sri</td>     
                                        
                                          <td>24650</td>
                                             </tr>
                                         <tr>
                                          <th scope="row"> 03 </th>
                                          <td><img src="<?=PR?>/uploads/Artists/indrachapa.jpg" class="table-image"> indrachapa Liyanage</td>     
                                         
                                          <td>24650</td>
                                          </tr>
                                         <tr>
                                          <th scope="row"> 04 </th>
                                          <td><img src="<?=PR?>/uploads/Artists/mihidu.jpg" class="table-image"> Mihidu Ariyarathna</td>     
                                            <td>18350</td>
                                             </tr>
                                         <tr>
                                          <th scope="row"> 05 </th>
                                          <td><img src="<?=PR?>/uploads/Artists/kasun-kalhara.jpg" class="table-image"> Kasun Kalhara</td>     
                                          <td>18350</td>
                                           </tr>
                                       
                                            </tbody>
                                            </table>
                                            </div>
                                            <div>
                          </div>
                      </div>
                  </div>
                     
              </div>
          
        </div>
          </div>
          </div>
     
          <script src="<?=PR?>/js/Vibrant.js" ></script>
          <script src="https://unpkg.com/wavesurfer.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
          <script>
              var ctx = document.getElementById('myChart');
              var Audiance = document.getElementById('Audiance');
              var piechart = document.getElementById('pie');
              var barchart = document.getElementById('barChart');

              var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July' , 'August'];
              var data = [1200, 1900, 3000, 5000, 2238, 3200 , 3675, 2900];
              var data2 = [19050, 19050, 13000, 1500, 22385, 19500 , 12755, 25900];
              var bardata = [10, 39, 29, 13, 5, 3 , 1];

              var PieChartlabels = ['Male', 'Female'];
              var PieChartdata = [56.43, 67.870];
              var barlabels = ['0-17', '18-22', '23-27', '28-34', '35-44', '45-59', '60+' ];
              

              var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: labels,
                      datasets: [{
                          label: 'Income',
                          data: data,
                          backgroundColor:'rgba(52, 152, 219, 0.6)',
                          borderColor: 'rgba(41, 128, 185, 0.6)',
                          borderWidth: 1
                      }]
                  },
                 
              });

              var myChart02 = new Chart(Audiance, {
                  type: 'line',
                  data: {
                      labels: labels,
                      datasets: [{
                          label: 'Income',
                          data: data2,
                          backgroundColor:'rgba(231, 76, 60, 0.6)',
                          borderColor: 'rgba(231, 76, 60, 0.6)',
                          borderWidth: 1
                      }]
                  },
                 
              });

                var myChart04 = new Chart(piechart, {
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