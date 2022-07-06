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

    // nav.classList.toggle('w-[82%]');
    // nav.classList.toggle('ml-[18%]');
    // nav.classList.toggle('w-[95%]');
    nav.classList.remove('toggle-nav-show');
    nav.classList.add('toggle-nav-hidden');


    // search.classList.remove('left-[225px]');
    search.classList.add('ml-10');
    article.classList.remove('ml-56');
    article.classList.add('mx-auto');

 
});

btnSidebarmobile.addEventListener('click', function () {
    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');
    nav.classList.add('toggle-nav-show');
    nav.classList.remove('toggle-nav-hidden');
    
    // nav.classList.toggle('w-[95%]');
    // nav.classList.toggle('ml-[5%]');
    // nav.classList.toggle('w-[82%]');
    // nav.classList.toggle('ml-[18%]');

    

    // search.classList.add('left-[225px]');
    search.classList.remove('ml-10');

    article.classList.remove('mx-auto');
    article.classList.add('ml-56');

});