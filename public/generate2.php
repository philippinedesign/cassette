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


  <link rel="stylesheet" href="./assets/s.css">
</head>

<body>

  test testdddddgasdgasdg

  <h1>test</h1>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" type="text/javascript"></script>

  <div class="tape-wrapper">

    <?php

    $test = json_decode(file_get_contents('https://sheet2api.com/v1/UnRe83FVRzuZ/philippinedesign-cassette-archive'), true);
    
//     echo '<pre>'; print_r($test); echo '</pre>';
      
      $newcontent = file_get_contents("template.html");
  // writing index
       
    foreach($test as $i) {
      
      // test for jpg or jpeg
      echo "<div class='tape'>";

    $img_url = "./tapes/".$i['id']."-cover.jpeg";
      if ( !file_exists($img_url) ) {
        $img_url = "./tapes/".$i['id']."-cover.jpg";
      }
  echo "<div class='tape-cover'><img class='tape-cover-img' src='".$img_url."'></div>";
      
    echo "<a href='tapes/".$i['id'].".html'>".$i['id']."</a>"; echo "<br>";
      
    echo $i['artist']; echo "<br>";
    echo $i['title']; echo "<br>";
    echo $i['label']; echo "<br>";
    echo $i['year']; echo "</div>";
      
    // generate images
    $templated_images = "<img src='".$img_url."'> ";
      
//    image: jcard
     if( file_exists("./tapes/".$i['id']."-jcard.jpeg")){
    $templated_images = $templated_images."<img src='./tapes/".$i["id"]."-jcard.jpeg'>";
    }
      
      elseif(file_exists("./tapes/".$i['id']."-jcard.jpg")){
    $templated_images = $templated_images."<img src='./tapes/".$i["id"]."-jcard.jpg'>";
    }

    // image: extras
    for ($x = 1; $x <= 5; $x++) { 
      
      // // // end loop if no more
       if( !file_exists("./tapes/".$i["id"]."-".$x.".jpeg") && !file_exists("./tapes/".$i["id"]."-".$x.".jpg")){
          break;
        } 
      
        if( file_exists("./tapes/".$i["id"]."-".$x.".jpeg")){
           $templated_images = $templated_images."<img src='./tapes/".$i["id"]."-".$x.".jpeg'>";
      } elseif (file_exists("./tapes/".$i["id"]."-".$x.".jpg")){
      $templated_images = $templated_images."<img src='./tapes/".$i["id"]."-".$x.".jpg'>";
      }
      
//      echo $x;

      }
    // values for template
              
    $replace_array = array(
        ':id' => $i['id'],
        ':artist' => $i['artist'],
        ':title' => $i['title'],
        ':label' => $i['label'],
        ':year' => $i['year'],
        ':discogs' => $i['discogs'],
        ':images_cover' => '<img src="'.$img_url.'">',
        ':images_html' => $templated_images
    );
      
if (file_exists('tapes/'.$i['id'].'.html')) {

$handle = fopen('tapes/'.$i['id'].'.html','w+');

//$txt_top = file_get_contents("top.txt");

//$templated_html = $txt_top."<img src='".$img_url."'><strong>".$i['title']." - ".$i['artist']." (".$i['year'].")</strong><br><br>";

$templated_html = strtr($newcontent, $replace_array);

fwrite($handle, $templated_html); fclose($handle); }

}
      
    ?>

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
