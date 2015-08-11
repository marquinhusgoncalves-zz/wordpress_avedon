jQuery(document).ready(function(){ 

	// Show and Hide Menu 
	$(".botao").click(function() {
		$(".wrap").slideToggle(50);

		$(".wrap ul li a").click(function() {
			$('.wrap').hide();
		});
	});
});