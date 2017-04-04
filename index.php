<!DOCTYPE html>
<html>

  <?php
  /*
  Template Name: Nyheter
  */


  get_header(); ?>
  <body>
    <?php include 'meny.php' ?>






    <div class="content-wrap">

      <h1 class="is-center">
          <span class="nyheter">
            Nyheter
          </span>
        </h1>
      <div class="pure-g">
        <div class="pure-u-1 grey" style="margin-left: 8em; margin-right:8em; margin-bottom: 3em; padding-top: 1em;">

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



    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
  </body>
</html>
