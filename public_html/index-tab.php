<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alata&display=swap"
      rel="stylesheet"
    /> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet"
    />
    <title>Simple Online Storage - Upload.biz</title>

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/icons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/icons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="194x194"
      href="/icons/favicon-194x194.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="/icons/android-chrome-192x192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/icons/favicon-16x16.png"
    />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta name="msapplication-TileImage" content="/mstile-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <script src="./plugins/notification-manager/notification-manager.js"></script>

    <link
      rel="stylesheet"
      href="plugins/bootstrap/css/bootstrap.min.css?v=<?php echo time(); ?>"
      type="text/css"
    />

    <link
      rel="stylesheet"
      href="plugins/notification-manager/notification-manager.css?v=<?php echo time(); ?>"
      type="text/css"
    />

    <!-- <link rel="stylesheet" href="./slick-theme.css" /> -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.35/sweetalert2.min.css"
      integrity="sha512-doewDSLNwoD1ZCdA1D1LXbbdNlI4uZv7vICMrzxfshHmzzyFNhajLEgH/uigrbOi8ETIftUGBkyLnbyDOU5rpA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- <link
      rel="stylesheet"
      href="./style-again.css?v=1322343233233332332.33322222352223.2422432343221.222523323223213"
    /> -->

    <!-- Slick.css -->
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    /> -->

    <!-- <link rel="stylesheet" href="./css/slick.css" /> -->
    <!-- Slick.css end -->

    <link rel="stylesheet" href="./style-second.css?v=<?php echo time(); ?>" />

    <link rel="stylesheet" href="./style-tab.css?v=<?php echo time(); ?>" />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.35/sweetalert2.min.js"
      integrity="sha512-MmPnuWhEes/JL9MZGGn+lYFQc8M0bwX/VTLXX+Y9GcSPKGjeo9mEiFrcBqyVJ0AJAyuoW71UwTQvgeSU7TK5sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- scripts -->

    <script src="./plugins/jquery/jquery.min.js"></script>
    <script src="./plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/artplayer/dist/artplayer.js"></script> -->

    <!-- <script src="./plugins/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script> -->

    <script src="./plugins/jquery.appear/jquery.appear.js"></script>
    <!-- <script src="./plugins/wow/js/wow.min.js"></script> -->
    <script src="./plugins/countUp.js/countUp.min.js"></script>

    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tipso/1.0.8/tipso.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tipso/1.0.8/tipso.min.js"></script>
  </head>
  <body>
    <noscript>
      <div class="no-javascript">
        <span class="material-icons vertical-middle">warning</span> Warning -
        The site will not function with Javascript disabled
      </div>
    </noscript>

    <div id="notificationsContainer"></div>

    <div class="drag-container">
      <div
        style="
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 60px;
          width: 100%;
        "
      >
        Drop your files to begin uploading...
      </div>
    </div>

    <div class="main-wrapper">
      <div class="upper-wrapper">
        <header class="site-header header-two header_trans-fixed" data-top="92">
          <div class="container">
            <div class="header-inner">
              <div class="site-mobile-logo">
                <a href="index.html" class="logo">
                  <img src="./img/logo.png" alt="site logo" class="main-logo" />

                  <img
                    src="./img/logo.png"
                    alt="site logo"
                    class="sticky-logo"
                    style="display: none"
                  />
                </a>
              </div>
              <!-- end of site-mobile-logo -->
              <div class="toggle-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
              </div>
              <!-- end of toggle menu -->
              <nav class="site-nav nav-two">
                <div class="close-menu">
                  <span>Close</span>
                  <!-- <i class="ei ei-icon_close"></i> -->
                  <img
                    class="mobile-only cross-icon"
                    src="./icons/022-cross.svg"
                    alt=""
                  />
                </div>

                <div class="site-logo">
                  <a href="index.html" class="logo">
                    <img
                      src="./img/logo.png"
                      alt="site logo"
                      class="main-logo"
                    />
                    <img
                      src="./img/logo.png"
                      alt="site logo"
                      class="sticky-logo"
                    />
                  </a>
                </div>

                <div class="menu-wrapper" data-top="992">
                  <ul class="site-main-menu">
                    <li>
                      <!-- <i
                        class="material-icons mobile-only"
                        data-icon="settings"
                      ></i> -->
                      <img
                        class="mobile-only"
                        src="./icons/086-setting.svg"
                        alt=""
                      />
                      <a
                        data-toggle="modal"
                        data-target="#settingModal"
                        href="#"
                        >Settings</a
                      >
                    </li>
                    <li>
                      <!-- <i
                        class="material-icons mobile-only"
                        data-icon="history"
                      ></i> -->
                      <img
                        class="mobile-only"
                        src="./icons/015-schedule.svg"
                        alt=""
                      />
                      <a
                        data-toggle="modal"
                        data-target="#historyModal"
                        href="#"
                        >History</a
                      >
                    </li>
                    <li>
                      <!-- <i
                        class="material-icons mobile-only"
                        data-icon="rss_feed"
                      ></i> -->
                      <img
                        class="mobile-only"
                        src="./icons/024-dashboard.svg"
                        alt=""
                      />
                      <a
                        data-toggle="modal"
                        data-target="#captchaModal"
                        href="#"
                        >Blogs</a
                      >
                    </li>
                    <li>
                      <!-- <i
                        class="material-icons mobile-only"
                        data-icon="phone_in_talk"
                      ></i> -->
                      <img
                        class="mobile-only"
                        src="./icons/090-smartphone.svg"
                        alt=""
                      />
                      <a href="/contact">Contact</a>
                    </li>
                  </ul>
                </div>
                <!-- end of menu-wrapper -->
              </nav>
              <!-- end of site-nav -->
            </div>
            <!-- end of header-inner -->
          </div>
          <!-- end of container -->
        </header>
        <style>
          .navbar a {
            color: #fff;
          }
          .floatingIcon {
            color: #fff;
            pointer-events: none;
          }
        </style>

        <div class="dropzone-wrapper">
          <div class="blue-rectangle" style="position: relative">
            <div
              style="
                position: absolute;
                left: 0;
                top: -200px;
                width: 100%;
                height: 600px;
                overflow: hidden;
                z-index: 1;
              "
            >
              <div
                class="floatingIcon"
                style="position: absolute; bottom: 0; left: 10%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up-left 11s ease-in-out infinite;
                    font-size: 22px;
                  "
                  >movie</span
                >
              </div>
              <div
                class="floatingIcon hide-small-screen"
                style="position: absolute; bottom: 0; left: 20%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up 5s ease-in-out infinite;
                    font-size: 37px;
                  "
                  >folder</span
                >
              </div>
              <div
                class="floatingIcon"
                style="position: absolute; bottom: 0; left: 30%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up 9s ease-in-out infinite;
                    font-size: 51px;
                  "
                  >photo</span
                >
              </div>
              <div
                class="floatingIcon hide-small-screen"
                style="position: absolute; bottom: 0; left: 40%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up-left 9s ease-in-out infinite;
                    font-size: 42px;
                  "
                  >inventory_2</span
                >
              </div>
              <div
                class="floatingIcon"
                style="position: absolute; bottom: 0; left: 50%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up 7s ease-in-out infinite;
                    font-size: 30px;
                  "
                  >markunread</span
                >
              </div>
              <div
                class="floatingIcon hide-small-screen"
                style="position: absolute; bottom: 0; left: 60%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up 4s ease-in-out infinite;
                    font-size: 41px;
                  "
                  >insert_drive_file</span
                >
              </div>
              <div
                class="floatingIcon"
                style="position: absolute; bottom: 0; left: 70%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up-left 9s ease-in-out infinite;
                    font-size: 34px;
                  "
                  >wb_cloudy</span
                >
              </div>
              <div
                class="floatingIcon hide-small-screen"
                style="position: absolute; bottom: 0; left: 80%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up-left 6s ease-in-out infinite;
                    font-size: 52px;
                  "
                  >picture_as_pdf</span
                >
              </div>
              <div
                class="floatingIcon"
                style="position: absolute; bottom: 0; left: 90%"
              >
                <span
                  class="material-icons"
                  style="
                    animation: icon-up 10s ease-in-out infinite;
                    font-size: 67px;
                  "
                  >photo_library</span
                >
              </div>
            </div>
            <div class="upper-container">
              <!-- 1st -->
              <div class="image-card animated-icon">
                <img src="./icons/041-folder.svg" alt="" />
              </div>
              <!-- 2nd -->
              <!-- 3rd -->
              <div class="cloud-card animated-icon">
                <img src="./icons/018-cloud-computing.svg" alt="" />
              </div>
            </div>
            <div class="lower-container">
              <div class="music-card animated-icon">
                <img src="./icons/059-music note.svg" alt="" />
              </div>
              <div
                style="position: relative; z-index: 2"
                class="drop-main margin-center"
              >
                <div class="big-header-container margin-center">
                  <div class="big-header animated fadeIn">
                    <span class="hero-header">Secure, fast and easy</span>
                    <span>file transfers</span>
                  </div>
                  <p class="big-header-para animated fadeIn animate__delay-1s">
                    - Upload a file below to get started -
                  </p>
                  <span
                    class="material-icons"
                    style="animation: float-no-shadow 2s ease-in-out infinite"
                    >keyboard_arrow_down</span
                  >
                </div>
              </div>
              <div class="password-card animated-icon">
                <img src="./icons/secureupdate.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- dropzone -->

      <div
        class="drop-area"
        style="
          max-width: 600px;
          margin: 0 auto;
          transform: translatey(336px);
          overflow: hidden;
          margin-bottom: 10rem;
          z-index: 2;
          position: relative;
        "
      >
        <div class="drop-area-child">
          
          
            <!-- <nav class="tabset--nav">
                <div class="nav--item -is--active" data-tab-target="tab-1">
                    One
                </div>
                
                <div class="nav--item" data-tab-target="tab-2">
                    Two
                </div>
                
                <div class="nav--item" data-tab-target="tab-3">
                    Three
                </div>
                
                <div class="nav--item" data-tab-target="tab-4">
                    Four
                </div>
            </nav> -->


     <div class="button-group toggle-button-group tabset--nav">
            
            <!-- 1 -->
            <div
              class="active upload-btn nav--item"
              role="tab"
              
              data-tab-target="tab-1"
              
            >
              <img src="./icons/018-cloud-computing.svg" alt="" />
            </div>

            <!-- 2 -->
            <div
              class="mic-btn nav--item"
              data-tab-target="tab-2"
        
              

            >
              <img src="./icons/064-microphone.svg" alt="" />
            </div>

            <!-- 3 -->
            <div
              class="camera-btn nav--item"
              data-tab-target="tab-3"
              
            >
              <img src="./icons/009-camera.svg" alt="" />
            </div>

            <!-- 4 -->
            <div
              class="video-btn nav--item"
              data-tab-target="tab-4"
              
            >
              <img src="./icons/010-camera-video.svg" alt="" />
            </div>
    </div>
            
          
          
            <div class="tabset--wrapper">
            <div class="tabset--content" data-active-tab="tab-1">
              <!-- 1 -->
              <div
                class="upload-border-file tabset--section tab-file-section tabset--section"
                data-slidernav="https://upload.dnscheck.io/icons/018-cloud-computing.svg"
                style="text-align: center"
              >
                <div
                  class="drop-instructions"
                  style="
                    padding-bottom: 10px;
                    color: #4c9ca2;
                    margin-top: 15px;
                    font-weight: 300;
                  "
                >
                  Drag & Drop files here to upload
                </div>
                <button class="browseButton" id="dragbtn">Browse Files</button>
                <style>
                  .browseButton {
                    padding: 15px;
                    background-color: white;
                    border: 1px solid #e3e3e3;
                    border-radius: 10px;
                    transition: background-color 1.5s ease;
                    width: auto;
                  }
                  .browseButton:hover {
                    background-color: #e3e3e3;
                  }
                  *:focus {
                    outline: 0 !important;
                  }
                </style>
              </div>

              <!-- 2 -->
              <!-- <div
              class="upload-border-file tabset--section rec-btn-fixer tab-rec-section"
              data-slidernav="https://upload.dnscheck.io/icons/064-microphone.svg"
              style="text-align: center"
              id="tab-rec-section"
            >
             <div class="wrapper">
              <section class="main-controls">
                <canvas class="visualizer"></canvas>
                <div id="buttons">
                  <button class="record">Record</button>
                  <button class="stop">Stop</button>
                </div>
              </section>
        
              <section class="sound-clips">
        
        
              </section>
             </div>

           
            </div> -->

              <div
                class="upload-border-file tabset--section"
                data-slidernav="https://upload.dnscheck.io/icons/064-microphone.svg"
                style="text-align: center"
                id="tab-rec-section"
              >
                <button class="browseButton record-btn" id="micbtn">
                  <span class="pulsating-circle"> </span>
                  <span>RECORD</span>
                </button>
                <style>
                  .browseButton {
                    padding: 15px;
                    background-color: white;
                    border: 1px solid #e3e3e3;
                    border-radius: 10px;
                    transition: background-color 1.5s ease;
                    width: auto;
                    position: relative;
                  }
                  .browseButton:hover {
                    background-color: #e3e3e3;
                  }
                  *:focus {
                    outline: 0 !important;
                  }
                </style>
              </div>

              <!-- 3 -->
              <div
                class="upload-border-file tabset--section cam-slider-section tab-cam-section"
                id="tab-cam-section"
                data-slidernav="https://upload.dnscheck.io/icons/009-camera.svg"
                style="text-align: center"
              >
                <div class="cam-img-container">
                  <img
                    src="https://imagingedge.sony.net/img/iewebcam/pc/PC_Webcam_M_1.jpg?fbclid=IwAR3tdzVb-7XlFV5Ip-hwmJCBWa1qghs0bM9HlbKx3-D5GwTlzjnIQxK2-pY"
                    alt=""
                  />
                </div>

                <div class="img-cap-icon-wrapper">
                  <img src="./icons/082-capture.svg" alt="" />

                  <p>CAPTURE PHOTO</p>
                </div>

                <div class="image-cap-click-wrapper" style="display: none">
                  <div class="pause-icon-wrapper" id="image-new">
                    <img src="./icons/camera-white.svg" alt="" />
                    <!-- <p>NEW PHOTO</p> -->
                  </div>
                  <div class="upload-icon-wrapper" id="image-upload">
                    <img src="./icons/cloud-white.svg" alt="" />
                    <!-- <p>UPLOAD</p> -->
                  </div>
                </div>

                <style>
                  .browseButton {
                    padding: 15px;
                    background-color: white;
                    border: 1px solid #e3e3e3;
                    border-radius: 10px;
                    transition: background-color 1.5s ease;
                    width: auto;
                  }
                  .browseButton:hover {
                    background-color: #e3e3e3;
                  }
                  *:focus {
                    outline: 0 !important;
                  }
                </style>
              </div>

              <!-- 4 -->
              <div
                class="upload-border-file tabset--section cam-slider-section tab-video-section"
                id="tab-video-section"
                data-slidernav="https://upload.dnscheck.io/icons/010-camera-video.svg"
                style="text-align: center"
              >
                <div class="cam-video-container">
                  <img
                    src="https://imagingedge.sony.net/img/iewebcam/pc/PC_Webcam_M_1.jpg?fbclid=IwAR3tdzVb-7XlFV5Ip-hwmJCBWa1qghs0bM9HlbKx3-D5GwTlzjnIQxK2-pY"
                    alt=""
                  />
                </div>

                <div class="video-cap-icon-wrapper">
                  <img src="./icons/010-camera-video.svg" alt="" />
                  <p>RECORD</p>
                </div>

                <div class="video-cap-click-wrapper" style="display: none">
                  <div class="pause-icon-wrapper">
                    <img src="./icons/play-white.svg" alt="" />
                    <!-- <p>PAUSE</p> -->
                  </div>
                  <div class="upload-icon-wrapper">
                    <img src="./icons/cloud-white.svg" alt="" />
                    <!-- <p>UPLOAD</p> -->
                  </div>
                </div>

                <style>
                  .browseButton {
                    padding: 15px;
                    background-color: white;
                    border: 1px solid #e3e3e3;
                    border-radius: 10px;
                    transition: background-color 1.5s ease;
                    width: auto;
                  }
                  .browseButton:hover {
                    background-color: #e3e3e3;
                  }
                  *:focus {
                    outline: 0 !;
                  }
                </style>
              </div>
            </div>

            <!-- <ul class="slick-dots-loading" style="">
            <li class="slick-active"><a><img src="https://upload.dnscheck.io/icons/018-cloud-computing.svg"></a></li>
            <li class=""><a><img src="https://upload.dnscheck.io/icons/064-microphone.svg"></a></li>
            <li class=""><a><img src="https://upload.dnscheck.io/icons/009-camera.svg"></a></li>
            <li class=""><a><img src="https://upload.dnscheck.io/icons/010-camera-video.svg"></a></li>
         </ul> -->
          </div>
          <!-- Files -->
          <div class="file-main" style="display: none">
            <h2
              class="your-uploads"
              style="text-align: center; color: grey; padding: 30px"
            >
              <span class="material-icons" style="vertical-align: middle"
                >queue</span
              >
              Your uploads
            </h2>

            <div class="file-container">
              <div class="bottom"></div>
            </div>

            <!-- Finished -->
            <div class="afterUpload-wrapper" style="display: none">
              <div class="afterUpload-Container">
                <div class="left-side">
                  <div class="success-message">
                    <h3>You're done!</h3>
                    <p style="width: 105%">
                      Share your link with family and friends to allow them to
                      download your file.
                    </p>
                    <p style="width: 105%">
                      If you would like to edit your file in the future, then
                      save the edit link in a safe place (don't share it with
                      anyone else).
                    </p>
                  </div>
                </div>
                <div class="right-side">
                  <div class="validation-link-container">
                    <p>
                      <span
                        class="material-icons"
                        style="vertical-align: middle"
                        >link</span
                      >
                      Your Link
                    </p>
                    <div
                      style="
                        padding: 2px;
                        margin: 0;
                        border-radius: 5px 5px 0px 0px;
                        border: 1px solid #e1e1e1;
                        position: relative;
                        padding-bottom: 0px;
                        margin-bottom: 35px;
                        border-bottom: 0;
                      "
                    >
                      <input
                        class="file-url select-on-click"
                        readonly=""
                        type="text"
                        value="https://upload.biz/f/ABC123/file.exe"
                        style="
                          width: 100%;
                          padding: 8px;
                          border: 0;
                          color: #7b7b7b;
                          font-size: 16px;
                          background: #fff;
                          font-weight: 400;
                        "
                      /><button
                        class="btn-blue copy-url"
                        data-copytarget="file-url"
                      >
                        <span
                          class="material-icons"
                          style="margin-top: -5px; vertical-align: middle"
                          >add_circle_outline</span
                        >
                        Copy URL
                      </button>
                    </div>
                  </div>
                  <div class="validation-link-container">
                    <p>
                      <span
                        class="material-icons"
                        style="vertical-align: middle"
                        >edit</span
                      >
                      Your Edit Link
                    </p>
                    <div
                      style="
                        padding: 2px;
                        margin: 0;
                        border-radius: 5px 5px 0px 0px;
                        border: 1px solid #e1e1e1;
                        position: relative;
                        padding-bottom: 0px;
                        border-bottom: 0;
                      "
                    >
                      <input
                        class="edit-url select-on-click"
                        readonly=""
                        type="text"
                        value="https://upload.biz/edit/TieKib839Ovlsp"
                        style="
                          width: 100%;
                          padding: 8px;
                          border: 0;
                          color: #7b7b7b;
                          font-size: 16px;
                          background: #fff;
                          font-weight: 400;
                        "
                      /><button
                        class="btn-blue copy-url"
                        data-copytarget="edit-url"
                      >
                        <span
                          class="material-icons"
                          style="margin-top: -5px; vertical-align: middle"
                          >add_circle_outline</span
                        >
                        Copy Edit URL
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Progress -->
            <div class="progress-placeholder" style="display: none">
              <div class="progress-wrapper">
                <div class="progress-container">
                  <div class="pause-icon">
                    <button
                      class="pause-btn"
                      style="border: 0; background: none"
                    >
                      <span
                        class="material-icons pause"
                        style="font-size: 54px; color: #d1d5db"
                        >pause_circle_filled</span
                      >
                    </button>
                  </div>

                  <div
                    class="progress-circle-container"
                    style="
                      position: relative;
                      height: 114px;
                      width: 114px;
                      border-radius: 50%;
                    "
                  >
                    <svg
                      width="120"
                      height="120"
                      style="
                        transform: rotate(-90deg);
                        margin-top: -3px;
                        margin-left: -3px;
                      "
                    >
                      <circle
                        style=""
                        stroke="#d1d5db"
                        stroke-width="12"
                        fill="transparent"
                        r="52"
                        cx="60"
                        cy="60"
                      ></circle>
                      <circle
                        class="progress-circle"
                        stroke="#61cff9"
                        stroke-width="12"
                        fill="transparent"
                        r="52"
                        cx="60"
                        cy="60"
                        style="
                          stroke-dasharray: 326.726px, 326.726px;
                          stroke-dashoffset: 326.726px;
                        "
                      ></circle>
                    </svg>

                    <div
                      style="
                        position: absolute;
                        top: 35px;
                        right: -2px;
                        font-size: 20px;
                        color: #61cff9;
                        text-align: center;
                        width: 100%;
                      "
                    >
                      <span class="percent">0%</span>

                      <div
                        style="
                          font-size: 11px;
                          position: absolute;
                          width: 100%;
                          color: #8f9399;
                          right: 1px;
                        "
                      >
                        <span class="speed">Not started</span>
                      </div>
                    </div>
                  </div>

                  <div class="cross-icon">
                    <button
                      class="delete-file"
                      style="border: 0; background: none"
                    >
                      <span
                        class="material-icons cross"
                        style="font-size: 54px; color: #d1d5db"
                        >cancel</span
                      >
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Preview/Pending -->
            <div class="preview-container-placeholder" style="display: none">
              <div class="preview-container">
                <div class="preview-file-header">
                  <div
                    class="file-icon-container"
                    style="
                      width: 44px;
                      height: 44px;
                      border-radius: 50%;
                      padding-right: 0px;
                      margin-right: 14px;
                    "
                  >
                    <span
                      class="material-icons file-icon"
                      id="myFileIcon"
                      style="
                        font-size: 54px;
                        padding: 0;
                        margin: 0;
                        margin-top: -5px;
                        margin-left: -5px;
                      "
                      >description</span
                    >
                  </div>
                  <div>
                    <h3>
                      <span class="file-title"
                        ><a target="_blank" href="">Loading...</a></span
                      >
                    </h3>
                    <span class="file-meta">53MB</span>
                  </div>

                  <div
                    class="top-progress"
                    style="
                      display: none;
                      position: absolute;
                      left: 0;
                      bottom: -3px;
                      height: 3px;
                      background: linear-gradient(-45deg, #d1d5db, #cacbcc);
                      width: 100%;
                    "
                  >
                    <div
                      style="
                        position: absolute;
                        left: 0;
                        bottom: 0;
                        height: 3px;
                        background: linear-gradient(-45deg, #a6ff3b, #d9f9b2);
                        width: 0%;
                        transition: width 1s ease;
                      "
                    ></div>
                  </div>
                </div>

                <div class="slide-container">
                  <button
                    style="margin-bottom: 20px; width: 100%"
                    class="settings-btn btn-blue"
                  >
                    <span
                      style="vertical-align: middle; margin-top: -2px"
                      class="material-icons"
                      >build_circle</span
                    >
                    Change file settings
                  </button>

                  <button class="upload-btn btn-green">
                    <span
                      style="vertical-align: middle; margin-top: -2px"
                      class="material-icons"
                      >upload</span
                    >
                    Upload This file
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--=================================-->
    <!--=         Editor Design         =-->
    <!--=================================-->
    <section class="editor-design-two">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="editure-feature-image-two">
              <div class="animaated-elements">
                <img
                  width="570"
                  height="512"
                  src="img/animated/01.png"
                  alt="main-bg"
                  class="main-bg animatable pixFade"
                />
                <img
                  width="132"
                  height="132"
                  src="img/animated/02.png"
                  alt="main-bg"
                  class="elm-clock animatable FadeLeft"
                  data-wow-delay="0.5s"
                />
                <img
                  width="290"
                  height="402"
                  src="img/animated/03.png"
                  alt="elm-man"
                  class="elm-man animatable pixFadeRight"
                  data-wow-delay="0.7s"
                />
                <img
                  width="448"
                  height="214"
                  src="img/animated/04.png"
                  alt="elm-table"
                  class="elm-table animatable pixFadeUp"
                  data-wow-delay="0.1s"
                />
                <img
                  width="42"
                  height="77"
                  src="img/animated/05.png"
                  alt="main-bg"
                  class="elm-sm-vase animatable pixFade"
                  data-wow-delay="0.9s"
                />
                <img
                  width="160"
                  height="223"
                  src="img/animated/06.png"
                  alt="elm-vase"
                  class="elm-vase animatable pixFadeLeft"
                  data-wow-delay="0.9s"
                />
                <div
                  class="elm-mass animatable pixFadeDown"
                  data-wow-delay="1s"
                >
                  <img
                    width="134"
                    height="87"
                    src="img/animated/07.png"
                    alt="massage"
                    class="mass-img"
                  />
                </div>
              </div>
              <!-- /.animaated-elements -->
            </div>
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6">
            <div class="editor-content color-two">
              <div class="section-title style-two color-two">
                <h2 class="title animatable pixFadeUp" data-wow-delay="0.3s">
                  Upload Any file type
                </h2>

                <p class="animatable pixFadeUp" data-wow-delay="0.2s">
                  Secure and Fast File Upload has never <br />
                  been easier
                </p>
              </div>

              <div
                class="description animatable pixFadeUp"
                data-wow-delay="0.7s"
              >
                <p>
                  There are no restrictions on the type of file you can upload
                  to our free filesharing platform. The only limit we put in
                  place is a 5GB max filesize for free users and up to as much
                  as 100GB for business users.
                </p>

                <a
                  href="#"
                  class="pix-btn color-two animatable pixFadeUp newmarufclass"
                  data-wow-delay="0.9s"
                  >Discover More About Supported File Types</a
                >
              </div>
            </div>
            <!-- /.editor-content -->
          </div>
          <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.editor-design -->

    <!--===================================-->
    <!--=         Genera Informes         =-->
    <!--===================================-->
    <section class="genera-informes-two">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pix-order-two">
            <div class="genera-informes-content">
              <div class="section-title style-two">
                <h2 class="title animatable pixFadeUp">
                  Share Files <br />Anywhere in the world
                </h2>

                <p class="animatable pixFadeUp burke" data-wow-delay="0.3s">
                  Uploadfiles deploys a wide range of data centres located in
                  various regions across the world
                </p>
              </div>
              <!-- /.section-title style-two -->

              <ul
                class="list-items color-two animatable pixFadeUp"
                data-wow-delay="0.4s"
              >
                <li>Quick Access</li>
                <li>Easily Manage</li>
                <li>7/24h Support</li>
              </ul>

              <a
                href="#"
                class="pix-btn btn-outline-two animatable pixFadeUp"
                data-wow-delay="0.5s"
                >Discover More About Our Network</a
              >
            </div>
            <!-- /.genera-informes -->
          </div>
          <!-- /.col-lg-6 -->

          <div class="col-lg-6">
            <div class="animaated-elements-two">
              <img
                width="570"
                height="561"
                src="img/animated/1.png"
                class="elm-one animatable pixFade"
                alt="informes"
              />
              <img
                width="144"
                height="264"
                src="img/animated/2.png"
                class="elm-two animatable pixFadeDown"
                alt="informes"
              />
              <img
                width="230"
                height="492"
                src="img/animated/3.png"
                class="elm-three animatable pixFadeDown"
                alt="informes"
              />
              <img
                width="205"
                height="539"
                src="img/animated/4.png"
                class="elm-four animatable pixFadeRight"
                alt="informes"
              />
            </div>
          </div>
          <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->

      <div class="scroll-circle animatable pixFadeRight">
        <img
          src="img/background/circle2.png"
          data-parallax='{"y" : 180}'
          alt="circle"
        />
      </div>
    </section>
    <!-- /.genera-informes -->

    <!--===========================-->
    <!--=         Service         =-->
    <!--===========================-->
    <section class="featured-four">
      <div class="container">
        <div class="section-title text-center">
          <h3 class="sub-title animatable pixFadeUp">Our service</h3>
          <h2 class="title animatable pixFadeUp" data-wow-delay="0.3s">
            Why you choose Our Site
          </h2>
        </div>
        <!-- /.section-title -->

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6">
            <div
              class="demopik-icon-box-wrapper style-four animatable pixFadeLeft"
              data-wow-delay="0.5s"
            >
              <div class="demopik-icon-box-icon">
                <img
                  width="100"
                  height="59"
                  src="./img/Feature/drag.svg"
                  alt=""
                />
              </div>
              <div class="pixsass-icon-box-content">
                <h3 class="pixsass-icon-box-title">Drag & Drop Friendly</h3>
                <p>
                  The full monty twit cracking goal Jeffrey lurgy chinwag bobby
                  vagabond David, I don't want no agro what a load.!
                </p>

                <svg
                  class="layer"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="370px"
                  height="270px"
                >
                  <path
                    fill-rule="evenodd"
                    fill="rgb(253, 248, 248)"
                    d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"
                  />
                </svg>
              </div>
            </div>
            <!-- /.pixsass-box style-four -->
          </div>
          <!-- /.col-lg-4 col-md-6 -->

          <div class="col-lg-4 col-md-6">
            <div
              class="demopik-icon-box-wrapper style-four animatable pixFadeLeft"
              data-wow-delay="0.7s"
            >
              <div class="demopik-icon-box-icon">
                <img
                  width="100"
                  height="50"
                  src="./img/Feature/bandwidth.svg"
                  alt=""
                />
              </div>
              <div class="pixsass-icon-box-content">
                <h3 class="pixsass-icon-box-title">Unlimited Bandwidth</h3>

                <p>
                  The full monty twit cracking goal Jeffrey lurgy chinwag bobby
                  vagabond David, I don't want no agro what a load.!
                </p>
              </div>

              <svg
                class="layer"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="370px"
                height="270px"
              >
                <path
                  fill-rule="evenodd"
                  fill="rgb(253, 248, 248)"
                  d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"
                />
              </svg>
            </div>
            <!-- /.pixsass-box style-four -->
          </div>
          <!-- /.col-lg-4 col-md-6 -->

          <div class="col-lg-4 col-md-6">
            <div
              class="demopik-icon-box-wrapper style-four animatable pixFadeLeft"
              data-wow-delay="0.9s"
            >
              <div class="demopik-icon-box-icon">
                <img
                  width="100"
                  height="42"
                  src="./img/Feature/registration.svg"
                  alt=""
                />
              </div>
              <div class="pixsass-icon-box-content">
                <h3 class="pixsass-icon-box-title">No Registration Required</h3>
                <p>
                  The full monty twit cracking goal Jeffrey lurgy chinwag bobby
                  vagabond David, I don't want no agro what a load.!
                </p>
              </div>

              <svg
                class="layer"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="370px"
                height="270px"
              >
                <path
                  fill-rule="evenodd"
                  fill="rgb(253, 248, 248)"
                  d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"
                />
              </svg>
            </div>
            <!-- /.pixsass-box style-four -->
          </div>
          <!-- /.col-lg-4 col-md-6 -->

          <div class="col-lg-4 col-md-6">
            <div
              class="demopik-icon-box-wrapper style-four animatable pixFadeLeft"
              data-wow-delay="0.9s"
            >
              <div class="demopik-icon-box-icon">
                <img
                  width="100"
                  height="94"
                  src="./img/Feature/spedd.svg"
                  alt=""
                />
              </div>
              <div class="pixsass-icon-box-content">
                <h3 class="pixsass-icon-box-title">Unlimited Speeds</h3>
                <p>
                  The full monty twit cracking goal Jeffrey lurgy chinwag bobby
                  vagabond David, I don't want no agro what a load.!
                </p>
              </div>

              <svg
                class="layer"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="370px"
                height="270px"
              >
                <path
                  fill-rule="evenodd"
                  fill="rgb(253, 248, 248)"
                  d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"
                />
              </svg>
            </div>
            <!-- /.pixsass-box style-four -->
          </div>
          <!-- /.col-lg-4 col-md-6 -->

          <div class="col-lg-4 col-md-6">
            <div
              class="demopik-icon-box-wrapper style-four animatable pixFadeLeft"
              data-wow-delay="0.9s"
            >
              <div class="demopik-icon-box-icon">
                <img
                  width="100"
                  height="60"
                  src="./img/Feature/pass.svg"
                  alt=""
                />
              </div>
              <div class="pixsass-icon-box-content">
                <h3 class="pixsass-icon-box-title">Password Protected Files</h3>
                <p>
                  The full monty twit cracking goal Jeffrey lurgy chinwag bobby
                  vagabond David, I don't want no agro what a load.!
                </p>
              </div>

              <svg
                class="layer"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="370px"
                height="270px"
              >
                <path
                  fill-rule="evenodd"
                  fill="rgb(253, 248, 248)"
                  d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"
                />
              </svg>
            </div>
            <!-- /.pixsass-box style-four -->
          </div>
          <!-- /.col-lg-4 col-md-6 -->

          <div class="col-lg-4 col-md-6">
            <div
              class="demopik-icon-box-wrapper style-four animatable pixFadeLeft"
              data-wow-delay="0.9s"
            >
              <div class="demopik-icon-box-icon">
                <img width="84" height="74" src="./img/Feature/19.png" alt="" />
              </div>
              <div class="pixsass-icon-box-content">
                <h3 class="pixsass-icon-box-title">One time download links</h3>
                <p>
                  The full monty twit cracking goal Jeffrey lurgy chinwag bobby
                  vagabond David, I don't want no agro what a load.!
                </p>
              </div>

              <svg
                class="layer"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="370px"
                height="270px"
              >
                <path
                  fill-rule="evenodd"
                  fill="rgb(253, 248, 248)"
                  d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"
                />
              </svg>
            </div>
            <!-- /.pixsass-box style-four -->
          </div>
          <!-- /.col-lg-4 col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.featured -->

    <!-- FAQ -->

    <section id="just" name="just" class="justs">
      <div class="container">
        <div
          class="section-title text-center"
          style="padding-bottom: 15rem; padding-top: 12rem"
        >
          <h3
            class="sub-title animatable pixFadeUp"
            style="font-size: 3rem; color: #1ea6ff"
          >
            Questions & Asked
          </h3>
          <h2
            class="title animatable pixFadeUp"
            data-wow-delay="0.3s"
            style="color: #2b2350; font-size: 4rem"
          >
            Frequently Asked Questions
          </h2>
        </div>

        <div class="tabs-wrapper">
          <div class="tab-content">
            <div
              class="tab-pane fade show active"
              id="design"
              role="tabpanel"
              aria-labelledby="design-tab"
            >
              <div id="accordionsing" class="faq faq-two pixFade">
                <div class="card">
                  <div class="card-header" id="heading10">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse00"
                        aria-expanded="false"
                        aria-controls="collapse00"
                      >
                        How to contact with Customer Service?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse00"
                    class="collapse"
                    aria-labelledby="heading10"
                    data-parent="#accordionsing"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card active">
                  <div class="card-header" id="heading20">
                    <h5>
                      <button
                        class="btn btn-link"
                        data-toggle="collapse"
                        data-target="#collapse10"
                        aria-expanded="true"
                        aria-controls="collapse10"
                      >
                        How delete my account?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse10"
                    class="collapse show"
                    aria-labelledby="heading20"
                    data-parent="#accordionsing"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading30">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse20"
                        aria-expanded="false"
                        aria-controls="collapse20"
                      >
                        Where is the edit optioon on dashboard?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse20"
                    class="collapse"
                    aria-labelledby="heading30"
                    data-parent="#accordionsing"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading40">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse30"
                        aria-expanded="false"
                        aria-controls="collapse30"
                      >
                        Is there any custome pricing system?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse30"
                    class="collapse"
                    aria-labelledby="heading40"
                    data-parent="#accordionsing"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading42">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse32"
                        aria-expanded="false"
                        aria-controls="collapse32"
                      >
                        How can I track my orders?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse32"
                    class="collapse"
                    aria-labelledby="heading42"
                    data-parent="#accordionsing"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading43">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse33"
                        aria-expanded="false"
                        aria-controls="collapse33"
                      >
                        Where is the edit optioon on dashboard?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse33"
                    class="collapse"
                    aria-labelledby="heading43"
                    data-parent="#accordionsing"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading45">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse35"
                        aria-expanded="false"
                        aria-controls="collapse35"
                      >
                        Can I cancel or change my order?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse35"
                    class="collapse"
                    aria-labelledby="heading45"
                    data-parent="#accordionsing"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="service"
              role="tabpanel"
              aria-labelledby="service-tab"
            >
              <div id="accordionsing-2" class="faq faq-two pixFade">
                <div class="card active">
                  <div class="card-header" id="heading101">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse001"
                        aria-expanded="false"
                        aria-controls="collapse001"
                      >
                        How to contact with Customer Service?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse001"
                    class="collapse show"
                    aria-labelledby="heading101"
                    data-parent="#accordionsing-2"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading201">
                    <h5>
                      <button
                        class="btn btn-link"
                        data-toggle="collapse"
                        data-target="#collapse101"
                        aria-expanded="true"
                        aria-controls="collapse101"
                      >
                        How delete my account?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse101"
                    class="collapse"
                    aria-labelledby="heading201"
                    data-parent="#accordionsing-2"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading301">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse201"
                        aria-expanded="false"
                        aria-controls="collapse201"
                      >
                        Where is the edit optioon on dashboard?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse201"
                    class="collapse"
                    aria-labelledby="heading301"
                    data-parent="#accordionsing-2"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading411">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse311"
                        aria-expanded="false"
                        aria-controls="collapse311"
                      >
                        Is there any custome pricing system?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse311"
                    class="collapse"
                    aria-labelledby="heading411"
                    data-parent="#accordionsing-2"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="general"
              role="tabpanel"
              aria-labelledby="general-tab"
            >
              <div id="accordionsing-3" class="faq faq-two pixFade">
                <div class="card active">
                  <div class="card-header" id="heading102">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse002"
                        aria-expanded="false"
                        aria-controls="collapse002"
                      >
                        How to contact with Customer Service?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse002"
                    class="collapse show"
                    aria-labelledby="heading102"
                    data-parent="#accordionsing-3"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading202">
                    <h5>
                      <button
                        class="btn btn-link"
                        data-toggle="collapse"
                        data-target="#collapse102"
                        aria-expanded="true"
                        aria-controls="collapse102"
                      >
                        How delete my account?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse102"
                    class="collapse"
                    aria-labelledby="heading202"
                    data-parent="#accordionsing-3"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading302">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse202"
                        aria-expanded="false"
                        aria-controls="collapse202"
                      >
                        Where is the edit optioon on dashboard?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse202"
                    class="collapse"
                    aria-labelledby="heading302"
                    data-parent="#accordionsing-3"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading402">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse302"
                        aria-expanded="false"
                        aria-controls="collapse302"
                      >
                        Is there any custome pricing system?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse302"
                    class="collapse"
                    aria-labelledby="heading402"
                    data-parent="#accordionsing-3"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="branding"
              role="tabpanel"
              aria-labelledby="branding-tab"
            >
              <div id="accordionsing-4" class="faq faq-two pixFade">
                <div class="card active">
                  <div class="card-header" id="heading103">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse003"
                        aria-expanded="false"
                        aria-controls="collapse003"
                      >
                        How to contact with Customer Service?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse003"
                    class="collapse show"
                    aria-labelledby="heading103"
                    data-parent="#accordionsing-4"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading203">
                    <h5>
                      <button
                        class="btn btn-link"
                        data-toggle="collapse"
                        data-target="#collapse13"
                        aria-expanded="true"
                        aria-controls="collapse13"
                      >
                        How delete my account?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse13"
                    class="collapse"
                    aria-labelledby="heading203"
                    data-parent="#accordionsing-4"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading304">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse204"
                        aria-expanded="false"
                        aria-controls="collapse204"
                      >
                        Where is the edit optioon on dashboard?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse204"
                    class="collapse"
                    aria-labelledby="heading304"
                    data-parent="#accordionsing-4"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading404">
                    <h5>
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapse304"
                        aria-expanded="false"
                        aria-controls="collapse304"
                      >
                        Is there any custome pricing system?
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapse304"
                    class="collapse"
                    aria-labelledby="heading404"
                    data-parent="#accordionsing-4"
                  >
                    <div class="card-body">
                      <p>
                        Easy peasy owt to do with me cras I don't want no agro
                        what a load of rubbish starkers absolutely bladdered,
                        old tinkety tonk old fruit so I said the full monty.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.tabs-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.faq-section -->

    <!--==========================-->
    <!--=         Countup        =-->
    <!--==========================-->
    <section class="countup">
      <div class="bg-map" data-bg-image="img/background/map.png"></div>
      <div class="container">
        <div class="section-title color-two text-center">
          <h3 class="sub-title animatable pixFadeUp">Fun Facts</h3>
          <h2 class="title animatable pixFadeUp" data-wow-delay="0.3s">
            We Always try to Understand<br />
            Users expectation
          </h2>
        </div>
        <!-- /.section-title -->

        <!-- /.countup-wrapper -->

        <!-- demo -->
        <div class="countup-wrapper">
          <div class="row">
            <!-- 1 -->
            <div class="col-md-3 col-sm-6">
              <div class="counter">
                <div class="counter-icon">
                  <img src="./icons/031-download.svg" alt="" />
                </div>
                <div class="counter-content">
                  <h3>Downloads</h3>
                  <span class="counter-value" data-counter="1387">1387</span>
                </div>
              </div>
            </div>

            <!-- 2 -->
            <div class="col-md-3 col-sm-6">
              <div class="counter blue">
                <div class="counter-icon">
                  <img src="./icons/096-upload.svg" alt="" />
                </div>
                <div class="counter-content">
                  <h3>Uploads</h3>
                  <span class="counter-value" data-counter="1310">1310</span>
                </div>
              </div>
            </div>

            <!-- 3 -->
            <div class="col-md-3 col-sm-6">
              <div class="counter">
                <div class="counter-icon">
                  <img src="./icons/097-user.svg" alt="" />
                </div>
                <div class="counter-content">
                  <h3>Unique users</h3>
                  <span class="counter-value" data-counter="1387">1387</span>
                </div>
              </div>
            </div>

            <!-- 4 -->
            <div class="col-md-3 col-sm-6">
              <div class="counter blue">
                <div class="counter-icon">
                  <img src="./icons/server-counter.svg" alt="" />
                </div>
                <div class="counter-content">
                  <h3>Bandwidth</h3>
                  <span class="counter-value" data-counter="1310">1310</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->

      <!-- <div class="scroll-circle wow pixFadeRight">
        <img
          src="img/background/circle3.png"
          data-parallax='{"y" : -230}'
          alt="circle"
        />
      </div> -->
    </section>

    <!-- mic content -->
    <!-- <div class="upload-border-mic" style="text-align: center; opacity: 0;" id="mic_content">
      
      <button class="browseButton">Record</button>
      <style>
        .browseButton {
          padding: 15px;
          background-color: white;
          border: 1px solid #e3e3e3;
          border-radius: 10px;
          transition: background-color 1.5s ease;
          width: auto;
        }
        .browseButton:hover {
          background-color: #e3e3e3;
        }
        *:focus {
          outline: 0 !important;
        }
      </style>
    </div> -->

    <!-- history modal -->
    <div
      style="z-index: 100"
      class="modal fade"
      id="historyModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="inboxModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog inbox-modal modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title custom-title" id="inboxModalLabel">
              Upload History
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="material-icons" data-icon="close"></i>
            </button>
          </div>
          <div class="modal-body">
            <section>
              <div class="container">
                <div class="historys">
                  <div class="history__list history__list-header">
                    <div class="history-info">
                      <div class="info">
                        <h4 class="history-header history-title">
                          <a href="#">Name</a>
                        </h4>
                      </div>
                    </div>

                    <div class="history-header history-time file-size">
                      <span>Size</span>
                    </div>

                    <div class="history-header history-location file-date">
                      <span>Date</span>
                    </div>

                    <div class="history-header history-edit file-edit">
                      <span>Edit</span>
                    </div>
                  </div>

                  <div class="history__list">
                    <div class="history-info">
                      <div class="company-logo">
                        <a href="#"
                          ><img src="../img/file-icon.svg" alt="history"
                        /></a>
                      </div>
                      <div class="info">
                        <h4 class="history-title">
                          <a href="#">ava.png</a>
                        </h4>
                      </div>
                    </div>

                    <div class="history-time file-size">
                      <span>4mb</span>
                    </div>

                    <div class="history-location file-date">
                      <span>11/8/2022</span>
                    </div>

                    <div class="history-header history-edit file-edit">
                      <i
                        class="material-icons history-edit-icon"
                        data-icon="edit_note"
                      ></i>
                    </div>
                  </div>
                  <!-- /.history__list -->

                  <div class="history__list">
                    <div class="history-info">
                      <div class="company-logo">
                        <a href="#"
                          ><img src="../img/file-icon.svg"" alt="saspik history"
                          /></a
                        >
                      </div>
                      <div class="info">
                        <h4 class="history-title">
                          <a href="#">test.webp</a>
                        </h4>
                      </div>
                    </div>

                    <div class="history-time file-size">
                      <span>32kb</span>
                    </div>

                    <div class="history-location file-date">
                      <span>10/8/2022</span>
                    </div>

                    <div class="history-header history-edit file-edit">
                      <i
                        class="material-icons history-edit-icon"
                        data-icon="edit_note"
                      ></i>
                    </div>
                  </div>
                  <!-- /.history__list -->

                  <div class="history__list">
                    <div class="history-info">
                      <div class="company-logo">
                        <a href="#"
                          ><img src="../img/file-icon.svg"" alt="saspik history"
                          /></a
                        >
                      </div>
                      <div class="info">
                        <h4 class="history-title"><a href="#">lab.mp4</a></h4>
                      </div>
                    </div>

                    <div class="history-time file-size">
                      <span>256kb</span>
                    </div>

                    <div class="history-location file-date">
                      <span>9/8/2022</span>
                    </div>

                    <div class="history-header history-edit file-edit">
                      <i
                        class="material-icons history-edit-icon"
                        data-icon="edit_note"
                      ></i>
                    </div>
                  </div>
                  <!-- /.history__list -->

                  <div class="history__list">
                    <div class="history-info">
                      <div class="company-logo">
                        <a href="#"
                          ><img src="../img/file-icon.svg"" alt="saspik history"
                          /></a
                        >
                      </div>
                      <div class="info">
                        <h4 class="history-title"><a href="#">pixel.jpg</a></h4>
                      </div>
                    </div>

                    <div class="history-time file-size">
                      <span>322kb</span>
                    </div>

                    <div class="history-location file-date">
                      <span>31/7/2022</span>
                    </div>

                    <div class="history-header history-edit file-edit">
                      <i
                        class="material-icons history-edit-icon"
                        data-icon="edit_note"
                      ></i>
                    </div>
                  </div>
                  <!-- /.history__list -->

                  <div class="history-pagination-wrapper">
                    <div class="showing-result">
                      <p class="show-result">
                        Showing <span>6</span> of <span>1300</span> Latest Files
                      </p>
                    </div>

                    <ul class="history-pagination">
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">....</a></li>
                      <li><a href="#">30</a></li>
                    </ul>
                  </div>
                  <!-- /.history-pagination-wrapper -->
                </div>
                <!-- /.container -->
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- toggle modal -->
    <div
      class="modal fade"
      id="toggleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="toggleModalLabel"
      aria-hidden="true"
      style="z-index: 100"
    >
      <div
        class="modal-dialog toggleModalDiaglog inbox-modal modal-dialog-centered"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title custom-title" id="inboxModalLabel">
              Animation Setting
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="material-icons" data-icon="close"></i>
            </button>
          </div>
          <div class="modal-body">
            <section>
              <div class="container toggleWrapper">
                <!-- 1 -->
                <div class="animation-toggle">
                  <p>Enable Animation</p>
                  <div>
                    <label class="switch animationLabel">
                      <input type="checkbox" class="animationCheckbox" />
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <!-- 2 -->
                <div class="filePreview-toggle">
                  <p>Enable FilePreview</p>
                  <div>
                    <label class="switch filePreviewLabel">
                      <input type="checkbox" class="filePreviewCheckbox" />
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.container -->
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- end of toggle modal -->

    <!-- file setting modal-->

    <div
      class="modal fade"
      id="fileSettingModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="fileSettingModalLabel"
      aria-hidden="true"
      style="z-index: 100"
    >
      <div
        class="modal-dialog fileSettingModalDiaglog inbox-modal modal-dialog-centered"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title custom-title" id="inboxModalLabel">
              File Settings
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <!-- <span aria-hidden="true">&times;</span> -->
              <i class="material-icons" data-icon="close"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="historys">
                <div class="history__list file-setting-list">
                  <div class="history-info">
                    <div class="company-logo">
                      <a href="#"
                        ><img src="../img/file-icon.svg" alt="saspik history"
                      /></a>
                    </div>
                    <div class="info">
                      <h4 class="history-title">
                        <a href="#">ava.png</a>
                      </h4>
                    </div>
                  </div>

                  <div class="history-time file-size">
                    <span>4mb</span>
                  </div>

                  <div class="history-location file-date">
                    <span>11/8/2022</span>
                  </div>
                </div>
                <!-- /.history__list -->
                <div>
                  <button
                    data-toggle="modal"
                    data-target="#passwordModal"
                    class="btn-password-grad"
                  >
                    <i class="material-icons" data-icon="lock"></i>
                    <span>Password Protect</span>
                  </button>
                  <button class="btn-delete-grad">
                    <i class="material-icons" data-icon="delete_outline"></i>
                    <span>Delete</span>
                  </button>

                  <button
                    class="btn-expiry-grad"
                    data-toggle="modal"
                    data-target="#dateTimeModal"
                  >
                    <i class="material-icons" data-icon="delete_outline"></i>
                    <span>Set Expiration Date</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end of file setting modal -->

    <!-- password modal -->
    <div
      class="modal fade"
      id="passwordModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="passwordModalLabel"
      aria-hidden="true"
      style="z-index: 1001"
    >
      <div
        class="modal-dialog toggleModalDiaglog inbox-modal modal-dialog-centered"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title custom-title" id="inboxModalLabel">
              Password
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="material-icons" data-icon="close"></i>
            </button>
          </div>
          <div class="modal-body">
            <section>
              <div class="container">
                <input
                  class="modal-password"
                  type="password"
                  placeholder="Enter Your Password"
                />
              </div>
              <!-- /.container -->
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- end of password modal -->

    <!-- date time modal -->

    <!-- end of date-time modal -->

    <!-- new style setting modal -->
    <div
      class="modal fade"
      id="settingModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="settingModalLabel"
      aria-hidden="true"
      style="z-index: 100"
    >
      <div
        class="modal-dialog modal-dialog-centered settingModal"
        role="document"
      >
        <div class="modal-content fixHeightModal">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="material-icons" data-icon="close"></i>
            </button>
          </div>
          <div class="modal-body settingModal">
            <div class="container">
              <div class="bootstrap-vertical-tab">
                <ul class="nav fixtab" id="myTab" role="tablist">
                  <!-- 1 -->
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="home-tab"
                      data-toggle="tab"
                      href="#home"
                      role="tab"
                      aria-controls="home"
                      aria-selected="true"
                      >Animation</a
                    >
                  </li>
                  <!-- 2 -->
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="fileSetting-tab"
                      data-toggle="tab"
                      href="#fileSetting"
                      role="tab"
                      aria-controls="fileSetting"
                      aria-selected="false"
                      >File Setting</a
                    >
                  </li>
                  <!-- 3 -->
                  <li class="nav-item">
                    <a
                      class="nav-link nav-with-icon"
                      id="passwordSetting-tab"
                      data-toggle="tab"
                      href="#passwordSetting"
                      role="tab"
                      aria-controls="passwordSetting"
                      aria-selected="false"
                    >
                      <span class="material-icons">check_circle</span>
                      <span>Password</span>
                    </a>
                  </li>

                  <!-- 4 -->
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="deleteSetting-tab"
                      data-toggle="tab"
                      href="#deleteSetting"
                      role="tab"
                      aria-controls="deleteSetting"
                      aria-selected="false"
                      >Delete</a
                    >
                  </li>

                  <!-- 5 -->
                  <li class="nav-item">
                    <a
                      class="nav-link nav-with-icon"
                      id="expireSetting-tab"
                      data-toggle="tab"
                      href="#expireSetting"
                      role="tab"
                      aria-controls="expireSetting"
                      aria-selected="false"
                    >
                      <span class="material-icons">check_circle</span>
                      <span>Expiry Date</span>
                    </a>
                  </li>
                </ul>
                <div class="tab-content animation-tab" id="myTabContent">
                  <!-- 1 -->
                  <div
                    class="tab-pane fade show active"
                    id="home"
                    role="tabpanel"
                    aria-labelledby="home-tab"
                  >
                    <section>
                      <div
                        class="tab-modal-title"
                        style="transform: translatey(-100px)"
                      >
                        <h5>Animation Setting</h5>
                        <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing
                          elit. Tempore, omnis?
                        </p>
                      </div>

                      <div class="container toggleWrapper">
                        <!-- 1 -->

                        <div class="animation-toggle">
                          <p>Enable Animation</p>
                          <div>
                            <label class="switch animationLabel">
                              <input
                                type="checkbox"
                                class="animationCheckbox"
                              />
                              <span class="slider round"></span>
                            </label>
                          </div>
                        </div>
                        <!-- 2 -->
                        <div class="filePreview-toggle">
                          <p>Enable FilePreview</p>
                          <div>
                            <label class="switch filePreviewLabel">
                              <input
                                type="checkbox"
                                class="filePreviewCheckbox"
                              />
                              <span class="slider round"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <!-- /.container -->
                    </section>
                  </div>

                  <!-- 2 -->
                  <div
                    class="tab-pane fade"
                    id="fileSetting"
                    role="tabpanel"
                    aria-labelledby="fileSetting-tab"
                  >
                    <div class="container">
                      <div
                        class="tab-modal-title"
                        style="transform: translatey(-100px)"
                      >
                        <h5>File Setting</h5>
                        <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing
                          elit. Tempore, omnis?
                        </p>
                      </div>

                      <div class="historys">
                        <div class="history__list file-setting-list">
                          <div class="history-info">
                            <div class="company-logo">
                              <a href="#"
                                ><img
                                  src="../img/file-icon.svg"
                                  alt="saspik history"
                              /></a>
                            </div>
                            <div class="info">
                              <h4 class="history-title">
                                <a href="#">ava.png</a>
                              </h4>
                            </div>
                          </div>

                          <div class="history-time file-size">
                            <span>4mb</span>
                          </div>

                          <div class="history-location file-date">
                            <span>11/8/2022</span>
                          </div>
                        </div>
                        <!-- /.history__list -->
                      </div>
                    </div>
                  </div>

                  <!-- 3 -->
                  <!-- password-setting -->
                  <div
                    class="tab-pane fade"
                    id="passwordSetting"
                    role="tabpanel"
                    aria-labelledby="passwordSetting-tab"
                  >
                    <div class="container">
                      <div
                        class="tab-modal-title"
                        style="transform: translatey(-100px)"
                      >
                        <h5>Set Password</h5>
                        <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing
                          elit. Tempore, omnis?
                        </p>
                      </div>

                      <section>
                        <div class="container">
                          <form action="" id="pass-form">
                            <input
                              class="modal-password"
                              type="password"
                              placeholder="Enter Your Password"
                            />

                            <button
                              class="pix-btn color-two set-password-btn"
                              type="submit"
                            >
                              <span class="password-btn-text"
                                >SET PASSWORD</span
                              >
                            </button>
                          </form>
                        </div>
                        <!-- /.container -->
                      </section>
                    </div>
                  </div>

                  <!-- delete setting -->
                  <div
                    class="tab-pane fade"
                    id="deleteSetting"
                    role="tabpanel"
                    aria-labelledby="deleteSetting-tab"
                  >
                    <div class="container">
                      <div
                        class="tab-modal-title"
                        style="transform: translatey(-100px)"
                      >
                        <h5>Delete File</h5>
                        <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing
                          elit. Tempore, omnis?
                        </p>
                      </div>

                      <div>
                        <button class="btn-delete-grad">
                          <i
                            class="material-icons"
                            data-icon="delete_outline"
                          ></i>
                          <span>Delete</span>
                        </button>
                      </div>
                    </div>
                  </div>

                  <!-- expiration setting -->
                  <div
                    class="tab-pane fade"
                    id="expireSetting"
                    role="tabpanel"
                    aria-labelledby="expireSetting-tab"
                  >
                    <section class="date-time-section">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="content">
                              <div
                                class="tab-modal-title"
                                style="transform: translatey(-100px)"
                              >
                                <h5>Expiry Date</h5>
                                <p>
                                  Lorem ipsum dolor, sit amet consectetur
                                  adipisicing elit. Tempore, omnis?
                                </p>
                              </div>

                              <!-- timepicker -->

                              <form id="picktime" name="expiryForm">
                                <div>
                                  <input
                                    class="digit-input second-latest"
                                    type="text"
                                    maxLength="1"
                                    size="1"
                                    pattern="[0-9]{1}"
                                  />
                                  <input
                                    id="second-input"
                                    class="digit-input latest"
                                    type="text"
                                    maxLength="1"
                                    size="1"
                                    pattern="[0-9]{1}"
                                  />

                                  <!-- select category -->
                                  <select
                                    id="timeformat"
                                    class="am-pm"
                                    placeholder="timeformat"
                                    style="border-radius: 1rem"
                                  >
                                    <option>minutes</option>
                                    <option>hour</option>
                                    <option>day</option>
                                  </select>
                                </div>

                                <button
                                  class="pix-btn color-two set-expiry-btn"
                                  type="submit"
                                >
                                  <span class="expiry-btn-text">ACTIVATE</span>
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.container -->
                    </section>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal-content -->
          </div>
        </div>
      </div>
    </div>

    <!-- end of new style setting modal -->

    <!-- captchas modal -->

    <!-- captchas modal -->
    <div
      class="modal fade"
      id="captchaModal"
      tabindex="-1"
      aria-labelledby="captchaModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header" style="border-radius: 0.1rem 0.1rem 0 0">
            <h5 class="modal-title custom-title" id="exampleModalLabel">
              Captchas
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="material-icons" data-icon="close"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="wrapper">
              <div class="captcha-area">
                <div class="captcha-img">
                  <img src="/img/captcha-bg.png" alt="Captch Background" />
                  <span class="captcha"></span>
                </div>
                <button class="reload-btn">
                  <i
                    class="material-icons refresh-icon"
                    data-icon="refresh"
                  ></i>
                </button>
              </div>
              <form action="#" class="input-area">
                <input
                  type="text"
                  placeholder="Enter captcha"
                  maxlength="6"
                  spellcheck="false"
                  required
                />
                <button class="check-btn">Check</button>
              </form>

              <p class="captcha-info">Captcha expires in 30 seconds</p>
              <div class="status-text"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of captcha modal -->

    <!-- svg wave before footer -->
    <div class="wave index-wave index-page-wave">
      <svg id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="gradient">
            <stop offset="5%" stop-color="#edfcfd"></stop>
            <stop offset="95%" stop-color="#e4ebec"></stop>
          </linearGradient>
        </defs>
        <path
          d="M 0,400 C 0,400 0,200 0,200 C 199.86666666666667,226.8 399.73333333333335,253.6 559,240 C 718.2666666666667,226.4 836.9333333333334,172.4 977,159 C 1117.0666666666666,145.6 1278.5333333333333,172.8 1440,200 C 1440,200 1440,400 1440,400 Z"
          stroke="none"
          stroke-width="0"
          fill="url(#gradient)"
          class="transition-all duration-300 ease-in-out delay-150"
          transform="rotate(-180 720 200)"
        ></path>
      </svg>
    </div>

    <div class="footer-container-wrapper">
      <div class="footer-container">
        <ul class="footer-item">
          <li class="footer-list-item footer-title start">COMPANY</li>
          <li class="footer-list-item">About us</li>
          <li class="footer-list-item">Terms of use</li>
          <li class="footer-list-item">Privacy Policy</li>
          <li class="footer-list-item">Cookie policy</li>
        </ul>

        <ul class="footer-item">
          <li class="footer-list-item footer-title">RESOURCES</li>
          <li class="footer-list-item">Blog</li>
          <li class="footer-list-item">File Transfer Time Calculator</li>
          <li class="footer-list-item">How To Send Large Videos</li>
          <li class="footer-list-item">Image File Sharing Case Study</li>
        </ul>

        <ul class="footer-item">
          <li class="footer-list-item footer-title">Uploadbiz ALTERNATIVES</li>
          <li class="footer-list-item">File Sharing Sites Compared</li>
          <li class="footer-list-item">vs WeTransfer</li>
          <li class="footer-list-item">vs TransferNow</li>
          <li class="footer-list-item">vs TransferNow</li>
          <li class="footer-list-item">vs Dropbox</li>
        </ul>

        <ul class="footer-item">
          <li class="footer-list-item footer-title">Contact</li>
          <li class="footer-list-item">Email: info@dns.io</li>
          <li class="footer-list-item">Twitter: @whatsmydns</li>
          <li class="footer-list-item">Legal</li>
          <li class="footer-list-item">Privacy Policy</li>
        </ul>
      </div>

      <div style="margin: 0 auto">
        <div style="padding-bottom: 10px; text-align: center">
          <img
            class="footer-icon animated fadeIn"
            style="
              width: 50px;
              animation: pulse-footer-icon 2s infinite;
              border-radius: 15px;
            "
            src="/img/icon.png"
            alt="logo"
          />
        </div>
      </div>
    </div>

    <div
      id="options-parent"
      style="
        display: none;
        position: fixed;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        z-index: 2;
        top: 0;
        left: 0;
        margin: 0 auto;
      "
    >
      <div
        id="options-container"
        style="
          box-shadow: 0px 0px 15px #fff;
          margin: 0 auto;
          width: 80%;
          height: 0%;
          background: white;
          transition: all 0.5s ease-in-out;
          text-align: center;
        "
      >
        <iframe
          style="width: 100%; height: 100%; border: 0; display: none; border: 0"
          id="options-frame"
          src="https://upload.biz"
        ></iframe>
      </div>
    </div>

    <div style="display: none">
      <div id="embedAudio"></div>

      <form method="post" action="" id="uploadForm">
        <input type="file" id="fileTarget" multiple />
        <input type="submit" />
      </form>

      <form method="post" action="" id="micForm">
        <!-- <input
          type="file"
          accept="audio/*;capture=microphone"
          id="micTarget"
          multiple
        /> -->
        <video autoplay></video>
        <input type="submit" />
      </form>
    </div>

    <device type="media" onchange="update(this.data)"></device>
    <!-- <video autoplay></video> -->
    <script>
      function update(stream) {
        document.querySelector('video').src = stream.url;
      }
    </script>

    <script>
      /* Drag and drop */
      var showDrag = false;
      var timeout = -1;

      function restart() {
        // $('.content-slider').slick('slickGoTo', 0);
      }

      function toggleUpload() {
        $('#dragbtn').css('opacity', '1');
        $('.upload-border-file').removeClass('drag-in-uploader');
        $('.drop-instructions').html('Drag & Drop files here to upload');
      }

      $('.drop-instructions').click(function () {
        $('#dragbtn').click();
      });

      $('html').bind('dragenter', function (e) {
        e.preventDefault();
        $('body,html').animate(
          {
            scrollTop: 0,
          },
          800
        );
        console.log('I am draging');

        $('#dragbtn').css('opacity', '0');

        $('.drop-instructions').html('Drop your file here to upload');

        restart();

        var dt = e.originalEvent.dataTransfer;

        if (
          dt.types &&
          (dt.types.indexOf
            ? dt.types.indexOf('Files') != -1
            : dt.types.contains('Files'))
        ) {
          // $('.drag-container').fadeIn();
          // $('.upload-border').css('background-color', 'yellowgreen');
          $('.upload-border-file').addClass('drag-in-uploader');
          // $('slick-list').css('height', '185px');
          // scroll to top
          // playIntroAnimation();

          showDrag = true;
        }
      });

      $('html').bind('dragover', function (e) {
        e.preventDefault();
        showDrag = true;
      });

      $('html').bind('dragleave', function (e) {
        showDrag = false;

        // $('#dragbtn').css('opacity', '1');

        clearTimeout(timeout);
        timeout = setTimeout(function () {
          if (!showDrag) {
            toggleUpload();
          }
        }, 200);
      });

      document.body.addEventListener('drop', drop, false);

      var myNotify = new notificationManager({
        container: $('#notificationsContainer'),
        message: 'Notification message here',
        position: 'bottomright',
      });

      function drop(e) {
        e.stopPropagation();
        e.preventDefault();
        console.log('I am dropped');

        setTimeout(function () {
          toggleUpload();

          $('.drag-container').fadeOut();
        }, 100);

        const dt = e.dataTransfer;
        const files = dt.files;

        console.log(files);

        for (var i = 0; i < files.length; i++) {
          addFileToList(files[i]);

          if (!isDuplicate(files[i])) {
            myNotify.addNotification({
              // message: `${files[i].name} has been added to your upload queue`,
              message: `<div> <i class="material-icons" data-icon="add_circle_outline"></i><p>${files.name} has been added to your upload queue</p></div>`,
              animate: true, //boolean: animate the fade in and fade out
              autoRemove: true, //boolean: remove this notification after 6 seconds (adds progress bar animation)
              backgroundColor: '#27abdb', //string: background color of the notification
              progressColor: '#135973', //string: color of the progress timer/bar
              color: 'white', //string: notification text color
            });
          }
        }
      }

      function playIntroAnimation() {
        if ($('.file-main').is(':visible')) {
          return false;
        }

        $('.image-card').css(
          'animation',
          'hide-under-image 1s ease-in-out forwards'
        );
        $('.music-card').css(
          'animation',
          'hide-under-music 1s ease-in-out forwards'
        );
        $('.cloud-card').css(
          'animation',
          'hide-under-cloud 1s ease-in-out forwards'
        );
        $('.password-card').css(
          'animation',
          'hide-under-password 1s ease-in-out forwards'
        );

        setTimeout(function () {
          $('.drop-area').css(
            'animation',
            'move-upload-up 1s ease-in-out forwards'
          );
          $('.blue-rectangle').css('filter', 'blur(1px)');
          $('.big-header-container').fadeOut();
        }, 250);

        setTimeout(function () {
          $('.image-card').remove();
          $('.music-card').remove();
          $('.cloud-card').remove();
          $('.password-card').remove();

          //setTimeout(function(){

          $('.file-main').slideDown();

          //}, 1000);

          $('html, body').animate(
            {
              //scrollTop: ($(".file-main").offset().top - 200)
            },
            800
          );
        }, 1000);
      }
    </script>

    <script>
      // $('.tipso').tipso();

      function setProgress(percent, index) {
        var circumference = 326.7256359733385;
        var offset = circumference - (percent / 100) * circumference;

        $('#file-' + index)
          .find('.progress-circle')
          .css('strokeDashoffset', offset);
        $('#file-' + index)
          .find('.percent')
          .text(Math.round(percent) + '%');
        $('#file-' + index)
          .find('.top-progress')
          .children('div')
          .css('width', percent + '%');
      }

      /* Identify format */
      var imageFormats = ['jpg', 'jpeg', 'gif', 'png', 'svg'];
      var audioFormats = ['aac', 'wav', 'wma', 'mp3', 'm4a'];
      var videoFormats = ['avi', 'mp4', 'wmv', 'mov', 'm4v', '3gp', 'flv'];
      var codeFormats = ['dll', 'pl', 'php'];
      var pdfFormats = ['pdf'];
      var archiveFormats = ['zip', 'rar'];

      function fileTypeIcon(extension) {
        if (imageFormats.indexOf(extension) > -1) {
          fileFormat = 'insert_photo';
        } else if (codeFormats.indexOf(extension) > -1) {
          fileFormat = 'code';
        } else if (pdfFormats.indexOf(extension) > -1) {
          fileFormat = 'picture_as_pdf';
        } else if (audioFormats.indexOf(extension) > -1) {
          fileFormat = 'library_music';
        } else if (videoFormats.indexOf(extension) > -1) {
          fileFormat = 'ondemand_video';
        } else if (archiveFormats.indexOf(extension) > -1) {
          fileFormat = 'unarchive';
        } else {
          fileFormat = 'task';
        }

        return fileFormat;
      }

      var fileElement, files;
      var fileList = {};
      var chunkSize = 1000000;
      var threads = 6;
      var xhr = {};

      $('#uploadForm').submit(function (e) {
        e.stopPropagation();

        return false;
      });

      $('#dragbtn').click(function () {
        $('#fileTarget').click();
      });

      $('#micbtn').click(function () {
        function hasGetUserMedia() {
          return !!(
            navigator.getUserMedia ||
            navigator.webkitGetUserMedia ||
            navigator.mozGetUserMedia ||
            navigator.msGetUserMedia
          );
        }

        if (hasGetUserMedia()) {
          // Good to go!
          console.log('I am maruf');
          var errorCallback = function (e) {
            console.log('Reeeejected!', e);
          };

          // Not showing vendor prefixes.
          navigator.getUserMedia(
            { video: false, audio: true },
            function (localMediaStream) {
              var video = document.querySelector('video');
              console.log({ video });
              video.src = window.URL.createObjectURL(localMediaStream);

              // Note: onloadedmetadata doesn't fire in Chrome when using it with getUserMedia.
              // See crbug.com/110938.
              video.onloadedmetadata = function (e) {
                // Ready to go. Do some stuff.
              };
            },
            errorCallback
          );
        } else {
          alert('getUserMedia() is not supported in your browser');
        }
        $('#micTarget').click();
      });

      // var myNotify = new notificationManager({
      //   container: $('#notificationsContainer'),
      //   message: 'Notification message here',
      //   position: 'topleft',
      // });

      $('#fileTarget').on('change', function () {
        // alert('I am back');
        console.log(this);
        fileElement = this;

        for (var i = 0; i < this.files.length; i++) {
          console.log({ name: this.files[i].name });
          addFileToList(this.files[i]);

          if (!isDuplicate(this.files[i])) {
            myNotify.addNotification({
              // message: `${this.files[i].name} has been added to your upload queue`,
              message: `<div> <i class="material-icons" data-icon="add_circle_outline"></i><p>${this.files[i].name} has been added to your upload queue</p></div>`,
              animate: true, //boolean: animate the fade in and fade out
              autoRemove: true, //boolean: remove this notification after 6 seconds (adds progress bar animation)
              backgroundColor: '#27abdb', //string: background color of the notification
              progressColor: '#135973', //string: color of the progress timer/bar
              color: 'white', //string: notification text color
            });
          }
        }

        console.log('file change');
      });

      function isDuplicate(file) {
        console.log('is duplicate is called');
        for (var i = 0; i < Object.keys(fileList).length; i++) {
          if (
            file.name == fileList[i].fileObject.name &&
            file.size == fileList[i].fileObject.size &&
            file.lastModified == fileList[i].fileObject.lastModified
          ) {
            return true;
          }
        }

        return false;
      }

      /*

          	Generic functions

          */

      function currentTimestamp() {
        return Math.floor(new Date().getTime() / 1000);
      }

      function currentTimestampMs() {
        return new Date().getTime();
      }

      function bytesToSize(bytes) {
        var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        if (bytes == 0) return '0 Byte';
        var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
        return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
      }

      function formatTimeRemaining(seconds) {
        var plural = '';

        if (seconds >= 120) {
          var minutes = Math.round(seconds / 60);

          if (minutes > 1) {
            plural = 's';
          }

          return minutes + ' Minute' + plural;
        } else {
          seconds = Math.round(seconds);

          if (seconds > 1) {
            plural = 's';
          }

          return seconds + ' second' + plural;
        }
      }

      /*

          	Buttons

          */

      $('body').on('click', '.pause-btn', function () {
        var index = $(this).closest('.file-parent').attr('data-index');

        console.log('toggle pause - ' + index);

        togglePause(index);
      });

      $('body').on('click', '.delete-file', function () {
        var index = $(this).closest('.file-parent').attr('data-index');

        console.log('toggle pause - ' + index);

        deleteFile(index);
      });

      $('body').on('click', '.upload-btn', function () {
        var index = $(this).closest('.file-parent').attr('data-index');
        var ifFile = $('.file-container').find('.file-parent').length;
        // console.log({ ashik });
        if (ifFile === 1) {
          $('.editor-design-two').css('margin-top', '300px');
        }

        processChunks(index);
      });

      var frameAnimationActive = 0;

      $('body').on('click', '.settings-btn', function () {
        var index = $(this).closest('.file-parent').attr('data-index');

        $('#options-frame').attr('src', fileList[index].editUrl + '?frame=1');

        if (frameAnimationActive == 1) {
          return false;
        }

        $('body').css('overflow', 'hidden');

        frameAnimationActive = 1;

        $('#options-parent').fadeIn(function () {
          $('#options-container').css('height', '100%');
          $('#options-container').css('width', '80%');

          setTimeout(function () {
            $('#options-frame').fadeIn();
            frameAnimationActive = 0;
          }, 1000);
        });
      });

      $('#options-parent').click(function () {
        closeOptions();
      });

      var frameAnimationActive = 0;

      function closeOptions() {
        if (frameAnimationActive == 1) {
          return false;
        }

        frameAnimationActive = 1;

        $('#options-container').animate({ height: '0' }, 100, function () {
          setTimeout(function () {
            $('#options-parent').fadeOut();
          }, 200);
        });

        setTimeout(function () {
          $('body').css('overflow', '');
          $('#options-container').css('padding', '0');
          $('#options-container').css('height', '0%');
          $('#options-frame').hide();
          frameAnimationActive = 0;
        }, 1000);
      }

      $('body').on('click', '.copy-url', function () {
        var index = $(this).closest('.file-parent').attr('data-index');
        var targetInput = $(this).attr('data-copytarget');
        var copyText = $('#file-' + index)
          .find('.' + targetInput)
          .attr('id', index + '-' + targetInput);

        $(this).attr('style', 'animation:pulse-copy-button 2s forwards;');

        $(this).on('animationend webkitAnimationEnd', function () {
          $(this).attr('style', '');
        });

        document
          .getElementById(index + '-' + targetInput)
          .setSelectionRange(0, 5000);
        document.getElementById(index + '-' + targetInput).select();
        document.execCommand('copy');

        console.log(copyText);
      });

      $('body').on('click', '.select-on-click', function () {
        this.setSelectionRange(0, this.value.length);
      });

      function deleteFile(index) {
        if (fileList[index].status == 'uploading') {
          for (var xhrIndex in xhr) {
            xhr[xhrIndex].abort();
          }

          fileList[index].status = 'deleted';
          //processList();
        }

        console.log(
          'prev = ' +
            $('#file-' + index)
              .next()
              .attr('class')
        );

        if (
          $('#file-' + index)
            .next()
            .attr('class') == 'bottom'
        ) {
          console.log($('#file-' + index).prev());

          if (
            $('#file-' + index)
              .prev()
              .hasClass('divider')
          ) {
            $('#file-' + index)
              .prev()
              .slideUp(function () {
                $(this).remove();
              });
          }
        }

        fileList[index].status = 'deleted';
        $('#file-' + index)
          .next()
          .slideUp();
        $('#file-' + index).attr(
          'class',
          'file-parent animated fadeOutRightBig'
        );

        setTimeout(function () {
          $('#file-' + index).animate({ height: '0' }, function () {
            $(this).remove();

            if ($('.file-container').find('.file-parent').length < 1) {
              $('.file-main').slideUp();
            }
          });
        }, 500);
      }

      function togglePause(index) {
        console.log('in togglePause() func for = ' + index);

        if (fileList[index].status == 'paused') {
          console.log('HEREEEEEEEEEEE');

          fileList[index].status = 'uploading';
          $('#file-' + index)
            .find('.pause')
            .text('pause_circle_filled');

          processChunks(index);

          return true;
        }

        if (fileList[index].status == 'uploading') {
          fileList[index].status = 'paused';
          $('#file-' + index)
            .find('.pause')
            .text('play_circle_filled');

          return true;
        }
      }

      /*

          	XHR Event listeners

          */
      function chunkUploadCompleted(event, index, chunkNumber) {
        if (!fileList[index]) {
          return false;
        }

        fileList[index].chunksMap[chunkNumber].status = 1;

        console.log('Chunk is finished = ' + chunkNumber);

        processChunks(index);
      }

      function updateProgress(event, index, chunkNumber) {
        if (!fileList[index]) {
          return false;
        }

        fileList[index].chunksMap[chunkNumber].downloadedBytes = event.loaded;

        updateTotalProgress(index);
      }

      /* Upon completed upload */
      function uploadComplete(index) {
        if (fileList[index].status != 'complete') {
          fileList[index].status = 'complete';

          setTimeout(function () {
            setProgress(100, index);
            $('#file-' + index)
              .find('.file-icon')
              .text('check_circle');
            $('#file-' + index)
              .find('.speed')
              .text('Completed');
          }, 750);

          setTimeout(function () {
            $('#playSound').trigger('play');
            $('#file-' + index)
              .find('.progress-circle-container')
              .css('animation', 'pulse-blue-circle 2s forwards');
            $('#file-' + index)
              .find('.file-icon-container')
              .addClass('pulse-header');
          }, 1500);

          setTimeout(function () {
            $('#file-' + index)
              .find('.slide-container')
              .attr('class', 'slide-container animated fadeOutRightBig');
            console.log('I am file div');
          }, 3000);

          setTimeout(function () {
            var afterUpload = $('.afterUpload-wrapper').html();
            $('#file-' + index)
              .find('.top-progress')
              .fadeIn();
            $('#file-' + index)
              .find('.preview-container')
              .animate({ height: '450' });
            $('#file-' + index)
              .find('.slide-container')
              .html(afterUpload);

            $('#file-' + index)
              .find('.file-url')
              .attr('value', fileList[index].fileUrl);
            $('#file-' + index)
              .find('.edit-url')
              .attr('value', 'https://upload.biz/edit/' + fileList[index].key);

            $('#file-' + index)
              .find('.slide-container')
              .attr('class', 'slide-container');
            $('#file-' + index)
              .find('.slide-container')
              .attr('class', 'slide-container animated fadeInLeftBig');
          }, 4000);
        }

        //processList();
      }

      /*

          	Progress tracker

          */

      function updateTotalProgress(index) {
        var totalDownloaded = 0;

        for (
          var chunkNumber = 0;
          chunkNumber < fileList[index].chunks;
          chunkNumber++
        ) {
          if (
            fileList[index].chunksMap[chunkNumber].downloadedBytes &&
            fileList[index].chunksMap[chunkNumber].downloadedBytes > 0
          ) {
            totalDownloaded =
              totalDownloaded +
              fileList[index].chunksMap[chunkNumber].downloadedBytes;
          }
        }

        if (fileList[index].status == 'paused') {
          return false;
        }

        /* Get upload speed based on results with at least an X millisecond difference */
        if (currentTimestampMs() - fileList[index].progressLastUpdated > 1000) {
          var bytesPerMillisecond =
            (totalDownloaded - fileList[index].bytesLastUpdated) /
            (currentTimestampMs() - fileList[index].progressLastUpdated);
          var kilobytesPerSecond = Math.round(
            (bytesPerMillisecond * 1000) / 1024
          );

          var timeRemaining = formatTimeRemaining(
            (fileList[index].fileObject.size - totalDownloaded) /
              (bytesPerMillisecond * 1000)
          );

          var speed = bytesPerMillisecond;

          fileList[index].progressLastUpdated = currentTimestampMs();
          fileList[index].bytesLastUpdated = totalDownloaded;

          $('#file-' + index)
            .find('.speed')
            .text(kilobytesPerSecond + ' KB/s');
          $('#file-' + index)
            .find('.timeleft')
            .text(timeRemaining);
        }

        /* Display percent with 2 decimals */
        var percentUploaded =
          parseInt(
            (totalDownloaded / fileList[index].fileObject.size) * 10000
          ) / 100;

        if (fileList[index].percentUploaded != percentUploaded) {
          fileList[index].percentUploaded = percentUploaded;

          $('#file-' + index)
            .find('.percent')
            .text(percentUploaded + '%');
          setProgress(percentUploaded, index);
        }

        if (percentUploaded > 99) {
          uploadComplete(index);
        }
      }

      /*

          	Initialize XHR

          */

      function uploadChunk(index, chunkNumber) {
        /* Determine the range */
        var startByte = chunkNumber * chunkSize;
        var endByte = startByte + chunkSize;

        if (endByte > fileList[index].fileObject.size) {
          endByte = fileList[index].fileObject.size;
        }

        /* Begin the XHR request */
        var xhrIndex = Object.keys(xhr).length;

        xhr[xhrIndex] = new XMLHttpRequest();

        xhr[xhrIndex].open('POST', '/test/?chunkNumber=' + chunkNumber);

        /* Upon completion */
        xhr[xhrIndex].onload = function (event) {
          chunkUploadCompleted(event, index, chunkNumber);
          delete xhr[xhrIndex];
        };

        /* Upon percentage change */
        xhr[xhrIndex].upload.onprogress = function (event) {
          if (event.lengthComputable) {
            updateProgress(event, index, chunkNumber);
          }
        };

        xhr[xhrIndex].setRequestHeader('Cache-Control', 'no-cache');
        xhr[xhrIndex].setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr[xhrIndex].setRequestHeader(
          'X-File-Size',
          fileList[index].fileObject.size
        );
        xhr[xhrIndex].setRequestHeader(
          'Content-Type',
          'application/octet-stream'
        );

        xhr[xhrIndex].send(
          fileList[index].fileObject.slice(startByte, endByte)
        );
      }

      /*

          	Chunk up the file and upload it according to set rules:

          		- Chunk hasn't previously been uploaded
          		- Chunk isn't in the process of being uploaded
          		- There are {THREAD} amount of chunks being uploaded simultaneously


          	chunksMap status definitions:

          		0 = Not uploaded
          		1 = Uploaded
          		2 = In the process of being uploaded

          */

      function processChunks(index) {
        var activeChunks = 0;

        console.log('Status = ' + fileList[index].status);

        /* Switch file card to progress if it's not visible yet */
        if (fileList[index].progressCard != 1) {
          fileList[index].progressCard = 1;
          fileList[index].status = 'uploading';
          var progressContainer = $('.progress-placeholder').html();

          $('#file-' + index)
            .find('.slide-container')
            .attr('class', 'slide-container animated fadeOutRightBig');

          setTimeout(function () {
            $('#file-' + index)
              .find('.top-progress')
              .fadeIn();
            $('#file-' + index)
              .find('.preview-container')
              .animate({ height: '280' });
            $('#file-' + index)
              .find('.slide-container')
              .html(progressContainer);
            $('#file-' + index)
              .find('.slide-container')
              .attr('class', 'slide-container');
            $('#file-' + index)
              .find('.slide-container')
              .attr('class', 'slide-container animated fadeInLeftBig');
          }, 500);
        }

        if (fileList[index].status == 'paused') {
          console.log("Won't continue as file is PAUSED");
          $('#file-' + index)
            .find('.speed')
            .text('Paused');
          return false;
        }

        if (fileList[index].status == 'deleted') {
          console.log("Won't continue as file is DELETED");
          return false;
        }

        for (var i = 0; i < fileList[index].chunks; i++) {
          /* Skip if chunk is already uploaded */
          if (fileList[index].chunksMap[i].status == 1) {
            continue;
          }

          /* Count chunks that are being actively uploaded */
          if (fileList[index].chunksMap[i].status == 2) {
            activeChunks++;
          }

          /* If more than {THREADS} chunks are being uploaded, then skip */
          if (activeChunks >= threads) {
            break;
          }

          /* If all checks pass and chunk isn't uploaded, then mark the chunk as being uploaded and upload it */
          if (fileList[index].chunksMap[i].status === 0) {
            console.log('starting chunk = ' + i);

            fileList[index].chunksMap[i].status = 2;
            activeChunks++;

            uploadChunk(index, i);
          }
        }
      }

      /*

          	Process the fileList

          */
      function processList() {
        console.log('auto upload disabled');
        return false;

        var concurrentUploads = 0;

        for (var i = 0; i < Object.keys(fileList).length; i++) {
          if (fileList[i].status == 'uploading') {
            concurrentUploads++;
          }
        }

        for (var i = 0; i < Object.keys(fileList).length; i++) {
          if (fileList[i].status == 'uploading') {
            console.log("Not uploading as there's already an ongoing upload");
            break;
          }

          if (fileList[i].status == 'queued') {
            fileList[i].status = 'uploading';

            $('#file-' + i)
              .find('.queuedText')
              .hide();
            $('#file-' + i)
              .find('.statusLine')
              .show();

            fileList[i].timestampStart = currentTimestamp();

            processChunks(i);
          }
        }
      }

      /*

          	Catch file and add to object

          */

      function addFileToList(file) {
        $('#loadingFile').show();

        if ($('#playSound').length < 1) {
          $('#embedAudio').html(
            '<audio id="playSound"><source src="/audio/short_complete.mp3" type="audio/mpeg"></audio> '
          );
          $('#playSound').prop('volume', 0.5);
        }

        /* Check for duplicate */
        // if (isDuplicate(file)) {

        //   var dialogBox = confirm(
        //     'This file is already in your upload list.\nAre you sure you want to continue?'
        //   );

        //   if (!dialogBox) {
        //     $('#loadingFile').hide();
        //     return false;
        //   }
        // }

        function addByAjaxCall() {
          $.ajax({
            url:
              'https://upload.biz/ajax/?action=getKey&size=' +
              file.size +
              '&filename=' +
              file.name,

            success: function (data) {
              playIntroAnimation();
              console.log('I am success');

              var jsonData = JSON.parse(data);

              console.log(data);

              if (jsonData.code == '429') {
                notificationBox(
                  domainDataJson.error,
                  'red',
                  'exclamation-triangle',
                  'freeze'
                );
                return false;
              }

              $('#loadingFile').hide();

              /* Insert object */
              var newFileObject = {};

              newFileObject.fileObject = file;

              newFileObject.fileId = jsonData.id;
              newFileObject.key = jsonData.key;

              newFileObject.fileUrl =
                'https://upload.biz/f/' + jsonData.id + '/' + file.name;
              newFileObject.editUrl = 'https://upload.biz/edit/' + jsonData.key;

              newFileObject.status = 'queued';
              newFileObject.uploadUrl = jsonData.uploadUrl;

              newFileObject.timestampComplete = 0;
              newFileObject.timestampStart = 0;
              newFileObject.timestampAdded = currentTimestamp();

              newFileObject.percentUploaded = 0;
              newFileObject.bytesUploaded = 0;

              newFileObject.progressLastUpdated = 0;
              newFileObject.bytesLastUpdated = 0;

              newFileObject.progressCard = 0;
              newFileObject.completeCard = 0;

              newFileObject.chunks = Math.ceil(file.size / chunkSize);
              newFileObject.chunksMap = {};

              for (var i = 0; i < newFileObject.chunks; i++) {
                newFileObject.chunksMap[i] = {};
                newFileObject.chunksMap[i].status = 0;
              }

              console.log(newFileObject);

              var newIndex = Object.keys(fileList).length;
              fileList[newIndex] = newFileObject;

              /*

          				Add HTML for file card

          			*/

              var fileCount = $('.file-container').find('.file-parent').length;

              $('.file-container').prepend(
                "<div class='file-parent' data-index='" +
                  newIndex +
                  "' id='file-" +
                  newIndex +
                  "'></div>"
              );
              var previewContainer = $('.preview-container-placeholder').html();

              $('#file-' + newIndex).css('opacity', 0);
              $('#file-' + newIndex).html(previewContainer);
              var fileCardHeight = $('#file-' + newIndex).height() + 54;

              var animationSpeed = 1000;
              var slideInTimeout = 1500;

              if (fileCount < 1) {
                animationSpeed = 0;
                // slideInTimeout = 1500;
                slideInTimeout = 1500;

                console.log('heeere');
              }

              if (fileCount > 0) {
                $('.fileIcon span').css('opacity', '0');
                $('.fileIcon-wrapper').removeClass('open');

                $('.material-icons.file-icon').each(function (index, value) {
                  console.log(`div${index}: ${this.id}`);
                  if (index > 0) {
                    $(this).css('opacity', '1');
                  }
                });
              }

              if (fileCount == 1) {
                console.log('I am one');
                $('.editor-design-two').css('margin-top', '300px');
              }

              console.log({ fileCount });

              $('#file-' + newIndex).css('height', 0);
              $('#file-' + newIndex).animate(
                { height: fileCardHeight },
                animationSpeed,
                function () {
                  $(this).css('height', 'auto');

                  if (fileCount > 0) {
                    $(
                      "<div class='divider animated fadeIn animate__delay-1s' style='text-align: center'><span class='material-icons' style='font-size: 54px; color: #f0f0f0'>more_vert</span></div>"
                    ).insertAfter(this);
                  }
                }
              );

              /* Make card visible and have it slide in */
              setTimeout(function () {
                $('#file-' + newIndex).css('opacity', 1);
                $('#file-' + newIndex).attr(
                  'class',
                  'file-parent animated slideInLeft'
                );
              }, slideInTimeout);

              var fileExtension = file.name.split('.').pop().toLowerCase();

              $('#file-' + newIndex)
                .find('.file-title')
                .children('a')
                .text(file.name);
              $('#file-' + newIndex)
                .find('.file-title')
                .children('a')
                .attr('href', newFileObject.fileUrl);

              $('#file-' + newIndex)
                .find('.file-meta')
                .text(
                  bytesToSize(file.size) + ' - ' + fileExtension.toUpperCase()
                );
              $('#file-' + newIndex)
                .find('.file-icon')
                .text(fileTypeIcon(fileExtension));

              processList();
            },
          });
        }

        if (isDuplicate(file)) {
          Swal.fire({
            title: 'This file is already in your upload list',
            showClass: {
              popup: 'animated fadeInDown',
            },
            hideClass: {
              popup: 'animated fadeOut',
            },
            text: 'Are you sure you want to continue?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Okay',
          }).then((result) => {
            if (result.isConfirmed) {
              addByAjaxCall();
            } else {
              $('#loadingFile').hide();
              return false;
            }
          });
        } else {
          addByAjaxCall();
        }
      }
    </script>

    <script src="./js/countUp.min.js"></script>
    <!-- <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script> -->
    <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->

    <script src="./plugins/notification-manager/notification-manager.js"></script>
    <script src="./js/tab.js?v=123233.332322532223.434224222221.2422531"></script>
  </body>
</html>
