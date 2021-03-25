  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php the_title(); ?></title>
  <!--PC：１２０文字以内 スマホ：70文字以内-->
  <!--ここからOGP-->
  <meta property="og:url" content=" ページの URL" />
  <meta property="og:type" content=" ページの種類" />
  <!--website /blog 下層→article-->
  <meta property="og:title" content=" TAKAHASHI MASAKI Portfolio Site" />
  <meta property="og:description" content=" ページのディスクリプション" />
  <meta property="og:site_name" content="TAKAHASHI MASAKI Portfolio Site" />
  <meta property="og:image" content=" サムネイル画像の URL" />
  <!--//OGPここまで-->

  <!--CSSのリンク-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vender/common/css/reset.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vender/common/css/style.css" />
  <!--slick CSSのリンク-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vender/common/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vender/common/css/slick-theme.css" />
  <!--google fontのリンク-->
  <link rel="preconnect" href="//fonts.gstatic.com">
  <link href="//fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
  <?php wp_head(); ?>