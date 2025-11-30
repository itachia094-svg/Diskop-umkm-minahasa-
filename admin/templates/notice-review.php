<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme review notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Political
 * @subpackage Patterns_Political/Patterns_Political_Intro
 */

global $current_user;
?>
<div id='patterns-political-review-notice' class="notice updated patterns-political-review-notice at-p at-pos">
	<button class="patterns-political-rn-permanent-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-political' ); ?>
	</button>
	<p>
		<?php
		printf(
		/* Translators: %1$s current user display name. */
			esc_html__(
				'Howdy, %1$s! It seems that you have been using this theme for more than 15 days. We hope you are happy with everything that the theme has to offer. If you can spare a minute, please help us by leaving a review on WordPress.org. By spreading the love, we can continue to develop new amazing features in the future!',
				'patterns-political'
			),
			'<strong>' . esc_html( $current_user->display_name ) . '</strong>'
		);
		?>
	</p>

	<div class="links">
		<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-political" class="patterns-political-rn-temporary-close patterns-political-btn-primary button-primary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-thumbs-up"></span>
			<span><?php esc_html_e( 'Sure', 'patterns-political' ); ?></span>
		</a>

		<button class="patterns-political-rn-temporary-close patterns-political-btn-secondary button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-calendar"></span>
			<span><?php esc_html_e( 'Maybe later', 'patterns-political' ); ?></span>
		</button>

		<button class="patterns-political-rn-permanent-close patterns-political-btn-default button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-smiley"></span>
			<span><?php esc_html_e( 'I already did', 'patterns-political' ); ?></span>
		</button>

		<a href="<?php echo esc_url( 'https://patternswp.com/full-site-editing-fse-themes/patterns-political' ); ?>" class="patterns-political-rn-temporary-close button-secondary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-edit"></span>
			<span><?php esc_html_e( 'Got theme support question?', 'patterns-political' ); ?></span>
		</a>
	</div>
</div>
