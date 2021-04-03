<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" prefix="og: サイトURL#">

<head>
  <?php get_header("tenkue"); ?>
</head>

<body>
  <!--headerの読み込み-->
  <?php get_template_part('includes/includes_header'); ?>

  <!--ここからメインコンテンツ-->
  <main class="main">
    <section class="sect">
      <div class="sect_ttl_inner">
        <p class="sect_subttl">Web Design</p>
        <h2 class="sect_ttl js_scroll_trigger el_fadeIn">TENKUE HOTEL</h2>
      </div>
    </section>

    <!--ここからファーストビュー -->
    <div class="fv sect_frist">
      <img src="<?php echo get_template_directory_uri(); ?>/common/img/tenkue_top.png" alt="ウェブサイトの見本写真">
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
                <td class="bl_descript_txt">ACCESSページ、CONTACTページ、FOOTERページ
                </td>
              </tr>
              <tr>
                <th class="bl_descript_list">使用ソフト&スキル</th>
                <td class="bl_descript_txt hp_descript_color">HTML/Sass、Node.js、jQuery、Vscode、Slack</td>
              </tr>
            </tbody>
          </table>

          <table>
            <tbody>
              <tr>
                <th class="bl_descript_list">プロジェクト名</th>
                <td class="bl_descript_txt bl_descript_txt2">TENKUE HOTEL サイト</td>
              </tr>
              <tr>
                <th class="bl_descript_list">制作の目的</th>
                <td class="bl_descript_txt bl_descript_txt2">共同開発での開発フロー、コミュニケーションの取り方、ツールの使い方を体験する
                </td>
              </tr>
              <tr>
                <th class="bl_descript_list">担当範囲</th>
                <td class="bl_descript_txt bl_descript_txt2">コーディング</td>
              </tr>
              <tr>
                <th class="bl_descript_list">制作期間</th>
                <td class="bl_descript_txt bl_descript_txt2">3週間</td>
              </tr>
              <tr>
                <th class="bl_descript_list">レスポンシブ</th>
                <td class="bl_descript_txt bl_descript_txt2">スマートフォン/PC</td>
              </tr>
            </tbody>
          </table>

          <table>
            <tbody>
              <tr>
                <th class="bl_descript_list">サイトURL</th>
                <td class="bl_descript_txt bl_descript_txt2">
                  <a href="//test.takanori-portfolio.com/">https://test.takanori-portfolio.com/</a>
                </td>
              </tr>
              <tr>
                <th class="bl_descript_list">GitHub</th>
                <td class="bl_descript_txt bl_descript_txt3">
                  <a
                    href="//github.com/shunta34/tenkue-app-r014">https://github.com/shunta34/tenkue-app-r014</a>
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
            <img class="bl_detail_img1" src="<?php echo get_template_directory_uri(); ?>/common/img/tenkue/tenkue__PC.jpg" alt="写真">
            <img class="bl_detail_img2" src="<?php echo get_template_directory_uri(); ?>/common/img/tenkue/tenkue__iphone.jpg" alt="写真">
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