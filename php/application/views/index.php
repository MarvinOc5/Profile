    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Flat Design Mini Portfolio</title>
    <meta name="description" content="Flat Design Mini Portfolio">
    <meta name="keywords" content="responsive, bootstrap, flat design, flat ui, portfolio">
    <meta name="author" content="Dzyngiri">
    <meta name="description" content="This is a responsive flat design mini portfolio for creative folks who want to showcase their work online.">
    <!-- styles -->
    <link href="<?php echo $base ?>/media/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $base ?>/media/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo $base ?>/media/css/style.css" rel="stylesheet">
    <link href="<?php echo $base ?>/media/font/css/fontello.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.html"><img src="<?php echo $base ?>/media/img/user.jpg"/></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="index.html" class="active"><i class="icon-user"></i> Profile</a></li>
            <li><a href="skills.html"><i class="icon-trophy"></i> Skills</a></li>
            <li><a href="work.html"><i class="icon-picture"></i> Work</a></li>
            <li><a href="resume.html"><i class="icon-doc-text"></i> Resume</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <!--Profile container-->
    <div class="container profile">
      <div class="span3"> <img src="<?php echo $base ?>/media/img/mini.png"> </div>
      <div class="span5">
        <h1>Juan Dela Cruz</h1>
        <h3>Web &amp; Graphics Designer</h3>
        <p> Hello I am Juan Dela Cruz Web and Graphics Designer from Philipines. If yopu have something to be done just call my name and I will be there. :-) </p>
        <a href="#" class="hire-me"><i class="icon-paper-plane"></i> Hire Me </a> </div>
    </div>
    <!--END: Profile container-->
    <!-- Social Icons -->
    <div class="row social">
      <ul class="social-icons">
        <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/fb.png" alt="facebook"></a></li>
        <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/tw.png" alt="twitter"></a></li>
        <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/go.png" alt="google plus"></a></li>
        <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/pin.png" alt="pinterest"></a></li>
        <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/st.png" alt="stumbleupon"></a></li>
        <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/dr.png" alt="dribbble"></a></li>
      </ul>
    </div>
    <!-- END: Social Icons -->
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
        <p class="pull-right"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" placeholder="Yopur Name">
          <input type="text" placeholder="Your Email">
          <input type="text" placeholder="Website (Optional)">
          <textarea rows="3" style="width:80%"></textarea>
          <br/>
          <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
        </form>
      </div>
    </div>
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo $base ?>/media/js/bootstrap.min.js"></script>
    <script>
                $('#myModal').modal('hidden')
        </script>
    </body>
    </html>
