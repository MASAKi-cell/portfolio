/*javascript*/

$(function () {
 
  /*
  /* ハンバーガーメニュー
   */

  $(".hamburger-btn").click(function () {
    $(this).toggleClass("active");

    if ($(this).hasClass("active")) {
      $(".hamburger").addClass("active");
    } else {
      $(".hamburger").removeClass("active");
    }
  });
  $(".hamburger__list").click(function () {
    $(".hamburger,.hamburger-btn").removeClass("active");
  });

  //ヘッダー固定(SP)
  //fvを超えたらスクロールでheaderに色を付ける
  var mainPos = $(".fv").height();

  $(window).scroll(function () {
    if ($(window).scrollTop() > mainPos) {
      $(".header__inner").addClass("addColor");
    } else {
      $(".header__inner").removeClass("addColor");
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
    $(this).addClass("js_move");　//js_moveクラスを付与
  }
});
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
