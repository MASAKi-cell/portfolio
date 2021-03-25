<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" prefix="og: サイトURL#">
<head>
  <!--headerの読み込み-->
  <?php get_header(); ?>
</head>

<body>
  <!--headerの読み込み-->
  <?php get_template_part('includes/includes_header'); ?>

  <!--ここからメインコンテンツ-->
  <main class="ly_main">
    <!--ここからセクション-->
    <!--ここからファーストビュー -->
    <section class="sect sect_frist">

      <!--ここからfv-->
      <div class="fv">
        <!--グラスモーフィズム-->
        <div class="hp_glass_container">
        </div>
        <img src="common/img/ww.jpg" alt="山の写真">
        <div class="sect_inner frist_inner">
          <div>
            <div class="js_passing js_move">
              <!--js_passing js_move jQuery用-->
              <div class="el_passing_box">
                <div class="el_passing_bar">
                  <div class="el_passing_txt">TAKAHASHI MASAKI <span class="hp_accent">Protfolie</span></div>
                </div>
              </div>
            </div>
            <div class="js_passing js_move">
              <!--js_passing js_move jQuery用-->
              <div class="el_passing_box">
                <div class="el_passing_bar .el_passing_bar2">
                  <div class="el_passing_txt el_passing_txt2">丁寧なコミュニケーションとヒアリングでより良いご提案を心掛けます。</div>
                </div>
              </div>
            </div>
          </div>
          <div class="el_scroll">
            <!--Scroll Down -->
            <!--js_smooth_scrollでスムーズスクロール処理を実施-->
            <a href="#smooth_select" class="el_scroll_btn js_smooth_scroll">Scroll Down
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
      </div>
      <!--ここまでfv-->
    </section>
    <!--//ここまでファーストビュー-->
    <!--ここからwork-->
    <section class="sect sect_work">
      <div class="sect_inner">
        <div class="sect_ttl js_scroll_trigger el_fadeIn">
          <h2 class="sect_ttlMain" id="smooth_select">Works</h2>
          <!--Scroll Downをクリックでsmooth_selectまで移動 -->
          <p class="sect_ttlSub">私が作成したもの</p>
        </div>

        <div class="bl_work_wrapper">
          <div class="bl_work_inner flex_box">
            <p class="bl_work_number js_scroll_trigger el_fadeIn">01<span>English Site</span></p>
            <div class="bl_work_txt js_scroll_trigger el_fadeIn">
              <p>英語学習サイト</p>
              <p>Vue.js + Firebase</p>
              <a class="el_btn el_btnWork">
                <!--ボタン-->
                <button type="submit" class="el_btn_border el_btn_borderWork">View more</button>
              </a>
            </div>
            <div>
              <a href="#" class="js_scroll_trigger el_fadeIn">
                <figure class="bl_work_img">
                </figure>
              </a>
            </div>
          </div>
          <div class="bl_work_inner flex_box">
            <div>
              <p class="bl_work_number2">02<span>TENKUE</span></p>
              <div class="bl_work_txt2">
                <p>ホテルサイト</p>
                <p>複数共同でWeb開発を経験</p>
                <a class="el_btn el_btnWork">
                  <!--ボタン-->
                  <button type="submit" class="el_btn_border el_btn_borderWork">View more</button>
                </a>
              </div>
              <div>
                <a href="#" class="js_scroll_trigger el_fadeIn">
                  <figure class="bl_work_img bl_work_img2">
                  </figure>
                </a>
              </div>
            </div>
          </div>

          <!-- slickスライダーの記述 -->
          <div class="js_slick slider js_scroll_trigger el_fadeIn">
            <a href="#">
              <div>
                <img src="common/img/yahata/yahata_top.jpg" width="300" height="auto">
                <p class="slider_txt">Web Desgin</p>
              </div>
            </a>
            <a href="#">
              <div>
                <img src="common/img/nabeshima/nabeshima_top.png" width="300" height="auto">
                <p class="slider_txt">Web Desgin</p>
              </div>
            </a>
            <a href="#">
              <div>
                <img src="common/img/Minesweeper/Minesweeper.png" width="300" height="auto">
                <p class="slider_txt">Web Desgin</p>
              </div>
            </a>
            <a href="https://www.multispots.net/">
              <div>
                <img src="common/img/Manabito_top.png" width="300" height="auto">
                <p class="slider_txt">Blog</p>
              </div>
            </a>
            <a href="#">
              <div>
                <img src="common/img/Minesweeper/Minesweeper.png" width="300" height="auto">
                <p class="slider_txt">App</p>
              </div>
            </a>
            <a href="#">
              <div>
                <img src="common/img/seika/seika__top.png" width="300" height="auto">
                <p class="slider_txt">Web Desgin</p>
              </div>
            </a>
            <a href="#">
              <div>
                <img src="common/img/yahata/yahata_top.jpg" width="300" height="auto">
                <p class="slider_txt">Banner</p>
              </div>
            </a>
            <a href="#">
              <div>
                <img src="common/img/nabeshima/nabeshima_top.png" width="300" height="auto">
                <p class="slider_txt">Logo</p>
              </div>
            </a>
            <a href="#"">
          <div>
            <img src=" common/img/chalk/chalk__01.jpg" width="300" height="auto">
              <p class="slider_txt">Chalk Art</p>
          </div>
          </a>
        </div>
        <!-- slickスライダーの記述ここまで -->

        <a href="archive.html" class="el_btn el_btn_hp js_scroll_trigger el_fadeIn">
          <!--ボタン-->
          <span type="submit" class="el_btn_border">View more</span>
        </a>
      </div>
    </section>
    <!--//ここまでwork-->

    <!--ここからabout-->
    <section class="sect sect_about">
      <div class="sect_inner">
        <div class="sect_ttl js_scroll_trigger el_fadeIn">
          <h2 class="sect_ttlMain">About</h2>
          <p class="sect_ttlSub">私について</p>
        </div>
        <!--/.sect_inner-->
        <div class="bl_about_wrapper flex_box">
          <div class="bl_about_img js_scroll_trigger el_fadeIn">
            <img class="hp_imgInner" src="common/img/my_top.jpg" alt="my image icon">
          </div>
          <!--/.bl_about_img-->
          <div class="bl_about_txt js_scroll_trigger el_fadeIn">
            <div class="bl_about_txtInner">
              <p class="bl_about_txtFrist">高橋 正樹 Takahashi Masaki</p>
              <p>1990年12月生まれ。東京都在住</p>
              <p>人に役立つことが大好きで、営業で培った</p>
              <p>コミュニケーションと共感能力を活かして</p>
              <p>「一緒にしごとがしたい」と思われるような</p>
              <p>Webデザイナーを目指しています。</p>
              <a href="about.html" class="el_btn el_about_btn">
                <!--ボタン-->
                <span type="submit" class="el_btn_border el_btn_border_hp">View more</span>
              </a>
            </div>
            <!--/.bl_about_txt-->
          </div>
          <!--/.bl_about_wrapper .flex_box-->
        </div>
        <!--/.sect .sect_about-->
      </div>
    </section>
    <!--//ここまでabout-->

    <!--//ここからcontact-->
    <section class="sect sect_contact">
      <div class="sect_inner">
        <div class="sect_ttl js_scroll_trigger el_fadeIn">
          <h2 class="sect_ttlMain">Contact</h2>
          <p class="sect_ttlSub">お問い合わせ</p>
        </div>

        <div class="bl_contact_txt js_scroll_trigger el_fadeIn">
          <p>Web制作のご質問やご相談はお気軽にお問い合わせ下さいませ</p>
          <span class="bl_contact_tel">03-1234-5678</span>
          </p>
        </div>
      </div>

      <a href="contact.html" class="el_btn el_btn_hp js_scroll_trigger el_fadeIn">
        <!--ボタン-->
        <span type="submit" class="el_btn_border">お問い合わせ</span>
      </a>
      </div>
    </section>
    <!--//ここまでcontact-->
    <!--//ここまでセクション-->
  </main>
  <!--footerの読み込み-->
  <?php get_template_part('includes/includes_footer'); ?>

  <!--footerの読み込み-->
  <?php get_footer(); ?>
</body>

</html>