<!DOCTYPE html>
<Php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="Assets/Icons/Иконки Дополнительные/Логотип Во Вкладке.png" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="../MaterilizeCss/Css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/examples/libs/simple-adaptive-slider/simple-adaptive-slider.min.css">
    <script defer src="/examples/libs/simple-adaptive-slider/simple-adaptive-slider.min.js"></script>
    <title>Торты На Заказ</title>
</head>
<body>
  <?php
    session_start();
    $db=mysqli_connect("localhost", "DarkZero", "REZERO") or die (mysqli_connect_error());
    mysqli_query($db, 'SET NAMES utf8_general_ci');
    mysqli_select_db($db, "cake_site_content") or die (mysqli_connect_error());
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

  <br><br>
  <div class="wrapper">
    <div class="falling">
    <ul id="slides">
      <center>
        <li class="slide"><p>Добро Пожаловать В CakesToOrder!!!</p></li>
        <li class="slide showing"><p>Добро Пожаловать В CakesToOrder!!!</p></li>
        <li class="slide"><p>Добро Пожаловать В CakesToOrder!!!</p></li>
      </center>
    </ul>
    <div class="strel_hei">
      <div class="pred">
        <button class="controls" id="previous">
          <div class="triangle-left"></div>
        </button>
      </div>
      <div class="sled">
        <button class="controls" id="next">
          <div class="triangle-right"></div>    
        </button>
      </div>
    </div>
  </div>
      <div id="content">
        <hr class="m_hr"> 
        <div class="title_cake">
          <h5>Рекомендуемые Заказы</h5>
            <div class="catalog_content">
            <?php
              $result=mysqli_query($db, "SELECT * FROM product ORDER BY RAND() LIMIT 8");
              while ($row=mysqli_fetch_assoc($result)){
              echo '<div class="block_product_shop">' . '<div class="block_solid_img"><a href="#"><img src="../www/' . $row['image_product2'] . '" class="img_solid" width="240px" height="160px"/></a></div>';
                  echo '<a href="#">'; 
                  echo '</a>';
                echo '<div class="text_price">';
                  echo '<div class="title_name_cake">';
                    echo '<h6><a href="#">' . $row['name_product'] . '</a></h6>';
                    echo '<p>Цена:' . $row['price_product'] . 'руб<sup>' . $row['discount_product'] . '%</sup></p>'; 
                  echo '</div>';
                echo '</div>';
                echo '<div class="price_img">';
                  echo '<a href="#">';
                    echo '<img src="../Assets/Icons/Иконки Дополнительные/Иконк Для Товара.png">';
                  echo '</a>';
                echo '</div>';
              echo '</div>';
              }
            ?>
            </div>
              <a href="catalog.php"><button class="button_btn_degustation">Перейти В Каталог Товаров</button></a><br><br>
            <hr class="hr_clases"><br><br><br>
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


  
  <script src="../Js/slider.js"></script>
  <script src="../Js/sneg.js"></script>
  <script src="../Js/sparticles.js"></script>
  <script type="text/javascript" src="MaterilizeCss/js/materialize.min.js"></script> 
</body>
</html>




