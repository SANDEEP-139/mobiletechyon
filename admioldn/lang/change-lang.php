<?php
include('../auth/startup.php');
$selected_lang = filter_input(INPUT_POST, 'selected_lang', FILTER_SANITIZE_STRING);
$_SESSION['language'] = $selected_lang;
header('Location: ../dashboard');