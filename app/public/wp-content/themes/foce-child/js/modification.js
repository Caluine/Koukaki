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
