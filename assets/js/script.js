
window.addEventListener('scroll', function(){

  var scrollpos = window.scrollY;
  var header = document.querySelector(".main-header-container");

    //Here you forgot to update the value
    scrollpos = window.scrollY;

    if(scrollpos > 10 && scrollpos < 300){
        header.classList.add("smaller");
    } else if (scrollpos == 300 || scrollpos > 300) {
        header.classList.remove("smaller");
        header.classList.add("even-smaller");
    }
    else {
        header.classList.remove("even-smaller");
        header.classList.remove("smaller");
    }
    console.log(scrollpos);
});
