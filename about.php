<!DOCTYPE HTML>
<html>
  <head>
    <?php $activePage = "About"; ?>

    <meta charset="utf-8">

    <title>About | Thomas McCarten Portfolio</title>

    <meta name="description" content="About Manchester front-end web developer Thomas McCarten, experience and interests.">
    <meta name="keywords" content="Thomas McCarten,Front-End,Design,Coding,Web Development,Logo Design,Illustrations,Photography">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">

    <?php include '/assets/includes/fonts.php';?>

    <link rel="stylesheet" href="/assets/css/style.css">

  </head>

<body>

    <?php include '/assets/includes/header.php';?>

    <main class="page-wrapper">

    <div class="title main">
      <div class="title-border-left"></div>
        <h2 class="title-box large">About me</h2>
      <div class="title-border-right"></div>
    </div>

      <div class="wrapper about">
        <article class="contentblock about">
          <h3>About me</h3>
          <p>Hello, I’m <b>Tom</b>...</p>
          <p>...a 28 year old front-end web developer based in Manchester, England.</p>

          <p>I love <b>designing</b> things, <b>coding</b> things, and making things look good.</p>

          <p>I’m always <b>learning</b>. No one wants to be left behind in such a <a href="#">fast-moving industry</a>.</p>

          <p>Currently getting to grips with SASS, Gulp and Github in order to speed up and improve my workflow and design processes.</p>

        </article>

        <aside class="sidebar about">

          <img src="/assets/img/about/me3.jpg" alt="" height="300" width="300">
          <img src="/assets/img/about/me.jpg" alt="Tom McCarten next to the sea at a pebbled beach." height="300" width="300">
        </aside>
      </div>
    </main>

<?php include '/assets/includes/footer.php';?>

</div>

</body>
</html>
