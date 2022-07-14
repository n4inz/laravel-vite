const nav = document.querySelector('#nav');

const btnSidebarDesktop = document.querySelector('#btn-sidebar-desktop');
const btnSidebarmobile = document.querySelector('#btn-sidebar-mobile');

const sidebarMobile = document.querySelector('#sidebar-mobile');
const sidebarDesktop = document.querySelector('#sidebar-desktop');

const search = document.querySelector('#search');

const article = document.querySelector('#article');

if(localStorage.getItem('sidebar') == 'mobile'){
    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');
    nav.classList.remove('toggle-nav-show');
    nav.classList.add('toggle-nav-hidden');

    search.classList.add('togle-search-mobile');
    search.classList.remove('togle-search-desktop');

    // article.classList.remove('ml-28');
    article.classList.add('mx-auto');
}else if(localStorage.getItem('sidebar') == 'desktop'){
    sidebarMobile.classList.toggle('hidden');

    sidebarDesktop.classList.toggle('hidden');
    nav.classList.add('toggle-nav-show');
    nav.classList.remove('toggle-nav-hidden');
    
    search.classList.add('togle-search-desktop');
    search.classList.remove('togle-search-mobile');

    article.classList.remove('mx-auto');
}

btnSidebarDesktop.addEventListener('click', function () {
    localStorage.setItem('sidebar', 'mobile'); 

    sidebarMobile.classList.toggle('hidden');
    sidebarDesktop.classList.toggle('hidden');
    nav.classList.add('toggle-nav-hidden');

    search.classList.add('togle-search-mobile');
    search.classList.remove('togle-search-desktop');

    // article.classList.remove('ml-28');
    article.classList.add('mx-auto');

 
});

btnSidebarmobile.addEventListener('click', function () {
    localStorage.setItem('sidebar', 'dektop'); 

    sidebarMobile.classList.toggle('hidden');

    sidebarDesktop.classList.toggle('hidden');
    nav.classList.remove('toggle-nav-hidden');
    
    search.classList.add('togle-search-desktop');
    search.classList.remove('togle-search-mobile');

    article.classList.remove('mx-auto');
    article.classList.add('ml-28');

});

