document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('.carousel-wrapper');

    carousels.forEach(carousel => {
        const container = carousel.querySelector('.card-container');
        const prevBtn = carousel.querySelector('.nav-button.prev');
        const nextBtn = carousel.querySelector('.nav-button.next');

        if (container && prevBtn && nextBtn) {
            const card = container.querySelector('.card');
            if (card) {
                const scrollAmount = card.offsetWidth + 20;

                prevBtn.addEventListener('click', () => {
                    container.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                });

                nextBtn.addEventListener('click', () => {
                    container.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                });
            }
        }
    });

    const logoutLink = document.getElementById('logout-link');
    const logoutModal = document.getElementById('logout-modal');
    const confirmLogoutBtn = document.getElementById('confirm-logout-btn');
    const cancelLogoutBtn = document.getElementById('cancel-logout-btn');
    const logoutForm = document.getElementById('logout-form');

    if (logoutLink && logoutModal && confirmLogoutBtn && cancelLogoutBtn && logoutForm) {
        logoutLink.addEventListener('click', (event) => {
            event.preventDefault();
            logoutModal.style.display = 'flex';
        });

        cancelLogoutBtn.addEventListener('click', () => {
            logoutModal.style.display = 'none';
        });

        confirmLogoutBtn.addEventListener('click', () => {
            logoutForm.submit();
        });

        logoutModal.addEventListener('click', (event) => {
            if (event.target === logoutModal) {
                logoutModal.style.display = 'none';
            }
        });
    }
});
