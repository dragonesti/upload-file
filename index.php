<?php
require_once('inc/upload_file.php');
?>


<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formularz kontaktowy</title>
	<meta name="author" content="www.dreamfocus.pl">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!--[if IE]>
<p class="browserupgrade">Używasz <strong>nieaktualnej</strong> wersji przeglądarki. Zaktualizuj <a
		href="https://browsehappy
.com/">przeglądarkę</a> aby wszystko działało poprawnie i bezpiecznie.</p>
<![endif]-->


<section id="contact__section">
	<div class="contact__container">
		<div class="contact__form">
			<h3 class="contact__form--header">Formularz kontaktowy</h3>
			<hr class="dec">

			<form id="data" method="post" enctype="multipart/form-data" action="">
				<input name="file" type="file" />
				<br><button>Submit</button>
			</form>
		</div>
	</div>
</section>

</body>
</html>