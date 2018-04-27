<?php include 'include/header.php' ?>
<body>
  <div class="sp-container">
    <div class="sp-row">
      <div class="sp-col-12">
        <?php $postslist = get_posts("category_name=estilo");
        ?>
        <?php foreach ($postslist as $post) : echo $post->post_title; ?>
          <div class="list-post">

            <div class="sp-col-6">
              <article id="post-59" class="grid-item ">
                <div class="post-img">

                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                </div>
                <div class="post-header">
                  <span class="cat">
                    <a href="" rel="category tag"><?php the_category( ' ' ); ?></a>
                  </span>
                  <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <span class="sp-date">
                    <a href="">
                      <span class="updated published"> <?php the_modified_date('d/m/Y H:i'); ?></span>
                    </a>

                  </span>
                </div>
              </article>
            </div>

          </div>

          <div class="sp-col-12">
            <div class="alder-pagination">
              <div class="older">
                <a href=""  class="bt-mais">Mais Posts <i class="fa fa-angle-right"></i>
                </a>
              </div>
              <div class="newer"></div>

            </div>
          </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </div>
</body>
<?php include 'include/footer.php' ?>
