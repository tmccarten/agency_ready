<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "Work"; ?>

    <meta charset="utf-8">

    <title>Websites | Thomas McCarten Portfolio</title>

    <meta name="description" content="Web projects by front-end web developer Thomas McCarten.">
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
        <a href="/index.php">Home</a> / Case Studies
      </div>
    </div>

    <main class="page-wrapper work" role="main">

      <div class="wrapper work">
        <div class="contentblock work">

          <figure>
            <a href="http://06167055.webdevmmu.uk/LPS/" title="LPS working prototype">
                <img src="/assets/img/work/websites/websites_lps.png" alt="Laptop and iPhone vectors displaying websites on the screens." height="334" width="575">
            </a>
          </figure>

        </div>

          <aside class="sidebar work">

          <h3>Liverpool, Pembroke & Sefton Athletics</h3>
            <p>Liverpool, Pembroke and Sefton Harriers and Athletics Club is based at Edge Hill University in the North West of England. Their official website whilst fully functional was lacking any sort of responsiveness, ensuring a poor user experience for all mobile users. I identified this as an opportunity for which to base my final year university project on, and, working with the website editor as my client gave the website a contemporary and responsive overhaul.</p>
            <p><a href="http://06167055.webdevmmu.uk/LPS/" title="LPS working prototype">View live site</a></p>
          <h4>Tools</h4>
            <p><small>HTML5, CSS, PHP, JavaScript</small></p>

          </aside>
      </div>

      <div class="wrapper work">
        <div class="contentblock work">

          <figure>
            <a href="http://06167055.webdevmmu.uk/DPM/index.html" title="The Munchies homepage">
                <img src="/assets/img/work/websites/websites_munchies.png" alt="Laptop and iPhone vectors displaying websites on the screens." height="334" width="575">
            </a>
          </figure>

        </div>

        <aside class="sidebar work">

          <h3>The Munchies</h3>
            <p>For the Digital Project Management unit in the second year of BSc Web Development I took on the web developer role for my team. I was tasked with creating a fully responsive and accessible website to showcase cheap and easy student recipes.</p>
            <p><a href="http://06167055.webdevmmu.uk/DPM/index.html" title="The Munchies homepage">View live site</a></p>
          <h4>Tools</h4>
            <p><small>HTML5, CSS, JavaScript</small></p>

        </aside>
      </div>

  </main>

<?php include '../assets/includes/footer.php';?>

<script src="/assets/js/script.js"></script>
</body>
</html>
