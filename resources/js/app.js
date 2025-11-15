import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import { gsap } from "gsap"
import { ScrollTrigger } from 'gsap/all';


gsap.registerPlugin(ScrollTrigger);

gsap.to('.arrow-elements', { rotation: -180, duration: 1, ease: "bounce"});

gsap.to('.card', { y: 50, duration: 6, ease: "elastic" })

gsap.to('.home-layout', { opacity: 1, scale: 1, duration: 3, ease: "circ"})

gsap.from(".image-about", {
    scrollTrigger: {
        trigger: ".image-about",
        start: "top 80%",    
        toggleActions: "play none none reverse",
        scrub: true
    },
    y: 50,
    opacity: 0,
    duration: 1,
    ease: "power3.out"
});

gsap.from(".about-desc", {
    scrollTrigger: {
        trigger: ".image-about",
        start: "top 80%",     // mulai ketika card 80% masuk viewport
        toggleActions: "play none none reverse",
        scrub: true
    },
    y: 50,
    opacity: 0,
    duration: 1,
    ease: "power3.out"
});

gsap.from('.detail-card', {
    scrollTrigger: {
    trigger: ".detail-card",
    start: "top 80%",
    toggleActions: "play none none reverse",
    scrub: true,
 },

 y: 50,
 opacity: 0,
 duration: 2,
 ease: "bounce"
})
