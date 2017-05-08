<!DOCTYPE html>
<html>

  <?php
  /*
  Template Name: Nyheter
  */


  get_header(); ?>
  <body>
    <?php include 'meny.php' ?>
    <!--<div id="page-wrapper" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg'); ">!-->
    <div id="page-wrapper" class="background-gradient">

      <div id="content-wrapper">
        <div id="news">
          <?php
          if (have_posts() ) :
             while ( have_posts() ) : the_post();
              get_template_part( 'content', get_post_format() );
            endwhile;
          else :
            echo wpautop('Sorry, no posts were found.');
          endif;
            ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
  </body>
</html>
