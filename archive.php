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
    <!--ここから作品一覧表 -->
    <section class="sect sect_frist">
      <div class="sect_ttl js_scroll_trigger el_fadeIn">
        <h2 class="sect_ttlMain">Work</h2>
        <p class="sect_ttlSub">作成したもの</p>
      </div>
      <div class="work_inner js_scroll_trigger el_fadeIn">
      <ul class="work_list">
        <li class="work_item">
        <a href="work_tenkue.html">
        <div class="work_img">
          <img src="common/img/tenkue/tenkue_top.jpg">
          </div>
          <p class="work_txt">App</p>
          <p class="work_txtSub">English Site</p>
        </a>
      </li>
        <li class="work_item">
          <a href="work_portfolio.html">
          <div class="work_img">
            <img src="common/img/tenkue/tenkue_top.jpg">
            </div>
            <p class="work_txt">Web Desgin</p>
            <p class="work_txtSub">Portfolio Site</p>
          </a>
        </li>
        <li class="work_item">
          <a href="work_tenkue.html">
          <div class="work_img">
            <img src="common/img/tenkue/tenkue_top.jpg">
            </div>
            <p class="work_txt">Web Desgin</p>
            <p class="work_txtSub">TENKUE HOTEL</p>
          </a>
        </li>
        <li class="work_item">
          <a href="work_yahata.html">
          <div class="work_img">
            <img src="common/img/yahata/yahata_top.jpg">
            </div>
            <p class="work_txt">Web Desgin</p>
            <p class="work_txtSub">八旗製作所 Corporate Site</p>
          </a>
        </li>
        <li class="work_item">
          <a href="work_nabeshima.html">
          <div class="work_img">
            <img src="common/img/nabeshima/nabeshima_top.png">
            </div>
            <p class="work_txt">Web Desgin</p>
            <p class="work_txtSub">鍋島 Restaurant Site</p>
          </a>
        </li>
        <li class="work_item">
          <a href="https://twitter.com/bje351493">
          <div class="work_img">
            <img src="common/img/Manabito_top.png">
            </div>
            <p class="work_txt">Blog</p>
            <p class="work_txtSub">WordPress 自作テーマ</p>
          </a>
        </li>
        <li class="work_item">
          <a href="https://www.multispots.net/">
          <div class="work_img">
            <img src="common/img/Manabito_top.png">
            </div>
             <p class="work_txt">Blog</p>
             <p class="work_txtSub">マナビト Blog Site</p>
          </a>
        </li>
        <li class="work_item">
          <a href="https://twitter.com/bje351493">
          <div class="work_img">
            <img src="common/img/Minesweeper/Minesweeper.png">
            </div>
             <p class="work_txt">App</p>
             <p class="work_txtSub">マインスイーパー Mainsweeper</p>
          </a>
        </li>
        <li class="work_item">
          <a href="work_seika.html">
          <div class="work_img">
            <img src="common/img/seika/seika__top.png">
            </div>
            <p class="work_txt">Web Desgin</p>
            <p class="work_txtSub">星誠大学 University Site</p>
          </a>
        </li>
        <li class="work_item">
          <a href="https://twitter.com/bje351493">
          <div class="work_img">
            <img src="https://i.gyazo.com/c47874a709409108eb76c5d38adcdfa6.png">
            </div>
            <p class="work_txt">Banner</p>
            <p class="work_txtSub">バナー作成まとめ</p>
          </a>
        </li>
        <li class="work_item">
          <a href="https://twitter.com/bje351493">
          <div class="work_img">
            <img src="https://i.gyazo.com/c47874a709409108eb76c5d38adcdfa6.png">
            </div>
            <p class="work_txt">Logo</p>
            <p class="work_txtSub">ロゴ作成まとめ</p>
          </a>
        </li>
        <li class="work_item">
          <a href="https://twitter.com/bje351493">
          <div class="work_img">
            <img src="common/img/chalk/chalk__01.jpg">
            </div>
            <p class="work_txt">Chalk Art</p>
            <p class="work_txtSub">看板制作</p>
          </a>
        </li>
      </ul>
      </div>
    </section>

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
</body>

</html>