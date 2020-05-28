<?php
 $model = new Playlist_model();
 $results = $model->getAllPlaylists( Session::get('UserID') );

?>
     <!-- The Modal -->
     <div id="myModal" class="modal" style="background: rgba(0,0,0,0.95) !important;">

<!-- Modal content -->
<div class="modal-content" style="width:80% !important; margin: 100px auto !important; background: rgba(0,0,0,0); border: 0px!important;">
  <div class="modal-body">
  <h2><b>Add To Playlist ..<b></h2>
  <button span class="close">&times;</button>
  <form enctype="multipart/form-data" method="POST" action="<?=PR?>/Playlist/upload" >
    <div class="container-flex" style="padding=0px !important;">
    <div class="row" >
        <!-------------------------------------------------------------------------------------------> 
        <?php   while($row = $results->fetch_assoc()) {   ?>
                  <a href="<?=PR?>/Playlist/add/<?=$row['PlaylistID']?>/<?=$this->data['SongID']?>" >
                <div class="col-md-2  col-sm-4 col-6  card-wrapper">
                  <div class="col-md-12 card" style="background-image: linear-gradient(0deg, rgba(9,9,16,1) 20%, rgba(0,0,0,0.01) 100%) ,url(<?=PR?><?=$row['ArtworkSrc']?>)">
                    <h6  class="Song" style="font-size : 1.2em !important;" ><?=$row['PlaylistName']?> <br></h6>
                   
                  </div> </a>
                  
                </div>
        <?php  }  ?>     
        <!------------------------------------------------------------------------------------------->      
        </div>
  </div>
  </form>
  </div>
 
</div>

</div> 

      <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("addModel");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}

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
