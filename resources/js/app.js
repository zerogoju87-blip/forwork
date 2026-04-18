import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 1000,
    once: true,
});
import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", () => {

    // Hero animation
    gsap.from(".hero-title", {
        y: -50,
        opacity: 0,
        duration: 1
    });

    gsap.from(".hero-subtitle", {
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.3
    });

    // Project cards stagger
    gsap.from(".project-card", {
        opacity: 0,
        y: 30,
        duration: 0.8,
        stagger: 0.2
    });

});

// Mobile menu toggle
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
});
