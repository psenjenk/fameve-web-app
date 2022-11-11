<?php
/**
 * Template for displaying search forms in coming-soon-lite
 *
 * @subpackage coming-soon-lite
 * @since 1.0
 * @version 0.1
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'coming-soon-lite' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'coming-soon-lite' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'coming-soon-lite' ); ?></button>
</form>