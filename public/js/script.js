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
