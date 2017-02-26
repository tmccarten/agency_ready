<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "Blog"; ?>

    <meta charset="utf-8">

    <title>Optimising for increased speed and integrity | Blog | Thomas McCarten Portfolio</title>

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
        <a href="/index.php">Home</a> / <a href="/blog.php">Blog</a> / Optimising for increased speed and integrity
      </div>
    </div>

    <main class="page-wrapper" role="main" id="skipnav">

    <div class="wrapper blog">
        <article class="contentblock">
          <h3>Optimising for increased speed and integrity</h3>

          <p class="blog-date-context">December 2nd, 2016</p>

            <h4>Code Validation</h4>

              <p>In wanting to make the switch from amateur to professional front end web developer I think optimisation (as a broad term) and knowing how to do it will be of paramount importance.</p>

              <p>With that in mind I have ensured that the HTML of every page of this website validates to HTML5 standards of W3C. There are different methods of ensuring that the code you’re writing is valid and semantic. I don’t think you can go wrong with the <a href="https://validator.w3.org/" title="W3C HTML Validator">W3C Markup Validation Service.</a> This is my preferred method of HTML validation, but there are alternatives available. These include validators built into the software you write your HTML in. HTML that doesn’t validate is always going to be a risk in terms of usability but more so accessibility. A page that looks perfectly functional may be broken and unusable for a screen reader user if the HTML is invalid.</p>

            <h4>Page optimisation</h4>

              <p>Speed is key, particularly now that the phone is the most widely used method of browsing the internet. 4G is all well and good but using up your data allowance on huge images you can’t even get the benefit of isn’t. I made the conscious decision to save my images as PNG and then use <a href="http://www.tinypng.com" title="Tiny PNG homepage">Tiny PNG</a> to drastically reduce the file size. I think this works well for images with a limited colour range but I saw room for improvement with some of the photography. I opened these up in Photoshop and manually applied compression to output as JPG. I ran <a href="https://addons.mozilla.org/en-gb/firefox/addon/dust-me-selectors/" title="Dust Me Selectors Firefox Add-On">Dust Me Selectors</a> across all pages in one sweep (the spider option) and this notified me of the CSS selectors not being used anywhere on the entire website. I then removed these, cutting down on the lines of code being sent from the server to user unnecessarily.</p>

            <img src="/assets/img/blog/dustme.png" alt="List of unused CSS selectors in Dust Me Add-On" width="575" height="493">

            <h4>SEO integration</h4>

              <p>Ensured that all pages had a present and appropriate page title. Page titles appear on Google as the blue text atop each search result, so it’s necessary to make these relevant. Not just for the user, but to satisfy the algorithms Google use behind the scenes. By the same token I gave each page a suitable page description via the meta tag and added a few keywords that I’d like to be associated with via search terms. The latter is somewhat outdated but does no harm. Backlinks are crucial for improving page ranking on Google so I’ll be sure to link to my portfolio on social media when it goes live. Similarly, I chose to embed the tweets within <a href="/blog/blog1_digitalindustry.php" title="Blog post by Thomas McCarten about the digital industry">this blog post</a>. The navigation structure, semantic HTML and none of the pages being broken are all good things for SEO.</p>

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
