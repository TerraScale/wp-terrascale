$(document).ready(function () {

	setTimeout(function () {
		$("td.value select option:first").attr({'selected': 'selected', 'value': ' '});
	}, 3000);
	$('.mobile-navigation-container span.mobile-menu-toggle').insertAfter('.mobile-navigation li.menu-item-has-children > a');

});

$('.moveToTop').on('click', function () {
	$(window).scrollTop(0);
});

$('.mobile-menu-btn').on('click', function () {
	$('.mobile-navigation-container').css('left', '0');
});
$('span.mobile-menu-toggle').on('click', function () {
	$(this).next('ul.sub-menu').slideToggle('slow');
});
$('.menu-close').on('click', function () {
	$('.mobile-navigation-container').css('left', '-100%');
});
window.onscroll = function () {
	myFunction()
};

$('.collapseHead').on('click', function () {
	$(this).parent().children('.collapseData').slideToggle().toggleClass('aa');

});

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
