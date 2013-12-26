<?php
  session_start(); 

  $appname = "  Shortener";

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

  if(isset($_GET['newbg'])){
    echo "<style>body{background-image: url('assets/images/newbody.jpg') !important;}</style>";
  }

  function userpic($email){
    $default = "http://fox.gy/fCDIjceUvkk.png"; 
    $size = 20;
    $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".urlencode($default)."&s=".$size;
    return $grav_url;
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">
  <head>
    <title>UnPS Link Shortener</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="UnPS Link Shortener"/>
    <meta name="keywords" content="UnPS, GAMA, Shorten, Link"/>
    <meta name="author" content="David Todd"/>
    <meta property="og:image" content="http://fox.gy/fCDIjceUvkk.png"/>
    
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
    <link href="assets/css/elements.css?<?php echo time(); ?>" rel="stylesheet" />

    <!-- Vex CSS (http://github.hubspot.com/vex/) -->
    <link href="../CDN/vex-1.3.5/css/vex.css" rel="stylesheet" />
    <link href="../CDN/vex-1.3.5/css/vex-theme-os.css" rel="stylesheet" />

    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

  </head>
  <body>
    <div id="wrap">
      <?php include('navbar.php'); ?>

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

          <input type="hidden" name="<?php echo $catchid; ?>" value="<?php echo $catchVal; ?>"/>
          <button class="btn btn-block btn-primary" id="short-button" type="submit">Shorten</button>

          <div id="radio-center" style="padding-top:.078%;width:100%;padding-left:3%;" class="btn-group">
            <label class="btn btn-primary" id="shortlab" style="color:#eee;"><input type="radio" id="shorten" name="linkmod" value="shorten" checked="checked">Shorten Link</label>
            <label class="btn btn-primary" id="dellab" style="color:#eee;"><input type="radio" id="dellink" name="linkmod" value="dellink">Delete Link</label>
            <label class="btn btn-primary" id="replab" style="color:#eee;"><input type="radio" id="replink" name="linkmod" value="replink">Report Link</label>
          </div>
        </form>
        <div id="message"></div>
      </div>
    </div>

    <div id="footer" style="position:fixed;width:100%;bottom:2px;">
      <div class="container">
        <br /><p class="text-muted credit" style="padding-bottom:20px;">
          Copyright &copy; 2012-2013 UnPS-GAMATechnologies - Fork me on <a href="https://github.com/alopexc0de/UnPS-Short">GitHub</a>
          <a id="privacy-link" href="http://unps-gama.info/privacy.php">Privacy Policy</a> <a id="tos-link" href="terms.php">Terms Of Service</a>
        </p>
      </div>
    </div>

    <!-- Load the JS after the DOM so speed up load times -->
    <script type="text/javascript" language="JavaScript"  src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" language="JavaScript"  src="assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" language="JavaScript"  src="assets/js/autoresize.jquery.js"></script> <!-- Credit to http://james.padolsey.com for this jQuery plugin -->
    <script type="text/javascript" language="JavaScript" src="assets/js/unps.core.js"></script>
    
    <!-- Vex stuff -->
    <script src="../CDN/vex-1.3.5/js/vex.combined.min.js"></script>
    <script src="assets/js/vex.js"></script>

    <script type="text/javascript" language="JavaScript">
      // This is our AJAX - Thank you Wizzy <3
      $("#form-shorten").submit(function(event){
        event.preventDefault();
        event.stopPropagation();
        $.post("process.php?token=<?php echo $token; ?>", $(this).serialize(), function(data){
          $("#message").hide().html(data).fadeIn("fast");
          if($('#error').length){
            $('#short-button').removeClass('btn-primary');
            $('#short-button').removeClass('btn-success');
            $('#short-button').addClass('btn-danger');
          }else if($('#success').length){
            $('#short-button').removeClass('btn-primary');
            $('#short-button').removeClass('btn-danger');
            $('#short-button').addClass('btn-success');
          }
        });
      });
    </script>
  </body>
</html>