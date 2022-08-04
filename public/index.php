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
  <script src="http://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="http://code.jquery.com/ui/1.13.0/jquery-ui.min.js" type="text/javascript"></script>


  <div class="tape-wrapper">

    <div data-spreadsheet-api="https://sheet2api.com/v1/UnRe83FVRzuZ/philippinedesign-cassette-archive/main">
      <div class='tape' data-id='{{id}}'>
        <a href="./tapes/{{id}}.html">{{artist}} - {{title}}</a>
        <div class="tape-cover"><img src=./tapes/tapes/{{id}}-cover.jpg></div>

        <div><b>Id:</b>{{id}}</div>
        <div><b>Artist:</b>{{artist}}</div>
        <div><b>Title:</b>{{title}}</div>
        <div><b>Label:</b>{{label}}</div>
        <div><b>Year:</b>{{year}}</div>
        <div><b>Genre:</b>{{genre}}</div>
        <div><b>Discogs:</b>{{discogs}}</div>
      </div>
    </div>

  </div>



  <script src="https://sheet2api.com/v1/template.js"></script>


  <script src="t.js" type="text/javascript"></script>
  <script type="text/javascript">
    console.log("hi");
    //      alert("HIII");

  </script>

  <!--    <script src"t.js" type="text/javascript"></script>-->
</body>

</html>
