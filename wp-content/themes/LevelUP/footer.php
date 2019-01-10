		</div><!-- /boldthemes_content -->
<?php

if ( EventimTheme::$boldthemes_has_sidebar ) {
	echo '<aside class="btSidebar">';
		dynamic_sidebar( 'primary_widget_area' );
	echo '</aside>';					
}

?> 
	</div><!-- /contentHolder -->
</div><!-- /contentWrap -->

<?php

if ( boldthemes_get_option( 'footer_dark_skin' ) ) {
	echo '<footer class="btDarkSkin">';
} else {
	echo '<footer>';
}

$custom_text_html = '';
$custom_text = boldthemes_get_option( 'custom_text' );
if ( $custom_text != '' ) {
	$custom_text_html = '<p class="copyLine">' . $custom_text . '</p>';
}

if ( is_active_sidebar( 'footer_widgets' ) ) {
	echo '
	<section class="boldSection btSiteFooterWidgets gutter topSpaced bottomSemiSpaced btDoubleRowPadding">
		<div class="port">
			<div class="boldRow" id="boldSiteFooterWidgetsRow">';
			dynamic_sidebar( 'footer_widgets' );
	echo '	
			</div>
		</div>
	</section>';
}

?>
<?php if ( $custom_text_html != '' || has_nav_menu( 'footer' )) { ?>
	<section class="boldSection gutter btSiteFooter btGutter">
		<div class="port">
			<div class="boldRow">
				<div class="rowItem btFooterCopy col-md-6 col-sm-12 btTextLeft">
					<?php echo wp_kses_post( $custom_text_html ); ?>
				</div><!-- /copy -->
				<div class="rowItem btFooterMenu col-md-6 col-sm-12 btTextRight">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => 'ul', 'depth' => 1, 'fallback_cb' => false ) ); ?>
				</div>
			</div><!-- /boldRow -->
		</div><!-- /port -->
	</section>
<?php } ?>

</footer>

</div><!-- /pageWrap -->

<?php

wp_footer();

?>
</body>
</html>