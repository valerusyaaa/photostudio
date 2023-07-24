<!DOCTYPE html>
<html>
<head>
    <script src="/scripts/text3.js"></script>
    <link rel="stylesheet" href="text2.css"
    <meta charset="UTF-8">
    <title>FPS фотостудия №1 в Москве</title>
	
    <h2>FPS community</h2>
	<a href="#about1">О нас</a>
    <a href="#work">Наши работы</a>
    <a href="#call">Запись</a>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
		<hr size="4" width="100%" align="left" color="#ffffff">
        <h1>FASHION &nbsp; PHOTO &nbsp; STUDIO</h1>
		<hr size="4" width="100%" align="left" color="#ffffff">
        <h3>Профессиональная фотостудия №1 в Москве</h3>
         <p><img src="63cb1e0e24547c1032bf34b814139e23.jpg" width="680" height="940" alt="Здесь должна быть картинка"></p>

    </header>

    <section id="about">
        <a name="about1">
        <h2>О нас</h2></a>
        <p>Фотостудия Fashion Photo Studio открылась в 2014 году. За 9 лет работы мы всегда стремились к новым высотам. На сегодняшний день FPS - студия фотографии №1 в Москве! 
			</p>
        <p>Главное преимущество FPS - профессиональная и качественная съёмка доступна каждому человеку. Все фотосессии проводятся с учётом Ваших желаний, профессионалы нашей студии всегда подскажут, как создать лучшие кадры.  
			</p>
        <p>Мы заключаем контракты и работаем с моделями с разных уголков планеты. Наш опыт ценят и любят в топовых журналах, таких как VOGUE, BAZAAR, ELLE и т.д.
			</p>
    </section>

    <section id="trends">
        <a name="work">
        <h2>Тренды съёмки 2023 </h2></a>
        <ul>
           <a href="#shooting"><li>STYLIZED SHOOTING</li></a> 
            <a href="#nature"><li>NATURE STYLE</li></a> 
            <a href="#bw"><li>BLACK&WHITE</li></a> 
            <a href="#top"><li>TOP MAGAZINE</li></a> 
            <a href="#fam"><li>FAMILY BAND</li></a> 
        </ul>
            <a name="shooting"> <p> 
            <img src="Слайд1.jpg"             
        alt="Здесь должна быть картинка"> 
        </p></a>
    </section>
        <section id="natural">
        <a name="nature">
        <p><img src="Слайд2.jpg" 
        alt="Здесь должна быть картинка"> 
            </p></a>
    </section>
    
    <section id="BLACK OR WHITE">
        <a name="bw">
        <p><img src="Слайд3.jpg" 
        alt="Здесь должна быть картинка"> 
         </p></a>
    </section>
	<section id="TOP MAGAZINES">
        <a name="top">
        <p><img src="Слайд6.jpg" 
        alt="Здесь должна быть картинка"> 
            </p></a>
    </section>
    <section id="FAMILY BAND">
        <a name="fam">
        <p><img src="Slaid7.jpg" 
        alt="Здесь должна быть картинка"> 
            </p></a>
    </section>

    <section class="contact">
        <a name="call">
        <h2>Запись на фотосъёмку онлайн!</h2><a/>
        <form method="post" action="text4.php">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone:">Номер телефона:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="style" name="style">Желаемый стиль фотосессии:</label>
            <select id="selectvalue">

            <option>STYLIZED SHOOTING</option>

            <option>NATURE STYLE</option>

            <option>BLACK&WHITE </option>

            <option>TOP MAGAZINE</option>

            <option>FAMILY BAND</option>

            </select>

            <label for="message">Вопросы, комментарии (если есть):</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Отправить</button>
	
        </form>
    </section>
    <footer>
        <p>&copy; FPS 2023 community</p>
        <p>Все права защищены</p>
    </footer>
    <script src="script.js"></script>
        
	<?php
	/* Подключаемся к базе данных */
$db=mysqli_connect("localhost", "root","", "saklakova");

/* Выбираем данные */
$sql="SELECT name, email, call, style, question FROM saklakova";
$result=mysqli_query($db, $sql);

while ($line=mysqli_fetch_row($result)) {
	echo "<b>Имя:</b>".$line[0]."<br>";
echo "<b>Email:</b>".$line[1]."<br>";
echo "<b>Сообщение:</b>".$line[2]."<br>";


}
?>
    <footer>
        <p>&copy; FPS 2023 community</p>
        <p>Все права защищены</p>
    </footer>
    <script src="script.js"></script>
        
</body>

</html>