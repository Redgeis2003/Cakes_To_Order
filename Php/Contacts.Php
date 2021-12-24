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

  <div class="wrapper">
    <div id="content">
      <div class="title_cake">
        <h5>Контакты</h5>
      </div>
      <div class="contact">
        <div class="wap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11696.0079684929!2d85.95260666548425!3d51.95615224662769!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1sru!2sru!4v1638474813421!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="human">
          <div class="human_punct">
            <h6>Организация</h6>
            <p>ООО “Призовой Торт”</p>
          </div>
          <div class="human_punct">
            <h6><img src="../Assets/Icons/Контакты/Пользльзователь.png" alt="Пользователь">Адрес</h6>
            <p><a href="#">///////////////////////////////////////////</a></p>
          </div>
          <div class="human_punct">
            <h6><img src="../Assets/Icons/Контакты/Email.png" alt="Email">E-Mail</a></h6>
            <p><a href="#">Redgeis2003@mail.ru</a></p>
          </div>
          <div class="human_punct">
            <h6><img src="../Assets/Icons/Контакты/Телефон.png" alt="Телефон">Телефон:</h6>
            <p><a href="#">+7-(913)-996-54-89</a></p>
          </div>
          <div class="block_mobile_okno">
              <center><br><br>
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


    <div class="footer_size">
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
    </div>
  </div>
  
  <script type="text/javascript" src="../MaterilizeCss/js/materialize.min.js"></script> 
</body>
</Php>

