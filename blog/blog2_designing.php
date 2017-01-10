<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php $activePage = "Blog"; ?>

    <meta charset="utf-8">

    <title>Building my portfolio | Blog | Thomas McCarten Portfolio</title>

    <meta name="description" content="Blog posts by front-end web developer Thomas McCarten, including digital industry and design.">
    <meta name="keywords" content="Thomas McCarten,Front-End,Design,Coding,Web Development,Logo Design,Illustrations,Photography">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">

    <?php include '../assets/includes/fonts.php';?>

    <link rel="stylesheet" href="/assets/css/style.css">

  </head>

<body>

    <?php include '../assets/includes/header.php';?>

    <div class="breadcrumb-container">
      <div class="breadcrumb">
        <a href="/index.php">Home</a> / <a href="/blog.php" title="Thomas McCarten's blog page.">Blog</a> / Building my portfolio
      </div>
    </div>

    <main class="page-wrapper" role="main" id="skipnav">

    <div class="wrapper blog">
        <article class="contentblock">
          <h3>Building my portfolio</h3>

          <h4>Inspiration</h4>

            <p>I had a vague idea of how I wanted the website to look (more personal than corporate) after experimenting with different ideas over summer. Nonetheless, I sought and found further inspiration in Creative Bloq’s <a href="http://www.creativebloq.com/portfolios/examples-712368" title="45 design portfolio examples curated by Creative Bloq">45 brilliant design portfolios to inspire you</a> rundown. I was especially interested in the layout decisions the designers made in choosing how to best showcase their work. Whilst some solutions were truly unique, the tried and tested method of presenting each case study or category of work as a clickable square or rectangle in a grid layout seemed the most widely used. <a href="http://strange.wales" title="Gareth Strange homepage">The homepage of Gareth Strange</a> is an excellent example of this, combining clean minimalism with sensible responsive breakpoints to let the beauty of the artwork speak for itself.</p>

            <figure class="blog">
            <img src="/assets/img/blog/strangelove.png" alt="Gareth Strange's tiled homepage." height="416" width="575">
            <figcaption><small>Gareth Strange's homepage.</small></figcaption>
            </figure>

            <p>I don’t have a portfolio of work anything like Gareth’s, but a similar grid layout is something I wanted to use in my own design. I think it’s useful to browse examples of work that we find particularly attractive. Doing so may subconsciously influence our future work even if we don’t realise the information has been absorbed at the time. Creative Something go over this in more detail in this interesting <a href="http://creativesomething.net/post/66982583259/the-creative-processing-your-brain-wont-tell-you" title="Article on creative processing by Creative Something">article on creative processing.</a></p>

          <h4>Designing it</h4>

            <p>For the design, I skipped straight into creating a high fidelity concept in Photoshop. Don’t do this. Not only does it run the risk of wasting hours of development time on a website that may prove to be unfeasible in a user experience sense, it limits your thinking. Fortunately, whilst not evidenced on paper, I had roughly considered the organisation of pages and content before I began coding. But if I were to do it again I’d follow the correct procedure of brainstorming and <a href="http://www.experienceux.co.uk/faqs/what-is-wireframing" title="Definition of wireframing by Experience UX.">wireframing</a> different options. The information architecture could be improved - I'd like the homepage to feature teasers of content from other pages. I will rectify that in due course.</p>

            <figure class="blog">
            <img src="/assets/img/blog/wireframes.png" alt="Wireframes of home and about pages." height="315" width="575">
            <figcaption><small>Wireframes... reverse engineering.</small></figcaption>
            </figure>

            <figure class="blog">
            <img src="/assets/img/blog/concept.png" alt="An early mock-up of about page." height="341" width="575">
            <figcaption><small>My hi-fi mockup in Photoshop.</small></figcaption>
            </figure>

            <p>Despite this, one thing I was highly conscious of from the beginning and let dictate the design of the layout somewhat was line length. Websites with overly long line lengths give off a conspicuous air of amateurism, so it was important to me to keep it within the ideal range of 45 to 75 characters. This Laura Franz <a href="https://www.smashingmagazine.com/2014/09/balancing-line-length-font-size-responsive-web-design" title="Article on line length by Smashing Magazine">article on line length and font-size</a> for Smashing Magazine was an excellent resource on the topic, suggesting that it’s the width of the text container that should be altered to preserve line length, not the size of the font. Overly large font sizes have a negative impact on readability.</p>

          <h4>Building it</h4>

            <p>Otherwise known as the technical bit. The first step was to setup a folder structure for development. I tend to use the same setup now for all web projects, and the folder structure was something I learned from Travis Neilson of DevTips. His <a href="https://github.com/DevTips/DevTips-Starter-Kit" title="Github repository for Starter Kit by DevTips">DevTips Starter Kit</a> was a perfect introduction to thinking about the organisation of the development process more professionally. In doing so I became an advocate of <a href="http://sass-lang.com" title="Sass homepage">Sass</a>, <a href="http://gulpjs.com" title="Gulp homepage">Gulp</a> and <a href="https://git-scm.com" title="Git homepage">Git</a>. Using Sass in conjunction with Gulp greatly improved the ease and speed of my workflow; the former allowing the use of variables, nesting and partials enabled me to write code in a more organised, modular fashion than vanilla CSS. As well as using Gulp to compile my Sass to CSS, I used <a href="https://www.browsersync.io" title="BrowserSync homepage">Browsersync</a> to allow for instant browser reloading after saving code, <a href="https://autoprefixer.github.io" title="Autoprefixer homepage">Autoprefixer</a> to automatically add the vendor prefixes to CSS properties for older browsers and <a href="https://www.npmjs.com/package/gulp-connect-php" title="Gulp-connect-php homepage">gulp-connect-php</a> to run a local PHP server during development.<p>

            <figure class="blog">
            <img src="/assets/img/blog/sassgulp.png" alt="SASS and Gulpfile code in Atom editor." height="369" width="575">
            <figcaption><small>Variables in SASS and my gulpfile.js.</small></figcaption>
            </figure>

            <p>Using Git for version control meant I could experiment to my heart’s content without fear of breaking something past the point of no return. I found having such peace of mind valuable to say the least.</p>

            <p>Thanks to flexbox the overall layout was relatively simple to code, major breakpoints usually entailed simply changing the flex-direction to ‘column’ or ‘row’, depending on the context, and then tweaking. One aspect I found rewarding was figuring out how I could create those boxed headers with the dotted border and horizontal lines either side. My first attempt was almost successful but the horizontal line was visible behind the header text. After experimenting for a while I arrived at the answer by breaking up the header into three distinct parts and applying a negative top margin to the box in the middle. I saved the <a href="https://codepen.io/blackmath/pen/qaGEog" title="CodePen for a technique by Thomas McCarten">technique on CodePen</a> if this interests you. <p>Here’s <a href="https://github.com/tmccarten/agency_ready" title="Github repository for Thomas McCarten's portfolio.">my Github repository</a> if you want to see how much blood, sweat and tears went into making this site.</p>

          <h4>References</h4>

            <p><small>Staff, C. B. (2016) '45 brilliant design portfolios to inspire you.'. [Online] 13th September. [Accessed on 12th November 2016] <a href="http://www.creativebloq.com/portfolios/examples-712368">http://www.creativebloq.com/portfolios/examples-712368</a></small></p>

            <p><small>Strange, G. (no date) Strangelove. Strangelove. [Online] [Accessed on 13th November 2016] <a href="http://strange.wales">http://strange.wales</a></small></p>

            <p><small>Christensen, T. (2013) The creative processing your brain won’t tell you about. 14th November. Creative Something. [Online] [Accessed on 13th November 2016] <a href="http://creativesomething.net/post/66982583259/the-creative-processing-your-brain-wont-tell-you">http://creativesomething.net/post/66982583259/the-creative-processing-your-brain-wont-tell-you</a></small></p>

            <p><small>Rees, D. (2015) What is wireframing. 1st June. Experience UX. [Online] [Accessed on 13th November 2016] <a href="http://www.experienceux.co.uk/faqs/what-is-wireframing">http://www.experienceux.co.uk/faqs/what-is-wireframing</a></small></p>

            <p><small>Franz, L. (2014) Size matters: Balancing line length and font size in responsive web design – smashing magazine. 29th September. Design. [Online] [Accessed on 13th November 2016] <a href="https://www.smashingmagazine.com/2014/09/balancing-line-length-font-size-responsive-web-design">https://www.smashingmagazine.com/2014/09/balancing-line-length-font-size-responsive-web-design</a></small></p>

            <p><small>DevTips. (2015) DevTips/DevTips-Starter-Kit: Ground zero for your next project. 21st July. Github. [Online] [Accessed on 13th November 2016] <a href="https://github.com/DevTips/DevTips-Starter-Kit">https://github.com/DevTips/DevTips-Starter-Kit</a></small></p>

            <p><small>Catlin, H., Weizenbaum, N. and Eppstein, C. (2015) Sass: Syntactically Awesome Style Sheets. Sass-lang. [Online] [Accessed on 13th November 2016] <a href="http://sass-lang.com">http://sass-lang.com</a></small></p>

            <p><small>Gulpjs. (no date) gulp.js - the streaming build system. [Online] [Accessed on 13th November 2016] <a href="http://gulpjs.com">http://gulpjs.com</a></small></p>

            <p><small>Git. (no date) Git. [Online] [Accessed on 13th November 2016] <a href="https://git-scm.com">https://git-scm.com</a></small></p>

            <p><small>Browsersync. (no date) Browsersync - Time-saving synchronised browser testing. [Online] [Accessed on 13th November 2016] <a href="https://www.browsersync.io">https://www.browsersync.io</a></small></p>

            <p><small>Blu, M. (2016) gulp-connect-php. 31st July. Npmjs. [Online] [Accessed on 13th November 2016] <a href="https://www.npmjs.com/package/gulp-connect-php">https://www.npmjs.com/package/gulp-connect-php</a></small></p>

            <p><small>CodePen. (no date) A Pen by Thomas McCarten. [Online] [Accessed on 13th November 2016] <a href="https://codepen.io/blackmath/pen/qaGEog">https://codepen.io/blackmath/pen/qaGEog</a></small></p>

        </article>

        <aside class="sidebar">

        <div class="title blog">
          <div class="title-border-left"></div>
            <h2 class="title-box medium">Posts</h2>
          <div class="title-border-right"></div>
        </div>

        <div class="sidebar-posts">
          <ol>
            <li><a href="/blog/blog1_digitalindustry.php" title="Blog post about the digital industry and front-end by Thomas McCarten">Front-end in a booming digital industry</a>
            <li><a href="/blog/blog2_designing.php" class="current" title="Blog post about how he built his portfolio website by Thomas McCarten">Building my portfolio</a>
            <li><a href="/blog/blog3_optimisation.php" title="Blog post about how he optimised his portfolio website by Thomas McCarten">Optimising for increased speed and integrity</a>
            <li><a href="/blog/blog4_archived.php" title="Blog post about the changes made to Thomas McCarten's portfolio website">Archived website</a>
          </ol>
        </div>

        </aside>
      </div>
    </main>

<?php include '../assets/includes/footer.php';?>

</body>
</html>
