const showModal = document.querySelectorAll('#showModal');
const modal = document.querySelector('#modal');
const close = document.querySelector('#close');



for (let i = 0; i < showModal.length; i++) {
  showModal[i].addEventListener("click", function() {
    modal.classList.toggle("hidden");
  });
}

close.addEventListener("click", function() {
  modal.classList.toggle("hidden");
});

$(document).ready(function(){
  $('.testi-card').slick({
  arrows:false,
  infinite:true,
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
  
});
});


window.addEventListener('scroll', function() {
  var nav = document.querySelector('nav');
  if (window.scrollY > 10) {
    nav.classList.add('bg-glass');
  } else {
    nav.classList.remove('bg-glass');
  }
});


const menuButton = document.querySelector("#menu-button")
const navContent = document.querySelector("#nav-content")
const nav = document.querySelector('nav');

menuButton.addEventListener("click", function(){
  navContent.classList.toggle("hidden")
  nav.classList.add("bg-glass")
  
})
