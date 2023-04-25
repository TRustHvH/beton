<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
if(isset($_POST['submit'])){
// Переменные, которые отправляет пользователь
    $name = $_POST['name'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Формирование самого письма
    $title = "Форма отправки с сайта гусеничка.рф";
    $body = "Имя: $name</br>Телефон: $number</br>Сообщение: $message"; // Содержимое письма

    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';

    // Настройки SMTP
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = true;

    $mail->Host = '' //SMTP почта;
    $mail->Port = 465;
    $mail->Username   = ''; // Логин на почте
    $mail->Password   = ''; // Пароль на почте

    // От кого
    $mail->setFrom('',''); // почта | тайтл

    // Кому
    $mail->addAddress(''); // кому отправить

    // Тема письма
    $mail->Subject = $title;

    // Тело письма
    $mail->msgHTML($body);

    $mail->send();

}
echo "<script>self.location='';</script>"; // Куда перекинуть после отправки
?>