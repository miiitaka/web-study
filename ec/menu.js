$(function() {
	$("#menu-category").on("mouseenter", function() {
		$("#sub-category").show();
	});
	$("#menu-category").on("mouseout", function() {
		$("#sub-category").hide();
	});
});