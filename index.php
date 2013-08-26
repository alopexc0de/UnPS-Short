<?php
  session_start(); 

  // Generate a token on the fly. This should prevent POST spam attacks directly into process.php
  $token = substr(number_format(time() * mt_rand(),0,'',''),0,10); 
  $token = base_convert($token, 10, 36); 
  $_SESSION['token'] = $token;

  $catchid = substr(number_format(time() * mt_rand(),0,'',''),0,10);
  $catchVal = hash('sha256', $catchid.mt_rand().time().substr(number_format(time() * mt_rand(),0,'',''),0,10));
  $catchVal = base_convert($catchVal.$catchid, 10, 36);
  $_SESSION['catch'] = $catchid.":".$catchVal;

  if(!empty($_GET['l'])){
    include('api/dbsettings.php');
    $link = $shortdb->real_escape_string(strtolower(stripslashes(strip_tags($_GET['l']))));
    $sql = "SELECT * FROM `links` WHERE `shortlink` = '$link' LIMIT 1;";
    if($result = $shortdb->query($sql)){
      if($row = $result->fetch_assoc()){
        $link = $row['link'];
        header("location:$link");
      }
    }
  }

  function userpic($email){
    $default = "http://fox.gy/fCDIjceUvkk.png"; 
    $size = 20;
    $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".urlencode($default)."&s=".$size;
    return $grav_url;
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>UnPS Link Shortener</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="UnPS Link Shortener"/>
    <meta name="keywords" content="UnPS, GAMA, Shorten, Link"/>
    <meta name="author" content="David Todd"/>
    
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
    <link href="assets/css/elements.css?<?php echo time(); ?>" rel="stylesheet" />
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

  </head>
  <body>
    <div id="wrap">
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
                  <li><a class="active" href="#"><img src="favicon.ico" style="max-height:20px;"></a></li>
                  <li><a class="active" href="http://unps-gama.info">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="http://img.unps-gama.info">Image Host</a></li>
                      <li><a href="http://unps.us">Link Shortener</a></li>
                      <li><a href="http://api.unps.us">UnPS-API</a></li>
                      <li><a href="#">Site Blog</a></li>
                      <li><a href="https://twitter.com/UnPSDashGAMA">UnPS Twitter</a></li>
                      <li class="divider"></li>
                      <li class="nav-header">Programming Work</li>
                      <li><a href="https://github.com/alopexc0de">GitHub</a></li>
                      <li><a href="https://bitbucket.org/alopexc0de">Bitbucket</a></li>
                      <li><a href="http://p.unps.us">Projects</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Friends <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li class="nav-header"> c0de</li>
                      <li><a href="http://c0de.unps.us">Personal Blog</a></li>
                      <li><a href="https://facebook.com/alopexc0de">Facebook</a></li>
                      <li><a href="skype:alopexlagopus-c0de?chat">C0de's Skype</a></li>
                      <li class="divider"></li>
                      <li class="nav-header"> Hosted Sites</li>
                      <li><a href="http://haruka.unps-gama.info">Haruka's Blog</a></li>
                      <li><a href="http://kitsu.unps-gama.info">Kitsu's Stuff</a></li>
                      <li class="divider"></li>
                      <li class="nav-header"> Other Friends</li>
                      <li><a href="http://mc.doridian.de">Our Amazing Server Host</a></li>
                      <li><a href="http://furcast.fm">Awesome Furry Talk Show</a></li>
                      <li><a href="http://leonfox.net">Networking Guru</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- User area -->
                <?php if(isset($_SESSION['uname'])){ ?>
                  <ul class="nav navbar-nav" style="float:right;">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" id="uname-dropdown" data-toggle="dropdown"><img id="profile-pic" src="<?php echo userpic($_SESSION['email']); ?>" alt="User gravatar image" /> <?php echo $_SESSION['uname'] ?> <b class="caret"></b></a>
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
                  <form class="navbar-form form-inline pull-right" action="http://unps-gama.info/login.php" method="post">
                    <input type="text" placeholder="Email" class="form-control">
                    <input type="password" placeholder="Password" class="form-control">
                    <button type="submit" class="btn" disabled="disabled">Sign in</button>
                  </form>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container" style="float:center;padding-bottom:7%;">
        <p></p>
      </div>

      <div class="container">
        <form class="form-shorten" id="form-shorten">
          <h2 class="form-shorten-heading">Please give me a link to shorten...</h2>
          <input type="text" id="link" class="form-control" name="link" placeholder="http://" autofocus>
          <div id="shorten-password">
            <input type="text" id="pass" class="form-control" name="password" placeholder="Password">
          </div>
          <div id="report-details">
            <textarea name="report-details" id="report" class="form-control" placeholder="Reason for reporting this link"></textarea>
          </div>
          <div id="radio-center" style="padding-left:16%;">
            <label class="btn" style="color:#eee;"><input type="radio" id="shorten" name="linkmod" value="shorten" checked="checked">Shorten Link</label>
            <label class="btn" style="color:#eee;"><input type="radio" id="dellink" name="linkmod" value="dellink">Delete Link</label>
            <label class="btn" style="color:#eee;"><input type="radio" id="replink" name="linkmod" value="replink">Report Link</label>
          </div>
          <input type="hidden" name="<?php echo $catchid; ?>" value="<?php echo $catchVal; ?>"/>
          <button class="btn btn-primary btn-block" id="short-button" type="submit">Shorten</button>
        </form>
        <div id="message">
        </div>
      </div>
    </div>

    <div id="footer" style="position:fixed; width:100%; padding:5px; bottom:2px;">
      <div class="container">
        <br /><p class="text-muted credit">
          Copyright &copy; 2012-2013 UnPS-GAMATechnologies - <a href="http://getbootstrap.com/">Bootstrap</a> is &copy; 2013 Twitter Inc.
          <a id="privacy-link" href="http://unps-gama.info/privacy.php">Privacy Policy</a> <a id="tos-link" href="http://unps-gama.info/terms.php">Terms Of Service</a> <?php if(!isset($_SESSION['uname'])){ ?><a id="reg-link" href="#">Register</a> <?php } ?>
        </p>
      </div>
    </div>

    <!-- Load the JS after the DOM so speed up load times -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function(){
        // When the page loads, we're gonna want to hide the shorten-password and report-details elements
        $("#shorten-password").slideUp("slow");
        $("#report-details").slideUp("slow");
        $('#link').focus();

        $('#error').fadeIn("slow");
      });
      $(function() { // Fairly messy. Changes submit button based on radio button and shows/hides shorten-password and report-details elements
        $("input[type=radio]").on('click', function(){
          if($('#shorten').is(':checked')){
            $("#short-button").html('Shorten');
            $("#report").val('');
            $("#pass").val('');
          }
          if ($('#dellink').is(':checked')){
            $("#shorten-password").slideDown("slow");
            $("#short-button").html('Delete');
            $("#report").val('');
          }else{ 
            $("#shorten-password").slideUp("slow");
          }
          if($('#replink').is(':checked')){
            $("#report-details").slideDown("slow");
            $("#short-button").html('Report');
            $("#pass").val('');
          }else{
            $("#report-details").slideUp("slow");
          }
        });
      });

      // This is our AJAX - Thank you Wizzy <3
      $("#form-shorten").submit(function(event){
        event.preventDefault();
        event.stopPropagation();
        $.post("process.php?token=<?php echo $token; ?>", $(this).serialize(), function(data){
          $("#message").html(data);
        });
      });
    </script>
  </body>
</html>