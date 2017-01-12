<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "Work"; ?>

    <meta charset="utf-8">

    <title>Illustration | Thomas McCarten Portfolio</title>

    <meta name="description" content="Illustrations by front-end web developer Thomas McCarten.">
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
      <div class="breadcrumb work">
        <a href="/index.php" title="Thomas McCarten's portfolio homepage.">Home</a> / Illustration
      </div>
    </div>

    <main class="page-wrapper work" role="main">

      <div class="wrapper work">
        <div class="contentblock work">

          <figure>
            <a href="/assets/img/work/illustrations/illustration_personas.png" title="Full-size version of illustration by Thomas McCarten">
                <img src="/assets/img/work/illustrations/illustration_personas.png" alt="Colourful vector illustrations of young boy and girl." height="404" width="575">
            </a>
          </figure>


        </div>

        <aside class="sidebar work">

          <h3>Overview</h3>
            <p>Most web projects necessitate the creation of user personas to keep in mind the needs of certain types of user during the development phase. I made these last year. I think I can still get some use out of them yet.</p>
          <h4>Tools</h4>
            <p><small>Adobe Illustrator</small></p>

        </aside>
      </div>
    </main>

<?php include '../assets/includes/footer.php';?>

</body>
</html>
