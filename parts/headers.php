<div class="president-trigger-search"></div>
<?php

/**
 * Retrieve an array of values to be used in the header.
 *
 * site_name
 * site_tagline
 * page_title
 * post_title
 * section_title
 * subsection_title
 * posts_page_title
 * sup_header_default
 * sub_header_default
 * sup_header_alternate
 * sub_header_alternate
 */
$spine_main_header_values = spine_get_main_header();

if ( true === spine_get_option( 'main_header_show' ) ) :

	?>
	<header class="main-header">
		<div class="header-group hgroup guttered padded-bottom short">

			<sup class="sup-header" data-section="<?php echo esc_attr( $spine_main_header_values['section_title'] ); ?>" data-pagetitle="<?php echo esc_attr( $spine_main_header_values['page_title'] ); ?>" data-posttitle="<?php echo esc_attr( $spine_main_header_values['post_title'] ); ?>" data-default="<?php echo esc_html( $spine_main_header_values['sup_header_default'] ); ?>" data-alternate="<?php echo esc_html( $spine_main_header_values['sup_header_alternate'] ); ?>"><span class="sup-header-default"><?php echo wp_kses_post( strip_tags( $spine_main_header_values['sup_header_default'], '<a>' ) ); ?></span></sup>
			<sub class="sub-header" data-sitename="<?php echo esc_attr( $spine_main_header_values['site_name'] ); ?>" data-pagetitle="<?php echo esc_attr( $spine_main_header_values['page_title'] ); ?>" data-posttitle="<?php echo esc_attr( $spine_main_header_values['post_title'] ); ?>" data-default="<?php echo esc_html( $spine_main_header_values['sub_header_default'] ); ?>" data-alternate="<?php echo esc_html( $spine_main_header_values['sub_header_alternate'] ); ?>"><span class="sub-header-default"><?php echo wp_kses_post( strip_tags( $spine_main_header_values['sub_header_default'], '<a>' ) ); ?></span></sub>

		</div>
	</header>
	<div class="president-primary-search">
		<?php get_search_form(); ?>
	</div>
	<a name="top"></a>
	<?php
endif;
