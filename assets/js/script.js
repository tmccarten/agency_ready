
window.addEventListener('scroll', function(){

  var scrollPosition = window.scrollY;
  var header = document.querySelector('.main-header-container');

    if(scrollPosition > 10 && scrollPosition < 300){
        header.className = "main-header-container smaller";
    }
    else if (scrollPosition == 300 || scrollPosition > 300) {
        header.className = "main-header-container even-smaller";
    } else {
        header.className = "main-header-container";
    }

});
