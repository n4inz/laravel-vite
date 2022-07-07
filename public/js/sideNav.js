const nav = document.querySelector('#nav');

const btnSidebarDesktop = document.querySelector('#btn-sidebar-desktop');
const btnSidebarmobile = document.querySelector('#btn-sidebar-mobile');

const sidebarMobile = document.querySelector('#sidebar-mobile');
const sidebarDesktop = document.querySelector('#sidebar-desktop');



const search = document.querySelector('#search');

const article = document.querySelector('#article');

// const bell = document.querySelector('#bell');
// bell.addEventListener('click', function () {
//     alert('ok')
  
// });

btnSidebarDesktop.addEventListener('click', function () {
    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');
    nav.classList.remove('toggle-nav-show');
    nav.classList.add('toggle-nav-hidden');

    search.classList.add('togle-search');

    article.classList.remove('ml-56');
    article.classList.add('mx-auto');

 
});

btnSidebarmobile.addEventListener('click', function () {
    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');
    nav.classList.add('toggle-nav-show');
    nav.classList.remove('toggle-nav-hidden');
    
    search.classList.remove('togle-search');

    article.classList.remove('mx-auto');
    article.classList.add('ml-56');

});