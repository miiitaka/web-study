<script>
(function($){
	$(function(){
		var custom_uploader = wp.media({
			title: "画像の選択",
			library: {
				type:"image"
			},
			button: {
				text: "選択"
			},
			multipule: false
		});

		$("#media-upload").on("click", function(e){
			e.preventDefault();
			custom_uploader.open();
		});

		custom_uploader.on("select", function(){
			var images = custom_uploader.state().get("selection");
			images.each(function(file){
				console.log(file.toJSON());
				$("#banner-image-url").val(file.toJSON().url);
				$("#banner-image-alt").val(file.toJSON().alt);
				$("#banner-image-view").attr("src", file.toJSON().url);
			});
		});

	});
}(jQuery));
</script>