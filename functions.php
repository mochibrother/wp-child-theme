<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_scripts' );
function enqueue_child_scripts() {
   // parent
   wp_enqueue_style( 'mochi-brother-parent-style', get_template_directory_uri() . '/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'mochi-brother-parent-css', get_template_directory_uri() . '/dist/main.css', array(), _S_VERSION );
	wp_style_add_data( 'mochi-brother-parent-style', 'rtl', 'replace' );
   wp_enqueue_script( 'mochi-brother-parent-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mochi-brother-parent-js', get_template_directory_uri() . '/dist/bundle.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
  
   // child
   wp_enqueue_style( 'mochi-brother-child-style', get_stylesheet_directory_uri() . '/dist/main.css', array(), _S_VERSION );
   wp_enqueue_script( 'mochi-brother-child-js', get_stylesheet_directory_uri() . '/dist/bundle.js', array(), _S_VERSION, true );
}

// add_action( 'widgets_init', 'mochi_brother_child_widgets_init' );
// function mochi_brother_child_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Footer', 'mochi-brother-child' ),
// 			'id'            => 'footer-widget',
// 			'description'   => esc_html__( 'Add widgets here.', 'mochi-brother-child' ),
// 			// 'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			// 'after_widget'  => '</section>',
// 			// 'before_title'  => '<h2 class="widget-title">',
// 			// 'after_title'   => '</h2>',
// 		)
// 	);
// }
