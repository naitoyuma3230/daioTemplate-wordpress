<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="株式会社大王実業" />
  <meta name="author" content="NaitoYuma" />
  <title>株式会社&ensp;大王実業</title>
  <!-- Favicon-->
  <link rel="<?php echo wp_upload_dir()['baseurl']; ?>/2022/04/daioLogo-icon.png">
  <link rel="SHORTCUT ICON" href="<?php echo wp_upload_dir()['baseurl']; ?>/2022/04/daioLogo-icon.png" />
  <link rel="apple-touch-icon" href="<?php echo wp_upload_dir()['baseurl']; ?>/2022/04/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" type="image/png" href="<?php echo wp_upload_dir()['baseurl']; ?>/2022/04/android-touch-icon.png">
  <!-- FontAwesome Icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css">
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- animation.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- swiper.css -->
  <link rel="stylesheet" href="<?php echo (get_theme_file_uri()); ?>/plugin/swiper/swiper-bundle.min.css" />
  <!-- mycss -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo (get_theme_file_uri()); ?>/css/daio.css" />
  <link rel="stylesheet" href="<?php echo (get_theme_file_uri()); ?>/css/nav.css" />
  <link rel="stylesheet" href="<?php echo (get_theme_file_uri()); ?>/css/scroll.css" />
  <link rel="stylesheet" href="<?php echo (get_theme_file_uri()); ?>/css/scrollDown.css" />
  <link rel="stylesheet" href="<?php echo (get_theme_file_uri()); ?>/css/mySwiper.css" />
  <link rel="stylesheet" href="<?php echo (get_theme_file_uri()); ?>/css/loading.css" />
  <!-- jquery -->
  <script src="<?php echo (get_theme_file_uri()); ?>/plugin/jquery/jquery.min.js"></script>
  <!-- fontAwesome -->
  <script src="https://kit.fontawesome.com/aa3c2b1009.js" crossorigin="anonymous"></script>
  <!-- swiper.js -->
  <script src="<?php echo (get_theme_file_uri()); ?>/plugin/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo (get_theme_file_uri()); ?>/js/mySwiper.js"></script>
  <?php wp_head() ?>
</head>

