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
            <a href="<?php echo get_home_url() ?>"
            <?php if (get_the_ID() == 111) echo 'style="color: #e6b559;"' ?>>Головна</a>
        </li>
        <li>
            <a href="<?php echo site_url('/portfolio'); ?>"
            <?php if (is_page('portfolio') ) echo 'style="color: #e6b559;"' ?>>Портфоліо</a>
        </li>
        <li>
            <a href="<?php echo site_url('/price'); ?>"
            <?php if (is_page('price') ) echo 'style="color: #e6b559;"' ?>>Ціна</a>
        </li>
        <li>
            <a href="<?php echo site_url('/blog'); ?>"
            <?php if (get_post_type() == 'post') echo 'style="color: #e6b559;"' ?>>Блог</a>
        </li>
        <li>
            <a href="<?php echo site_url('/review'); ?>"
            <?php if (is_page('review') ) echo 'style="color: #e6b559;"' ?>>Відгуки</a>
        </li>
        <li >
            <a href="<?php echo site_url('/about-us'); ?>"
            <?php if (is_page('about-us') ) echo 'style="color: #e6b559;"' ?>>Контакти</a>
        </li>
    </ul>
  </nav>