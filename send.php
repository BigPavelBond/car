<?php
//Приминение почтовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//Тут указываем на какой ящик посылать письмо
$to = "r3o4m71a@meta.ua"
//Далее идет тема и само сообщение
$subject = "Заявка с сайта машины";
$message = "
Письмо отправлено из моей формы.<br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone);
$headers = "From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html;
	charset=utf-8 \r\n";
mail($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>