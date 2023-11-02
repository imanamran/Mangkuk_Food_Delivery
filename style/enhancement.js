//--------------------Clock-------------------------------------------------------------------------------------------------------
setInterval(function(){
	const clock = document.querySelector(".display");
	let time = new Date();
	let sec = time.getSeconds();
	let min = time.getMinutes();
	let hr = time.getHours();
	let day = 'AM';
	if(hr > 12){
	  day = 'PM';
	  hr = hr - 12;
	}
	if(hr == 0){
	  hr = 12;
	}
	if(sec < 10){
	  sec = '0' + sec;
	}
	if(min < 10){
	  min = '0' + min;
	}
	if(hr < 10){
	  hr = '0' + hr;
	}
	clock.textContent = hr + ':' + min + ':' + sec + " " + day;
});

//--------------------Slideshow-------------------------------------------------------------------------------------------------------
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1500); // Change image every 2 seconds
}

//--------------------Scroll Button to go up-------------------------------------------------------------------------------------------------------
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
	} else {
    mybutton.style.display = "none";
	}
}

function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

