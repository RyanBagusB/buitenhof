const button = document.querySelector('#hamburgerButton');
const drawer = document.querySelector('#navigationDrawer');
const content = document.querySelector('#mainContent');

button.addEventListener('click', (event) => {
  event.stopPropagation();
  drawer.classList.toggle('open');
});

content.addEventListener('click', (event) => {
  event.stopPropagation();
  drawer.classList.remove('open');
});