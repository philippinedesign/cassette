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


  <h1>Philippine Cassette Archive</h1>
  <p>Sharing Filipino tape culture & artifacts.</p>

  <p>A subdivision of the Philippine.design project.</p>
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


  <div id="index" class="tape-wrapper" data-spreadsheet-api="./assets/tapes.json">
    <div class='tape' data-id='{{cid}}' data-decade='{{decade}}'>
      <a href="./tapes/{{cid}}.html">
        <div class="tape-cover"><img src=./tapes/tapes/{{cid}}-cover.jpg></div>
        <!--
      </a><div><b>Id:</b>{{cid}}</div>
<div><b>Artist:</b>{{artist}}</div>
<div><b>Title:</b>{{title}}</div>
<div><b>Label:</b>{{label}}</div>
<div><b>Year:</b>{{year}}</div>
<div><b>Genre:</b>{{genre}}</div>
<div><b>Discogs:</b>{{discogs}}</div>
-->
    </div>
  </div>

  <!--  <script src="https://sheet2api.com/v1/template.js"></script>-->


  <script src="t.js" type="text/javascript"></script>
  <script type="text/javascript">
    console.log("hi");
    //      alert("HIII");

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

  </script>

  <script src"./t.js" type="text/javascript"></script>

</body>

</html>
