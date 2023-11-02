const text = "Je suis étudiant en seconde année à l'EPSI Montpellier en spécialité dévellopeur. J'aime beaucoup le dévoloppement web. Si vous voulez en savoir d'avantage, regardez en dessous ! :)";
const textContainer = document.getElementById("texte");
let index = 0;

function writeText() {
    if (index < text.length) {
        textContainer.textContent += text.charAt(index);
        index++;
        setTimeout(writeText, 25); // Ajustez la vitesse ici (en millisecondes)
    } else {
        setTimeout(deleteText, 3000); // Attendez 1 seconde avant de commencer la suppression
    }
}

function deleteText() {
    if (index > 0) {
        textContainer.textContent = textContainer.textContent.slice(0, -1);
        index--;
        setTimeout(deleteText, 10); // Ajustez la vitesse ici (en millisecondes)
    } else {
        setTimeout(writeText, 750); // Attendez 1 seconde avant de recommencer l'écriture
    }
}

// Commencez l'effet d'écriture
writeText();
