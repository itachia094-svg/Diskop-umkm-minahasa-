<?php
/**
 * Title: Card 2
 * Slug: patterns-political/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Political
 * @subpackage Patterns_Political/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:image {"width":"250px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","bottomLeft":"5px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" style="border-top-left-radius:5px;border-bottom-left-radius:5px;aspect-ratio:1;object-fit:cover;width:250px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":{"topRight":"5px","bottomRight":"5px"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-default-background-color has-background" style="border-top-right-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">
	
<!-- wp:heading {"level":5,"align":"wide"} -->
<h5 class="wp-block-heading alignwide"><?php esc_html_e( 'Let’s Make Country Great with Polimark', 'patterns-political' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'patterns-political' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
