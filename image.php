<?php
//セッション開始
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

		<title>　イメージ　</title>

	</head>
	<body>
		<header>
			<div id="header">
				<!--タイトル-->
				<h1><img src="//シゴト部"></h1>

				<!--メインメニュー-->
				<a class="btn"></a>
				<div class="drawr">
    				<ul id="menu" style="list-style:none;">
    				<li><a href="index.php">HOME</a></li>
    				<li><a href="bunya.php">分野から探す</a></li>
    				<li><a href="image.php">イメージから探す</a></li>
    				<li><a href="gojyu.php">五十音から探す</a></li>
    				<li><a href="ranking.php">気になるランキング</a></li>
    				<li><a href="recently.php">最近気になった仕事</a></li>
    				<li><form action="freewordSearch.php" method="POST"><input type="text" name="message" pattern='[^\\x22\\x27]*'  required><input type="submit"></form></li>
    				</ul>
				</div>
			</div>
		</header>


		<h1>イメージ</h1>
<?php

//----------------------------------------------------------------------------------------------------
require_once 'DBmanager.php'; //関数呼び出しより手前に記述する

session_destroy();

//DB接続
$con = connect();

//メニューボタン

	//イメージ検索
	echo "<div id=\"box_image\">";
	echo "<ul>";
	echo "<h3>";
	echo "</h3>";
	echo "<b>イメージから探す</b>";
	$ImageList = tagSelectAllKubun('2');
	echo "<form action='./subjectImageSearch2.php' method = 'POST'>";
    foreach( $ImageList as $value ){
	echo "<li>";
	echo "<button type='submit' name='image' value='".$value[0]."'>".$value[1]."</button><br>";
	echo "</li>";
	}
	echo "</ul>";
	echo "</div>";
	echo "</form>";


//DB切断
dconnect($con);


?>


<!--先頭に戻る-->
<p id="page_top" style="display: block;"><a href="#wrap">トップ</a></p>

<?php include("footer.html"); ?>
</body>
</html>
