<?php
    $_SESSION["ArtistID"] = "1002";
    $SubModel = new Subscriptions_model();
    $SubList =  $SubModel->getAllSubscriptions( $_SESSION["ArtistID"] );
    $LS =  $SubModel->getLatestSubscription( $_SESSION["ArtistID"] );
    $LatestSub = mysqli_fetch_row($LS);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?=PR?>/css/lightbootstrap.min.css" />
    <link href="<?=PR?>/css/simple-sidebar.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=PR?>/css/main.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="<?=PR?>/css/ViewSubscription.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>View Subscription</title>
  </head>
  <body>
    <div class="d-flex" id="wrapper">
     
         <!-- Sidebar -->
         <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'Subscriptions' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">

        <div class="container-fluid">

          <center>
          <div class="row card-container" style="margin-bottom: 20px;">

            <div class="col-md-12 songs-list" style="background-color: rgb(255, 255, 255)">

              <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top: 40px">
                
                  <div class="col-md-12 detailsBox" style="background-image: linear-gradient(rgb(240, 240, 240), rgb(180, 180, 180));">

                    <br><hr style="height: 2px" color="#3c3c3c">

                        <h2 class = "detailsTitle" style="text-align: center; color: #000;">Latest Subscription</h2>

                    <hr style="height: 2px" color="#3c3c3c"><br>

                    <table>

                      <tr>
                        <td><label class="titles" style="color: #000;">Subscription Type</label></td>
                        <td><label class="labelDetails" style="color: #000;">: <?=$LatestSub[4]?> Package</label></td>
                      </tr>
                      <tr>
                        <td><label class="titles" style="color: #000;">Amount Payed</label></td>
                        <td><label class="labelDetails" style="color: #000;">: $ <?=$LatestSub[3]?></label>
                        </td>
                      </tr>

                      <tr>
                        <td><label class="titles" style="color: #000;">Starting Date</label></td>
                        <td><label class="labelDetails" style="color: #000;">: <?=$LatestSub[2]?></label></td>
                      </tr>

                      <tr>
                            <td><label class="titles" style="color: #000;">Expiration Date</label></td>
                            <td><label class="labelDetails" style="color: #000;">: <?=$SubModel->calMonth( $LatestSub[2])?> </label></td>
                        </tr>

                      <tr>
                        <td class="titles" style="color: #000;"><label>Valid Months</label></td>
                        <td><label class="labelDetails" style="color: #000;">: 1 Month</label></td>
                      </tr>

                    </table>

                    <br /><br />

                    <button class="btn btn-warning DltSubBtn">Delete Subscription</button>

                    <br/><br/>

                  </div>

                  <br/><br/>

                  <div class="table-responsive" style="margin-top: 50px; margin-bottom: 50px">
                    <table class="table table-striped mysongs ">
                        <thead  class="thead-primary">
                          <tr>
                            <th scope="col" style="color: rgb(0, 0, 0); font-weight: bolder; font-size: 20px;">Package Type</th>
                            <th scope="col" style="color: rgb(0, 0, 0); font-weight: bolder; font-size: 20px;">Start Date</th>
                            <th scope="col" style="color: rgb(0, 0, 0); font-weight: bolder; font-size: 20px;">End Date</th>
                            <th scope="col" style="color: rgb(0, 0, 0); font-weight: bolder; font-size: 20px;">Duration</th>
                            <th scope="col" style="color: rgb(0, 0, 0); font-weight: bolder; font-size: 20px;">Payed Amount</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php  while($row = $SubList->fetch_assoc()) {      ?>
                          <tr>
                            <th scope="row"><?=$row['type']?></th>
                            <td><?=$row['Date']?></td>
                            <td><?=$SubModel->calMonth( $row['Date'] )?></td>
                            <td>1 Month</td>
                            <td>$ <?=$row['payment']?></td>

                          </tr>
                          <?php   }    ?>
                             
                              </tbody>
                              </table>
                              </div>

                </center>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </body>

</html>