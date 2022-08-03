

$(function() {
  console.log('Page loaded!');
console.log("attempting ot parse json..");
  
    var sheet2api = "https://sheet2api.com/v1/UnRe83FVRzuZ/philippinedesign-cassette-archive";
  $.getJSON( sheet2api, {
    id: "mount rainier",
    artist: "any",
    title: "json",
    label: "json",
    year: "1999",
    genre: "json",
    discogs: "json",
  })
    .done(function( data ) {
    console.log(data);
    
//      $.each( data.items, function( i, item ) {
//        $( "<div>" ).attr( "src", item.media.m ).appendTo( "body" );
//        if ( i === 3 ) {
//          return false;
//        }
//      });
//    
    
    });
});
