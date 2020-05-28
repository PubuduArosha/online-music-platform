     <!-- The Modal -->
     <div id="myModal" class="modal" style="background: rgba(0,0,0,0.75) !important;">

<!-- Modal content -->
<div class="modal-content" style="width:40% !important; margin: 200px auto !important;">
  <div class="modal-body">
  <button span class="close">&times;</button>
  <form enctype="multipart/form-data" method="POST" action="<?=PR?>/Playlist/upload" >
    <div class="container-flex" style="padding=0px !important;">
              <div class="row">
              <div class="col-md-6 " >
                                            <label>
                                            <img id="additemIMG1"  src="<?=PR?>/uploads/Upload.png" style="padding-top : 10px !important;"  >  
                                                         <input  type="file" name="playlistArt" id ="file"  onchange="loadFile(event)" 
                                                         style="display: none; !important">
                                            </label>
                                        
                                  
                               
                </div>
                <div class="col-md-6 " >
                    <div class="row form-BG"  >
                        <div class="col-md-12 p-2">
                                <h6 class="label-text"><b>Playlist Title</b></h6>
                                <input type="text" class="form-control" name="name"  placeholder="Enter Playlist Name">
                        </div>
                      
                        <div class="col-md-12 p-2">
                            <h6 class="label-text"><b>Description</b></h6>
                            <textarea class="form-control" id="exampleTextarea" rows="6" name="description"></textarea>
                        </div>
                        <div class="col-md-12 p-2">
                        <button class="btn btn-sm btn-success" type="submit">Create Playlist</button>
                        </div>
                        
                    </div>
            </div>

                            
                            
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
var btn = document.getElementById("myBtn");

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
