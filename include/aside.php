<div class="">

    <?php
        $args = array('post_type' =>'page', 'pagename'=>'sobre-resumo');
        $my_page = get_posts($args);
     ?>
     <?php $cont= 1; if($my_page): foreach($my_page as $post): setup_postdata($post); ?>
       <div class="title-box">
         <h3><?php the_title(); ?></h3>
       </div>
    <div class="text-box">
        <p><?php the_content(); ?></p>
    </div>

   <?php endforeach; endif; ?>
</div>
<!-- categorias -->
<div class="categorias">
  <div class="title-box">
    <h3>CATEGORIAS</h3>
  </div>
    <div class="cat-item">
      <ul>
        <?php
        $args=array(
        'orderby' => 'name',
        'order' => 'ASC'
        );
        $categories=get_categories($args);
        foreach($categories as $category) {
          echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Ver postagens em %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> ';
          echo '<br />'. $category->description . ' ';
        }
        ?>
      </ul>
    </div>
</div>
<!-- categorias -->

<!-- Arquivos -->
<div class="arquivos clearfix">

      <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
      <div id="widget-area" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </div><!-- .widget-area -->
    <?php endif; ?>


</div>
<!-- Arquivos -->

<!-- Ultimos -->
<div class="leia-mais clearfix">
  <div class="title-box">
      <h3>LEIA MAIS</h3>
  </div>
    <?php $the_query = new WP_Query( 'posts_per_page=9' ); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="item-mais col-xs-12 col-md-4">
        <div class="side-pop-img">
            <a  rel="bookmark" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>

</div>
