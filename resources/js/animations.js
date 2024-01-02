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

    let splitText = document.querySelectorAll('.split-words');

    if(splitText.length  > 0){
        gsap.set(".split-words", {visibility:"visible"});
        let splitTextTimeline = gsap.timeline();
        splitTextTimeline.from(mySplitText.lines, {duration: 0.8, ease: "expo.out", autoAlpha:0, y:120, force3D: true, transformOrigin:"top center -150", stagger: 0.1, delay: 0.2});
        splitTextTimeline.to('.animate-width', {duration: 0.95, width:'100%'});
    }

    let fadeIn = document.querySelectorAll('.fade-in');


    if(fadeIn.length > 0){
        gsap.set(".fade-in-up", {visibility:"visible"});
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
    }


    let fadeInUp = document.querySelectorAll('.fade-in-up');

    if(fadeInUp.length > 0){
        gsap.to(".fade-in-up", {
            scrollTrigger: ".fade-in-up", // start the animation when ".box" enters the viewport (once)
            autoAlpha: 1,
            start: '-500px',
            y: 0,
            duration: 0.5
         });
    }


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


    const navbar = document.getElementById('navbar-light')
    const navbar2 = document.getElementById('navbar')
    const onScroll = () => {

        // Get scroll value
        const scroll = document.documentElement.scrollTop

        // If scroll value is more than 0 - means the page is scrolled, add or remove class based on that
        if (scroll > 900) {
            navbar.classList.add('opacity-0');
            navbar2.classList.remove('opacity-0');
        } else {
            navbar.classList.remove('opacity-0')
            navbar2.classList.add('opacity-0')
        }
    }

// Use the function
    window.addEventListener('scroll', onScroll)
})
