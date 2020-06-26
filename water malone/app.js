const content = document.querySelector('.content');
const slider = document.querySelector('.slider');
const logo = document.querySelector('.logo');
const menu = document.querySelector('.menu');
const media = document.querySelector('.media');
const headline = document.querySelector('.headline');
const text = document.querySelector('.text');
const footer = document.querySelector('.footer');

const tl = new TimelineMax();

tl.fromTo(media, 0.5, {opacity: 0}, {opacity: 1, ease: Power2.easeInOut})
.fromTo(media, 1.2, {width:'0%', ease: Power2.easeInOut}, {width:'100%', ease: Power2.easeInOut})
.fromTo(slider, 1.2, {y: '-100%'}, {y: '0%', ease: Power2.easeInOut}, '-=1.2')
.fromTo(logo, 0.5, {opacity: 0, x: 30}, {opacity: 1, x: 0}, '-=0.5')
.fromTo(menu, 1, {opacity: 0, x: 30}, {opacity: 1, x: 0}, '-=0.5')
.fromTo(headline, 0.5, {opacity: 0, x: 30}, {opacity: 1, x: 0}, '-=0.5')
.fromTo(text, 0.5, {opacity: 0}, {opacity: 1}, '-=0.5')
.fromTo(footer, 0.5, {opacity: 0}, {opacity: 1}, '-=0.5');