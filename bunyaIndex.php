﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>

		<title>検索結果一覧</title>

<style type="text/css">

.switch {
    font-weight: bold;
}


.btn {
    background:transparent url(btn.png) no-repeat 0 0;
    display: block;
    width:35px;
    height: 35px;
    position: absolute;
    top:20px;
    right:20px;
    cursor: pointer;
    z-index: 200;
}
.peke {
    background-position: -35px 0;
}
.drawr {
    display: none;
    background-color:rgba(0,0,0,0.6);
    position: absolute;
    top: 0px;
    right:0;
    width:260px;
    padding:60px 0 20px 20px;
    z-index: 100;
}
#menu li {
    width:260px;
}
#menu li a {
    color:#fff;
    display: block;
    padding: 15px;
}        

</style>

<?php
//セッション
session_start();

?>

<script type="text/javascript">
//ハンバーガーメニュー
$(function($) {
        WindowHeight = $(window).height();
        $('.drawr').css('height', WindowHeight); //メニューをwindowの高さいっぱいにする

        $(document).ready(function() {
                $('.btn').click(function(){ //クリックしたら
                        $('.drawr').animate({width:'toggle'}); //animateで表示・非表示
                        $(this).toggleClass('peke'); //toggleでクラス追加・削除
                });
        });
});

//ページトップ
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});
</script>

	</head>

	<body>
		<header>
			<div id="header">
				<!--タイトル-->
				<h1><img src="//シゴト部"></h1>


<?php
require_once 'DBManager.php';


//DB接続
$con = connect();

		//履歴
		echo "<div><ul>";
		echo "<li><a href=\"./topPage.php\">HOME</a></li>＞";
		echo "<li><a href=\"./bunya.php\">分野別</a></li>＞";


if (isset($_POST['sbjct'])) {
//検索ページ、詳細ページからsbjctの値が入ってる


	$_SESSION['subject'] = $_POST['sbjct'];

	$tagid = $_SESSION['subject'];

	$sbjct = tagRelationSelect($_SESSION['subject']);

	$_SESSION['subject1'] = $sbjct[0][0];

	$tid = $_SESSION['subject1'];

	//タグ確認
	$tagList = tagCheck($tagid);

	echo '<li>'.$tagList[1].'</li>';


} else if (isset($_SESSION['subject'])){
//詳細からのセッション

	$tagid = $_SESSION['subject'];

	$tid = $_SESSION['subject1'];

	//タグ確認
	$tagList = tagCheck($tagid);
	echo '<li>'.$tagList[1].'</li>';

} else if (isset($_POST['bunya'])) {

	//トップページからの値
	$_SESSION['bny'] = $_POST['bunya'];

	$tagid = $_SESSION['bny'];

	$tid = $_SESSION['bny'];


} else if (isset($_SESSION['bny'])) {
	//トップページからの値
	$tagid = $_SESSION['bny'];

	$tid = $_SESSION['bny'];

}


?>
				</ul>
				</div>

				<!--メインメニュー-->
				<a class="btn"></a>
				<div class="drawr">
    				<ul id="menu" style="list-style:none;">
    				<li><a href="topPage.php">HOME</a></li>
    				<li><a href="bunya.php">分野から探す</a></li>
    				<li><a href="image.php">イメージから探す</a></li>
    				<li><a href="gojyu.php">五十音から探す</a></li>
    				<li><a href="ranking.php">気になるランキング</a></li>
    				<li><a href="recently.php">最近気になった仕事</a></li>
    				<li><form action="freewordSearch.php" method="POST"><input type="text" name="message" pattern='[^\\x22\\x27]*'  required><input type="submit"></form></li>
    				</ul>
				</div>
		</header>

	<main>
		<div id="container">
			<div id="form_search">

<?php
//----------------------------------------------------------------------------------------------------



//----------------------------------------------------------------------------------------------------

//分野別の上位タグだったら

	echo '<h2>分野別で探す</h2>';

	//下位タグSQL文セット
	$Reasult = tagRelationSelect($tid);

	//セレクトタグ表示
	echo '<form name="form" action="./subjectImageSearch.php" method="POST">';
	echo '<select name="sbjct">';

	foreach ($Reasult as $valuex) {
		$value = tagCheck($valuex[0]);
		echo '<option value="'.$value[0]./*タグID*/'">'.$value[1]./*タグ名*/'</option>';
	}

	echo '</select>';
	//検索ボタン
	echo '<a href="javascript:form.submit()"><img src=""></a>';

	echo '</form>';
	echo '</div>';


//----------------------------------------------------------------------------------------------------

//検索結果
$data = sbjctImgResult($tagid);

//件数
$dataCount = count($data);

