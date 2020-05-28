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
   <link rel="stylesheet" href="../css/lightbootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../css/addChart.css">

    
    <title>Document</title>
    <script>
          function validateForm() {
                        var x = document.forms["myForm"]["title"].value;
                        
                        if (x == "")  {
                        alert("Fields must be filled out");
                          return false;       
                          }
        
                  }
                  function validateForm() {
                        var y = document.forms["myForm"]["dis"].value;
                        
                        if (y == "")  {
                        alert(" must be filled out");
                          return false;       
                          }
        
                  }
    </script>

</head>
<body >
 
    <div class="d-flex" id="wrapper">

         <!-- Sidebar -->
         <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'Chart' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper" style="background: white;">
    
          <div class="container-fluid">
            
                <div class="row card-container" >
                        <div class="col-md-12 mt-2 "  >
                            <br>
                            <h3 class="app-header mb-3" style="font-weight: 900 !important;"><b>Add Chart</b></h3>
                            <div class="row" >
                                <div class="col-md-4 " >
                                        <div class = "pre" >
                                                <img id="additemIMG1"  src="../uploads/Upload.png"     >
                                                         <label  class="custom-file-upload">
                                                             <input  type="file" name="file" id ="file"  onchange="loadFile(event)" >
                                                Chart Art Work
                                            </label>
                                        </div>
                                        
                                </div>
                                <div class="col-md-7 " >
                                        <div class="row form-BG" >
                                            <div class="col-md-12 p-2">
                                                    <form name="myForm" onsubmit="return validateForm()" method="post">
                                                    <h6 class="label-text"><b>Chart Title</b></h6>
                                                    <input name="title" type="text" class="form-control"  placeholder="Enter Song Name">
                                                    
                                            </div>
                                      
                                            <div class="col-md-12 p-2">
                                                <h6 class="label-text"><b>Description</b></h6>
                                                <textarea name="dis" class="form-control" id="exampleTextarea" rows="6"></textarea>
                                            </div>
                                            <div style="padding-left: 10px">
                                            <b> <input type="submit" value="creat" style="padding: 10px 20px; font-size: 1em; font-style: normal !important" type="button"  class="btn btn-success btn-lg"></b>
                                      
                                          </div>  
                                          </form>
                                        </div>
                                </div>
                            </div>
                             
                        </div>
                </div>
              
                    <!------------------------------------------------------------------------------------------------------>
               
        </div>
          </div>
          </div>
     
          <script src="../js/Vibrant.js" ></script>
          <script src="https://unpkg.com/wavesurfer.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
          <script>
            var loadFile = function(event) 
                {
                    var reader = new FileReader();
                    reader.onload = function()
                    {
                      var output = document.getElementById('additemIMG1');
                      output.src = reader.result;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                  };  
                  
                  function loadFileMp3(){
                    var name = document.getElementById('filemp3'); 
                      document.getElementById('uploadedSongName').innerHTML = name.files.item(0).name;
                  }
                 
                </script>
          
     
    
      
</body>
</html>