const header = document.querySelector('#top-nav');

const topFacebook = document.querySelector('#top-facebook');
const topInstagram = document.querySelector('#top-instagram');

const h1About = document.querySelector('.about__description h4')
const textAbout = document.querySelectorAll('.about__description p')

const scroll = new SmoothScroll('a[href*="#"]');

const socialTL = gsap.timeline();
const aboutTL = gsap.timeline();

socialTL
  .from([topFacebook, topInstagram], {
    delay: 0.2,
    y: -16,
    duration: 1.2,
    opacity: 0,
    ease: 'power3.inOut',
    stagger: {
      amount: 0.2
    }
  });

aboutTL
  .from([h1About, textAbout ], {
    delay: 0.2,
    y: -50,
    opacity: 0,
    duration: 0.8,
    ease: 'power3.out',
    stagger: {
      amount: 0.2
    }
  });

gsap.from(header, {
  y: -16,
  opacity: 0,
  duration: 0.8,
  ease: 'power3.inOut'
});


