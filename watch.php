<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
    />
    <link rel="stylesheet" href="css/style.css">
    <title>ntube</title>

    <script
      src="https://kit.fontawesome.com/2d323a629b.js"
      crossorigin="anonymouse"
    ></script>
    <script src="js/main.js" defer></script>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="logo">
        <i class="fab fa-youtube"></i>
        <span class="title">Youtube</span>
      </div>
      <div class="icons">
        <i class="fas fa-search"></i>
        <i class="fas fa-ellipsis-v"></i>
      </div>
    </header>

    <!-- View Player -->
    <section class="player">
      <video controls src="video/Hiking.mp4"></video>
    </section>

    <div class="infoAndUpNext">
      <!-- Video Info -->
      <section class="info">
        <!-- Metadata -->
        <div class="metadata">
          <ul class="hashtags">
            <li>#DreamCidubg</li>
            <li>#DreamCoders</li>
            <li>#Ellie</li>
          </ul>
          <div class="titleAndButton">
            <span class="title clamp">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </span>
            <button class="moreBtn">
              <i class="fas fa-caret-down"></i>
            </button>
          </div>
          <span class="views">1M views 1 month ago</span>
        </div>
        <!-- Actions -->
        <ul class="actions">
          <li><button><i class=" active fas fa-thumbs-up"></i><span>1K</span></button></li>
          <li><button><i class="fas fa-thumbs-down"></i><span>0</span></button></li>
          <li><button><i class="fas fa-share"></i><span>Share</span></button></li>
          <li><button><i class="fas fa-plus"></i><span>Save</span></button></li>
          <li>
            <button>
              <i class="fas fa-flag"></i><span>Report</span>
            </button>
          </li>
        </ul>
        <!-- Channel Description -->
        <div class="channel">
          <div class="metadata">
            <img src="image/man.jpg" alt="">
            <div class="info">
              <span class="name">냄수</span>
              <span class="subscribers">1M subscribers</span>
            </div>
          </div>
          <button class="subscribe">subscribe</button>
        </div>
      </section>

      <!-- Up Next -->
      <section class="upNext">
        <span class="title">Up next</span>
        <ul>
          <li class="item">
            <div class="img"><img src="image/sample.png" alt="" /></div>
            <div class="info">
              <span class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, optio.</span>
              <span class="name">ㄴㄴ</span>
              <span class="views">82K views</span>
            </div>
            <button class="moreBtn"></button>
          </li>
          <li class="item">
            <div class="img"><img src="image/sample.png" alt="" /></div>
            <div class="info">
              <span class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, optio.</span>
              <span class="name">ㄴㄴ</span>
              <span class="views">82K views</span>
            </div>
            <button class="moreBtn"></button>
          </li>
          <li class="item">
            <div class="img"><img src="image/sample.png" alt="" /></div>
            <div class="info">
              <span class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, optio.</span>
              <span class="name">ㄴㄴ</span>
              <span class="views">82K views</span>
            </div>
            <button class="moreBtn"></button>
          </li>
        </ul>
      </section>
    </div>
  </body>
</html>
