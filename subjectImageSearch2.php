<?php
//セッション
session_start();

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="将来なりたい仕事、決まっていますか？シゴト部では、進路に悩んでいる高校生向けに約200種類のお仕事を分かりやすく紹介！たくさんのお仕事の中からあなたの気になるお仕事を探しましょう！">
<meta name="keywords" content="シゴト部,仕事,探す,高校生,学校,IT,ビジネス,金融,医療,看護,福祉,デザイン,クリエイティブ,ファッション,ビューティー,建築,土木,フード,飲食,公務員,教育,自動車,機械,グローバル,国際,ブライダル,旅行">
<meta name="viewport" content="width=640,user-scalable=no">
<title>検索結果一覧 || 分野から探す || シゴト部</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="./javascript/motion.js"></script>
<script type="text/javascript" src="./javascript/pulldown.js"></script>
<script type="text/javascript" src="javascript/common.js"></script>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/common.css">
</head>

<body>
	<?php include("header.html"); ?>
		
		<?php
		require_once 'DBmanager.php';
		
		
		//DB接続
		$con = connect();
		
		
		if (isset($_POST['image'])) {
			//トップページからの値
			$_SESSION['img'] = $_POST['image'];
		
		}
		
		
		if (isset($_SESSION['img'])) {
			//トップページからの値
			$tagid = $_SESSION['img'];
		
			//タグ確認
			$tagList = tagCheck($tagid);
		}
		
		
		?>
		<div id="mainContent">
			<div id="form_search">

<?php
//----------------------------------------------------------------------------------------------------



//----------------------------------------------------------------------------------------------------


//イメージだったら

	echo '<h2>イメージで探す</h2>';

	//イメージ名SQL文セット
	$imgResult = tagSelectAllKubun('2');

	//セレクトタグ表示
	echo '<form name="form" action="./subjectImageSearch2.php" method="POST">';
	echo '<select name="image">';

	foreach ($imgResult as $value) {
		if($tagid == $value[0]){
			echo '<option value="'.$value[0]./*タグID*/'" selected>'.$value[1]./*タグ名*/'</option>';
		}else{
			echo '<option value="'.$value[0]./*タグID*/'">'.$value[1]./*タグ名*/'</option>';
		}
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
		</div>

<?php include("footer.html"); ?>
</body>
</html>
