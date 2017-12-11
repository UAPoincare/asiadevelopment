<?php

$recepient = "l7l23qp@gmail.com";
$sitename = "Asiadevelopment";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nE-mail: $email \nТекст: $text";

$pagetitle = "Новая сообщение с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");