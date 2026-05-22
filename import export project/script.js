function changeCss() {
    var navElement = document.querySelector(".main");
    this.scrollY >= 1 ? navElement.style.background = "white" : navElement.style.background = "transparent";
    this.scrollY >= 1 ? navElement.style.boxShadow = "1px 1px 10px black" : navElement.style.boxShadow = "none";
  }

  window.addEventListener("scroll", changeCss, false);

  Products .onchange = showcapital;
  function showcapital(){
    capital .value = Products .value;
  }