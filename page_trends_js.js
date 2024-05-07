var listetrends = [ "HH.png","HH (1).png","HH (2).png" ];
var i = 0;
var slideshow = document.getElementById('slide');


function nextslide() {
    i = (i + 1) % listetrends.length;
    slideshow.src = listetrends[i];}

// Fonction pour afficher l'imag e précédente
function prevslide() {
    i = (i - 1 + listetrends.length) % listetrends.length;
    slideshow.src = listetrends[i];
}

slideshow.src = listetrends[i];
