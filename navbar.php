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
            <li><a href="http://unps-gama.info">UnPS Home</a></li>
            <li><a href="http://unps-gama.info/about">About</a></li>
            <li><a href="http://unps-gama.info/contact">Contact</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" id="selected" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="divider"></li>

                <li><a href="http://img.unps-gama.info" target="_blank">Image Host</a></li>
                <li><a href="http://unps.us" id="selected" target="_blank">Link Shortener</a></li>
                <li><a href="http://api.unps.us" target="_blank">UnPS-API</a></li>
                <li><a href="#">Site Blog</a></li>
                <li><a href="https://twitter.com/UnPSDashGAMA" target="_blank">UnPS Twitter</a></li>

                <li class="divider"></li>

                <li class="nav-header">Programming Work</li>
                <li><a href="https://github.com/alopexc0de" target="_blank">GitHub</a></li>
                <li><a href="https://bitbucket.org/alopexc0de" target="_blank">Bitbucket</a></li>

                <li class="divider"></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Friends <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="divider"></li>
                      
                <li class="nav-header"> c0de</li>
                <li><a href="http://c0de.unps.us" target="_blank">Personal Blog</a></li>
                <li><a href="https://facebook.com/alopexc0de" target="_blank">Facebook</a></li>
                <li><a href="skype:alopexlagopus-c0de?chat" target="_blank">C0de's Skype</a></li>

                <li class="divider"></li>

                <li class="nav-header"> Hosted Sites</li>
                <li><a href="http://tpht.unps.us" target="_blank">Twin Ports Hacker Terminal</a></li>
                <li><a href="http://haruka.unps-gama.info" target="_blank">Haruka's Blog</a></li>
                <li><a href="http://kitsu.unps-gama.info" target="_blank">Kitsu's Stuff</a></li>
                <li><a href="http://hunyweav.us" target="_blank">HunyWeav.us</a></li>

                <li class="divider"></li>

                <li class="nav-header"> Other Friends</li>
                <li><a href="http://mc.doridian.de" target="_blank">Our Amazing Server Host</a></li>
                <li><a href="http://furcast.fm" target="_blank">Awesome Furry Talk Show</a></li>
                <li><a href="http://leonfox.net" target="_blank">Networking Guru</a></li>

                <li class="divider"></li>
              </ul>
            </li>
          </ul>

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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img style="max-height:18px;max-width:18px;" src="assets/images/user.png" /> Login <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" style="float:left;text-align:left;padding-left:8px;padding-right:8px;">
                  <form class="navbar-form form-inline pull-right" action="http://unps-gama.info/login.php" method="post">
                    <li style="padding-bottom:6px;">
                      <input type="text" name="email" placeholder="Email" class="form-control loginbox" />
                    </li>
                    <li style="padding-bottom:6px;">
                      <input type="password" name="pass" placeholder="Password" class="form-control loginbox" />
                    </li>
                    <li><button type="submit" name="signin" class="btn loginbtn" disabled="disabled">Sign in</button></li>
                    <li class="divider"></li>
                    <li><button type="submit" name="signup" class="btn loginbtn" disabled="disabled">Sign up</button></li>
                  </form>
                </ul>
              </li>
            </ul>
          <?php } ?>
      </div>
    </div>
  </div>
</div>