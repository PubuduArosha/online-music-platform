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
   <link rel="stylesheet" href="<?=PR?>/css/lightbootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=PR?>/css/AddSong.css">

    
    <title>Document</title>
</head>
<body >
 
    <div class="d-flex" id="wrapper">

          <!-- Sidebar -->
          <?php    
            $navbar = new View();
            $navbar->assign('Selected', 'addSongs' );
            $navbar->render('NavBar/index');
        ?>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper" style="background: white;">
    
          <div class="container-fluid">
               <form enctype="multipart/form-data" method="POST" action="<?=PR?>/Songs/upload" >
                <div class="row card-container" >
                        <div class="col-md-12 mt-2 "  >
                            <br>
                            <h3 class="app-header mb-3" style="font-weight: 900 !important;"><b>Add Songs</b></h3>
                            <div class="row" >
                                <div class="col-md-4 " >
                                        <div class = "pre" >
                                                <img id="additemIMG1"  src="<?=PR?>/uploads/Upload.png"     >
                                                         <label  class="custom-file-upload">
                                                             <input  type="file" name="albumArtFile" id ="file"  onchange="loadFile(event)" >
                                                Upload AlbumArt
                                            </label>
                                        </div>
                                        <div class = "pre" >
                                                <div id="SongName" width="85%">
                                                        <h6 class="label-text" id="uploadedSongName"><b></b></h6>
                                                </div>
                                                         <label  class="custom-file-upload">
                                                             <input  type="file" name="mp3File" id ="filemp3"  onchange="loadFileMp3()" >
                                                Upload MP3 Here 
                                            </label>
                                        </div>
                                </div>
                                <div class="col-md-7 " >
                                        <div class="row form-BG" >
                                            <div class="col-md-12 p-2">
                                                    <h6 class="label-text"><b>Song Title</b></h6>
                                                    <input type="text" class="form-control"  placeholder="Enter Song Name" name="songName">
                                            </div>
                                            <div class="col-md-6 p-2">
                                                    <h6 class="label-text"><b>Song Duration</b></h6>
                                                    <input type="text" class="form-control" placeholder="ex : 3:23" name="duration" >
                                            </div>
                                            <div class="col-md-6 p-2">
                                                    <h6 class="label-text"><b>Released Date</b></h6>
                                                    <input type="date" class="form-control" name="date" >
                                            </div>
                                            <div class="col-md-6 p-2">
                                                <h6 class="label-text"><b>Genre</b></h6>
                                                <select class="form-control" name="genre">
                                                    <option Selected value="Pop" >Pop</option >
                                                    <option value="Hipop" >Hipop</option>
                                                    <option value="Classic" >Classic</option>
                                                    <option value="Folk" >Folk</option>
                                                    <option value="Reggae" >Reggae</option>
                                                    </select>
                                                </div>
                                            <div class="col-md-12 p-2">
                                                <h6 class="label-text"><b>Description</b></h6>
                                                <textarea class="form-control" id="exampleTextarea" name="description" rows="6"></textarea>
                                            </div>
                                            <div class="col-md-12 p-2 form-group">
                                                    <h6 class="label-text pb-2"><b>Permissions</b></h6>
                                                   
                                                    <label class="permission-text-header">Enable App Playback</label><br>
                                                   <span class="permission-text">Play this track will not be possible on device without internet connection
                                                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                                           text ever since the 1500s  
                                                   </span><br><br>
                                                    <button class="btn btn-sm btn-success" type="submit"><b> Upload Song </b></button>
                                                 
                                                </div>
                                        </div>
                                </div>
                            </div>
                             
                        </div>
                </div>
            </form>
                    <!------------------------------------------------------------------------------------------------------>
               
        </div>
          </div>
          </div>
     
          <script src="<?=PR?>/js/Vibrant.js" ></script>
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