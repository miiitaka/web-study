$(function() {
	$("#slider").bxSlider({
		"mode": "fade",
		"spped": 1000,
		"auto": true,
		"autoControls": true,
		"captions": true
	});

	$("#checked_items").bxSlider({
		'minSlides': 1,
		'maxSlides': 9,
		'prevText': '<',
		'nextText': '>',
		'slideMargin': 17,
		'slideWidth': 96
	});

	$("#product_image").find("li").on("click", function() {
		var imgPath = $(this).find("img").attr("src");
		$("#main_image").attr("src",imgPath);
	});
});