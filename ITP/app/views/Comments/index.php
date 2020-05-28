
<?php     
    
  $CM = new Comments_model();
  $results = $CM->getAllComments( $this->data['songID'] );
?>
<div class="col-sm-8 col-12 comment-section" >
                                <div class="card-body">
                                  <h5 class="card-title"><?=$results->num_rows?> Comments </h5>
                                  <ul  class="commentList">
                                      
                            
                               <?php  while($row = $results->fetch_assoc()) {    ?>
                                  <li >
                                    <div class="comment-image-container" >
                                      <img src="<?=PR?><?=$row['ImgSrc']?>" class="comment-image">
                                    </div>
                                    <div class="commentText">
                                      <h6 ><?=$row['FirstName']?> <?=$row['LastName']?> <span class="date sub-text"> On <?=$row['DateTime']?></span></h6>
                                        <p class="card-text text-muted"><?=$row['Comment']?></p>
                                    </div>
                                   </li>
                               <?php }  ?>  
                                      
                                   <li >
                                      <div class="comment-image-container" >
                                        <img src="<?=PR?><?=Session::get('UserImage')?>" class="comment-image">
                                      </div>
                                      <div class="commentText">
                                        <h6 ><?=Session::get('UserName')?></h6>
                                          
                                          <textarea cols="100" row="3" class="form-control card-text text-muted" id="kk" placeholder="Add your comments here..."></textarea>
                                            <div id="cc">
                                        
                <button type="submit"  class="btn btn-sm btn-dark "><b>Add Comment</b></button>
            </div>
                 
                                      </div>
                                     </li>
                                </ul> 

                                </div>
                             
                        </div>