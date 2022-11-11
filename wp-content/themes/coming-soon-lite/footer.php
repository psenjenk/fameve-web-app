<?php
/**
 * The template for displaying the footer
 * @package Coming Soon Lite
 * @subpackage coming-soon-lite
 * @since 1.0
 * @version 0.1
 */

?>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="copyright"> 
				<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
			</div>
		</footer>
		<?php if (get_theme_mod('coming_soon_lite_show_back_totop',true) != ''){ ?>
			<button role="tab" class="back-to-top"><span class="back-to-top-text"><?php echo esc_html('Top', 'coming-soon-lite'); ?></span></button>
		<?php }?>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>