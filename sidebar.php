<div id="sidebar" class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-5 is-center" >
  <h1>Nyheter</h1>
  <?php
    $args = array( 'numberposts' => '3' );
    $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ){
      $date = substr($recent['post_date'], 0, 10);

        printf( '<a href="%1$s"><div class="newsItem"><h2>%2$s</h2></div></a>',
             esc_url( get_permalink( $recent['ID'] ) ),
             apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
         );
    }
  ?>
</div>
<!-- End sidebar -->
