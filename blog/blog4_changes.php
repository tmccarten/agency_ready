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
    <?php include_once("../assets/includes/analyticstracking.php") ?>
    <?php include '../assets/includes/header.php';?>

    <div class="breadcrumb-container">
      <div class="breadcrumb">
        <a href="/index.php">Home</a> / <a href="/blog.php">Blog</a> / Portfolio updates and improvements
      </div>
    </div>

    <main class="page-wrapper" role="main" id="skipnav">

    <div class="wrapper blog">
        <article class="contentblock">
          <h3>Portfolio updates and improvements</h3>

          <p class="blog-date-context">February 25th, 2017</p>

              <p><b>After receiving feedback from lecturers and industry professionals alike, it was time to take heed of this advice and make amendments to the website.</b></p>
              <p>View the <a href="http://www.06167055.webdevmmu.uk/Other/Archived_Portfolio/index.php" title="Previous version of Thomas McCarten's portfolio website">old version here</a></p>

              <h4>Information architecture</h4>
              <p>The most glaring issue was on <a href="http://www.06167055.webdevmmu.uk/Other/Archived_Portfolio/blog.php" title="Old version of Thomas McCarten's blog page">the blog page</a>, an obvious example of poorly considered information architecture. Whilst this in theory directed to the newest blog post by default, the only method to access other posts was via the sidebar. The sidebar numbered each post incrementally... unusual in itself, but particularly when there's no post date to go with each title. The fix for these problems therefore came in two parts - creating a landing page for the blog page with a list of all the blog posts and their post dates, and a new sidebar that displayed only the latest four posts with a date stamp adjacent to the title. The logical conclusion of the previous incarnation was a potential UX nightmare: a never-ending sidebar of numbered blog posts!<p>

              <p>With the new sidebar complete I realised it could be useful on the home page, which had nothing on it but static content. Google monitors pages for fresh content and <a href="https://moz.com/blog/google-fresh-factor-new" title="10 Illustrations of How Fresh Content May Influence Google Rankings">may influence Google rankings</a>. With that in mind, the homepage was reorganised to make space for the sidebar. As well as potential SEO benefits, I thought it would also encourage the user to actually read the blog posts if they could see them straight away on the homepage.</p>

              <h4>Aesthetics</h4>
              <p>Whilst I liked the colour palette, it was essentially duo-tone and calling out for a third colour. You can see this on the blog dates, a small addition that to my eyes works in harmony with the blue tones and makes quite a difference to the overall aesthetic.</p>
              <p>On each blog post the main title has been given the 'Merriweather' font treatment to match those on the tiles of the homepage, and given a substantial increase in size. At desktop size in particular I think this works well, looks more blog-like and ensures greater differentiation between the title and the sub-headings within each post.</p>
              <p>The max-width of the site's container, that is, the area in the middle where everything sits, has been expanded from 960px wide to 1200px. 960px was already somewhat dated when I made the first version of the site, and 1200px reduces the amount of whitespace either side of the middle, mitigating slightly the effect of higher and higher resolutions being used for browsing at desktop width.</p>

              <h4>Code</h4>
              <p>There were some cross-browser issues with regards to the tiles on the homepage and the centering of their titles. Due to a <a href="https://developers.google.com/web/updates/2016/06/absolute-positioned-children" title="Blog post about change to Flexbox spec">change in the Flexbox spec</a> that browsers have adopted at different rates, Chrome displayed the titles perfectly centred whilst Firefox and IE had them pushed off to the side. This was remedied by removing the inline images and therefore the need for absolute positioning. I may add the images back in as background images but I like the look of the tiles without for the time being.</p>
              <p>The script tag linking to my JavaScript file was removed from the header and placed before the closing body tag. It's better practice to place JS files at the end, such that the website will always at least load before it gets to it.</p>

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
