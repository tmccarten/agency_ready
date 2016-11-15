<!DOCTYPE HTML>
<html>
  <head>
    <?php $activePage = "Home"; ?>

    <meta charset="utf-8">
    <title>Home - Thomas McCarten Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">

    <?php include 'assets/includes/fonts.php';?>
    <link rel="stylesheet" href="assets/css/style.css">



  </head>

<body>

    <?php include 'assets/includes/header.php';?>

    <main class="page-wrapper work">

    <div class="wrapper work">

        <div class="work-tile intro">
          <div class="work-tile-inner">
            <p>Hello!</p><p>I'm a front-end web developer based in Manchester.</p><p><a href="contact.php">Get in touch.</a></p>
          </div>
        </div>

        <div class="work-tile">
            <h2 class="title-box work small">Logos</h2>
              <a href="#">
                <img src="assets/img/work/logos.png" alt="Telescope Furniture logo" height="288" width="288">
              </a>
        </div>

        <div class="work-tile">
            <h2 class="title-box work small">Illustration</h2>
              <a href="#">
                <img src="assets/img/work/illustrations.png" alt="Illustration of the top half of a boy's head." height="288" width="288">
            </a>
        </div>

        <div class="work-tile">
            <h2 class="title-box work small">Photography</h2>
              <a href="#">
                <img src="assets/img/work/photography.png" alt="Telescope Furniture logo" height="288" width="288">
              </a>
        </div>

        <div class="work-tile">
            <h2 class="title-box work small">Websites</h2>
              <a href="#">
                <img src="assets/img/work/websites.png" alt="Telescope Furniture logo" height="288" width="288">
              </a>
        </div>

        <div class="work-tile">
            <h2 class="title-box work small">Other</h2>
              <a href="#">
                <img src="assets/img/work/other.png" alt="Telescope Furniture logo" height="288" width="288">
              </a>
        </div>

      </div>

    </main>

<?php include 'assets/includes/footer.php';?>


</body>
</html>
