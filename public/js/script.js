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

