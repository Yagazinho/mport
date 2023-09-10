const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const navLinkItems = Array.from(navLinks.querySelectorAll('a'));

//function to handle smooth scrolling
function scrollToSection(targetId) {
	const targetElement = document.getElementById(targetId);

	if (targetElement) {
		window.scrollTo({
			top: targetElement.offsetTop,
			behavior: 'smooth'
		});
	}
}

hamburger.addEventListener('click', () => {
	navLinks.classList.toggle('active');
});

navLinkItems.forEach((link) => {
	link.addEventListener('click', (event) => {
		event.preventDefault();

		//close navigation menu if its open
		navLinks.classList.remove('active');

		//get target id from href attribute
		const targetId = link.getAttribute('href').substring(1);

		//scroll to target section
		scrollToSection(targetId);
	});
});
