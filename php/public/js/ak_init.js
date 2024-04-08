$(function () {

  var windows_width = window.innerWidth;
  var before_width = windows_width;


  // 卷軸顯示動畫
  showHideNav();
  $(window).resize(function (event) {
    showHideNav();
    windows_width =
      window.innerWidth <= screen.width ? window.innerWidth : screen.width;
    //判斷是否同一區間
    if ((before_width > 1199) ^ (windows_width > 1199 == true)) {
      if (windows_width > 1199) {
        showHideNav();
      }
    }
    before_width = windows_width;
  });

  
  if ($(".product-img-pc").length > 0) {
    $(".product-img-pc").on('click', function () {
      let id = '#' + $(this).data('id');
      $(id).fadeIn(200);
    });

    $(".product-content-pc .product-btn").on('click', function () {
      $(this).closest('.product-content-pc').fadeOut(200);
    });
  }


  //卡片數量
  var click_item_count = $('.click-item').length;
  //現有裝置為幾個一列
  var now_col_count = 0;
  //目前插入的列數
  var now_insert_row = -1;
  //目前的裝置
  var now_device = getDeviceAndRowCount();

  //下方按鈕點擊
  $('.product-card-list .click-item').click(function (event) {
    //複製新增內容
    var clone_item = $(this).find('.clone-item').clone(true);
    //新增物件
    var insert_item = $("<div>").attr("id", "insert-item").html(clone_item).addClass("insert-item").addClass("show");

    //與header留20距離
    var header_h = $("#header-block").outerHeight();

    //已經有項目新增
    if ($('#insert-item').length == 1) {
      //點選同一個
      if ($(this).find('.card-item').hasClass('active')) {
        //去掉遮罩
        $(this).find('.card-item').toggleClass('active');
        //合起來
        $('#insert-item').slideUp(300, function () {
          //刪掉新增物件
          $("#insert-item").remove();
        });

      }
      //點選別的
      else {
        //去掉遮罩
        $('.card-item').removeClass('active');
        //點選的換成遮罩
        $(this).find('.card-item').toggleClass('active');

        //刪除已新增
        $("#insert-item").remove();

        //取得要插入的列數
        var tmp_insert_row = get_insert_row($(this).index());

        insert_item.insertAfter($(".product-card-list>li:nth-child(" + get_insert_index($(this).index()) + ")"));

        var scroll_speed = 400;

        //要新增的和已新增在同一列
        if (tmp_insert_row == now_insert_row) {
          scroll_speed = 1;
        }

        $('#insert-item').find('.clone-item').removeClass('hidden');
        $("body,html").animate({
          scrollTop: $(this).offset().top - header_h
        }, scroll_speed);

        //把目前新增的物件資訊記錄下來
        now_insert_row = tmp_insert_row;

      }

    }
    //沒有項目新增
    else {
      //去掉遮罩
      $('.card-item').removeClass('active');
      //點選的換成遮罩
      $(this).find('.card-item').toggleClass('active');

      //取得要插入的列數
      var tmp_insert_row = get_insert_row($(this).index());

      // //找出要新增的列位置
      insert_item.insertAfter($(".product-card-list>li:nth-child(" + get_insert_index($(this).index()) + ")"));

      $('#insert-item').find('.clone-item').removeClass('hidden');
      $('#insert-item').css('display', 'none');
      $('#insert-item').slideDown(300);
      $("body,html").animate({
        scrollTop: $(this).offset().top - header_h
      }, 400);

      // //把目前新增的物件資訊記錄下來
      now_insert_row = tmp_insert_row;

    }

    //若有項目被點選，其餘項目樣式會異動
    if ($('.product-card-list .content.selected').length > 0) {
      $('.product-card-list').addClass("has-selected");
    } else {
      $('.product-card-list').removeClass("has-selected");
    }
  });

  windows_width =
    window.innerWidth <= screen.width ? window.innerWidth : screen.width;
  var windows_width = window.innerWidth;
  var before_width = windows_width;
  // load maun menu
  if (windows_width > 1199) {
    pcAnchorHref();
    clearTbAnchorHref()

  } else {
    tbAnchorHref();
  }

  //resize
  $(window).resize(function () {
    var current_device = getDeviceAndRowCount();
    //裝置不同，列數不同，故重置#insert-item
    if (now_device != current_device) {
      if ($('#insert-item').length == 1) {
        $("#insert-item").remove();
        $('.card-item').removeClass('active');
        $(".product-card-list").removeClass("has-selected");
      }
      now_device = current_device;
    }

    windows_width =
      window.innerWidth <= screen.width ? window.innerWidth : screen.width;

    //判斷是否同一區間
    if ((before_width > 1199) ^ (windows_width > 1199 == true)) {
      if (windows_width > 1199) {
        pcAnchorHref();
        clearTbAnchorHref()
      } else {
        tbAnchorHref();

      }
    }
    before_width = windows_width;
  });

  //取得目前裝置並更新裝置對應為幾個一列
  function getDeviceAndRowCount() {
    var device = "";
    if (window.innerWidth > 1199) {
      device = "pc";
      now_col_count = 3;
    } else if (window.innerWidth > 767) {
      device = "tb";
      now_col_count = 2;
    } else {
      device = "mb";
      now_col_count = 1;
    }
    return device;
  }

  //回傳要插入的index
  function get_insert_index(click_index) {
    var insert_index = -1;
    var tmp_insert_row = -1;

    //找出要插入的列數
    tmp_insert_row = get_insert_row(click_index);

    //需+1，因CSS的nth是從1開始
    click_index++;

    //判斷是否為最後一列(要插入的列數是否=最大列數)
    if (tmp_insert_row == Math.ceil(click_item_count / now_col_count)) {
      insert_index = click_item_count;
    } else {
      insert_index = now_col_count * tmp_insert_row;
    }

    return insert_index;
  }

  //回傳要插入的列數
  function get_insert_row(click_index) {
    var insert_row = -1;
    //需+1，因CSS的nth是從1開始
    click_index++;

    //找出要插入的列數
    insert_row = Math.ceil(click_index / now_col_count);

    return insert_row;
  }

  if ($(".service-item-btn").length > 0) {
    $(".service-item-btn").on('click', function () {
      $(".service-item-btn").removeClass('active');
      $(this).addClass('active');
      $(".service-item-cotent").hide();
      let id = '#' + $(this).data('id');
      $(id).fadeIn(500);
    });

    $(".product-content-pc .product-btn").on('click', function () {
      $(this).closest('.product-content-pc').fadeOut(500);
    });
  }


  //目前的裝置
  var now_device = getDevice();
  checkMore();

  //resize
  $(window).resize(function () {
    now_device = getDevice();
    checkMore();
    pcAnchorHref();
  });

  //more-btn點擊後展開隱藏的內容
  $(".more-btn").click(function () {
    console.log('click');
    $(this).closest(".has-more-block").removeClass("more-unclicked");
  });

  //取得目前裝置
  function getDevice() {
    var device = "";
    if (window.innerWidth > 1199) {
      device = "pc";
    } else if (window.innerWidth > 767) {
      device = "tb";
    } else {
      device = "mb";
    }
    return device;
  }

  //檢查More Btn是否需要出現
  function checkMore() {
    var more_btn_block = $(".more-btn-block");
    //手機版以外裝置不顯示
    if (now_device == "tb" || now_device == "mb") {
      //不確定是否有可能一次出現多個more-btn於同一頁，故以迴圈方式處理
      more_btn_block.map(function () {
        var this_btn_block = $(this);
        //最外面的父層
        var this_has_more_block = this_btn_block.closest(".has-more-block");

        // 判斷是否已點擊過more-btn
        if (!this_has_more_block.hasClass("more-unclicked")) {
          // 已點擊過，按鈕隱藏
          this_btn_block.addClass("hidden");
        } else {

          // 判斷是限制固定高度，還是只秀第一個子項目
          // console.log(this_has_more_block.data('max-height'));
          if (this_has_more_block.data('max-height') > 0) {
            //要限制高度的元素
            var this_more_content = this_has_more_block.find(".more-content");

            var content_h = 0;

            // 文字高度加總
            this_more_content.map(function () {
              content_h += $(this).prop("scrollHeight");
            });
            // console.log(content_h);
            if (content_h > this_has_more_block.data('max-height')) {
              //未點擊過，且內容超過data-max-height
              this_btn_block.removeClass("hidden");
            }
          } else {
            // 只秀第一個子項目
            // 判斷是否超過1個以上的項目
            var content_count = this_has_more_block.find(".mb-show-1").children().length;

            if (content_count > 1) {
              //未點擊過，且子項目>1
              this_btn_block.removeClass("hidden");
            }
          }
        }


      });
    } else {
      more_btn_block.addClass("hidden");
    }
  }



  var header_height = $("#header-block").outerHeight();
  $(".anchor-bullet-sticky > li > a").on("click", function () {
    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top - header_height,
      },
      500
    );
    return false;
  });



});

