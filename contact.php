<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "Contact"; ?>

    <meta charset="utf-8">

    <title>Contact | Thomas McCarten Portfolio</title>

    <meta name="description" content="Contact page of front-end web developer Thomas McCarten, including email and social media.">
    <meta name="keywords" content="Thomas McCarten,Front-End,Design,Coding,Web Development,Logo Design,Illustrations,Photography">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">

    <?php include '/assets/includes/fonts.php';?>

    <link rel="stylesheet" href="/assets/css/style.css">

  </head>

<body>

    <?php include '/assets/includes/header.php';?>

    <div class="breadcrumb-container">
      <div class="breadcrumb">
        <a href="/index.php" title="Thomas McCarten's portfolio homepage.">Home</a> / Contact
      </div>
    </div>

    <main class="page-wrapper" role="main" id="skipnav">
    <div class="title main">
      <div class="title-border-left"></div>
        <h2 class="title-box large">Contact</h2>
      <div class="title-border-right"></div>
    </div>

      <div class="wrapper">
        <section class="contentblock">

          <form method="POST" action="http://formspree.io/thomasmccarten@hotmail.com" class="contactform">

            <label for="name">Name:</label>
              <input type="text" name="name" id="name">
            <label for="email">Email:</label>
              <input type="email" name="email" id="email">
            <label for="message">Message:</label>
                <textarea name="message" id="message"></textarea>
                  <button type="submit">Send</button>
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

</body>
</html>
