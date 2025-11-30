<?php
/**
 * Title: Card 1
 * Slug: patterns-political/card-1
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Political
 * @subpackage Patterns_Political/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px","style":"solid","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"borderColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-secondary-border-color" style="border-style:solid;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	
<!-- wp:image {"width":"80px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|accent"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-7.png" style="width:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"default"} -->
<h5 class="wp-block-heading has-text-align-center has-default-color has-text-color"><?php esc_html_e( 'Economy', 'patterns-political' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->
