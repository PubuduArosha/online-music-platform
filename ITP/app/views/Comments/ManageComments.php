
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/lightbootstrap.min.css" >
   <link href="../css/simple-sidebar.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/main.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../css/AdminPanel.css">

    
    <title>Document</title>
</head>
<body >
 
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="side" id="sidebar-wrapper">
          <div class="sidebar-heading">Cassette </div>
          <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-dark">Home</a>
            <a href="#" class="list-group-item list-group-item-action bg-dark">Playlists</a>
            <a href="#" class="list-group-item list-group-item-action bg-dark">Charts</a>
           
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper" style="background: white;">
    
          <div class="container-fluid">
            
          
              
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="row card-container" >
                        <div class="col-md-12 mt-2 "  >
                                <br>
                                <h3 class="app-header">Manage Users' Comments</h3> 
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
                                
                                    <th scope="col" width="25%" >Users</th>
                                    <th scope="col"  width="20%" >Comments</th>
                                    <th scope="col" width="15%">Comment ID</th>
                                    <th scope="col" width="10%">Song Name</th>
                                    <th scope="col" width="15%"class="actions" >Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                   
                                    <td><img src="../uploads/Artists/kasun-kalhara.jpg" class="table-image"> Kasun Kalhara</td>     
                                    <td>Loved it...............</td>
                                    <td>1001</td>
                                    <td>Sanda Raajini</td>
                                    
                                
                                    <td> <button class="btn btn-sm btn-success">Delete</button>
                                      <button class="btn btn-sm btn-success">Disable</button></td>
                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../uploads/Artists/danith.jpg" class="table-image"> Danith Sri</td>     
                                    <td>superb music and lyrics!!!!!!</td>
                                    <td>1001</td>
                                    <td>Naadagam Geeya</td>
                                    
                                    
                                    <td> <button class="btn btn-sm btn-success">Delete</button>
                                       <button class="btn btn-sm btn-success">Disable</button></td>
                                  </tr>
                                   <tr>
                                  
                                    <td><img src="../uploads/Artists/indrachapa.jpg" class="table-image"> indrachapa Liyanage</td>     
                                    <td>nice !!!!!!!!!!!!!!</td>
                                    <td>1001</td>
                                    <td>Sanda Raajini</td>
                                    
                                    
                                    <td> <button class="btn btn-sm btn-success">Delete</button>
                                       <button class="btn btn-sm btn-success">Disable</button>
                                       </td>
                                  </tr>
                                   <tr>
                                    
                                    <td><img src="../uploads/Artists/mihidu.jpg" class="table-image"> Mihidu Ariyarathna</td>     
                                    <td>my favourite song... love it!!!</td>
                                       <td>1001</td>
                                    <td>Chakithaya</td>
                                    
                                    
                                    <td> <button class="btn btn-sm btn-success">Delete</button>
                                       <button class="btn btn-sm btn-success">Disable</button>
                                       </td>
                                  </tr>
                                   <tr>
                                   
                                    <td><img src="../uploads/Artists/kasun-kalhara.jpg" class="table-image"> Kasun Kalhara</td>     
                                    <td>Awesome lyrics...</td>
                                       <td>1001</td>
                                    <td>Eka wasanthayaka</td>
                                    
                                    
                                    <td> <button class="btn btn-sm btn-success">Delete</button> <button class="btn btn-sm btn-success">Disable</button>
                                       </td>
                                  </tr>
                                 <tr>
                                   
                                    <td><img src="../uploads/Artists/iraj.jpg" class="table-image"> Iraj</td>     
                                    <td>Love it !!!!!!</td>
                                     <td>1001</td>
                                    <td>Sanda Raajini</td>
                                    
                                    
                                    <td> <button class="btn btn-sm btn-success">Delete</button>
                                     <button class="btn btn-sm btn-success">Disable</button>
                                     </td>
                                  </tr>
                                   <tr>
                                 
                                    <td><img src="../uploads/Artists/ridma.jpg" class="table-image"> Ridma Weerawardhana</td>     
                                    <td>nice song !!!!!!</td>
                                       <td>1001</td>
                                    <td>Mal Mitak Thiyanna</td>
                                    
                                    
                                    <td> <button class="btn btn-sm btn-success">Delete</button>
                                       <button class="btn btn-sm btn-success">Disable</button>
                                       </td>
                                  </tr>
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