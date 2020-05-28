<?php 
$_SESSION['ListenerID'] = '1004';
$ListenersModel = new Listeners_model();
$ListenerDetails =  $ListenersModel->getListeners($_SESSION['ListenerID']);
$LRRow = mysqli_fetch_row($ListenerDetails);
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
    <link rel="stylesheet" href="<?=PR?>/css/bootstrap.min.css" />
    <link href="<?=PR?>/css/simple-sidebar.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=PR?>/css/main.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="<?=PR?>/css/view_account_details.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>View Account Details</title>
  </head>
  <body style="background: rgb(12,12,12) !important;">
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="side" id="sidebar-wrapper">
        <div class="sidebar-heading">Cassette</div>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action bg-dark"
            >Home</a
          >
          <a href="#" class="list-group-item list-group-item-action bg-dark"
            >Playlists</a
          >
          <a href="#" class="list-group-item list-group-item-action bg-dark"
            >Charts</a
          >
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <div class="row card-container">
            <div
              class="col-md-6 offset-md-3 mt-5"
              style="padding-bottom: 20px;"
            >
              <!-- <div class="p-1 bg-dark rounded rounded-pill  mb-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button
                      id="button-addon2"
                      type="submit"
                      class="btn btn-link text-success"
                    >
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                  <input
                    type="search"
                    placeholder="What're you searching for?"
                    aria-describedby="button-addon2"
                    class="form-control border-0 bg-dark"
                  />
                </div>
              </div> -->
            </div>
          </div>
          <!----------------------------------------------------------------------------------------------------------------------->
          <div class="row card-container" style="margin-bottom: 20px">
            <div class="col-sm-4 heading">
              <center>
                <i
                  class="fa fa-address-card iconDetails"
                  style="font-size: 30px;"
                ></i>
                <h3
                  class="detailsTitle"
                  style="display: inline-block; padding-left: 20px;"
                >
                  Account Details
                </h3>
              </center>
            </div>
            <div class="col-md-12 songs-list">
              <center>
                <div class="col-sm-12">
                  <div class="avatar-upload">
                    <div class="avatar-edit">
                      <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                      <div
                        id="imagePreview"
                        style="background-image: url(<?=PR?><?=$LRRow[6]?>);"
                      ></div>
                    </div>
                  </div>
                </div>
              </center>
              <br /><br />
            
              <hr class="hrline"> 
              <div class="col-md-12 col-sm-12 col-xs-12 ">
                <center>
                  <div class="col-md-12 detailsBox">
                    <table>
                      <tr>
                        <td><label class="titles">First Name </label></td>
                        <td>
                          <label class="labelDetails">: <?=$LRRow[1] ?> </label>
                        </td>
                      </tr>
                      <tr>
                        <td><label class="titles">Last Name </label></td>
                        <td>
                          <label class="labelDetails">: <?=$LRRow[2] ?> </label>
                        </td>
                      </tr>
                      <tr>
                        <td><label class="titles">Email</label></td>
                        <td>
                          <label class="labelDetails"
                            >: <?=$LRRow[4] ?></label
                          >
                        </td>
                      </tr>
                      <tr>
                        <td><label class="titles">Country </label></td>
                        <td>
                          <label class="labelDetails">: Sri Lanka</label>
                        </td>
                      </tr>
                      <tr>
                        <td class="titles"><label>Age </label></td>
                        <td>
                          <label class="labelDetails">: 18 - 24</label>
                        </td>
                      </tr>
                    </table>

                    <br /><br />
                    <button class="btn btn-warning">Back</button>
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
