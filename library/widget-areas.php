<?php
/**
 * Register widget areas
 *
 * @package RenameMe
 * @since RenameMe 1.0.0
 */

if ( ! function_exists( 'renameme_sidebar_widgets' ) ) :
	function renameme_sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'renameme' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'renameme' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'renameme' ),
				'description'   => __( 'Drag widgets to this footer container', 'renameme' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
	}

	add_action( 'widgets_init', 'renameme_sidebar_widgets' );
endif;
