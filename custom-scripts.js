console.log("custom scripts are loaded");

var ask = document.getElementById('ask-button');
var hearken = document.getElementById('hearken-wrapper');

jQuery(document).ready(function($) {
  $("#ask-button").click(function() {
    if (document.getElementById('question-box').value != null){
      var userQuestion = document.getElementById('question-box').value;
      $('.text-input--long').attr('value', userQuestion);
    }
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $("#overlay").fadeIn();
    $("#hearken-bg").fadeIn();
    $("#hearken-wrapper").fadeIn();
    $("#hearken-form").fadeIn();
  });
});

jQuery(document).ready(function($) {
  $("#subscribe-button").click(function() {
    if (document.getElementById('subscribe-input').value != null){
      var userEmail = document.getElementById('subscribe-input').value;
      $('#mce-EMAIL').attr('value', userEmail);
    }
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $("#overlay").fadeIn();
    $("#hearken-bg").fadeIn();
    $("#hearken-wrapper").fadeIn();
    $("#mc-form").fadeIn();
  });
});

jQuery(document).ready(function($) {
  $("#close").click(function() {
    $("#overlay").fadeOut();
    $("#hearken-bg").fadeOut();
    $("#hearken-wrapper").fadeOut();
    $("#mc-form").fadeOut();
    $("#hearken-form").fadeOut();
  });
});

jQuery(document).ready(function($) {
  $("#close").click(function() {
    $("#overlay").fadeOut();
    $("#hearken-bg").fadeOut();
    $("#hearken-wrapper").fadeOut();
    $("#mc-form").fadeOut();
    $("#hearken-form").fadeOut();
  });
});

jQuery(document).ready(function($) {
  $("#close").click(function() {
    $("#overlay").fadeOut();
    $("#hearken-bg").fadeOut();
    $("#hearken-wrapper").fadeOut();
    $("#mc-form").fadeOut();
    $("#hearken-form").fadeOut();
  });
});