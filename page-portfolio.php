<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" prefix="og: サイトURL#">

<head>
  <?php get_header("protfolio"); ?>
</head>

<body>
  <!--headerの読み込み-->
  <?php get_template_part('includes/includes_header'); ?>

  <!--ここからメインコンテンツ-->
  <main class="main">
    <section class="sect">
      <div class="sect_ttl_inner">
        <p class="sect_subttl">Web Design</p>
        <h2 class="sect_ttl js_scroll_trigger el_fadeIn">Portfolio Site</h2>
      </div>
    </section>

    <!--ここからファーストビュー -->
    <div class="fv sect_frist">
      <img src="<?php echo get_template_directory_uri(); ?>/common/img/portfolio_top.png" alt="ウェブサイトの見本写真">
    </div>
    <!--//ここまでファーストビュー -->

    <!--ここからdescript -->
    <section class="sect">
      <div class="bl_descript_wrapper">
        <div class="bl_descript_inner">
          <table>
            <tbody>
              <tr>
                <th class="bl_descript_list">コーディング</th>
                <td class="bl_descript_txt">TOPページ、aboutページ、CONTACTページ、workページ</td>
              </tr>
              <tr>
                <th class="bl_descript_list">使用ソフト&スキル</th>
                <td class="bl_descript_txt hp_descript_color">HTML/CSS、WordPress、Javascript、jQuery、VScode、XD、illustrator
                </td>
              </tr>
            </tbody>
          </table>

          <table>
            <tbody>
              <tr>
                <th class="bl_descript_list">プロジェクト名</th>
                <td class="bl_descript_txt bl_descript_txt2">Portfolio Site</td>
              </tr>
              <tr>
                <th class="bl_descript_list">制作の目的</th>
                <td class="bl_descript_txt bl_descript_txt2">転職活動用にポートフォリオサイトを作成
                </td>
              </tr>
              <tr>
                <th class="bl_descript_list">CSS設計</th>
                <td class="bl_descript_txt bl_descript_txt2">PRECSSを採用(イレギュラーな要件でも対応しやすく、柔軟性のある為)
                </td>
              </tr>
              <tr>
                <th class="bl_descript_list">ソースコード管理</th>
                <td class="bl_descript_txt bl_descript_txt2">GitHub</td>
              </tr>
              <tr>
                <th class="bl_descript_list">担当範囲</th>
                <td class="bl_descript_txt bl_descript_txt2">デザイン/コーディング</td>
              </tr>
              <tr>
                <th class="bl_descript_list">制作期間</th>
                <td class="bl_descript_txt bl_descript_txt2">2ヶ月</td>
              </tr>
              <tr>
                <th class="bl_descript_list">レスポンシブ</th>
                <td class="bl_descript_txt bl_descript_txt2">スマートフォン/PC</td>
              </tr>
              <tr>
                <th class="bl_descript_list">ターゲット</th>
                <td class="bl_descript_txt bl_descript_txt2">採用担当者</td>
              </tr>
            </tbody>
          </table>

          <table>
            <tbody>
              <tr>
                <th class="bl_descript_list">サイトURL</th>
                <td class="bl_descript_txt bl_descript_txt2">
                  <a href="https://github.com/MASAKi-cell/Nabeshima">https://github.com/MASAKi-cell/Nabeshima</a>
                </td>
              </tr>
              <tr>
                <th class="bl_descript_list">GitHub</th>
                <td class="bl_descript_txt bl_descript_txt3">
                  <a href="https://github.com/MASAKi-cell/portfolio">https://github.com/MASAKi-cell/portfolio</a>
                </td>
              </tr>
            </tbody>
          </table>
    </section>
    <!--//ここまでdescript -->

    <!--ここからdetail -->
    <section class="sect bl_detail">
      <div class="bl_detail_wrapper">
        <div class="bl_detail_inner flex_box">
          <div class="bl_detail_img flex_box">
            <img class="bl_detail_img1" src="<?php echo get_template_directory_uri(); ?>/common/img/portfolio/portfolio_web.jpeg" alt="写真">
            <img class="bl_detail_img2" src="<?php echo get_template_directory_uri(); ?>/common/img/portfolio/portfoli_mobile.jpeg" alt="写真">
          </div>
          <div clas="bl_detail_descript">
            <h2 class="bl_detail_ttl">工夫したところ</h2>
            <div class="bl_detail_txt">
              <p>
                ファーストビューは2021年UIデザインのトレンド、グラスモーフィズムとCSSアニメーションでデザインしました。
              </p>
              <p> 見出しやリンクはメインカラーのオレンジ色でまとめて、全体の配色に統一感を演出しました。</p>
              <p>TOPページには何ができる人なのかが最も知りたい情報であるため、WORKページを上部に配置してます。
                興味を持ってもらったらABOUTページ、CONTACTページに移動してもらい私がどういう人物であるのかを説明してます。
              </p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/portfolio/portfolio_slick.png" alt="写真">
              <p> カルーセルスライダーを使用して、イラスト、アプリ毎にカテゴリーまとめました。
                WORKページでこれまで作成したサイト、バナー、アプリのデザイン、意図を一つ一つ説明してます。
              </p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/portfolio/portfolio_about.png" alt="写真">
              <p> ABOUTページでは私の経歴を記載し、どの様にしてプログラミングを勉強するに至ったかの経緯や
                過去の経歴、現在、将来どのようなプログラマーになりたいかを記載しました。</p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/portfolio/portfoli_main.png" alt="写真">
              <p>
                illustratorとペンタブでアイコンを自作し親しみやすさを表現してます。
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--//ここまでdetail -->

    <!--ボタン-->
    <section>
      <a href="<?php echo get_permalink(33); ?>" class="el_btn el_btn_hp js_scroll_trigger el_fadeIn">
        <span type="submit" class="el_btn_border">戻る</span>
      </a>
    </section>

  </main>

  <!--footerの読み込み-->
  <?php get_template_part('includes/includes_footer'); ?>

  <?php get_footer(); ?>
</body>

</html>