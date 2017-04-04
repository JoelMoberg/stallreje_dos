<?php get_header(); ?>



<?php include 'meny.php' ?>


<div class="splash-container">
  <div class="splash">

    <img id="mainimg" src="<?php bloginfo('template_directory');?>/assets/Stall_Reje_main.png">

  </div>
</div>



<div class="content-wrap hr">
  <h1 class="is-center"> <?php the_title(); ?> </h1>

<div class="pure-g">



    <div class="content pure-u-1">


        <?php
          $page = get_page_by_title(get_the_title());
          $content = apply_filters('the_content', $page->post_content);
          echo $content;
          ?>

    </div>

</div>






<!-- end content-wrap in footer -->

<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
