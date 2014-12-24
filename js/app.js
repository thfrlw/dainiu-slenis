function setSlide (a) {
	var b = a.getAttribute('data-slide');
	var c = document.getElementById('app');
	c.setAttribute('data-slide', b);
	c.className = '';
}
// Hides mobile browser's address bar when page is done loading.
$(document).ready(function () {
    FastClick.attach(document.body);	
	setTimeout(function() { window.scrollTo(0, 1); }, 1);
});


