<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (!is_page_template('page-templates/front-page.php')) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages(array('before' => '<div class="page-links">' . __('Pages:', 'badjohnny'), 'after' => '</div>')); ?>
    </div><!-- .entry-content -->
    <?php edit_post_link(__('Edit', 'badjohnny'), '<span class="edit-link">', '</span>'); ?>
</article><!-- #post -->
