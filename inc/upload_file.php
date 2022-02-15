<?php

echo '<pre>';
var_dump($_POST);
echo '<br/>';
var_dump($_FILES);
echo '</pre>';
move_uploaded_file($_FILES['file']['tmp_name'], 'images/' . $_FILES['file']['name']);
