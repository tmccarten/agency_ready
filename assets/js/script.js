
// *** Header resize on scroll *** //

// runs function when user scrolls
window.addEventListener('scroll', function() {

  // gets scroll position
  var scrollPosition = window.scrollY;

  var header = document.querySelector('.main-header-container');

    if(scrollPosition > 10 && scrollPosition < 300){
        //applies 'smaller' class
        header.className = "main-header-container smaller";
    }
    else if (scrollPosition == 300 || scrollPosition > 300) {
        //applies 'even-smaller' class
        header.className = "main-header-container even-smaller";
    } else {
        header.className = "main-header-container";
    }
});
