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
        <div class="pure-g" id="instagramFeed">
            <div id="instafeed" class="pure-g">
                <?php get_sidebar(); ?>
            </div>
        </div>

    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/frontPage.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
  </body>
</html>
