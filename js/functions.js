jQuery(document).ready(function($) {

$(window).on("load", function() {
  window.setInterval(function(){
    $('.loader').css("display", "none");
  }, 3000);
  console.log("window load");
});

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

window.setInterval(function(){
  var rannumber1=Math.floor(Math.random() * 256 );
  var rannumber2=Math.floor(Math.random() * 256 );
  var rannumber3=Math.floor(Math.random() * 256 );
  var ranrgb="rgb("+rannumber1+","+rannumber2+","+rannumber3+")";
}, 1050);

// var color1 = randoColor();
// var color2 = randoColor();
// var color3 = randoColor();
// var color4 = randoColor();
// var color5 = randoColor();

window.setInterval(function(){
  color1 = randoColor();
  color2 = randoColor();
  color3 = randoColor();
  color4 = randoColor();
  color5 = randoColor();
}, 12000);

var test = document.getElementById( 'test1' ).textContent;
var test2 = document.getElementById( 'test2' ).textContent;

console.log(test);
console.log(test2);

var $count = $(".sentences p").length;
var $mainSentence = document.getElementById( 'main' ).textContent;
var $pArray = [];
console.log($count);
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

window.setInterval(function(){
  if ( $pLength > 0 ) {
    for (let i = 0; i < $pLength ; i++){
      window ['color'+i] = randoColor();
      $colors.push('color'+i);
    }
  }
}, 15000);

var $stringArray = [];
if ( $pLength > 0 ) {
  for (let i = 0; i < $pLength ; i++){
    window ['string'+i] = $mainSentence + `<strong style="color: ${ eval('color'+i) }">${ eval('p'+i) }</strong>`;
    $stringArray.push(eval('string'+i));
  }
}
$stringArray.push(string0);

window.setInterval(function(){
  if ( $pLength > 0 ) {
    for (let i = 0; i < $pLength ; i++){
      window ['string'+i] = $mainSentence + `<strong style="color: ${ eval('color'+i) }">${ eval('p'+i) }</strong>`;
      $stringArray.push(eval('string'+i));
    }
  }
  $stringArray.push(string0);
}, 15000);
// var string1 = `Why we are passionate about <strong style="color: ${ color1 }">Sneakers</strong>`;
// var string2 = `Why we are passionate about <strong style="color: ${ color2 }">Sneakers</strong>`;
// var string3 = `Why we are passionate about <strong style="color: ${ color3 }">Design</strong>`;
// var string4 = `Why we are passionate about <strong style="color: ${ color4 }">Art</strong>`;
// var string5 = `Why we are passionate about <strong style="color: ${ color5 }">Brands</strong>`;
//
// window.setInterval(function(){
//   string1 = `Why we are passionate about <strong style="color: ${ color1 }">Sneakers</strong>`;
//   string2 = `Why we are passionate about <strong style="color: ${ color2 }">Sneakers</strong>`;
//   string3 = `Why we are passionate about <strong style="color: ${ color3 }">Design</strong>`;
//   string4 = `Why we are passionate about <strong style="color: ${ color4 }">Art</strong>`;
//   string5 = `Why we are passionate about <strong style="color: ${ color5 }">Brands</strong>`;
// }, 12001);

function randoColor() {
  var rannumber1=Math.floor(Math.random() * 256 );
  var rannumber2=Math.floor(Math.random() * 256 );
  var rannumber3=Math.floor(Math.random() * 256 );
  var ranrgb="rgb("+rannumber1+","+rannumber2+","+rannumber3+")";
  return ranrgb;
}

let $typedId = $('h2[id]');
console.log(string2);
console.log('here: ', p2);
console.log('array: ', $pArray);
console.log($mainSentence);
console.log('length: ', $pLength);
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
        var typed3 = new Typed('#typed', {
            strings: $stringArray,
            typeSpeed: 100,
            backSpeed: 25,
            smartBackspace: true, // this is a default
            loop: true,
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
