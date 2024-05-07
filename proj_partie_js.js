document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth'
        });
    });
});
function validation() {
    var nom = document.getElementById("nom").value;
    var email = document.getElementById("email").value;
    var numero = document.getElementById("numero").value;
    var prenom = document.getElementById("prenom").value;
    var cc = document.getElementById("commentaire").value;

    
    if (nom === '' && prenom === '') {alert('Please enter a username');return false;}
    if (email === '') {alert('Please enter your email');return false;}
    if (numero === '' ) {alert('Please enter your phone number');return false;}
    if (cc === '') {alert('Please enter your question');return false;}

    return true;
}

