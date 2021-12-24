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
          <a href="../Main.Php"><img class="logo_title_img2" src="../Assets/Icons/Иконки Дополнительные/Главная Икона Сайта.png" alt="Main_Cake"></a>
      </div>
      <div class="navigation">
        <ul class="ul_navig">
          <li class="ul_navig_li"><a href="About_The_Project.Php">О Проекте</a></li>
          <li class="ul_navig_li"><a href="Catalog.Php">Торты</a></li>
          <li class="ul_navig_li"><a href="Contacts.Php">Контакты</a></li>
          <li class="ul_navig_li"><a href="Raiting.Php">Рейтинг</a></li>
        </ul>
      </div>
      <label class="label_menu_icon" for="checkbox">
        <i class="fa fa-bars menu-icon"></i>
      </label>
    </div>
  </div>

  <div class="nav">
    <div class="logo_title">
      <a href="../Main.Php"><img class="logo_title_img" src="../Assets/Icons/Иконки Дополнительные/Главная Икона Сайта.png" alt="Main_Cake"></a>
    </div>
    <div class="list">
      <ul class="list_ul">
        <li class="list_ul_li"><a href="About_The_Project.Php"> О Проекте </a></li> 
        <li class="list_ul_li"><a href="Catalog.Php"> Торты </a></li>
        <li class="list_ul_li"><a href="Contacts.Php"> Контакты </a></li>
        <li class="list_ul_li"><a href="Raiting.Php"> Рейтинг </a></li>
      </ul>
    </div>
    <div id="zatemnenie">
      <div id="okno">
          <h5>Окно Регистраций</h5><br>
          <form action="Register.Php" method="post">
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
          <form action="Automation.Php" method="post">
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
        echo '<div class="user_okno">';
        echo ''.$_SESSION['user_login'].'';
        echo '</div>';
      ?>
      <a href="#zatemnenie"><div class="zat_okno">
        Регистрация
      </div></a>
      <a href="#zatemnenie2"><div class="zat_okno2">
        Войти
      </div></a>
  </div>




