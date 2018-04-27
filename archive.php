<?php include 'include/header.php' ?>
  <section id="slider" class="destaques slider container-fluid">
    <div class="tcb-simple-carousel row">
      <div class="">
        <?php query_posts('cat=2'); ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <ul id="slide" class="slides col-xs-12 no-padding" role="listbox">
            <li class="item">
              <div class="side-pop-img">
                <a  rel="bookmark" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              </div>
              <div class="side-content">
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
              </div>
            </li>
          </ul>
        </div>
      </div>
    <?php endwhile; endif; wp_reset_query(); ?>
  </section>
<section class="container-fluid">
	<div class="row">
		<main class="col-xs-12 col-md-8">
			<article class="blog-list">
				<section id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<?php if ( have_posts() ) : ?>


							<?php
			// Start the Loop.
							while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'blogisis' ),
				'next_text'          => __( 'Next page', 'blogisis' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogisis' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

	</main><!-- .site-main -->
</section><!-- .content-area -->
</article>
</main>
      <aside id="sidebar" class="col-xs-12 col-md-4">
        <?php include 'include/aside.php' ?>
      </aside>
</div>
</section>
<?php include 'include/footer.php' ?>