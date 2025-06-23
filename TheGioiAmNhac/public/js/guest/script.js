/*
|--------------------------------------------------------------------------
| Guest JavaScript
|--------------------------------------------------------------------------
|
| This file contains the JavaScript for the guest section of the application.
|
*/

console.log('Guest JavaScript loaded!');

document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.carousel-wrapper');

    carousels.forEach(wrapper => {
        const container = wrapper.querySelector('.card-container');
        const prevButton = wrapper.querySelector('.nav-button.prev');
        const nextButton = wrapper.querySelector('.nav-button.next');
        const card = container.querySelector('.card');
        
        if (!card) return;

        const cardWidth = card.offsetWidth;
        const gap = 20; // This should match the 'gap' property in your CSS

        prevButton.addEventListener('click', () => {
            container.scrollBy({ left: -(cardWidth + gap), behavior: 'smooth' });
        });

        nextButton.addEventListener('click', () => {
            container.scrollBy({ left: cardWidth + gap, behavior: 'smooth' });
        });
    });

    // Handle play button clicks for all sections
    const playButtons = document.querySelectorAll('.play-button');
    const modal = document.getElementById('authModal');
    const closeButton = document.querySelector('.close-button');
    const confirmLogin = document.getElementById('confirmLogin');
    const cancelLogin = document.getElementById('cancelLogin');

    function showModal() {
        modal.style.display = 'block';
    }

    function hideModal() {
        modal.style.display = 'none';
    }

    playButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            showModal();
        });
    });

    // Modal event listeners
    closeButton.addEventListener('click', hideModal);
    cancelLogin.addEventListener('click', hideModal);

    confirmLogin.addEventListener('click', () => {
        hideModal();
        window.location.href = '/dangnhap';
    });

    // Close modal if user clicks outside of it
    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            hideModal();
        }
    });
});

// You can add your custom JavaScript for the guest section here. 