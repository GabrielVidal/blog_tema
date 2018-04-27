<footer class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-9 no-padding">
      <div class="site-map">
        <div class="col-xs-12 col-md-3">
          <ul>
            <li  class="first">
              <a href="#">PÁGINA PRINCIPAL</a>
            </li>
            <li>
              <a href="#">MASSAGENS</a>
              <ul class="pl-20">
                <li><a href="#">RELAXANTE</a></li>
                <li><a href="#">LINGAM</a></li>
                <li><a href="#">REFLEXOLOGIA</a></li>
                <li><a href="#">TANTRICA</a></li>
                <li><a href="#">THAILANDESA</a></li>
                <li><a href="#">BAMBUTERAPIA</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-xs-12 col-md-3">
          <ul>
            <li  class="first"><a href="#">BLOG</a></li>

            <li><a href="#">ÚLTIMA DO BLOG</a></li>
            <li><a href="#">PENÚLTIMA DO BLOG</a></li>
            <li><a href="#">ANTEPENÚLTIMA DO BLOG</a></li>

            <li class="last"><a href="#">CONTATO</a></li>
          </ul>
        </div>
        <div class="redes-footer col-xs-12 col-md-6">
          <div class="box-footer">
            <span>BLOG</span>
            <a href="#" class="sprite icon-redes"></a>
            <a href="#" class="sprite icon-redes icon-redes2"></a>
          </div>
        </div>
        <address class="col-xs-12">
          <a href="#">RUA NOME DA RUA COM N°,999 - NOME BAIRRO</a>
          <a href="https://api.whatsapp.com/send?phone=5567992484818" target="blank">TEL:(67)9 9248-4818</a>
        </address>
      </div>
    </div>
    <div class="pl-0 col-xs-12 col-md-3">
      <div class="formulario">
        <h3>FALE COM A ISIS</h3>
        <?php
        $args = array('post_type' =>'page', 'pagename'=>'fale-com-a-isis');
        $my_page = get_posts($args);
        ?>
        <?php $cont= 1; if($my_page): foreach($my_page as $post): setup_postdata($post); ?>
        <?php the_content(); ?>
          <!-- <form class="" action="index.html" method="post">
            <input type="text" name="" placeholder="NOME">
            <input type="text" name="" placeholder="E-MAIL">
            <input type="text" name="" placeholder="ASSUNTO">
            <textarea name="message" placeholder="MENSAGEM"></textarea>
            <button type="button" name="button">ENVIAR</button>
          </form> -->

          <?php $cont++; endforeach; endif; ?>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
  <script src="http://malsup.github.io/jquery.cycle.all.js"></script>
 

<!--  <script>
    var slideIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("slides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script> -->

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $('#slides').cycle();
  });
</script>




<script type="text/javascript">
  var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
  var page = 2;
  jQuery(function($) {
    $('body').on('click', '.loadmore', function() {
      var data = {
        'action': 'load_posts_by_ajax',
        'page': page,
        'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
      };

      $.post(ajaxurl, data, function(response) {
        $('.my-posts').append(response);
        page++;
      });

      $.post(ajaxUrl, {
        action: "more_post_ajax",
        offset: (page * ppp) + 1,
        ppp: ppp
      })
      .success(function(posts) {
        page++;
        $(".my-posts").append(posts);
        // CHANGE THIS!
        $(".loadmore").attr("disabled", false);
      });
    });
  });


  $(function () {
    $("div").slice(0, 4).show();
    $(".loadmore").on('click', function (e) {
      e.preventDefault();
      $("div:hidden").slice(0, 4).slideDown();
      if ($("div:hidden").length == 0) {
        $("#load").fadeOut('slow');
      }
      $('html,body').animate({
        scrollTop: $(this).offset().top
      }, 1500);
    });
  });

  $('a[href=#top]').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 600);
    return false;
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('.totop a').fadeIn();
    } else {
      $('.totop a').fadeOut();
    }
  });
</script>



</html>
