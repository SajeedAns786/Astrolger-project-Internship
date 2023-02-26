const sliderElm = document.querySelector(".slider-container .slider");
const btnLeft = document.querySelector(".slider-container .btn-left");
const btnRight = document.querySelector(".slider-container .btn-right");

const numberSliderBoxs = sliderElm.children.length;
let idxCurrentSlide = 0;

// Functions:
function moveSlider() {
  let leftMargin = (sliderElm.clientWidth / numberSliderBoxs) * idxCurrentSlide;
  sliderElm.style.marginLeft = -leftMargin + "px";
  console.log(sliderElm.clientWidth, leftMargin);
}
function moveLeft() {
  if (idxCurrentSlide === 0) idxCurrentSlide = numberSliderBoxs - 1;
  else idxCurrentSlide--;

  moveSlider();
}
function moveRight() {
  if (idxCurrentSlide === numberSliderBoxs - 1) idxCurrentSlide = 0;
  else idxCurrentSlide++;

  moveSlider();
}

// Event Listeners:
btnLeft.addEventListener("click", moveLeft);
btnRight.addEventListener("click", moveRight);
window.addEventListener("resize", moveSlider);




var a = 0,
    para = $('.set p').data( 'place' ),
    paraSpan = $( '.set p span' ),
    pArray = para.split( '' );

var animate = function () {
      
  var timeout = setTimeout(function () {
    clearTimeout( timeout );

    if ( a === pArray.length ) {

      return false;

    } else {

      $( '.set p' ).append( '<span>' + pArray[a] + '</span>' );
            
      a++;

      animate();

    }

  }, 30 );
};

animate();
