  <!--ここからheaderー-->
  <header class="ly_header">
    <div class="header_inner">
      <div class="header_inner_flex">
        <div>
          <h1 class="header_ttl"><a href="<?php echo esc_url(home_url()); ?>">MASAKi Portfolio</a></h1>
        </div>
        <!--ナビゲーション-->

        <?php
        //メニューIDを取得 決まり文句
        $menu_name = 'global_nav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        ?>

        <nav class="el_nav">
          <ul class="el_navLists flex_box">

            <!--グローバルナビゲーションメニューを表示-->
            <?php foreach ($menu_items as $item) : ?>
              <!--esc = Escape(エスケープ処理)esc_attr urlはhref属性として出力する為、esc_html メニューの部分はhtmlで出力する為-->
              <li class="el_navList"><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
            <?php endforeach; ?>

            <li class="el_navList el_navListTwitter"><a href="//twitter.com/bje351493" target="_blank" rel="noopener"><img src="<?php echo esc_attr(get_template_directory_uri()); ?>/icon/twitter_icon.png" alt="Twitterのロゴ"></a></li>
            <li class="el_navList el_navListGithub"><a href="//github.com/MASAKi-cell" target="_blank" rel="noopener"><img src="<?php echo esc_attr(get_template_directory_uri()); ?>/icon/Github_icon.png" alt="Githubのロゴ"></a></li>

          </ul>
        </nav>
      </div>
      <!--/.flex_box-->
      <!--ハンバーガーメニュー-->
      <ul class="el_btn_navItem" id="js__nav__item">
        <!--グローバルナビゲーションメニューを表示 個別にしてしている為foreachは使用しない。-->
        <li class="el_btn_text el_btn_text1"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
        <li class="el_btn_text el_btn_text3"><a href="<?php echo esc_url(get_permalink(33)); ?>">制作物</a></li>
        <li class="el_btn_text el_btn_text4"><a href="<?php echo esc_url(get_permalink(25)); ?>">私について</a></li>
        <li class="el_btn_text el_btn_text2"><a href="//www.multispots.net/" target="_blank" rel="noopener">ブログ</a></li>
        <li class="el_btn_text el_btn_text5"><a href="<?php echo get_permalink(59); ?>">お問い合わせ</a></li>

        <li class="el_btn_text el_navListTwitter">
          <a href="//twitter.com/bje351493" target="_blank" rel="noopener">
            <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/icon/twitter_icon_nav.png" alt="Twitterのロゴ"></a>
          <a href="//github.com/MASAKi-cell" target="_blank" rel="noopener">
            <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/icon/github_icon_nav.png" alt="Githubのロゴ">
          </a>
        </li>
      </ul>

      <div class="el_burger_btn">
        <a class="el_bars">
          <span class="el_bar el_bar_top"></span>
          <span class="el_bar el_bar_mid"></span>
          <span class="el_bar el_bar_bottom"></span>
        </a>
        <a class="el_burger_menu">menu</a>
      </div>
      <span class="el_burger_musk"></span>
      <!--/ハンバーガーメニュー-->
    </div>
  </header>
  <!--//ここまでヘッダー-->