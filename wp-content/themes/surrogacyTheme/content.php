<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage BadJohnny
 * @since BadJohnny 1.0
 */

//Страница блога-поста
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (is_sticky() && is_home() && !is_paged()) : ?>
        <div class="featured-post">
            <?php _e('Featured post', 'badjohnny'); ?>
        </div>
    <?php endif; ?>
    <header class="entry-header">
        <?php if (!post_password_required() && !is_attachment()) :
            the_post_thumbnail();
        endif; ?>

        <?php if (is_single()) : ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php else : ?>
            <h3 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h3>
        <?php endif; // is_single() ?>

        <div class="entry-meta">
            <?php //badjohnny_entry_meta(); ?>
        </div>
    </header><!-- .entry-header -->

    <?php if (is_search()) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php
            if (!is_single()) {
                if ($post->post_excerpt) {
                    the_excerpt();
                } else {
                    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'badjohnny'));
                }
            } else {
                the_content();
            }
            ?>
            <?php wp_link_pages(array('before' => '<div class="page-links">' . __('Pages:', 'badjohnny'), 'after' => '</div>')); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>
    <p class="tags-blog"><?php TagsView(); ?></p>
    <!-- Footer -->
    <div class="entry-meta" style="padding-top: 24px">
        <?php if (comments_open()) : ?>
            <div class="comments-link">
                <?php comments_popup_link('<span class="leave-reply">' . __('Leave a reply', 'badjohnny') . '</span>', __('1 Reply', 'badjohnny'), __('% Replies', 'badjohnny')); ?>
            </div><!-- .comments-link -->
        <?php endif; // comments_open() ?>
        <?php edit_post_link(__('Edit', 'badjohnny'), '<div class="edit-link">', '</div>'); ?>
        <?php if (is_singular() && get_the_author_meta('description') && is_multi_author()) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
            <div class="author-info">
                <div class="author-avatar">
                    <?php
                    /** This filter is documented in author.php */
                    $author_bio_avatar_size = apply_filters('badjohnny_author_bio_avatar_size', 68);
                    echo get_avatar(get_the_author_meta('user_email'), $author_bio_avatar_size);
                    ?>
                </div><!-- .author-avatar -->
                <div class="author-description">
                    <h2><?php printf(__('About %s', 'badjohnny'), get_the_author()); ?></h2>
                    <p><?php the_author_meta('description'); ?></p>
                    <div class="author-link">
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author">
                            <?php printf(__('View all posts by %s <span class="meta-nav">&rarr;</span>', 'badjohnny'), get_the_author()); ?>
                        </a>
                    </div><!-- .author-link	-->
                </div><!-- .author-description -->
            </div><!-- .author-info -->
        <?php endif; ?>
    </div><!-- .entry-meta -->
</article><!-- #post -->
