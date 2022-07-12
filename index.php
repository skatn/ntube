<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/index.css?3">
    <title>ntube</title>
    <script src="https://kit.fontawesome.com/48d5ac6e8b.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="menuAndLogo">
        <button class="menu"><i class="fa-solid fa-bars fa-lg"></i></button>
        <div class="logo">
          <i class="fa-brands fa-youtube fa-2xl"></i>
          <span class="title">Youtube</span>
        </div>
      </div>
      <form class="search" action="#" method="get">
        <div class="searchContainer">
          <input type="text" name="" value="" placeholder="검색">
          <i class="fa-solid fa-x fa-lg"></i>
        </div>
        <button class="searchButton">
          <i class="fa-solid fa-magnifying-glass fa-lg"></i>
        </button>
      </form>
      <ul class="icons">
        <li><i class="fa-solid fa-video fa-lg"></i></li>
        <li><i class="fa-solid fa-border-all fa-lg"></i></li>
        <li><i class="fa-regular fa-bell fa-lg"></i></li>
        <li><img src="image/man.jpg" alt=""></li>
      </ul>
    </header>

    <!-- Content -->
    <section class="content">
      <ul class="nav">
        <li class="item">
          <i class="fa-solid fa-house"></i>
          <span>홈</span>
        </li>
        <li class="item">
          <i class="fa-solid fa-compass"></i>
          <span>탐색</span>
        </li>
        <li class="item">
          <i class="fa-solid fa-circle-play"></i>
          <span>Shorts</span>
        </li>
        <li class="item">
          <i class="fa-brands fa-youtube"></i>
          <span>구독</span>
        </li>
        <li class="item">
          <i class="fa-solid fa-box-archive"></i>
          <span>보관함</span>
        </li>
      </ul>
      <div class="videoHeadAndVideo">
        <!-- Play Header -->
        <section class="playHeader">
          <button class="prev">
            <i class="fa-solid fa-angle-left"></i>
          </button>
          <div class="category">
            <btton>전체</btton>
            <btton>음악</btton>
            <btton>게임</btton>
          </div>
          <button class="next">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </section>
        <ul class="video">
          <?php for($i=0; $i < 10; $i++) { ?>
            <li class="item">
              <img src="image/sample.png" alt="">
              <div class="info">
                <div class="img"><img src="image/man.jpg" alt=""/></div>
                <div class="metadata">
                  <div class="title">먹는 브이로그 18탄</div>
                  <div class="nameAndViews">
                    <div class="name">해쭈</div>
                    <div class="views">조회수 30만</div>
                  </div>
                </div>
                <button class="moreBtn">
                  <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </section>
  </body>
</html>
