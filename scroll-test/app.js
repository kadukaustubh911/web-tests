gsap.registerPlugin(MotionPathPlugin);

const tween = gsap.timeline();
tween.to(".paper-plane", {
    duration: 1,
    ease: "power1.InOut",
    motionPath: {
        path: [{ x: 100, y: -100 }, { x: 200, y: 100 }, { x: 400, y: -100 }, { x: 600, y: 100 }, { x: 800, y: -100 }, { x: 1000, y: 100 }, { x: 1200, y: -100 }, { x: 1400, y: 100 }],
        curviness: 1.1,
        autoRotate: true
    }
});

const controller = new ScrollMagic.Controller();
const scene = new ScrollMagic.Scene({
    triggerElement: ".animation",
    duration: 1000,
    triggerHook: 0
})

    .setTween(tween)
    .setPin('.animation')
    .addTo(controller);