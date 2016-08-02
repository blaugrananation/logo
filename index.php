<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#864f7d">

    <title>Blaugrana Nation</title>


	<style type="text/css">
		@font-face {
			font-family: 'Barcelona';
			src: url('font.ttf');
		}

		body {
			font-family: Barcelona;
			background: url('bg.jpg') center center;
			background-size: 100% 100%;
		}

		.container {
			width: 300px;
			margin: auto;
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-150px, -59px);
			-moz-transform: translate(-150px, -59px);
			transform: translate(-150px, -59px);
		}

		input[type="text"] {
			display: block;
			width: 100%;
			font-size: 16px;
			padding: 15px 25px;
			font-family: Barcelona;
			box-sizing:border-box;
			-moz-box-sizing:border-box;
			text-align: center;
			margin-bottom: 18px;
		}

		input[type="submit"] {
			border: none;
			background: #ffc31f;
			color: #fff;
			padding: 15px 25px;
			display: block;
			width: 100%;
			font-size: 16px;
			font-family: Barcelona;
			box-sizing:border-box;
			-moz-box-sizing:border-box;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background: #eeb20e;
		}
	</style>

</head>
<body>

	<div class="container">
		<form action="make.php" method="GET">
			<input type="text" name="text" placeholder="Type your initials here..." maxlength="7" required>
			<input type="submit" value="Generate">
		</form>
	</div>

</body>
</html>