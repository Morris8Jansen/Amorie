document.addEventListener("DOMContentLoaded", function () {
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
});
