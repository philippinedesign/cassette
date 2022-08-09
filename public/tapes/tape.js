$(".info button[data-what='info']").click(function () {
  $("#about").fadeToggle();
});

$(".info button[data-what='fb']").click(function () {
  window.open("https://www.facebook.com/Philippine-Cassette-Archive-107292395417537");
});

$(".info button[data-what='ig']").click(function () {
  window.open("https://www.instagram.com/philippinecassettes");
});



$(function () {
  // tooltips
  $(document).tooltip({
    track: true,
    tooltipClass: "tooltip"
  });

  // if on mobile, replace the #cover image instead

  var isMobile = false; //initiate as false
  // device detection

  if (window.matchMedia("(max-width: 767px)").matches) {
    isMobile = true;
  }

  $(".images img").on('click touchstart', function () {

    if (isMobile) {

      // mobile tape page fallback
      let url = $(this).attr("src");

      $("#cover img").attr("src", url);
      $("#cover img").css("width", "auto");
      $("#cover img").css("height", "auto");
      $("#cover img").css("max-width", "90%");
      $("#cover img").css("max-height", "100%");
    }

  });

});
