<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
</head>
<body>
<nav id="nav" class="nav">
    <button class="menu">
      <em class="hamburger"></em>
    </button>

    <div class="brand">
      <a  href="<?php echo get_home_url(); ?>">
        <img class="logo" src="<?php echo get_theme_file_uri('/img/logo-light.png') ?>;" alt="Logo">
      </a>
    </div>
    <ul class="navbar">
        <li>
            <a href="<?php echo get_home_url() ?>">Головна</a>
        </li>
        <li>
            <a href="portfolio.html">Портфоліо</a>
        </li>
        <li>
            <a href="price.html">Ціна</a>
        </li>
        <li>
            <a href="<?php echo site_url('/blog'); ?>">Блог</a>
        </li>
        <li>
            <a href="review.html">Відгуки</a>
        </li>
        <li>
            <a href="about.html">Контакти</a>
        </li>
    </ul>
  </nav>