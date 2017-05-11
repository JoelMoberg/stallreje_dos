<!DOCTYPE html>
<html>

  <?php
  /**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */
  get_header(); ?>
  <body>
    <?php include 'meny.php' ?>
    <!--<div id="page-wrapper" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg'); ">!-->
    <div id="page-wrapper" class="background-gradient">
      <div id="content-wrapper" >
          <div id="news">
            <div class="news-item-full desktop-half">
              <h1 class="post_title">Detta var lite pinsamt.</h1>
              <p> Det verkar som att det inte finns något på denna sidan.<p>
              <a href="/"><p>Gå tillbaka till hem <p></a>
            </div>
          </div>
      </div>
    </div>
    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
  </body>
</html>
