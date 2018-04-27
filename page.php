<?php include 'include/header.php' ?>

          <div class="container-fluid ">
            <div class="row">
              <div class="col-xs-12 no-padding">


                <article class="">

                 <?php
                     if(have_posts()) : while(have_posts()) : the_post();
                  ?>

                      <div class="col-xs-12 post-img">
                          <a href="">
                               <?php the_post_thumbnail(); ?>
                          </a>
                      </div>
                      <div class="post-entry">
                        <?php the_content(); ?>

                      </div>
                       <?php endwhile; endif; ?>
                  </article>

              </div>
            </div>
          </div>

         <?php include 'include/footer.php' ?>

         </body>
