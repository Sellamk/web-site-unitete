<?php
/**
 * Template part for displaying single posts.
 *
 * @package Total
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
<!-- SELLATHURAI FIXME -->
<div class="single-entry-meta">
    <span class="entry-date published updated">
        <span class="ht-day11"><?php echo current_time('j-F-Y'); ?></span>
    </span>
    
    <span class="byline"> by 
        <span class="author vcard">
            <a class="url fn n" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                <?php echo get_the_author(); ?>
            </a>
        </span>
    </span>
    
    <a href="<?php comments_link(); ?>">
        <i class="far fa-comment" aria-hidden="true"></i> 
        <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
    </a>
</div>
     <!--   <div class="single-entry-meta"> -->
	    <?php //total_posted_on(); 

		//echo total_posted_on() ;

?>
       <!--  </div> --> <!-- .entry-meta -->

        <?php
        $total_single_display_featured_image = get_theme_mod('total_single_display_featured_image');
        if ($total_single_display_featured_image && has_post_thumbnail()) {
            echo '<div class="single-featured-img">';
            the_post_thumbnail('full');
            echo '</div>';
        }

        the_content();
        ?>

        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'total'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
