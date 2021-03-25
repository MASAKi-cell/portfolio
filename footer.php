  <!--jQuery読み込み-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="common/js/script.js"></script>

  <!-- slickスライダー用のjavaScript -->
  <script src="//code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/vender/common/js/slick.min.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">

    $(".js_slick").slick({ /*js_slick用の設定*/
      arrows: true,
      prevArrow: '<img src="icon/arrow_left.png" class="slide-arrow prev-arrow">',
      nextArrow: '<img src="icon/arrow_right.png" class="slide-arrow next-arrow">',
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });

  </script>
  <?php wp_footer(); ?>