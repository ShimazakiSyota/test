
<html>
	<head>
<link type="text/css" rel="stylesheet" href="./css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="./javascript/motion.js"></script>
		<title>　気になる仕事　</title>
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
		</header>


		<h1>気になる仕事</h1>
<?php

//----------------------------------------------------------------------------------------------------
require_once 'DBmanager.php'; //関数呼び出しより手前に記述する

//DB接続
$con = connect();
//クッキー値取得
 
	if(isset($_COOKIE['Terminalid'])){
		//cookie登録されている
		$tid=$_COOKIE['Terminalid'];
	}else{
		//cookie登録されていない
		$queryset=terminal();
		$queryset=$queryset+1;
		//cookie登録↓
		$flag = setcookie('Terminalid',"$queryset",time()+ 2 * 365 * 24 * 3600);
		//端末番号最後尾更新
		terminalup($queryset);
		$tid = $queryset;

	}

//SQL文セット
$arr = recently($tid);

//逆にする
$arr1 = array_reverse($arr);

//件数
$dataCount = count($arr1);

if (!empty($arr1)){


echo '<div id="box_">';

echo '<h2>';
//データの数
echo $dataCount.'件';
echo '</h2>';


//１ページあたりの表示数
//20個ずつ
$perNum = 20;
//最大ページ数
$maxPageNum = ceil($dataCount / $perNum);

//URLにページ数が指定されてなければ１に
$nowPageNum = empty($_GET["page"]) ? 1 : $_GET["page"];

//次のページの値
$nextPageNum = $nowPageNum + 1;

//前のページの値
$prevPageNum = $nowPageNum - 1;

$page = $nowPageNum * 20 - 19 ;
//
//データを表示させる始点と終点
$startPoint = ($nowPageNum == 1) ? 0 : ($nowPageNum - 1) * $perNum;
$endPoint = $nowPageNum * $perNum;

//何件から何件
$aaaa;

if($endPoint >= $dataCount){
	$aaaa = 20 - ($endPoint - $dataCount);
}
else{
	$aaaa = 20;
}
	echo '(';
	echo $page;
	echo '～';
	echo $page + $aaaa - 1;
	echo '件を表示)';
	echo '<br />';



	for($i = $startPoint; $i < $endPoint; $i++){
		if($i >= $dataCount) break;



//最近気になった仕事
		echo "<li id=\"list\">";
		echo "<form name='Form".$i."' method='post' action='jobdetail.php'>";
		echo "<input type='hidden' name='jobid' value=".$arr1[$i][0].">";
		echo "<a href='javascript:Form".$i.".submit()'>".$arr1[$i][1]."</a>";
		echo "</form>";
		echo "</li>";
	}


		
	echo '<div id="list_page"><ul>';

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

	echo '</ul></div>';

}else{
	echo '<div id="list_result">';
	echo 'お気に入りを登録していません。';
	echo '</div>';
}

//DB切断
dconnect($con);

?>

<!--先頭に戻る-->
<p id="page_top" style="display: block;"><a href="#wrap">トップ</a></p>

<?php include("footer.html"); ?>
</body>
</html>
