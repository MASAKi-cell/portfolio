<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" prefix="og: サイトURL#">

<head>
  <?php get_header("seika"); ?>
</head>

<body>
  <!--headerの読み込み-->
  <?php get_template_part('includes/includes_header'); ?>

  <!--ここからメインコンテンツ-->
  <main class="main">
    <section class="sect">
      <div class="sect_ttl_inner">
        <p class="sect_subttl">Web Design</p>
        <h2 class="sect_ttl js_scroll_trigger el_fadeIn">誠星大学 SEIKA University
        </h2>
      </div>
    </section>

    <!--ここからファーストビュー -->
    <div class="fv sect_frist">
      <img src="<?php echo get_template_directory_uri(); ?>/common/img/seika.png" alt="ウェブサイトの見本写真">
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
                <td class="bl_descript_txt">TOPページ</td>
              </tr>
              <tr>
                <th class="bl_descript_list">使用ソフト&スキル</th>
                <td class="bl_descript_txt hp_descript_color">HTML/CSS、Dreamweaver
                </td>
              </tr>
            </tbody>
          </table>

          <table>
            <tbody>
              <tr>
                <th class="bl_descript_list">プロジェクト名</th>
                <td class="bl_descript_txt bl_descript_txt2">大学サイト</td>
              </tr>
              <tr>
                <th class="bl_descript_list">制作の目的</th>
                <td class="bl_descript_txt bl_descript_txt2">大学のリニューアルサイト、初の一からのコーディング作業
                </td>
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
                <td class="bl_descript_txt bl_descript_txt2">PCのみ</td>
              </tr>
              <tr>
                <th class="bl_descript_list">ターゲット</th>
                <td class="bl_descript_txt bl_descript_txt2">受験生、現役大学生、就活生</td>
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
                  <a
                    href="https://github.com/MASAKi-cell/Seika-University">https://github.com/MASAKi-cell/Seika-University</a>
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
            <img class="bl_detail_img1" src="<?php echo get_template_directory_uri(); ?>/common/img/seika/seika__web.jpg" alt="写真">
          </div>
          <div clas="bl_detail_descript">
            <h2 class="bl_detail_ttl">工夫したところ</h2>
            <div class="bl_detail_txt">
              <p>
                ヘッダーリンクに「在学生の方」、「保護者の方」といったユーザー毎の目的別リンクを設け、
                閲覧するユーザーが迷わず必要な情報にたどり着ける様に工夫しました。
              </p>
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/seika/seika__top.png" alt="写真">
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/seika/seika__addvence.png" alt="写真">
              <p>始めに大学に関連する最新情報や開催イベント情報を大きく掲載してます。
              </p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/seika/seika__event.jpg" alt="写真">
              <p>在校生、卒業生の様子をイメージしやすく掲載してます。</p>
            </div>
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