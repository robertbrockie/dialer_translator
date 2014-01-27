<?php

	include ('DialerTranslator.php');

	$word = '';
	$number = '';

	if (!empty($_POST)) {
		$word = $_POST['word'];

		$number = DialerTranslator::WordToNumber($word);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Dialpad Translator</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
	  		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div class="container">
			<h1>Dialpad Translator</h1>

			<form action="index.php" method="post">
				<p><input class="form-control" type="text" name="word" value="<?= $word ?>" /></p>
				<p><input class="btn btn-primary btn-lg" type="submit" value="Translate"/></p>
			</form>

			<?php if ($word) { ?>
				<div class="alert alert-success">
					<span><?= $number ?></span>
				</div>
			<?php } ?>
		</div>
	</body>
</html>