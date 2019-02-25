$(function() {
	//とりあえず全部のトランプの背面を表示
	// for(var i = 0; i < 4; i++) {
	// 	for(var j = 0; j < 13; j++) {
	// 		var li = '<li class="card is-surface"><img src="../images/z01.png" alt=""></li>';
	// 		$(li).appendTo('#table');
	// 	}
	// }

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
		$table       = $('#table'),
		$li          = $('<li>'),
		$img         = $('<img>'),
		kind         = ['h', 'd', 'c', 's'],
		cards        = [],
		select_index = [],
		select_num   = '',
		$timer       = $('#timer'),
		default_time = 180,
		time         = default_time;

	$timer.text(setTime());

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
			.data('num', cards[i].replace(/[^0-9]/g, ''))
			.append(
				$img
					.clone()
					.attr('src', '../images/' + cards[i])
					.addClass('card_reverse')
			)
			.append(
				$img
					.clone()
					.attr('src', '../images/z01.png')
					.addClass('card_surface')
			)
			.appendTo($table);
	}

	$table.on('click', 'li', function() {
		if(select_index.length >= 2) {
			return false;
		}
		$(this).toggleClass('is-surface').toggleClass('is-reverse');

		if(select_num === '') {
			//１枚目をめくったときの処理
			select_num = $(this).data('num');
			select_index.push($(this).index());
		} else {
			//２枚目をめくったときの処理
			if($(this).index() !== select_index[0]) {
				select_index.push($(this).index());
				if($(this).data('num') === select_num) {
					//あたりのとき 
					setTimeout(card_ok, 1000);
				} else {
					//はずれのとき
					setTimeout(card_reverse, 1000);
				}
			}
		}
	});

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

	//外れたときの処理
	function card_reverse() {
		$table.find('li').eq(select_index[0]).toggleClass('is-surface').toggleClass('is-reverse');
		$table.find('li').eq(select_index[1]).toggleClass('is-surface').toggleClass('is-reverse');
		select_num   = '';
		select_index = [];
	}

	//あたったときの処理
	function card_ok() {
		$table.find('li').eq(select_index[0]).addClass('hit');
		$table.find('li').eq(select_index[1]).addClass('hit');
		select_num   = '';
		select_index = [];
	}
	
	//タイマーをセット
	function setTime() {
		minute = ('0' + Math.floor(time / 60)).slice(-2);
		second = ('0' + time % 60).slice(-2);
		return minute + '：' + second;
	}
});










