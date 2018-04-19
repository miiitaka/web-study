$(function () {
	var now_id,next_id,max_image,imageArray,target;

	target = '#pickup_field ul li';
	imageArray = $(target);
	max_image = imageArray.length;
	for (var i = 0; i < max_image; i++) {
		if(imageArray.hasClass('now')) {
			now_id = i + 1;
			break;
		}
	}

	function changeImage() {
		if (now_id >= max_image) {
			next_id = 1;
		} else {
			next_id = now_id + 1;
		}
		var nowImage, nextImage;
		nowImage = $(target + ' img[id="pickup'+ now_id +'"]').parent();
		nextImage = $(target + ' img[id="pickup'+ next_id +'"]').parent();
		nowImage.fadeOut(1000, function() {
			$(this).removeClass('now');
		});
		nextImage.fadeIn(1000, function() {
			$(this).addClass("now");
			imageArray.removeClass("now");
			nextImage.addClass("now");
			now_id = next_id;
		});
	}
	if (max_image > 1) {
		setInterval(changeImage, 4000);
	}
});
