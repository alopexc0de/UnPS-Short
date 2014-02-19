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
            <li><a href="./"><img src="favicon.ico" style="max-height:18px;"><?php echo $appname; ?></a></li>

            <li><a href="http://unps.us" id="selected" target="_blank">Link Shortener</a></li>
            <li><a href="http://api.unps.us" target="_blank">UnPS-API</a></li> 

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Friends <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="divider"></li>
                      
                <li class="nav-header"> c0de</li>
                <li><a href="http://dfox.pw" target="_blank">Personal Blog</a></li>
                <li><a href="https://twitter.com/UnPSDashGAMA" target="_blank">UnPS Twitter</a></li>
                <li><a href="https://github.com/alopexc0de" target="_blank">GitHub</a></li>
                <li><a href="mailto:c0de@unps.us">Email</a></li>

                <li class="divider"></li>

                <li class="nav-header"> Other Friends</li>
                <li><a href="http://mc.doridian.de" target="_blank">Our Amazing Server Host</a></li>
                <li><a href="http://furcast.fm" target="_blank">Awesome Furry Talk Show</a></li>
                <li><a href="http://leonfox.net" target="_blank">Networking Guru</a></li>

                <li class="divider"></li>
              </ul>
            </li>
          </ul>

            <!-- User area - ->

            Removed for now - No where near ready for implementation
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
                  <img style="max-height:18px;max-width:18px;" src="assets/images/user.png" /> Login <b class="caret"></b>
                </a>
              </li>
            </ul>
          <?php } ?> -->
      </div>
    </div>
  </div>
</div>