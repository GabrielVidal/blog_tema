<?php include 'include/header.php' ?>
<body>
    <div class="container-fluid view-post clearfix">
        <div class="row">
              <div class="col-xs-12">
                        <article id="" class="">

                            <?php
                                $cont = 1;
                                if (have_posts()) : while (have_posts()) : the_post();
                            ?>
                            <div class="col-xs-12 post-header">
                                <span class="cat">
                                   <a href="" rel="category tag"><?php the_category( ' ' ); ?></a>
                                </span>
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                <div class="post-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>

                            <div class="post-entry">
                                <div class="col-md-12 content-page">

                                    <!-- Blog Post Start -->

                                    <div class="col-md-12 blog-post">

                                        <?php the_content(); ?>

                                    </div>
                                    <div class="col-md-12 slide">

                                    </div>

                                </div>
                            </div>
                        <?php
                            $cont ++;
                            endwhile;
                            endif;
                        ?>

                        </article>
                    </div>

        </div>

        <div class="row">
            <!-- ultimos posts -->

           <div class="col-xs-12 last-posts">
             <?php get_related_posts_thumbnails(); ?>
           </div>
           <!-- ultimos posts -->

        </div>
    </div>
    <?php include 'include/footer.php' ?>
</body>
