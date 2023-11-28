import './bootstrap';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);



// or directly on timelines:
let tl = gsap.timeline();



//this line produces the same result as the previous two lines (just shorter)
tl.to('.animation-fade-in', { duration: 0.5,  opacity: 1 });
tl.fromTo('.animation-fade-in-up', { y: 100, opacity: 0 }, { duration: 0.5, y: 0, opacity:1 });
tl.fromTo('.animation-fade-in-right', { x: 100, opacity: 0 }, { duration: 0.5, x: 0, opacity:1 });

