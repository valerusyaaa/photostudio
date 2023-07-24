<?php
/* Принимаем данные из формы */
$name = $_POST["name"]; 
$email = $_POST["email"];
$call = $_POST["phone"];
$style = $_POST["style"];
$question = $_POST["message"];

/* Подключаемся к БД */
$db=mysqli_connect(NULL, "root","", "saklakova"); 
 
/* Записываем данные из формы в БД */
$sql = "INSERT INTO saklakova(name, email, phone, style, message) VALUES ('$name', '$email', '$call', '$style', '$question')";
$result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysql_error());



?>