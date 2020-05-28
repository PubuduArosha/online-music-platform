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
   <link rel="stylesheet" href="<?=PR?>/css/ManageArtist.css">

    
    <title>Document</title>
</head>
<body >
 
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'Home' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper" style="background: white;">
    
          <div class="container-fluid ">
              <div class="row card-container " >
              
                  <div class="col-12 imageX"  >
                      <img src="<?=PR?>/uploads/Artists/mihindu_cover.jpg" class="artist-image-banner">
                     
                    </div>
                   
                   
              </div>
                <div class="row card-container " >
                        <div class="col-12 mt-1 "  >
                                <br>
                                <img src="<?=PR?>/uploads/Artists/mihidu.jpg" class="artist-image">
                                <h2 class="app-header artist-color"><b>Mihindu Ariyarathna</b>
                                <button class="btn btn-success btn-md" ><b>View as Public</b></button>
                                </h2>
                                <h3 class="card-subtitle text-muted artist-padding"><b>Artist</b></h3>
                                <div class="row">
                                      <div class="col-md-2  col-sm-4 col-6  card-wrapper">
                                      </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-4 "  >
                          
                               
                                    <h3 class="app-header artist-color"><b>Biography</b></h3>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                      Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                       cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro 
                                       keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. 
                                       Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel,
                                        butcher voluptate nisi qui.
                                  </p>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-4 comment-section"  >    
                        <h3 class="app-header artist-color"><b>My Details</b>
                          <button class="btn btn-info btn-md" ><b>Edit Details</b></button>
                        </h3>
                       <ul class="commentList mt-2">
                         <li>
                            <h4 class="card-text-small">Record Label : Spinning Records</h4>
                         </li>
                         <li>
                            <h4 class="card-text-small">Email : Mihindu Ariyarathne</h4>
                         </li>
                         <li>
                            <h4 class="card-text-small">Address : No 321, Welivita Road, Malabe</h4>
                         </li>
                         <li>
                            <h4 class="card-text-small">Contact No :011-3245675</h4>
                         </li>
                       </ul>
        </div>
                </div>
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="row card-container" >
                        <div class="col-md-12 mt-4 "  >
                                <br>
                                <h3 class="app-header"><b></b></h3>
                             
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
                var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July' , 'August'];
                var data = [1200, 1900, 3000, 5000, 2238, 3200 , 3675, 2900];
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Listeners',
                            data: data,
                            backgroundColor:'rgba(52, 152, 219, 0.2)',
                            borderColor: 'rgba(41, 128, 185, 0.6)',
                            borderWidth: 1
                        }]
                    },
                   
                });
                </script>
          
     
    
      
</body>
</html>