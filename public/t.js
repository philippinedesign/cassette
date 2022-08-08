const showIndex = {};


showIndex.output = async (element) => {

  // Extract data from element
  const url = element.getAttribute('data-spreadsheet-api');
  let text = element.innerHTML;
  if (element.hasAttribute('data-spreadsheet-api-initial-text') === false) {
    element.setAttribute('data-spreadsheet-api-initial-text', text);
  } else {
    text = element.getAttribute('data-spreadsheet-api-initial-text');
  }

  element.innerHTML = 'Loading...';

  let data = await fetch(url).then((r) => r.json());

  if (!Array.isArray(data)) {
    data = Object.values(data);
  }


  const replacement = data.map((object) => {
    Object.keys(object).forEach((k) => {
      object[k.trim()] = object[k];
    });

    return text.replace(/{{([^{}]*)}}/g, (match, key) => object[key.trim()]);
  });


  element.innerHTML = replacement.join('');

};


showIndex.render = async () => {

  //  console.log("rendering");

  const elements = document.querySelectorAll('[data-spreadsheet-api]');

  const promises = [];

  //  console.log("elements.length: " + elements.length);
  for (let i = 0; i < elements.length; i++) {
    //    console.log(elements);
    const element = elements[i];
    //    console.log(element);
    promises.push(showIndex.output(element));
  }

  return Promise.all(promises);
};


$(function () {


  showIndex.render();
  //  console.log("done");


  // not the first time?
  if (window.localStorage.getItem('washere') === 'true') {
    $("#loader").delay(300).fadeOut(300);
    //    console.log("been here");
    console.log("o.o");

  } else {
    console.log("..");
    window.localStorage.setItem('washere', 'true');
  }

});



// tooltips
$(function () {
  $(document).tooltip({
    track: true,
    tooltipClass: "tooltip"
  });
});

// view
$(".control-displaytype button[data-control='big']").click(function () {
  $("#about").fadeOut();

  $(".control-displaytype button[data-control='big']").css("opacity", 1);
  $(".control-displaytype button[data-control='smol']").css("opacity", 0.5);

  $(".tape-wrapper-smol").fadeOut();
  $(".tape-wrapper").fadeIn();

});

$(".control-displaytype button[data-control='smol']").click(function () {
  $("#about").fadeOut();

  $(".control-displaytype button[data-control='smol']").css("opacity", 1);
  $(".control-displaytype button[data-control='big']").css("opacity", 0.5);
  $(".tape-wrapper-smol").fadeIn();
  $(".tape-wrapper").fadeOut();
});

// about

$(".info button[data-what='info']").click(function () {

  if ($("#about").is(":visible")) {
    $(".info button").css("opacity", 1);
  } else {
    $(".info button").css("opacity", 0.5);
    $(".info button[data-what='info']").css("opacity", 1);
  }

  $("#about").fadeToggle();
});

$(".info button[data-what='fb']").click(function () {
  window.open("https://www.facebook.com/Philippine-Cassette-Archive-107292395417537");
});

$(".info button[data-what='ig']").click(function () {
  window.open("https://www.instagram.com/philippinecassettes");
});


function checkFilters() {

  $(".info button").css("opacity", 1);
  $("#about").fadeOut();

  $("#header #all").prop("checked", false);
  let tapes = $("#index .tape-only a");
  let vals_decade = [];
  let vals_genre = [];
  let ctrls_decade = $(".control-decade input[name='decade']:checked");
  let ctrls_genre = $(".control-genre input[name='genre']:checked");
  let selectors = "";

  for (var i = 0; i < ctrls_decade.length; i++) {
    vals_decade.push(ctrls_decade[i].value)
    selectors += "[data-decade='" + ctrls_decade[i].value + "']";
  }


  for (var i = 0; i < ctrls_genre.length; i++) {
    let v = ctrls_genre[i].value;
    v = v[0].toUpperCase() + v.substring(1);
    vals_genre.push(v);
    selectors += "[data-genre='" + v + "']";
  }

  $("#index .tape-only a").hide();
  $("#index .tape-only a" + selectors).show();

  $("#index .tape-only").animate({
    scrollLeft: 0,
    scrollTop: 0
  }, 00);
}

// filters

$("#header .header-controls  #all").change(function () {

  if (!$(this).is(':checked')) {
    return;
  }

  $("#index .tape-only a").show();
  $('#header .header-controls div  input:checkbox').prop("checked", false);
  $(this).prop("checked", true);
});

$("#title-about h1").click(function () {
  $(".info button").css("opacity", 1);
  $("#about").fadeOut();

  $("#index .tape-only a").show();
  $('#header .header-controls div  input:checkbox').prop("checked", false);
  $(this).prop("checked", true);
});


$(".control-decade input").change(function () {
  if ($(".control-decade input:checked").length > 1) {
    let v = $(this).val();
    $(".control-decade input:not([value='" + v + "'])").prop("checked", false);
  }

  checkFilters();
});

$(".control-genre input").change(function () {

  if ($(".control-genre input:checked").length > 1) {
    let v = $(this).val();
    $(".control-genre input:not([value='" + v + "'])").prop("checked", false);
  }

  checkFilters();
})

// page transition
$(".tape-only a").click(function () {

  $("#loader").fadeIn();
  $("#loader ._loading span").hide();

});

//
// SCROLL TO TAPE
//function scrolltoTape(what) {
//
//  $f = "a[data-id='" + what + "']";
//
//
//  if (!isVisible($(what), $(".tape-only"))) {
//    $(".tape-only").animate({
//      scrollLeft: $($f).offset().left - 100
//    }, 900);
//  }
//
//  $(".tape-only a").css("opacity", 0.8).css("filter", "grayscale(80%)");
//  $($f).css("opacity", 1).css("filter", "grayscale(0)");
//
//}
//
//$(".tape-wrapper").on("click", "div", function (event) {
//  //      alert("lol");
//  let go = $(this).attr("data-id");
//  scrolltoTape(go);
//});
