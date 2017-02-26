<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "Blog"; ?>

    <meta charset="utf-8">

    <title>Archived website | Blog | Thomas McCarten Portfolio</title>

    <meta name="description" content="Blog posts by front-end web developer Thomas McCarten, including digital industry and design.">
    <meta name="keywords" content="Thomas McCarten,Front-End,Design,Coding,Web Development,Logo Design,Illustrations,Photography">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">

    <?php include '../assets/includes/fonts.php';?>

    <link rel="stylesheet" href="/assets/css/style.css">

  </head>

<body>
    <?php include_once("../assets/includes/analyticstracking.php") ?>
    <?php include '../assets/includes/header.php';?>

    <div class="breadcrumb-container">
      <div class="breadcrumb">
        <a href="/index.php">Home</a> / <a href="/blog.php">Blog</a> / Portfolio updates and improvements
      </div>
    </div>

    <main class="page-wrapper" role="main" id="skipnav">

    <div class="wrapper blog">
        <article class="contentblock">
          <h3>Portfolio updates and improvements</h3>

          <p class="blog-date-context">February 26th, 2017</p>

            <h4>The old version of this website</h4>

              <p><a href="http://www.06167055.webdevmmu.uk/Other/Archived_Portfolio/index.php" title="Previous version of Thomas McCarten's portfolio website">Old portfolio website</a></p>

        </article>

        <aside class="sidebar blog">
        <?php include '../assets/includes/sidebar.php';?>
        </aside>

      </div>
    </main>

<?php include '../assets/includes/footer.php';?>

<script src="/assets/js/script.js"></script>
</body>
</html>
