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



    <div class="pure-g about-section">
      <div class="pure-u-lg-1-2 pure-u-md-1  about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg')"></div>
      <div class="pure-u-lg-1-2 pure-u-md-1 pure-u-1 about-text">
          <?php
            $page = get_page_by_title('om Stall reje');
            $content = apply_filters('the_content', $page->post_content);
            echo $content;
            ?>
      </div>
    </div>

    <div class="pure-g about-section">
        <div class="pure-u-lg-1-2 pure-u-md-1 pure-u-1 about-text">
          <?php
            $page = get_page_by_title('omreje2');
            $content = apply_filters('the_content', $page->post_content);
            echo $content;
            ?>
        </div>
        <div class="pure-u-lg-1-2 pure-u-md-1 pure-u-1 about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg')"></div>
    </div>

    <div class="pure-g about-section">
      <div class="pure-u-lg-1-2 pure-u-md-1 pure-u-1 about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/boot.jpeg')"></div>
      <div class="pure-u-lg-1-2 pure-u-md-1  pure-u-1 about-text">
        <?php
          $page = get_page_by_title('omreje3');
          $content = apply_filters('the_content', $page->post_content);
          echo $content;
          ?>
      </div>
    </div>










<!-- end content-wrap in footer -->

<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
</body>
</html>
