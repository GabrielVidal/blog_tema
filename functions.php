<?php
add_theme_support('post-thumbnails');
add_image_size('thumbs-custom', 232,156, true);
?>

<?php
function custom_primary_menu_fallback() {
	?>
	<ul id="menu"><li><a href="/">Home</a></li>
		<li><a href="/wp-admin/nav-menus.php">Set primary menu</a></li></ul>
		<?php
	}

	?>
	<?php 
	/* Code to Display Featured Image on top of the post */
	add_action( 'genesis_entry_content', 'featured_post_image', 8 );
	function featured_post_image() {
		if ( !is_singular( array( 'post', 'page' ) )) return;
		the_post_thumbnail('large', array( 'class' => 'alignleft' )); /*you can use medium, large or a custom size */
	}
	?>

	<?php 
/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

?>
<?php 
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {
	check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => '6',
		'paged' => $paged,
	);
	$my_posts = new WP_Query( $args );
	if ( $my_posts->have_posts() ) :
		?>
		<?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
                  <div class="list-post">

                    <div class="col-xs-12 col-md-6">
                      <article id="" class="box-post">
                        <div class="post-img">

                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                        </div>
                        <div class="post-header">
                          <h2 class="title-post">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </h2>
                          <h3 class="resume-post">
                            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
                          </h3>

                        </div>
                      </article>
                    </div>

                  </div>
		<?php endwhile ?>
		<?php
	endif;

	wp_die();
}
?>
