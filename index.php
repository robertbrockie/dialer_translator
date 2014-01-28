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
		<title>Dialpad Translator</title>

		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<div class="header_text">Dialpad Translator
					<span class="help">[?]<div class="help_box">Type a word in the box below and the word will be translated into numbers corresponding telephone numbers. Pretty friggin' simple.</div>
					</span>
				</div>
			</div>

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

		<div class="footer">
			<hr/>
			<p>a <a href="http://www.robertbrockie.com">robert brockie</a> production...</p>
		</div>
	</body>
</html>