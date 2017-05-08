<!DOCTYPE html>
<html>

  <?php
  /*
  Template Name: Nyheter
  */
  get_header(); ?>
  <body>
    <?php include 'meny.php' ?>
    <div id="page-wrapper">
      <div id="content-wrapper" style="height: 30vw; background: url('<?php bloginfo('template_directory');?>/assets/boot.jpeg')">
          <div id="news">
            <div class="news-item-full desktop-half">
              <h1 class="post_title">Kontakt</h1>
              <p> Calle Callesson <p>
              <p> 070-070 43 53 53<p>
              <p> bergshamra <p>
            </div>
          </div>
      </div>
    </div>

    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
  </body>
</html>
