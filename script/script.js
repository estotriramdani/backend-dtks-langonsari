const path = window.location.pathname;
console.log(path);

const berandaNav = document.getElementById('berandaNav');
const cariNav = document.getElementById('cariNav');
const ajukanNav = document.getElementById('ajukanNav');

if (path.substr(6, 5) == 'index' || path.substr(5, 5) == '/') {
  berandaNav.classList.add('active');
} else if (path.substr(6, 5) == 'cari.') {
  cariNav.classList.add('active');
} else if (path.substr(6, 5) == 'ajuka') {
  ajukanNav.classList.add('active');
}
