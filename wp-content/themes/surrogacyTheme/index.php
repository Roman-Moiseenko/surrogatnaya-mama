<?php
/**
 * The main template file
 * @package WordPress
 * @subpackage BadJohnny
 * @since BadJohnny 1.0
 */
///Страница Блога - Каталог статей !!!!!!
get_header(); ?>

	<div id="primary" class="site-content content-blog">
		<div id="content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php badjohnny_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h2 class="entry-title"><?php _e( 'No posts to display' ); ?></h2>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.'), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'badjohnny' ); ?></h2>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>