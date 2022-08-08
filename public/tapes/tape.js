// tooltips
$(function () {
  $(document).tooltip({
    track: true,
    tooltipClass: "tooltip"
  });
});


$(".info button[data-what='info']").click(function () {
  $("#about").fadeToggle();
});
