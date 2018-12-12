jQuery(document).ready(function($) {

$(window).on("load", function() {
  window.setInterval(function(){
    $('.loader').css("display", "none");
    $('.mainSentences').css("display", "none");
    $('.sentences').css("display", "none");
  }, 3000);
  console.log("window load");
});

  $(function() {
    $('.blog .column .card').matchHeight();
  })

$(window).on("load",function(){
  if($('#myTurntable').length){
    $('#myTurntable').turntable({
      axis: 'scroll',
      reverse: false,
      scrollStart: 'middle'
    });
  }
  if($('#myTurntableTwo').length){
    $('#myTurntableTwo').turntable({
      axis: 'x',
      reverse: false
    });
  }
  if($('#myTurntableThree').length){
    $('#myTurntableThree').turntable({
      axis: 'x',
      reverse: false
    });
  }
});

let string;


var $count = $(".sentences p").length;
var $mainSentence = document.getElementById( 'main' ).textContent;
var $pArray = [];
if ( $count > 0 ) {
  for (let i = 0; i < $count ; i++) {
    let typeId = 'test' + i;
    window ['p'+i] = document.getElementById( typeId ).textContent;
    $pArray.push(eval('p'+i));
  }
}

var $pLength = $pArray.length;
var $colors = [];
if ( $pLength > 0 ) {
  for (let i = 0; i < $pLength ; i++){
    window ['color'+i] = randoColor();
    $colors.push('color'+i);
  }
}

var $stringArray = [];
if ( $pLength > 0 ) {
  for (let i = 0; i < $pLength ; i++){
    window ['string'+i] = $mainSentence + `<strong style="color: ${ eval('color'+i) }">${ eval('p'+i) }</strong>`;
    $stringArray.push(eval('string'+i));
  }
}
$stringArray.push(string0);

function randoColor() {
  var rannumber1=Math.floor(Math.random() * 256 );
  var rannumber2=Math.floor(Math.random() * 256 );
  var rannumber3=Math.floor(Math.random() * 256 );
  var ranrgb="rgb("+rannumber1+","+rannumber2+","+rannumber3+")";
  return ranrgb;
}

let $typedId = $('h2[id]');

if($typedId.length){
  var typed3 = new Typed('#typed', {
      strings: $stringArray,
      typeSpeed: 100,
      backSpeed: 25,
      smartBackspace: true, // this is a default
      loop: false,
      showCursor: false,
      autoInsertCss: false
    });

    window.setInterval(function(){

      var $colors = [];
      var $stringArray = [];

      if ( $pLength > 0 ) {
        for (let i = 0; i < $pLength ; i++){
          window ['color'+i] = randoColor();
          $colors.push('color'+i);
        }
      }

      if ( $pLength > 0 ) {
        for (let i = 0; i < $pLength ; i++){
          window ['string'+i] = $mainSentence + `<strong style="color: ${ eval('color'+i) }">${ eval('p'+i) }</strong>`;
          $stringArray.push(eval('string'+i));
        }
      }
      $stringArray.push(string0);

        var typed3 = new Typed('#typed', {
            strings: $stringArray,
            typeSpeed: 100,
            backSpeed: 25,
            smartBackspace: true, // this is a default
            loop: false,
            showCursor: false,
            autoInsertCss: false
          });

    }, 15000);
}

  $(window).on("load", function() {
    if($('.gallery img').length){
      $('.gallery img').responsify();
      console.log('gal img');
    }
    if($('.port a img').length){
      $('.port a img').responsify();
      console.log('port img');
    }
  });

  $(window).resize(function(){
    if($('.gallery img').length){
      $('.gallery img').responsify();
      console.log('gal img resize');
    }
    if($('.port a img').length){
      $('.port a img').responsify();
      console.log('port img resize');
    }
  });


  $('.ui.sidebar')
    .sidebar({
      transition: 'scale down'
    })
  ;


$('.ui.sidebar').first()
  .sidebar('attach events', '.top.menu .item')
;
$('.top.menu .item')
  .removeClass('disabled')
;

$('.ui.sticky')
  .sticky({
    context: 'main'
  });

})
