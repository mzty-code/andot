$(function () {
  /*=================================================
  ハンバーガーメニュー
  ===================================================*/
  $(".toggle-btn").on("click", function () {
      $("#header").toggleClass("open");
  });

  $("#mask, nav a").on("click", function () {
      $("#header").removeClass("open");
  });

  /*=================================================
  施術事例のスリック
  ===================================================*/
  $('.slick-area').slick({
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 1,           // スマホでも1枚見えるように
    arrows: false,    // ← 矢印を消す
    dots: true,       // ← ドットを表示する
    variableWidth: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerPadding: '20px',
          slidesToShow: 1
        }
      }
    ]
  });

  // ======================
  // アコーディオン型
  // ======================
  // $('.btn').on('click', function(e) {
  //   e.preventDefault();
  //   const $article = $(this).closest('article');
  //   const $targetUl = $article.find('> ul');

  //   // 他を閉じる
  //   $('#content article > ul').not($targetUl).slideUp();
  //   $targetUl.slideToggle();
  // });


  // ======================
  // モーダル型
  // （コメントアウトしておく）
  // ======================
  
 $('.btn').on('click', function(e) {
  e.preventDefault();

  const target = $(this).data('target'); // ← data-target を取得

  $('.modal-overlay').fadeIn();
  $('.modal-content').hide();
  $('.modal-content.' + target).fadeIn();
});

$('.modal-overlay, .modal-close').on('click', function() {
  $('.modal-content').fadeOut();
  $('.modal-overlay').fadeOut();
});

 
});



