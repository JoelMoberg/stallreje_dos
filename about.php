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
          <div class="about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg')"></div>
          <div class="about-text">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper justo id malesuada pharetra. Praesent vestibulum ante turpis, eget eleifend ex porttitor ut.
              Etiam consectetur, ex ac dictum posuere, tortor lorem luctus velit, id tincidunt metus nisi dignissim lacus.
              Vestibulum viverra blandit neque, ut dignissim est ullamcorper ut.
              Nam fringilla neque facilisis lorem gravida, quis pulvinar ipsum molestie. Proin ornare sit amet ligula id tristique.
            </p>
              <?php
                $page = get_page_by_title('om Stall reje');
                $content = apply_filters('the_content', $page->post_content);
                echo $content;
                ?>
          </div>
        </section>
        <section>

          <div class="about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg')"></div>
          <div class="about-text">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper justo id malesuada pharetra. Praesent vestibulum ante turpis, eget eleifend ex porttitor ut.
              Etiam consectetur, ex ac dictum posuere, tortor lorem luctus velit, id tincidunt metus nisi dignissim lacus.
              Vestibulum viverra blandit neque, ut dignissim est ullamcorper ut.
              Nam fringilla neque facilisis lorem gravida, quis pulvinar ipsum molestie. Proin ornare sit amet ligula id tristique.
            </p>
              <?php
                $page = get_page_by_title('om Stall reje');
                $content = apply_filters('the_content', $page->post_content);
                echo $content;
                ?>
          </div>
        </section>

        <section>

          <div class="about-img" style="background: url('<?php bloginfo('template_directory');?>/assets/rider.jpeg')"></div>
          <div class="about-text">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper justo id malesuada pharetra. Praesent vestibulum ante turpis, eget eleifend ex porttitor ut.
              Etiam consectetur, ex ac dictum posuere, tortor lorem luctus velit, id tincidunt metus nisi dignissim lacus.
              Vestibulum viverra blandit neque, ut dignissim est ullamcorper ut.
              Nam fringilla neque facilisis lorem gravida, quis pulvinar ipsum molestie. Proin ornare sit amet ligula id tristique.
            </p>
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