// 卷軸顯示動畫
function showHideNav() {
  $(window).off("scroll.hideNav");
  $(window).on("scroll.hideNav", function () {
    var x = window.innerWidth;
    if (x > 1199) {
      let scrollTop = $(this).scrollTop();
      if (scrollTop > 0) {
        $("#header-block").addClass("is-scroll");
      } else {
        $("#header-block").removeClass("is-scroll");
      }
    } else {
      $("#header-block").removeClass("is-scroll");
    }
  });
}


function checkAlertMsg(msg) {
  if (msg.length > 0) {
    msg = msg + '\n';
  }
  return msg;
}

function validateName(num) {
  var reg = /[^0-9]/;
  return reg.test(num);
}

function pcAnchorHref() {

  // var header_height = $('#header').outerHeight();
  var bulletAnchor = $(".anchor-bullet-sticky"),

    bulletItems = bulletAnchor.find("a"),

    scrollItems = bulletItems.map(function () {
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });



  $(window).on('scroll', function () {
    // console.log('現在是pc事件')
    let solutionTop = $('#Introduction-block').offset().top;

    if ($(this).scrollTop() > solutionTop) {
      $('#anchorBullet').css({ "position": "fixed" });
    } else {
      $('#anchorBullet').attr('style', '')
    }

    var fromTop = $(this).scrollTop()
    var cur = scrollItems.map(function () {

      if ($(this).offset().top - 234 < fromTop)
        return this;
    });

    $(window).on('beforeunload', function () {
      if ($(this).scrollTop() > solutionTop) {
        $('#anchorBullet').css({ "position": "fixed" });
      } else {
        $('#anchorBullet').attr('style', '')
      }
    })


    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "Introduction-block";

    bulletItems
      .parent().removeClass("is-active")
      .end().filter("[href='#" + id + "']").parent().addClass("is-active");
  })
}