if (!empty($data)){

echo '<div id="box_">';

echo '<h2>';
//データの数
echo '検索結果'.$dataCount.'件';
echo '</h2>';

//１ページあたりの表示数
$perNum = 10;
//最大ページ数
$maxPageNum = ceil($dataCount / $perNum);

//URLにページ数が指定されてなければ１に
$nowPageNum = empty($_GET["page"]) ? 1 : $_GET["page"];

//次のページの値
$nextPageNum = $nowPageNum + 1;

//前のページの値
$prevPageNum = $nowPageNum - 1;

$page = $nowPageNum * 10 - 9 ;
//
//データを表示させる始点と終点
$startPoint = ($nowPageNum == 1) ? 0 : ($nowPageNum - 1) * $perNum;
$endPoint = $nowPageNum * $perNum;

//何件から何件
$aaaa;

if($endPoint >= $dataCount){
	$aaaa = 10 - ($endPoint - $dataCount);
}
else{
	$aaaa = 10;
}
	echo '(';
	echo $page;
	echo '～';
	echo $page + $aaaa - 1;
	echo '件を表示)';
	echo '<br />';

?>

		<ol>
		<li><img src="//専門家インタビュー">専門家インタビュー</li>
		<li><img src="//学生インタビュー">学生インタビュー</li>
		<li><img src="//お仕事スタジアムレポート2016">お仕事スタジアムレポート2016</li>
		</ol>
	</div>

	<div id="list_result">

<?php


//結果表示
for($i = $startPoint; $i < $endPoint; $i++){
	if($i >= $dataCount) break;

		echo "<div>";
		echo "<dl>";
		echo "<form name='Form".$i."' method='post' action='./jobdetail.php' style='display:inline;'>";
		//職業ID
		echo "<input type='hidden' name='jobid' value='".$data[$i][0]."'>";
		//職業名
		echo '<dt>';
		echo '<a href="javascript:Form'.$i.'.submit()">'.$data[$i][1].'</a>';
		echo '</dt>';
		//矢印
		echo '<dd>';
		echo '<a href="javascript:Form'.$i.'.submit()"><img src=""></a>';
		echo '</dd>';
		echo '</form>';
		//一言キャッチコピー
		echo '<dd>'.$data[$i][2] .'</dd>';
		//アイコン
		echo '<dd>';
		echo '<ol>';

		$stdnt = studentnull($data[$i][0]);
		$stdnt1 = count($stdnt);

		if (/*専門家*/$stdnt1 !== 0) {
			echo '<li><img src="./"></li>';
		}

		$exprt = expertnull($data[$i][0]);
		$exprt1 = count($exprt);

		if (/*学生*/ $exprt1 !== 0) {
			echo '<li><img src="./"></li>';
		}

		$wrkrp = workrpnull($data[$i][0]);
		$wrkrp1 = count($wrkrp);

		if (/*レポート*/$wrkrp1 !== 0) {
			echo '<li><img src="./"></li>';
		}
	}
		echo '</ol>';
		echo '</dd>';
		echo '</dl>';
		echo '</div>';
		echo '</div>';

		echo '<div id="list_page">';
		echo '<ul>';

	//最初のページ以外で「前へ」を表示
	if($nowPageNum != 1){
		echo '<li><a href="?page='.$prevPageNum.'"><img>前へ</a></li><br />';
	}

	//ページ数表示
	for($p = 1; $p <= $maxPageNum; $p++) {
		echo '<li><a href="?page='.$p.'">'.$p.'</a></li><br />';
	}

	//最後のページ以外で「次へ」を表示
	if($nowPageNum < $maxPageNum){
		echo '<li><a href="?page='.$nextPageNum.'"><img>次へ</a></li><br />';
	}

	echo '</ul>';
	echo '</div>';

}else{
	echo '<div id="list_result">';
	echo '検索結果0件';
	echo '</div>';
}

//DB切断
	dconnect($con);


?>

			</div>
		</main>

<footer>
<div id="footer">

<!--先頭に戻る-->
<p id="page_top" style="display: block;"><a href="#wrap">トップ</a></p>

<?php
//フリーワード
echo '<form action="freewordSearch.php" method="POST">';
echo '<input type="search" name="message" pattern="[^\\x22\\x27]*"  required >';
echo '<input type="submit">';
echo '</form>';
?>

<ul id="menu_ft">

<!--分野画面遷移-->
<li>
<a href="bunya.PHP">分野から探す</a>
<a href="bunya.PHP"><img></a>
</li>

<!--イメージ画面遷移-->
<li>
<a href="image.PHP">イメージから探す</a>
<a href="image.PHP"><img></a>
</li>

<!--50音画面遷移--><li>

<a href="gojyu.PHP">50音から探す</a>
<a href="gojyu.PHP"><img></a>
</li>

<!--気になるランキング画面遷移-->
<li>
<a href="ranking.PHP">気になるランキング</a>
<a href="ranking.PHP"><img></a>
</li>

<!--最近気になった仕事画面遷移-->
<li>
<a href="recently.PHP">最近気になった仕事</a>
<a href="recently.PHP"><img></a>
</li>

<!--HOME画面遷移-->
<li>
<a href="topPage.PHP">HOME</a>
<a href="topPage.PHP"><img></a>
</li>

</ul>

<!--サイトについて-->
<a href="">サイトについて</a>

<!--メンバー-->
<a href="">メンバー</a>

<!--サポート会社-->
<a href="">サポート会社</a>

<!--お問い合わせ-->
<a href="">お問い合わせ</a>

<p>将来なりたい仕事、決まっていますか？シゴト部では、進路で悩んでいる高校生向けに２００以上のお仕事を分かりやすく紹介！たくさんのお仕事の中からあなたの気になるお仕事を探しましょう！</p>

<p id="copy"><small>Copyright (c) shigotobu.All Right Reserved.</small></p>

</div>

</footer>

</body>

</html>
