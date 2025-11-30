<?php
/**
 * Title: Hero Banner
 * Slug: patterns-political/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Political
 * @subpackage Patterns_Political/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","dimRatio":90,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":85,"minHeightUnit":"vh","contentPosition":"bottom center","metadata":{"name":"Hero Banner"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0px","right":"var:preset|spacing|30","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:0px;padding-left:var(--wp--preset--spacing--20);min-height:85vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:pattern {"slug":"patterns-political/hero-banner-content"} /-->

</div></div>
<!-- /wp:cover -->
