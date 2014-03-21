<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="//ideati.me/img/ideatime_16x16.jpg" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.fittext.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript">
var got = unescape("<?php 
if ($_POST['text'] && $_POST['text'] != "") {
	echo $_POST['text'];
}
?>");
		</script>
	</head>
	<body>
		<div class="container">
			<div class="row" id="main">
				<div class="col-md-4 col-md-offset-4 col-xs-12">
					<div id="display" style="text-align: center">快读啦</div>
					<hr />
					<div style="text-align: center">
						<small style="font-size: 8px;">快读啦，让你不用移动眼睛，不用靠近屏幕就能阅读，保护视力，从快读啦做起。</small>
					</div>
					<textarea id="input" placeholder="请在此处输入想要阅读的文字" style="width: 100%"></textarea>
					<div style="text-align: center; margin-top: 3px;">
						<label>Speed:</label>
						<input value="12" type="number" id="speed" style="width: 70px;">字/秒
					</div>
					<hr />
					<div class="row">
						<div class="col-xs-7">
							<button id="go" style="width: 100%" class="btn btn-lg btn-success">快读吧</button>
						</div>
						<div class="col-xs-5">
							<button id="reset" style="width: 100%" class="btn btn-lg btn-danger">重置</button>
						</div>
					</div>
					<div style="text-align: center">
						<small>Powered by <a href="//sep.ideati.me" target="_blank">September</a></small>
					</div>
				</div>
			</div>
			<div class="row" style="text-align: center">
				<h6>Thank you for using our product, did it help you speed up? :-) Take a look at the following, you may have insterest :-)</h6>
				<hr>
				<div class="col-sm-3">
					<a href="https://chrome.google.com/webstore/detail/preview-it/hlnfkjhomcppkfeioacmjjenhlgcbflj" class="btn btn-default btn-sm">Preview It</a>
					<br>
					 - a chrome extension to preview pages in popup small window
				</div>
				<div class="col-sm-6">
					<a href="https://chrome.google.com/webstore/detail/kuaidula%E5%BF%AB%E8%AF%BB%E5%95%A6/eciblbmhipceenpjandbgolgdndlbple" class="btn btn-default btn-sm">快读啦</a>
					<br>
					 - 快读啦谷歌浏览器插件
				</div>
				<div class="col-sm-3">
					<a href="http://timesheettyu.ideati.me/" class="btn btn-default btn-sm">TimeSheettyU</a>
					<br>
					 - Help you import your CityU Schedule into your phone, weeks differ from weeks
				</div>
			</div>
			<div class="row" style="text-align: center">
				<h6>据有关调查，我国教学大纲要求高中生阅读速度为600汉字每分钟（10字/秒），快读啦为您推荐每分钟720字（12字/秒）的阅读速度，相当于大学生的阅读速度700汉字每分钟。</h6>
				<h6>经过一段时间的使用和练习，用户的阅读速度可以逐渐由720字每分钟提高到1080字每分钟，以此速度，一个半小时便可读完一本十万字的小说。</h6>
			</div>
		</div>
	</body>
</html>
