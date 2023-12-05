import { animate, stagger, inView } from "motion"


// document.addEventListener('livewire:navigated', () => {
//     animate(
//         ".box",
//         { opacity: [0, 1] },
//         { duration: 3 }
//     )
//
//
//     inView(".fade-in-grid", (info) => {
//         animate(
//             info.target,
//             { x: [-100, 200] },
//             {
//                 delay: stagger(0.1),
//                 duration: 0.5,
//                 easing: [.22, .03, .26, 1]
//             }
//         )
//     })
//
// });


import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { SplitText } from "./lib/SplitText";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(SplitText);


document.addEventListener('livewire:navigated', () => {

    // Split Text //

    //  Trigger animations on page load
    let mySplitText = new SplitText('.split-words', {type:"lines"});

    let splitTextTimeline = gsap.timeline();
    splitTextTimeline.from(mySplitText.lines, {duration: 0.8, ease: "expo.out", autoAlpha:0, y:120, force3D: true, transformOrigin:"top center -150", stagger: 0.1, delay: 0.2});
    splitTextTimeline.to('.animate-width', {duration: 0.95, width:'100%'});


    const items = gsap.utils.toArray('.fade-in');

    items.forEach(item => {
        gsap.to(item, {
            opacity: 1,
            scrollTrigger: {
                trigger: item,
                start: '300px 75%',
                markers: false,
                end: 'center center',
            }
        })
    });



    // Hide elements before transition
    gsap.set(".split-words", {visibility:"visible"});
    // gsap.set(".fade-in", {visibility:"visible"});
    // gsap.set(".fade-in-grid", {visibility:"visible"});
    gsap.set(".fade-in-up", {visibility:"visible"});



    //  Trigger animations on scroll
    ScrollTrigger.batch(".fade-in-grid", {
        start: '100px 75%',
        end: 'center center',
        // toggleActions: "restart pause resume pause",
        markers: false,
        onEnter: (elements, triggers) => {
            gsap.to(elements, {  opacity: 1, stagger: 0.15});
        },
    });

    gsap.to(".fade-in-up", {
        scrollTrigger: ".fade-in-up", // start the animation when ".box" enters the viewport (once)
        autoAlpha: 1,
        y: 0,
        duration: 0.5
    });
})
