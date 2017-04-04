<!DOCTYPE html>
<html>

  <?php
  /*
  Template Name: Fron page
  */



  get_header(); ?>
  <body>
    <?php include 'meny.php' ?>
    <div class="splash-container">
      <div class="splash">

        <img id="mainimg" src="<?php bloginfo('template_directory');?>/assets/Stall_Reje_main.png">

      </div>
    </div>

    <div class="content-wrap">
      <div class="pure-g">
        <div class="pure-u-3-4 instaPadding">

            <h1 class="is-center hover"> Senast från instagram </h1>
            <div id="instafeed" class="pure-g">
          </div>
      </div>

  <?php get_sidebar(); ?>

  </div>

    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>

  </body>
</html>
