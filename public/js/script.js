// const { add } = require("lodash");

const buttonSearch = document.querySelector("#button-search");
const inputSearch = document.querySelector("#input-search");
const navMenu = document.querySelector("#nav-menu");

buttonSearch.addEventListener("click", function() {
  inputSearch.classList.toggle("hidden");
  navMenu.classList.toggle("hidden");

});

const close = document.querySelectorAll('#close');
const showModal = document.querySelectorAll('#showModal');
const modal = document.querySelectorAll('#modal');

    

for (let i = 0; i < showModal.length; i++) {
  showModal[i].addEventListener("click", function() {
    modal[i].classList.remove("hidden");
  });
  close[i].addEventListener("click", function() {
    modal[i].classList.add("hidden");
  });
}



// window.addEventListener('scroll', function() {
//   var nav = document.querySelector('nav');
//   if (window.scrollY > 10) {
//     nav.classList.add('bg-glass');
//   } else {
//     nav.classList.remove('bg-glass');
//   }
// });


// const menuButton = document.querySelector("#menu-button")
// const navContent = document.querySelector("#nav-content")
// const nav = document.querySelector('nav');

// menuButton.addEventListener("click", function(){
//   navContent.classList.toggle("hidden")
//   nav.classList.add("bg-glass")
  
// })

const swiper = new Swiper('.swiper-container', {
  centeredSlides: true,
  loop: true,
  grabCursor: true,

  breakpoints: {
  // when window width is >= 320px
  320: {
    slidesPerView: 1,
    spaceBetween: 10
  },
  // when window width is >= 480px
  480: {
    slidesPerView: 3,
    spaceBetween: 10
  },
  // when window width is >= 640px
  640: {
    slidesPerView: 3,
    spaceBetween: 10
  },
  autoplay: {
    delay: 100,
 },
 
}
});


const imageShow = new Swiper('.swiperDes', {
  // Optional parameters
  effect: "cards",
  grabCursor: true,
});

// const card = document.querySelectorAll("#card")

// for(i = 0; i < card.length; i++)
// {
//   if(i % 2 == 0) {
//     card[i].classList.add('order-last')
//   } else {
//     card[i].classList.add('order-first')
//   }

// }


const desciptionList = document.querySelectorAll("#description ul");
const desciptionTitle = document.querySelectorAll("#description h1");

for (let i = 0; i < desciptionList.length; i++) {
  desciptionList[i].classList.add('list-disc', 'list-inside')
}
for (let j = 0; j < desciptionList.length; j++) {
  desciptionTitle[j].classList.add('font-subtitle', 'text-2xl');
}


const excerpt = document.querySelectorAll("#excerpt")
const excerptButton = document.querySelectorAll("#excerptButton")
const descButton = document.querySelectorAll("#descButton")
const description = document.querySelectorAll("#description")

for (let i = 0; i < excerpt.length; i++) {
  excerptButton[i].addEventListener('click', function() {
    description[i].classList.remove('hidden')
    excerpt[i].classList.add('hidden')
  })

  descButton[i].addEventListener('click', function() {
    description[i].classList.add('hidden')
    excerpt[i].classList.remove('hidden')
  })
  
}

