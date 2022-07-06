const btnSidebarDesktop = document.querySelector('#btn-sidebar-desktop');
const btnSidebarmobile = document.querySelector('#btn-sidebar-mobile');

const sidebarMobile = document.querySelector('#sidebar-mobile');
const sidebarDesktop = document.querySelector('#sidebar-desktop');

const nav = document.querySelector('#nav');

const search = document.querySelector('#search');


// const bell = document.querySelector('#bell');
// bell.addEventListener('click', function () {
//     alert('ok')
  
// });

btnSidebarDesktop.addEventListener('click', function () {
    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');

    nav.classList.remove('xl:left-60');
    nav.classList.add('left-0');

    search.classList.remove('xl:left-1');
    search.classList.add('left-24');


  
});

btnSidebarmobile.addEventListener('click', function () {
    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');
    nav.classList.remove('left-0');
    nav.classList.add('xl:left-60');

    search.classList.add('xl:left-1');
    // search.classList.remove('xl:left-24');



});