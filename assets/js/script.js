// Cambiar el texto del carrusel cada 4 segundos
var carouselInterval = setInterval(function () {
    var activeItem = document.querySelector('.carousel-item.active');
    var nextItem = activeItem.nextElementSibling || document.querySelector('.carousel-inner').firstElementChild;
    activeItem.classList.remove('active');
    nextItem.classList.add('active');
}, 4000);
