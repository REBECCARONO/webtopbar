<html>
<head>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length} ;
  for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].classList.remove("slideractive");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].classList.add("slideractive");
}
</script>
<script type="text/javascript">
var stickyadstatus = "";
function fix_stickyad() {
  var elem = document.getElementById("stickyadcontainer");
  if (!elem) {return false;}
  if (document.getElementById("skyscraper")) {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("skyscraper"), "width").replace("px", ""));  
    }
  else {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("right"), "width").replace("px", ""));  
  }
  elem.style.width = skyWidth + "px";
  if (window.innerWidth <= 992) {
    elem.style.position = "";
    elem.style.top = stickypos + "px";
    return false;
  }
  var stickypos = document.getElementById("stickypos").offsetTop;
  var docTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
  var adHeight = Number(w3_getStyleValue(elem, "height").replace("px", ""));
  if (stickyadstatus == "") {
    if ((stickypos - docTop) < 60) {
      elem.style.position = "fixed";
      elem.style.top = "60px";
      stickyadstatus = "sticky";
    }
  } else {
    if ((docTop + 60) - stickypos < 0) {  
      elem.style.position = "";
      elem.style.top = stickypos + "px";
      stickyadstatus = "";
    }
  }
  if (stickyadstatus == "sticky") {
    if ((docTop + adHeight + 60) > document.getElementById("footer").offsetTop) {
      elem.style.position = "absolute";
      elem.style.top = (document.getElementById("footer").offsetTop - adHeight) + "px";
    } else {
        elem.style.position = "fixed";
        elem.style.top = "60px";
        stickyadstatus = "sticky";
    }
  }
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
</script>

<style>
.fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
}

@-webkit-keyframes fade{
    from{opacity:.4} 
    to{opacity:1}
}
@keyframes fade{
    from{opacity:.4} 
    to{opacity:1}
}

.dot {
    height: 13px;
    width: 13px;
    margin:0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.slprev, .slnext {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  z-index:1;
  cursor: pointer;
  position: absolute;
  top: 0;
  width:auto;
  padding: 16px;
  top:50%;
  margin-top: -22px;
  color: #fff;
  font-weight: bold;
  font-size: 18px;
  transition: background-color 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.slprev:hover, .slnext:hover {
  color: white;
  background-color: rgba(0,0,0,0.8);
}

.slnext {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width:100%;
    text-align:center;
}

.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

@media only screen and (max-width: 400px) {
.slprev, .slnext,.text {
    font-size:12px;
  }
}

.slideractive,.dot:hover {
background-color:#717171;
}</style>

</head>
<body style=" background-color:#333;max-width:1000px;min-width:500px;position:relative;margin:auto;">

<br>
<div style=" background-color:#333;max-width:700px;min-width:250px;position:relative;margin:auto;">
<div style="text-align:right">
<p align="right"><b><a href="index.php" style="color:#FFF">Exit</a></b></p>
</div>

<div style="max-width:700px;min-width:250px;position:relative;margin:auto;">

<div class="mySlides fade" style="display: block;">
  <div class="numbertext">1 / 4</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Headquater visit</div>
</div>

<div class="mySlides fade" style="display: none;">
  <div class="numbertext">2 / 4</div>
  <img src="img_fjords_wide.jpg" style="width:100%">
  <div class="text">mDex Team</div>
</div>

<div class="mySlides fade" style="display: none;">
  <div class="numbertext">3 / 4</div>
  <img src="Photo(6).jpg" style="width:100%">
  <div class="text">WeDay</div>
</div>

<div class="mySlides fade" style="display: none;">
  <div class="numbertext">4 / 4</div>
  <img src="Photo(4).jpg" style="width:100%">
  <div class="text">Screenshot</div>
</div>



<a class="slprev" onClick="plusSlides(-1)">❮</a>
<a class="slnext" onClick="plusSlides(1)">❯</a>

</div>

<br>

<div style="text-align:center">
  <a href="javascript:void(0)" class="dot slideractive" onClick="currentSlide(1)" title="slide 1"></a> 
  <a href="javascript:void(0)" class="dot" onClick="currentSlide(2)" title="slide 2"></a> 
  <a href="javascript:void(0)" class="dot" onClick="currentSlide(3)" title="slide 3"></a> 
  <a href="javascript:void(0)" class="dot" onClick="currentSlide(4)" title="slide 4"></a> 
</div>

</div>
</body></html>