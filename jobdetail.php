<?php
	require_once 'DBmanager.php';//クラスファイル呼び出し
	//DB接続
	$con = connect();
	//cookie確認登録
	if(isset($_COOKIE['Terminalid'])){
		//cookie登録されている
		$tid=$_COOKIE['Terminalid'];
	}else{
		//cookie登録されていない
		$queryset=terminal();
		$queryset=$queryset+1;

		//cookie登録↓
		setcookie('Terminalid',"$queryset",time()+ 2 * 365 * 24 * 3600);
		//端末番号最後尾更新
		terminalup($queryset);
		$tid = $queryset;
	}
$jobid=$_POST['jobid'];
//---------------------------------------------------------------------------------------------------
?>
<html>
<head>

<link type="text/css" rel="stylesheet" href="./css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="./javascript/motion.js"></script>
<script type="text/javascript" src="./javascript/changeImage.js"></script>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>

<title>職業詳細</title>


<!-- 画像がクリックされたら画像を入れ替える ------------------------------------------------------->
<?PHP
	$quryset=goodSearch($jobid,$tid);
	$data = mysql_fetch_row($quryset);

	if($data>0){
		$cnt=1;
	}else{
		$cnt=0;
}
?>
<script type="text/javascript">
	var cnt = "<?php echo $cnt; ?>"; 
	var Jid = "<?php echo $jobid; ?>";
	var Tid = "<?php echo $tid; ?>";
</script>

</head>


<!-------------------body-------------------------------------------------------------------------------->

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



	<?php 
		//階層表示
		echo "<div><ul>";
		echo "<li><a href=\"./index.php\">HOME</a></li>＞";
		echo "<li><a href=\"./bunya.php\">分野別</a></li>＞";
		$quryset = lowtagName($jobid);

		echo "<form  name='Form1' method='post' action='./subjectImageSearch.php' style=\"display:inline;\">";
		echo "<input type='hidden' name='sbjct' value=".$quryset[0][0].">";
		echo "<li><a href='javascript:Form1.submit()'>".$quryset[0][1]."</a></li>";

//---------------------------------------------------------------------------------------------------
	//職業情報取得
	$data = joblist($jobid);

		//１ループで１行データが取り出され、データが無くなるとループを抜けます。
		//階層表示職業名
		echo  "＞<li>".$data[1] ."</li><br />";//職業名
		echo "</ul></div>";
		echo "</form>";
		echo "</div>";
		echo "</header>";
		echo  "</br>";
		echo "<div id = \"box_mv\">";
		echo  "<p id=\"title\">";
		echo  $data[1] ."<br />";//職業名
		echo  $data[3] ."<br />";//職業名(英語)
		echo  "</p>";
       		echo "<img height='100' src='./create_image.php?id=".$data[6] ."' />";//職業画像
//---------------------------------------------------------------------------------------------------
	//気になるボタン表示

	$quryset=goodSearch($jobid,$tid);
	$data2 = mysql_fetch_row($quryset);
	echo  "<span id =\"btn_favorite_s\">";

	if($data2>0){
	echo "<A href=\"JavaScript:changeImage()\" >";
	echo "<IMG src=\"./photo/img1.jpg\" name=\"img\" id=\"img\" border=\"0\"></A><BR>";
	}else{
	echo "<A href=\"JavaScript:changeImage()\">";
	echo "<IMG src=\"./photo/img0.jpg\" name=\"img\" id=\"img\" border=\"0\"></A><BR>";

	}
	echo  "</span>";

//---------------------------------------------------------------------------------------------------

		//職業詳細続き
		echo "</div>";
		
		echo "<div id=\"box_info\">";
		echo  "<p id =\"catch\">";
		echo  $data[4] ."<br />";//一行キャッチコピー
		echo  "</p>";

		echo  "<p id=\"intro\">";
		echo  $data[5] ."<br />";//職業紹介文
		echo  "</p>";
		echo  "<br />";
		echo  "<br />";