<body>
  <div id="splash">
    <div id="splash-logo">
      <h1>株式会社&ensp;大王実業</h1>
      <div class="v-hr-green text-white"></div>
      <div class="text-center">
        <p style="white-space: nowrap;">藤枝MYFCのオフィシャルパートナーです</p>
        <img src="<?php echo (get_theme_file_uri()); ?>/assets/EMBLEM.png" style="width: 200px;
	height: 200px;
	border-radius: 50%;" />
      </div>
    </div>
  </div>
  <div class=" splashbg1">
  </div>
  <div class="splashbg2"></div>

  <div id="container" class="text-center">
    <header>
      <div class="openbtn1"><span></span><span></span><span></span></div>
      <nav id="g-nav">
        <div id="g-nav-list">
          <div class="menu-items">
            <div id="move-home">
              <i class="fa-solid fa-house"></i>
              <div>ホーム</div>
            </div>
            <div id="move-service">
              <i class="fa-solid fa-handshake"></i>
              <div>事業内容</div>
            </div>
            <div id="move-company">
              <i class="fa-solid fa-building"></i>
              <div>会社概要</div>
            </div>
            <div id="move-production">
              <i class="fa-solid fa-hammer"></i>
              <div>実績紹介</div>
            </div>
            <div id="move-about">
              <i class="fa-solid fa-user"></i>
              <div>代表紹介</div>
            </div>
          </div>
        </div>
      </nav>
      <div class="circle-bg"></div>
    </header>

    <main id="main">
      <div class="top-image" style="position: relative" id="home">
        <div class="main-bg-image">
          <div class="imges img1"></div>
          <div class="imges img2"></div>
          <div class="imges img3"></div>
          <div class="imges img4"></div>
          <div class="imges img5"></div>
          <div class="main-contents">
            <section class="justify-center" style="box-shadow: 0 5px 7px rgba(0, 0, 0, 0.22)">
              <div class="text-center items-area margin-y-40-80">
                <div class="cloud-loop">
                  <img src="<?php echo (get_theme_file_uri()); ?>/assets/daioLogo-12.jpg" class="rounded-circle main-logo" />
                  <div class="cloud-line">
                    <img src="<?php echo (get_theme_file_uri()); ?>/assets/cloud-line-13.jpg" />
                  </div>
                </div>
                <h1 style="color: #0c6b41; font-weight: 800">
                  株式会社&ensp;大王実業
                </h1>
                <div class="text-center margin-y-40">
                  <h3>この街に貢献したい</h3>
                  <div class="d-flex align-end border-b mb-20">
                    <div class="loop-img">
                      <img src="<?php echo (get_theme_file_uri()); ?>/assets/city-line-05.jpg" />
                      <img src="<?php echo (get_theme_file_uri()); ?>/assets/city-line-05.jpg" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="scrolldown2">
                <span>Scroll</span>
              </div>
            </section>
          </div>
        </div>
      </div>
      <section class="section-area justify-start" id="service">
        <div class="title-box2 marginx-10">
          <h2 class="text-left">SERVICE</h2>
          <h4 class="text-rigth margin-0">事業内容</h4>
        </div>
      </section>

      <section>
        <div class="slide-cards-area">
          <div class="scroll-area">
            <div class="slide-card">
              <div class="align-center justify-center">
                <i class="fa-solid fa-hammer product-icon"></i>
                <h4 class="border-b">外壁屋根工事業</h4>
              </div>
              <div class="card-catch-img yane"></div>
              <div class="slide-card-contents">
                <p>
                  建物の外壁工事やリフォーム工事全般を行っています。外壁塗装工事、金属屋根工事、防水工事等で500棟以上の実績を誇ります。
                </p>
              </div>
            </div>
            <div class="slide-card">
              <div class="align-center justify-center">
                <i class="fa-solid fa-rotate product-icon"></i>
                <h4 class="border-b">空き家再生</h4>
              </div>
              <div class="card-catch-img akiya"></div>
              <div class="slide-card-contents">
                <p>
                  近年社会問題となっている空き家を弊社でリフォームし新たな価値を提供します。
                </p>
              </div>
            </div>
            <div class="slide-card">
              <div class="align-center justify-center">
                <i class="fa-solid fa-city product-icon"></i>
                <h4 class="border-b">不動産事業</h4>
              </div>
              <div class="card-catch-img fudo"></div>
              <div class="slide-card-contents">
                <p>
                  地域の戸建て住宅、集合住宅、駐車場等を需要のある方にお貸ししています。
                </p>
              </div>
            </div>
            <div class="slide-card">
              <div class="align-center justify-center">
                <i class="fa-solid fa-earth-asia product-icon"></i>
                <h4 class="border-b">中国貿易事業</h4>
              </div>
              <div class="card-catch-img boueki"></div>
              <div class="slide-card-contents">
                <p>
                  日本と中国の両国の間で、需要と供給を繋ぐ重要な役割を果たします。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="justify-start" id="company">
        <div class="title-box2 marginx-10">
          <h2 class="text-left">COMPANY</h2>
          <h4 class="text-rigth margin-0"></h4>
        </div>
      </section>
      <section class="justify-center">
        <div class="text-center">
          <h3>会社概要</h3>
          <div class="v-hr-green"></div>
          <div class="justify-center margin-y-40">
            <table class="mytable">
              <tr>
                <th>社名</th>
                <td>株式会社&emsp;大王実業</td>
              </tr>
              <tr>
                <th>代表者</th>
                <td>
                  <rb>ワン&emsp;レイ</rb><br />
                  <span>王&emsp;磊</span>
                </td>
              </tr>
              <tr>
                <th>設立年</th>
                <td>2013年</td>
              </tr>
              <tr>
                <th class="align-middle">所在地</th>
                <td>
                  本社：藤枝市緑町1-4-21 <br />
                  岡部事務所：藤枝市岡部町内谷627-15
                </td>
              </tr>
            </table>
          </div>
        </div>
      </section>

      <section class="section-area justify-start" id="production">
        <div>
          <div class="title-box2 marginx-10">
            <h2 class="text-left">PRODUCTIOIN</h2>
            <h4 class="text-rigth margin-0">実績紹介</h4>
          </div>
        </div>
      </section>

      <section>
        <div class="justify-center">
          <h3 class="title-illust margin-0">
            <i class="fa fa-camera product-icon"></i>Gallery
          </h3>
        </div>
        <div class="justify-center">
          <div class="d-grid-3-3 gallery-imges">
            <div class="img6"></div>
            <div class="img7"></div>
            <div class="img8"></div>
            <div class="img9"></div>
            <div class="img10"></div>
            <div class="img1"></div>
            <div class="img12"></div>
            <div class="img15"></div>
            <div class="img2"></div>
          </div>
        </div>
        <div class="d-flex align-end bg-title">
          <div class="bg-title-img house"></div>
          <div class="icon-fromt-title">一般住宅</div>
        </div>
        <!-- スライダーのメインコンテナの div 要素（必須） -->
        <div class="swiper m-bottom-40 swiper-card-outline">
          <!-- スライドを囲む div 要素（必須） -->
          <div class="swiper-wrapper">
            <!-- それぞれのスライドの div 要素（必須） -->
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">居酒屋店舗</div>
                <div class="justify-center">
                  <div class="swiper-background img5">
                    <div class="sub-img right img5-b sub-img-text">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根の改装工事</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">一般住宅</div>
                <div class="justify-center">
                  <div class="swiper-background img9">
                    <div class="sub-img right img9-b sub-img-text">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根の改装工事</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">空き家改修</div>
                <div class="justify-center">
                  <div class="swiper-background img11-b">
                    <div class="sub-img left img11 sub-img-text">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根の改装工事</div>
              </div>
            </div>
          </div>
          <!-- ページネーションの div 要素（省略可能） -->
          <div class="swiper-pagination"></div>
          <!-- ナビゲーションボタンの div 要素（省略可能） -->
          <!-- <div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div> -->
        </div>

        <div class="d-flex align-end margin-y-40 bg-title">
          <div class="bg-title-img apart"></div>
          <div class="icon-fromt-title">アパート・工場・学校</div>
        </div>
        <!-- スライダーのメインコンテナの div 要素（必須） -->
        <div class="swiper m-bottom-40 swiper-card-outline">
          <!-- スライドを囲む div 要素（必須） -->
          <div class="swiper-wrapper">
            <!-- それぞれのスライドの div 要素（必須） -->
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">工場・製造所</div>
                <div class="justify-center">
                  <div class="swiper-background img3">
                    <div class="sub-img img3-b sub-img-text">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根の改装工事</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">明誠高校</div>
                <div class="justify-center">
                  <div class="swiper-background img1">
                    <div class="sub-img img1-b sub-img-text">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根の改装工事</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">集合住宅・アパート</div>
                <div class="justify-center">
                  <div class="swiper-background img2">
                    <div class="sub-img sub-img-text right img2-b">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根の改装工事</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">集合住宅・アパート</div>
                <div class="justify-center">
                  <div class="swiper-background img6">
                    <div class="sub-img sub-img-text img6-b">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根塗装工事</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">集合住宅・アパート</div>
                <div class="justify-center">
                  <div class="swiper-background img7">
                    <div class="sub-img sub-img-text img7-b">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根塗装工事</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">集合住宅・アパート</div>
                <div class="justify-center">
                  <div class="swiper-background img8">
                    <div class="sub-img sub-img-text img8-b">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">外壁・屋根塗装工事</div>
              </div>
            </div>
          </div>
          <!-- ページネーションの div 要素（省略可能） -->
          <div class="swiper-pagination"></div>

          <!-- ナビゲーションボタンの div 要素（省略可能） -->
          <!-- <div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div> -->

          <!-- スクロールバーの div 要素（省略可能） -->
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>

        <div class="d-flex align-end margin-y-40 bg-title">
          <div class="bg-title-img yane"></div>
          <div class="icon-fromt-title">金属屋根工事</div>
        </div>
        <!-- スライダーのメインコンテナの div 要素（必須） -->
        <div class="swiper m-bottom-40 swiper-card-outline">
          <!-- スライドを囲む div 要素（必須） -->
          <div class="swiper-wrapper">
            <!-- それぞれのスライドの div 要素（必須） -->
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">一般住宅ストレート屋根改装</div>
                <div class="justify-center">
                  <div class="swiper-background img4">
                    <div class="sub-img img4-b sub-img-text">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">金属屋根工事</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">一般住宅瓦屋根改装</div>
                <div class="justify-center">
                  <div class="swiper-background img10">
                    <div class="sub-img img10-b sub-img-text">Befor</div>
                  </div>
                </div>
                <div class="swiper-text">金属屋根工事</div>
              </div>
            </div>
          </div>
          <!-- ページネーションの div 要素（省略可能） -->
          <div class="swiper-pagination"></div>

          <!-- ナビゲーションボタンの div 要素（省略可能） -->
          <!-- <div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div> -->

          <!-- スクロールバーの div 要素（省略可能） -->
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>

        <div class="d-flex align-end margin-y-40 bg-title">
          <div class="bg-title-img park"></div>
          <div class="icon-fromt-title">ボランティア活動</div>
        </div>
        <!-- スライダーのメインコンテナの div 要素（必須） -->
        <div class="swiper m-bottom-40 swiper-card-outline">
          <!-- スライドを囲む div 要素（必須） -->
          <div class="swiper-wrapper">
            <!-- それぞれのスライドの div 要素（必須） -->
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">遊具塗装の修繕</div>
                <div class="justify-center">
                  <div class="swiper-background img12"></div>
                </div>
                <div class="swiper-text"></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">遊具塗装の修繕</div>
                <div class="justify-center">
                  <div class="swiper-background img13"></div>
                </div>
                <div class="swiper-text"></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">遊具塗装の修繕</div>
                <div class="justify-center">
                  <div class="swiper-background img14"></div>
                </div>
                <div class="swiper-text"></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="swiper-title">遊具塗装の直し</div>
                <div class="justify-center">
                  <div class="swiper-background img15"></div>
                </div>
                <div class="swiper-text"></div>
              </div>
            </div>
          </div>
          <!-- ページネーションの div 要素（省略可能） -->
          <div class="swiper-pagination"></div>
          <!-- ナビゲーションボタンの div 要素（省略可能） -->
          <!-- <div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div> -->
          <!-- スクロールバーの div 要素（省略可能） -->
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>
      </section>

      <section class="section-area justify-start" id="about">
        <div class="title-box2 marginx-10">
          <h2 class="text-left">ABOUT US</h2>
          <h4 class="text-rigth margin-0">代表紹介</h4>
        </div>
      </section>

      <section class="section-area justify-center text-center">
        <div class="justify-center bg-green card-outline items-area">
          <div class="text-center text-white card-inline">
            <div class="card-contents margin-top-20">
              <img src="<?php echo (get_theme_file_uri()); ?>/assets\img\thumbnails\faceimage.png" class="img-thumbnail rounded-circle" style="width: 40%; margin: 0 auto" />
            </div>
            <div>
              <h4 class="">代表取締役</h4>
              <h3 class="margin-0">王&ensp;磊</h3>
              <p class="margin-0">ワン&ensp;レイ</p>
            </div>
            <div class="v-hr-white"></div>
            <h4 class="text-white">社長挨拶</h4>
            <div class="justify-center">
              <div class="text-area">
                <p>
                  仕事とは社会貢献だと思います。今は外壁屋根工事のほかにも不動産賃貸、空き家再生、貿易関係等を手がけていますがどの仕事においても、自分の働きが誰かの何かに貢献することに
                  直結していると思っています。それはお客様ひとりに対してなのか、ひとつのグループに対してなのか、はたまたひとつの自治体、あるいは国や全世界に対してなのか、その規模に違いがあるだけです。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="history-area">
        <section class="section-area justify-start">
          <div class="title-box2 marginx-10">
            <h2 class="text-left" style="color: white">PROFILE</h2>
            <h4 class="text-rigth margin-0">プロフィール</h4>
          </div>
        </section>
        <div class="section-area justify-center">
          <div class="items-area">
            <div class="text-center">
              <h3>経歴</h3>
              <div class="v-hr-green"></div>
            </div>

            <div class="history-margin">
              <ul class="timeline">
                <li>
                  <dl>
                    <dt>1989年</dt>
                    <div>
                      <div class="list-box">
                        <h5>中国・天津市で誕生</h5>
                      </div>
                    </div>
                  </dl>
                  <span class="border-line"></span>
                </li>
                <li>
                  <dl>
                    <dt>2005年</dt>
                    <div>
                      <div class="list-box">
                        <h5>留学生として来日</h5>
                        <div class="list-items">
                          <h5>日本バスケ界での活躍</h5>
                          <p>藤枝明誠高校入学</p>
                          <p>東海大会優勝・全国大会出場</p>
                          <p>静岡産業大学入学</p>
                          <p>国体出場・リバウンド王賞獲得</p>
                        </div>
                      </div>
                    </div>
                  </dl>
                  <span class="border-line"></span>
                </li>
                <li>
                  <dl>
                    <dt>2013年</dt>
                    <div class="list-box">
                      <h5>大王実業創立</h5>
                      <div class="list-items">
                        <h5>企業のきっかけ</h5>
                        <h4>
                          大学卒業当時からしばらくは月給17万円で働き、悔し涙を流した夜もありましたが、その経験を経て、一度きりの人生だからこそ恐れず派手にやり切りたいと決意し起業に至りました。
                        </h4>
                      </div>
                    </div>
                  </dl>
                  <span class="border-line"></span>
                </li>
                <li>
                  <dl>
                    <dt>2022年</dt>
                    <div class="list-box">
                      <h5>家族・その他活動</h5>
                      <div class="list-items">
                        <p>
                          妻と子5人の7人家族で藤枝市岡部町で暮らしています。会社としての仕事のほかにも、一般社団法人藤枝青年会議所(JC)に所属し活動したり、男子中学生のバスケットチームを作って、志の高い選手の育成を行っておりその全てが社会貢献であると思っています。
                          そしてそんな私も、この社会の恩恵を受ける一員であると心得ます。
                        </p>
                      </div>
                    </div>
                  </dl>
                  <span class="border-line"></span>
                </li>
                <li>
                  <dl>現在</dl>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer-items">
        <div class="footer-content text-left">
          <h4>会社住所</h4>
          <div class="text-light">
            <i class="fa-solid fa-location-dot"></i>&ensp;本社&ensp;静岡県藤枝市緑町1-4-21
          </div>
          <div>
            <i class="fa-solid fa-location-dot"></i>&ensp;工事部&ensp;静岡県藤枝市志太2-1-34
          </div>
          <div>
            <i class="fa-solid fa-location-dot"></i>&ensp;資材置場&ensp;藤枝市八幡469-1
          </div>
        </div>
        <div class="footer-content text-left">
          <h4>電話番号&ensp;FAX</h4>
          <div><i class="fa-solid fa-phone"></i>&ensp;054-631-6988</div>
          <div><i class="fa-solid fa-fax"></i>&ensp;054-631-6989</div>
        </div>
        <div class="footer-content text-left">
          <h4>Links</h4>
          <div>
            <i class="fa-brands fa-twitter" style="font-size: 30px; color: #1da1f2"></i>
            <i class="fa-brands fa-facebook" style="font-size: 35px; color: #1877f2"></i>
            <a href="https://www.instagram.com/leiwang983/">
              <i class="fa-brands fa-instagram" style="font-size: 35px; color: #cf2e92"></i>
            </a>
          </div>
        </div>
        <div style="text-align: center">
          Copyright &copy; 2022 - 株式会社 大王実業
        </div>
      </div>
    </footer>
  </div>
  <!-- loading-container -->
  <script src="<?php echo (get_theme_file_uri()); ?>/js/nav.js"></script>
  <script src="<?php echo (get_theme_file_uri()); ?>/js/myjs.js"></script>
  <script src="<?php echo (get_theme_file_uri()); ?>/js/scroll.js"></script>
  <script src="<?php echo (get_theme_file_uri()); ?>/js/loading.js"></script>
  <?php wp_footer() ?>
</body>

</html>