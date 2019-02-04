$(function() {
	//とりあえず全部のトランプの背面を表示
	for(var i = 0; i < 4; i++) {
		for(var j = 0; j < 13; j++) {
			var li = '<li class="card is-surface"><img src="../images/z01.png" alt=""></li>';
			$(li).appendTo('#table');
		}
	}

	//とりあえず表を全部表示
	var kind = ['h', 'd', 'c', 's'];
	for(var i = 0; i < 4; i++) {
		for(var j = 1; j <= 13; j++) {
			var li = '<li class="card is-surface"><img src="../images/' + kind[i] + ("0" + j).slice(-2) + '.png" alt=""></li>';
			$(li).appendTo('#table');
		}
	}

	//jQueryらしく書く
	var
		$table = $('#table'),
		$li    = $('<li>'),
		$img   = $('<img>'),
		kind = ['h', 'd', 'c', 's'];
	for(var i = 0; i < 4; i++) {
		for(var j = 1; j <= 13; j++) {
			$li
				.clone()
				.addClass('card is-surface')
				.append(
					$img
						.clone()
						.attr('src', '../images/' + kind[i] + ("0" + j).slice(-2) + '.png')
				)
				.appendTo($table);
		}
	}
});