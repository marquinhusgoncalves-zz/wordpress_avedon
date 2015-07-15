$(document).ready(function() {
var target = $(':target').offset().top;

var stickyTarget = function(){
	var scrollTop = $(window).scrollTop();

	if (scrollTop > stickyNavTop) {
		$(':target').class('margin-top', '159px');
		
		} else {
			$(':target').class('fixed');
		}
	};

	stickyTarget();

	$(window).scroll(function() {
		stickyTarget();  
	});
});