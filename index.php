<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "Work"; ?>

    <meta charset="utf-8">

    <title>Home | Thomas McCarten Portfolio</title>

    <meta name="description" content="Homepage of Manchester front-end web developer Thomas McCarten, with examples of work and blog posts.">
    <meta name="keywords" content="Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations,Photography">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">

    <?php include 'assets/includes/fonts.php';?>

    <link rel="stylesheet" href="/assets/css/style.css">

  </head>

<body>
    <?php include_once('assets/includes/analyticstracking.php') ?>
    <?php include 'assets/includes/header.php';?>

    <main class="page-wrapper" role="main" id="skipnav">

    <div class="wrapper index">

      <div class="work-wrapper">

          <div class="work-tile alternate intro">
            <div class="work-tile-inner">
              <p>Hello!</p><p>I'm a front-end web developer based in Manchester.</p><p><a href="contact.php" title="Thomas McCarten's contact page.">Get in touch.</a></p>
            </div>
          </div>

          <div class="work-tile alternate">
            <div class="work-tile-inner">
              <a href="http://twitter.com/thomasmccarten" title="Thomas McCarten's Twitter page.">twitter</a> |
              <a href="https://github.com/tmccarten" title="Thomas McCarten's Github page.">github</a>
            </div>
          </div>

          <a href="/work/logos.php" class="work-tile" title="Logos by Thomas McCarten">
                <h2 class="title-box work small">Logos</h2>
          </a>

          <a href="/work/illustration.php" class="work-tile" title="Illustrations by Thomas McCarten">
              <h2 class="title-box work small">Illustration</h2>
          </a>

          <a href="/work/photography.php" class="work-tile" title="Photography by Thomas McCarten">
              <h2 class="title-box work small">Photography</h2>
          </a>

          <a href="/work/websites.php" class="work-tile" title="Websites by Thomas McCarten">
              <h2 class="title-box work small">Websites</h2>
          </a>

          <a href="/work/other.php" class="work-tile" title="Various work by Thomas McCarten">
              <h2 class="title-box work small">Other</h2>
          </a>

      </div>

    <div class="side-wrapper">

        <div class="work-tile alternate blog">
          <h2>Latest posts</h2>
          <div class="work-tile-inner blog">
            <span class="blog-date">13 <span>Nov</span></span><h3><a href="#">Optimising for increased speed and integrity</a></h3>
          </div>
          <div class="work-tile-inner blog">
            <span class="blog-date">28 <span>Nov</span></span><h3><a href="#">Building my portfolio</a></h3>
          </div>
          <div class="work-tile-inner blog">
            <span class="blog-date">28 <span>Nov</span></span><h3><a href="#">Building my portfolio</a></h3>
          </div>
        </div>

    </div>

    </div>

    </main>

<?php include 'assets/includes/footer.php';?>


</body>
</html>
