$(function() {
	'use strict';
	$('.btn_area li').on('click', function() {
		var
			id = $(this).attr('id'),
			colorCode = '';

		if (id == 'red') {
			colorCode = '#f00';
		} else if (id == 'green') {
			colorCode = '#0f0';
		} else if (id == 'blue') {
			colorCode = '#00f';
		} else {
			colorCode = '#f5f5f5';
		}

		$('body').css('background-color', colorCode);
	});
});