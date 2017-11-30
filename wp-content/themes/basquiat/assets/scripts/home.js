console.log("ok")


// Get the element to move on mousemove
var homeIntroBkg = document.querySelector('.home-intro__bkg');
var intro__content= document.querySelector('.intro__content');
var citation__content= document.querySelector('.citation__content');
var citation__titleBkg = document.querySelector('.citation__titleBkg');
var history__titleBkg = document.querySelector('.history__titleBkg');
var actuality__titleBkg = document.querySelector('.actuality__titleBkg');


// Listen to mousemove event
window.addEventListener('mousemove', function myFunction(e) {
    var x = e.clientX;    // Get the horizontal coordinate
    var y = e.clientY;
    homeIntroBkg.style.transform = 'translateX(' + x/400 + '%) ' + 'translateY(' + y/120 + '%)';
    intro__content.style.transform = 'translateX(-' + x/400 + '%) ' + 'translateY(-' + y/120 + '%)';
});






window.sr = ScrollReveal();
sr.reveal('.briography-image', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false });

sr.reveal('.home-profile-text-wrapper__text', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false });



sr.reveal('.citation__content', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false , scale:1.2});




sr.reveal('.perceverant-content-img', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false , scale:1.2});

sr.reveal('.home-perceverant-text-wrapper', { duration: 1000, origin: 'bottom', viewFactor: 0.9, reset: false , scale:1.5});




sr.reveal('.home-revolution-text-wrapper', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false , scale:1.2});

sr.reveal('.revolution-content-img', { duration: 1000, origin: 'ti', viewFactor: 0.9, reset: false , scale:1.2});




sr.reveal('.slider__title', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false });

sr.reveal('.slider__description p', { duration: 2000, origin: 'bottom', viewFactor: 0.4, reset: false});




sr.reveal('.elSlide3', { duration: 2000, origin: 'bottom', viewFactor: 0.2, reset: false});

sr.reveal('.elSlide2', { duration: 2000, origin: 'bottom', viewFactor: 0.4, reset: false});

sr.reveal('.elSlide1', { duration: 2000, origin: 'bottom', viewFactor: 0.6, reset: false});

sr.reveal('.biography__intro', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__introContent', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1960text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1968text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1976text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1980text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1981text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1983text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1986text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1987text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });

sr.reveal('.biography__1988text', { duration: 1000, origin: 'bottom', viewFactor: 0.5, reset: false });








window.addEventListener('scroll', function parallax() {

    // TOP
    windowPosY = window.pageYOffset;
    citation__titleBkg.style.transform = "translateY(" + ( windowPosY / 2) + "px)";
    history__titleBkg.style.transform = "translateX(" + ( windowPosY / 4) + "px)";
    actuality__titleBkg.style.transform = "translateX(-" + ( windowPosY /4) + "px)";




});