<?php
  //$connection = mysqli_connect("localhost","root","","database");
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  if(isset($_POST['sab']) && isset($_POST['name1']) && $_POST['name1'] != ""&& isset($_POST['phone1']) && $_POST['phone1'] != ""){
    $post1 = htmlspecialchars($_POST['name1']);
    $phone1 = htmlspecialchars($_POST['phone1']);
    $content = $post1 .  $phone1;
    mail("salemarket67@gmail.com", "Тема сообщения", $content);
  }

  if(isset($_POST['sab2']) && isset($_POST['name2']) && $_POST['name2'] != ""&& isset($_POST['phone2']) && $_POST['phone2'] != ""){
    $post2 = htmlspecialchars($_POST['name2']);
    $phone2 = htmlspecialchars($_POST['phone2']);
    $content = $post2 ." ". $phone2;
    mail("salemarket67@gmail.com", "Тема сообщения", $content);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Колонка JBL Charge 2+</title>
</head>
<body>


  <header>
    <div class="container">
      <div class="row">
    <div class="header-top">
        <div class="header-top-left">
            <div class="header-top-left-logo">
              <div class="header-top-left-logo">
                <img src="img/logo1.jpg" alt="Image n1">
              </div>
              <div class="header-top-left-name">
                <h1>Консортиум</h1>
                <p>Юридична компанія</p>
              </div>
            </div>
            <p class="white">Створюй та розвивай свій бізнес разом з нами</p>
        </div>
        <div class="header-top-right">
          <h1>Контакти</h1>
          <h3>тел. (093) 000-00-00</h3>
          <h3>     (093) 000-00-00</h3>
          <h3>     (093) 000-00-00</h3>
          <p>email:000@gmail.com</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div class="header-bottom">
      <div>
        <a href="#">ПРО НАС</a>
      </div>
      <div>
        <a href="#">ПОСЛУГИ</a>
      </div>
      <div>
        <a href="#">ЦІНИ</a>
      </div>
      <div>
        <a href="#">ВІДГУКИ ТА ОНЛАЙН-КОНСУЛЬТАЦІЇ</a>
      </div>
    </div>
  </div>
</div>
  </header>

  <section class="section-content">

  <div class="sidebar">
  <p class="title">Наши послуги<p>
  <h4>ВІДДІЛ РОБОТИ З СУБ’ЄКТАМИ ГОСПОДАРЮВАННЯ</h4>
  <p>Надання реєстраційних послуг ФОП</p>
  <ul>
  <li>реєстрація ФОП</li>
  <li>перереєстрація ФОП (внесення змін)</li>
  <li>припинення діяльності ФОП (ліквідація)</li>
  </ul>
  <p>Надання реєстраційних послуг ТОВ</p>
  <ul>
  <li>реєстрація ТОВ</li>
  <li>перереєстрація ТОВ (внесення змін)</li>
  <li>припинення діяльності ТОВ (ліквідація)</li>
  </ul>
  <p>Надання реєстраційних послуг для інших суб’єктів господарювання</p>
  <p>Надання інших реєстраційних послуг</p>
  <ul>
  <li>зміна системи оподаткування</li>
  <li>постановка на облік як платника ПДВ</li>
  <li>постановка на облік як платника єдиного податку</li>
  <li>отримання витягів (з ЄДР, платника Єдиного податку та платника ПДВ)</li>
  <li>отримання довідки з Державної служби статистики</li>
  </ul>
  <h4>ВІДДІЛ ЛІЦЕНЗІЙНОЇ РОБОТИ</h4>
  <ul>
  <li>Ліцензія на роздрібну торгівлю алкогольними напоями</li>
  <li>Ліцензія на роздрібну торгівлю тютюновими виробами</li>
  <li>Ліцензія на перевезення пасажирів</li>
  <li>Ліцензія на медичну практику</li>
  <li>Реєстрація касового апарату (РРО )</li>
  </ul>
  <h4>ВІДДІЛ ЮРИДИЧНОГО СУПРАВОДЖЕННЯ БІЗНЕСУ</h4>

  <h4>ВІДДІЛ НАДАННЯ ПРАВОВОЇ ДОПОМОГИ</h4>
  <li>надання консультацій</li>
</div>

      <div class="section-content-text">
    <div class="section-content-text-department-lisence">ВІДДІЛ НАДАННЯ ПРАВОВОЇ ДОПОМОГИ</div>
    <p class="title-lisence">Досить часто в повсякденному житті виникає потреба у професійній юридичній допомозі. Прикладів можна навести безліч: Ви бажаєте придбати квартиру чи іншу нерухомість, і хочете впевнитися в надійності забудовника чи продавця; Ви бажаєте укласти шлюб, але хочете знати як зміниться Ваше життя в правовому сенсі (які у Вас виникнуть права та обов'язки); Ви бажаєте переконатися, що договір, який Вам пропонують укласти, дійсно відповідає Вашим інтересам, тощо. </p>
    <p class="title-lisence">Юристи нашої компанії мають чималий досвід юридичної практики та допоможуть Вам розібратися у правових нюансах, які Вас цікавлять.</p>
<div class="services-title">Наша компанія надає послуги з отримання ліцензій різних видів, у тому числі:</div>
    <div class="services-block">
      <button class="services-button">ЗАМОВИТИ ПОСЛУГУ вартість 1000 грн.</button>
      <div class="services-lisence">
      <div class="services-lisence-title">АНАЛІЗ РИЗИКІВ УКЛАДЕННЯ УГОД</div>
      <div class="services-brackets">(ризики інвестування в будівництво, ризики укладення договорів з нерухомістю)</div>
      </div>
    </div>
    <div class="services-block">
      <button class="services-button">ЗАМОВИТИ ПОСЛУГУ вартість 1000 грн.</button>
      <div class="services-lisence">
      <div class="services-lisence-title">ЮРИДИЧНИЙ СУПРОВІД УКЛАДЕННЯ ДОГОВОРІВ З НЕРУХОМІСТЮ</div>
      <div class="services-brackets">(купівля-продаж, дарування, іпотека)</div>
      </div>
    </div>
   <div class="services-block">
      <button class="services-button">ЗАМОВИТИ ПОСЛУГУ вартість 300 грн.</button>
      <div class="services-lisence">РОЗРОБКА ЮРИДИЧНИХ ДОКУМЕНТІВ </div>
  </div>
  <h3>НАДАННЯ ЮРИДИЧНИХ КОНСУЛЬТАЦІЙ</h3>
  <div class="services-form">
    <div class="services-left">
      <div class="cost">БЕЗКОШТОВНО</div>
      <div class="price">0 ГРН.</div>
      <div class="services-form-content">ВІДПОВІДЬ ПРОТЯГОМ 48 ГОДИН</div>
      <div class="services-form-content">ВІДПОВІДЬ НАДАЄ ШТАТНИЙ ЮРИСТ</div>
      <div class="services-form-content">БЕЗ АНАЛІЗУ ДОКУМЕНТІВ</div>
      <div class="services-form-content">ШАБЛОННА ВІДПОВІДЬ</div>
      <span>Замовити</span>
    </div>
    <div class="services-right">
      <div class="cost">ПЛАТНО</div>
      <div class="price">450 ГРН.</div>
      <div class="services-form-content">ВІДПОВІДЬ ПРОТЯГОМ 6 ГОДИН</div>
      <div class="services-form-content">ВІДПОВІДЬ НАДАЄ ГОЛОВНИЙ ЮРИСТ</div>
      <div class="services-form-content">АНАЛІЗ НАДАНИХ ДОКУМЕНТІВ</div>
      <div class="services-form-content">ІНДИВІДУАЛЬНА КОНСУЛЬТАЦІЯ</div>
      <span>Замовити</span>
    </div>
  </div>
  </section>
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery-3.2.0.min.js"></script>
  <script src="libs/owl/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="libs/owl/owl.carousel.css">
  <script src="js/common.js"></script>
</body>
</html>
