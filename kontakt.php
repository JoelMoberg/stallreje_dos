<!DOCTYPE html>
<html>

  <?php
  /*
  Template Name: Nyheter
  */
  get_header(); ?>
  <body>
    <?php include 'meny.php' ?>
    <div id="page-wrapper" class="background-gradient">
      <div id="content-wrapper">
          <div id="news">
            <div class="news-item-full desktop-half">
              <h1 class="post_title">Kontakt</h1>
              <p>Street 12</p>
              <p>Area</p>
              <p>E-post: email@email.com</p>
              <p> Tel: 070-700 00 00</p>
            </div>
          </div>
      </div>
    </div>

    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
  </body>
</html>
