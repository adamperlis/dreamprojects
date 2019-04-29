///Scroll Library
var tlFirstScroll = new TimelineMax()


tlFirstScroll
.staggerFrom('.reveal', 3, {transformOrigin:'center center', autoAlpha:0,  scale: 1, ease: Power4.easeIn}, 0.5)
.staggerTo('.reveal', 3, {scale: 1.1, opacity:1, ease: Power2.easeOut}, 0.5)
.set('.reveal', {autoAlpha:1})
.to('.reveal', 10, {autoAlpha:.15})
.to('.mission--section', 10, {backgroundColor:'black', delay: 20})
.from('.reveal-text', 10, {autoAlpha:0})
.to('.reveal-text', 10, {autoAlpha:1})
.to('.mission--section', 10, {backgroundColor:'#fffdfa'})
.to('.reveal-text', 10, {autoAlpha:0}, "-=1")
.to('.reveal', 5, {autoAlpha:0})
.from('video', 10, {scale:.25, autoAlpha:0})
.to('video', 10, {scale:1, autoAlpha:1, y:80})

//text-animation

$('video').prop('muted',true)[0].play();


var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
		triggerElement:".trigger1",
		duration: "100%",
		triggerHook: .5,
})

.setTween(tlFirstScroll)
.addIndicators(true)
.addTo(controller)

///Swiper Library
var swiper = new Swiper('.swiper-container', {
      scrollbar: {
        el: '.swiper-scrollbar',
        hide: false,
      },
			navigation: {
			 nextEl: '.swiper-button-next',
			 prevEl: '.swiper-button-prev',
		  },
			speed:750,
    });

//Menu
	var bars = $('.menu-bar');
  var menu = $('#menu');
  var menuButton = $('.menu-button');
  var timeline = new TimelineMax({paused: true});
  var open = false;

  timeline
  .to(bars[0], .5, {
    top: '5px',
    rotation: 45,
		ease: Power4.easeIn
  }, 0)
  .to(bars[1], .5, {
    top: '-1px',
    rotation: -45,
		ease: Power4.easeIn
  }, 0)
  .to(menu, 0.4, {
		visibility: 'visible',
    top: '0%',
		height:'100%',
    ease: Power4.easeIn
  }, '-=0.2')
	.staggerTo(menu.find('a'), 1, {scale: 1.1, opacity:1, ease: Power2.easeOut}, 0.1)


  menuButton.on('click', function () {
    $(this).toggleClass('active');
    if (open) {
      timeline.reverse();
      open = false;
    } else {
      timeline.play();
      open = true;
    }
  });

  menu.find('a').on('click', function () {
    timeline.reverse();
  });
