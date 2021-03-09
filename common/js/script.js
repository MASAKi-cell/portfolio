/*javascript*/

$(function(){

	/*
   *ハンバーガーメニューの作成
   */
	
		var bgHeight = $('.sect_frist').outerHeight(); //ファーストビュー(.f.sect_frist)の高さを取得
	
		$('.el_burger_btn').on('click',function(){
			if($(window).scrollTop() < bgHeight - 50){ //ハンバーガーボタンが.sect_fristより上にある場合
				$('.el_bar').toggleClass('js_cross'); //ハンバーガーメニューのラインをクロスさせるCSSを割り当てる
				$('.el_btn_navItem').toggleClass('js_open'); //ナビゲーションが開くCSSを割り当てる
				$('.el_burger_musk').fadeToggle(300); //背景を暗くするマスクを付与
				$('body').toggleClass('js_noscroll'); //ハンバーガーメニューを開いたとき、スクロールを禁止する
				
			}else{ //ハンバーガーボタンが.sect_fristより下にある場合
				
				$(this).toggleClass('js_blcok'); //ハンバーガーボタンのcolorを変更、それ以外は同様の処理を実施
				$('.el_bar').toggleClass('js_cross'); 
				$('.el_btn-navItem').toggleClass('js_open');
				$('.el_burger_musk').fadeToggle(300);
				$('body').toggleCLass('js_noscroll');	
			}
		});
				
		$(window).on('load scroll', function(){ //スクロールでサイトロゴとハンバーガーメニューの色を変更
				if( $(window).scrollTop() < bgHeight - 50){
					$('.logo-inner').removeClass('js_black'); //logoのクラスを外す処理
					$('.logo-inner').addClass('js_black'); //logoのクラスを加える処理			
					$('.el_burger_btn').removeClass('js_black'); //burger-btnのクラスを外す処理
					$('.el_burger_btn').addClass('js_black'); //burger-btnのクラスを加える処理
				}
			});
});

$(function () {

  /*
   * スティキーヘッダー
   */

  $('.ly_header').each(function () {

      var $window = $(window),
          $header = $(this),  

          $headerClone = $header.contents().clone(),

          $headerCloneContainer = $('<div class="js_header_clone"></div>'),
          threshold = $header.offset().top + $header.outerHeight();
          $headerCloneContainer.append($headerClone);
          $headerCloneContainer.appendTo('body');
  
          $window.on('scroll', function () {
          if ($window.scrollTop() > threshold) {
              $headerCloneContainer.addClass('js_visible');
          } else {
              $headerCloneContainer.removeClass('js_visible');
          }
      });

  $window.trigger('scroll');
  });

});



$(window).scroll(function () { 

  /*
  /* 文字を右から左に表すアニメーション
   */

  $(".js_passing").each(function () {
  var imgPos = $(this).offset().top; //要素のtopの位置を取得
  var scroll = $(window).scrollTop(); //scrollTop()でブラウザ画面をスクロールした時の位置(スクロール量)を取得
  var windowHeight = $(window).height(); //windowの高さを取得
  if (scroll > imgPos - windowHeight + windowHeight / 4) {
    $(this).addClass("js_move"); //js_moveクラスを付与
  }
});
});



$(function () {

    /*
     * スクロールアニメーション処理
     */
  
      // aimation呼び出し
      if ($('.js_scroll_trigger').length) {
          scrollAnimation();
    }
      // aimation関数
      function scrollAnimation() {
          $(window).scroll(function () {
              $(".js_scroll_trigger").each(function () {
                  let position = $(this).offset().top,
                      scroll = $(window).scrollTop(),
                      windowHeight = $(window).height();
  
                  if (scroll > position - windowHeight + 200) {
            $(this).addClass('is_active');
            /*「トリガーが画面下部200pxに達したか」を判定するために必要な情報を変数に格納。
             * 200pxに以下に到達するとis_activeクラスを付与する。
             */
                  }
              });
          });
      }
    $(window).trigger('scroll');
  });



document.addEventListener("click", e => {

  /*
  /* スムーズスクロール処理
   */
 
   const target = e.target;
  // clickした要素がclass属性、js-smooth-scrollを含まない場合は処理を中断
  if (!target.classList.contains("js_smooth_scroll")) return; // contain() 指定した文字がこの文字列内に存在するかを確認する
  e.preventDefault(); //処理を中断する。
  const targetId = target.hash;
  const targetElement = document.querySelector(targetId);
  // getBoundingClientRect()メゾットは、要素の寸法と
  // そのビューポートに対する位置を取得する。
  const rectTop = targetElement.getBoundingClientRect().top;

  // 現在の垂直方向のスクロール量を取得する。
  const offsetTop = window.pageYOffset;

  // 目的の要素の50px上部までスクロールする。
  const buffer = 50;
  const top = rectTop + offsetTop - buffer;

  window.scrollTo({
    /*scrollTop()は、windowsのメゾット。絶対位置を指定してスクロールする*/ 
    top,
    behavior: "smooth"
  });
});
