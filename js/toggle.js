$(document).ready(
	function() {
	$(".toggle i").click(function() {
		 var $this = $(this);
		 if ($this.hasClass("fa-bars")) {
				$this.removeClass("fa-bars").addClass("fa-times");
				return;
		 }
		 if ($this.hasClass("fa-times")) {
				$this.removeClass("fa-times").addClass("fa-bars");
				return;
			 }
		});
	});