<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for getting started notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Political
 * @subpackage Patterns_Political/Patterns_Political_Intro
 */
?>
<div id="patterns-political-gsn" class="updated notice-info patterns-political-gsn at-pos">
	<button class="patterns-political-gsn-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-political' ); ?>
	</button>
	<div class="patterns-political-gsn-container at-flx at-gap at-p">
		<img class="patterns-political-gsn-screenshot at-w" src="<?php echo esc_url( PATTERNS_POLITICAL_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Political', 'patterns-political' ); ?>" />
		<div class="patterns-political-gsn-notice">
			<h2>
				<?php
				printf(
					/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
					esc_html__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer, please make sure you visit our %2$swelcome page%3$s.', 'patterns-political' ),
					'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>',
					'<a href="' . esc_url( menu_page_url( PATTERNS_POLITICAL_THEME_NAME, false ) ) . '">',
					'</a>'
				);
				?>
			</h2>
			<?php
			$plugin_names = patterns_political_get_plugin_names();
			if ( $plugin_names ) {
				?>
				<p>
					<?php
					$plugin_count = count( explode( ', ', $plugin_names ) );
					printf(
						/* translators: %s: singular/plural . */
						esc_html__( 'Clicking the button below will install and activate the following %s:', 'patterns-political' ),
						$plugin_count > 1 ? esc_html__( 'plugins', 'patterns-political' ) : esc_html__( 'plugin', 'patterns-political' )
					);
					echo ' ';
					echo esc_html( $plugin_names );
					?>
				</p>
				<?php
			}
			?>
			<button class="patterns-political-btn-primary button button-primary button-hero patterns-political-install-plugins">
				<?php esc_html_e( 'Get started with Patterns Political', 'patterns-political' ); ?>
			</button>
		</div>
	</div>
</div>
