<?php
include '../structure/init.php';

// Load database helper functions
include '../lib/dbHelpers.php';

$slug = 'camping-returns-from-retreat';
if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
}

// Now retrieve the article from the database, using the slug
// from the GET parameter
$article = getArticleBySlug($slug);

// Retrieve the comments for this article from the database
$comments = getCommentsBySlug($slug);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> > News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="From meteors to astrological predictions, we've got you covered with the latest breaking news on the coming apocalypse.">
    <meta name="author" content="Dan Applegate">

    <!-- Le styles -->
    <link href="../style.css" rel="stylesheet">

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
        <a class="brand" href="../"><?php echo $title; ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="../"><i class="icon-home icon-white"></i>Home</a></li>
              <li class="active"><a href="../news"><i class="icon-globe icon-white"></i>News</a></li>
              <li><a href="../checklist.php"><i class="icon-th-list icon-white"></i>Checklist</a></li>
            </ul>
          </div><!--/.nav-collapse -->
          <div class="nav-greeting pull-right">
            <i class="icon-user"></i><span class="greeting">Welcome, <?php echo $user; ?>!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span12">
          <article>
            <div class="page-header">
                <h1><?php echo $article['title']; ?></h1>
            </div>
            <img src="../assets/img/<?php echo $article['image']; ?>" alt="Article thumbnail" class="article pull-left" />
            <?php echo $article['content']; ?>
            
            <aside>
            <?php if ($comments) : ?>
              <div class="comment-list span10 offset1">
                <h2>Comments</h2>
                <ul class="unstyled">
                <?php foreach ($comments as $comment): ?>
                  <li>
                    <div class="row comment">
                      <div class="author span1">
                      <img src="../assets/img/<?php echo $comment['picture']; ?>" alt="User <?php echo $comment['name']; ?> profile photo" />
                          <p class="user-name"><?php echo $comment['name']; ?></p>
                      </div><!-- end .author -->
                      <div class="message span6">
                          <p><?php echo $comment['message']; ?></p>
                      </div>
                    </div>
                  </li>
                <?php endforeach; ?>
                </ul>
              </div><!-- comment-list -->
            <?php endif; ?>
              <div class="comment-form span8 offset1">
                <h2>Submit a comment!</h2>
                <form class="well" method="POST" action="#">
                  <input type="hidden" name="article-slug" value="camping-returns-from-retreat" />
                  <label for="commenter-name">Your name</label>
                  <input type="text" name="commenter-name" class="span3" />
                  <label for="message">Your comment</label>
                  <textarea name="message" class="span3"></textarea>
                  <div>
                    <button type="submit" class="btn">Submit</button>
                  </div>
                </form>
              </div>
            </aside>
          </article>
        </div>
      </div>
    
      <hr>

      <footer>
        <div>
        <span class="timestamp pull-right"><?php printRefreshTimestamp(); ?></span>
        <p>&copy; <?php echo $title; ?> 2012</p>
        <p class="tagline"><?php echo $tagline; ?></p>
      </div>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
