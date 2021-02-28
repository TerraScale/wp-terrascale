$(document).ready(function () {

	setTimeout(function () {
		$("td.value select option:first").attr({'selected': 'selected', 'value': ' '});
	}, 3000);
});

$('.moveToTop').on('click', function () {
	$(window).scrollTop(0);
});

$('.mobile-menu-btn').on('click', function () {
	$('.mobile-navigation-container').css('left', '0');
});
$('.menu-close').on('click', function () {
	$('.mobile-navigation-container').css('left', '-100%');
});
window.onscroll = function () {
	myFunction()
};

const header = document.getElementById("masthead");
const sticky = header.offsetTop;
const ContentBox = document.getElementById('page');
const SearchBox = document.getElementById('searchCollapse');

function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
		ContentBox.classList.add('ExPadd');
		// SearchBox.classList.remove('show');
	} else {
		header.classList.remove("sticky");
		ContentBox.classList.remove('ExPadd');
	}
}
