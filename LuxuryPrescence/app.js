const navOptions = document.querySelector('.navOptions');
const options = document.querySelectorAll('.navOptions .option');
const titleCards = Array.from(document.querySelectorAll('.titlecard, .maintitlecard, .longtitlecard'));
const navOptionstitle = [
  { id: 'mtt', index: 0 },
  { id: 'sfh', index: 1 },
  { id: 'oc', index: 2 },
  { id: 'hv', index: 3 },
  { id: 'services', index: 4 },
  { id: 'haa', index: 5 },
  { id: 'testimonials', index: 6 },
  { id: 'contactUs', index: 7 }
];


//Reusable helper to center an element
function centerElement(element) {
  const offsetLeft = element.offsetLeft;
  const adjustment = navOptions.offsetWidth * 0.25;
  navOptions.scrollLeft = offsetLeft - adjustment;
}

//Views "SERVICES" on load
window.addEventListener('load', () => {
  const servicesElement = document.getElementById('services');
  centerElement(servicesElement);
});

//Scroll into an option on click
options.forEach(option => {
  option.addEventListener('click', () => centerElement(option));
});

//Center the closest element on resize
function centerClosestElement() {
  const scrollCenter = navOptions.scrollLeft + (navOptions.offsetWidth / 2);

  let closestOption = null;
  let minDistance = Infinity;

  options.forEach(option => {
    const optionCenter = option.offsetLeft + (option.offsetWidth / 2);
    const distance = Math.abs(scrollCenter - optionCenter);

    if (distance < minDistance) {
      minDistance = distance;
      closestOption = option;
    }
  });

  if (closestOption) {
    centerElement(closestOption);
  }
}
window.addEventListener('resize', centerClosestElement);

//Update title cards
function showTitleCard(index) {
  titleCards.forEach((card, i) => {
    card.style.display = i === index ? 'block' : 'none';
  });
}

navOptionstitle.forEach(option => {
  const navElement = document.getElementById(option.id);
  navElement.addEventListener('click', () => showTitleCard(option.index));
});

//Update opacity and scale for nav options
function updateOpacityAndScale() {
  const containerCenter = navOptions.scrollLeft + navOptions.clientWidth / 2;

  options.forEach(option => {
    const optionCenter = option.offsetLeft + option.offsetWidth / 2;
    const distance = Math.abs(containerCenter - optionCenter);

    let scale = 0.6;
    let translateY = '0';
    let opacity = 0.5;

    if (distance < option.offsetWidth / 2) {
      scale = 1;
      translateY = '-10px';
      opacity = 1;
    } else if (distance < option.offsetWidth * 1.5) {
      scale = 0.8;
      translateY = '10px';
    }

    option.style.opacity = opacity;
    option.style.transform = `scale(${scale}) translateY(${translateY})`;
  });
}
navOptions.addEventListener('scroll', updateOpacityAndScale);
updateOpacityAndScale();


//search/stickyNav interactions
document.addEventListener("DOMContentLoaded", () => {
  const searchbar = document.getElementById("searcbar");
  const jhserenoLogo = document.getElementById("jhserenoLogo");
  const mainLogo = document.getElementById("mainlogo");
  const backtoTop = document.getElementById("backtoTop");


  jhserenoLogo.style.opacity = "0";
  jhserenoLogo.style.pointerEvents = "none";

  window.addEventListener("scroll", () => {

    const searchbarTop = searchbar.getBoundingClientRect().top;

    if (searchbarTop <= 0) {
      jhserenoLogo.style.opacity = "1";
      jhserenoLogo.style.pointerEvents = "auto";

      mainLogo.style.opacity = "0";
      backtoTop.style.opacity = "1";
      backtoTop.style.bottom = "4rem";
      
    } else {
      jhserenoLogo.style.opacity = "0";
      jhserenoLogo.style.pointerEvents = "none";

      mainLogo.style.opacity = "1";
      backtoTop.style.opacity = "0";
      backtoTop.style.bottom = "-4rem";
    }
  });
});

const searchButton = document.getElementById("searchButton");
const searchInput = document.getElementById("searchInput");

searchButton.addEventListener("click", () => {
  searchInput.classList.toggle("visible"); // Toggle the visibility
});


//Section 4 onclick animations
const showMoreText1 = document.getElementById("showMoreText1");
const moreText1 = document.getElementById("moreText1");
const showMoreText2 = document.getElementById("showMoreText2");
const moreText2 = document.getElementById("moreText2");

const coverMessage1 = document.getElementById("coverMessage1");
const coverMessage2 = document.getElementById("coverMessage2");

const h1CoverMessage1 = coverMessage1.querySelector("h1");
const h1CoverMessage2 = coverMessage2.querySelector("h1");

const section4Text = document.getElementById("section4Text");
const section4TextP = section4Text.querySelector("p");

const imgBg1 = document.getElementById("imgBg1");

showMoreText1.addEventListener("click", event => {

  if (moreText1.style.display === "none" 
    || moreText1.style.display === "" ) {
    
    moreText1.style.display = "block";
    showMoreText1.style.animation = "showMoreTextOpenButton 0.5s ease-in-out forwards";
    coverMessage1.style.animation = "showMoreTextOpen 0.5s ease-in-out forwards";
    imgBg1.style.animation = "highlighTextBG 0.5s ease-in-out forwards";
  
  } else {
    moreText1.style.display = "none";
    showMoreText1.style.animation = "showMoreTextCloseButton 0.5s ease-in-out forwards";
    coverMessage1.style.animation = "showMoreTextClose 0.5s ease-in-out forwards";
     imgBg1.style.animation = "highlighTextBG 0.5s ease-in-out forwards";
  }
});

showMoreText2.addEventListener("click", event => {

  if ( moreText2.style.display === "none"
    ||moreText2.style.display === "") {
    moreText2.style.display = "block";
   showMoreText2.style.animation = "showMoreTextOpenButton 0.5s ease-in-out forwards";
   coverMessage2.style.animation = "showMoreTextOpen 0.5s ease-in-out forwards";
  } 
  
  else {
    moreText2.style.display = "none";
    showMoreText2.style.animation = "showMoreTextCloseButton 0.5s ease-in-out forwards";
    coverMessage2.style.animation = "showMoreTextClose 0.5s ease-in-out forwards";
  }
});