<?php
/**
 * Title: Featured Section 3
 * Slug: patterns-political/featured-section-3
 * Categories: text, media, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Political
 * @subpackage Patterns_Political/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"gradient":"gray-fade-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-fade-1-gradient-background has-background"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":""}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"x-small"} -->
				<p class="has-text-align-left has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Join Campaigns', 'patterns-political' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"textAlign":"left","align":"full"} -->
				<h2 class="wp-block-heading alignfull has-text-align-left"><?php esc_html_e( 'Upcoming Events', 'patterns-political' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"250"}},"fontSize":"medium"} -->
			<p class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:250"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates', 'patterns-political' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-political' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"left","level":5} -->
					<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Human Rights', 'patterns-political' ); ?></h5>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"left"} -->
					<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis', 'patterns-political' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"left","level":5} -->
					<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Women Leadership', 'patterns-political' ); ?></h5>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"left"} -->
					<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis', 'patterns-political' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

			<!-- wp:pattern {"slug":"patterns-political/card-2"} /-->
			<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
			<div class="wp-block-group" style="border-radius:5px">
				<!-- wp:image {"width":"250px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","bottomLeft":"5px"}}}} -->
				<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" style="border-top-left-radius:5px;border-bottom-left-radius:5px;aspect-ratio:1;object-fit:cover;width:250px"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":{"topRight":"5px","bottomRight":"5px"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide has-default-background-color has-background" style="border-top-right-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":5,"align":"wide"} -->
				<h5 class="wp-block-heading alignwide"><?php esc_html_e( 'Lets meet and help for education in texas', 'patterns-political' ); ?></h5>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'patterns-political' ); ?></p>
				<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
			<div class="wp-block-group" style="border-radius:5px">
				<!-- wp:image {"width":"250px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","bottomLeft":"5px"}}}} -->
				<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" style="border-top-left-radius:5px;border-bottom-left-radius:5px;aspect-ratio:1;object-fit:cover;width:250px"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":{"topRight":"5px","bottomRight":"5px"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide has-default-background-color has-background" style="border-top-right-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":5,"align":"wide"} -->
				<h5 class="wp-block-heading alignwide"><?php esc_html_e( 'Lets meet for protecting eco system', 'patterns-political' ); ?></h5>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"left"} -->
				<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'patterns-political' ); ?></p>
				<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
