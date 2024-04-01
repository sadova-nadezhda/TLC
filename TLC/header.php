<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Главная</title>
  <?php wp_head(); ?>
</head>

<body>

<header class="header">
  <div class="container">
    <div class="header__container">
      <div class="header__secondary header__row">
        <a href="#" class="header__logo logo">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo">
        </a>
        <div class="header__box">
          <!-- <select name="" id="" class="header__lang" onchange="window.location.href = this.value;">
            <option value="/" selected>Ru</option>
            <option value="/en/">En</option>
          </select> -->
          <?php echo do_shortcode( '[gtranslate]' ); ?>
          <a class="header__mail" href="mailto:info@tlcgroup.kz">info@tlcgroup.kz</a>
          <a class="header__tel" href="tel:+77071803222">+7 707 180 32 22</a>
        </div>
      </div>
      <div class="header__main header__row">
        <nav class="header__nav">
          <ul class="header__menu menu">
            <li class="menu__item"><a href="#services">Услуги</a></li>
            <li class="menu__item"><a href="#about">О компании</a></li>
            <li class="menu__item"><a href="#partners">Партнеры</a></li>
            <li class="menu__item"><a href="#contacts">Контакты</a></li>
          </ul>
        </nav>
        <a class="header__call" href="">Заказать звонок</a>
        <div class="header__burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
</header>