function clearTbAnchorHref() {
  $('#anchorBtn').off('click')
}

function tbAnchorHref() {
  var header_height = $('#header-block').outerHeight();

  //點擊空白處關閉
  $(document).mouseup(function (e) {
    var _con = $('.anchor-bullet-sticky ');
    var anchorBtn = $('#anchorBtn');
    if (!_con.is(e.target) && _con.has(e.target).length === 0 && !anchorBtn.is(e.target) && anchorBtn.has(e.target).length === 0) { // Mark 1
      if (!$('.anchor-bullet-wrapper').hasClass('is-hidden-tb')) {
        $('.anchor-bullet-wrapper').addClass('is-hidden-tb');
      }
    }
  });

  $('#anchorBtn').on('click', function (e) {
    e.preventDefault();
    if ($('.anchor-bullet-wrapper').hasClass('is-hidden-tb')) {
      $('.anchor-bullet-wrapper').removeClass('is-hidden-tb');
    } else {
      $('.anchor-bullet-wrapper').addClass('is-hidden-tb');
    }
    // $('.anchor-bullet-wrapper').toggleClass('is-hidden-tb');
  })

  $('.anchor-bullet-sticky > li > a').on('click', function () {
    $('.anchor-bullet-wrapper').addClass('is-hidden-tb')
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - header_height + 1
    }, 500);

    return false;
  });

  var bulletAnchor = $(".anchor-bullet-sticky"),

    bulletItems = bulletAnchor.find("a"),

    scrollItems = bulletItems.map(function () {
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

  let solutionTop = $('#Introduction-block').offset().top - header_height
  if ($(this).scrollTop() > solutionTop - 1) {
    $('#anchorBtn').show(0);
  } else {
    $('#anchorBtn').hide(0);
    $('.anchor-bullet-wrapper').addClass('is-hidden-tb')
  }

  $(window).on('scroll', function () {
    // console.log('現在是tb事件')

    let solutionTop = $('#Introduction-block').offset().top - header_height
    if ($(this).scrollTop() > (solutionTop - (window.innerHeight / 2))) {
      $('#anchorBtn').show(0);
    } else {
      $('#anchorBtn').hide(0);
      $('.anchor-bullet-wrapper').addClass('is-hidden-tb')
    }

    var fromTop = $(this).scrollTop()
    var cur = scrollItems.map(function () {
      if (($(this).offset().top - header_height) < fromTop)

        return this;
    });




    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";


    bulletItems
      .parent().removeClass("is-active")
      .end().filter("[href='#" + id + "']").parent().addClass("is-active");
  })
}
