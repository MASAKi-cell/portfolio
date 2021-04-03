<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" prefix="og: サイトURL#">

<head>
  <?php get_header("yahata"); ?>
</head>

<body>
  <!--headerの読み込み-->
  <?php get_template_part('includes/includes_header'); ?>

  <!--ここからメインコンテンツ-->
  <main class="main">
    <section class="sect">
      <div class="sect_ttl_inner">
        <p class="sect_subttl">Web Design</p>
        <h2 class="sect_ttl js_scroll_trigger el_fadeIn">八旗製作所 YAHATA</h2>
      </div>
    </section>

    <!--ここからファーストビュー -->
    <div class="fv sect_frist">
      <img src="<?php echo get_template_directory_uri(); ?>/common/img/yahata_top.png" alt="ウェブサイトの見本写真">
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
                <td class="bl_descript_txt">TOPページ、aboutページ、CONTACTページ</td>
              </tr>
              <tr>
                <th class="bl_descript_list">使用ソフト&スキル</th>
                <td class="bl_descript_txt hp_descript_color">HTML/CSS、Javascript、jQuery、VScode、XD、illustrator</td>
              </tr>
            </tbody>
          </table>

          <table>
            <tbody>
              <tr>
                <th class="bl_descript_list">プロジェクト名</th>
                <td class="bl_descript_txt bl_descript_txt2">株式会社八旗製作所のリニューアルサイト</td>
              </tr>
              <tr>
                <th class="bl_descript_list">制作の目的</th>
                <td class="bl_descript_txt bl_descript_txt2">古いサイトのリニューアル。Webからのお問い合わせを増やす。
                  会社の技術力をアピールし、知名度を向上させる。
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
                <td class="bl_descript_txt bl_descript_txt2">新規顧客、就活生、取引先企業</td>
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
                    href="https://github.com/MASAKi-cell/Nabeshima">https://github.com/MASAKi-cell/masaki-cell.github.io-corp</a>
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
            <img class="bl_detail_img1" src="<?php echo get_template_directory_uri(); ?>/common/img/yahata/yahata__web.jpg" alt="写真">
            <img class="bl_detail_img2" src="<?php echo get_template_directory_uri(); ?>/common/img/yahata/yahata__mobile.jpg" alt="写真">
          </div>
          <div clas="bl_detail_descript">
            <h2 class="bl_detail_ttl">工夫したところ</h2>
            <div class="bl_detail_txt">
              <p>
                グローバルナビゲーションの右側にお問い合わせ欄用情報を配置し、常に顧客が辿り着きやすいようにしました。
              </p>
              <p>自社の技術力の強みが明確に分かるように、配置しました。</p>
              <p>
                メインビジュアルの写真を少し暗めのトーンにしフォントは「さわらび明朝体」を採用。</p>
              <p>色は青を基調とした配色で信頼感や堅実性を表しました。</p>
              <p>また、アクセントカラーに対象色相の黄色を設定し注目させたい文字を際立たせました。
                全体的に信頼性と安定感を前面に押し出すデザインを心がけました。
              </p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/yahata/yahata_top.jpg" alt="写真">
              <p>メインビジュアルに社内工場の内観と、技術力をイメージ
                した写真を掲載しています。リード文に企業理念を簡潔に掲載。
              </p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/yahata/yahata_recruit.png" alt="写真">
              <p>採用情報欄に社員の笑顔や実際に働いている写真を掲載し
                職場のイメージを伝えています。</p>
            </div>
            <div class="bl_detail_txt">
              <img class="bl_detail_sideImg" src="<?php echo get_template_directory_uri(); ?>/common/img/yahata/yahata__icon.png" alt="写真">
              <p>
                会社情報、技術情報をillustratorで自作したアイコンで表現してます。
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