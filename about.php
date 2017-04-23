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
        <div class="pure-u-lg-1-2 pure-u-md-1 about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg')"></div>
        <div class="pure-u-lg-1-2 pure-u-md-1 about-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt lacus orci. Curabitur orci lorem, condimentum id ex sed, pharetra ullamcorper ipsum.
            Curabitur lorem risus, efficitur et pharetra consectetur, ultrices sed lacus. Aliquam mi lacus, feugiat non bibendum sed, consectetur eget sapien.
          <p>
        </div>
      </div>
      <div class="pure-g about-section">
        <div class="pure-u-lg-1-2 pure-u-md-1 about-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt lacus orci. Curabitur orci lorem, condimentum id ex sed, pharetra ullamcorper ipsum.
            Curabitur lorem risus, efficitur et pharetra consectetur, ultrices sed lacus. Aliquam mi lacus, feugiat non bibendum sed, consectetur eget sapien.
          <p>
        </div>
        <div class="pure-u-lg-1-2 pure-u-md-1 about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg')"></div>
      </div>
      <div class="pure-g about-section">
        <div class="pure-u-lg-1-2 pure-u-md-1 about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg')"></div>
        <div class="pure-u-lg-1-2 pure-u-md-1 about-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt lacus orci. Curabitur orci lorem, condimentum id ex sed, pharetra ullamcorper ipsum.
            Curabitur lorem risus, efficitur et pharetra consectetur, ultrices sed lacus. Aliquam mi lacus, feugiat non bibendum sed, consectetur eget sapien.
          <p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--<div class="pure-g">

  <div class="pure-u-1-5">
    <img class="pure-img  is-center" src="<?php bloginfo('template_directory');?>/assets/IMG_8626.jpg" >
  </div>

    <div class="content pure-u-3-5 aboutText">

        <?php
          /*$page = get_page_by_title('om Stall reje');
          $content = apply_filters('the_content', $page->post_content);
          echo $content;*/
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

</div>!-->






<!-- end content-wrap in footer -->

<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
</body>
</html>
