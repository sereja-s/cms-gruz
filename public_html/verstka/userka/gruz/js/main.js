//Nav icon

const navBtn = document.querySelector('.nav-icon-btn');
const navBtnIcon = navBtn.querySelector('.nav-icon');
const headerRow = document.querySelector('.header-top-row');
const navList = document.querySelector('.nav-list');

navBtn.addEventListener('click', ()=>{
    navBtnIcon.classList.toggle('nav-icon--active');
    headerRow.classList.toggle('header-top-row--mobile');
})
navList.addEventListener('click', ()=>{
    navBtnIcon.classList.remove('nav-icon--active');
    headerRow.classList.remove('header-top-row--mobile');
})