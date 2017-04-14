<!--<!DOCTYPE html>
<html>

  <?php
  /*
  Template Name: Fron page
  */



  //get_header(); ?>
  <body>
    <div class="splash-container">
      <div class="splash">

        <img id="mainimg" src="<?php //bloginfo('template_directory');?>/assets/Stall_Reje_main.png">

      </div>
    </div>
    <?php //include 'meny.php' ?>

    <div class="content-wrap">
      <div class="pure-g">
        <div class="pure-u-3-4 instaPadding">

            <h1 class="is-center hover"> Senast från instagram </h1>
            <div id="instafeed" class="pure-g">
          </div>
      </div>

  <?php //get_sidebar(); ?>

  </div>

    <?php //get_footer(); ?>
    <script type="text/javascript" src="<?php //bloginfo('template_directory');?>/js/main.js"></script>

  </body>
</html>!-->

<!-- HELT NYTT !-->
<!DOCTYPE html>
<html>
  <?php
  /*Template Name: Front page*/
  get_header();
  ?>
  <body>
    <div id="splash-container">
      <div id="splash-img-container">
        <img id="mainimg" src="<?php bloginfo('template_directory');?>/assets/Stall_Reje_main.png">
      </div>
    </div>
    <div class="spacer"></div>
    <?php include 'meny.php' ?>
    <div id="page-wrapper">
      <div id="content-wrapper">
        <div class="pure-g">
          <div class="pure-u-3-4" id="instagramFeed">
            <h1>Bilder från Instagram</h1>
            <div id="instafeed" class="pure-g"></div>
          </div>
          <div class="pure-u-1-4">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
  </body>
</html>
