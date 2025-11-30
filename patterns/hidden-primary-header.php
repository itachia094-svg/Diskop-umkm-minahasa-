<?php
/**
 * Title: Primary Header
 * Slug: patterns-political/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Political
 * @subpackage Patterns_Political/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"lineHeight":"0.2"}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color" style="line-height:0.2"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|accent"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1"><?php esc_html_e( 'Mon - Fri 9:00 -17:00', 'patterns-political' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->


<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"lineHeight":"0.2"}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color" style="line-height:0.2"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|accent"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="pwp-txt-dec-non has-x-small-font-size" style="line-height:1"><a href="<?php echo esc_url( 'tel:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-political' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
	
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"lineHeight":"0.2"}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color" style="line-height:0.2"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|accent"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-3.png" style="width:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="pwp-txt-dec-non has-x-small-font-size" style="line-height:1"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-political' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
	



</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
		<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-small-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
		<ul
			class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
		</ul>
	<!-- /wp:social-links -->

	<!-- wp:loginout {"fontSize":"x-small"} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">	
		
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group"> 
				<!-- wp:pattern {"slug":"patterns-political/site-identity"} /-->
				<!-- wp:pattern {"slug":"patterns-political/navigation-menu"} /-->
			</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Enroll Now', 'patterns-political' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
