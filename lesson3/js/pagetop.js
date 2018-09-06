$(function(){
	/*
	console.log($("#pagetop"));
	ページトップにもどる処理
	*/

	/* ページトップにもどる処理 */
	$("#pagetop").on("click", function(){
		$("html, body").animate({scrollTop: 0}, 500);
	});
});
