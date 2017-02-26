<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "About"; ?>

    <meta charset="utf-8">

    <title>About | Thomas McCarten Portfolio</title>

    <meta name="description" content="About Manchester front-end web developer Thomas McCarten, experience and interests.">
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
        <a href="/index.php" title="Thomas McCarten's portfolio homepage.">Home</a> / About
      </div>
    </div>

    <main class="page-wrapper" role="main" id="skipnav">

      <div class="wrapper about">
        <article class="contentblock about">
          <h3>About me</h3>

          <p>I moved to Manchester in 2014 to begin a BSc Web Development degree at Manchester Metropolitan University. As a mature student I often wonder why I didn't do this sooner. My work experience was totally at odds with my interests so I decided it was time to change that.</p>

          <p>I developed an interest in CSS around ten or so years ago when MySpace (I'm old) was king. The profiles allowed for customisation with CSS so I ended up spending far too long trialing, erroring and eventually getting somewhere. I suppose it was a more rudimentary version of what people do with WordPress templates today.

          <p>I’m always learning. No one wants to be left behind in such a <a href="blog/blog1_digitalindustry.php" title="Blog post by Thomas McCarten about digital industry">fast-moving industry</a>.</p>

          <p>Currently getting to grips with SASS, Gulp and Github in order to speed up and improve my workflow and design process. </p>



        </article>

        <aside class="sidebar about">

          <img src="/assets/img/about/me3.jpg" alt="" height="300" width="300">
          <img src="/assets/img/about/me.jpg" alt="Tom McCarten next to the sea at a pebbled beach." height="300" width="300">
        </aside>
      </div>
    </main>

<?php include 'assets/includes/footer.php';?>

<script src="/assets/js/script.js"></script>
</body>
</html>
