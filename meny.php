
<div class="header">

  <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
    <img class="pure-menu-heading" id="fadeInLogo" src="<?php bloginfo('template_directory');?>/assets/Stall_Reje_main.png" style="width: 180px">
    <ul class="pure-menu-list" >
      <?php
      $args = array(
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
        }
        ?>

  </div>
</div>
