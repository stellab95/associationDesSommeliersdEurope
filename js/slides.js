$(function () {
  var sWidth = $(".slider_box").width();
  var len = $(".slider_box .slider_panel").length;
  var index = 0;
  var picTimer;

  // create button
  var btn = "<a class='prev'></a><a class='next'></a>";
  $(".slider_box").append(btn);

  // create navbar pictures
  for (var i = 0; i < len; i++) {
    $imgUrl = $(".slider_panel").eq(i).find("img").attr("src");
    // console.log($imgUrl)
    $navItem = '<div class="slider_nav_item"><img src="' + $imgUrl + '"></div>';
    $(".slider_nav").append($navItem);
  }

  // re-arrange slides
  $(".slider_box .slider_con").css({
    "width": sWidth * (len + 2),
    "left": -sWidth
  });
  $(".slider_panel").eq(0).clone().appendTo($(".slider_con"));
  $(".slider_panel").eq(len - 1).clone().prependTo($(".slider_con"));

  // hover
  $(".slider_box .slider_nav .slider_nav_item").mouseenter(function () {
    index = $(".slider_box .slider_nav .slider_nav_item").index(this);
    showPics(index);
  }).eq(0).trigger("mouseenter");

  // Prev
  $(".slider_box .prev").click(function () {
    index -= 1;
    showPics(index);
    // console.log(index);
    if (index == -1) {
      index = len - 1;
    }
  });

  // Next
  $(".slider_box .next").click(function () {
    index += 1;
    showPics(index);
    // console.log(index);
    if (index >= len) {
      index = 0;
    }
  });

  // autoplay
  $(".slider_box").hover(function () {
    clearInterval(picTimer);
  }, function () {
    // console.log("Start")
    showPics(index);
    picTimer = setInterval(function () {
      $(".slider_box .next").trigger("click");
    }, 4000);
  }).trigger("mouseleave");

  // showPics
  function showPics(index) {
    // position
    var nowLeft = -(index + 1) * sWidth;
    if (nowLeft == 0) {
      $(".slider_box .slider_con").stop(true, false).animate({
        "left": nowLeft
      }, 300, function () {
        $(".slider_box .slider_con").stop(true, false).css("left", -sWidth * len);
      });
    } else if (nowLeft == -(len + 1) * sWidth) {
      $(".slider_box .slider_con").stop(true, false).animate({
        "left": nowLeft
      }, 300, function () {
        $(".slider_box .slider_con").stop(true, false).css("left", -sWidth);
      });
    } else {
      $(".slider_box .slider_con").stop(true, false).animate({
        "left": nowLeft
      }, 300);
    }
    if (index == -1) {
      index = len - 1;
    }
    if (index >= len) {
      index = 0;
    }
    // nav
    $(".slider_box .slider_nav .slider_nav_item").removeClass("current").eq(index).addClass("current");
    $(".slider_box .slider_nav .slider_nav_item").stop(true, false).animate({
      "opacity": "0.6"
    }, 300).eq(index).stop(true, false).animate({
      "opacity": "1"
    }, 300);
  }
});