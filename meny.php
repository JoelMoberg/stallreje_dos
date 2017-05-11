<div id="menu" class="pure-menu pure-menu-horizontal">
  <a href="/"><img class="pure-menu-heading" id="fadeInLogo" src="<?php bloginfo('template_directory');?>/assets/Stall_Reje_main.png" style="width: 180px" href="/"></a>
    <ul class="pure-menu-list navigation">
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
      </ul>
      <div class="hamburger" id="toggleMenu"><i class="fa fa-bars" aria-hidden="true" style="font-size: 32px;"></i></div>
</div>

<div class="responsiveMenu is-center">
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
        </ul>
      </div>
      <a href="javascript:void(0);" class="close" id="close"><i class="fa fa-times" aria-hidden="true" style="font-size: 64px;"></i></a>

    </div>
