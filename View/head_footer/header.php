<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if (isset($titel)) {
		echo($titel);
	} ?></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		*{
			margin: 0px;
			padding: 0px;
		}
		.container{
			margin: 0 auto;
			margin-top: 50px;
			width: 800px;
			background: #3333ff;
		}
		.menu{
			background: green;
			width: 100px;
		}
		a{
			color: #66ffff;
			text-decoration: none;
		}
		a:hover{
			color: red;
		}
		.footer{
			width: 800px;
			background: pink;
			margin: 0 auto;
			height: 50px
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="menu">
			<a href="index.php"><li>Home</li></a>
			<a href="index.php?Controller=thanh_vien"><li>Thành viên</li></a>
			<a href="index.php?Controller=thanh_vien&action=Add"><li>Thêm</li></a>
		</div>
	</div>
</body>
</html>