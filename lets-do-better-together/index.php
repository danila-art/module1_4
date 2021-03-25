<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сделаем лучше вместе!</title>
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="shortcut icon" href="logo/logo.png">
    <link rel="stylesheet" href="css/fontAndMedia.css">
</head>

<body>
    <section class="block__registr-autorization" id="moduleAutoRegistr">
        <div class="blockk__registr" id="moduleRegistr">
            <form action="" method="POST" onsubmit="">
                <div>
                    <h3>Введите ФИО</h3>
                    <input type="text">
                </div>
                <div>
                    <h3>Придумайте логин</h3>
                    <input type="text">
                </div>
                <div>
                    <h3>Введите email</h3>
                    <input type="email">
                </div>
                <div>
                    <h3>Придумайте пароль</h3>
                    <input type="password">
                </div>
                <div>
                    <h3>Повторите пароль</h3>
                    <input type="password">
                </div>
            </form>
        </div>
    </section>
    <header class="header">
        <div class="header__nav">
            <div class="header__flex container">
                <div class="header__logo">
                    <img src="logo/logo.png" alt="errorUpImage">
                </div>
                <div class="header__flex header__flex-nav">
                    <h3><a href="index.php">Главная</a></h3>
                    <h3><a href="#">Подать заявку</a></h3>
                    <h3><a href="#">Просмотреть заявки</a></h3>
                    <h3><a href="#about">О нас</a></h3>
                    <h3><a href="#">Контакты</a></h3>
                </div>
                <div class="header__user" id="userBlock">
                    <!-- Проработать js moduleBlock -->
                    <img src="img/icons/user.png" alt="errorUpImage">
                    <!--            Доработать php-->
                    <h3>Войти</h3>
                </div>
            </div>
        </div>
    </header>
    <section class="about" id="about">
        <div class="container">
            <div class="about__h1">
                <h1>О нас</h1>
            </div>
            <div class="about__flex">
                <div class="about__box">
                    <h2>10 лет с вами</h2>
                    <h3>На протяжении 10 лет мы помогаем жителям улучшить их проживание и сделать жизнь комфортнее.</h3>
                </div>
                <div class="about__box">
                    <h2>Мы развиваемся</h2>
                    <h3>Наш проект прогрессирует и совершенствуется каждый день, добавляя все новый функционал и делая
                        удобнее для вас.</h3>
                </div>
                <div class="about__box">
                    <h2>Лучшие сотрудники</h2>
                    <h3>Наши сотрудники с большим опытом работы, в течении 5 минут просматривают заявки и передают их
                        управлению по данному типу работ.</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="section-main-article">
        <div class="container">
            <div class="section-main-article__h1">
                <h1>Последние 4 решеные проблемы</h1>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>