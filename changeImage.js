
// img0.jpg,img1.jpgなどの数字が続いたファイルを複数用意します。
nme = "./images/img" // 画像のディレクトリとファイル名の数字と拡張子より前の部分
exp = "jpg" // 拡張子

function changeImage() {

	cnt++;
	cnt %= 2;
	document.img.src = nme + cnt + "." + exp;
	document.img2.src = nme + cnt + "." + exp;

	$.ajax({
    		type:"POST",
		url: "value.php",
		data:{
		"data1":Jid,"data2":Tid
	},
	success: function(data) {

		//通信の確認
		// alert('success!!');
	},
	error: function(data) {
		alert('error!!!');
	}
	});
}
