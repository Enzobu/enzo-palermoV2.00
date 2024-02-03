document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.carousel');
    const cards = document.querySelectorAll('.card');
    const selectors = document.querySelectorAll('.selector');

    let currentIndex = 0;

    function updateCarousel() {
        const cardWidth = cards[currentIndex].offsetWidth;
        const cardMargin = parseInt(getComputedStyle(cards[currentIndex]).marginRight);
        const halfViewportWidth = window.innerWidth * 0.5;
        const newScrollLeft = (cardWidth + cardMargin) * currentIndex - halfViewportWidth + cardWidth * 0.5;

        carousel.scrollTo({
            left: newScrollLeft,
            behavior: 'smooth'
        });

        cards.forEach((card, index) => {
            if (index === currentIndex) {
                card.classList.add('active');
            } else {
                card.classList.remove('active');
            }
        });

        selectors.forEach((selector, index) => {
            if (index === currentIndex) {
                selector.classList.add('active');
            } else {
                selector.classList.remove('active');
            }
        });
    }

    function goToCard(index) {
        currentIndex = index;
        updateCarousel();
    }

    selectors.forEach((selector, index) => {
        selector.addEventListener('click', () => {
            goToCard(index);
        });
    });

    updateCarousel();
});
