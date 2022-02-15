<?php
require_once ('inc/send_form.php');
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
<!--			<form action="" method="post" id="my_form_id" enctype="multipart/form-data" >-->
<!--				<div class="form__group field">-->
<!--					<input type="text" class="form__field" placeholder="Imię i nazwisko:" name="person" id="person"/>-->
<!--					<label for="person" class="form__label">* Imię i nazwisko:</label>-->
<!--				</div>-->
<!--				<div class="form__group field">-->
<!--					<input type="email" class="form__field" placeholder="* Email:" name="email" id="email"/>-->
<!--					<label for="email" class="form__label">* Email:</label>-->
<!--				</div>-->
<!--				<div class="form__group field">-->
<!--					<input type="tel" class="form__field" placeholder="Telefon:" name="tel" id="tel"/>-->
<!--					<label for="tel" class="form__label">Telefon:</label>-->
<!--				</div>-->
<!--				<div class="form__group field">-->
<!--					<textarea class="form__field" placeholder="* Wiadomość:" name="message" id="message"/> </textarea>-->
<!--					<label for="message" class="form__label">* Wiadomość:</label>-->
<!--				</div>-->
<!--				<div class="form__group_file field">-->
<!--					<label for="tel" class="form__label">Dodaj plik:</label>-->
<!--					<input type="file" class="custom-file-input"  name="file" id="file"/>-->
<!--				</div>-->


<!--				<input type="checkbox" id="reg">-->
<!--				<br><input type="checkbox" id="agree" /><label class="for_agree" for="agree" id="agree_cb"> * Wyrażam zgodę na przetwarzanie powyższych danych w celu otrzymania odpowiedzi na przesłany formularz. Podanie danych jest dobrowolne, ale niezbędne do otrzymania odpowiedzi.</label>-->
<!--				<br>-->
<!--				<div id="formanswer"></div>-->
<!--				<div class="form_buttons">-->
<!--					<input type="submit" class="send" value="Wyślij">-->
<!--					<input type="reset" class="reset" id="reset_btn" value="Kasuj">-->
<!--				</div>-->
<!--			</form>-->


			<form id="data" method="post" enctype="multipart/form-data" action="">
				<input name="file" type="file" />
				<br><button>Submit</button>
			</form>
		</div>
	</div>
</section>

<!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->

<!--<script src="js/jquery-3.4.1.min.js"></script>-->
<!--<script src="js/mail.js"></script>-->


</body>
</html>