document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.vechungtoi-member-card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, { threshold: 0.2 });
    cards.forEach(card => {
        observer.observe(card);
    });
});
// Hiệu ứng fade-in
const style = document.createElement('style');
style.innerHTML = `.fade-in { opacity: 1; transform: translateY(0); transition: opacity 0.7s, transform 0.7s; }
.vechungtoi-member-card { opacity: 0; transform: translateY(40px); }`;
document.head.appendChild(style);
