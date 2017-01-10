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

    <?php include '../assets/includes/header.php';?>

    <div class="breadcrumb-container">
      <div class="breadcrumb">
        <a href="/index.php">Home</a> / <a href="/blog.php">Blog</a> / Archived website
      </div>
    </div>

    <main class="page-wrapper" role="main" id="skipnav">

    <div class="wrapper blog">
        <article class="contentblock">
          <h3>Archived website</h3>

            <h4>The old version of this website</h4>

              <p><a href="http://www.06167055.webdevmmu.uk/Other/Archived_Portfolio/index.php" title="Previous version of Thomas McCarten's portfolio website">Old portfolio website</a></p>

        </article>

        <aside class="sidebar">

        <div class="title blog">
          <div class="title-border-left"></div>
            <h2 class="title-box medium">Posts</h2>
          <div class="title-border-right"></div>
        </div>

        <div class="sidebar-posts">
          <ol>
            <li><a href="/blog/blog1_digitalindustry.php" title="Blog post about the digital industry and front-end by Thomas McCarten">Front-end in a booming digital industry</a>
            <li><a href="/blog/blog2_designing.php" title="Blog post about how he built his portfolio website by Thomas McCarten">Building my portfolio</a>
            <li><a href="/blog/blog3_optimisation.php" title="Blog post about how he optimised his portfolio website by Thomas McCarten">Optimising for increased speed</a>
            <li><a href="/blog/blog4_archived.php" class="current" title="Blog post about the changes made to Thomas McCarten's portfolio website">Archived website</a>
          </ol>
        </div>

        </aside>
      </div>
    </main>

<?php include '../assets/includes/footer.php';?>

</body>
</html>