//---------------------------------------------------------------------------------------------------

	//関連タグ表示SQL実行
	echo "<div id=\"box_tag\">";

	echo "<h4>分野:</h4>";
	//関数
	$quryset = lowtagName($jobid);

	echo "<div id =\"box_genre\">";
	echo "<ol>";
	$cnt=1;
	foreach($quryset as $data) {
	echo"<ul style=\"list-style:none;\">";
	$cnt++;
		echo "<li class=\"btn_tag\">";
		echo "<form  name='Form".$cnt."' method='post' action='./subjectImageSearch.php' style=\"display:inline;\">";
		echo "<input type='hidden' name='sbjct' value=".$data[0].">";
		echo "<li><a href='javascript:Form".$cnt.".submit()'>".$data[1]."</a></li></form>";

		echo "</li>";
		echo "</ul>";
	}
	echo "</ol>";
	echo "</div>";


	echo "<h4>イメージ:</h4>";
	//関数
	$quryset = imageName($jobid);

	echo "<div id =\"box_image\">";
	echo "<ol>";
	foreach($quryset as $data) {
		echo"<ul style=\"list-style:none;\">";
	$cnt++;

		echo "<li class=\"btn_tag\">";
		echo "<form  name='Form".$cnt."' method='post' action='./subjectImageSearch.php' style=\"display:inline;\">";
		echo "<input type='hidden' name='sbjct' value=".$data[0].">";
		echo "<li><a href='javascript:Form".$cnt.".submit()'>".$data[1]."</a></li></form>";


		echo "</li>";
		echo "</ul>";
	}
	echo "</ol>";
	echo "</div>";
	echo "</div>";




//---------------------------------------------------------------------------------------------------





	echo "<div id=\"box_content\">";
	//お仕事スタジアムレポートDBに対してSQL実行//

	echo "<ul style=\"list-style:none;\">";

	echo "<br />";

	echo "<img src=\"./photo/test.png\">";//お仕事スタジアム2016夏(イメージ)
	echo "<br />";
	echo "<img class=\"main_v\" src=\"./photo/test.png\">";//お仕事スタジアムメイン画像
	echo "<br />";

	echo "<li  id=\"btn_report\" class=\"switch\"><img src=\"./photo/test.png\"></li>";//アコーディオンclick画像

    	echo "<div id=\"box_report\" class=\"contentWrap displayNone\">";
	//１ループで１行データが取り出され、データが無くなるとループを抜けます。

		//ここで日付を出す
	$rpmain = jobstadiumlist($jobid);

	foreach ( $rpmain as $data){


		echo "<p class=\"title\">";
		echo $data[3]."<br />";//大見出し(p title)
		echo "</p>";
		if ($data[2]!=0) {

       		echo "<img class=\"main_v\"  height='100' src='./create_image.php?id=".$data[2] ."' /><br />";//メイン画像(img main_v)
		}
		echo "<p class=\"date\">";
		echo $data[4]."<br />";//取材日(p date)
		echo "</p>";
	$quryset=cjobstadiumlist($data[0]);
		foreach ($quryset as $cdata){

			if ($cdata[0]!=0) {
       					echo "<img class=\"artwork\" height='100' src='./create_image.php?id=".$cdata[0] ."' /><br />";//お仕事スタジアム内容中の画像(main_v)?
			}
			echo "<h4>";
			echo  $cdata[1] ."<br />";//小見出し
			echo "</h4>";
		echo "<p class=\"txt_box\">";
		echo  $cdata[2] ."<br />";//お仕事スタジアムレポート
		echo "</p>";

		}
		echo "<p class=\"interviewer\">";
		echo $data[5]."<br />";//取材者名(p interviewer)
}		echo "</p>";
		echo "<p class = \"btn_close\">";
		echo "<a>";
		echo "<img src=\"./photo/close.png\">";
		echo "</a>";
		echo "</p>";
		echo "</div>";




//---------------------------------------------------------------------------------------------------

	//専門家の写真コメント取得
	$exmain = expertlist($jobid);

	echo "<br />";
	echo "<li id=\"btn_pro\" class=\"switch\" ><img src=\"./photo/test.png\"></li>";//imgタグの内容を書き換える
	echo "</li>";

    	echo "<div id=\"box_pro\" class=\"contentWrap displayNone\">";
	foreach ( $exmain as $data){
		echo "<p class=\"title\">";
		echo $data[3]."<br />";//大見出し(p title)
		echo "</p>";
		if ($data[2]!=0) {

       		echo "<img class=main_v  height='100' src='./create_image.php?id=".$data[2] ."' /><br />";//メイン画像(img main_v)
		}
		echo "<p class=\"position\">";
		echo $data[4]."<br />";//専門家名(p position)
		echo "</p>";
		echo "<p class=\"date\">";
		echo $data[5]."<br />";//取材日(p date)
		echo "</p>";

	$quryset=cexpertlist($data[0]);

	//１ループで１行データが取り出され、データが無くなるとループを抜けます。
	foreach ( $quryset as $cdata){

			if ($cdata[0]!=0) {
       				echo "<img class=artwork  height='100' src='./create_image.php?id=".$data[0] ."' />";//内容中の専門家写真
			}
			echo "<h4>";
			echo  $cdata[1] ."<br />";//学生見出し
			echo "</h4>";

			echo "<p id=\"text_interview\">";
			echo  $cdata[2]."<br />";//コメント
			echo "</p>";
		}
		echo "<p class=\"interviewer\">";
		echo $data[6];//取材者名(p interviewer)
		echo "</p>";
		}
		echo "<p class = \"btn_close\">";
		echo "<a>";
		echo "<img src=\"./photo/close.png\">";//アコーディオン用のclose画像にimgタグの内容を書き換える
		echo "</a>";
		echo "</p>";

		echo "</div>";

