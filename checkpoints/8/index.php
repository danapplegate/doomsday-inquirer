<?php
include 'structure/init.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> > <?php echo $tagline; ?></title>
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
              <li class="active"><a href="#"><i class="icon-home icon-white"></i>Home</a></li>
              <li><a href="news/"><i class="icon-globe icon-white"></i>News</a></li>
              <li><a href="checklist.php"><i class="icon-th-list icon-white"></i>Checklist</a></li>
            </ul>
          </div><!--/.nav-collapse -->
          <div class="nav-greeting pull-right">
          <i class="icon-user"></i><span class="greeting">Welcome, <?php echo $user; ?>!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <hgroup>
        <h1 class="brand"><?php echo $title; ?></h1>
        <h2 class="tagline"><?php echo $tagline; ?></h2>
        </hgroup>
        <p class="lead">From meteors to astrological predictions, we've got you covered with the latest breaking news on the coming apocalypse.</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span8">
          <article>
            <h2><a href="news/camping-returns-from-retreat.php" title="Camping Returns from Retreat, Reveals His Latest Prediction">Camping Returns from Retreat, Reveals His Latest Prediction</a></h2>
            <img src="assets/img/harold-camping.jpeg" alt="Harold Camping makes a prediction" class="article pull-left" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum, quam vitae varius volutpat, est massa consectetur dolor, sed euismod nulla felis non nibh. Quisque at risus nec dui sollicitudin fringilla. Etiam lacus elit, adipiscing at gravida eu, commodo id orci. In imperdiet, nunc et laoreet rutrum, quam libero hendrerit odio, et vehicula lectus augue ut turpis. Fusce faucibus quam ut turpis ultrices blandit dapibus felis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec at convallis nulla. Etiam posuere tempor ipsum, quis dignissim augue venenatis sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus porta rutrum nisl, sit amet rutrum justo dapibus eleifend. Mauris porta, lorem a hendrerit tristique, felis felis porttitor massa, quis egestas quam felis vestibulum risus.</p>
            <p><a class="btn pull-right" href="news/camping-returns-from-retreat.php">Read More &raquo;</a></p>
          </article>
        </div>

        <!-- include structure/sidebar -->
        <?php include 'structure/sidebar.php'; ?>

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
