$(".info button[data-what='info']").click(function () {
  $("#about").fadeToggle();
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
      $("#cover img").css("width", "100%");
      $("#cover img").css("height", "auto");
      $("#cover img").css("max-height", "60vh");
    }

  });

});
