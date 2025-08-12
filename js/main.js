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
  // ======================

  $('.btn').on('click', function (e) {
    e.preventDefault();

    const target = $(this).data('target'); // ← data-target を取得

    $('.modal-overlay').fadeIn();
    $('.modal-content').hide();
    $('.modal-content.' + target).fadeIn();
  });

  $('.modal-overlay, .modal-close').on('click', function () {
    $('.modal-content').fadeOut();
    $('.modal-overlay').fadeOut();
  });
  /*=================================================
    アンドットの強み
    ===================================================*/
  const $items = $('.strengths-item');

  // 左右交互にクラスを付与
  $items.each(function (index) {
    if (index % 2 === 0) {
      $(this).addClass('left');
    } else {
      $(this).addClass('right');
    }
  });

  // IntersectionObserver は jQueryにないのでそのまま使う
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        $(entry.target).addClass('show');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  $items.each(function () {
    observer.observe(this);
  });
  /*=================================================
    before afterスライダー
    ===================================================*/
  $('.slider_range').on('input change', function () {
    const value = $(this).val();
    $(this).siblings('.box_before').css('width', value + '%');
  });


  /*=================================================
    フェードインリスト
    ===================================================*/
    $(document).ready(function () {
    function showOnScroll() {
      $('.fade-list li').each(function (i) {
        const bottom_of_element = $(this).offset().top + $(this).outerHeight() / 4;
        const bottom_of_window = $(window).scrollTop() + $(window).height();

        if (bottom_of_window > bottom_of_element) {
          setTimeout(() => {
            $(this).addClass('show');
          }, i * 200); // 200msずつ遅らせて順番に表示
        }
      });
    }

    showOnScroll(); // 初期表示でもチェック
    $(window).on('scroll', showOnScroll);
  });

 /*=================================================
    スリックのレスポンシブ化
    ===================================================*/
    $('.slick-area').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});


});



