<?php include 'include/header.php' ?>
<body id="all">
  <section id="slider" class="destaques slider container-fluid">
    <div class="tcb-simple-carousel row">
      <div class="">

        <ul id="slides" class="slides col-xs-12 no-padding" role="listbox">
          <?php query_posts('cat=2'); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
          <?php endwhile; endif; wp_reset_query(); ?>
        </ul>

      </div>
    </div>

  </section>

  <section class="container-fluid">
    <div class="row">
      <main class="col-xs-12 col-md-8">

        <article id=" list-blog" class="blog-list">

          <?php 
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => '6',
            'paged' => 1,
          );
          $my_posts = new WP_Query( $args );
          $cont= 1;
          if ( $my_posts->have_posts() ) : 
            ?>
            <div class="my-posts">
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
            </div>
          <?php endif ?>
          <div class="col-xs-12">
            <div class="bt-veja-mais loadmore">< VEJA MAIS ></div>
          </div>
        </article>
      </main>

      <aside id="sidebar" class="col-xs-12 col-md-4">
        <?php include 'include/aside.php' ?>
      </aside>
    </div>
  </section>
  <?php include 'include/footer.php' ?>
</body>
