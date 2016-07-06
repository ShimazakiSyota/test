$(function(){

    // 行のプルダウンが変更されたら
    $("#gyou").change(function(){
	//select内のオプションを全削除
	var select = document.getElementById('moji');

	var gyou = document.getElementById('gyou').value;

	while (select.firstChild) {
		select.removeChild(select.firstChild);
	}

	//if（選ばれた行が「あ」だったら
	if (gyou == "あ行") {
		//あ～おを追加（OPTIONで）
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'あ');
		option1.innerHTML = 'あ';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'い');
		option2.innerHTML = 'い';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'う');
		option3.innerHTML = 'う';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'え');
		option4.innerHTML = 'え';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'お');
		option5.innerHTML = 'お';
		select.appendChild(option5);
	} else if (gyou == "か行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'か');
		option1.innerHTML = 'か';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'き');
		option2.innerHTML = 'き';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'く');
		option3.innerHTML = 'く';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'け');
		option4.innerHTML = 'け';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'こ');
		option5.innerHTML = 'こ';
		select.appendChild(option5);

	} else if (gyou == "さ行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'さ');
		option1.innerHTML = 'さ';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'し');
		option2.innerHTML = 'し';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'す');
		option3.innerHTML = 'す';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'せ');
		option4.innerHTML = 'せ';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'そ');
		option5.innerHTML = 'そ';
		select.appendChild(option5);

	} else if (gyou == "た行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'た');
		option1.innerHTML = 'た';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'ち');
		option2.innerHTML = 'ち';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'つ');
		option3.innerHTML = 'つ';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'て');
		option4.innerHTML = 'て';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'と');
		option5.innerHTML = 'と';
		select.appendChild(option5);

	} else if (gyou == "な行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'な');
		option1.innerHTML = 'な';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'に');
		option2.innerHTML = 'に';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'ぬ');
		option3.innerHTML = 'ぬ';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'ね');
		option4.innerHTML = 'ね';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'の');
		option5.innerHTML = 'の';
		select.appendChild(option5);

	} else if (gyou == "は行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'は');
		option1.innerHTML = 'は';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'ひ');
		option2.innerHTML = 'ひ';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'ふ');
		option3.innerHTML = 'ふ';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'へ');
		option4.innerHTML = 'へ';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'ほ');
		option5.innerHTML = 'ほ';
		select.appendChild(option5);

	} else if (gyou == "ま行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'ま');
		option1.innerHTML = 'ま';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'み');
		option2.innerHTML = 'み';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'む');
		option3.innerHTML = 'む';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'め');
		option4.innerHTML = 'め';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'も');
		option5.innerHTML = 'も';
		select.appendChild(option5);

	} else if (gyou == "や行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'や');
		option1.innerHTML = 'や';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'ゆ');
		option2.innerHTML = 'ゆ';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'よ');
		option3.innerHTML = 'よ';
		select.appendChild(option3);


	} else if (gyou == "ら行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'ら');
		option1.innerHTML = 'ら';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'り');
		option2.innerHTML = 'り';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'る');
		option3.innerHTML = 'る';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'れ');
		option4.innerHTML = 'れ';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'ろ');
		option5.innerHTML = 'ろ';
		select.appendChild(option5);

	} else if (gyou == "わ行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'わ');
		option1.innerHTML = 'わ';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'を');
		option2.innerHTML = 'を';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'ん');
		option3.innerHTML = 'ん';
		select.appendChild(option3);

	}

	});
})

$(function(){

    // 行のプルダウンが変更されたら
    $("#gyou").change(function(){
	//select内のオプションを全削除
	var select = document.getElementById('moji');

	var gyou = document.getElementById('gyou').value;

	while (select.firstChild) {
		select.removeChild(select.firstChild);
	}

	//if（選ばれた行が「あ」だったら
	if (gyou == "あ行") {
		//あ～おを追加（OPTIONで）
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'あ');
		option1.innerHTML = 'あ';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'い');
		option2.innerHTML = 'い';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'う');
		option3.innerHTML = 'う';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'え');
		option4.innerHTML = 'え';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'お');
		option5.innerHTML = 'お';
		select.appendChild(option5);
	} else if (gyou == "か行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'か');
		option1.innerHTML = 'か';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'き');
		option2.innerHTML = 'き';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'く');
		option3.innerHTML = 'く';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'け');
		option4.innerHTML = 'け';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'こ');
		option5.innerHTML = 'こ';
		select.appendChild(option5);

	} else if (gyou == "さ行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'さ');
		option1.innerHTML = 'さ';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'し');
		option2.innerHTML = 'し';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'す');
		option3.innerHTML = 'す';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'せ');
		option4.innerHTML = 'せ';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'そ');
		option5.innerHTML = 'そ';
		select.appendChild(option5);

	} else if (gyou == "た行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'た');
		option1.innerHTML = 'た';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'ち');
		option2.innerHTML = 'ち';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'つ');
		option3.innerHTML = 'つ';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'て');
		option4.innerHTML = 'て';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'と');
		option5.innerHTML = 'と';
		select.appendChild(option5);

	} else if (gyou == "な行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'な');
		option1.innerHTML = 'な';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'に');
		option2.innerHTML = 'に';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'ぬ');
		option3.innerHTML = 'ぬ';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'ね');
		option4.innerHTML = 'ね';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'の');
		option5.innerHTML = 'の';
		select.appendChild(option5);

	} else if (gyou == "は行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'は');
		option1.innerHTML = 'は';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'ひ');
		option2.innerHTML = 'ひ';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'ふ');
		option3.innerHTML = 'ふ';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'へ');
		option4.innerHTML = 'へ';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'ほ');
		option5.innerHTML = 'ほ';
		select.appendChild(option5);

	} else if (gyou == "ま行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'ま');
		option1.innerHTML = 'ま';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'み');
		option2.innerHTML = 'み';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'む');
		option3.innerHTML = 'む';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'め');
		option4.innerHTML = 'め';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'も');
		option5.innerHTML = 'も';
		select.appendChild(option5);

	} else if (gyou == "や行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'や');
		option1.innerHTML = 'や';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'ゆ');
		option2.innerHTML = 'ゆ';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'よ');
		option3.innerHTML = 'よ';
		select.appendChild(option3);


	} else if (gyou == "ら行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'ら');
		option1.innerHTML = 'ら';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'り');
		option2.innerHTML = 'り';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'る');
		option3.innerHTML = 'る';
		select.appendChild(option3);

		var option4 = document.createElement('option');
		option4.setAttribute('value', 'れ');
		option4.innerHTML = 'れ';
		select.appendChild(option4);

		var option5 = document.createElement('option');
		option5.setAttribute('value', 'ろ');
		option5.innerHTML = 'ろ';
		select.appendChild(option5);

	} else if (gyou == "わ行") {
		var option1 = document.createElement('option');
		option1.setAttribute('value', 'わ');
		option1.innerHTML = 'わ';
		select.appendChild(option1);

		var option2 = document.createElement('option');
		option2.setAttribute('value', 'を');
		option2.innerHTML = 'を';
		select.appendChild(option2);

		var option3 = document.createElement('option');
		option3.setAttribute('value', 'ん');
		option3.innerHTML = 'ん';
		select.appendChild(option3);

	}

	});
})

