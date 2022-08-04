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

//    $test = json_decode(file_get_contents('https://api.sheety.co/2508bf0c67d4acea71bf89a7498c2610/tape/main'), true);
    $test = json_decode(file_get_contents('assets/tapes.json'), true);
    
     echo '<pre>'; print_r($test); echo '</pre>';
      
      $newcontent = file_get_contents("template.html");
  // writing index
       
    foreach($test as $i) {
      

      // test for jpg or jpeg
      echo "<div class='tape'>";

    $img_url = "./tapes/".$i["cid"]."-cover.jpeg";
      
      if ( !file_exists($img_url)) {
        $img_url = "./tapes/".$i["cid"]."-cover.jpg";
      }
      
  echo "<div class='tape-cover'><img class='tape-cover-img' src='./tapes/".$img_url."'></div>";
      
    echo "<a href='./tapes/".$i['cid'].".html'>".$i['cid']."</a>"; echo "<br>";
      
    echo $i['artist']; echo "<br>";
    echo $i['title']; echo "<br>";
    echo $i['label']; echo "<br>";
    echo $i['year']; echo "</div>";
      
    // generate images
    $templated_images = "<img src='".$img_url."'> ";
      
//    image: jcard
     if( file_exists("./tapes/".$i["cid"]."-jcard.jpeg")){
    $templated_images = $templated_images."<img src='./tapes/".$i["cid"]."-jcard.jpeg'>";
    }  elseif(file_exists("./tapes/".$i["cid"]."-jcard.jpg")){
    $templated_images = $templated_images."<img src='./tapes/".$i["cid"]."-jcard.jpg'>";
    }
      
//    image: tape
     if( file_exists("./tapes/".$i['cid']."-tape.jpeg")){
 $templated_images = $templated_images."<img src='./tapes/".$i["cid"]."-tape.jpeg'>";
 } elseif(file_exists("./tapes/".$i['cid']."-tape.jpg")){
 $templated_images = $templated_images."<img src='./tapes/".$i["cid"]."-tape.jpg'>";
 }


    // image: extras
    for ($x = 1; $x <= 5; $x++) { 
      
      // // // end loop if no more
       if( !file_exists("./tapes/".$i["cid"]."-".$x.".jpeg") && !file_exists("./tapes/".$i["cid"]."-".$x.".jpg")){
          break;
        } 
      
        if( file_exists("./tapes/".$i["cid"]."-".$x.".jpeg")){
           $templated_images = $templated_images."<img src='./tapes/".$i["cid"]."-".$x.".jpeg'>";
      } elseif (file_exists("./tapes/".$i["cid"]."-".$x.".jpg")){
      $templated_images = $templated_images."<img src='./tapes/".$i["cid"]."-".$x.".jpg'>";
      } else{
          break;
        }
      

      }
    // values for template
              
    $replace_array = array(
        ':id' => $i['cid'],
        ':artist' => $i['artist'],
        ':title' => $i['title'],
        ':label' => $i['label'],
        ':year' => $i['year'],
        ':discogs' => $i['discogs'],
        ':images_cover' => '<img src="'.$img_url.'">',
        ':images_html' => $templated_images
    );
      
if (file_exists('tapes/'.$i['cid'].'.html')) {

$handle = fopen('tapes/'.$i['cid'].'.html','w+');

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
