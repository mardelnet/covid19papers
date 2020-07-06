<?php
/* Template Name: Prensa */
get_header();
get_template_part( 'parts/innernav' );
?>
<div id='prensa' class="container">
<?php
    $loop = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="registro">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="pimage">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } ?>
                <div class="ptitle">
                    <h2><?php echo get_the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile;
        if (  $loop->max_num_pages > 1 ) : ?>
            <div id="nav-below" class="navigation">
                <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
                <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
            </div>
        <?php endif;
    endif;
    wp_reset_postdata();
?>
</div>
<div class="pagi">
  <?php wpex_pagination(); ?>
</div>
<?php get_footer(); ?>
