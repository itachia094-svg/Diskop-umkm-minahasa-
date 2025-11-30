<?php
/**
 * Title: Section Title 1
 * Slug: patterns-political/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Political
 * @subpackage Patterns_Political/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'About Political', 'patterns-political' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","align":"full"} -->
<h2 class="wp-block-heading alignfull has-text-align-left"><?php esc_html_e( 'We Can Work Together For Create a Better Future.', 'patterns-political' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
