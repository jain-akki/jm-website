// Homepage banner quote slider
new Glide('.quotes', {
	type: 'carousel',
	startAt: 0,
	perView: 1,
	gap: 100,
	autoplay: 2000
}).mount();

// Homepage Client Speak slider
new Glide('.client-speak', {
	type: 'carousel',
	startAt: 0,
	perView: 1,
	gap: 100,
	autoplay: 2000
}).mount();

// NavBar Toggle on Mobile
const hamburger = document.querySelector(".hamburger");
const headerNavigation = document.querySelector(".header-navigation");

hamburger.addEventListener("click", () => {
	headerNavigation.classList.toggle("open");
	hamburger.classList.toggle("open");
});