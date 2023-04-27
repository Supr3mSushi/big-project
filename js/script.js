/*============= Menu icon navbar =============*/
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};



/*============= Scroll section active link =============*/
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');


window.onscroll = () => {
    sections.forEach(current => {
        let top = window.scrollY;
        let offset= current.offsetTop - 150;
        let height = current.offsetHeight;
        let id = current.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach (links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });


    /*============= Sticky navbar =============*/

// let header = document.querySelector("header");
//
// if (window.matchMedia("(max-width: 1919px)").matches) {
//     header.classList.add('sticky');
// } else {
//     header.classList.remove('sticky');
//     header.classList.toggle('sticky', window.scrollY > 100);
// }

    let header = document.querySelector("header");
    header.classList.toggle('sticky', window.scrollY > 100);



    /*============= Remove menu icon navbar when click navbar link (scroll) =============*/
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');

};


/*============= Dark light mode =============*/

let darkModeIcon = document.querySelector('#darkMoon-icon');

darkModeIcon.onclick = () => {
    darkModeIcon.classList.toggle('bx-sun');
    document.body.classList.toggle('dark-mode');
};


/*============= Scroll reveal =============*/

ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200,
});

ScrollReveal().reveal('.home-content, .heading', { origin: 'top'});
ScrollReveal().reveal('.home-img img, .services-container, .projects-box, .contact form', { origin: 'bottom'});
ScrollReveal().reveal('.home-content h1, .about-img img', { origin: 'left'});
ScrollReveal().reveal('.home-content h3, .home-content p, .about-content', { origin: 'right'});


/*============= Modal Project =============*/

const projectBoxes = document.querySelectorAll('.projects-box-class');
const modalList = document.querySelectorAll('.projects-modal');
const closeButtons = document.querySelectorAll('.projects-modal-close');

projectBoxes.forEach((box, index) => {
    const seeMoreButton = box.querySelector('a');
    const modal = modalList[index];
    const closeButton = closeButtons[index];

    seeMoreButton.addEventListener('click', () => {
        modal.classList.add('active-modal');
    });

    closeButton.addEventListener('click', () => {
        modal.classList.remove('active-modal');
    });
});


/*============= Popup =============*/

// Get the guest book popup
let guestBookPopup = document.querySelector('.guest-book-popup');

// Get the button that opens the guest book popup
let guestBookBtn = document.querySelector('.guest-book-btn');

// Get the <span> element that closes the guest book popup
let guestBookClose = document.getElementsByClassName('guest-book-close')[0];

// When the user clicks on the button, open the guest book popup
guestBookBtn.onclick = function() {
    guestBookPopup.style.display = 'block';
}

// When the user clicks on <span> (x), close the guest book popup
guestBookClose.onclick = function() {
    guestBookPopup.style.display = 'none';
}

// When the user clicks anywhere outside the guest book popup, close it
window.onclick = function(event) {
    if (event.target === guestBookPopup) {
        guestBookPopup.style.display = 'none';
    }
}








