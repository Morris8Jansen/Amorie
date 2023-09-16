document.addEventListener('DOMContentLoaded', function () {
  const showMoreButton = document.querySelector('.show-more-button');
  const productItems = document.querySelectorAll('.product-item');
  const maxVisibleItems = 5;

  // Functie om items te verbergen
  function hideItems() {
    productItems.forEach((item, index) => {
      if (index >= maxVisibleItems) {
        item.style.display = 'none';
      }
    });
  }

  // Functie om items te tonen
  function showItems() {
    productItems.forEach((item, index) => {
      item.style.display = 'block';
    });
    showMoreButton.style.display = 'none'; 
  }

  // standaard roep ik de funtie aan om items te verbergen
  hideItems();
  // en als je klikt op de 'showMoreButton' dan worden alle resterende items weergegeven
  showMoreButton.addEventListener('click', showItems);
});
