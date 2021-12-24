<!DOCTYPE html>
<Php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение Иконок -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Подключение Картинки Во Вкладку Заглавия -->
    <link rel="shortcut icon" href="../Assets/Icons/Иконки Дополнительные/Логотип Во Вкладке.png" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="../MaterilizeCss/Css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../Css/Style.Css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <title>Торты На Заказ</title>
</head>
<body>
  <?php
    session_start();
    $db=mysqli_connect("localhost", "DarkZero", "REZERO") or die (mysqli_connect_error());
    mysqli_query($db, 'SET NAMES utf8_general_ci');
    mysqli_select_db($db, "cake_site_content") or die (mysqli_connect_error());
    if (!$db){
        die('Произошла ошибка в базе данных!!!');
    }
  ?>
  <div class="menu">
    <div class="menu-wrap">
      <input type="checkbox" id="checkbox">
      <div class="logo_title2">
          <a href="main.php"><img class="logo_title_img2" src="../Assets/Icons/Иконки Дополнительные/Главная Икона Сайта.png" alt="Main_Cake"></a>
      </div>
      <div class="navigation">
        <ul class="ul_navig">
          <li class="ul_navig_li"><a href="about_the_project.php">О Проекте</a></li>
          <li class="ul_navig_li"><a href="catalog.php">Торты</a></li>
          <li class="ul_navig_li"><a href="contacts.php">Контакты</a></li>
          <li class="ul_navig_li"><a href="raiting.php">Рейтинг</a></li>
        </ul>
      </div>
      <label class="label_menu_icon" for="checkbox">
        <i class="fa fa-bars menu-icon"></i>
      </label>
    </div>
  </div>

  <div class="nav">
    <div class="logo_title">
      <a href="main.php"><img class="logo_title_img" src="../Assets/Icons/Иконки Дополнительные/Главная Икона Сайта.png" alt="Main_Cake"></a>
    </div>
    <div class="list">
      <ul class="list_ul">
        <li class="list_ul_li"><a href="about_the_project.php"> О Проекте </a></li> 
        <li class="list_ul_li"><a href="catalog.php"> Торты </a></li>
        <li class="list_ul_li"><a href="contacts.php"> Контакты </a></li>
        <li class="list_ul_li"><a href="raiting.php"> Рейтинг </a></li>
      </ul>
    </div>
    <div id="zatemnenie">
      <div id="okno">
          <h5>Окно Регистраций</h5><br>
          <form action="register.php" method="post">
            <input type="text" name="user_name" placeholder="Имя Пользователя" required><br>
            <input type="text" name="user_login" placeholder="Логин Пользователя" required><br>
            <input type="email" name="user_email" placeholder="Электронная Почта" required><br>
            <input type="number" name="user_phone" placeholder="Номер Телефон" required><br>
            <input type="password" name="user_password" placeholder="Пароль" required><br>
            <input type="submit" name="add" value="Войти"><br>
            <input type="reset" name="b2" value="Очистить"><br>
          </form> 
          <br>
          <p>У вас есть аккаунт?, попробуйте <a href="#zatemnenie2"><br>авторизоваться</a></p>
          <a href="#" class="close">Закрыть Окно</a>
        </div>
      </div>
      <div id="zatemnenie2">
        <div id="okno2">
          <h5>Окно Авторизаций</h5><br>
          <br><br><br>
          <form action="automation.php" method="post">
            <input type="text" name="user_login" placeholder="Логин" required><br>
            <input type="password" name="user_password" placeholder="Пароль" required><br>
            <input type="submit" name="add" value="Войти"><br>
            <input type="reset" name="b2" value="Очистить">
            <br>  
          </form><br>
          <p>У вас нет аккаунт?, попробуйте <a href="#zatemnenie"><br>зарегестрироваться</a></p>
          <a href="#" class="close2">Закрыть Окно</a>
        </div>
      </div>
      <?php
        echo '<a href="#"><div class="user_okno">';
        echo ''.$_SESSION['user_login'].'';
        echo '</div></a>';
      ?>
      <a href="#zatemnenie"><div class="zat_okno">
        Регистрация
      </div></a>
      <a href="#zatemnenie2"><div class="zat_okno2">
        Войти
      </div></a>
  </div>

      <div id="zatemnenie3">
        <div div id="okno3">
          <h5>Окно Регистраций</h5><br>
          <form action="register.php" method="post">
            <input type="text" name="user_name" placeholder="Имя Пользователя" required><br>
            <input type="text" name="user_login" placeholder="Логин Пользователя" required><br>
            <input type="email" name="user_email" placeholder="Электронная Почта" required><br>
            <input type="number" name="user_phone" placeholder="Номер Телефон" required><br>
            <input type="password" name="user_password" placeholder="Пароль" required><br>
            <input type="submit" name="add" value="Войти"><br>
            <input type="reset" name="b2" value="Очистить"><br>
          </form> 
          <br>
          <p>У вас есть аккаунт?, попробуйте <a href="#zatemnenie4"><br>авторизоваться</a></p>
          <a href="#" class="close3">Закрыть Окно</a>
        </div>
      </div>
      <div id="zatemnenie4">
        <div id="okno4">
          <h5>Окно Авторизаций</h5><br>
          <form action="automation.php" method="post">
            <input type="text" name="user_login" placeholder="Логин" required><br>
            <input type="password" name="user_password" placeholder="Пароль" required><br>
            <input type="submit" name="add" value="Войти"><br>
            <input type="reset" name="b2" value="Очистить">
            <br>  
          </form><br>
          <p>У вас нет аккаунт?, попробуйте <a href="#zatemnenie3"><br>зарегестрироваться</a></p>
          <a href="#" class="close4">Закрыть Окно</a>
        </div>
      </div>



