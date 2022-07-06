const btnSidebarDesktop = document.querySelector('#btn-sidebar-desktop');
const btnSidebarmobile = document.querySelector('#btn-sidebar-mobile');

const sidebarMobile = document.querySelector('#sidebar-mobile');
const sidebarDesktop = document.querySelector('#sidebar-desktop');

const nav = document.querySelector('#nav');

const search = document.querySelector('#search');

const article = document.querySelector('#article');

// const bell = document.querySelector('#bell');
// bell.addEventListener('click', function () {
//     alert('ok')
  
// });

btnSidebarDesktop.addEventListener('click', function () {
    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');

    // nav.classList.remove('left-60');
    nav.classList.add('left-20');

    search.classList.remove('left-1');

    article.classList.remove('ml-56');
    article.classList.add('mx-auto');

 
});

btnSidebarmobile.addEventListener('click', function () {
    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');

    nav.classList.remove('left-20');
    nav.classList.add('left-60');

    search.classList.add('left-1');

    article.classList.remove('mx-auto');
    article.classList.add('ml-56');

});