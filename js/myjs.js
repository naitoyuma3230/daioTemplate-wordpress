$(function () {
  $(".ani-fadeUp").on("inview", function (event, isInView) {
    if (isInView) {
      //表示領域に入った時
      $(this).addClass("animate__animated animate__fadeInUp animate__fadeIn"); //クラス名が付与
    } else {
      //表示領域から出た時
      $(this).removeClass("animate__animated animate__fadeInUp"); //クラス名が除去
    }
  });
  $(".ani-up").on("inview", function (event, isInView) {
    if (isInView) {
      //表示領域に入った時
      $(this).addClass("animate__animated animate__fadeIn animate__slower"); //クラス名が付与
    } else {
      //表示領域から出た時
      $(this).removeClass("animate__animated animate__fadeIn animate__slower"); //クラス名が除去
    }
  });
});
