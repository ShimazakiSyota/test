<?php
// エラー出力しない場合
ini_set('display_errors', 0);


if(!isset($_SESSION)){
session_start();
}
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="./css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="./javascript/motion.js"></script>



<script type="text/javascript">


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


</SCRIPT>



<TITLE>メニュー画面</TITLE>
</head>

<body>

<!--シゴト部-->
<header>
<div id="header">
<img src="">
</div>
</header>

<?php
session_destroy();

require_once 'DBmanager.php';
	$con = connect();
	//ランキング検索
	//関数呼び出しJOBID、JOBNAME、JOBIDのCOUNT　例200
	echo "<h2>";
	echo "<img>"; 
	echo "</h2>";
	echo "<div id=\"box_rank\">";
	echo "<ol id=\"list.rank\">";
		
	
	$ranking = rank();

if (!empty($ranking)) {
	
	for($ci=0;$ci<3;$ci++){
		if($ci==0){
			if(!empty($ranking[$ci][0])){

	echo "<li id=\"list_rank1\">";
	//順位
	echo "<img>";
	//職業名
	echo "<form name='Form".$ci."' method='post' action='jobdetail.php'>";
	echo "<input type='hidden' name='jobid' value=".$ranking[0][0].">";
	echo "<a href='javascript:Form".$ci.".submit()'>".$ranking[0][1]."</a>";
	echo "</form>";
	echo "</li>";

			}
		}else if($ci==1){
			if(!empty($ranking[$ci][0])){

	echo "<li id=\"list_rank2\">";
	//順位
	echo "<img>";
	//職業名
	echo "<form name='Form".$ci."' method='post' action='jobdetail.php'>";
	echo "<input type='hidden' name='jobid' value=".$ranking[1][0].">";
	echo "<a href='javascript:Form".$ci.".submit()'>".$ranking[1][1]."</a>";
	echo "</form>";
	echo "</li>";

              }
		}else if($ci==2){
			if(!empty($ranking[$ci][0])){

	echo "<li id=\"list_rank3\">";
	//順位
	echo "<img>";
	//職業名
	echo "<form name='Form".$ci."' method='post' action='jobdetail.php'>";
	echo "<input type='hidden' name='jobid' value=".$ranking[2][0].">";
	echo "<a href='javascript:Form".$ci.".submit()'>".$ranking[2][1]."</a>";
	echo "</form>";
	echo "</li>";

			}
		}
	}

	echo "</ol>";

	echo "<p id=\"btn_more\">";
	echo "<a href ='ranking.PHP'>";
	//もっと見る画像
	echo "<img>";
	echo "</a>";
	echo "</p>";
	echo "</div>";


}

//早速お仕事を探そう
echo "<h2><img src=\"\"></h2>";

$b=1;
	//分野検索
	echo "<div id=\"box_genre\">";
	echo "<h3>分野別から探す</h3>";
	echo "<ul>";
	$BigTadList = tagSelectAllKubun('0');
	foreach( $BigTadList as $value ){
	$b++;
	echo "<form name='Form2".$b."' action='./subjectImageSearch.php' method ='POST'>";
	echo "<li id=\"btn_z\">";
echo $value[1];
	echo "<input type='hidden' name='bunya' value=".$value[0].">";
	echo "<a href='javascript:Form2".$b.".submit()'>";
	echo "<img height='100' img src='./create_image.php?id=".$value[3]."' /></a>";
	echo "</li>";
	echo "</form>";
	}
	echo "</ul>";
	echo "</div>";


	
	//イメージ検索
	echo "<div id=\"box_image\">";
	echo "<h3>イメージから探す</h3>";
	echo "<ul>";
	$ImageList = tagSelectAllKubun('2');
/*	foreach( $ImageList as $value ){
	echo "<form action='./subjectImageSearch2.php' method = 'POST'>";
	echo "<li>";
	echo "<button type='submit' name='image' value='".$value[0]."'>".$value[1]."</button><br>";
	echo "</li>";
	}*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////
for ($j = 0; $j < 20; $j++) {
	echo "<form action='./subjectImageSearch2.php' method = 'POST'>";
	echo "<li>";
	echo "<button type='submit' name='image' value='".$value[$j][0]."'>".$value[$j][1]."</button><br>";
	echo "</li>";
	echo "</form>";

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	echo "</ul>";
	echo "</div>";

	//フリーワード
	echo "<div id=\"box_keyword\">";
	echo "<h3>フリーワードから探す</h3>";
	echo "<form action=\"freewordSearch.php\" method=\"POST\">";
	echo "<input type=\"seach\" name=\"message\" pattern=\"[^\\x22\\x27]*\"  required >";
	echo "<input type=\"submit\"><img src='./img.jpg'>";
	echo "</form>";
	echo "</div>";
	

	//50音順
	echo "<h3>";
	echo '50音順から探す';
	echo "</h3>";

			echo '<div id="box_50on">';

				echo '<select id="gyou">';
					echo '<option value="">選択してください</option>';
					echo '<option value="あ行" class="a">あ行</option>';
					echo '<option value="か行" class="k">か行</option>';
					echo '<option value="さ行" class="s">さ行</option>';
					echo '<option value="た行" class="t">た行</option>';
					echo '<option value="な行" class="n">な行</option>';
					echo '<option value="は行" class="h">は行</option>';
					echo '<option value="ま行" class="m">ま行</option>';
					echo '<option value="や行" class="y">や行</option>';
					echo '<option value="ら行" class="r">ら行</option>';
					echo '<option value="わ行" class="w">わ行</option>';
				echo '</select>';

				echo '<form  action="./gojuSearch.php" method="POST">';
					echo '<select id="moji" class="gojuon" name="slct">';
					echo '<option value="">選択してください</option>';
				echo '</select>';

				echo '<input type="submit" value="検索">';
			echo '</form></div>';

	//DB切断
	dconnect($con);
?>


<!--先頭に戻る-->
<p id="page_top" style="display: block;"><a href="#wrap">トップ</a></p>

<?php include("footer.html"); ?>

</body>
</html>