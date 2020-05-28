<?php
  $S = $this->data['Selected'];
  if( Session::get('Access') == '0' ){
      $ac = 'Listener Account';
      $level = 0;
  }elseif( Session::get('Access') == '1' ){
    $ac = 'Artist Account';
    $level = 1;
  }elseif( Session::get('Access') == '2' ){
    $ac = 'Admin Account';
    $level = 2;
  }
?>

<div class="side" id="sidebar-wrapper" style="color : white !important;">
    <div class="sidebar-heading">
              <div>
            <img class="header-image-nav" src="<?=PR?>/uploads/logo.png">
</div>
            <h6 class="header-user-nav"><b>
            <i class="fa fa-user" style="padding: 0px 0px 0px 10px;"></i> 
            <?=Session::get('UserName')?></b>
            <a href="<?=PR?>/Login/Logout">
            <i class="fa fa-sign-out btn-sm btn-success" style=""></i></a>
            <br>
            <span class="type-nav"><?=$ac?><b>
            </b></span>
          </h6>
            
            
    </div>
    <div class="list-group list-group-flush">
        
        <?php if($level >= 0 ){ ?>
        <a href="<?=PR?>/Home/" class="list-group-item list-group-item-action bg-dark"
        style="<?=( $S == 'Home') ? 'border-left: solid rgb(32, 185, 65) 7px !important;'  : '' ?>;color : white !important;"
        ><i class="fa fa-home" style="padding-right:10px;"></i> Home</a>
        <?php  }  ?>

        <?php if($level == 1  ){ ?>
        <a href="<?=PR?>/Songs/mysongs" class="list-group-item list-group-item-action bg-dark"
        style="<?=( $S == 'mysongs') ? 'border-left: solid rgb(32, 185, 65) 7px !important;'  : '' ?>;color : white !important;"
        ><i class="fa fa-list" style="padding-right:10px;"></i> Manage Songs</a>
        <?php  }  ?>

        <?php if($level == 1  ){ ?>
        <a href="<?=PR?>/Songs/add" class="list-group-item list-group-item-action bg-dark"
        style="<?=( $S == 'addSongs') ? 'border-left: solid rgb(32, 185, 65) 7px !important;'  : '' ?>;color : white !important;"
        ><i class="fa fa-plus-circle" style="padding-right:10px;"></i> Add Songs</a>
        <?php  }  ?>

        <?php if($level == 2  ){ ?>
        <a href="<?=PR?>/Admin/" class="list-group-item list-group-item-action bg-dark"
        style="<?=( $S == 'DashBoard') ? 'border-left: solid rgb(32, 185, 65) 7px !important;'  : '' ?>;color : white !important;"
        ><i class="fa fa-tachometer" style="padding-right:10px;"></i> Dashboard</a>
        <?php  }  ?> 

        <?php if($level == 2  ){ ?>
        <a href="<?=PR?>/Songs/manage" class="list-group-item list-group-item-action bg-dark"
        style="<?=( $S == 'manageSongs') ? 'border-left: solid rgb(32, 185, 65) 7px !important;'  : '' ?>;color : white !important;"
        ><i class="fa fa-music" style="padding-right:10px;"></i> Manage Songs</a>
        <?php  }  ?> 

        <?php if($level == 2  ){ ?>
        <a href="<?=PR?>/Songs/manage" class="list-group-item list-group-item-action bg-dark"
        style="<?=( $S == 'manageSongs') ? 'border-left: solid rgb(32, 185, 65) 7px !important;'  : '' ?>;color : white !important;"
        ><i class="fa fa-music" style="padding-right:10px;"></i> Manage Songs</a>
        <?php  }  ?> 

        <?php if($level == 0  ){ ?>
        <a href="<?=PR?>/Playlist/" class="list-group-item list-group-item-action bg-dark"
        style="<?=( $S == 'Playlist') ? 'border-left: solid rgb(32, 185, 65) 7px !important;'  : '' ?>;color : white !important;"
        ><i class="fa fa-list" style="padding-right:10px;"></i> Playlists</a>
        <?php  }  ?>
        
        <?php if($level <= 1  ){ ?>
        <a href="<?=PR?>/Charts/" class="list-group-item list-group-item-action bg-dark"
        style="<?=( $S == 'Chart') ? 'border-left: solid rgb(32, 185, 65) 7px !important;'  : '' ?>;color : white !important;"
        ><i class="fa fa-music" style="padding-right:10px;"></i> Charts</a>
          <?php  }  ?>

        <?php if($level == 0 || $level == 1  ){ ?>
        <a href="#" class="list-group-item list-group-item-action bg-dark" style="color : white !important;">
        <i class="fa fa-comment" style="padding-right:10px;"></i> FeedBack</a>
          <?php  }  ?>

        <?php if(  $level == 1  ){ ?>
        <a href="#" class="list-group-item list-group-item-action bg-dark" style="color : white !important;">
        <i class="fa fa-file" style="padding-right:10px;"></i>  Subscription</a>
        <?php  }  ?>

        <?php if(  $level >= 0  ){ ?>
        <a href="#" class="list-group-item list-group-item-action bg-dark" style="color : white !important;">
        <i class="fa fa-cog" style="padding-right:10px;"></i>  Settings</a>
          <?php  }  ?>

    </div>
</div>


   