<div id="content">
  <div class="zakazoi">
      <div class="title_zakaz">
        <h5>Выдача И Оплата</h5>
      </div>
        <div class="zakaz">
          <div class="parag">
            <h6>Выдача</h6>
            <p>Выдаача продуктов из интернет магазина в дом, офис или даже на дачу, в любое другое удобное для вас место В Санкт-Петербурге, Москве, и Ленинград и многие другие города России</p>
          </div>
          <div class="parag">
            <h6>Оплата</h6>
            <p>Банковской картой при оформлении заказа в интернет магзина</p>
          </div>
        </div>
      <div class="title_zakaz">
        <hr>
        <h5>Условия Заказа</h5>
      </div>
        <div class="zakaz">
          <div class="punct">
            <img src="../Assets/Icons/О Проекте/Календарь.png" alt="Календарь">
            <p>Минимум За День Заказы Принимают До Желаемой Даты</p>
          </div>
          <div class="punct">
            <img src="../Assets/Icons/О Проекте/Срочные Заказы.png" alt="Срочные Заказы">
            <p>Срочные Заказы Согласовываются С Менеджером Отдельно</p>
          </div>
          <br>
          <div class="punct">
            <img src="../Assets/Icons/О Проекте/Вес.png" alt="Вес">
            <p>От 1.4 Кг Минимальный Вес Торта</p>
          </div>
          <div class="punct">
            <img src="../Assets/Icons/О Проекте/Предоплата.png" alt="Предоплата">
            <p>40% Предоплаты Работаем</p>
          </div>
        </div>
      <div class="block">
        <div class="zakaz">
          <div class="punct2">
            <h6>Самовывоз</h6>
            <p>г. Горно-Алтайск Советская 21, Дом 125</p>
          </div>
          <div class="punct2">
            <h6>Ежедневно</h6>
            <p>Пн-Пт С 9:00 До 20:00 СБ-ВС С 10:00 дО 20:00</p>
          </div>
          <div class="punct2">
            <h6>Выдача</h6>
            <p>Выдача производится в 6-x часовом интервале</p>
        </div>
      </div>
      <hr>
      <div class="title_zakaz">
        <h5>Оформление Заявки И Получение Заказа</h5>
      </div>
      <div class="zauvka">
        <h6>1 Авторизуйтесь на сайте cakes_to_order.ru</h6>
        <h6>2 Если хотите, сегодня или завтра забрать заказ, приходите по адресу: <br> <p>г.Горно-Алтаайск(Алтай Респ).пр-кт Советская 21</p></h6>
        <h6>3 При оформлении спецзаказа будет доступно всем ассортиментом сети. Срок заказа от 10 дней</h6>
        <h6>4 Закажите в удобную для вас дату</h6>
        <h6>5 Когда заказ будет собран, придет вам: CMC, что заказ готов к выдаче</h6>
        <h6>6 Хранение заказа 1 день</h6>
      </div><br>
        <div class="block_mobile_okno">
          <center>
            <?php
              echo '<a href="#"><div class="user_okno">';
              echo ''.$_SESSION['user_login'].'';
              echo '</div></a>';
            ?>
          </center>
        </div>
        <div class="block_mobile_okno">
          <br><br>
          <center>
            <div class="zat_okno3">
              <a href="#zatemnenie3">Регистрация</a>
            </div>
          </center>
        </div>
        <div class="block_mobile_okno">
          <center>
            <div class="zat_okno4">
              <a href="#zatemnenie4">Войти</a>
            </div>
          </center>
        </div>
    </div>
  </div>
