<!DOCTYPE HTML>
<html>
  <head>
    <?php $activePage = "Contact"; ?>

    <meta charset="utf-8">
    <title>Contact - Thomas McCarten Portfolio</title>
    <meta name="description" content="">
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
        <h2 class="title-box large">Contact</h2>
      <div class="title-border-right"></div>
    </div>

      <div class="wrapper">
        <section class="contentblock">

          <form action="https://formspree.io/thomasmccarten@hotmail.com" method="POST">
              <input type="text" name="name">
              <input type="email" name="_replyto">
              <input type="submit" value="Send">
          </form>

        </section>

        <aside class="sidebar">

          <div class="title">
            <div class="title-border-left"></div>
              <h2 class="title-box medium">Find me</h2>
            <div class="title-border-right"></div>
          </div>

        <ul class="socialicons">
              <li><a href="#"><img src="assets/img/icons/twitter-logo.svg" height="25" width="25" alt="Twitter logo."></a></li>
              <li><a href="#"><img src="assets/img/icons/facebook-logo.svg" height="25" width="25" alt="Facebook logo."></a></li>
              <li><a href="#"><img src="assets/img/icons/github-logo.svg" height="25" width="25" alt="Github logo."></a></li>
              <li><a href="#"><img src="assets/img/icons/linkedin-logo.svg" height="25" width="25" alt="LinkedIn logo."></a></li>
          </ul>

        <div class="title">
          <div class="title-border-left"></div>
            <h2 class="title-box small">Links</h2>
          <div class="title-border-right"></div>
        </div>

        <div class="sidebar-links">
              <a href="mailto:thomasmccarten@hotmail.com">Email me</a>
              <a href="">View CV</a>
        </div>

        </aside>
      </div>
    </main>

<?php include '/assets/includes/footer.php';?>

</div>


</body>
</html>
