// Fonction pour vérifier si l'élément est visible à l'écran
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fonction pour lire la vidéo lorsque l'élément est visible à l'écran
function playVideoWhenVisible() {
    var video = document.getElementById('youtube-video');
    if (isElementInViewport(video)) {
        video.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
        window.removeEventListener('scroll', playVideoWhenVisible);
    }
}

// Attache un écouteur d'événement au défilement de la fenêtre
window.addEventListener('scroll', playVideoWhenVisible);

// Appelle la fonction de lecture vidéo lorsque la page est chargée
window.onload = playVideoWhenVisible;