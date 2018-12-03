$(document).ready(function () {
	$(".openNav, .explore").click(function () {
		$("nav, .openNav, #wrapper").toggleClass("open");
		if ($("#wrapper").hasClass("open")) {
			$("html, body, #container").css({
				"overflow": "hidden"
			});
			$("nav").animate({
				"left": "0px"
			}, 300);
			$(".openNav").animate({
				"left": "290px"
			}, 300);
			$("#wrapper").animate({
				"left": "250px"
			}, 300);
		} else {
			$("html, body, #container").css({
				"overflow": "auto"
			});
			$("nav").animate({
				"left": "-250px"
			}, 300);
			$(".openNav").animate({
				"left": "40px"
			}, 300);
			$("#wrapper").animate({
				"left": "0px"
			}, 300);
		}
	});
	$(".container>*").hide();
	$(".container>*").fadeIn(500);
});