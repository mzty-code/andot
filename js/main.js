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
  $('.slick-area').on('init', function (event, slick) {
    // dotsの前後に矢印を移動
    $(this).find('.slick-dots').prepend($(this).find('.slick-prev'));
    $(this).find('.slick-dots').append($(this).find('.slick-next'));
  });

  $('.slick-area').slick({
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 1,
    arrows: true,
    dots: true,
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


document.querySelectorAll('.btn').forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.preventDefault(); // ← これでTOPに戻る挙動を防ぐ

    const target = btn.getAttribute('data-target');
    const modal = document.querySelector(`.${target}`);
    const overlay = document.querySelector('.modal-overlay');

    if (modal) {
      // QAセクションのように直接 .modal-content を開く場合も、
      // Strengthsセクションのように .detail 内でも、どちらでも対応
      const parentDetail = modal.closest('.detail');
      if (parentDetail) parentDetail.style.display = 'block';

      overlay.classList.add('active');
      modal.classList.add('active');
      modal.style.display = 'block'; // ← display:none 対策
    }
  });
});

// 閉じる処理
document.querySelectorAll('.modal-close, .modal-overlay').forEach(el => {
  el.addEventListener('click', () => {
    document.querySelectorAll('.detail').forEach(d => (d.style.display = 'none'));
    document.querySelectorAll('.modal-content').forEach(m => {
      m.classList.remove('active');
      m.style.display = 'none';
    });
    document.querySelector('.modal-overlay').classList.remove('active');
  });
});



  // $('.btn').on('click', function (e) {
  //   e.preventDefault();

  //   const target = $(this).data('target'); // ← data-target を取得

  //   $('.modal-overlay').fadeIn();
  //   $('.modal-content').hide();
  //   $('.modal-content.' + target).fadeIn();
  // });

  // $('.modal-overlay, .modal-close').on('click', function () {
  //   $('.modal-content').fadeOut();
  //   $('.modal-overlay').fadeOut();
  // });

  /*=================================================
    アンドットの強み
    ===================================================*/
  // const $items = $('.strengths-item');

  // // 左右交互にクラスを付与
  // $items.each(function (index) {
  //   if (index % 2 === 0) {
  //     $(this).addClass('left');
  //   } else {
  //     $(this).addClass('right');
  //   }
  // });

  // // IntersectionObserver は jQueryにないのでそのまま使う
  // const observer = new IntersectionObserver(function (entries) {
  //   entries.forEach(function (entry) {
  //     if (entry.isIntersecting) {
  //       $(entry.target).addClass('show');
  //       observer.unobserve(entry.target);
  //     }
  //   });
  // }, { threshold: 0.2 });

  // $items.each(function () {
  //   observer.observe(this);
  // });
  const $items = $('.strengths-item');

  // 左右交互クラスだけ付ける
  $items.each(function (index) {
    if (index % 2 === 0) {
      $(this).addClass('left show'); // ← 最初からshowも追加
    } else {
      $(this).addClass('right show'); // ← 同上
    }
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



