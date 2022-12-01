<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alata&display=swap"
      rel="stylesheet"
    />
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

    <link
      rel="stylesheet"
      href="plugins/bootstrap/css/bootstrap.min.css?v=<?php echo time(); ?>"
      type="text/css"
    />

    <!-- <link
      rel="stylesheet"
      href="./plugins/wow/css/animate.css"
      type="text/css"
    /> -->

    <link
      rel="stylesheet"
      href="./plugins/components-elegant-icons/css/elegant-icons.min.css"
      type="text/css"
    />

    <style>
      .slick-list {
        /* height: 100px !important; */
      }
    </style>

    <link rel="stylesheet" href="./slick-theme.css" />

   

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.35/sweetalert2.min.css"
      integrity="sha512-doewDSLNwoD1ZCdA1D1LXbbdNlI4uZv7vICMrzxfshHmzzyFNhajLEgH/uigrbOi8ETIftUGBkyLnbyDOU5rpA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="./css/style-second.css?v=<?php echo time(); ?>" />
    
    
    <link rel="stylesheet" href="./css/style-tab.css?v=<?php echo time(); ?>" />

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  </head>
  <body>
    <noscript>
      <div class="no-javascript">
        <span class="material-icons vertical-middle">warning</span> Warning -
        The site will not function with Javascript disabled
      </div>
    </noscript>

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
      <div class="error-wrapper" style="min-height: 100vh !important">
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
          <div class="blue-rectangle error-recatangle" style="position: relative">
            <div
              style="
                position: absolute;
                left: 0;
                width: 100%;
                height: 100vh;
                overflow: hidden;
                
              "
            >
            <div
            class="floatingIcon"
            style="position: absolute; bottom: 0; left: 10%"
          >
            <span
              
              style="
                animation: icon-up-left 11s ease-in-out infinite;
                font-size: 22px;
              "
              >

              <svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#fff" d="M128 64c-35.3 0-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64s-28.7-64-64-64zM352 256H128C57.3 256 0 198.7 0 128S57.3 0 128 0c48.2 0 90.2 26.6 112 66C261.8 26.6 303.8 0 352 0c70.7 0 128 57.3 128 128s-57.3 128-128 128zm0-192c-35.3 0-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64s-28.7-64-64-64zM558.3 259.4c10.8 5.4 17.7 16.5 17.7 28.6V480c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48L448 448V432 336 320l12.8-9.6 64-48c9.7-7.3 22.7-8.4 33.5-3zM64 288h64H352c35.3 0 64 28.7 64 64v96c0 35.3-28.7 64-64 64H128c-35.3 0-64-28.7-64-64V352H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64z"/></svg>
              </span
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
              ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H298.5c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z"/></svg></span
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
              ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M152 120c-26.51 0-48 21.49-48 48s21.49 48 48 48s48-21.49 48-48S178.5 120 152 120zM447.1 32h-384C28.65 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM463.1 409.3l-136.8-185.9C323.8 218.8 318.1 216 312 216c-6.113 0-11.82 2.768-15.21 7.379l-106.6 144.1l-37.09-46.1c-3.441-4.279-8.934-6.809-14.77-6.809c-5.842 0-11.33 2.529-14.78 6.809l-75.52 93.81c0-.0293 0 .0293 0 0L47.99 96c0-8.822 7.178-16 16-16h384c8.822 0 16 7.178 16 16V409.3z"/></svg></span
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
              ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H448L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm208 32H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192z"/></svg></span
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
              ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></span
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
              ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#fff" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg></span
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
              ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#fff" d="M0 336c0 79.5 64.5 144 144 144H512c70.7 0 128-57.3 128-128c0-61.9-44-113.6-102.4-125.4c4.1-10.7 6.4-22.4 6.4-34.6c0-53-43-96-96-96c-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32C167.6 32 96 103.6 96 192c0 2.7 .1 5.4 .2 8.1C40.2 219.8 0 273.2 0 336z"/></svg></span
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
              ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#fff" d="M224 0H0V512H384V160H224V0zm32 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32 16H48V368 320 240 224H64zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-80h16 24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176 160V368 240 224zm32 128h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48 16v32H336 304v32h32 16v32H336 304v48 16H272V368 304 240 224h16z"/></svg></span
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
              ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#fff" d="M160 32c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160zM396 138.7l96 144c4.9 7.4 5.4 16.8 1.2 24.6S480.9 320 472 320H328 280 200c-9.2 0-17.6-5.3-21.6-13.6s-2.9-18.2 2.9-25.4l64-80c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l17.3 21.6 56-84C360.5 132 368 128 376 128s15.5 4 20 10.7zM256 128c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z"/></svg></span
            >
          </div>
            </div>
           
            <div class="lower-error-container">
             
              <div
                style="position: relative; z-index: 2"
                class="drop-main margin-center"
              >
                <div class="big-header-container margin-center">
                  <div class="big-header big-error-header animated fadeIn">
                    <span style="font-size: 80px" class="hero-header">404</span>
                    <span style="font-size: 30px">PAGE NOT FOUND</span>
                  </div>
                 
                </div>

                <div class="error-desc">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde qui aliquam quibusdam at iste consectetur tenetur totam ex saepe reprehenderit? Esse sit culpa molestiae doloribus aspernatur veniam repellat dolore impedit numquam aperiam hic ullam inventore fugiat ducimus, tempore rerum facere. Recusandae at, iusto vel distinctio ex ipsam placeat magni illo!</p>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
      <!-- dropzone -->

     
    </div>



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
        $('.content-slider').slick('slickGoTo', 0);
      }

      function toggleUpload() {
        $('#dragbtn').show();
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

        $('#dragbtn').hide();

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

        clearTimeout(timeout);
        timeout = setTimeout(function () {
          if (!showDrag) {
            toggleUpload();
          }
        }, 200);
      });

      document.body.addEventListener('drop', drop, false);

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

      $('#fileTarget').on('change', function () {
        console.log(this);
        fileElement = this;

        for (var i = 0; i < this.files.length; i++) {
          addFileToList(this.files[i]);
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

              console.log({ maruf: fileCount });

              setTimeout(() => {
                $('.fileIcon span').css('opacity', '1');
                $('.fileIcon-wrapper').addClass('open');
                setTimeout(() => {
                  $('#myFileIcon').css('opacity', '0');
                }, 900);
                // $('#myFileIcon').css('opacity', '1');
              }, 2500);

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
              var slideInTimeout = 1000;

              if (fileCount < 1) {
                animationSpeed = 0;
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
    <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
    <script src="./js/tab.js?v=12.325223.424221.22531"></script>
  </body>
</html>
