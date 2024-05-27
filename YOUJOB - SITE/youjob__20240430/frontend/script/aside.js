document.addEventListener("DOMContentLoaded", function() {
    const menu = document.getElementById('menu');
    const body = document.body;
    let isHovered = false; 

    menu.addEventListener('click', function() {
        if (!isHovered) {
            body.classList.add('hovered', 'search');
            isHovered = true;
        } else {
            body.classList.remove('hovered');
            body.classList.add('transition');
            isHovered = false;
        }
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const aside = document.querySelector('aside');
    const menu = document.getElementById('menu');

    let isActive = false;

    menu.addEventListener('click', function() {
        if (!isActive) {
            aside.classList.add('activ');
            isActive = true;
        } else {
            aside.classList.remove('activ');
            isActive = false;
        }
    });
});