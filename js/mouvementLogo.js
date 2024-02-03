document.addEventListener('DOMContentLoaded', function () {
    const cloud = document.getElementById('cloud');
    const logos = document.querySelectorAll('.skill-icon');

    function getRandomPosition() {
        const maxX = cloud.clientWidth - 48; // Largeur de la div cloud - largeur du logo
        const maxY = cloud.clientHeight - 48; // Hauteur de la div cloud - hauteur du logo

        const randomX = Math.random() * maxX;
        const randomY = Math.random() * maxY;

        return { x: randomX, y: randomY };
    }

    function moveLogoRandomly(logo) {
        function move() {
            const newPosition = getRandomPosition();

            logo.animate(
                [
                    { transform: `translate(${logo.style.left || 0}px, ${logo.style.top || 0}px)` },
                    { transform: `translate(${newPosition.x}px, ${newPosition.y}px)` }
                ],
                {
                    duration: 5000 + Math.random() * 5000, // Durée entre 5 et 10 secondes
                    easing: 'linear',
                    iterations: 1,
                    fill: 'forwards',
                    complete: move // Appeler move() à la fin de l'animation
                }
            );
        }

        move(); // Appeler move() pour démarrer le mouvement initial
    }

    logos.forEach(moveLogoRandomly);
});