</div>



  <div id="footer">
    <div class="production">
      <div class="logo_title">
        <a href="main.php"><img class="logo_title_img" src="../Assets/Icons/Иконки Дополнительные/Главная Икона Сайта.png" alt="Main_Cake"></a>
      </div>
      <p>© 2021 CakesToOrder</p>
      <p><a class="politic_confidentional" href="#">Политика Кофиденциальности</a></p>
    </div>
    <div class="production">
      <p class="parag_er">Продукция</p>
      <ul class="ul_cakes">
        <li class="ul_cakes_li"><a href="catalog.php">Шоколадные Торты</a></li>
        <li class="ul_cakes_li"><a href="catalog.php">Сливочные Торты</a></li>
        <li class="ul_cakes_li"><a href="catalog.php">Бисквитные Торты</a></li>
        <li class="ul_cakes_li"><a href="catalog.php">Медовые Торты</a></li>
      </ul>
    </div>
    <div class="production">
      <p class="parag_er">О Нас</p>
      <ul class="ul_cakes">
        <li class="ul_cakes_li"><a href="raiting.php">Рейтинг</a></li>
        <li class="ul_cakes_li"><a href="about_the_project.php">О Проекте</a></li>
        <li class="ul_cakes_li"><a href="contacts.php">Контакты</a></li>
      </ul>
    </div>
    <div class="production">
      <div class="seti_img">
        <p class="parag_er">Социальные Сети</p>
          <img class="cot_seti" src="../Assets/Icons/Иконки СоцСети/Иконка VK.png" alt="vk">
          <img class="cot_seti" src="../Assets/Icons/Иконки СоцСети/Иконка FaceBook.png" alt="facebook">
          <img class="cot_seti" src="../Assets/Icons/Иконки СоцСети/Иконка InstaGram.png" alt="instagramm">
          <img class="cot_seti" src="../Assets/Icons/Иконки СоцСети/Иконка Twitter.png" alt="twitter">
          <img class="cot_seti" src="../Assets/Icons/Иконки СоцСети/Иконка Телеграм.png" alt="telegramm">
      </div>
      <br>
      <div class="seti_img2">
        <p class="parag_er">Способы Оплаты:</p>
          <img class="cot_seti2" src="../Assets/Icons/Иконки Оплаты/Оплата Google Pay.png" alt="Google">
          <img class="cot_seti2" src="../Assets/Icons/Иконки Оплаты/Иконка Visa.png" alt="Visa">
          <img class="cot_seti2" src="../Assets/Icons/Иконки Оплаты/Иконка Qiwi.png" alt="Qiwi">
          <img class="cot_seti2" src="../Assets/Icons/Иконки Оплаты/Иконка Мир.png" alt="Mir">
      </div>
    </div>
  </div>
  <div id="avtor">
    <p class="avtor_text">Авторские Права © 2021 CakesToOrder</p>
  </div>
  
  <script type="text/javascript" src="../MaterilizeCss/js/materialize.min.js"></script> 
</body>
</Php>

