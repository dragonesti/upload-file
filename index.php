<?php
    require_once('inc/upload_file.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload file</title>
	<meta name="author" content="www.dreamfocus.pl">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <section id="contact__section">
        <h1 class="contact__form--header">Upload file</h1>
        <hr class="dec">
        <span class="msh">
            <?php
                if (isset($message)) {
                    echo $message;
                }
            ?>
        </span>
        <hr class="dec">
        <form id="data" method="post" enctype="multipart/form-data" action="">
            <input name="file" type="file" id="file"/>
            <br><button name="send">Upload your file </button>
        </form>
    </section>
</body>
</html>