const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const navLinkItems = Array.from(navLinks.querySelectorAll('a'));


hamburger.addEventListener('click', () => {
	navLinks.classList.toggle('active');
});

navLinkItems.forEach((link) => {
	link.addEventListener('click', (event) => {
		event.preventDefault();
		navLinkItems.forEach((item) => {
			item.classList.remove('active');
		});
		link.classList.add('active');
	});
});
