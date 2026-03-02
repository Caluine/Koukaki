// Effet de Fade In au scroll sur chaque section

const allSections = document.querySelectorAll("section");
const reglages = {
	threshold: 0.1, // On déclenche quand 15% de la section est visible
};

const apparitionSection = (sectionCible) => {
	sectionCible.forEach((cible) => {
		if (cible.isIntersecting) {
			cible.target.classList.add("present");
			sectionPresent.unobserve(cible.target); //permet d'arreter l'observation quand elle est apparu
		}
	});
};

//  création d'une "surveillance" qui nous dit quand la section est présente
const sectionPresent = new IntersectionObserver(apparitionSection, reglages);
// la surveillance regarde chaque section une par une avec une boucle
allSections.forEach((section) => {
	sectionPresent.observe(section);
});



// Effet de Fade In au scroll sur chaque titre

const toutLesTitres = document.querySelectorAll(".titre");

const apparitionTitre = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("present");
      observer.unobserve(entry.target);
    }
  });
};

const titreObserver = new IntersectionObserver(apparitionTitre, {
  threshold: 0.7, // déclenche quand 50% du titre est visible
});

toutLesTitres.forEach((titre) => {
  titreObserver.observe(titre);
});




// Partie scroll nuage

const sectionPlace = document.querySelector("#titre-place");
const grosNuage = document.querySelector(".gros-nuage");
const petitNuage = document.querySelector(".petit-nuage");
const bannerLogo = document.querySelector(".banner-logo"); //Constante pour le paralaxe de l'image

let mouvementAutorise = false;
let positionScroll = window.scrollY;
let positionNuage = 0;

// surveillance pour savoir quand on est dans "place"
const observer = new IntersectionObserver(function (placePresent) {
	if (placePresent[0].isIntersecting) {
		mouvementAutorise = true;
	} else {
		mouvementAutorise = false;
	}
});

observer.observe(sectionPlace);

// Détection du scroll

window.addEventListener("scroll", function () {
	// Partie du paralaxe de l'image banner
	let scrollActuel = window.scrollY;
	bannerLogo.style.transform = "translateY(" + scrollActuel * 0.3 + "px)";
	// Partie pour le paralaxe des nuages
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

		grosNuage.style.transform = "translateX(" + positionNuage * 1.5 + "px)";
		petitNuage.style.transform = "translateX(" + positionNuage + "px)";

		positionScroll = positionActuelle;
	}
});


// Menu burger on récupère menu toggle et au click on ajoute nav open

document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.querySelector(".menu-deroulant");
const menuItems = navMenu.querySelectorAll("li"); // tous les LI du menu

  // on affiche au clic sur le burger
  menuToggle.addEventListener("click", () => {
    document.body.classList.toggle("menu-ouvert");
  });

  // on ferme le menu si on clique sur un LI
  menuItems.forEach(item => {
    item.addEventListener("click", () => {
      document.body.classList.remove("menu-ouvert"); 
    });
  });
});