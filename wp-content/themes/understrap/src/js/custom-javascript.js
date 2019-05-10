//start AOS CSS Animation Lib
AOS.init();

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
	.staggerTo(menu.find('a'), 1, {y: 10, opacity:1, ease: Power2.easeOut}, 0.1)


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

	$('video').prop('muted',true)[0].play();
