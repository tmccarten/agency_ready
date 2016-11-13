<!DOCTYPE HTML>
<html>
  <head>
    <?php $activePage = "Blog"; ?>

    <meta charset="utf-8">
    <title>Blog - Thomas McCarten Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">
    <link rel="stylesheet" href="assets/css/style.css">

    <?php include 'assets/includes/fonts.php';?>

  </head>

<body>

    <?php include 'assets/includes/header.php';?>

    <main class="page-wrapper">
    <div class="title main">
      <div class="title-border-left"></div>
        <h2 class="title-box large">Blog</h2>
      <div class="title-border-right"></div>
    </div>

      <div class="wrapper blog">
        <article class="textblock">
          <h3>The Digital Industry</h3>
          <h3>Inspiration</h3>
            <p>I already had a vague idea of how I wanted the website to look (more personal, less corporate) after experimenting with different ideas over summer. Nonetheless, I sought and found further inspiration in Creative Bloq’s <a href="http://www.creativebloq.com/portfolios/examples-712368">45 brilliant design portfolios to inspire you</a> rundown. I was especially interested in the layout decisions the designers made in choosing how to best showcase their work. Whilst some solutions were truly unique, the tried and tested method of presenting each case study or category of work as a clickable square or rectangle in a grid layout seemed the most widely used. <a href="http://strange.wales"/>The homepage of Gareth Strange</a> is an excellent example of this, combining clean minimalism with sensible responsive breakpoints to let the beauty of the artwork speak for itself.</p>
              <img src="">
            <p>I don’t have a portfolio of work anything like Gareth’s, but a similar grid layout is something I wanted to use in my own design. I think it’s useful to seek out examples of work that we find particularly attractive. Doing so may subconsciously influence our future work even if we don’t realise the information has been absorbed at the time. Creative Something go over this in more detail in this interesting <a href="http://creativesomething.net/post/66982583259/the-creative-processing-your-brain-wont-tell-you">article on creative processing.</a></p>
          <h3>Designing it</h3>
            <p>For the design, I skipped straight into creating a high fidelity concept in Photoshop. Don’t do this. Not only does it run the risk of wasting hours of development time on a website that may prove to be unfeasible in a user experience sense, it limits your thinking. Fortunately, whilst not evidenced on paper, I had roughly considered the organisation of pages and content, so I think I got away with it in terms of the information architecture. But if I were to do it again I’d follow the correct procedure of brainstorming and <a href=http://www.experienceux.co.uk/faqs/what-is-wireframing/>wireframing</a> different options. </p>
              <img src="wireframe">
              <img src="photoshop">
            <p>Despite this, one thing I was highly conscious of from the beginning and let dictate the design of the layout somewhat was line length. Websites with overly long line lengths give off a conspicuous air of amateurism, so it was important to me to keep it within the ideal range of 45 to 75 characters. This Laura Franz <a href=https://www.smashingmagazine.com/2014/09/balancing-line-length-font-size-responsive-web-design/>article on line length and font-size</a> for Smashing Magazine was an excellent resource on the topic, suggesting that it’s the width of the text container that should be altered to preserve line length, not the size of the font. Overly large font sizes have a negative impact on readability.</p>
          <h3>Building it</h3>
            <p>Otherwise known as the technical bit. The first step was to setup a folder structure for development. I tend to use the same setup now for all web projects, and the folder structure was something I learned from Travis Neilson of DevTips. His <a href=https://github.com/DevTips/DevTips-Starter-Kit>DevTips Starter Kit</a> was a perfect introduction to thinking about the organisation of the development process more professionally. In doing so I became an advocate of <a href=http://sass-lang.com/>Sass</a>, <a href=http://gulpjs.com/>Gulp</a> and <a href="https://git-scm.com/">Git</a>. Using Sass in conjunction with Gulp greatly improved the ease and speed of my workflow; the former allowing the use of variables, nesting and partials enabled me to write code in a more organised, modular fashion than vanilla CSS. As well as using Gulp to compile my Sass to CSS, I used <a href="https://www.browsersync.io"/>Browsersync</a> to allow for instant browser reloading after saving code, <a href="https://autoprefixer.github.io"/>Autoprefixer</a> to automatically add the vendor prefixes to CSS properties for older browsers and <a href="https://www.npmjs.com/package/gulp-connect-php">gulp-connect-php</a> to run a local PHP server during development.<p>
              <img src="sasscode">
            <p>Using Git for version control meant I could experiment to my heart’s content without fear of breaking something past the point of no return. I found that having such peace of mind whilst developing is valuable to say the least.</p>
            <p>Thanks to flexbox the overall layout was relatively simple to code, major breakpoints usually entailed simply changing the flex-direction to ‘column’ or ‘row’, depending on the context, and then tweaking. One aspect I found rewarding was figuring out how I could create those boxed headers with the dotted border and horizontal lines either side. My first attempt was almost successful but the horizontal line was visible behind the header text. After experimenting for a while I arrived at the answer by breaking up the header into three distinct parts and applying a negative top margin to the box in the middle. I saved the <a href="https://codepen.io/blackmath/pen/qaGEog">technique on CodePen</a> if this interests you, and here’s <a href=https://github.com/tmccarten/agency_ready>my Github repository</a> for the same reason.</a></p>
          <h3>References</h3>
            <p>Staff, C. B. (2016) '45 brilliant design portfolios to inspire you.'. [Online] 13th September. [Accessed on 12th November 2016] http://www.creativebloq.com/portfolios/examples-712368</p>
            <p>Strange, G. (no date) Strangelove. Strangelove. [Online] [Accessed on 13th November 2016] http://strange.wales/</p>
            <p>Christensen, T. (2013) The creative processing your brain won’t tell you about. 14th November. Creative Something. [Online] [Accessed on 13th November 2016] http://creativesomething.net/post/66982583259/the-creative-processing-your-brain-wont-tell-you</p>
            <p> Rees, D. (2015) What is wireframing. 1st June. Experience UX. [Online] [Accessed on 13th November 2016] http://www.experienceux.co.uk/faqs/what-is-wireframing/</p>
            <p>Franz, L. (2014) Size matters: Balancing line length and font size in responsive web design – smashing magazine. 29th September. Design. [Online] [Accessed on 13th November 2016] https://www.smashingmagazine.com/2014/09/balancing-line-length-font-size-responsive-web-design/</p>
            <p>DevTips. (2015) DevTips/DevTips-Starter-Kit: Ground zero for your next project. 21st July. Github. [Online] [Accessed on 13th November 2016] https://github.com/DevTips/DevTips-Starter-Kit</p>
            <p>Catlin, H., Weizenbaum, N. and Eppstein, C. (2015) Sass: Syntactically Awesome Style Sheets. Sass-lang. [Online] [Accessed on 13th November 2016] http://sass-lang.com/</p>
            <p> Gulpjs. (no date) gulp.js - the streaming build system. [Online] [Accessed on 13th November 2016] http://gulpjs.com/</p>
            <p>Git. (no date) Git. [Online] [Accessed on 13th November 2016] https://git-scm.com/</p>
            <p>Browsersync. (no date) Browsersync - Time-saving synchronised browser testing. [Online] [Accessed on 13th November 2016] https://www.browsersync.io/</p>
            <p>Blu, M. (2016) gulp-connect-php. 31st July. Npmjs. [Online] [Accessed on 13th November 2016] https://www.npmjs.com/package/gulp-connect-php</p>
            <p>CodePen. (no date) A Pen by Thomas McCarten. [Online] [Accessed on 13th November 2016] https://codepen.io/blackmath/pen/qaGEog</p>



        </article>

        <aside class="sidebar">

        <div class="title">
          <div class="title-border-left"></div>
            <h2 class="title-box medium">Posts</h2>
          <div class="title-border-right"></div>
        </div>

        <div class="sidebar-posts">
          <ol>
            <li><a href="#" class="current">The Digital Industry</a>
            <li><a href="#">Building my portfolio</a>
            <li><a href="#">Optimisation</a>
          </ol>
        </div>

        </aside>
      </div>
    </main>

<?php include 'assets/includes/footer.php';?>

</div>

</body>
</html>