//---------------------------------------------------------------------------------------------------

	//学生インタビューDBに対してSQL実行//


	$stmain = stviewlist($jobid);


	echo "<br />";
	echo "<li id=\"btn_student\" class=\"switch\" ><img src=\"./photo/test.png\"></li>";//アコーディオンclick画像

    	echo "<div id=\"box_student\" class=\"contentWrap displayNone\">";

	foreach ( $stmain as $data){
		echo "<p class=\"title\">";
		echo $data[3]."<br />";//大見出し(p title)
		echo "</p>";
		if ($data[2]!=0) {

       		echo "<img class=\"main_v\"  height='100' src='./create_image.php?id=".$data[2] ."' /><br />";//メイン画像(img main_v)
		}
		echo "<p class=\"position\">";
		echo $data[4]."<br />";//学生HN(p position)
		echo "</p>";
	//１ループで１行データが取り出され、データが無くなるとループを抜けます。

	$quryset=cstviewlist($data[0]);
	foreach ( $quryset as $cdata){

			if ($cdata[0]!=0) {
       				echo "<img class=\"artwork\"  height='100' src='./create_image.php?id=".$data[0] ."' />";//内容中の専門家写真
			}
			echo "<h4>";
			echo  $cdata[1] ."<br />";//学生見出し
			echo "</h4>";

			echo "<p id=\"text_interview\">";
			echo  $cdata[2]."<br />";//コメント
			echo "</p>";
		}
		echo "<p class=\"date\">";
		echo $data[7]."<br />";//インタビュー当時(p date)
		echo $data[5]."<br />";//取材日(p date)
		echo "</p>";
		echo "<p class=\"interviewer\">";
		echo $data[6]."<br />";//取材者名(p interviewer)
		echo "</p>";
		}

		echo "<p class = \"btn_close\">";
		echo "<a>";
		echo "<img src=\"./photo/close.png\">";
		echo "</a>";
		echo "</p>";
		echo "</div>";

//---------------------------------------------------------------------------------------------------
	//気になるボタン表示
	$quryset=goodSearch($jobid,$tid);
	$data = mysql_fetch_row($quryset);

	echo  "<li id =\"btn_favorite\">";
	if($data>0){
		echo "<A href=\"JavaScript:changeImage()\">";
		echo "<IMG src=\"./photo/img1.jpg\" name=\"img2\" border=\"0\"></A><BR>";
	}else{
		echo "<A href=\"JavaScript:changeImage()\">";
		echo "<IMG src=\"./photo/img0.jpg\" name=\"img2\" border=\"0\"></A><BR>";

	}
	echo "</li>";
	echo "</ul>";
	echo "</div>";

//---------------------------------------------------------------------------------------------------

	//この仕事を目指す学校表示SQL実行//

	$quryset = asolist($jobid);

	echo "<br />";


	echo "<div id=\"box_school\">";
	echo "<h3>";
	echo "<img src=\"./photo/test.png\">";
	echo "</h3>";

	echo"<ul style=\"list-style:none;\">";

	//１ループで１行データが取り出され、データが無くなるとループを抜けます。
	foreach ($quryset as $data){


		echo "<li class=\"btn_school\">";
		echo "<dl>";
		echo "<form action=".$data[2]." method=\"post\">";//ページ遷移先指定
		echo "<button type=\"submit\" name=\"tagid\" ><dt>".$data[0]."</dt><dd>".$data[1]."</dd></button>";//学校学科名表示(ボタン)
		echo "</form>";
		echo "</dl>";
		echo "</li>";
		}
		echo "</ul>";
		echo "</div>";


		echo  "<br />";
		echo  "<br />";



//---------------------------------------------------------------------------------------------------

//DB切断
	dconnect($con);
//最新///
//---------------------------------------------------------------------------------------------------
?>

<!--先頭に戻る-->
<p id="page_top" style="display: block;"><a href="#wrap">トップ</a></p>

<?php include("footer.html"); ?>
</body>
</html>
