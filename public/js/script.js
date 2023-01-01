const showModal = document.querySelectorAll('#showModal');
const modal = document.querySelector('#modal');
const close = document.querySelector('#close');



for (let i = 0; i < showModal.length; i++) {
  showModal[i].addEventListener("click", function() {
    modal.classList.toggle("hidden");
  });
}



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

const swiper = new Swiper('.swiper-container', {
  centeredSlides: true,
  loop: true,
  grabCursor: true,

  breakpoints: {
  // when window width is >= 320px
  320: {
    slidesPerView: 1,
    spaceBetween: 1
  },
  // when window width is >= 480px
  480: {
    slidesPerView: 3,
    spaceBetween: 1
  },
  // when window width is >= 640px
  640: {
    slidesPerView: 3,
    spaceBetween: 1
  },
  autoplay: {
    delay: 100,
 },
 
}
});


const imageShow = new Swiper('.swiper', {
  // Optional parameters
  effect: "cards",
  grabCursor: true,
});

const card = document.querySelectorAll("#swiper")

for(i = 0; i < card.length; i++)
{
  if(i % 2 == 0) {
    card[i].classList.add('order-last')
  } else {
    card[i].classList.add('order-first')
  }

}



