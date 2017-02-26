<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "Blog"; ?>

    <meta charset="utf-8">

    <title>Front-end in a booming digital industry | Blog | Thomas McCarten Portfolio</title>

    <meta name="description" content="Blog posts by front-end web developer Thomas McCarten, including digital industry and design.">
    <meta name="keywords" content="Thomas McCarten,Front-End,Design,Coding,Web Development,Logo Design,Illustrations,Photography">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">

    <?php include 'assets/includes/fonts.php';?>

    <link rel="stylesheet" href="/assets/css/style.css">

  </head>

<body>
    <?php include_once("assets/includes/analyticstracking.php") ?>
    <?php include 'assets/includes/header.php';?>

    <div class="breadcrumb-container">
      <div class="breadcrumb">
        <a href="/index.php">Home</a> / Blog
      </div>
    </div>

    <main class="page-wrapper" role="main" id="skipnav">

    <div class="wrapper blog">
        <div class="contentblock">

          <a href="blog/blog4_changes.php" class="blog-post-chunk">
          <h3>Portfolio updates and improvements</h3>
          <p class="blog-date-context">February 25th, 2017</p>
          </a>

          <a href="blog/blog3_optimisation.php" class="blog-post-chunk">
          <h3>Optimising for increased speed and integrity</h3>
          <p class="blog-date-context">December 2nd, 2016</p>
          </a>

          <a href="blog/blog2_designing.php" class="blog-post-chunk">
          <h3>Building my portfolio</h3>
          <p class="blog-date-context">November 6th, 2016</p>
          </a>

          <a href="blog/blog1_digitalindustry.php" class="blog-post-chunk">
          <h3>Front-end in a booming digital industry</h3>
          <p class="blog-date-context">October 26th, 2016</p>
          </a>

        </div>


      </div>
    </main>

<?php include 'assets/includes/footer.php';?>

</body>
</html>
