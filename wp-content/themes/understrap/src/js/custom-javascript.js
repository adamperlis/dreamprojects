let svg = document.getElementById("title");
let svgTextTwo = document.getElementById("title-two");
let svgRect = document.getElementById("svgRect");

let turbulence = svg.querySelectorAll("#filter feTurbulence")[0];
let displacement = svg.querySelectorAll("#filter feDisplacementMap")[0];

var tl = new TimelineMax();

function animate() {
  tl
    .to(svgTextTwo, 4, {
      strokeDashoffset: 0,
      ease: Circ.easeIn
    })
    .to(svgRect, 10, {
      attr: {
        y: "0%"
      },
      ease: Power2.easeOut
    })
    .to(
      {},
      tl.duration(),
      {
        onUpdate: function() {
          TweenMax.to(turbulence, 2, {
            attr: {
              //crazy cinema effect
            //   baseFrequency:
            //     (tl.duration() - tl.time()) * 1 +
            //     " " +
            //     (tl.duration() - tl.time()) * 1
            // },
            //dreamy effect
            // baseFrequency:
            //   (tl.duration() - tl.time()) * 1 +
            //   " " +
            //   (tl.duration() - tl.time()) * 1
            // },

            //normal effect
            baseFrequency:
              (tl.duration() - tl.time()) * .003 +
              " " +
              (tl.duration() - tl.time()) * .003
            },
            ease: Power3.easeOut
          });
          TweenMax.to(displacement, 2, {
            attr: {
              scale: (tl.time() - tl.duration()) * 10
            },
            ease: Power3.easeOut
          });
        }
      },
      0
    );
}

animate();
