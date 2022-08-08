<!DOCTYPE html>
<html lang="en">

<head>

  <title>Philippine Cassette Archive</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8" />

  <link rel="stylesheet" href="./assets/s.css">


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" type="text/javascript"></script>

</head>

<body>


  <div id="index-wrapper">

    <div class="top-wrapper">
      <div id="title-about">
        <h1>Philippine Cassette Archive</h1>
      </div>
      <div id="header">
        <div class="header-controls">
          <div>
            <input id="all" type="checkbox" name="all" value="all"><label for="all">All</label>
          </div>
          <div class="control-decade">
            <input id="70s" type="checkbox" name="decade" value="1970"><label for="70s">70s</label>
            <input id="80s" type="checkbox" name="decade" value="1980"><label for="80s">80s</label>
            <input id="90s" type="checkbox" name="decade" value="1990"><label for="90s">90s</label>
            <input id="00s" type="checkbox" name="decade" value="2000"><label for="00s">00s</label>
          </div>
          <div class="control-genre">
            <input id="pop" type="checkbox" name="genre" value="pop"><label for="pop">Pop</label>
            <input id="folk" type="checkbox" name="genre" value="folk"><label for="folk">Folk</label>
            <input id="rock" type="checkbox" name="genre" value="rock"><label for="rock">Rock</label>
            <input id="jazz" type="checkbox" name="genre" value="jazz"><label for="jazz">Jazz</label>
          </div>


          <div class="control-displaytype">
            <button data-control="big">Big</button>
            <button data-control="smol">Small</button>
          </div>

        </div>

        <div class="info">
          <button data-what="info">About</button>
        </div>


        <!--        <div class="control-showfilters"></div>-->
      </div>
    </div>

    <div id="about">
      <h1>About the Philippine Cassette Archive</h1>
      <p>The Philippine Cassette Archive is a digital collection of cassette tapes, a glimpse into Pinoy tape culture.<br><br>Launched in August 2022 under the <a href="https://philippine.design" target="_blank">philippine.design</a> project, the collection currently focuses on graphic design, packaging, and visuals. We later hope to expand on collecting cassettes from small labels, locally-produced bootlegs, and in collecting newer (post-2010s) artifacts by contemporary Filipino musicians & artist collectives.</p>

      <h1>Submit a tape</h1>
      <p>If you have scans and/or digital versions of your cassette tapes or have metadata to contribute to any entries, please feel free to submit them to us at admin@philippine.design or via Facebook Messenger or Instagram DM.</p>

      <h1>Support the Archive</h1>
      <p>If you are interested in donating to the archive or to philippine.design in general (feel free to specify where your donation would like to go), contact Chia at <a href="mailto:admin@philippine.design"></a>. We are grateful to receive donations in any amount to fund our research and archival requests, particularly in compensation for scanning & digitization efforts.</p>

      <p><strong>Cassette Adoption</strong>: For Php1000 (20USD), you may 'adopt' a cassette page and list your name + a short message on its page.</p>
      <p></p>
    </div>

    <div id="index">
      <div class="tape-wrapper-smol">
        <div class="tape-only" data-spreadsheet-api="./assets/tapes.json">
          <a href="./tapes/{{cid}}.html" data-id='{{cid}}' data-decade='{{decade}}' data-genre='{{genre}}' class="tape-cover" title="{{artist}} - {{title}} ({{year}}) released by {{label}}, {{genre}}">
            <div class="_year">{{year}}</div>
            <img src=./tapes/tapes/{{cid}}-cover.jpg>
            <div class="info">
              {{title}}<br>
              {{artist}}
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
  <!--  <script src="https://sheet2api.com/v1/template.js"></script>-->


  <script src="t.js" type="text/javascript"></script>

</body>

</html>
