<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" prefix="og: サイトURL#">

<head>
  <?php get_header("about"); ?>
</head>

<body>
   <!--headerの読み込み-->
  <?php get_template_part('includes/includes_header'); ?>

  <!--ここからメインコンテンツ-->
  <main class="main">

    <!--ここからファーストビュー -->
    <!--ここからmy Profile-->
    <section class="sect sect_about sect_frist">
      <div class="sect_inner sect_inner_about flex_box">
        <div class="sect_ttl js_scroll_trigger el_fadeIn">
          <h2 class="bl_ttlMain">my Profile</h2>
          <div class="bl_about_img js_scroll_trigger el_fadeIn">
            <img class="hp_imgInner" src="<?php echo get_template_directory_uri(); ?>/common/img/my_top.jpg" alt="my image icon">
          </div>
          <!--/.bl_about_img-->
          <div class="bl_about_txtInner">
            <p>■名&ensp;&ensp;前： 高橋 正樹 Takahashi Masaki</p>
            <p>■誕生日： 1990年12月</p>
            <p>■所在地： 東京都</p>
            <p>■ポートフォリオサイト：<a href="//twitter.com/bje351493">Takahashi Masaki Protfolie</a></p>
            <p>■お問い合わせ先&ensp;&ensp;&ensp;&ensp;&ensp;： bje35149@gmail.com</p>
            <p class="bl_about_txtSkill">Skill</p>
            <p>Vue.js,Node.js,WordPress,JavaScript,<br>jQuery,HTML,CSS/Sass
            <p>
            <p>Xd,Illustrator,Vscode,Slack,<br>Photoshop,Dreamweaver</p>
            <div class="hp_icon_block">
              <p><a href="//twitter.com/bje351493"><img src="<?php echo get_template_directory_uri(); ?>/icon/twitter_icon.png" alt="Twitterのロゴ"
                    class="hp_icon"></a></p>
              <p><a href="//github.com/MASAKi-cell"><img src="<?php echo get_template_directory_uri(); ?>/icon/Github_icon.png" alt="GitHubのロゴ"
                    class="hp_icon hp_icon_github"></a></p>
              <p><a href="//qiita.com/bje351493"><img src="<?php echo get_template_directory_uri(); ?>/icon/Qiita.png" alt="Qittaのロゴ" class="hp_icon"></a></p>
            </div>
          </div>
          <!--/.bl_about_txtInner-->
        </div>
        <div class="bl_about_wrapper">
          <div class="bl_about_txt js_scroll_trigger el_fadeIn">
            <div class="bl_about_txtInner">
              <p class="bl_about_txtFrist">自己紹介</p>
              <p>仕事を通じてデザイン・コーディングの楽しさを知り、</p>
              <p>2020年1月より、Webデザインの勉強を本格的に始める。</p>
              <p>UX/UIデザインを意識しつつ、丁寧なヒアリングで</p>
              <p>お客様の課題を解決できるデザイナーになれるように学習中。</p>
              <p>チョークアート、登山、筋トレ、読書が趣味。</p>
            </div>
            <!--/.bl_about_txt-->
          </div>
          <!--/.bl_about_wrapper .flex_box-->
        </div>
        <!--/.sect .sect_about-->
      </div>
    </section>
    <!--//ここまでmy Profile-->
    <!--//ここまでファーストビュー -->

    <!--ここからセクション-->
    <!--//ここからcareer-->
    <section class="sect sect_career">
      <div class="sect_inner sect_inner_career">
        <div class="sect_ttl js_scroll_trigger el_fadeIn">
          <h2 class="sect_ttlMain">Career</h2>
          <p class="sect_ttlSub">経歴</p>
        </div>

        <!--//ここからcareer年表-->
        <div class="bl_career js_scroll_trigger el_fadeIn">

          <!--//career borderの作成ここから-->
          <div class="bl_career_bar">
            <div class="bl_career_circle top"></div>
            <div class="bl_career_circle middle1"></div>
            <div class="bl_career_circle middle2"></div>
            <div class="bl_career_circle middle3"></div>
            <div class="bl_career_circle middle4"></div>
            <div class="bl_career_circle bottom"></div>
          </div>
          <!--//career borderの作成ここまで-->

          <!--//career infoの作成ここから-->
          <div class="bl_career_infoInner">
            <div class="bl_career_info first">
              <h2>装置メーカーに就職</h2>
              <div class="bl_career_detail">
                <p>振動を取り扱うメーカーに就職</p>
                <p>法人のルート営業へ配属。各顧客の悩みに沿った提案を心掛けました。</p>
                <p>競合他社を分析する事で、自社製品の弱みと強みを把握し、受注製品の納期管理を徹底する事で</p>
                <p>取引先商社の売上目標110％達成し、部署の売り上げに貢献しました。</p>
              </div>
            </div>
            <div class="bl_career_info second">
              <div class="bl_career_detail">
                <h2>大手装置メーカーを担当</h2>
                <p>お客様に対して「安定して対応してくれるという評価」を社内で頂き</p>
                <p>大手半導体装置メーカーとのやり取りを任され、提案交渉を行いました。</p>
                <p>東北の大手半導体メーカーにて顧客の悩みをヒヤリング。顧客の不安要素を消す為に</p>
                <p>データーを参照しながら提案を行い、大型案件の受注につながりました。</p>
                <p>顧客の課題と向き合い、論理的に伝える事の大切さを学びました。</p>
              </div>
            </div>
            <div class="bl_career_info third">
              <div class="bl_career_detail">
                <h2>東京支店に転勤</h2>
                <div>
                  <p>入社2年目で大阪から東京支店に配属。</p>
                  <p>営業として顧客のご要望をヒアリングすると共に、社内設計部、生産部、技術部、工事部と</p>
                  <p>すり合わせを行い受注案件を進めていきました。</p>
                </div>
              </div>
            </div>
            <div class="bl_career_info fourth">
              <h2>クレーム対応を経験</h2>
              <div class="bl_career_detail">
                <p>製品の不具合がたて続けに発生しクレームとなりましたが、直ぐに現場に駆け付け</p>
                <p>現場作業員、製造部門と連携を取りながら発生原因の問題点を整理し改善策を提示。</P>
                <p>顧客の信頼回復につながり、受注増加に貢献しました。（前年比140%）</p>
                <p>原因に真剣に向き合い、常に改善策を考えながら、コミュニケーションをとる癖が身につきました。</p>
              </div>
            </div>
            <div class="bl_career_info fifth">
              <div class="bl_career_detail">
                <h2>デザインとので出会い</h2>
                <div>
                  <p>職場で資料作成の為に、測定データのグラフを作成するソフト（Winplot）を使用し、
                  <p>コーディングの存在とコードの美しさを始めて知りました。</p>
                  <p>営業の仕事を続けつつ、昔から好きだったデザインの勉強を始めました。</p>
                </div>
              </div>
            </div>
            <div class="bl_career_info sixth">
              <div class="bl_career_detail">
                <h2>本格的にWebデザイナーになるように決意</h2>
                <p>独学で勉強をしていくなか、デザインに夢中になり転職を決意しました。</p>
                <p>クライアントの悩みに寄り添ったデザイナーになるべく、現在学習中です。</p>
              </div>
            </div>
            <!--//career numberの作成ここまで-->
            <!--//career年表ここまで-->
    </section>
    <!--//ここまでcareer-->

    <!--//ここからskill-->
    <section class="sect sect_skill">
      <div class="sect_inner">
        <div class="sect_ttl js_scroll_trigger el_fadeIn">
          <h2 class="sect_ttlMain">skill</h2>
          <p class="sect_ttlSub">得意なこと</p>
        </div>
        <!--//ここからskill表-->
        <div class="bl_skill js_scroll_trigger el_fadeIn">
          <dl class="bl_skill_inner flex_box">
            <dt>
              <img src="<?php echo get_template_directory_uri(); ?>/icon/Solution.png" alt="課題の解決方法を模索するイメージ" class="bl_skill_img">
            </dt>
            <dd class="bl_skill_txt">
              <p class="bl_skill_txtFirst">課題解決能力</p>
              <p>顧客が悩んでいる状況を把握し、課題を解決に導く力があります。
              <p>
              <p>装置の導入に悩んでいる顧客がおり、顧客の状況をしっかりヒアリング。</p>
              <p>装置を導入するにあたってグラフを用いて可視化する事で、顧客のご要望を満たすことを説明し、</p>
              <p>案件獲得につながりました。</p>
            </dd>
          </dl>
          <dl class="bl_skill_inner flex_box">
            <dt>
              <img src="<?php echo get_template_directory_uri(); ?>/icon/programming.png" alt="プログラミングを学習するイメージ" class="bl_skill_img">
            </dt>
            <dd class="bl_skill_txt">
              <p class="bl_skill_txtFirst">自走力/継続力</p>
              <p>プログラミングの学習を継続的に取り組んで、最後までやり抜く力があります。</p>
              <p>プログラミングの学習は200日以上継続しており、<a href="//twitter.com/bje351493">Twitter</a>で毎日学習状況を報告し
                <a href="//github.com/MASAKi-cell">GitHub</a>でもほぼ毎日コントリビューションしてます。</p>
              <p>毎週30時間（平日3時間、休日7時間）は確保し、学習を続けてます。</p>
            </dd>
          </dl>
          <dl class="bl_skill_inner flex_box">
            <dt>
              <img src="<?php echo get_template_directory_uri(); ?>/icon/new.png" alt="新しいことに挑戦するイメージ" class="bl_skill_img">
            </dt>
            <dd class="bl_skill_txt">
              <p class="bl_skill_txtFirst">新しい事への興味/挑戦</p>
              <p>プログラミングを学習し続けMySQL、React、AWS、Node.js等を学習
                オンラインサロンに所属し、新しい情報の習得に努めています。</p>
              <p>最近はSQLやReactについて新たに学習し、常に新しい事に挑戦し続けています。</p>
              <p>また、<a href="//qiita.com/bje351493">Quiita</a>や自分で立ち上げたブログで学んだ事は、日々アウトプットしています。</p>
            </dd>
          </dl>
          <dl class="bl_skill_inner flex_box">
            <dt>
              <img src="<?php echo get_template_directory_uri(); ?>/icon/management.png" alt="チームをマネジメントするイメージ" class="bl_skill_img">
            </dt>
            <dd class="bl_skill_txt">
              <p class="bl_skill_txtFirst">マネジメント能力</p>
              <p>スケジュール調整を行い、各部門の要望に柔軟に対応する力があります。</p>
              <p>現職の営業は、お客様のご要望をヒアリングすると共に、社内設計部、生産部、技術部、工事部と</p>
              <p>すり合わせを行い案件を進めていきます。</p>
              <p>1つの案件毎にお客様のご要望を反映した設計、納期を守るためのスケジュール管理の徹底</p>
              <p>工事現場の打ち合わせ、最終調整まで一貫した管理を行いました。</p>
            </dd>
          </dl>
          </dl>
          <!--//ここまでskill表-->
        </div>
    </section>
    <!--//ここまでskill-->

    <!--//ここからVision-->
    <section class="sect sect_vision">
      <div class="sect_inner">
        <div class="sect_ttl sect_title_vision js_scroll_trigger el_fadeIn">
          <h2 class="sect_ttlMain">Vision</h2>
          <p class="sect_ttlSub">これからのこと</p>
        </div>
        <div class="bl_vision_wrapper js_scroll_trigger el_fadeIn">
          <div class="bl_vision_inner flex_box">
            <div class="bl_vision_txt">
              <p>営業の仕事を通じて培った、課題解決能力やコミュニケーション能力で
              お客様に寄り添い、問題解決に導くことのできるデザイナーを目指します。</p>
            </div>
          </div>
          <div class="bl_vision_inner  flex_box">
            <div class="bl_vision_txt bl_vision_txt_second">
              <p>技術面では積極的に実践経験を積み、表示速度、メンテナンス性、ユーザビリティに注意し
              UI/UXを意識したコーディングを行える様、常に挑戦し続けます。</p>
            </div>
          </div>
          <div class="bl_vision_inner flex_box">
            <div class="bl_vision_txt bl_vision_txt_shird">
              <p>3年後には営業で培ったマネジメント能力を元に、エンジニアチームをまとめるPMとなり
              フロントエンドだけでなくバックエンドの知識を持ったエンジニアを目指します。</p>
            </div>
          </div>
        </div>
    </section>
    <!--//ここまでVision-->


    <!--//ここからcontact-->
    <section class="sect sect_contact">
      <div class="sect_inner sect_inner_contact">
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

  <?php get_footer(); ?>
</body>

</html>