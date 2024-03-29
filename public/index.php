<!DOCTYPE html>
<html lang="en">

<head>

  <title>Philippine Cassette Archive</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8" />

<!--


      CHIA AMISOLA
      https://chias.website

      DEVELOPH
      https://developh.org
        

-->
  
  <meta name="description" content="The Philippine Cassette Archive celebrates & preserves Pinoy tape culture. Made by Chia Amisola.">


  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://philippinecassettearchive.com/">
  <meta property="og" content="The Philippine Cassette Archive celebrates & preserves Pinoy tape culture.">
  <meta property="og:description" content="The Philippine Cassette Archive celebrates & preserves Pinoy tape culture.">
  <meta property="og:image" content="https://philippine.design/tapes/preview.png">


  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://philippinecassettearchive.com/">
  <meta property="twitter:title" content="Philippine Cassette Archive">
  <meta property="twitter:description" content="Archiving & celebrating Pinoy cassette culture.">
  <meta property="twitter:image" content="https://philippine.design/tapes/preview.png">


  <link rel="stylesheet" href="./assets/s.css">


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" type="text/javascript"></script>

</head>

<body>

  <div id="loader">
    <div class="_loading">
      <img src="philippine-cassette-archive.svg">
      <span>Loading the Philippine Cassette Archive...</span>
    </div>
  </div>

  <div id="index-wrapper">

    <div class="top-wrapper">
      <div id="title-about">
        <h1>
          <span>Philippine</span> 
          <span>Cassette</span> 
          <span>Archive</span> </h1>
      </div>
      <div id="header">
        <div class="header-controls">
          <div>
            <label for="all"><input id="all" type="checkbox" name="all" value="all">All</label>
          </div>
          <div class="control-decade">
            <label for="70s"><input id="70s" type="checkbox" name="decade" value="1970">70s</label>
            <label for="80s"><input id="80s" type="checkbox" name="decade" value="1980">80s</label>
            <label for="90s"><input id="90s" type="checkbox" name="decade" value="1990">90s</label>
            <label for="00s"><input id="00s" type="checkbox" name="decade" value="2000">00s</label>
          </div>
          <div class="control-genre">
            <label for="pop"><input id="pop" type="checkbox" name="genre" value="pop">Pop</label>
            <label for="folk"><input id="folk" type="checkbox" name="genre" value="folk">Folk</label>
            <label for="rock"><input id="rock" type="checkbox" name="genre" value="rock">Rock</label>
            <label for="jazz"><input id="jazz" type="checkbox" name="genre" value="jazz">Jazz</label>
          </div>


          <div class="control-displaytype">
            <button data-control="smol">Small</button>
            <button data-control="big">Big</button>
          </div>

        </div>

        <div class="info">
          <button data-what="info">About</button>
          <button data-what="fb">FB</button>
          <button data-what="ig">IG</button>
          <button></button>
        </div>
      </div>
    </div>

    <div id="about">
      <h1>About the Philippine Cassette Archive</h1>
      <p>The Philippine Cassette Archive is a digital collection of cassette tapes, a glimpse into Pinoy tape culture.<br><br>Launched in August 2022 under the <a href="https://philippine.design" target="_blank">philippine.design</a> project, the collection currently focuses on graphic design, packaging, and visuals. Materials on launch are largely taken from Discogs. We later hope to expand on collecting cassettes from small labels, locally-produced bootlegs, and in collecting newer (post-2010s) artifacts by contemporary Filipino musicians & artist collectives.</p>


      <h1>Submit a tape</h1>
      <p>If you have scans and/or digital versions of your cassette tapes or have metadata to contribute to any entries, please feel free to submit them to us at admin@philippine.design or via Facebook Messenger or Instagram DM.</p>

      <h1>Support the Archive</h1>
      <p>If you are interested in donating to the archive or to philippine.design in general (feel free to specify where your donation would like to go), contact Chia at <a href="mailto:admin@philippine.design">admin@philippine.design</a>. We are grateful to receive donations in any amount to fund our research and archival requests, particularly in compensation for scanning & digitization efforts.</p>

      <p><strong>Cassette Adoption</strong>: For Php1000 (20USD), you may 'adopt' a cassette page and list your name + a short message on its respective page.</p>

      <p>All contributors, supporters, and partners will be listed on this page.</p>

      <h1>Find us</h1>
      <div class="links">
        <a href="https://developh.org" target="_blank">Developh</a>
        <a href="https://www.instagram.com/philippineinternetarchive" target="_blank">@PhilippineInternetArchive on Instagram</a>
      </div>
      <br>
      <h1>People</h1>
      <p>The Philippine Cassette Archive and the Philippine Internet Archive  is founded, developed, and maintained by <a href="https://chias.website">Chia Amisola</a>. <a href="https://twitter.com/hotemogf" target="_blank">(Twitter: hotemogf)</a>   <a href="https://instagram.com/hotemogf" target="_blank">(Instagram: hotemogf)</a>  </p>
    </div>

    <div id="index">
      <div class="tape-wrapper-smol">
        <div class="tape-only" data-spreadsheet-api="./assets/tapes.json">
          <a href="./tapes/{{cid}}" data-id='{{cid}}' data-decade='{{decade}}' data-genre='{{genre}}' class="tape-cover" title="{{artist}} - {{title}} ({{year}}) released by {{label}}, {{genre}}">
            <div class="_year">{{year}}</div>
            <img src=./tapes/tapes/{{cid}}-cover.jpg>
            <div class="info">
              {{artist}}<br>
              {{title}}
            </div>
          </a>
        </div>
      </div>

      <div class="tape-wrapper">
        <div class="tape-only" data-spreadsheet-api="./assets/tapes.json">
          <a href="./tapes/{{cid}}.html" data-id='{{cid}}' data-decade='{{decade}}' data-genre='{{genre}}' class="tape-cover" title="{{artist}} - {{title}} ({{year}}) released by {{label}}, {{genre}}">
            <img src=./tapes/tapes/{{cid}}-cover.jpg>
          </a>
        </div>
      </div>

    </div>
  </div>


  <script src="t.js" type="text/javascript"></script>

</body>

</html>
