
<!--<div class="header">

  <div class="home-menu pure-menu pure-menu-horizontal">
    <img class="pure-menu-heading" id="fadeInLogo" src="<?php //bloginfo('template_directory');?>/assets/Stall_Reje_main.png" style="width: 180px">
    <ul class="pure-menu-list" >
      <?php
      /*$args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'hierarchical' => 1,
        'exclude' => '79',
        'child_of' => 0,
        'parent' => -1,
        'exclude_tree' => '',
        'number' => '',
        'offset' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
        );

        $pages = get_pages($args);
        foreach($pages as $page){
          echo '<li class="pure-menu-item pure-menu-selected"><a href="'.get_page_link( $page->ID).'" class="pure-menu-link">'.$page->post_title.'</a></li>';
        }*/
        ?>

  </div>
</div>!-->

<!-- NYTT !-->
<div id="menu" class="pure-menu pure-menu-horizontal">
  <img class="pure-menu-heading" id="fadeInLogo" src="<?php bloginfo('template_directory');?>/assets/Stall_Reje_main.png" style="width: 180px">
  <div class="vertical-middle">
    <ul class="pure-menu-list navigation" >
      <?php
        $args = array(
          'sort_order' => 'ASC',
          'sort_column' => 'menu_order',
          'hierarchical' => 1,
          'exclude' => '79 109 120 118 119',
          'child_of' => 0,
          'parent' => -1,
          'exclude_tree' => '',
          'number' => '',
          'offset' => 0,
          'post_type' => 'page',
          'post_status' => 'publish'
          );
          $pages = get_pages($args);
          foreach($pages as $page){
            echo '<li class="pure-menu-item"><a href="'.get_page_link( $page->ID).'">'.$page->post_title.'</a></li>';
          }
        ?>
          <a href="javascript:void(0);" class="hamburger" onclick="myFunction()">&#9776;</a>
      </ul>
    </div>
</div>
