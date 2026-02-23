// Effet de Fade In au scroll sur chaque section

const allSections = document.querySelectorAll("section");
const reglages = {
  threshold: 0.15 // On déclenche quand 15% de la section est visible
};

const apparitionSection = (sectionCible) => {
  sectionCible.forEach(cible => {
    if (cible.isIntersecting) {
      cible.target.classList.add("present");
      sectionPresent.unobserve(cible.target); //permet d'arreter l'observation quand elle est apparu
    }
  });
};

//  création d'une "surveillance" qui nous dit quand la section est présente
const sectionPresent = new IntersectionObserver(apparitionSection, reglages);
// la surveillance regarde chaque section une par une avec une boucle
allSections.forEach(section => {
  sectionPresent.observe(section);
});




// Partie scroll nuage


const sectionPlace = document.querySelector("#titre-place");
const grosNuage = document.querySelector(".gros-nuage");
const petitNuage = document.querySelector(".petit-nuage");



let mouvementAutorise = false;
let positionScroll = window.scrollY;
let positionNuage = 0;

// surveillance pour savoir quand on est dans "place"
const observer = new IntersectionObserver(function(placePresent) {

  if (placePresent[0].isIntersecting) {
    mouvementAutorise = true;
  } else {
    mouvementAutorise = false;
  }

},);

observer.observe(sectionPlace);


// Détection du scroll

window.addEventListener("scroll", function() {

  if (mouvementAutorise === true) {

    let positionActuelle = window.scrollY;
    // Si on descend on va vers la gauche donc negatif
    if (positionActuelle > positionScroll) {
      positionNuage = positionNuage - 5;
    } 
    // Sinon on va vers la droite
    else {
      positionNuage = positionNuage + 5;
    }

     // Blocage à 300px (-200 car on multiplie la vitesse par 1.5 ce qui donne 300px)
    if (positionNuage < -200) {
      positionNuage = -200;
    }
    if (positionNuage > 0) {
      positionNuage = 0;
    }

    // le gros nuage va 1,5 x plus vite pour que ce soit plus naturel

    grosNuage.style.transform = "translateX(" + (positionNuage * 1.5) + "px)";
    petitNuage.style.transform = "translateX(" + positionNuage + "px)";

    positionScroll = positionActuelle;
  }

});


