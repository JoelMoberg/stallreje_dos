
<!--  <div class="l-box pure-u-1 pure-u-lg-1-4 is-center sidebar">

    <div class="posts pure-u-1">
      <h1 class="is-center">
          <span class="nyheter">
            Nyheter
          </span>
    </h1>


    <?php
    /*$args = array( 'numberposts' => '5' );
    $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ){
      $date = substr($recent['post_date'], 0, 10);

        printf( '<div class="pure-u-1 newsItem"><a href="%1$s">%2$s</a></div>',
             esc_url( get_permalink( $recent['ID'] ) ),
             apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
         );
         printf ($date);

    }*/
?>
  </div>

!-->
<!-- NYTT !-->

<div id="sidebar" class="pure-u-lg-1-5">
  <h1>Nyheter</h1>
  <?php
    $args = array( 'numberposts' => '5' );
    $recent_posts = wp_get_recent_posts( $args );
    foreach( $recent_posts as $recent ){
      $date = substr($recent['post_date'], 0, 10);

        printf( '<a href="%1$s"><div class="newsItem"><h2>%2$s</h2><p class="date">' . $date . '</p></div></a>',
             esc_url( get_permalink( $recent['ID'] ) ),
             apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
         );
    }
  ?>
</div>


<!-- End sidebar -->
