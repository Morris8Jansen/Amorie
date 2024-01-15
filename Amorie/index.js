const scrollItemsLeft = document.querySelectorAll('.scroll-item-left');
const scrollItemsRight = document.querySelectorAll('.scroll-item-right');

window.addEventListener('scroll', () => {
  scrollItemsLeft.forEach(item => {
    const itemTop = item.getBoundingClientRect().top;
    if (itemTop <= window.innerHeight && itemTop >= -item.clientHeight) {
      let scrollPercentage = 150 * (window.innerHeight - Math.abs(itemTop)) / window.innerHeight;
      scrollPercentage = Math.min(100, scrollPercentage); // Beperk tot maximaal 100
      item.style.transform = `translateX(${scrollPercentage - 100}%)`;
    }
  });

  scrollItemsRight.forEach(item => {
    const itemTop = item.getBoundingClientRect().top;
    if (itemTop <= window.innerHeight && itemTop >= -item.clientHeight) {
      let scrollPercentage = 150 * (window.innerHeight - Math.abs(itemTop)) / window.innerHeight;
      scrollPercentage = Math.min(100, scrollPercentage); // Beperk tot maximaal 100
      item.style.transform = `translateX(${100 - scrollPercentage}%)`;
    }
  });
});




// dit is een navbar scroll effect


const navbar = document.querySelector('.tweede-navbar');


let prevScrollPos = window.pageYOffset;


const eersteNavbar = document.querySelector('.eerste-navbar');

window.addEventListener('scroll', function() {
  const currentScrollPos = window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
    // Gebruiker is omhoog aan het scrollen
    eersteNavbar.style.top = '0';
    navbar.style.top = '0'; 
  } else {
    // Gebruiker is omlaag aan het scrollen
    eersteNavbar.style.top = '-150px';
    navbar.style.top = '-150px';
  }

  prevScrollPos = currentScrollPos;

  // Voeg deze code toe om de navbar weer zichtbaar te maken als je naar boven scrollt
  if (currentScrollPos <= 0) {
    eersteNavbar.style.top = '0';
    navbar.style.top = '0';
  }
});


  // Voorkom horizontaal scrollen
document.addEventListener('DOMContentLoaded', function() {
  document.body.style.overflowX = 'hidden';
});





  const showMoreButton = document.querySelector(".show-more-button");
  const showLessButton = document.querySelector(".show-less-button");
  const productItems = document.querySelectorAll(".product-item");

  // Functie om producten te tonen of te verbergen
  function showProducts(count) {
    productItems.forEach((item, index) => {
      if (index < count) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  }

  // Toon meer producten als er op "Show more" wordt geklikt
    showMoreButton.addEventListener("click", function () {
    showProducts(productItems.length);
    showMoreButton.style.display = "none";
    showLessButton.style.display = "block";
  });

  // Toon weer 5 als er op "Show less" wordt geklikt
  showLessButton.addEventListener("click", function () {
    showProducts(5);
    showLessButton.style.display = "none";
    showMoreButton.style.display = "block";
  });

  // Standaard worden er 5 producten getoond en "Show less" knop word verborgen
  showProducts(5);
  showLessButton.style.display = "none";
