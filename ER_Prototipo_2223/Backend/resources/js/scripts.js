/*!
* Start Bootstrap - Freelancer v7.0.6 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 72,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


/*  Share Social Media RF12
    Social Media links:
    Facebook:   https://www.facebook.com/sharer.php?u=[post-url]
    Twitter:    https://twitter.com/share?url=[post-url]&text=[post-title]&via=[via]&hashtags=[hashtags]

    Scource:    https://crunchify.com/list-of-all-social-sharing-urls-for-handy-reference-social-media-sharing-buttons-without-javascript/
                https://www.youtube.com/watch?v=OfLvQ8KtW2g
                https://www.youtube.com/watch?v=Wfgo4sdXHGQ
    */

const facebookBtn = document.querySelector(".facebook-btn");
const twitterBtn = document.querySelector(".twitter-btn");


               
const pageUrl = window.location.href; //Para ter o URF da página atual
const pageUrlFace = "www.youtube.com/watch?v=dQw4w9WgXcQ"; //URL teste válido para o Facebook
const message = " Educação, Prevenção e Ajuda sobre Burlas Online. Veja como não ser burlado outra vez!";

//  O Facebook anda meio atrasado, em teoria o código funciona. Na pratica o meu facebook dá erro :(
//const facebookApi = `https://www.facebook.com/sharer.php?u=${pageUrlFace}`
const facebookApi = `https://www.facebook.com/sharer/sharer.php?u=${pageUrlFace}`
const twitterApi = `https://twitter.com/intent/tweet?text=${pageUrl} ${message}`


twitterBtn.addEventListener('click', () => {
    console.log("twitter btn clicked")
    window.open(twitterApi, 'blank')
});

facebookBtn.addEventListener('click',()=>{
    console.log("facebook btn clicked")
    window.open(facebookApi, 'blank')
});

