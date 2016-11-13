
window.addEventListener('scroll', function(){

  var scrollpos = window.scrollY;
  var header = document.getElementsByClassName("main-header-container");
  
    //Here you forgot to update the value
    scrollpos = window.scrollY;

    if(scrollpos > 10){
        header.classList.add("smaller");
    }
    else {
        header.classList.remove("smaller");
    }
    console.log(scrollpos);
});
