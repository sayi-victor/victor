import './bootstrap';

const ddMenu = document.getElementById('dd-menu');
const toggler = document.getElementById('toggle-dd-menu');
const togglerIcon = document.getElementById('toggler-icon');

toggler.addEventListener('click', () => {
    if (ddMenu.classList.contains('hidden')) {
        ddMenu.classList.replace('hidden', 'flex');
    } else {
        ddMenu.classList.replace('flex', 'hidden');
    }

    if (togglerIcon.classList.contains('fa-bars')) {
        togglerIcon.classList.replace('fa-bars', 'fa-xmark');
    } else {
        togglerIcon.classList.replace('fa-xmark', 'fa-bars');
    }
});
