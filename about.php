<!DOCTYPE html>
<html>
<?php
/*
Template Name: About

*/


get_header(); ?>

<body>

<?php include 'meny.php' ?>





<div class="about-wrap hr">
  <h1 class="is-center title"> Om stall Reje </h1>
<div class="pure-g">

  <div class="pure-u-1-5">
    <img class="pure-img  is-center" src="<?php bloginfo('template_directory');?>/assets/IMG_8626.jpg" >
  </div>

    <div class="content pure-u-3-5 aboutText">

        <?php
          $page = get_page_by_title('om Stall reje');
          $content = apply_filters('the_content', $page->post_content);
          echo $content;
          ?>

    </div>

    <div class="pure-u-1">
      <div class="pure-u-1-5"></div><div class="pure-u-3-5"><img class="" style="width: 100%; heigth:400px; " src="<?php bloginfo('template_directory');?>/assets/bana_png.png"></div>
    </div>
    <div class="pure-u-1-5"></div>
    <div class="content white pure-u-3-5 about" style="margin-bottom: 2em;">


        <?php
          $page = get_page_by_title('omreje2');
          $content = apply_filters('the_content', $page->post_content);
          echo $content;
          ?>

    </div>

    <div class="pure-u-1-5">
      <img class="pure-img  is-center" src="<?php bloginfo('template_directory');?>/assets/helenarygg.jpg">
    </div>

</div>






<!-- end content-wrap in footer -->

<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
</body>
</html>
