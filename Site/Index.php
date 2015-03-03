<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/news-styles.css"/>
    <link rel="stylesheet" href="css/about-us-styles.css"/>
    <link rel="stylesheet" href="css/history-of-programming-styles.css"/>
    <link rel="stylesheet" href="css/layouts-styles.css"/>
    <link rel="stylesheet" href="css/apply-styles.css"/>

    <title>Home</title>
</head>
<body>
<div id="wrapper">
    <header>
        <img src="images/logo.jpg" width="150">
        <div class="nav">
            <ul class="menu">
                <li><a href="?menu=home">Начало</a></li>
                <li><a href="?menu=news">Новини</a>
                <ul class="submenu">
                    <li><a href="pages/FromWorld.html">От света</a></li>
                    <li><a href="pages/FromBulgaria.html">От България</a></li>
                    <li><a href="pages/FromUniversity.html">От университета</a></li>
                </ul>
                </li>
                <li><a href="#">История</a>
                <ul class="submenu">
                    <li><a href="pages/HistoryOfProgramming.html">На програмирането</a></li>
                    <li><a href="pages/OfUniversity.html">На университета</a></li>
                    <li><a href="pages/LastEvents.html">Последни събития</a></li>
                </ul>
                </li>
                <li><a href="pages/Trainers.html">Преподаватели</a>
                <ul class="submenu">
                    <li><a href="#">Галерия</a></li>
                    <li><a href="#">Биография</a></li>
                </ul>
                </li>
                <li><a href="pages/Courses.html">Курсове</a>
                    <ul class="submenu">
                        <li><a href="#">Ниво -0-</a></li>
                        <li><a href="#">Ниво -1-</a></li>
                        <li><a href="#">Ниво -2-</a></li>
                        <li><a href="#">Ниво -3-</a></li>
                    </ul>
                </li>
                <li><a href="pages/Fun.html">Забавления</a>
                <ul class="submenu">
                    <li><a href="#">Видеа</a></li>
                    <li><a href="#">Вицове</a></li>
                    <li><a href="#">Снимки</a></li>
                    <li><a href="#">Факти</a></li>
                </ul>
                </li>
                <li><a href="?menu=apply">Кандидатствай</a></li>
                <li><a href="?menu=about">За нас</a></li>
            </ul>
        </div>
    </header>
    <main>
		<?php

	if (isset($_GET['menu']))
	{
		if ($_GET['menu'] == "news")
			{
				include("pages/News.html");
			}
		if ($_GET['menu'] == "apply")
			{
				include("pages/Apply.html");
			}

		if ($_GET['menu'] == "about")
			{
				include("pages\AboutUs.html");
			}
		if ($_GET['menu'] == "home")
			{
				include("pages\Home.html");
			}
	}
	else
	{
		include("pages\Home.html");
	}
?>
            

    </main>

    <footer>
        <section id="footer-left">
            <img src="images/artichoke.png" width="200">
        </section>
        <section id="footer-right">
                <div id="fb"></div>
                <div id="googleplus"></div>
                <div id="twitter"></div>
        </section>

    </footer>
</div>
</body>
</html>