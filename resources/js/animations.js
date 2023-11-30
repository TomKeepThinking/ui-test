import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { SplitText } from "./lib/SplitText";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(SplitText);

document.addEventListener('livewire:navigated', () => {

    gsap.set(".split-words", {visibility:"visible"});


    gsap.to('.opacity-animation', {
        autoAlpha: 0,
        y: -50
    });


    let mySplitText = new SplitText('.split-words', {type:"words"});

    let splitTextTimeline = gsap.timeline();

    mySplitText.split({type:"lines"});
    splitTextTimeline.from(mySplitText.lines, {duration: 0.5, autoAlpha:0, y:120, force3D: true, transformOrigin:"top center -150", stagger: 0.1});
    // splitTextTimeline.fromTo('.animate-width',{ width: "0%" },{width:'100%'});
    splitTextTimeline.to('.animate-width', {duration: 0.95, width:'100%'});


    ScrollTrigger.batch(".opacity-animation", {
        start: '20px 80%',
        end: 'center center',
        // toggleActions: "restart pause resume pause",
        markers: false,
        onEnter: (elements, triggers) => {
            gsap.to(elements, {  autoAlpha: 1, y:0, stagger: 0.15 });
        },
    });

    // gsap.to(".opacity-animation", {
    //     scrollTrigger: {
    //         start: '20px 80%',
    //         end: 'center center',
    //         trigger: '.opacity-animation',
    //         pin: true,
    //         markers: true
    //
    //     }, duration: 3, x: 400 })

    // gsap.to(".animation-fade-in-up", { opacity: 1 })

        // .animation-fade-in-right
        // .animation-fade-in-up



})
