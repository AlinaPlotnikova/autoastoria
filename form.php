<?php
$name = trim(strip_tags($_POST["name"]));
$email = trim(strip_tags($_POST["email"]));
$tel = trim(strip_tags($_POST["tel"]));
$message = trim(strip_tags($_POST["message"]));
$subject = "Отзыв на сайте autoastoria.ru";
$msg = "Ваши данные формы отзыва:\n" ."Имя: $name\n" ."Ваш email: $email\n" ."Телефон: $tel" ."Сообщение: $message\n";
$headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
$headers .= "From: Autoastoria <plotnikovaalina111@gmail.com>" . "\r\n";
$headers .= "Bcc: plotnikovaalina111@gmail.com". "\r\n";

echo "Спасибо! Ваш отзыв загружен и будет опубликован после проверки модераторами.";

?>
