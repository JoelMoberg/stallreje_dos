<!DOCTYPE html>
<html>
<?php
/*
Template Name: About

*/


get_header(); ?>

<body>

<?php include 'meny.php' ?>
  <div id="page-wrapper">
    <div id="content-wrapper">
      <div class="about-section">
        <section>
          <div class="about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/PinkblackHorse.jpg')"></div>
          <div class="about-text">

              <?php
                $page = get_page_by_title('om Stall reje');
                $content = apply_filters('the_content', $page->post_content);
                echo $content;
                ?>
          </div>
        </section>
        <section>

          <div class="about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/Lindy.jpg')"></div>
          <div class="about-text">

              <?php
                $page = get_page_by_title('om Stall reje');
                $content = apply_filters('the_content', $page->post_content);
                echo $content;
                ?>
          </div>
        </section>

        <section>

          <div class="about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/HelenaPerni.jpg')"></div>
          <div class="about-text">

              <?php
                $page = get_page_by_title('om Stall reje');
                $content = apply_filters('the_content', $page->post_content);
                echo $content;
                ?>
          </div>
        </section>


      </div>



<!-- end content-wrap in footer -->

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
</body>
</html>
