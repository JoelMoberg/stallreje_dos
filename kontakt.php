<!DOCTYPE html>
<html>
<?php
/*
Template Name: Kontakt

*/


get_header(); ?>

<body>

<?php include 'meny.php' ?>





<div class="about-wrap hr">
  <h1 class="is-center title"> Om stall Reje </h1>
<div class="pure-g">
  <div class="pure-u-1-4"> </div>
  <div class="pure-u-1-2 kontakt">
  <form class="pure-form" style="width: 100%;">
    <fieldset class="pure-group">
      <input type="text" class="pure-input-1-2" placeholder="Namn">
      <input type="text" class="pure-input-1-2" placeholder="Email">
    </fieldset>

    <fieldset class="pure-group">
      <input type="text" class="pure-input-1-2" placeholder="Ämne">
      <textarea class="pure-input-1-2" placeholder="Meddelande" style="height: 12em;"></textarea>
    </fieldset>

    <button type="submit" class="pure-button pure-input 1-2 pure-button-primary "> Skicka </button>
  </form>
</div>
<div class="pure-u-1-4"></div>

</div>






<!-- end content-wrap in footer -->

<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
</body>
</html>
