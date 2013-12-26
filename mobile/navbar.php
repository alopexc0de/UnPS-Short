<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="./"><img src="../favicon.ico" style="max-height:18px;"><?php echo $appname; ?></a></li>
            <li><a href="http://unps-gama.info">UnPS Home</a></li>
            <li><a href="http://unps-gama.info/about">About</a></li>
            <li><a href="http://unps-gama.info/contact">Contact</a></li>

            
            <!-- User area -->
          <?php if(isset($_SESSION['uname'])){ ?>
            <ul class="nav navbar-nav" style="float:right;">
            <?php if($appname === "  Image Host"){ ?>
              <li><a href="#">Upload Picture</a></li>
            <?php } ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" id="uname-dropdown" data-toggle="dropdown">
                  <img id="profile-pic" class="img-rounded" src="<?php echo userpic($_SESSION['email']); ?>" alt="User gravatar image" /> <?php echo $_SESSION['uname'] ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li class="divider"></li>

                  <li><a href="http://unps-gama.info/account.php">Account</a></li>
                  <li><a href="http://unps-gama.info/friends.php">Friends</a></li>
                  <li><a href="http://unps-gama.info/stats.php?all">Stats</a></li>
                  <li><a href="http://unps-gama.info/stats.php?links">Short Links</a></li>
                  <li><a href="http://unps-gama.info/stats.php?pics">Uploaded Pictures</a></li>
                  <li><a id="logout-link" href="http://unps-gama.info/signout.php">Sign Out</a></li>

                  <li class="divider"></li>
                </ul>
              </li>
            </ul>
          <?php }else{ ?>
            <ul class="nav navbar-nav" style="float:right;">
              <li class="dropdown">
                <a href="#" class="login">
                  <img style="max-height:18px;max-width:18px;" src="../assets/images/user.png" /> Login <b class="caret"></b>
                </a>
              </li>
            </ul>
          <?php } ?>
      </div>
    </div>
  </div>
</div>