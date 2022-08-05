<!DOCTYPE html>
<html lang="en">

<head>

  <title>Philippine Cassette Archive</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8" />

  <link rel="stylesheet" href="./assets/s.css">


</head>

<body>


  <div id="title-about">
    <h1>Philippine Cassette Archive</h1>
    <p>Sharing Filipino tape culture & artifacts.</p>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" type="text/javascript"></script>

  <div id="header">
    <div class="control-decade">
      <input id="all" type="radio" name="decade" value="all">
      <label for="all">All</label>
      <input id="70s" type="radio" name="decade" value="1970">
      <label for="70s">70s</label>
      <input id="80s" type="radio" name="decade" value="1980">
      <label for="80s">80s</label>
      <input id="90s" type="radio" name="decade" value="1990">
      <label for="90s">90s</label>
      <input id="00s" type="radio" name="decade" value="2000">
      <label for="00s">00s</label>

    </div>


  </div>


  <div id="index">

    <div class="tape-only" data-spreadsheet-api="./assets/tapes.json">
      <a href="./tapes/{{cid}}.html" data-id='{{cid}}' data-decade='{{decade}}'>
        <div class="tape-cover" title="{{artist}} - {{title}} ({{year}}) released by {{label}}, {{genre}}"><img src=./tapes/tapes/{{cid}}-cover.jpg></div>
      </a>
    </div>

    <div class="tape-wrapper" data-spreadsheet-api="./assets/tapes.json">
      <div class='tape' data-id='{{cid}}' data-decade='{{decade}}'>
        <!--          <div class="tape-cover"><img src=./tapes/tapes/{{cid}}-cover.jpg></div>-->
        {{artist}} - {{title}}
      </div>
    </div>
  </div>

  <!--  <script src="https://sheet2api.com/v1/template.js"></script>-->


  <script src="t.js" type="text/javascript"></script>
  <script type="text/javascript">
    // tooltips
    $(function() {
      $(document).tooltip({
        track: true,
        tooltipClass: "tooltip"
      });
    });

    // filters
    $(".control-decade input").change(function() {
      let w = $('.control-decade input[name="decade"]:checked').val();
      console.log(w);

      // what decade?
      if (w == "all") {
        $("#index .tape").show();
      } else {
        $("#index .tape:not([data-decade='" + w + "'])").hide();
        $("#index .tape[data-decade='" + w + "']").show();
      }
    })

    function scrolltoTape(what) {

      $f = "a[data-id='" + what + "']";

      $(".tape-only").animate({
        scrollLeft: $($f).offset().left - 100
      }, 900);

      $(".tape-only a").css("opacity", 0.8).css("filter", "grayscale(80%)");
      $($f).css("opacity", 1).css("filter", "grayscale(0)");

    }

    $(".tape-wrapper").on("click", "div", function(event) {
      //      alert("lol");
      let go = $(this).attr("data-id")
      ''
      scrolltoTape(go);
    });

  </script>

  <script src"./t.js" type="text/javascript"></script>

</body>

</html>
