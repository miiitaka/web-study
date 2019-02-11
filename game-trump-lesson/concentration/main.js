$(function() {
	//とりあえず全部のトランプの背面を表示
	for(var i = 0; i < 4; i++) {
		for(var j = 0; j < 13; j++) {
			var li = '<li class="card is-surface"><img src="../images/z01.png" alt=""></li>';
			$(li).appendTo('#table');
		}
	}

	//とりあえず表を全部表示
	// var kind = ['h', 'd', 'c', 's'];
	// for(var i = 0; i < 4; i++) {
	// 	for(var j = 1; j <= 13; j++) {
	// 		var li = '<li class="card is-surface"><img src="../images/' + kind[i] + ("0" + j).slice(-2) + '.png" alt=""></li>';
	// 		$(li).appendTo('#table');
	// 	}
	// }

	//jQueryらしく書く
	var
		$table = $('#table'),
		$li    = $('<li>'),
		$img   = $('<img>'),
		kind   = ['h', 'd', 'c', 's'],
		cards  = [];
	for(var i = 0; i < 4; i++) {
		for(var j = 1; j <= 13; j++) {
			// $li
			// 	.clone()
			// 	.addClass('card is-surface')
			// 	.append(
			// 		$img
			// 			.clone()
			// 			.attr('src', '../images/' + kind[i] + ("0" + j).slice(-2) + '.png')
			// 	)
			// 	.appendTo($table);
			cards.push(kind[i] + ("0" + j).slice(-2) + '.png');
		}
	}

	var cards_len = cards.length;
	shuffle();

	for(var i = 0; i < cards_len; i++) {
		$li
			.clone()
			.addClass('card is-surface')
			.append(
				$img
					.clone()
					.attr('src', '../images/' + cards[i])
			)
			.appendTo($table);
	}

	// シャッフル機能
	function shuffle() {
		var
			len       = cards_len,
			tmp,
			j;
		// for(var i = len; i > 0; i--) {
		// 	j            = Math.floor(Math.random() * i);
		// 	tmp          = cards[i - 1];
		// 	cards[i - 1] = cards[j];
		// 	cards[j]     = tmp;
		// }
		for(var i = 0; i < len; i++) {
			j            = Math.floor(Math.random() * i);
			tmp          = cards[i];
			cards[i] = cards[j];
			cards[j]     = tmp;
		}
	}
});