<!DOCTYPE html>
<html lang="en">

<head>
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


  <h1>GENERATE</h1>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" type="text/javascript"></script>

  <div class="tape-wrapper">

    <?php
    
    $test = json_decode(file_get_contents('assets/tapes.json'), true);
    
//     echo '<pre>'; print_r($test); echo '</pre>';
      
      $newcontent = file_get_contents("template.html");
  // writing index
       
    foreach($test as $i) {
      

      // test for jpg or jpeg
      echo "<div class='tape'>";

    $img_url = "./tapes/".$i["cid"]."-cover.jpeg";
      
      if ( !file_exists($img_url)) {
        $img_url = "./tapes/".$i["cid"]."-cover.jpg";
      }
      
  echo "<div class='tape-cover'><img data-zoom-image alt='".$i['artist']." - ".$i['title']."' title='".$i['artist']." - ".$i['title']."' class='tape-cover-img' src='".$img_url."'></div>";
      
    echo "<a href='./tapes/".$i['cid'].".html'>".$i['cid']."</a>"; echo "<br>";
      
    echo $i['artist']; echo "<br>";
    echo $i['title']; echo "<br>";
    echo $i['label']; echo "<br>";
    echo $i['year']; echo "</div>";
      
    // generate images
      
    $templated_images = "<img data-zoom-image src='".$img_url."'> "; // with cover
//    $templated_images = " ";
      
//    image: jcard
     if( file_exists("./tapes/tapes/".$i["cid"]."-jcard.jpeg")){
    $templated_images = $templated_images."<img data-zoom-image  alt='".$i['artist']." - ".$i['title']." Jcard' src='./tapes/".$i["cid"]."-jcard.jpeg'>";
    }  elseif(file_exists("./tapes/tapes/".$i["cid"]."-jcard.jpg")){
    $templated_images = $templated_images."<img data-zoom-image  alt='".$i['artist']." - ".$i['title']." Jcard' src='./tapes/".$i["cid"]."-jcard.jpg'>";
    }
      
//    image: tape
     if( file_exists("./tapes/tapes/".$i['cid']."-tape.jpeg")){
 $templated_images = $templated_images."<img data-zoom-image alt='".$i['artist']." - ".$i['title']."Tape' src='./tapes/".$i["cid"]."-tape.jpeg'>";
 } elseif(file_exists("./tapes/tapes/".$i['cid']."-tape.jpg")){
 $templated_images = $templated_images."<img data-zoom-image alt='".$i['artist']." - ".$i['title']." Tape' src='./tapes/".$i["cid"]."-tape.jpg'>";
 }

    // image: extras
    for ($x = 1; $x <= 5; $x++) { 
      
        // end loop if no more
       if( !file_exists("./tapes/tapes/".$i["cid"]."-".$x.".jpeg") && !file_exists("./tapes/tapes/".$i["cid"]."-".$x.".jpg")){
          break;
        } 
      
        if( file_exists("./tapes/tapes/".$i["cid"]."-".$x.".jpeg")){
           $templated_images = $templated_images."<img data-zoom-image src='./tapes/".$i["cid"]."-".$x.".jpeg'>";
      } elseif (file_exists("./tapes/tapes/".$i["cid"]."-".$x.".jpg")){
      $templated_images = $templated_images."<img data-zoom-image src='./tapes/".$i["cid"]."-".$x.".jpg'>";
      } else{
          break;
        }
      }
    // values for template
              
    $replace_array = array(
        ':cid' => $i['cid'],
        ':artist' => $i['artist'],
        ':stitle' => $i['title'],
        ':label' => $i['label'],
        ':year' => $i['year'],
        ':genre' => $i['genre'],
        ':discogs' => $i['discogs'],
        ':stream' => $i['stream'],
        ':images_cover' => '<img data-zoom-image alt="'.$i["artist"].' - '.$i['title'].'" title="'.$i["artist"].' - '.$i['title'].'" src="'.$img_url.'">',
        ':images_html' => $templated_images
    );
      
//if (file_exists('tapes/'.$i['cid'].'.html')) {
$handle = fopen('tapes/'.$i['cid'].'.html','w+');

$templated_html = strtr($newcontent, $replace_array);

fwrite($handle, $templated_html); fclose($handle); 
    
    }
      
    ?>

  </div>


</body>

</html>
