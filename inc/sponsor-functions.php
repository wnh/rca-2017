<?php

function rca_gold_sponsors() {

    $args = array (
        'post_type'       => 'sponsor',
        'post_status'     => 'publish',
        'pagination'      => false,
        'order'           => 'ASC',
        'posts_per_page'  => '-1',
        'orderby'         => $instance['order_by'],
        'tax_query'       => array(
              array(
                  'taxonomy' => 'sponsor_categories',
                  'field'    => 'slug',
                  'terms'    => 'gold',
              )
          ),
    );

    $widget_target = $instance['target_blank'] == "on" ? true : false;


    $query = new WP_Query( $args );

    ?>
        <div class="gold-sponsors">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php
                $post_id = get_the_ID();
                $link = get_post_meta( $post_id, 'wp_sponsors_url', true );
                $link_target = get_post_meta( $post_id, 'wp_sponsor_link_behaviour', true );
                $post_image = get_post_meta( $post_id, 'wp_sponsors_img', true );
                $thumb = get_the_post_thumbnail( $post_id, array(200, 100) );
            ?>
            <?php if(!empty($link)) { ?>
              <a class="sponsor" href="<?php echo $link; ?>">
                <?php echo $thumb ?>
              </a>
            <?php } else { ?>
                <?php echo $thumb ?>
            <?php }; ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php
}