<center>
  <div class="wrapper">
    <div id="content">
      
      <!-- <div id="zatemnenie">
        <div id="okno">
          <form type="">
          <h5>Окно Регистраций</h5><br>
            <input type="phone" required placeholder="Номер Телефона"><br>
            <input type="text" required placeholder="Логин Пользователя"><br>
            <input type="text" required placeholder="Имя Пользователя"><br>
            <input type="text" required placeholder="Фамилия Пользователя"><br>
            <input type="password" required placeholder="Пароль"><br>
            <input type="email" required placeholder="Электронная Почта"><br>
            <input type="submit" required placeholder="Войти" disabled>
          </form>
          <a href="#" class="close">Закрыть окно</a>
        </div>
      </div>
      <div class="zat_okno">
        <a href="#zatemnenie">Войти</a>
      </div> -->


      <div class="administration">
          <h5>Панель Админиcтратора</h5> 
          <center><h6>Таблица Заказов Пользователей</h6></center>
          <br>
          <div class="table_wrap">
            <div class="container_table mtb">
              <div class="table-responsive">
                <table class="user_table">
                  <thead>
                    <tr>
                      <th>Номер</th>
                      <th>Полное Имя</th>
                      <th>Элетронная Почта</th>
                      <th>Номер Телефона</th>
                      <th>Название Торта</th>
                      <th>Категория Торта</th>
                      <th>Количество Заказов</th>
                      <th>Время Отправки Заказа</th>
                      <!-- <th>Дата Заказа</th> -->
                      <th>Вся Скидка</th>
                      <th>Цена Всех Заказов</th>
                      <th>Удалить Заказ</th>
                      <!-- <th>Местонахождение</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td data-label="Полное имя">Елсуков Родион</td>
                      <td data-label="Электронная Почта">Redgeis2003@mail.ru</td>
                      <td data-label="Номер Телефона">+79536422346</td>
                      <td data-label="Название Торта">Меремантный Торт</td>
                      <td data-label="Категория Торта">Шоколадные Торты</td>
                      <td data-label="Количество Заказов">4</td>
                      <td data-label="Время Отправки Заказа">13 Ноября 22:00</td>
                      <!-- <td data-label="Дата Заказа">15 Ноября 9:00</td> -->
                      <td data-label="Вся Скикдка">1241 руб</td>
                      <td data-label="Цена Заказа">4524 Руб</td>
                      <td data-label="Удаление Заказа">Удалить</td>
                      <!-- <td>Горно-Алтайск Улица Советская 21</td> -->
                    </tr>
                    <tr>
                      <td>1</td>
                      <td data-label="Полное имя">Елсуков Родион</td>
                      <td data-label="Электронная Почта">Redgeis2003@mail.ru</td>
                      <td data-label="Номер Телефона">+79536422346</td>
                      <td data-label="Название Торта">Меремантный Торт</td>
                      <td data-label="Категория Торта">Шоколадные Торты</td>
                      <td data-label="Количество Заказов">4</td>
                      <td data-label="Время Отправки Заказа">13 Ноября 22:00</td>
                      <!-- <td data-label="Дата Заказа">15 Ноября 9:00</td> -->
                      <td data-label="Вся Скикдка">1241 руб</td>
                      <td data-label="Цена Заказа">4524 Руб</td>
                      <td data-label="Удаление Заказа">Удалить</td>
                      <!-- <td>Горно-Алтайск Улица Советская 21</td> -->
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <center><h6>Добавление Продукций</h6></center>
          <form action="Catalog.Php" method="POST">
            <div class="title_add">
              <input class="textarea_max" type="text" placeholder="Название Торта" name="" id="">
            </div>
            <div class="title_add">
              <input class="textarea_max" type="text" placeholder="Цена Торта" name="" id="">
            </div>
            <div class="title_add">
              <input class="textarea_max" type="text" placeholder="Скидка Торта" name="" id="">
            </div>
            <div class="description_add">
              <textarea class="textarea_max" name="textarea_max" placeholder="Описание Торта" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="sostav_description_add">
              <textarea class="textarea_max" name="textarea_max" placeholder="Состав Торта" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <p>Фотографию Торта</p>
            <div class="block_img_add">
              <input type="file" class="photo_block" name="photo_block" id="file" width="300px" name="" id="">
            </div>
            <p>Выбрать Категорию</p>
            <input type="submit" class="button">
          </form>
          <div class="block_mobile_okno">
              <center>
                <div class="zat_okno2">
                  <a href="#zatemnenie">Регистрация</a>
                </div>
            </div>
            <div class="block_mobile_okno">
              <center>
                <div class="zat_okno2">
                  <a href="#zatemnenie2">Войти</a>
                </div>
              </center>
            </div>
      </div>
    </div>
    </center>

    <div class="footer_size">
      <div id="footer">
        <div class="production">
          <div class="logo_title">
            <a href="../Main.Php"><img class="logo_title_img" src="../Assets/Icons/Иконки Дополнительные/Главная Икона Сайта.png" alt="Main_Cake"></a>
          </div>
          <p>© 2021 CakesToOrder</p>
          <p><a class="politic_confidentional" href="#">Политика Кофиденциальности</a></p>
        </div>
        <div class="production">
          <p class="parag_er">Продукция</p>
          <ul class="ul_cakes">
            <li class="ul_cakes_li"><a href="Catalog.Php">Шоколадные Торты</a></li>
            <li class="ul_cakes_li"><a href="Catalog.Php">Сливочные Торты</a></li>
            <li class="ul_cakes_li"><a href="Catalog.Php">Бисквитные Торты</a></li>
            <li class="ul_cakes_li"><a href="Catalog.Php">Медовые Торты</a></li>
          </ul>
        </div>
        <div class="production">
          <p class="parag_er">О Нас</p>
          <ul class="ul_cakes">
            <li class="ul_cakes_li"><a href="Raiting.Php">Рейтинг</a></li>
            <li class="ul_cakes_li"><a href="About_The_Project.Php">О Проекте</a></li>
            <li class="ul_cakes_li"><a href="Contacts.Php">Контакты</a></li>
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
</html>

