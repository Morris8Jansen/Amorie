

$(document).ready(function() {
  // Lees de URL-parameter "type" uit
  var urlParams = new URLSearchParams(window.location.search);
  var cat = urlParams.get("type");

  // Voer de AJAX-oproep uit om dynamische inhoud op te halen op basis van de categorie
  $.ajax({
    url: 'ringen.php',
    type: 'get',
    data: { cat: cat },
    success: function(response) {
      $('#product-container').html(response);
    }
  });
});


