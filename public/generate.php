<!DOCTYPE html>
<html lang="en">

<head>
  <!--    <link rel="stylesheet" href="./stylesheet.css" type="text/css" />-->
  <style type="text/css">
    .body {
      width: auto;
    }

  </style>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8" />
</head>

<body>

  test testdddddgasdgasdg

  <h1>test</h1>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" type="text/javascript"></script>




  <?php

    $test = json_decode(file_get_contents('https://sheet2api.com/v1/UnRe83FVRzuZ/philippinedesign-cassette-archive'), true);
    
//     echo '<pre>'; print_r($test); echo '</pre>';
      
      $newcontent = file_get_contents("template.html");
  
  // write index
       
    foreach($test as $i) {
    echo "<a href='".$i['id'].".html'>".$i['id']."</a>"; echo "<br>";
    echo $i['artist']; echo "<br>";
    echo $i['title']; echo "<br>";
    echo $i['label']; echo "<br>";
    echo $i['year']; echo "<br><br><hr><br><br>";
      
if (!file_exists($i['id'].'.html')) { $handle = fopen($i['id'].'.html','w+'); 
                                     
$txt_top = file_get_contents("top.txt");
                                     
fwrite($handle, $txt_top."<img src='./tapes/".$i['id']."-cover.jpeg'><strong>".$i['title']." - ".$i['artist']." (".$i['year'].")</strong><br><br>"); fclose($handle); }
      
    // To know what's in $item
//    echo '<pre>'; var_dump($i);
      
      
}
//      
//      
      
    ?>


  <!--
    <div data-spreadsheet-api="https://sheet2api.com/v1/UnRe83FVRzuZ/philippinedesign-cassette-archive/main">
      
    <img src=./tapes/{{id}}-cover.jpeg>
    <div><b>Id:</b>{{id}}</div>
    <div><b>Artist:</b>{{artist}}</div>
    <div><b>Title:</b>{{title}}</div>
    <div><b>Label:</b>{{label}}</div>
    <div><b>Year:</b>{{year}}</div>
    <div><b>Genre:</b>{{genre}}</div>
    <div><b>Discogs:</b>{{discogs}}</div>
</div>
    
-->


  <script src="https://sheet2api.com/v1/template.js"></script>


  <script src="t.js" type="text/javascript"></script>
  <script type="text/javascript">
    console.log("hi");
    //      alert("HIII");

  </script>

  <!--    <script src"t.js" type="text/javascript"></script>-->
</body>

</html>
