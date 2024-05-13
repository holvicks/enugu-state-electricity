
document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('menu-toggle');
    var closeToggle = document.getElementById('close-toggle');
    var mobileNav = document.getElementById('mobile-nav');
    var menuIcon = menuToggle.querySelector('ion-icon');

    // Toggle the mobile navigation visibility and update icon
    function toggleNavigation() {
        mobileNav.classList.toggle('hidden');
        if (mobileNav.classList.contains('hidden')) {
            menuIcon.setAttribute('name', 'menu'); // Set icon to menu when hidden
        } else {
            menuIcon.setAttribute('name', 'close'); // Set icon to close when shown
        }
    }

    menuToggle.addEventListener('click', toggleNavigation);
    closeToggle.addEventListener('click', toggleNavigation);
});



document.addEventListener('DOMContentLoaded', function() {
    var aboutUsToggle = document.getElementById('about-us-toggle');
    var aboutUsMenu = document.getElementById('about-us-menu');
    var regulatoryToggle = document.getElementById('regulatory-toggle'); 
    var regulatoryMenu = document.getElementById('regulatory-menu');
    var mediaToggle = document.getElementById('media-toggle'); 
    var mediaMenu = document.getElementById('media-menu');

    aboutUsToggle.addEventListener('mouseover', function() {
        aboutUsMenu.classList.remove('hidden');
    });
    aboutUsToggle.addEventListener('mouseleave', function() {
        aboutUsMenu.classList.add('hidden');    
    });
    regulatoryToggle.addEventListener('mouseover', function() {
        regulatoryMenu.classList.remove('hidden');
    });
    regulatoryToggle.addEventListener('mouseleave', function() {
        regulatoryMenu.classList.add('hidden'); 
    });
    mediaToggle.addEventListener('mouseover', function() {
        mediaMenu.classList.remove('hidden');
    });
    mediaToggle.addEventListener('mouseleave', function() {
        mediaMenu.classList.add('hidden'); 
    });


});


let openMenu = false;
const rotateIcon = document.querySelector(".rotate-about");
const rotateIcon2 = document.querySelector(".rotate-regulation");
const rotateIcon3 = document.querySelector(".rotate-media");
const buttonMenu = document.getElementById("open-menu");
const buttonMenu2 = document.getElementById("open-menu2");
const buttonMenu3 = document.getElementById("open-menu3");

buttonMenu.addEventListener("click", function() {
    if (!openMenu) {
        document.querySelector(".about-content").style.display = "block";
        rotateIcon.style.transform = "rotate(-180deg)"; // Correctly applying a rotation transformation
        openMenu = true;
    } else {
        document.querySelector(".about-content").style.display = "none";
        rotateIcon.style.transform = "rotate(0deg)"; // Resetting the rotation
        openMenu = false;
    }
});

buttonMenu2.addEventListener("click", function() {
    if (!openMenu) {
        document.querySelector(".regulation-content").style.display = "block";
        rotateIcon2.style.transform = "rotate(-180deg)"; // Correctly applying a rotation transformation
        openMenu = true;
    } else {

        document.querySelector(".regulation-content").style.display = "none";
        rotateIcon2.style.transform = "rotate(0deg)"; // Resetting the rotation
        openMenu = false;
    }
});

buttonMenu3.addEventListener("click", function() {
    if (!openMenu) {
        document.querySelector(".media-content").style.display = "block";
        rotateIcon3.style.transform = "rotate(-180deg)"; // Correctly applying a rotation transformation
        openMenu = true;
    } else {

        document.querySelector(".media-content").style.display = "none";
        rotateIcon3.style.transform = "rotate(0deg)"; // Resetting the rotation
        openMenu = false;
    }
});