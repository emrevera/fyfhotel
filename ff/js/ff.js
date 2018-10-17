document.addEventListener('DOMContentLoaded', function(){

	const tabs = document.querySelector('.tabs');
	const tab1Link = document.querySelector('.show-tab-1');
	const tab2Link = document.querySelector('.show-tab-2');

	const gallery1 = document.querySelector('.room-1');
	const gallery2 = document.querySelector('.room-2');

	function showTab1(e){
		e.preventDefault();
		if(this.classList.contains('active')){
		
		} else {
			this.classList.add('active');
			tab2Link.classList.remove('active');
			tabs.classList.remove('show-02');
			tabs.classList.add('show-01');

			gallery1.classList.remove('go-back');
			gallery2.classList.add('go-back');
		}
	}

	function showTab2(e){
		e.preventDefault();
		if(this.classList.contains('active')){
		
		} else {
			this.classList.add('active');
			tab1Link.classList.remove('active');
			tabs.classList.remove('show-01');
			tabs.classList.add('show-02');

			gallery2.classList.remove('go-back');
			gallery1.classList.add('go-back');
		}
	}

	tab1Link.addEventListener('click', showTab1);
	tab2Link.addEventListener('click', showTab2);

	/* Toggle Menu */

	const toggle = document.querySelector('a.toggle-menu');
	const menu = document.querySelector('.menu-header-menu-container');

	function toggleMenu(e){
		menu.classList.toggle('open');
	}

	toggle.addEventListener('click', toggleMenu);


	/* Resize slideshows */

	const sections = document.querySelectorAll('.section');

	function checkPage() {
		const showPageAt = window.scrollY + window.innerHeight;
		sections.forEach(page => {
			// Top of the Div
			const pageTop = page.offsetTop - window.innerHeight * 0.66666666666666; // the 50 offset it a bit so extremes can be active as well
			//console.log(pageTop)
			const isShown = showPageAt > page.offsetTop;
			const isNotScrolledPast = window.scrollY > pageTop;
			if (isShown && isNotScrolledPast) {
				page.classList.add('active');
			}
		});	
	}

	checkPage();

	function stickyHeader(){

		const header = document.querySelector('.intro header');

		if( window.scrollY >= 30 ) {
			header.classList.add('stuck');
		} else {
			header.classList.remove('stuck');
		}

		//header.classList.add('stuck');

	}

	stickyHeader();

	window.addEventListener('scroll', checkPage);
	window.addEventListener('scroll', stickyHeader);

});

window.onload = function preloader() {
	const preload = document.querySelector('.preload');
	preload.classList.add('fade');
	document.querySelector('.intro').classList.add('animate');
}
