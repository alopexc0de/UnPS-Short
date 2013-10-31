<?php $appname = "  Shortener TOS"; ?>
<!DOCTYPE>
<html prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">
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
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

    <style type="text/css">
      .terms{
        background-color: rgba(33, 33, 33, 0.8);
        color: #eee;
        max-width: 80%;
        padding-left:3px;
        
        -webkit-border-radius: 4px;
           -moz-border-radius: 4px;
                border-radius: 4px;
        
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 15px rgba(94, 125, 142, 0.9) !important;
           -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 15px rgba(94, 125, 142, 0.9) !important;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 15px rgba(94, 125, 142, 0.9) !important;
      }
    </style>

  </head>
  <body>
    <div id="wrap">
      <?php include('navbar.php'); ?>

      <div class="container terms">
        <h3>UnPS Link Shortener Terms of Service ("Agreement")</h3>
        <p>This Agreement was last modified on October 31, 2013.</p>

        <p>Please read these Terms of Service ("Agreement", "Terms of Service") carefully before using http://unps.us ("the Site") operated by Unified Programming Solutions ("us", "we", or "our"). This Agreement sets forth the legally binding terms and conditions for your use of the Site at http://unps.us.</p>
        <p>By accessing or using the Site in any manner, including, but not limited to, visiting or browsing the Site or contributing content or other materials to the Site, you agree to be bound by these Terms of Service. Capitalized terms are defined in this Agreement.</p>

        <p><strong>Intellectual Property</strong><br />The Site and its original content, features and functionality are owned by Unified Programming Solutions and are protected by international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws.</p>

        <p><strong>Termination</strong><br />We may terminate your access to the Site, without cause or notice, which may result in the forfeiture and destruction of all information associated with you. All provisions of this Agreement that by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>

        <p><strong>Links To Other Sites</strong><br />Our Site may contain links to third-party sites that are not owned or controlled by Unified Programming Solutions.</p>
        <p>Unified Programming Solutions has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party sites or services. We strongly advise you to read the terms and conditions and privacy policy of any third-party site that you visit.</p>

        <strong>NOTE: We reserve the right to remove links at any time without notification or reason. The links that are submitted ARE reviewed. You have been forwarned</strong>
        <p>
          <strong>UnAcceptable Use</strong> is dictated by, but is not limited to the following list. 
          <ul>
            <li>Posting of pornography or sexually explicit content</li>
            <li>Illegal actions, or websites promoting illegal actions</li>
            <li>Spam. Nobody likes it, don't use my service to distribute spam</li>
            <li>Linking to viruses and other malware. Nobody wants their computer infected</li>
            <li>Attempts to, or links to tools to hack into servers (including this one)<li>
            <p style="font-size:89%;">This is not an all encompassing list, but I feel it to be enough for most people to get the gist.</p>
          </ul>

          <strong>Acceptable Use</strong> is using the services as they were intended (IE: you provide a link and shorten it, or delete a link you've previously shortened) Link reporting is for links that violate these terms, or dead links (either links that redirect to a no-longer existing webiste or links that redirect to the shortener home page)
        </p>

        <p><strong>Identifying Information</strong> Our website makes use of Cookies (small text files less than 4KB that your browser stores on your computer containing site specific information). Information from you that we record are as follows: <ul><li>Your computer's IP (Internet Protocall) address</li><li>Date and time you accessed Our Site</li><li>Your browser information</li><li>Your Operating System name and version</li><li>The link to shorten (if any)</li><li>The randomly generated information regarding the link</li><li>Whether or not We failed to shorten your link</li><li>Any information, if any, that you put into the report link dialog</li></ul></p>

        <p><strong>Governing Law</strong><br />This Agreement (and any further rules, polices, or guidelines incorporated by reference) shall be governed and construed in accordance with the laws of Minnesota, USA, without giving effect to any principles of conflicts of law.</p>

        <p><strong>Changes To This Agreement</strong><br />We reserve the right, at our sole discretion, to modify or replace these Terms of Service by posting the updated terms on the Site. Your continued use of the Site after any such changes constitutes your acceptance of the new Terms of Service.</p>
        <p>Please review this Agreement periodically for changes. If you do not agree to any of this Agreement or any changes to this Agreement, do not use, access or continue to access the Site or discontinue any use of the Site immediately.</p>
      </div>
    </div>

    <div id="footer" style="position:fixed;width:100%;bottom:2px;">
      <div class="container">
        <br /><p class="text-muted credit" style="padding-bottom:20px;">
          Copyright &copy; 2012-2013 UnPS-GAMATechnologies - Fork me on <a href="https://github.com/alopexc0de/UnPS-Short">GitHub</a>
          <a id="privacy-link" href="http://unps-gama.info/privacy.php">Privacy Policy</a> <a id="tos-link" href="http://unps-gama.info/terms.php">Terms Of Service</a>
        </p>
      </div>
    </div>

    <!-- Load the JS after the DOM so speed up load times -->
    <script type="text/javascript" language="JavaScript"  src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" language="JavaScript"  src="assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" language="JavaScript" src="assets/js/unps.core.js"></script>
  </body>
</html>