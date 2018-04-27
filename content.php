
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
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

	<!-- .entry-content -->

</article><!-- #post-## -->
