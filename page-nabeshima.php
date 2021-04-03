<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" prefix="og: サイトURL#">

<head>
  <?php get_header("nabeshima"); ?>
</head>

<body>
   <!--headerの読み込み-->
   <?php get_template_part('includes/includes_header'); ?>

  <!--ここからメインコンテンツ-->
  <main class="main">
    <section class="sect">
      <div class="sect_ttl_inner">
        <p class="sect_subttl">Web Design</p>
        <h2 class="sect_ttl js_scroll_trigger el_fadeIn">鍋島 NABESHIMA</h2>
      </div>
    </section>

    <!--ここからファーストビュー -->
    <div class="fv sect_frist">
      <img src="<?php echo get_template_directory_uri(); ?>/common/img/nabeshima_top.png" alt="ウェブサイトの見本写真">
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
                <td class="bl_descript_txt">TOPページ、CONTACTページ</td>
              </tr>
              <tr>
                <th class="bl_descript_list">使用ソフト&スキル</th>
                <td class="bl_descript_txt hp_descript_color">HTML/CSS、Javascript、jQuery、Dreamweaver</td>
              </tr>
            </tbody>
          </table>

          <table>
            <tbody>
              <tr>
                <th class="bl_descript_list">プロジェクト名</th>
                <td class="bl_descript_txt bl_descript_txt2">「鍋島」 和食レストランのリニューアルサイト</td>
              </tr>
              <tr>
                <th class="bl_descript_list">制作の目的</th>
                <td class="bl_descript_txt bl_descript_txt2">ネットからのお問い合わせ、予約を増やし、顧客の増加につなげる。<br>
                  実際の店舗に行ってみたいと思わせるブランディングを心掛けました。
                </td>
              </tr>
              <tr>
                <th class="bl_descript_list">担当範囲</th>
                <td class="bl_descript_txt bl_descript_txt2">デザイン/コーディング</td>
              </tr>
              <tr>
                <th class="bl_descript_list">制作期間</th>
                <td class="bl_descript_txt bl_descript_txt2">1.5ヶ月</td>
              </tr>
              <tr>
                <th class="bl_descript_list">レスポンシブ</th>
                <td class="bl_descript_txt bl_descript_txt2">スマートフォン/PC</td>
              </tr>
              <tr>
                <th class="bl_descript_list">ターゲット</th>
                <td class="bl_descript_txt bl_descript_txt2">30代以降の男女、記念日などで利用する夫婦など</td>
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
                  <a href="https://github.com/MASAKi-cell/Nabeshima">https://github.com/MASAKi-cell/Nabeshima</a>
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
            <img class="bl_detail_img1" src="<?php echo get_template_directory_uri(); ?>/common/img/nabeshima/nabeshim_web.jpeg" alt="写真">
            <img class="bl_detail_img2"src="<?php echo get_template_directory_uri(); ?>/common/img/nabeshima/nabeshima_mobile.jpeg" alt="写真">
          </div>
          <div clas="bl_detail_descript">
            <h2 class="bl_detail_ttl">工夫したところ</h2>
            <div class="bl_detail_txt">
              <p>
                まず大きな写真でお店の雰囲気を紹介し、料理の写真を多めに掲載することで、食べ物を美味しそうに見せることを心掛けました。
              </p>
              <p>色は食欲のそそる赤などの暖色系を採用しました。</p>
              <p>
                ファーストビューで食材や調理風景を写真で展開させ、
                ユーザーに店内の様子を直感的に伝えれるようにしました。
              </p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/nabeshima/nabeshima__address.png" alt="写真">
              <p>
                予約方法・交通アクセス・営業時間・定休日を
                一緒に掲載し分かりやすく表示しました。
              </p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/nabeshima/nabeshima__photo.jpg" alt="写真">
              <p>CSSで食材と店内の風景が流れるように表現しました。</p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/nabeshima/nabeshima_txt.png" alt="写真">
              <p>
                西洋の文化にはない縦書きを使用する事で和風と歴史を表現しました。
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