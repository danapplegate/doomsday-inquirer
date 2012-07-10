<?php
include 'structure/init.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> > Checklist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="From meteors to astrological predictions, we've got you covered with the latest breaking news on the coming apocalypse.">
    <meta name="author" content="Dan Applegate">

    <!-- Le styles -->
    <link href="style.css" rel="stylesheet">

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
        <a class="brand" href="#"><?php echo $title; ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="./"><i class="icon-home icon-white"></i>Home</a></li>
              <li><a href="news/"><i class="icon-globe icon-white"></i>News</a></li>
              <li class="active"><a href="#"><i class="icon-th-list icon-white"></i>Checklist</a></li>
            </ul>
          </div><!--/.nav-collapse -->
          <div class="nav-greeting pull-right">
            <i class="icon-user"></i><span class="greeting">Welcome!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="page-header">
        <h1>Apocalypse Survival Checklist</h1> 
      </div>
      <div class="row">
        <div class="span8">
          <ol>
            <li>Dig a bomb shelter</li>
            <li>Stockpile guns for inevitable zombie invasion</li>
            <li>Fashion tinfoil hats to prevent alien mind control</li>
          </ol>
        </div>
        
        <!-- include structure/sidebar -->
        <?php include 'structure/sidebar.php'; ?>

        <!-- .row -->
       </div>

      <hr>

      <footer>
        <span class="timestamp pull-right"><?php printRefreshTimestamp(); ?></span>
        <p>&copy; <?php echo $title; ?> 2012</p>
        <p class="tagline"><?php echo $tagline; ?></p>
      </footer>

    </div> <!-- /container -->


  </body>
</html>
