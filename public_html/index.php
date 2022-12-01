<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
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

   

    <!-- <link rel="stylesheet" href="./css/slick.css" /> -->
    <!-- Slick.css end -->

    <!-- <link rel="stylesheet" href="./css/style-second.css?v=<?php echo time(); ?>" /> -->

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
   

    <script src="./plugins/jquery.appear/jquery.appear.js"></script>
    <!-- <script src="./plugins/wow/js/wow.min.js"></script> -->
    <script src="./plugins/countUp.js/countUp.min.js"></script>

    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tipso/1.0.8/tipso.css"
    /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tipso/1.0.8/tipso.min.js"></script> -->
  </head>
  <body>
    <noscript>
      <div class="no-javascript">
        Warning -
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
                  <img src="./img/logo.svg" alt="site logo" class="main-logo" />

                  <img
                    src="./img/logo.svg"
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
                  <svg class="mobile-only cross-icon file-fa-small-icon crossing" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><linearGradient id="lgrad" x1="100%" y1="100%" x2="0%" y2="0%" >
                    <stop offset="0%"  />
                    <stop offset="100%"/>
                  </linearGradient><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
                </div>

                <div class="site-logo">
                  <a href="index.html" class="logo">
                    <img
                      src="./img/logo.svg"
                      alt="site logo"
                      class="main-logo"
                    />
                    <img
                      src="./img/logo.svg"
                      alt="site logo"
                      class="sticky-logo"
                    />
                  </a>
                </div>

                <div class="menu-wrapper" data-top="992">
                  <ul class="site-main-menu">
                    <li>
                    

                      <svg class="mobile-only file-fa-small-icon micon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><linearGradient id="lgrad" x1="100%" y1="100%" x2="0%" y2="0%" >
                        <stop offset="0%"  />
                        <stop offset="100%"/>
                      </linearGradient><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80z"/></svg>
                      <a
                        data-toggle="modal"
                        data-target="#settingModal"
                        href="#"
                        >Settings</a
                      >
                    </li>
                    <li>
                      

                      <svg class="file-fa-small-icon micon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><linearGradient id="lgrad" x1="100%" y1="100%" x2="0%" y2="0%" >
                        <stop offset="0%"  />
                        <stop offset="100%"/>
                      </linearGradient><path d="M64 144c26.5 0 48-21.5 48-48s-21.5-48-48-48S16 69.5 16 96s21.5 48 48 48zM192 64H160v64h32H480h32V64H480 192zm0 160H160v64h32H480h32V224H480 192zm0 160H160v64h32H480h32V384H480 192zM64 464c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm48-208c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z"/></svg>
                      <a
                        data-toggle="modal"
                        data-target="#historyModal"
                        href="#"
                        >History</a
                      >
                    </li>
                    <li>
                     
                      <svg class="file-fa-small-icon micon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><linearGradient id="lgrad" x1="100%" y1="100%" x2="0%" y2="0%" >
                        <stop offset="0%"  />
                        <stop offset="100%"/>
                      </linearGradient><path d="M192 0V64c141.4 0 256 114.6 256 256h64C512 143.3 368.7 0 192 0zm0 96v64c88.4 0 160 71.6 160 160h64C416 196.3 315.7 96 192 96zM96 144V96H0v48V368c0 79.5 64.5 144 144 144s144-64.5 144-144s-64.5-144-144-144H128v96h16c26.5 0 48 21.5 48 48s-21.5 48-48 48s-48-21.5-48-48V144z"/></svg>
                      <a
                        data-toggle="modal"
                        data-target="#captchaModal"
                        href="#"
                        >Blogs</a
                      >
                    </li>
                    <li>
                     
                      <svg class="file-fa-small-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">	<linearGradient id="lgrad" x1="100%" y1="100%" x2="0%" y2="0%" >
                        <stop offset="0%"  />
                        <stop offset="100%"/>
                      </linearGradient><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm96-96c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
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
                  
                  style="
                    animation: icon-up 10s ease-in-out infinite;
                    font-size: 67px;
                  "
                  ><svg class="file-fa-icon-floating" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#fff" d="M160 32c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160zM396 138.7l96 144c4.9 7.4 5.4 16.8 1.2 24.6S480.9 320 472 320H328 280 200c-9.2 0-17.6-5.3-21.6-13.6s-2.9-18.2 2.9-25.4l64-80c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l17.3 21.6 56-84C360.5 132 368 128 376 128s15.5 4 20 10.7zM256 128c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z"/></svg></span
                >
              </div>
            </div>
            <div class="upper-container">
              <!-- 1st -->
              <div class="image-card animated-icon">
                <!-- <img src="./icons/041-folder.svg" alt="" /> -->
                <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                  <stop offset="0%"  />
                  <stop offset="100%"/>
                </linearGradient><path d="M512 384c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H394.5c-17 0-33.3-6.7-45.3-18.7L322.7 50.7c-12-12-28.3-18.7-45.3-18.7H160c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64H512zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z"/></svg>
              </div>
              <!-- 2nd -->
              <!-- 3rd -->
              <div class="cloud-card animated-icon">
                <!-- <img src="./icons/018-cloud-computing.svg" alt="" /> -->
                <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><linearGradient id="lgrad" x1="100%" y1="100%" x2="0%" y2="0%" >
                  <stop offset="0%"  />
                  <stop offset="100%"/>
                </linearGradient><path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"/></svg>
              </div>
            </div>
            <div class="lower-container">
              <div class="music-card animated-icon">
                <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><linearGradient id="lgrad" x1="100%" y1="100%" x2="0%" y2="0%" >
                  <stop offset="0%"  />
                  <stop offset="100%"/>
                </linearGradient><path d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7v72V368c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V147L192 223.8V432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V200 128c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z"/></svg>
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
                    
                    style="animation: float-no-shadow 2s ease-in-out infinite"
                    >
                    
                    <svg class="file-fa-small-icon-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    
                    
                    </span
                  >
                </div>
              </div>
              <div class="password-card animated-icon">
                <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><linearGradient id="lgrad" x1="100%" y1="100%" x2="0%" y2="0%" >
                  <stop offset="0%"  />
                  <stop offset="100%"/>
                </linearGradient><path d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
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
          z-index: 1;
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
            <svg class="file-fa-medium-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M224 0H0V512H384V160H224V0zm32 0V128H384L256 0zM216 408v24H168V408 305.9l-31 31-17 17L86.1 320l17-17 72-72 17-17 17 17 72 72 17 17L264 353.9l-17-17-31-31V408z"/></svg>
            </div>

            <!-- 2 -->
            <div
              class="mic-btn nav--item"
              data-tab-target="tab-2"
        
              

            >
            <svg class="file-fa-medium-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><linearGradient id="lgrad-nine" x1="100%" y1="100%" x2="0%" y2="0%" >
              <stop offset="0%"  />
              <stop offset="100%"/>
            </linearGradient><path d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z"/></svg>
            </div>

            <!-- 3 -->
            <div
              class="camera-btn nav--item"
              data-tab-target="tab-3"
              
            >
            <svg class="file-fa-medium-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M220.6 121.2L271.1 96 448 96v96H333.2c-21.9-15.1-48.5-24-77.2-24s-55.2 8.9-77.2 24H64V128H192c9.9 0 19.7-2.3 28.6-6.8zM0 128V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H271.1c-9.9 0-19.7 2.3-28.6 6.8L192 64H160V48c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16l0 16C28.7 64 0 92.7 0 128zM344 304c0 48.6-39.4 88-88 88s-88-39.4-88-88s39.4-88 88-88s88 39.4 88 88z"/></svg>
            </div>

            <!-- 4 -->
            <div
              class="video-btn nav--item"
              data-tab-target="tab-4"
              
            >
            <svg class="file-fa-medium-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M128 96c-17.7 0-32 14.3-32 32v32H320c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V224c0-23.7 12.9-44.4 32-55.4V128c0-53 43-96 96-96H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H128zm431.1 67.8c10.4 5.6 16.9 16.4 16.9 28.2V448c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 401.1V384 256 238.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6zM80 224c-8.8 0-16 7.2-16 16s7.2 16 16 16H304c8.8 0 16-7.2 16-16s-7.2-16-16-16H80z"/></svg>
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
            

              <svg class="file-fa-small-icon plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
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
                      <svg class="file-fa-small-icon-delete link-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#606060" d="M0 256C0 167.6 71.6 96 160 96h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H160c-53 0-96 43-96 96s43 96 96 96h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H160C71.6 416 0 344.4 0 256zm640 0c0 88.4-71.6 160-160 160H384c-17.7 0-32-14.3-32-32s14.3-32 32-32h96c53 0 96-43 96-96s-43-96-96-96H384c-17.7 0-32-14.3-32-32s14.3-32 32-32h96c88.4 0 160 71.6 160 160zM224 224H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
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
                      

                        <svg class="file-fa-small-icon-delete copy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M232 344V280H168C154.7 280 144 269.3 144 256C144 242.7 154.7 232 168 232H232V168C232 154.7 242.7 144 256 144C269.3 144 280 154.7 280 168V232H344C357.3 232 368 242.7 368 256C368 269.3 357.3 280 344 280H280V344C280 357.3 269.3 368 256 368C242.7 368 232 357.3 232 344zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                        Copy URL
                      </button>
                    </div>
                  </div>
                  <div class="validation-link-container">
                    <p>
                      <svg class="file-fa-small-icon-delete link-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#606060" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
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
                      <svg class="file-fa-small-icon-delete copy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M232 344V280H168C154.7 280 144 269.3 144 256C144 242.7 154.7 232 168 232H232V168C232 154.7 242.7 144 256 144C269.3 144 280 154.7 280 168V232H344C357.3 232 368 242.7 368 256C368 269.3 357.3 280 344 280H280V344C280 357.3 269.3 368 256 368C242.7 368 232 357.3 232 344zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
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
                     
                      <svg class="pause-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="#fff" class="fa-primary" d="M191.1 160C174.3 160 160 174.3 160 191.1v128C160 337.7 174.3 352 192 352S224 337.7 224 320V191.1C224 174.3 209.7 160 191.1 160zM319.1 160C302.3 160 288 174.3 288 191.1v128C288 337.7 302.3 352 320 352S352 337.7 352 320V191.1C352 174.3 337.7 160 319.1 160z"/><path fill="#606060" class="fa-secondary" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM224 191.1v128C224 337.7 209.7 352 192 352S160 337.7 160 320V191.1C160 174.3 174.3 160 191.1 160S224 174.3 224 191.1zM352 191.1v128C352 337.7 337.7 352 320 352S288 337.7 288 320V191.1C288 174.3 302.3 160 319.1 160S352 174.3 352 191.1z"/></svg>
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
                    <svg class="cross-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="#fff""" class="fa-primary" d="M255.1 222.1L303 175C312.4 165.7 327.6 165.7 336.1 175C346.3 184.4 346.3 199.6 336.1 208.1L289.9 255.1L336.1 303C346.3 312.4 346.3 327.6 336.1 336.1C327.6 346.3 312.4 346.3 303 336.1L255.1 289.9L208.1 336.1C199.6 346.3 184.4 346.3 175 336.1C165.7 327.6 165.7 312.4 175 303L222.1 255.1L175 208.1C165.7 199.6 165.7 184.4 175 175C184.4 165.7 199.6 165.7 208.1 175L255.1 222.1z"/><path fill="#606060" class="fa-secondary" d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z"/></svg>
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
                    <!-- <span
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
                    > -->

                    <svg class="file-fa-preview-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M152 120c-26.51 0-48 21.49-48 48s21.49 48 48 48s48-21.49 48-48S178.5 120 152 120zM447.1 32h-384C28.65 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM463.1 409.3l-136.8-185.9C323.8 218.8 318.1 216 312 216c-6.113 0-11.82 2.768-15.21 7.379l-106.6 144.1l-37.09-46.1c-3.441-4.279-8.934-6.809-14.77-6.809c-5.842 0-11.33 2.529-14.78 6.809l-75.52 93.81c0-.0293 0 .0293 0 0L47.99 96c0-8.822 7.178-16 16-16h384c8.822 0 16 7.178 16 16V409.3z"/></svg>


                    

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
                   
                    <svg class="file-fa-small-icon-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M352 320c88.4 0 160-71.6 160-160c0-15.3-2.2-30.1-6.2-44.2c-3.1-10.8-16.4-13.2-24.3-5.3l-76.8 76.8c-3 3-7.1 4.7-11.3 4.7H336c-8.8 0-16-7.2-16-16V118.6c0-4.2 1.7-8.3 4.7-11.3l76.8-76.8c7.9-7.9 5.4-21.2-5.3-24.3C382.1 2.2 367.3 0 352 0C263.6 0 192 71.6 192 160c0 19.1 3.4 37.5 9.5 54.5L19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L297.5 310.5c17 6.2 35.4 9.5 54.5 9.5zM80 456c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24z"/></svg>
                    Change file settings
                  </button>

                  <button class="upload-btn btn-green">
                    <svg class="file-fa-small-icon-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456c13.3 0 24-10.7 24-24s-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24z"/></svg>
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
                <!-- <img
                  width="570"
                  height="512"
                  src="img/animated/01.svg"
                  alt="main-bg"
                  class="main-bg animatable pixFade"
                /> -->
           
<svg class="main-bg animatable pixFade" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 3000 2657.7" viewBox="0 0 3000 2657.7"><rect width="2901.4" height="2570.3" x="49.3" y="43.7" fill="none"/><defs><filter id="a" width="1786.9" height="1055.4" x="334.1" y="1329.6" filterUnits="userSpaceOnUse"><feFlood flood-color="#fff" flood-opacity="1" result="back"/><feBlend in="SourceGraphic" in2="back"/></filter></defs><mask id="c" width="1786.9" height="1055.4" x="334.1" y="1329.6" maskUnits="userSpaceOnUse"><g filter="url(#a)"><linearGradient id="b" x1="1721.514" x2="450.283" y1="1530.51" y2="2377.999" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#4d4d4d"/></linearGradient><path fill="url(#b)" d="M350.5,2009.7l1154.6-671.3c20.3-11.8,45.5-11.7,65.7,0.3l534.1,314.4c21.6,12.8,21.5,44.2-0.2,56.8     L966.3,2374.3c-24.4,14.2-54.5,14.3-79,0.2l-536.7-307.7C328.7,2054.1,328.6,2022.4,350.5,2009.7z" mask="url(#c)"/></g></mask><linearGradient id="d" x1="1721.514" x2="450.283" y1="1530.51" y2="2377.999" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0b031e"/><stop offset="1" stop-color="#0b031e"/></linearGradient><path fill="url(#d)" d="M350.5,2009.7l1154.6-671.3c20.3-11.8,45.5-11.7,65.7,0.3l534.1,314.4c21.6,12.8,21.5,44.2-0.2,56.8   L966.3,2374.3c-24.4,14.2-54.5,14.3-79,0.2l-536.7-307.7C328.7,2054.1,328.6,2022.4,350.5,2009.7z" opacity=".15"/><linearGradient id="e" x1="1320.224" x2="1169.468" y1="1932.482" y2="2032.986" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#e)" d="M1405.3,2005.7c0,0-4,52.6-16.9,59.6c-12.9,7-56.6,44.7-83.4,40.7c-26.8-4-161.9-145-189.7-173.8   s9.9-72.5,76.5-43.7c66.5,28.8,112.2,62.6,112.2,62.6L1405.3,2005.7z"/><linearGradient id="f" x1="1286.84" x2="2040.9" y1="1642.475" y2="1642.475" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#333456"/><stop offset="1" stop-color="#5f637a"/></linearGradient><path fill="url(#f)" d="M2040.9,1423.3c0,0-325.6-159.7-445.8-146.8c-120.2,12.8-308.2,665.7-308.2,665.7s-4.2,42.2,51.4,59.4   c55.6,17.2,74.8,0,74.8,0l223.2-399.2L2040.9,1423.3z"/><linearGradient id="g" x1="2272.048" x2="2415.493" y1="2117.327" y2="2117.327" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#g)" points="2298.1 1866.8 2415.5 2382 2397.4 2382 2272 1852.6"/><linearGradient id="h" x1="1718.179" x2="1885.782" y1="1853.496" y2="1853.496" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#h)" points="1885.8 1625.3 1736.3 2081.6 1718.2 2081.6 1855.2 1627.5"/><linearGradient id="i" x1="1824.039" x2="1904.645" y1="2349.276" y2="2349.276" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#i)" points="1850.1 2098.7 1904.6 2614 1886.5 2614 1824 2084.6"/><linearGradient id="j" x1="2138.438" x2="2239.117" y1="1274.889" y2="1274.889" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd4d4"/><stop offset="1" stop-color="#ffa78f"/></linearGradient><path fill="url(#j)" d="M2234.4,1212.8c0,0,15.9,74.1-10.8,93.2c-26.7,19.1-85.2,30.9-85.2,30.9l6.2-97.9L2234.4,1212.8z"/><linearGradient id="k" x1="1665.719" x2="1665.719" y1="1756.445" y2="2058.606" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#k)" d="M1393.3,1828.6l168.6-88.6l376.3,242.2c0,0-13,99.5-72.4,100.6C1806.3,2083.8,1393.3,1828.6,1393.3,1828.6z"/><linearGradient id="l" x1="1090.269" x2="1090.269" y1="2126.007" y2="2220.544" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd4d4"/><stop offset="1" stop-color="#ffa78f"/></linearGradient><path fill="url(#l)" d="M1049,2120.8l-24.8,55.7c0,0,4.1,52.5,53.6,51.5c49.5-1,67.8-16.7,67.8-16.7l10.6-36.9L1049,2120.8z"/><linearGradient id="m" x1="1615.076" x2="1615.076" y1="1419.075" y2="2125.092" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#333456"/><stop offset="1" stop-color="#5f637a"/></linearGradient><path fill="url(#m)" d="M2140.8,1895.6c-103.2,52.5-173.2,43.8-205.1,75.7c-0.9,0.9-1.9,1.8-2.9,2.7    c-33.3,28.4-107.5,12.8-194.9-36.4c-90.1-50.7-302.5-206.2-402.3-164.9c-99.8,41.3-128.6,406.8-193.3,408.6    c-16.9,0.5-33.8-1.8-49.3-6.2c-0.1-0.1-0.1-0.1-0.1-0.1c-43.5-12.7-68-30.2-63.1-69c14.7-115.8,152.1-644.2,248.9-673.6    c96.9-29.4,463.4-51.9,463.4-51.9l441.2,266.4C2183.2,1646.9,2244,1843,2140.8,1895.6z"/><path fill="#12043d" d="M1932.8,1974c-33.3,28.4-107.5,12.8-194.9-36.4c-90.1-50.7-302.5-206.2-402.3-164.9    c-99.8,41.3-128.6,406.8-193.3,408.6c-16.9,0.5-33.8-1.8-49.3-6.2c-0.1-0.1-0.1-0.1-0.1-0.1s18.4,4.2,61.9-85.4    c43.5-89.6,87.5-320.6,112.2-341.7c24.8-21,11.7-117.9,11.7-117.9s35.4,43.8,142.4,85.5c107,41.8,461.3,150.4,461.3,150.4    S1904.3,1912.9,1932.8,1974z" opacity=".2"/><polygon fill="#12043d" points="1381.6 1420.3 1793.1 1542.6 1520.3 1397.8" opacity=".2"/><linearGradient id="n" x1="2085.634" x2="1015.911" y1="664.376" y2="1415.212" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#dddced"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><path fill="url(#n)" d="M451.5,1329.1l1161.7-643.2c20.3-11.8,45.5-11.7,65.7,0.3l544,283c21.6,12.8,11.6,75.6-10.1,88.2   l-1138.4,664.3c-24.4,14.2-54.5,14.3-79,0.2l-536.7-307.7C436.7,1401.6,429.5,1341.9,451.5,1329.1z"/><linearGradient id="o" x1="442.186" x2="2229.051" y1="1164.451" y2="1164.451" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><path fill="url(#o)" d="M458.6,1316.8l1154.6-671.3c20.3-11.8,45.5-11.7,65.7,0.3l534.1,314.4c21.6,12.8,21.5,44.2-0.2,56.8   l-1138.4,664.3c-24.4,14.2-54.5,14.3-79,0.2l-536.7-307.7C436.7,1361.3,436.7,1329.6,458.6,1316.8z"/><defs><filter id="p" width="669.8" height="213" x="1400.7" y="779" filterUnits="userSpaceOnUse"><feFlood flood-color="#fff" flood-opacity="1" result="back"/><feBlend in="SourceGraphic" in2="back"/></filter></defs><mask id="r" width="669.8" height="213" x="1400.7" y="779" maskUnits="userSpaceOnUse"><g filter="url(#p)"><linearGradient id="q" x1="1400.661" x2="2070.496" y1="885.54" y2="885.54" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#4d4d4d"/></linearGradient><polygon fill="url(#q)" points="1405.9 779 1400.7 782.9 1675 940.2 2070.5 992 1702.5 817.8" mask="url(#r)"/></g></mask><linearGradient id="s" x1="1400.661" x2="2070.496" y1="885.54" y2="885.54" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#051e1b"/><stop offset="1" stop-color="#a5afe3"/></linearGradient><polygon fill="url(#s)" points="1405.9 779 1400.7 782.9 1675 940.2 2070.5 992 1702.5 817.8" opacity=".3"/><defs><filter id="t" width="403.8" height="158.3" x="935.6" y="1010.1" filterUnits="userSpaceOnUse"><feFlood flood-color="#fff" flood-opacity="1" result="back"/><feBlend in="SourceGraphic" in2="back"/></filter></defs><mask id="v" width="403.8" height="158.3" x="935.6" y="1010.1" maskUnits="userSpaceOnUse"><g filter="url(#t)"><linearGradient id="u" x1="935.628" x2="1339.463" y1="1089.23" y2="1089.23" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#4d4d4d"/></linearGradient><path fill="url(#u)" d="M935.6,1100.1c0,0-0.7,9.5,11.2,18.6c11.9,9.2,65.5,50,68.8,49.6c3.3-0.3,323.9-79.1,323.9-79.1     l-256.7-79.1L935.6,1100.1z" mask="url(#v)"/></g></mask><linearGradient id="w" x1="935.628" x2="1339.463" y1="1089.23" y2="1089.23" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0b031e"/><stop offset="1" stop-color="#0b031e"/></linearGradient><path fill="url(#w)" d="M935.6,1100.1c0,0-0.7,9.5,11.2,18.6c11.9,9.2,65.5,50,68.8,49.6c3.3-0.3,323.9-79.1,323.9-79.1l-256.7-79.1   L935.6,1100.1z" opacity=".15"/><linearGradient id="x" x1="1405.936" x2="1681.41" y1="691.174" y2="691.174" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#x)" points="1405.9 445.5 1405.9 779 1681.4 936.9 1681.4 705.5 1586.5 551.6"/><linearGradient id="y" x1="1600.039" x2="1600.039" y1="410.489" y2="580.137" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#y)" points="1518.7 369.1 1405.9 445.5 1586.5 551.6 1681.4 705.5 1794.1 629.1 1699.3 475.2"/><linearGradient id="z" x1="1681.41" x2="1794.143" y1="782.99" y2="782.99" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#798edf"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#z)" points="1681.4 936.9 1794.1 860.4 1794.1 629.1 1681.4 705.5"/><linearGradient id="A" x1="1570.444" x2="1718.308" y1="565.427" y2="424.956" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#fff"/></linearGradient><polygon fill="url(#A)" points="1518.7 369.1 1405.9 445.5 1586.5 551.6 1681.4 705.5 1794.1 629.1 1699.3 475.2"/><linearGradient id="B" x1="1602.558" x2="1602.558" y1="418.887" y2="575.796" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#B)" points="1593.6 544.5 1424.1 444.9 1519 380.6 1692.3 482.4 1781 626.3 1684.4 691.8"/><linearGradient id="C" x1="1596.833" x2="1748.07" y1="509.918" y2="366.243" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#fff"/></linearGradient><polygon fill="url(#C)" points="1513.7 307.2 1513.7 471.8 1614 530.7 1704.8 678 1745.4 650.5 1745.4 435.3"/><linearGradient id="D" x1="1609.11" x2="1609.11" y1="386.198" y2="572.704" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#dde0f4"/></linearGradient><polygon fill="url(#D)" points="1493.3 320.9 1493.3 485.5 1593.6 544.5 1684.4 691.8 1724.9 664.3 1724.9 449.1"/><linearGradient id="E" x1="1591.142" x2="1645.137" y1="452.648" y2="401.353" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9eaae3"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#E)" points="1694.7 494.8 1519 396.2 1519 380.6 1694.7 479.2"/><linearGradient id="F" x1="1591.142" x2="1645.137" y1="486.777" y2="435.482" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9eaae3"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#F)" points="1694.7 528.9 1519 430.3 1519 414.7 1694.7 513.3"/><linearGradient id="G" x1="1591.142" x2="1645.137" y1="520.906" y2="469.611" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9eaae3"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#G)" points="1694.7 563.1 1519 464.4 1519 448.9 1694.7 547.5"/><linearGradient id="H" x1="1591.142" x2="1645.137" y1="555.035" y2="503.74" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9eaae3"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#H)" points="1694.7 597.2 1519 498.6 1519 483 1694.7 581.6"/><linearGradient id="I" x1="1737.844" x2="1737.844" y1="739.017" y2="815.428" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#dde0f4"/></linearGradient><path fill="url(#I)" d="M1699.9,863.6l79.6-54c0.9-0.6,1.5-1.6,1.5-2.7v-91.3c0-2.7-3-4.2-5.2-2.7l-75.5,51.1    c-3.5,2.4-5.6,6.4-5.6,10.6v86.3C1694.7,863.5,1697.7,865.1,1699.9,863.6z" opacity=".36"/><path fill="#fff" d="M1706.7 778.4l65.3-44.3c.7-.5 1.2-1.4 1.2-2.3v-3.2c0-2.2-2.4-3.5-4.2-2.3l-61.9 42c-2.9 2-4.6 5.2-4.6 8.7v-.9C1702.5 778.3 1704.9 779.6 1706.7 778.4zM1706.7 799.2l65.3-44.3c.7-.5 1.2-1.4 1.2-2.3v-3.2c0-2.2-2.4-3.5-4.2-2.3l-61.9 42c-2.9 2-4.6 5.2-4.6 8.7v-.9C1702.5 799.1 1704.9 800.4 1706.7 799.2zM1706.7 820l65.3-44.3c.7-.5 1.2-1.4 1.2-2.3v-3.2c0-2.2-2.4-3.5-4.2-2.3l-61.9 42c-2.9 2-4.6 5.2-4.6 8.7v-.9C1702.5 820 1704.9 821.3 1706.7 820zM1706.7 840.9l65.3-44.3c.7-.5 1.2-1.4 1.2-2.3v-3.2c0-2.2-2.4-3.5-4.2-2.3l-61.9 42c-2.9 2-4.6 5.2-4.6 8.7v-.9C1702.5 840.8 1704.9 842.1 1706.7 840.9z" opacity=".36"/><linearGradient id="J" x1="706.469" x2="1314.379" y1="721.837" y2="721.837" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47008c"/><stop offset="1" stop-color="#4e4bc1"/></linearGradient><path fill="url(#J)" d="M706.5,1124.5v-479c0-13.2,6.9-25.4,18.2-32.1l544.5-324.4c12.1-7.2,45.2,4.2,45.2,18.3L1296.7,790    c0,13.2-7,25.4-18.3,32.1l-513.2,331C745.6,1164.7,706.5,1147.2,706.5,1124.5z"/><linearGradient id="K" x1="731.884" x2="1322.084" y1="725.619" y2="725.619" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#K)" d="M731.9,1128.2V656.7c0-12,6.3-23.1,16.6-29.3l551.1-328.3c9.9-5.9,22.5,1.2,22.5,12.8v493    c0,12-6.4,23.2-16.7,29.3l-534.2,316.3C753.8,1160.8,731.9,1148.3,731.9,1128.2z"/><polygon fill="#fff" points="1297.2 326.5 1297.2 792.7 756.8 1109.3 756.8 647.3"/><linearGradient id="L" x1="1106.275" x2="947.162" y1="1108.127" y2="967.309" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#a5afe3"/></linearGradient><path fill="url(#L)" d="M1097.5,956.8v33.7c0,5.9,2.8,11.5,7.6,15l78.1,44.1v12.6l-165.3,99.2l-78.3-57.2c-4.8-3.5-7.6-9.1-7.6-15    v-33.7L1097.5,956.8z"/><linearGradient id="M" x1="1022.576" x2="1072.184" y1="980.123" y2="1090.039" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47018d"/><stop offset="1" stop-color="#a5afe3"/></linearGradient><path fill="url(#M)" d="M1107.1,950.9v33.7c0,5.9,2.8,11.5,7.6,15l68.6,50l-165.5,98.7l-68.6-50c-4.8-3.5-7.6-9.1-7.6-15v-33.7    L1107.1,950.9z"/><polygon fill="#efeded" points="756.8 1109.3 756.8 687.5 932.1 584.7 932.1 1006.6"/><polygon fill="#06fcf5" points="1297.2 326.5 1297.2 370.5 756.8 693.2 756.8 647.3"/><path fill="#efeded" d="M1202.2 479.5L977.1 613.7c-5.8 3.4-10.5 1.5-10.5-4.2l0 0c0-5.8 4.7-13.3 10.5-16.8l225.1-134.2c5.8-3.4 10.5-1.5 10.5 4.2l0 0C1212.7 468.5 1207.9 476.1 1202.2 479.5zM1202.2 524.1L977.1 658.3c-5.8 3.4-10.5 1.5-10.5-4.2l0 0c0-5.8 4.7-13.3 10.5-16.8l225.1-134.2c5.8-3.4 10.5-1.5 10.5 4.2l0 0C1212.7 513.2 1207.9 520.7 1202.2 524.1zM1202.2 568.8L977.1 703c-5.8 3.4-10.5 1.5-10.5-4.2l0 0c0-5.8 4.7-13.3 10.5-16.8l225.1-134.2c5.8-3.4 10.5-1.5 10.5 4.2l0 0C1212.7 557.8 1207.9 565.3 1202.2 568.8z"/><path fill="#fff" d="M916 779.7l-139.8 83.3c-3.6 2.1-6.5 1-6.5-2.6l0 0c0-3.6 2.9-8.3 6.5-10.4L916 766.7c3.6-2.1 6.5-1 6.5 2.6l0 0C922.5 772.9 919.5 777.6 916 779.7zM916 819.1l-139.8 83.3c-3.6 2.1-6.5 1-6.5-2.6l0 0c0-3.6 2.9-8.3 6.5-10.4L916 806.1c3.6-2.1 6.5-1 6.5 2.6l0 0C922.5 812.3 919.5 817 916 819.1zM916 858.5l-139.8 83.3c-3.6 2.1-6.5 1-6.5-2.6v0c0-3.6 2.9-8.3 6.5-10.4L916 845.5c3.6-2.1 6.5-1 6.5 2.6l0 0C922.5 851.7 919.5 856.4 916 858.5zM916 897.9l-139.8 83.3c-3.6 2.1-6.5 1-6.5-2.6l0 0c0-3.6 2.9-8.3 6.5-10.4L916 884.9c3.6-2.1 6.5-1 6.5 2.6l0 0C922.5 891.1 919.5 895.8 916 897.9z"/><path fill="#efeded" d="M1112.9 700.9l-139.8 83.3c-3.6 2.1-6.5 1-6.5-2.6l0 0c0-3.6 2.9-8.3 6.5-10.4l139.8-83.3c3.6-2.1 6.5-1 6.5 2.6l0 0C1119.4 694.1 1116.5 698.8 1112.9 700.9zM1112.9 740.3l-139.8 83.3c-3.6 2.1-6.5 1-6.5-2.6l0 0c0-3.6 2.9-8.3 6.5-10.4l139.8-83.3c3.6-2.1 6.5-1 6.5 2.6l0 0C1119.4 733.5 1116.5 738.2 1112.9 740.3zM1112.9 779.7l-139.8 83.3c-3.6 2.1-6.5 1-6.5-2.6l0 0c0-3.6 2.9-8.3 6.5-10.4l139.8-83.3c3.6-2.1 6.5-1 6.5 2.6l0 0C1119.4 772.9 1116.5 777.6 1112.9 779.7zM1112.9 819.1l-139.8 83.3c-3.6 2.1-6.5 1-6.5-2.6l0 0c0-3.6 2.9-8.3 6.5-10.4l139.8-83.3c3.6-2.1 6.5-1 6.5 2.6l0 0C1119.4 812.3 1116.5 817 1112.9 819.1z"/><path fill="#06fcf5" d="M899.1,685.3c0,30.2-24.5,69.3-54.7,87.3c-30.2,18-54.7,8.1-54.7-22.1s24.5-69.3,54.7-87.3     C874.6,645.2,899.1,655.1,899.1,685.3z"/><path fill="#fff" d="M816,758.6l56.8-33.9c0-11.5-6.8-17.2-16.6-15.9c3.9-5.7,6.5-12.2,6.5-17.7c0-10.1-8.2-13.4-18.3-7.4     c-10.1,6-18.3,19.1-18.3,29.2c0,5.6,2.6,9,6.5,10C822.9,733.2,816,747.1,816,758.6z"/><path fill="#06fcf5" d="M1036.8,955.6c-8.4,5-15.3,16-15.3,24.4c0,8.4,6.8,11.2,15.3,6.2c8.4-5,15.3-16,15.3-24.4    C1052.1,953.3,1045.3,950.5,1036.8,955.6z M1036.8,982.3c-6.3,3.8-11.4,1.7-11.4-4.6c0-6.3,5.1-14.5,11.4-18.2    c6.3-3.8,11.4-1.7,11.4,4.6C1048.2,970.3,1043.1,978.5,1036.8,982.3z" opacity=".42"/><path fill="#fff" d="M1226.5 391.4c.2 3.2-2.2 7.6-5.4 9.7-3.1 2.1-5.8 1.2-6-2.1-.2-3.2 2.2-7.6 5.4-9.7C1223.7 387.2 1226.4 388.1 1226.5 391.4zM1248.6 378.8c.2 3.2-2.2 7.6-5.4 9.7-3.1 2.1-5.8 1.2-6-2.1-.2-3.2 2.2-7.6 5.4-9.7C1245.7 374.6 1248.4 375.5 1248.6 378.8zM1270.6 366.2c.2 3.2-2.2 7.6-5.4 9.7-3.1 2.1-5.8 1.2-6-2.1-.2-3.2 2.2-7.6 5.4-9.7C1267.8 362 1270.5 362.9 1270.6 366.2z"/><linearGradient id="N" x1="453.159" x2="805.53" y1="644.075" y2="644.075" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47008c"/><stop offset="1" stop-color="#000f16"/></linearGradient><path fill="url(#N)" d="M453.2,884.4V602.9c0-7.2,3.8-13.8,9.9-17.5l329-196c5.9-3.5,13.4,0.7,13.4,7.6v294.4    c0,7.2-3.8,13.8-10,17.5L476.6,897.8C466.3,903.9,453.2,896.4,453.2,884.4z" opacity=".1"/><linearGradient id="O" x1="473.895" x2="826.265" y1="654.247" y2="654.247" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#O)" d="M473.9,894.6V613.1c0-7.2,3.8-13.8,9.9-17.5l329-196c5.9-3.5,13.4,0.7,13.4,7.6v294.4    c0,7.2-3.8,13.8-10,17.5L497.3,907.9C487,914.1,473.9,906.6,473.9,894.6z"/><linearGradient id="P" x1="906.27" x2="1288.912" y1="267.122" y2="267.122" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47008c"/><stop offset="1" stop-color="#000f16"/></linearGradient><path fill="url(#P)" d="M906.3,399.4v-48.2c0-7.8,4.1-15,10.8-19l357.3-212.8c6.4-3.8,14.6,0.8,14.6,8.3v62.2c0,7.8-4.1,15-10.8,19    L931.7,413.9C920.5,420.6,906.3,412.5,906.3,399.4z" opacity=".1"/><linearGradient id="Q" x1="928.787" x2="1311.43" y1="278.168" y2="278.168" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47018d"/><stop offset="1" stop-color="#a5afe3"/></linearGradient><path fill="url(#Q)" d="M928.8,410.4v-48.2c0-7.8,4.1-15,10.8-19l357.3-212.8c6.4-3.8,14.6,0.8,14.6,8.3v62.2c0,7.8-4.1,15-10.8,19    L954.3,424.9C943,431.6,928.8,423.5,928.8,410.4z"/><linearGradient id="R" x1="652.172" x2="862.021" y1="285.881" y2="285.881" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47008c"/><stop offset="1" stop-color="#000f16"/></linearGradient><path fill="url(#R)" d="M652.2,429V261.4c0-4.3,2.2-8.2,5.9-10.4L854,134.2c3.5-2.1,8,0.4,8,4.5v175.3c0,4.3-2.3,8.2-5.9,10.4    L666.1,437C660,440.6,652.2,436.2,652.2,429z" opacity=".1"/><linearGradient id="S" x1="762.172" x2="776.611" y1="135.43" y2="442.27" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#S)" d="M664.5,435.1V267.4c0-4.3,2.2-8.2,5.9-10.4l195.9-116.7c3.5-2.1,8,0.4,8,4.5v175.3c0,4.3-2.3,8.2-5.9,10.4    L678.5,443C672.3,446.7,664.5,442.2,664.5,435.1z"/><path fill="#efeded" d="M778 491.3L599.6 597.6c-4.6 2.7-8.3 1.2-8.3-3.4l0 0c0-4.6 3.7-10.5 8.3-13.3L778 474.6c4.6-2.7 8.3-1.2 8.3 3.4l0 0C786.3 482.6 782.5 488.5 778 491.3zM778 539.9L599.6 646.2c-4.6 2.7-8.3 1.2-8.3-3.4l0 0c0-4.6 3.7-10.5 8.3-13.3L778 523.2c4.6-2.7 8.3-1.2 8.3 3.4l0 0C786.3 531.2 782.5 537.1 778 539.9zM778 588.5L526.4 736.3c-4.6 2.7-8.3 1.2-8.3-3.4l0 0c0-4.6 3.7-10.5 8.3-13.3L778 571.9c4.6-2.7 8.3-1.2 8.3 3.4l0 0C786.3 579.8 782.5 585.8 778 588.5zM778 637.1L526.4 784.9c-4.6 2.7-8.3 1.2-8.3-3.4l0 0c0-4.6 3.7-10.5 8.3-13.3L778 620.5c4.6-2.7 8.3-1.2 8.3 3.4l0 0C786.3 628.4 782.5 634.4 778 637.1zM778 685.7L526.4 833.5c-4.6 2.7-8.3 1.2-8.3-3.4l0 0c0-4.6 3.7-10.5 8.3-13.3L778 669.1c4.6-2.7 8.3-1.2 8.3 3.4l0 0C786.3 677 782.5 683 778 685.7z"/><path fill="#fff" d="M580.3,620.2c0,22.1-17.9,50.7-40,63.9c-22.1,13.2-40,6-40-16.2c0-22.1,17.9-50.7,40-63.9    C562.4,590.9,580.3,598.1,580.3,620.2z"/><linearGradient id="T" x1="519.47" x2="561.048" y1="645.357" y2="645.357" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#T)" d="M519.5,673.8l41.6-24.8c0-8.4-5-12.6-12.2-11.6c2.9-4.2,4.8-8.9,4.8-13c0-7.4-6-9.8-13.4-5.4    c-7.4,4.4-13.4,14-13.4,21.3c0,4.1,1.9,6.6,4.8,7.3C524.5,655.3,519.5,665.5,519.5,673.8z"/><polygon fill="#fff" points="699 349.3 715.7 338.3 715.7 385.7 699 396.8"/><polygon fill="#fff" points="730 292.4 746.7 281.3 746.7 366.2 730 377.3"/><polygon fill="#fff" points="761.1 302.6 777.8 291.5 777.8 346.7 761.1 357.8"/><polygon fill="#fff" points="792.2 237.6 808.9 226.6 808.9 327.2 792.2 338.3"/><polygon fill="#fff" points="823.2 237.6 839.9 226.6 839.9 307.7 823.2 318.7"/><linearGradient id="U" x1="1119.504" x2="1502.146" y1="451.548" y2="451.548" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47008c"/><stop offset="1" stop-color="#000f16"/></linearGradient><path fill="url(#U)" d="M1119.5,712.5V406.9c0-7.8,4.1-15,10.8-19L1487.6,175c6.4-3.8,14.6,0.8,14.6,8.3V503c0,7.8-4.1,15-10.8,19     L1145,727C1133.7,733.7,1119.5,725.6,1119.5,712.5z" opacity=".1"/><linearGradient id="V" x1="1142.021" x2="1524.663" y1="462.594" y2="462.594" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ff6c77"/><stop offset="1" stop-color="#ff8585"/></linearGradient><path fill="url(#V)" d="M1142,723.6V417.9c0-7.8,4.1-15,10.8-19l357.3-212.8c6.4-3.8,14.6,0.8,14.6,8.3V514c0,7.8-4.1,15-10.8,19     l-346.3,205.1C1156.2,744.7,1142,736.6,1142,723.6z"/><path fill="#fff" d="M1179.8 542.6V439.8c0-6.5 3.4-12.5 9-15.8L1487 246.3c5.4-3.2 12.2.7 12.2 6.9v114.4c0 6.5-3.4 12.5-9 15.9L1201 554.7C1191.6 560.3 1179.8 553.5 1179.8 542.6zM1179.8 675.8v-63.1c0-6.5 3.4-12.5 9-15.8L1487 419.2c5.4-3.2 12.2.7 12.2 6.9v74.8c0 6.5-3.4 12.5-9 15.9L1201 687.9C1191.6 693.5 1179.8 686.7 1179.8 675.8z" opacity=".21"/><linearGradient id="W" x1="1195.131" x2="1252.193" y1="479.134" y2="479.134" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5472db"/></linearGradient><path fill="url(#W)" d="M1252.2,462.1c0,15.8-12.8,36.2-28.5,45.5c-15.8,9.4-28.5,4.2-28.5-11.5c0-15.8,12.8-36.2,28.5-45.5    C1239.4,441.2,1252.2,446.4,1252.2,462.1z"/><path fill="#fff" d="M1266.9 423.3v-1.6c0-2.7 1.4-5.2 3.7-6.6l192.1-115.2c2.2-1.3 5 .3 5 2.9v6.4c0 2.7-1.4 5.2-3.8 6.6l-188.3 112.5C1271.8 430.7 1266.9 427.9 1266.9 423.3zM1266.9 452v-1.6c0-2.7 1.4-5.2 3.7-6.6l192.1-115.2c2.2-1.3 5 .3 5 2.9v6.4c0 2.7-1.4 5.2-3.8 6.6L1275.7 457C1271.8 459.4 1266.9 456.5 1266.9 452zM1266.9 480.7v-1.6c0-2.7 1.4-5.2 3.7-6.6l192.1-115.2c2.2-1.3 5 .3 5 2.9v6.4c0 2.7-1.4 5.2-3.8 6.6l-188.3 112.5C1271.8 488 1266.9 485.2 1266.9 480.7z" opacity=".54"/><path fill="#fff" d="M1252.2,614.2c0,15.8-12.8,36.2-28.5,45.5c-15.8,9.4-28.5,4.2-28.5-11.5c0-15.8,12.8-36.1,28.5-45.5    C1239.4,593.3,1252.2,598.4,1252.2,614.2z"/><path fill="#fff" d="M1266.9 586.4v-1.6c0-2.7 1.4-5.2 3.7-6.6l192.1-115.2c2.2-1.3 5 .3 5 2.9v6.4c0 2.7-1.4 5.2-3.8 6.6l-188.3 112.5C1271.8 593.8 1266.9 591 1266.9 586.4zM1266.9 615.1v-1.6c0-2.7 1.4-5.2 3.7-6.6l192.1-115.2c2.2-1.3 5 .3 5 2.9v6.4c0 2.7-1.4 5.2-3.8 6.6l-188.3 112.5C1271.8 622.5 1266.9 619.7 1266.9 615.1z" opacity=".54"/><polygon fill="#fff" points="1000.2 327.8 1007 341 1020.7 336.6 1011.3 354.4 1014.3 371.2 1001.8 369 989.9 383.8 991.5 364.6 981.2 357 994.7 347.3"/><polygon fill="#fff" points="1061.7 291.2 1068.4 304.4 1082.2 300 1072.8 317.8 1075.8 334.5 1063.2 332.4 1051.3 347.1 1053 328 1042.6 320.4 1056.2 310.7"/><defs><filter id="X" width="803.9" height="321.4" x="1062.2" y="1062" filterUnits="userSpaceOnUse"><feFlood flood-color="#fff" flood-opacity="1" result="back"/><feBlend in="SourceGraphic" in2="back"/></filter></defs><mask id="Z" width="803.9" height="321.4" x="1062.2" y="1062" maskUnits="userSpaceOnUse"><g filter="url(#X)"><linearGradient id="Y" x1="1062.162" x2="1866.069" y1="1222.667" y2="1222.667" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#4d4d4d"/></linearGradient><path fill="url(#Y)" d="M1064.1,1275.6c0,0-7.5,6.1,6.8,14.1c14.3,8.1,162.3,90.9,173.4,93.6c11.1,2.7,621.8-214.5,621.8-214.5     L1658.2,1062L1064.1,1275.6z" mask="url(#Z)"/></g></mask><linearGradient id="aa" x1="1062.162" x2="1866.069" y1="1222.667" y2="1222.667" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0b031e"/><stop offset="1" stop-color="#0b031e"/></linearGradient><path fill="url(#aa)" d="M1064.1,1275.6c0,0-7.5,6.1,6.8,14.1c14.3,8.1,162.3,90.9,173.4,93.6c11.1,2.7,621.8-214.5,621.8-214.5   L1658.2,1062L1064.1,1275.6z" opacity=".15"/><polygon fill="#fff" points="1123.1 254.6 1129.8 267.8 1143.6 263.3 1134.2 281.1 1137.2 297.9 1124.6 295.7 1112.7 310.5 1114.4 291.3 1104 283.7 1117.6 274.1"/><polygon fill="#fff" points="1184.5 217.9 1191.3 231.1 1205 226.7 1195.6 244.5 1198.6 261.3 1186.1 259.1 1174.2 273.9 1175.8 254.7 1165.5 247.1 1179 237.4"/><polygon fill="#fff" points="1246 181.3 1252.7 194.5 1266.5 190.1 1257.1 207.9 1260.1 224.7 1247.5 222.5 1235.6 237.3 1237.3 218.1 1226.9 210.5 1240.5 200.8"/><linearGradient id="ab" x1="1433.886" x2="1377.495" y1="967.576" y2="1358.861" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><path fill="url(#ab)" d="M1272.8,1373.2l468.6-268.8c5.4-3.1,7.9-25.4,2.4-28.3l-181.6-82.8c-9.2-5-20.3-4.9-29.4,0.3l-466.3,252    c-8.7,5-4.6,30.9,4.3,35.6l170,92.4C1250.8,1379,1263,1378.9,1272.8,1373.2z"/><path fill="#fff" d="M1272.8,1356.4l468.6-268.8c5.4-3.1,5.3-10.9-0.2-13.8l-179-97.3c-9.2-5-20.3-4.9-29.4,0.3l-462.3,265.2    c-8.7,5-8.6,17.6,0.3,22.4l170,92.4C1250.8,1362.2,1263,1362,1272.8,1356.4z"/><linearGradient id="ac" x1="1499.133" x2="1133.754" y1="905.207" y2="1227.829" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ac)" points="1113.1 1236.2 1089.6 1250.1 1109.4 1260.9 1132.9 1247"/><linearGradient id="ad" x1="1504.323" x2="1138.944" y1="911.091" y2="1233.712" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ad)" points="1164.4 1229.2 1144.7 1218.4 1121.2 1232.3 1141 1243.1"/><linearGradient id="ae" x1="1509.516" x2="1144.139" y1="916.971" y2="1239.591" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ae)" points="1196 1211.4 1176.2 1200.6 1152.8 1214.5 1172.5 1225.3"/><linearGradient id="af" x1="1514.709" x2="1149.33" y1="922.852" y2="1245.474" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#af)" points="1227.5 1193.6 1207.8 1182.8 1184.3 1196.7 1204.1 1207.5"/><linearGradient id="ag" x1="1519.899" x2="1154.519" y1="928.736" y2="1251.358" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ag)" points="1259.1 1175.8 1239.3 1165 1215.9 1178.9 1235.7 1189.7"/><linearGradient id="ah" x1="1525.091" x2="1159.715" y1="934.616" y2="1257.236" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ah)" points="1290.7 1158 1270.9 1147.2 1247.4 1161.1 1267.2 1171.9"/><linearGradient id="ai" x1="1530.285" x2="1164.904" y1="940.497" y2="1263.12" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ai)" points="1322.2 1140.2 1302.4 1129.4 1279 1143.3 1298.8 1154.1"/><linearGradient id="aj" x1="1535.477" x2="1170.098" y1="946.378" y2="1268.999" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aj)" points="1353.8 1122.4 1334 1111.6 1310.5 1125.5 1330.3 1136.3"/><linearGradient id="ak" x1="1540.669" x2="1175.289" y1="952.26" y2="1274.882" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ak)" points="1385.3 1104.6 1365.6 1093.8 1342.1 1107.7 1361.9 1118.4"/><linearGradient id="al" x1="1545.86" x2="1180.481" y1="958.141" y2="1280.763" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#al)" points="1416.9 1086.8 1397.1 1076 1373.7 1089.9 1393.4 1100.6"/><linearGradient id="am" x1="1551.052" x2="1185.675" y1="964.023" y2="1286.643" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#am)" points="1448.5 1069 1428.7 1058.2 1405.2 1072.1 1425 1082.8"/><linearGradient id="an" x1="1556.244" x2="1190.866" y1="969.904" y2="1292.526" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#an)" points="1480 1051.2 1460.2 1040.4 1436.8 1054.3 1456.6 1065"/><linearGradient id="ao" x1="1561.437" x2="1196.06" y1="975.786" y2="1298.406" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ao)" points="1511.6 1033.4 1491.8 1022.6 1468.3 1036.5 1488.1 1047.2"/><linearGradient id="ap" x1="1566.629" x2="1201.249" y1="981.667" y2="1304.289" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ap)" points="1543.1 1015.6 1523.3 1004.8 1499.9 1018.7 1519.7 1029.4"/><linearGradient id="aq" x1="1571.821" x2="1206.442" y1="987.549" y2="1310.17" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aq)" points="1574.7 997.8 1554.9 987 1531.5 1000.9 1551.2 1011.6"/><linearGradient id="ar" x1="1518.649" x2="1153.271" y1="927.31" y2="1249.932" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ar)" points="1140.9 1251 1117.5 1264.9 1137.3 1275.6 1160.7 1261.7"/><linearGradient id="as" x1="1523.84" x2="1158.463" y1="933.193" y2="1255.813" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#as)" points="1149 1247.1 1168.8 1257.8 1192.3 1243.9 1172.5 1233.2"/><linearGradient id="at" x1="1529.032" x2="1163.654" y1="939.075" y2="1261.696" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#at)" points="1223.8 1226.1 1204.1 1215.4 1180.6 1229.2 1200.4 1240"/><linearGradient id="au" x1="1534.225" x2="1168.846" y1="944.955" y2="1267.576" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#au)" points="1212.2 1211.4 1231.9 1222.2 1255.4 1208.3 1235.6 1197.6"/><linearGradient id="av" x1="1539.418" x2="1174.041" y1="950.836" y2="1273.456" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#av)" points="1243.7 1193.6 1263.5 1204.4 1287 1190.5 1267.2 1179.8"/><linearGradient id="aw" x1="1544.61" x2="1179.229" y1="956.717" y2="1279.34" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aw)" points="1275.3 1175.8 1295.1 1186.6 1318.5 1172.7 1298.7 1162"/><linearGradient id="ax" x1="1549.802" x2="1184.423" y1="962.599" y2="1285.22" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ax)" points="1306.8 1158 1326.6 1168.8 1350.1 1154.9 1330.3 1144.2"/><linearGradient id="ay" x1="1554.993" x2="1189.614" y1="968.481" y2="1291.103" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ay)" points="1338.4 1140.2 1358.2 1151 1381.6 1137.1 1361.8 1126.4"/><linearGradient id="az" x1="1560.185" x2="1194.806" y1="974.363" y2="1296.984" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#az)" points="1370 1122.4 1389.7 1133.2 1413.2 1119.3 1393.4 1108.6"/><linearGradient id="aA" x1="1565.377" x2="1200.001" y1="980.245" y2="1302.863" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aA)" points="1401.5 1104.6 1421.3 1115.4 1444.7 1101.5 1425 1090.8"/><linearGradient id="aB" x1="1570.569" x2="1205.191" y1="986.126" y2="1308.747" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aB)" points="1433.1 1086.8 1452.8 1097.6 1476.3 1083.7 1456.5 1073"/><linearGradient id="aC" x1="1575.761" x2="1210.385" y1="992.007" y2="1314.626" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aC)" points="1464.6 1069 1484.4 1079.8 1507.9 1065.9 1488.1 1055.2"/><linearGradient id="aD" x1="1580.954" x2="1215.575" y1="997.888" y2="1320.509" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aD)" points="1496.2 1051.2 1516 1062 1539.4 1048.1 1519.6 1037.4"/><linearGradient id="aE" x1="1586.146" x2="1220.766" y1="1003.77" y2="1326.392" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aE)" points="1527.7 1033.4 1547.5 1044.2 1571 1030.3 1551.2 1019.6"/><linearGradient id="aF" x1="1591.338" x2="1225.96" y1="1009.651" y2="1332.272" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aF)" points="1579.1 1026.4 1602.5 1012.5 1582.8 1001.8 1559.3 1015.6"/><linearGradient id="aG" x1="1540.758" x2="1175.383" y1="952.357" y2="1274.975" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aG)" points="1196.7 1272.5 1203.5 1268.5 1214.5 1262.3 1214.3 1262.1 1220.1 1258.7 1200.3 1247.9 1183.7 1257.8 1145.3 1279.6 1165.1 1290.3 1196.5 1272.5"/><linearGradient id="aH" x1="1548.55" x2="1183.17" y1="961.176" y2="1283.799" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aH)" points="1251.7 1240.9 1231.9 1230.1 1208.4 1244 1228.2 1254.7"/><linearGradient id="aI" x1="1553.743" x2="1188.364" y1="967.057" y2="1289.678" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aI)" points="1240 1226.2 1259.8 1236.9 1283.2 1223.1 1263.5 1212.3"/><linearGradient id="aJ" x1="1558.934" x2="1193.554" y1="972.938" y2="1295.561" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aJ)" points="1271.6 1208.4 1291.3 1219.1 1314.8 1205.3 1295 1194.5"/><linearGradient id="aK" x1="1564.125" x2="1198.749" y1="978.821" y2="1301.44" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aK)" points="1303.1 1190.6 1322.9 1201.3 1346.4 1187.5 1326.6 1176.7"/><linearGradient id="aL" x1="1569.318" x2="1203.941" y1="984.702" y2="1307.322" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aL)" points="1334.7 1172.8 1354.5 1183.5 1377.9 1169.7 1358.1 1158.9"/><linearGradient id="aM" x1="1574.509" x2="1209.132" y1="990.584" y2="1313.204" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aM)" points="1366.2 1155 1386 1165.7 1409.5 1151.9 1389.7 1141.1"/><linearGradient id="aN" x1="1582.296" x2="1216.922" y1="999.407" y2="1322.025" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aN)" points="1417.6 1147.9 1424.6 1143.8 1472.6 1116.3 1452.8 1105.5 1421.5 1123.5 1421.2 1123.3 1404.8 1133 1403.5 1133.8 1403.5 1133.8 1397.8 1137.2"/><linearGradient id="aO" x1="1590.086" x2="1224.706" y1="1008.227" y2="1330.85" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aO)" points="1460.9 1101.6 1480.7 1112.3 1504.1 1098.5 1484.4 1087.7"/><linearGradient id="aP" x1="1595.278" x2="1229.902" y1="1014.109" y2="1336.728" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aP)" points="1492.5 1083.8 1512.3 1094.5 1535.7 1080.7 1515.9 1069.9"/><linearGradient id="aQ" x1="1600.471" x2="1235.09" y1="1019.99" y2="1342.613" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aQ)" points="1567.3 1062.9 1547.5 1052.1 1524 1066 1543.8 1076.7"/><linearGradient id="aR" x1="1605.663" x2="1240.285" y1="1025.872" y2="1348.492" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aR)" points="1555.6 1048.2 1575.4 1058.9 1598.8 1045.1 1579 1034.3"/><linearGradient id="aS" x1="1610.855" x2="1245.476" y1="1031.753" y2="1354.374" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aS)" points="1606.9 1041.1 1630.4 1027.3 1610.6 1016.5 1587.1 1030.4"/><linearGradient id="aT" x1="1557.685" x2="1192.306" y1="971.514" y2="1294.135" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aT)" points="1196.6 1280.5 1173.2 1294.3 1193 1305.1 1216.4 1291.2"/><linearGradient id="aU" x1="1562.876" x2="1197.496" y1="977.396" y2="1300.018" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aU)" points="1224.5 1287.3 1248 1273.4 1228.2 1262.7 1204.7 1276.5"/><linearGradient id="aV" x1="1568.066" x2="1202.688" y1="983.279" y2="1305.9" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aV)" points="1256.1 1269.5 1279.5 1255.6 1259.7 1244.9 1236.3 1258.7"/><linearGradient id="aW" x1="1573.258" x2="1207.879" y1="989.16" y2="1311.782" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aW)" points="1311.1 1237.8 1291.3 1227.1 1267.9 1240.9 1287.6 1251.7"/><linearGradient id="aX" x1="1578.45" x2="1213.071" y1="995.042" y2="1317.663" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aX)" points="1342.6 1220 1322.9 1209.3 1299.4 1223.1 1319.2 1233.9"/><linearGradient id="aY" x1="1583.642" x2="1218.266" y1="1000.923" y2="1323.543" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aY)" points="1374.2 1202.2 1354.4 1191.5 1331 1205.3 1350.7 1216.1"/><linearGradient id="aZ" x1="1588.835" x2="1223.456" y1="1006.804" y2="1329.426" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#aZ)" points="1405.8 1184.4 1386 1173.7 1362.5 1187.5 1382.3 1198.3"/><linearGradient id="ba" x1="1594.027" x2="1228.649" y1="1012.685" y2="1335.306" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#ba)" points="1437.3 1166.6 1417.5 1155.9 1394.1 1169.7 1413.9 1180.5"/><linearGradient id="bb" x1="1599.219" x2="1233.84" y1="1018.567" y2="1341.189" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bb)" points="1468.9 1148.8 1449.1 1138.1 1425.6 1151.9 1445.4 1162.7"/><linearGradient id="bc" x1="1604.412" x2="1239.031" y1="1024.448" y2="1347.071" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bc)" points="1500.4 1131 1480.7 1120.3 1457.2 1134.1 1477 1144.9"/><linearGradient id="bd" x1="1609.604" x2="1244.226" y1="1030.33" y2="1352.95" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bd)" points="1532 1113.2 1512.2 1102.5 1488.8 1116.3 1508.5 1127.1"/><linearGradient id="be" x1="1614.795" x2="1249.417" y1="1036.211" y2="1358.832" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#be)" points="1563.5 1095.4 1543.8 1084.7 1520.3 1098.5 1540.1 1109.3"/><linearGradient id="bf" x1="1619.987" x2="1254.611" y1="1042.093" y2="1364.713" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bf)" points="1595.1 1077.6 1575.3 1066.9 1551.9 1080.7 1571.7 1091.5"/><linearGradient id="bg" x1="1625.18" x2="1259.801" y1="1047.974" y2="1370.596" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bg)" points="1626.7 1059.8 1606.9 1049 1583.4 1062.9 1603.2 1073.7"/><linearGradient id="bh" x1="1630.372" x2="1264.993" y1="1053.855" y2="1376.477" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bh)" points="1634.8 1055.9 1658.2 1042 1638.4 1031.2 1615 1045.1"/><linearGradient id="bi" x1="1577.199" x2="1211.82" y1="993.618" y2="1316.24" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bi)" points="1224.5 1295.2 1201 1309.1 1220.8 1319.8 1244.3 1306"/><linearGradient id="bj" x1="1582.392" x2="1217.015" y1="999.499" y2="1322.118" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bj)" points="1275.8 1288.2 1256 1277.4 1232.6 1291.3 1252.4 1302"/><linearGradient id="bk" x1="1587.584" x2="1222.206" y1="1005.38" y2="1328.001" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bk)" points="1307.4 1270.4 1287.6 1259.6 1264.1 1273.5 1283.9 1284.2"/><linearGradient id="bl" x1="1592.775" x2="1227.396" y1="1011.263" y2="1333.884" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bl)" points="1338.9 1252.6 1319.2 1241.8 1295.7 1255.7 1315.5 1266.4"/><linearGradient id="bm" x1="1597.967" x2="1232.591" y1="1017.145" y2="1339.763" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bm)" points="1370.5 1234.8 1350.7 1224 1327.3 1237.9 1347 1248.6"/><linearGradient id="bn" x1="1603.16" x2="1237.78" y1="1023.025" y2="1345.648" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bn)" points="1402 1217 1382.3 1206.2 1358.8 1220.1 1378.6 1230.8"/><linearGradient id="bo" x1="1608.353" x2="1242.974" y1="1028.906" y2="1351.527" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bo)" points="1433.6 1199.2 1413.8 1188.4 1390.4 1202.3 1410.2 1213"/><linearGradient id="bp" x1="1613.544" x2="1248.164" y1="1034.788" y2="1357.41" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bp)" points="1465.2 1181.4 1445.4 1170.6 1421.9 1184.5 1441.7 1195.2"/><linearGradient id="bq" x1="1618.737" x2="1253.356" y1="1040.669" y2="1363.292" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bq)" points="1496.7 1163.6 1476.9 1152.8 1453.5 1166.7 1473.3 1177.4"/><linearGradient id="br" x1="1623.928" x2="1258.551" y1="1046.551" y2="1369.171" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#br)" points="1528.3 1145.8 1508.5 1135 1485 1148.9 1504.8 1159.6"/><linearGradient id="bs" x1="1629.12" x2="1263.742" y1="1052.432" y2="1375.053" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bs)" points="1559.8 1127.9 1540.1 1117.2 1516.6 1131.1 1536.4 1141.8"/><linearGradient id="bt" x1="1634.313" x2="1268.934" y1="1058.313" y2="1380.935" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bt)" points="1591.4 1110.1 1571.6 1099.4 1548.2 1113.3 1567.9 1124"/><linearGradient id="bu" x1="1639.504" x2="1274.128" y1="1064.195" y2="1386.815" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bu)" points="1623 1092.3 1603.2 1081.6 1579.7 1095.5 1599.5 1106.2"/><linearGradient id="bv" x1="1644.697" x2="1279.318" y1="1070.076" y2="1392.698" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bv)" points="1654.5 1074.5 1634.7 1063.8 1611.3 1077.7 1631.1 1088.4"/><linearGradient id="bw" x1="1649.889" x2="1284.51" y1="1075.958" y2="1398.579" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bw)" points="1662.6 1070.6 1686.1 1056.7 1666.3 1046 1642.8 1059.9"/><linearGradient id="bx" x1="1596.716" x2="1231.339" y1="1015.72" y2="1338.341" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bx)" points="1228.9 1323.8 1248.7 1334.6 1272.1 1320.7 1252.3 1310"/><linearGradient id="by" x1="1601.907" x2="1236.53" y1="1021.604" y2="1344.223" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#by)" points="1260.4 1306 1280.2 1316.8 1303.7 1302.9 1283.9 1292.2"/><linearGradient id="bz" x1="1620.076" x2="1254.705" y1="1042.19" y2="1364.805" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bz)" points="1472 1186.1 1471.5 1185.8 1378.6 1238.8 1378.6 1238.7 1374.8 1241 1347.2 1256.7 1347 1256.6 1333.4 1264.6 1292 1288.2 1311.8 1299 1343.1 1281.1 1343.3 1281.2 1353.2 1275.3 1374.5 1263.2 1374.9 1263.4 1394.6 1251.7 1405.9 1245.3 1406.4 1245.6 1429.9 1231.7 1429.8 1231.6 1437.3 1227.4 1438 1227.8 1461.5 1213.9 1461.2 1213.7 1468.6 1209.5 1469.6 1210 1493 1196.1 1473.2 1185.3"/><linearGradient id="bA" x1="1638.253" x2="1272.876" y1="1062.772" y2="1385.392" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bA)" points="1481.3 1181.4 1501.1 1192.2 1524.6 1178.3 1504.8 1167.5"/><linearGradient id="bB" x1="1643.445" x2="1278.066" y1="1068.653" y2="1391.275" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bB)" points="1512.9 1163.6 1532.7 1174.4 1556.1 1160.5 1536.3 1149.7"/><linearGradient id="bC" x1="1648.637" x2="1283.259" y1="1074.535" y2="1397.155" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bC)" points="1544.5 1145.8 1564.2 1156.6 1587.7 1142.7 1567.9 1131.9"/><linearGradient id="bD" x1="1653.83" x2="1288.451" y1="1080.416" y2="1403.037" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bD)" points="1576 1128 1595.8 1138.8 1619.2 1124.9 1599.5 1114.1"/><linearGradient id="bE" x1="1659.022" x2="1293.641" y1="1086.297" y2="1408.92" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bE)" points="1607.6 1110.2 1627.3 1121 1650.8 1107.1 1631 1096.3"/><linearGradient id="bF" x1="1664.214" x2="1298.836" y1="1092.179" y2="1414.799" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bF)" points="1639.1 1092.4 1658.9 1103.2 1682.4 1089.3 1662.6 1078.5"/><linearGradient id="bG" x1="1669.406" x2="1304.027" y1="1098.06" y2="1420.682" gradientTransform="matrix(.9956 -.0024 .008 1.0044 -4.739 -2.28)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e9e9f4"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bG)" points="1694.1 1060.7 1670.7 1074.6 1690.5 1085.3 1713.9 1071.5"/><g><defs><filter id="bH" width="760.9" height="194.7" x="591.7" y="1360.8" filterUnits="userSpaceOnUse"><feFlood flood-color="#fff" flood-opacity="1" result="back"/><feBlend in="SourceGraphic" in2="back"/></filter></defs><mask id="bJ" width="760.9" height="194.7" x="591.7" y="1360.8" maskUnits="userSpaceOnUse"><g filter="url(#bH)"><linearGradient id="bI" x1="591.724" x2="1352.585" y1="1458.181" y2="1458.181" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#4d4d4d"/></linearGradient><polygon fill="url(#bI)" points="596.9 1408.4 591.7 1415.6 821.9 1549 918.7 1498.4 1015.3 1555.6 1352.6 1533.8 1064.1 1360.8" mask="url(#bJ)"/></g></mask><linearGradient id="bK" x1="591.724" x2="1352.585" y1="1458.181" y2="1458.181" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0b031e"/><stop offset="1" stop-color="#0b031e"/></linearGradient><polygon fill="url(#bK)" points="596.9 1408.4 591.7 1415.6 821.9 1549 918.7 1498.4 1015.3 1555.6 1352.6 1533.8 1064.1 1360.8" opacity=".15"/><linearGradient id="bL" x1="596.875" x2="987.216" y1="1427.055" y2="1427.055" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#fff"/></linearGradient><polygon fill="url(#bL)" points="762.3 1312.3 596.9 1408.4 823.6 1541.8 987.2 1443.7"/><linearGradient id="bM" x1="792.046" x2="1206.769" y1="1384.552" y2="1384.552" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fafafc"/><stop offset="1" stop-color="#eaeaf4"/></linearGradient><polygon fill="url(#bM)" points="967.8 1262.7 792 1364.8 1032.9 1506.4 1206.8 1402.3"/><linearGradient id="bN" x1="778.083" x2="1053.406" y1="1378.064" y2="1544.617" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#bN)" points="792 1412.3 792 1364.8 1032.9 1506.4 1032.9 1553.9"/><linearGradient id="bO" x1="1111.852" x2="1126.6" y1="1451.79" y2="1500.403" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><polygon fill="url(#bO)" points="1206.8 1402.3 1206.8 1449.8 1032.9 1553.9 1032.9 1506.4"/><linearGradient id="bP" x1="1037.288" x2="1206.769" y1="1477.872" y2="1477.872" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#fff"/></linearGradient><polygon fill="url(#bP)" points="1206.8 1409.5 1037.3 1510.8 1037.3 1546.2 1206.8 1443.1"/></g><linearGradient id="bQ" x1="1634.741" x2="1769.82" y1="1097.304" y2="1097.304" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd4d4"/><stop offset="1" stop-color="#ffa78f"/></linearGradient><path fill="url(#bQ)" d="M1768.8,1086.1c0,0-31.3-22.3-55.1-29c-23.8-6.7-42.5-8.6-69.8,0c-27.3,8.6,12.3,20.6,38.6,35.1   c26.4,14.4,13,17.6,16.4,25.5c3.3,7.9,43.3,31.6,59.5,24.1C1774.6,1134.2,1768.8,1086.1,1768.8,1086.1z"/><g><linearGradient id="bR" x1="1644.768" x2="1924.501" y1="790.169" y2="790.169" gradientTransform="rotate(10.212 1574.748 1250.133)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd4d4"/><stop offset="1" stop-color="#ffa78f"/></linearGradient><path fill="url(#bR)" d="M1739.1,733.2c0,0-2.1,42.7,6.4,57.2c8.5,14.5,13.8,26.4,9.8,34.8c-4,8.3-14.9,34.5,0.6,68.9    c15.4,34.4,14.3,78.2,38.9,79c24.6,0.7,49.9-6,57.6-0.3c7.6,5.7,6.1,14.1,6.1,14.1s53.4,9,76.8-1c23.4-10,47.4-26.4,47.4-26.4    s-1.8-38.3-2.6-50.8c-0.8-12.5,19.3-206.6-63.5-217.2C1833.8,680.9,1739.1,733.2,1739.1,733.2z"/></g><path fill="#fff" d="M2240,1202.4c0,0-5.8,15.9-22,27.3c-16.1,11.4-41.6,14-41.6,14s15,359.4-18.5,442.5   c-32.4,80.3-180,116.5-324.3,100.1c-5.2-0.6-10.3-1.2-15.4-1.9c-149-20.8-122.5-152.5-122.5-152.5l54.5-123.3l6.7-15.3   c0,0-9.2,10.3-50.8-11.8c-41.5-22.1-43-57.8-43-57.8s10.9-263.9,45.6-314.6c34.7-50.7,127.2-75,127.2-75V998   c0,0,17.4-7.9,64.7-27.4c47.3-19.5,106.3-26.7,106.3-26.7l7,19.9c0,0,93.9-28.8,132-11.7C2184,969.3,2240,1202.4,2240,1202.4z"/><linearGradient id="bS" x1="1210.257" x2="803.473" y1="2218.452" y2="2243.624" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#bS)" d="M1147.9,2258.5c-3.1,20-11.2,39.4-26.5,45.7c-35.8,14.8-263.4-61.1-298-75.4c-32.8-13.4-22.7-30.4-21.5-32.2   l0.1-0.2c0,0,3-29.1,25.2-35.2c22.2-6.2,152.4,27.1,174,4.4c21.5-22.8,35-13.7,35-13.7c5.9,44.6,88.2,53.8,102.9,52.6   C1147.4,2203.7,1152.1,2231.6,1147.9,2258.5z"/><linearGradient id="bT" x1="799.543" x2="1147.928" y1="2251.223" y2="2251.223" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47008c"/><stop offset="1" stop-color="#4e4bc1"/></linearGradient><path fill="url(#bT)" d="M1147.9,2258.5c-3.1,20-11.2,39.4-26.5,45.7c-35.8,14.8-263.4-61.1-298-75.4c-32.8-13.4-22.7-30.4-21.5-32.2   l0.1-0.2c0,0,54.4,31.2,157.1,58.4c102.7,27.2,157.1,24.2,176.2,10.1C1139.7,2261.6,1144,2259.6,1147.9,2258.5z"/><linearGradient id="bU" x1="1873.243" x2="1873.243" y1="1306.853" y2="2056.316" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><path fill="url(#bU)" d="M2358,1287.1c0,0-25.5-33.1-58.4-16.5s-314.4,165.1-314.4,165.1s-52,22.6-62.1,82.9l-64.7,552.2   c0,0,1.3,11.4-65.9-21.6c-67.2-33-374.3-219.3-374.3-219.3s-17-8.9-24.8-1.3s-3.7,30.8-3.7,30.8l409.2,239.2c0,0,46.1,39.3,80.1,0   s31.8-139.4,31.8-139.4L2358,1287.1z"/><linearGradient id="bV" x1="2113.585" x2="2113.585" y1="1326.093" y2="2062.141" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#bV)" d="M2302.7,1844.1l74.2-523.9c0,0,5.4-58-67-23.2l-309.6,178c0,0-33.5,11.8-43.9,90c0,0-53.1,504.2-70.2,523.3   c-11.5,12.8-36.1,30.5-36.1,30.5s0,18.6,128.5-55.7s304.1-183.9,304.1-183.9S2299.1,1869.7,2302.7,1844.1z"/><path fill="#12043d" d="M1842.5,1441.7c-7.4,91.2-53.7,261.2-51.2,294.9c2.5,33.7,42.4,49.7,42.4,49.7c-5.2-0.6-10.3-1.2-15.4-1.9   c-149-20.8-122.5-152.5-122.5-152.5l54.5-123.3l40.9-31.3c0,0,21.2-135.4,17.5-191.2c-3.7-55.7-3.7-55.7-3.7-55.7   S1850,1350.5,1842.5,1441.7z" opacity=".11"/><linearGradient id="bW" x1="1519.795" x2="1519.795" y1="1249.626" y2="1592.633" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd4d4"/><stop offset="1" stop-color="#ffa78f"/></linearGradient><path fill="url(#bW)" d="M1670.6,1447.1c0,0,2.7,12.7-7.4,11.4c-10.1-1.3-194.4-123.8-222.5-146.6c-28.2-22.8-58.3-79.7-78.8-80.9   c-20.5-1.2-27.6,8.1-27.6,8.1l15.5,11.1c0,0-74.9-14.3-88.3-9.4c-13.5,5-27.7,32.2,19,39.6c46.8,7.4,68.2,46,76.7,56.5   c8.5,10.5,35.4,4.2,54,22.8c18.6,18.6,278.6,267.1,326.7,260.2c48.1-6.9,53.4-142.5,53.4-142.5S1730.5,1510.2,1670.6,1447.1z"/><path fill="#12043d" d="M2176.5,1243.7c0,0-4.5-142-9.6-174.1c-5.1-32.1-8-35-8-35s25.5,29.9,35,84.5   c9.5,54.7,15.2,115.6,15.2,115.6S2184.7,1245.1,2176.5,1243.7z" opacity=".11"/><linearGradient id="bX" x1="887.277" x2="1007.41" y1="2061.061" y2="2061.061" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bX)" points="1007.4 1727.6 905.4 2405.4 887.3 2405.4 987.3 1716.7"/><linearGradient id="bY" x1="1252.561" x2="1420.164" y1="2085.445" y2="2085.445" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bY)" points="1420.2 1857.3 1270.7 2313.6 1252.6 2313.6 1389.5 1859.4"/><linearGradient id="bZ" x1="362.259" x2="458.678" y1="1739.939" y2="1739.939" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><polygon fill="url(#bZ)" points="458.7 1399.4 380.4 2090.1 362.3 2090.1 440.9 1389.8"/><defs><filter id="ca" width="1413.3" height="570.7" x="1252.6" y="2043.2" filterUnits="userSpaceOnUse"><feFlood flood-color="#fff" flood-opacity="1" result="back"/><feBlend in="SourceGraphic" in2="back"/></filter></defs><mask id="cc" width="1413.3" height="570.7" x="1252.6" y="2043.2" maskUnits="userSpaceOnUse"><g filter="url(#ca)"><linearGradient id="cb" x1="1315.226" x2="2185.005" y1="2017.171" y2="2569.776" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#4d4d4d"/></linearGradient><polygon fill="url(#cb)" points="1252.6 2313.6 1904.6 2614 2665.9 2539.1 2397.4 2382 1729.9 2043.2" mask="url(#cc)"/></g></mask><linearGradient id="cd" x1="1315.226" x2="2185.005" y1="2017.171" y2="2569.776" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0b031e"/><stop offset="1" stop-color="#0b031e"/></linearGradient><polygon fill="url(#cd)" points="1252.6 2313.6 1904.6 2614 2665.9 2539.1 2397.4 2382 1729.9 2043.2" opacity=".15"/><g><linearGradient id="ce" x1="563.694" x2="730.816" y1="948.524" y2="948.524" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47008c"/><stop offset="1" stop-color="#000f16"/></linearGradient><path fill="url(#ce)" d="M563.7,1062.5V929c0-3.4,1.8-6.5,4.7-8.3l156-93c2.8-1.7,6.4,0.4,6.4,3.6V971c0,3.4-1.8,6.6-4.7,8.3     l-151.3,89.6C569.9,1071.8,563.7,1068.2,563.7,1062.5z" opacity=".1"/><linearGradient id="cf" x1="651.297" x2="662.796" y1="828.707" y2="1073.071" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ff6c77"/><stop offset="1" stop-color="#ff8585"/></linearGradient><path fill="url(#cf)" d="M573.5,1067.3V933.8c0-3.4,1.8-6.5,4.7-8.3l156-93c2.8-1.7,6.4,0.4,6.4,3.6v139.6c0,3.4-1.8,6.6-4.7,8.3     l-151.3,89.6C579.7,1076.6,573.5,1073,573.5,1067.3z"/><path fill="#fff" d="M595.3 997.3l45.3-51.3v10l-34.2 37.9v.2l34.2-7.9v10l-45.3 9.2V997.3zM647.5 995.4l20.2-81.9 9.5-6.4L657 989 647.5 995.4zM728 917.1l-45.3 51v-10l35-38.4v-.2l-35 8.4v-10l45.3-9.5V917.1z"/></g><g><defs><filter id="cg" width="291.6" height="129.6" x="486.6" y="1340.8" filterUnits="userSpaceOnUse"><feFlood flood-color="#fff" flood-opacity="1" result="back"/><feBlend in="SourceGraphic" in2="back"/></filter></defs><mask id="ci" width="291.6" height="129.6" x="486.6" y="1340.8" maskUnits="userSpaceOnUse"><g filter="url(#cg)"><linearGradient id="ch" x1="486.595" x2="778.21" y1="1405.592" y2="1405.592" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#4d4d4d"/></linearGradient><path fill="url(#ch)" d="M487.4,1340.8c0,0-4.1,5.6,6.3,13.7s272.7,121.1,284.1,115.7c11.4-5.4-211.9-129.4-211.9-129.4H487.4z" mask="url(#ci)"/></g></mask><linearGradient id="cj" x1="486.595" x2="778.21" y1="1405.592" y2="1405.592" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0b031e"/><stop offset="1" stop-color="#0b031e"/></linearGradient><path fill="url(#cj)" d="M487.4,1340.8c0,0-4.1,5.6,6.3,13.7s272.7,121.1,284.1,115.7c11.4-5.4-211.9-129.4-211.9-129.4H487.4z" opacity=".15"/><linearGradient id="ck" x1="475.611" x2="584.41" y1="1306.928" y2="1306.928" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#ck)" d="M475.6,1253l11.5,85.1c0,12.5,19.2,22.7,42.9,22.7s42.9-10.1,42.9-22.7l11.5-85.1H475.6z"/><linearGradient id="cl" x1="475.611" x2="584.41" y1="1253.049" y2="1253.049" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f7f7fb"/><stop offset="1" stop-color="#bcbbdc"/></linearGradient><ellipse cx="530" cy="1253" fill="url(#cl)" rx="54.4" ry="28.7"/><linearGradient id="cm" x1="481.561" x2="578.46" y1="1253.049" y2="1253.049" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#aab3e4"/><stop offset="1" stop-color="#5270db"/></linearGradient><ellipse cx="530" cy="1253" fill="url(#cm)" rx="48.4" ry="25.6"/><linearGradient id="cn" x1="623.446" x2="519.999" y1="1126.755" y2="1270.742" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#cn)" d="M524.8,1278.6c0,0-7.5-63.8,27.8-103.1c35.3-39.3,82.5-42.5,82.5-42.5s11.9,20.5-23.4,58.8      c-35.3,38.4-51.2,47.3-68.8,49.4c-17.6,2.1-12.5,19.4-12.9,26c-0.4,6.6,0,11.3,0,11.3H524.8z"/><linearGradient id="co" x1="577.687" x2="540.477" y1="1446.534" y2="1498.326" gradientTransform="rotate(15.284 1369.773 1337.801)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#co)" d="M528.4,1277.2c0,0,3.4-22.8,19.4-33.1c16-10.3,32.6-6.9,32.6-6.9s2.2,8.2-13.7,18.2      c-15.9,10-22.3,11.6-28.6,10.6c-6.3-0.9-6.2,5.5-6.9,7.8c-0.8,2.3-1.1,3.9-1.1,3.9L528.4,1277.2z"/><linearGradient id="cp" x1="583.208" x2="514.243" y1="1046.715" y2="1235.901" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#cp)" d="M522.1,1275.8c0,0,6-99.8,7.9-117.9c1.8-18.1-17.1-39,5.4-74.9c22.5-35.8,78.1-60.8,78.1-60.8      s0.2,77.5-35,117.2c-35.1,39.7-44.1,42.8-48.4,70.1c-4.3,27.3-5.2,69.1-5.2,69.1S521.9,1279,522.1,1275.8z"/><linearGradient id="cq" x1="313.358" x2="523.769" y1="1239.789" y2="1239.789" gradientTransform="rotate(5.902 1339.164 1303.456)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#cq)" d="M521.8,1280.3c0,0-5.8-76.5-3-102.9c2.7-26.4,18.7-84.3-39.4-126.6c-58.1-42.3-141.5-37.4-141.5-37.4      s38.4,27,45.2,64.2s27.1,66.5,56.7,78.9c29.5,12.3,65.6,3.8,68.4,27.8c2.8,24,11.4,92.9,11.4,92.9L521.8,1280.3z"/><linearGradient id="cr" x1="358.637" x2="521.84" y1="1236.834" y2="1236.834" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#06fcf5"/><stop offset="1" stop-color="#5270db"/></linearGradient><path fill="url(#cr)" d="M521.8,1280.3c0,0-5.9-62.1-46.2-80c-40.4-17.9-88.6,1.1-99.8,33.9c-11.2,32.8-17.2,46.1-17.2,46.1      s15.2-12.1,33.7-9.4c18.5,2.7,59.4,2.1,70.7-18.7c11.2-20.8,18.8-35.2,34.2-21.9c15.4,13.3,16.5,46.9,16.5,46.9L521.8,1280.3z"/><path fill="#fff" d="M528.4 1200.3c0 0 10.2-63.8 26.1-103 15.8-39.1 48.9-65.2 48.9-65.2s-36.3 31.1-54.5 93.2C530.7 1187.5 528.4 1200.3 528.4 1200.3zM511 1185.9c0 0-15.2-70.8-56.7-113.7-41.5-42.9-102-54.1-102-54.1s62.4 2.8 106.2 52.2C502.3 1119.7 511 1185.9 511 1185.9zM374.2 1260.7c0 0 35.1-53.9 76.1-57.9 41-4 54.5 24.8 54.5 24.8s-16.3-23.8-47.7-23.5C425.6 1204.4 388.7 1238 374.2 1260.7zM524.9 1274.9c0 0-4.6-39.6 22.1-78.8 26.7-39.2 83.7-60.7 83.7-60.7s-46.9 22.7-72.7 50.5C525.6 1220.8 524.9 1274.9 524.9 1274.9z" opacity=".33"/><path fill="#fff" d="M527.1,1278.7c0,0,3.9-18.9,19-29.7c15.1-10.8,32-12.2,32-12.2s-17.6,4.2-32.9,15      C529.8,1262.6,527.1,1278.7,527.1,1278.7z" opacity=".33"/></g><linearGradient id="cs" x1="1690.994" x2="2085.724" y1="745.586" y2="745.586" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#333456"/><stop offset="1" stop-color="#5f637a"/></linearGradient><path fill="url(#cs)" d="M1804,773.2c0,0-48.5,15.6-94.8-15.2c-46.2-30.8,5-95.6,47.4-121.2c42.4-25.6,188.4-56.5,232.4-39.6   s40,64.9,40,64.9s46,13.2,56,84.6s-86.8,146.9-95.7,149.5c-8.9,2.6-61.4,5-85.3-2.1s-32.9-100.9-43.3-100.1s-11.2,49-16.5,56.4   C1839,857.8,1797,818.3,1804,773.2z"/><g><linearGradient id="ct" x1="1161.651" x2="1094.332" y1="676.675" y2="964.206" gradientTransform="matrix(-1 .1063 0 1 2506.91 -168.33)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f9d375"/><stop offset="1" stop-color="#efb31d"/></linearGradient><path fill="url(#ct)" d="M1412.9,609.9l150.9,73.3l0,232.9l-313.1,181l0-232.9l117.7-237C1376.9,610.2,1397.2,602.3,1412.9,609.9z"/><linearGradient id="cu" x1="1109.688" x2="1082.518" y1="714.018" y2="912.307" gradientTransform="matrix(-1 .1063 0 1 2506.91 -168.33)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fefefe"/><stop offset="1" stop-color="#c6c6c6"/></linearGradient><path fill="url(#cu)" d="M1538.2,717l-117.9,155.8l-144.1-7.3V752.8c0-9.5,5.6-18.7,14.2-23.6l232.7-130.7c7.1-4,15.1,0.3,15.1,8.1     V717z"/><polygon fill="#bcbcbc" points="1490.8 683.2 1432.3 719.1 1432.3 710 1490.8 674.2"/><polygon fill="#bcbcbc" points="1367.1 748.5 1308.5 784.4 1308.5 775.3 1367.1 739.5"/><polygon fill="#bcbcbc" points="1490.8 712.9 1408.1 762.8 1408.1 753.7 1490.8 703.8"/><polygon fill="#bcbcbc" points="1490.8 740.9 1408.1 790.9 1408.1 781.8 1490.8 731.9"/><polygon fill="#bcbcbc" points="1490.8 766 1342.2 856.8 1342.2 847.7 1490.8 757"/><polygon fill="#bcbcbc" points="1490.8 791.1 1342.2 881.8 1342.2 872.8 1490.8 782.1"/><linearGradient id="cv" x1="985.429" x2="1094.054" y1="1016.201" y2="945.218" gradientTransform="matrix(-1 .1063 0 1 2506.91 -168.33)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#d6781a"/><stop offset="1" stop-color="#efb31d"/></linearGradient><polygon fill="url(#cv)" points="1563.8 683.2 1250.7 1097.1 1563.8 916.1"/><linearGradient id="cw" x1="1152.079" x2="1265.009" y1="1050.446" y2="923.535" gradientTransform="matrix(-1 .1063 0 1 2506.91 -168.33)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#d6781a"/><stop offset="1" stop-color="#efb31d"/></linearGradient><polygon fill="url(#cw)" points="1250.7 864.2 1420.4 872.8 1250.7 1097.1"/><linearGradient id="cx" x1="1415.764" x2="1039.469" y1="2810.217" y2="2751.731" gradientTransform="matrix(-1 .6248 0 1 2506.975 -2699.153)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#47018d"/><stop offset="1" stop-color="#a5afe3"/></linearGradient><path fill="url(#cx)" d="M1176.1,918.1c0,40.3,32.7,52.6,73,27.4c40.3-25.2,73-78.3,73-118.6c0-40.3-32.7-52.6-73-27.4     C1208.8,824.6,1176.1,877.7,1176.1,918.1z"/><path fill="#fefefe" d="M1232.2,879.8c-3-1.8-4.8-5.4-4.8-10.6c0-11.9,9.7-27.7,21.6-35.2c11.9-7.5,21.6-3.8,21.6,8.1     c0,5.1-1.8,10.9-4.8,16.5c12.7-1.7,21.5,5.9,21.5,21c0,2.4-0.2,4.9-0.7,7.5l-75.4,47.1c-0.4-2-0.7-4.2-0.7-6.6     C1210.7,912.6,1219.5,894,1232.2,879.8z"/></g></svg>
               
                
                <!-- <img
                  width="290"
                  height="402"
                  src="img/animated/03.svg"
                  alt="elm-man"
                  class="elm-man animatable pixFadeRight"
                  data-wow-delay="0.7s"
                /> -->
                <!-- <img
                  width="448"
                  height="214"
                  src="img/animated/04.svg"
                  alt="elm-table"
                  class="elm-table animatable pixFadeUp"
                  data-wow-delay="0.1s"
                /> -->

             
                <!-- <img
                  width="42"
                  height="77"
                  src="img/animated/05.svg"
                  alt="main-bg"
                  class="elm-sm-vase animatable pixFade"
                  data-wow-delay="0.9s"
                /> -->

               
                
                
                
                
                <!-- <img
                  width="160"
                  height="223"
                  src="img/animated/06.svg"
                  alt="elm-vase"
                  class="elm-vase animatable pixFadeLeft"
                  data-wow-delay="0.9s"
                /> -->

                
              
                
                <div
                  class="elm-mass animatable pixFadeDown"
                  data-wow-delay="1s"
                >
                  <!-- <img
                    width="134"
                    height="87"
                    src="img/animated/07.svg"
                    alt="massage"
                    class="mass-img"
                  /> -->
                  <!-- <svg class="mass-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="1" fill="#fff"/><path fill="#60a5fa" d="M12 2a10 10 0 0 0-7.743 16.33l-1.964 1.963A1 1 0 0 0 3 22h9a10 10 0 0 0 0-20ZM8 13a1 1 0 1 1 1-1 1 1 0 0 1-1 1Zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1Zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1Z"/><circle cx="8" cy="12" r="1" fill="#fff"/><circle cx="16" cy="12" r="1" fill="#fff"/></svg> -->
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
                <li>

                  <span>
                    <svg class="file-fa-icon shield-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                  </span>
                  
                  <span>
                    Quick Access
                  </span>
                 
                </li>
                
                
                
                <li>

                  <span>
                    <svg class="file-fa-icon shield-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                  </span>
                  
                  <span>
                    Easily Manage
                  </span>
                 
                </li>
                
                
                
                <li>

                  <span>
                    <svg class="file-fa-icon shield-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                  </span>
                  
                  <span>
                    7/24 Support
                  </span>
                 
                </li>
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
          <!-- animaated-elements-two -->
          <div class="col-lg-6">
            <div class="animaated-elements-two">
              <svg width="396" height="350" viewBox="0 0 396 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="396" height="350" fill="#1E1E1E"/>
                <g clip-path="url(#clip0_0_1)">
                <path d="M-302 -325H698V675H-302V-325Z" fill="white"/>
                </g>
                <path opacity="0.01" d="M83.3791 247.085C45.0763 246.499 14.3183 234.95 14.6792 221.289C15.0401 207.628 46.3832 197.028 84.6859 197.614C122.989 198.201 153.747 209.75 153.386 223.411C153.025 237.072 121.682 247.671 83.3791 247.085Z" fill="#141414"/>
                <path opacity="0.015" d="M83.3906 246.648C45.7561 246.072 15.5346 234.727 15.8891 221.307C16.2436 207.888 47.0399 197.476 84.6744 198.051C122.309 198.627 152.53 209.973 152.176 223.392C151.821 236.812 121.025 247.224 83.3906 246.648Z" fill="#141414"/>
                <path opacity="0.022" d="M83.4022 246.211C46.4358 245.646 16.7509 234.504 17.099 221.326C17.4471 208.147 47.6965 197.923 84.6629 198.488C121.629 199.054 151.314 210.196 150.966 223.374C150.618 236.552 120.369 246.777 83.4022 246.211Z" fill="#141414"/>
                <path opacity="0.03" d="M83.4137 245.774C47.1269 245.219 17.9876 234.281 18.3294 221.345C18.6712 208.408 48.3645 198.37 84.6513 198.925C120.938 199.481 150.077 210.418 149.736 223.355C149.394 236.292 119.701 246.329 83.4137 245.774Z" fill="#141414"/>
                <path opacity="0.037" d="M83.4252 245.337C47.8066 244.792 19.2039 234.059 19.5393 221.363C19.8747 208.667 49.0211 198.817 84.6398 199.362C120.258 199.907 148.861 210.641 148.526 223.336C148.19 236.032 119.044 245.882 83.4252 245.337Z" fill="#141414"/>
                <path opacity="0.044" d="M83.4364 244.916C48.4859 244.381 20.4199 233.844 20.7492 221.382C21.0784 208.919 49.6782 199.249 84.6286 199.784C119.579 200.318 147.645 210.855 147.316 223.318C146.987 235.781 118.387 245.451 83.4364 244.916Z" fill="#141414"/>
                <path opacity="0.052" d="M83.4479 244.479C49.177 243.955 21.6567 233.622 21.9796 221.4C22.3024 209.179 50.3462 199.696 84.6171 200.221C118.888 200.745 146.408 211.078 146.085 223.299C145.763 235.521 117.719 245.003 83.4479 244.479Z" fill="#141414"/>
                <path opacity="0.059" d="M83.4594 244.042C49.8568 243.528 22.8729 233.399 23.1894 221.419C23.5059 209.439 51.0029 200.144 84.6055 200.658C118.208 201.172 145.192 211.3 144.876 223.281C144.559 235.261 117.062 244.556 83.4594 244.042Z" fill="#141414"/>
                <path opacity="0.067" d="M83.471 243.605C50.5365 243.101 24.0892 233.176 24.3993 221.437C24.7094 209.699 51.6595 200.591 84.594 201.095C117.528 201.598 143.976 211.523 143.666 223.262C143.356 235.001 116.405 244.109 83.471 243.605Z" fill="#141414"/>
                <path opacity="0.074" d="M83.4821 243.184C51.2158 242.69 25.3053 232.962 25.6092 221.456C25.9132 209.95 52.3166 201.022 84.5829 201.516C116.849 202.01 142.76 211.737 142.456 223.244C142.152 234.75 115.748 243.677 83.4821 243.184Z" fill="#141414"/>
                <path opacity="0.081" d="M83.4937 242.747C51.9069 242.263 26.542 232.74 26.8396 221.475C27.1372 210.21 52.9846 201.47 84.5713 201.953C116.158 202.436 141.523 211.96 141.225 223.225C140.928 234.49 115.08 243.23 83.4937 242.747Z" fill="#141414"/>
                <path opacity="0.089" d="M83.5052 242.31C52.5867 241.837 27.7583 232.517 28.0495 221.493C28.3407 210.47 53.6412 201.917 84.5598 202.39C115.478 202.863 140.307 212.183 140.015 223.206C139.724 234.23 114.424 242.783 83.5052 242.31Z" fill="#141414"/>
                <path opacity="0.096" d="M83.5168 241.873C53.2664 241.41 28.9746 232.294 29.2594 221.512C29.5442 210.73 54.2979 202.364 84.5482 202.827C114.799 203.29 139.09 212.406 138.806 223.188C138.521 233.97 113.767 242.336 83.5168 241.873Z" fill="#141414"/>
                <path opacity="0.104" d="M83.5283 241.436C53.9575 240.983 30.2113 232.071 30.4898 221.531C30.7682 210.99 54.9659 202.811 84.5367 203.264C114.108 203.716 137.854 212.628 137.575 223.169C137.297 233.71 113.099 241.888 83.5283 241.436Z" fill="#141414"/>
                <path opacity="0.111" d="M83.5394 241.014C54.6368 240.572 31.4274 231.857 31.6997 221.549C31.972 211.241 55.623 203.243 84.5256 203.685C113.428 204.127 136.638 212.842 136.365 223.15C136.093 233.459 112.442 241.457 83.5394 241.014Z" fill="#141414"/>
                <path opacity="0.119" d="M83.551 240.577C55.3166 240.145 32.6436 231.634 32.9096 221.568C33.1755 211.501 56.2796 203.69 84.514 204.122C112.748 204.554 135.421 213.065 135.155 223.132C134.889 233.199 111.785 241.009 83.551 240.577Z" fill="#141414"/>
                <path opacity="0.126" d="M83.5625 240.14C56.0076 239.719 33.8804 231.412 34.14 221.586C34.3995 211.761 56.9476 204.138 84.5025 204.559C112.057 204.981 134.185 213.288 133.925 223.113C133.665 232.939 111.117 240.562 83.5625 240.14Z" fill="#141414"/>
                <path opacity="0.133" d="M83.5741 239.703C56.6874 239.292 35.0967 231.189 35.3498 221.605C35.603 212.021 57.6043 204.585 84.4909 204.996C111.378 205.407 132.968 213.51 132.715 223.095C132.462 232.679 110.461 240.115 83.5741 239.703Z" fill="#141414"/>
                <path opacity="0.141" d="M83.5852 239.282C57.3667 238.881 36.3127 230.975 36.5597 221.623C36.8068 212.272 58.2613 205.016 84.4798 205.417C110.698 205.819 131.752 213.725 131.505 223.076C131.258 232.428 109.804 239.683 83.5852 239.282Z" fill="#141414"/>
                <path opacity="0.148" d="M83.5967 238.845C58.0465 238.454 37.529 230.752 37.7696 221.642C38.0103 212.532 58.918 205.463 84.4683 205.854C110.019 206.245 130.536 213.947 130.295 223.058C130.055 232.168 109.147 239.236 83.5967 238.845Z" fill="#141414"/>
                <path opacity="0.156" d="M83.6083 238.408C58.7375 238.028 38.7657 230.53 39 221.661C39.2343 212.792 59.586 205.911 84.4567 206.291C109.327 206.672 129.299 214.17 129.065 223.039C128.831 231.908 108.479 238.789 83.6083 238.408Z" fill="#141414"/>
                <path opacity="0.163" d="M83.6198 237.971C59.4173 237.601 39.982 230.307 40.2099 221.679C40.4378 213.052 60.2426 206.358 84.4452 206.728C108.648 207.099 128.083 214.393 127.855 223.02C127.627 231.648 107.822 238.342 83.6198 237.971Z" fill="#141414"/>
                <path opacity="0.17" d="M83.6314 237.534C60.097 237.174 41.1982 230.084 41.4198 221.698C41.6413 213.312 60.8993 206.805 84.4336 207.165C107.968 207.525 126.867 214.616 126.645 223.002C126.424 231.388 107.166 237.894 83.6314 237.534Z" fill="#141414"/>
                <path opacity="0.178" d="M83.6425 237.113C60.7877 236.763 42.4348 229.87 42.6502 221.717C42.8656 213.563 61.5677 207.237 84.4225 207.587C107.277 207.936 125.63 214.829 125.415 222.983C125.199 231.136 106.497 237.463 83.6425 237.113Z" fill="#141414"/>
                <path opacity="0.185" d="M83.654 236.676C61.4674 236.336 43.651 229.647 43.86 221.735C44.069 213.823 62.2243 207.684 84.4109 208.024C106.598 208.363 124.414 215.052 124.205 222.964C123.996 230.877 105.841 237.015 83.654 236.676Z" fill="#141414"/>
                <path opacity="0.193" d="M83.6656 236.239C62.1472 235.91 44.8673 229.424 45.07 221.754C45.2726 214.083 62.881 208.131 84.3994 208.461C105.918 208.79 123.198 215.275 122.995 222.946C122.792 230.617 105.184 236.568 83.6656 236.239Z" fill="#141414"/>
                <path opacity="0.2" d="M83.6771 235.802C62.8382 235.483 46.1041 229.202 46.3004 221.772C46.4966 214.343 63.549 208.579 84.3879 208.898C105.227 209.216 121.961 215.498 121.765 222.927C121.568 230.357 104.516 236.121 83.6771 235.802Z" fill="#141414"/>
                <path d="M68.957 134.034L50.9281 142.01L1.52588e-05 118.925L18.0084 110.98L68.957 134.034Z" fill="url(#paint0_linear_0_1)"/>
                <path d="M157.994 94.6684L68.957 134.034L18.0084 110.98L107.086 71.5827L157.994 94.6684Z" fill="url(#paint1_linear_0_1)"/>
                <path d="M4.57764e-05 218.089V118.94L50.9281 142.026V241.159L4.57764e-05 218.089Z" fill="url(#paint2_linear_0_1)"/>
                <path d="M69.4287 134.268V232.98L50.9281 241.143V142.01L68.957 134.034L69.4287 134.268Z" fill="url(#paint3_linear_0_1)"/>
                <path d="M157.994 94.6684V193.801L69.4287 232.98V134.268L68.957 134.034L157.994 94.6684Z" fill="url(#paint4_linear_0_1)"/>
                <path d="M8.77856 214.561V137.453L40.0574 151.626V228.718L8.77856 214.561Z" fill="url(#paint5_linear_0_1)"/>
                <path d="M15.0343 211.127V140.278L8.77856 137.453V214.561L40.0574 228.718V222.475L15.0343 211.127Z" fill="url(#paint6_linear_0_1)"/>
                <path d="M6.05065 142.494L42.7443 126.277L66.4752 136.813L29.7815 153.046L6.05065 142.494Z" fill="url(#paint7_linear_0_1)"/>
                <path d="M6.05068 216.715V142.494L29.7816 153.046V227.251L6.05068 216.715Z" fill="url(#paint8_linear_0_1)"/>
                <path d="M66.4752 136.813V211.033L29.7816 227.251V153.046L66.4752 136.813Z" fill="url(#paint9_linear_0_1)"/>
                <path d="M6.05068 153.873L29.7816 164.425" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 154.217L18.0289 151.251" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 158.415L18.0289 155.45" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.05068 165.455L29.7816 176.007" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 165.799L18.0289 162.833" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 169.997L18.0289 167.032" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.05068 177.037L29.7816 187.589" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 177.38L18.0289 174.43" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 181.579L18.0289 178.613" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.05068 188.619L29.7816 199.17" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 188.962L18.0289 186.012" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 193.161L18.0289 190.211" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.05068 200.201L29.7816 210.752" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 200.544L18.0289 197.594" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 204.743L18.0289 201.793" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.05068 211.798L29.7816 222.334" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 212.142L18.0289 209.176" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.6949 216.325L18.0289 213.375" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M138.652 122.031L149.4 117.27M138.652 125.84L149.4 121.079M138.652 129.648L149.4 124.887M138.652 133.441L149.4 128.68M138.652 137.25L149.4 132.489M138.652 141.058L149.4 136.298M138.652 144.867L149.4 140.106M138.652 148.675L149.4 143.915M138.652 152.484L149.4 147.723M138.652 156.277L149.4 151.532M138.652 160.086L149.4 155.325M138.652 163.894L149.4 159.133M138.652 167.703L149.4 162.942M138.652 171.511L149.4 166.751M138.652 175.32L149.4 170.559M138.652 179.129L149.4 174.368" stroke="#6C6C70" stroke-width="2.02813" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path opacity="0.01" d="M244.839 334.948C206.536 334.362 175.778 322.813 176.139 309.152C176.5 295.491 207.843 284.891 246.146 285.478C284.449 286.064 315.207 297.613 314.846 311.274C314.485 324.935 283.142 335.534 244.839 334.948Z" fill="#141414"/>
                <path opacity="0.015" d="M244.851 334.511C207.216 333.935 176.995 322.59 177.349 309.17C177.704 295.751 208.5 285.339 246.134 285.914C283.769 286.49 313.99 297.836 313.636 311.255C313.281 324.675 282.485 335.087 244.851 334.511Z" fill="#141414"/>
                <path opacity="0.022" d="M244.862 334.074C207.896 333.509 178.211 322.367 178.559 309.189C178.907 296.01 209.157 285.786 246.123 286.351C283.089 286.917 312.774 298.059 312.426 311.237C312.078 324.415 281.829 334.64 244.862 334.074Z" fill="#141414"/>
                <path opacity="0.03" d="M244.874 333.637C208.587 333.082 179.448 322.144 179.789 309.208C180.131 296.271 209.825 286.233 246.111 286.788C282.398 287.344 311.537 298.281 311.196 311.218C310.854 324.155 281.161 334.192 244.874 333.637Z" fill="#141414"/>
                <path opacity="0.037" d="M244.885 333.2C209.267 332.655 180.664 321.922 180.999 309.226C181.335 296.53 210.481 286.68 246.1 287.225C281.718 287.77 310.321 298.504 309.986 311.199C309.65 323.895 280.504 333.745 244.885 333.2Z" fill="#141414"/>
                <path opacity="0.044" d="M244.896 332.779C209.946 332.244 181.88 321.707 182.209 309.245C182.538 296.782 211.138 287.112 246.089 287.647C281.039 288.181 309.105 298.718 308.776 311.181C308.447 323.644 279.847 333.314 244.896 332.779Z" fill="#141414"/>
                <path opacity="0.052" d="M244.908 332.342C210.637 331.818 183.117 321.485 183.44 309.263C183.762 297.042 211.806 287.559 246.077 288.084C280.348 288.608 307.868 298.941 307.545 311.162C307.223 323.384 279.179 332.866 244.908 332.342Z" fill="#141414"/>
                <path opacity="0.059" d="M244.92 331.905C211.317 331.391 184.333 321.262 184.65 309.282C184.966 297.302 212.463 288.007 246.066 288.521C279.668 289.035 306.652 299.163 306.336 311.144C306.019 323.124 278.522 332.419 244.92 331.905Z" fill="#141414"/>
                <path opacity="0.067" d="M244.931 331.468C211.997 330.964 185.549 321.039 185.859 309.3C186.17 297.562 213.12 288.454 246.054 288.958C278.989 289.461 305.436 299.386 305.126 311.125C304.816 322.864 277.866 331.972 244.931 331.468Z" fill="#141414"/>
                <path opacity="0.074" d="M244.942 331.047C212.676 330.553 186.765 320.825 187.069 309.319C187.373 297.813 213.777 288.885 246.043 289.379C278.309 289.873 304.22 299.6 303.916 311.107C303.612 322.613 277.208 331.54 244.942 331.047Z" fill="#141414"/>
                <path opacity="0.081" d="M244.954 330.61C213.367 330.126 188.002 320.603 188.3 309.338C188.597 298.073 214.445 289.333 246.031 289.816C277.618 290.299 302.983 299.823 302.685 311.088C302.388 322.353 276.54 331.093 244.954 330.61Z" fill="#141414"/>
                <path opacity="0.089" d="M244.965 330.173C214.047 329.7 189.218 320.38 189.51 309.356C189.801 298.333 215.101 289.78 246.02 290.253C276.938 290.726 301.767 300.046 301.476 311.069C301.184 322.093 275.884 330.646 244.965 330.173Z" fill="#141414"/>
                <path opacity="0.096" d="M244.977 329.736C214.726 329.273 190.435 320.157 190.719 309.375C191.004 298.593 215.758 290.227 246.008 290.69C276.259 291.153 300.55 300.269 300.266 311.051C299.981 321.833 275.227 330.198 244.977 329.736Z" fill="#141414"/>
                <path opacity="0.104" d="M244.988 329.299C215.417 328.846 191.671 319.934 191.95 309.394C192.228 298.853 216.426 290.674 245.997 291.127C275.568 291.579 299.314 300.491 299.035 311.032C298.757 321.573 274.559 329.751 244.988 329.299Z" fill="#141414"/>
                <path opacity="0.111" d="M245 328.877C216.097 328.435 192.887 319.72 193.16 309.412C193.432 299.104 217.083 291.106 245.986 291.548C274.888 291.99 298.098 300.705 297.825 311.013C297.553 321.322 273.902 329.32 245 328.877Z" fill="#141414"/>
                <path opacity="0.119" d="M245.011 328.44C216.777 328.008 194.104 319.497 194.37 309.431C194.636 299.364 217.74 291.553 245.974 291.985C274.209 292.417 296.881 300.928 296.616 310.995C296.35 321.062 273.245 328.872 245.011 328.44Z" fill="#141414"/>
                <path opacity="0.126" d="M245.023 328.003C217.468 327.582 195.34 319.275 195.6 309.449C195.86 299.624 218.408 292.001 245.963 292.422C273.517 292.844 295.645 301.151 295.385 310.976C295.126 320.802 272.577 328.425 245.023 328.003Z" fill="#141414"/>
                <path opacity="0.133" d="M245.034 327.566C218.147 327.155 196.557 319.052 196.81 309.468C197.063 299.884 219.064 292.448 245.951 292.859C272.838 293.27 294.428 301.373 294.175 310.958C293.922 320.542 271.921 327.978 245.034 327.566Z" fill="#141414"/>
                <path opacity="0.141" d="M245.045 327.145C218.827 326.744 197.773 318.838 198.02 309.486C198.267 300.135 219.721 292.879 245.94 293.28C272.158 293.682 293.212 301.588 292.965 310.939C292.718 320.291 271.264 327.546 245.045 327.145Z" fill="#141414"/>
                <path opacity="0.148" d="M245.057 326.708C219.506 326.317 198.989 318.615 199.23 309.505C199.47 300.395 220.378 293.326 245.928 293.717C271.479 294.108 291.996 301.81 291.755 310.921C291.515 320.031 270.607 327.099 245.057 326.708Z" fill="#141414"/>
                <path opacity="0.156" d="M245.068 326.271C220.198 325.891 200.226 318.393 200.46 309.524C200.694 300.655 221.046 293.774 245.917 294.154C270.788 294.535 290.759 302.033 290.525 310.902C290.291 319.771 269.939 326.652 245.068 326.271Z" fill="#141414"/>
                <path opacity="0.163" d="M245.08 325.834C220.877 325.464 201.442 318.17 201.67 309.542C201.898 300.915 221.703 294.221 245.905 294.591C270.108 294.962 289.543 302.256 289.315 310.883C289.087 319.511 269.282 326.205 245.08 325.834Z" fill="#141414"/>
                <path opacity="0.17" d="M245.091 325.397C221.557 325.037 202.658 317.947 202.88 309.561C203.101 301.175 222.359 294.668 245.894 295.028C269.428 295.388 288.327 302.479 288.105 310.865C287.884 319.251 268.626 325.757 245.091 325.397Z" fill="#141414"/>
                <path opacity="0.178" d="M245.103 324.976C222.248 324.626 203.895 317.733 204.11 309.58C204.326 301.426 223.028 295.1 245.883 295.45C268.737 295.799 287.09 302.692 286.875 310.846C286.659 318.999 267.957 325.326 245.103 324.976Z" fill="#141414"/>
                <path opacity="0.185" d="M245.114 324.539C222.928 324.199 205.111 317.51 205.32 309.598C205.529 301.686 223.684 295.547 245.871 295.887C268.058 296.226 285.874 302.915 285.665 310.827C285.456 318.74 267.301 324.878 245.114 324.539Z" fill="#141414"/>
                <path opacity="0.193" d="M245.126 324.102C223.607 323.773 206.327 317.287 206.53 309.617C206.733 301.946 224.341 295.994 245.859 296.324C267.378 296.653 284.658 303.138 284.455 310.809C284.252 318.48 266.644 324.431 245.126 324.102Z" fill="#141414"/>
                <path opacity="0.2" d="M245.137 323.665C224.298 323.346 207.564 317.065 207.76 309.635C207.957 302.206 225.009 296.442 245.848 296.761C266.687 297.079 283.421 303.361 283.225 310.79C283.028 318.22 265.976 323.984 245.137 323.665Z" fill="#141414"/>
                <path opacity="0.01" d="M230.769 236.44C192.466 235.854 161.708 224.304 162.069 210.644C162.43 196.983 193.773 186.383 232.076 186.969C270.378 187.555 301.136 199.105 300.776 212.766C300.415 226.427 269.072 237.026 230.769 236.44Z" fill="#141414"/>
                <path opacity="0.015" d="M230.78 236.003C193.146 235.427 162.924 224.082 163.279 210.662C163.633 197.242 194.43 186.831 232.064 187.406C269.699 187.982 299.92 199.328 299.566 212.747C299.211 226.167 268.415 236.579 230.78 236.003Z" fill="#141414"/>
                <path opacity="0.022" d="M230.792 235.566C193.825 235 164.141 223.859 164.489 210.681C164.837 197.502 195.086 187.278 232.053 187.843C269.019 188.409 298.704 199.55 298.356 212.729C298.008 225.907 267.758 236.132 230.792 235.566Z" fill="#141414"/>
                <path opacity="0.03" d="M230.803 235.129C194.517 234.574 165.377 223.636 165.719 210.699C166.061 197.762 195.754 187.725 232.041 188.28C268.328 188.835 297.467 199.773 297.125 212.71C296.784 225.647 267.09 235.684 230.803 235.129Z" fill="#141414"/>
                <path opacity="0.037" d="M230.815 234.692C195.196 234.147 166.594 223.414 166.929 210.718C167.264 198.022 196.411 188.172 232.029 188.717C267.648 189.262 296.251 199.996 295.915 212.691C295.58 225.387 266.434 235.237 230.815 234.692Z" fill="#141414"/>
                <path opacity="0.044" d="M230.826 234.271C195.876 233.736 167.81 223.199 168.139 210.736C168.468 198.274 197.068 188.604 232.018 189.139C266.969 189.673 295.035 200.21 294.706 212.673C294.376 225.136 265.776 234.805 230.826 234.271Z" fill="#141414"/>
                <path opacity="0.052" d="M230.838 233.834C196.567 233.309 169.046 222.977 169.369 210.755C169.692 198.534 197.736 189.051 232.007 189.576C266.278 190.1 293.798 200.432 293.475 212.654C293.152 224.876 265.109 234.358 230.838 233.834Z" fill="#141414"/>
                <path opacity="0.059" d="M230.849 233.397C197.246 232.883 170.263 222.754 170.579 210.774C170.896 198.794 198.393 189.498 231.995 190.013C265.598 190.527 292.582 200.655 292.265 212.636C291.949 224.616 264.452 233.911 230.849 233.397Z" fill="#141414"/>
                <path opacity="0.067" d="M230.861 232.96C197.926 232.456 171.479 222.531 171.789 210.792C172.099 199.053 199.049 189.946 231.984 190.449C264.918 190.953 291.366 200.878 291.055 212.617C290.745 224.356 263.795 233.464 230.861 232.96Z" fill="#141414"/>
                <path opacity="0.074" d="M230.872 232.538C198.606 232.045 172.695 222.317 172.999 210.811C173.303 199.305 199.706 190.377 231.973 190.871C264.239 191.364 290.149 201.092 289.846 212.598C289.542 224.105 263.138 233.032 230.872 232.538Z" fill="#141414"/>
                <path opacity="0.081" d="M230.883 232.101C199.297 231.618 173.932 222.094 174.229 210.83C174.527 199.565 200.374 190.825 231.961 191.308C263.548 191.791 288.913 201.315 288.615 212.58C288.318 223.845 262.47 232.585 230.883 232.101Z" fill="#141414"/>
                <path opacity="0.089" d="M230.895 231.665C199.976 231.191 175.148 221.872 175.439 210.848C175.73 199.825 201.031 191.272 231.949 191.745C262.868 192.218 287.696 201.538 287.405 212.561C287.114 223.585 261.813 232.138 230.895 231.665Z" fill="#141414"/>
                <path opacity="0.096" d="M230.906 231.228C200.656 230.765 176.364 221.649 176.649 210.867C176.934 200.084 201.688 191.719 231.938 192.182C262.188 192.645 286.48 201.76 286.195 212.543C285.91 223.325 261.157 231.69 230.906 231.228Z" fill="#141414"/>
                <path opacity="0.104" d="M230.918 230.791C201.347 230.338 177.601 221.426 177.879 210.885C178.158 200.345 202.356 192.166 231.926 192.619C261.497 193.071 285.243 201.983 284.965 212.524C284.686 223.065 260.489 231.243 230.918 230.791Z" fill="#141414"/>
                <path opacity="0.111" d="M230.929 230.369C202.027 229.927 178.817 221.212 179.089 210.904C179.362 200.596 203.013 192.598 231.915 193.04C260.818 193.482 284.027 202.197 283.755 212.505C283.483 222.813 259.832 230.811 230.929 230.369Z" fill="#141414"/>
                <path opacity="0.119" d="M230.941 229.932C202.706 229.5 180.033 220.989 180.299 210.922C180.565 200.856 203.669 193.045 231.904 193.477C260.138 193.909 282.811 202.42 282.545 212.487C282.279 222.554 259.175 230.364 230.941 229.932Z" fill="#141414"/>
                <path opacity="0.126" d="M230.952 229.495C203.397 229.074 181.27 220.767 181.53 210.941C181.789 201.116 204.337 193.492 231.892 193.914C259.447 194.336 281.574 202.642 281.315 212.468C281.055 222.293 258.507 229.917 230.952 229.495Z" fill="#141414"/>
                <path opacity="0.133" d="M230.964 229.058C204.077 228.647 182.486 220.544 182.74 210.96C182.993 201.376 204.994 193.94 231.881 194.351C258.767 194.762 280.358 202.865 280.105 212.449C279.852 222.034 257.851 229.47 230.964 229.058Z" fill="#141414"/>
                <path opacity="0.141" d="M230.975 228.637C204.756 228.236 183.702 220.33 183.949 210.978C184.196 201.627 205.651 194.371 231.87 194.772C258.088 195.173 279.142 203.079 278.895 212.431C278.648 221.782 257.193 229.038 230.975 228.637Z" fill="#141414"/>
                <path opacity="0.148" d="M230.986 228.2C205.436 227.809 184.919 220.107 185.159 210.997C185.4 201.887 206.308 194.818 231.858 195.209C257.408 195.6 277.926 203.302 277.685 212.412C277.444 221.523 256.537 228.591 230.986 228.2Z" fill="#141414"/>
                <path opacity="0.156" d="M230.998 227.763C206.127 227.383 186.155 219.885 186.39 211.016C186.624 202.147 206.976 195.266 231.846 195.646C256.717 196.027 276.689 203.525 276.455 212.394C276.22 221.262 255.869 228.144 230.998 227.763Z" fill="#141414"/>
                <path opacity="0.163" d="M231.01 227.326C206.807 226.956 187.372 219.662 187.6 211.034C187.828 202.407 207.632 195.713 231.835 196.083C256.037 196.454 275.473 203.748 275.245 212.375C275.017 221.003 255.212 227.696 231.01 227.326Z" fill="#141414"/>
                <path opacity="0.17" d="M231.021 226.889C207.487 226.529 188.588 219.439 188.809 211.053C189.031 202.667 208.289 196.16 231.823 196.52C255.358 196.88 274.256 203.97 274.035 212.357C273.813 220.743 254.555 227.249 231.021 226.889Z" fill="#141414"/>
                <path opacity="0.178" d="M231.032 226.468C208.177 226.118 189.824 219.225 190.04 211.072C190.255 202.918 208.957 196.592 231.812 196.942C254.667 197.291 273.02 204.184 272.804 212.338C272.589 220.491 253.887 226.817 231.032 226.468Z" fill="#141414"/>
                <path opacity="0.185" d="M231.044 226.031C208.857 225.691 191.041 219.002 191.25 211.09C191.459 203.178 209.614 197.039 231.801 197.378C253.987 197.718 271.804 204.407 271.595 212.319C271.386 220.231 253.23 226.37 231.044 226.031Z" fill="#141414"/>
                <path opacity="0.193" d="M231.055 225.594C209.537 225.265 192.257 218.779 192.46 211.109C192.662 203.438 210.271 197.486 231.789 197.815C253.307 198.145 270.587 204.63 270.385 212.301C270.182 219.972 252.574 225.923 231.055 225.594Z" fill="#141414"/>
                <path opacity="0.2" d="M231.067 225.157C210.228 224.838 193.494 218.557 193.69 211.127C193.886 203.698 210.939 197.934 231.778 198.252C252.617 198.571 269.351 204.852 269.154 212.282C268.958 219.711 251.906 225.476 231.067 225.157Z" fill="#141414"/>
                <path d="M302.122 231.497L251.092 208.817L228.715 219.244L279.725 241.908L302.122 231.497Z" fill="url(#paint10_linear_0_1)"/>
                <path d="M302.122 237.631V231.497L279.725 241.908V248.042L302.122 237.631Z" fill="url(#paint11_linear_0_1)"/>
                <path d="M228.715 219.244V225.362L279.725 248.042V241.908L228.715 219.244Z" fill="url(#paint12_linear_0_1)"/>
                <path d="M354.979 176.194V248.807C354.979 250.181 353.851 251.18 352.538 251.82C350.733 252.709 344.313 256.409 342.939 255.815C344.6 255.363 345.872 254.177 345.872 252.662V180.034C345.872 178.848 345.482 177.708 344.764 176.725L353.748 172.651C354.568 173.728 354.979 174.93 354.979 176.194Z" fill="url(#paint13_linear_0_1)"/>
                <path d="M353.748 172.651L344.785 176.725C344.005 175.539 342.775 174.54 341.216 173.868L192.595 108.498C191.324 107.952 189.867 108.014 188.739 108.529V108.498L194.646 105.642C198.441 103.862 199.118 103.534 201.702 104.674L350.323 170.044C351.758 170.669 352.969 171.589 353.748 172.651Z" fill="url(#paint14_linear_0_1)"/>
                <path d="M345.892 180.034V252.662C345.892 254.176 344.621 255.363 342.959 255.815C341.831 256.112 340.519 256.081 339.308 255.55L190.934 190.32C188.391 189.212 186.832 187.167 186.832 184.935V111.027C186.832 109.918 187.652 108.997 188.739 108.514C189.867 107.998 191.324 107.952 192.595 108.482L341.216 173.853C342.775 174.524 344.005 175.523 344.785 176.709C345.503 177.708 345.892 178.848 345.892 180.034Z" fill="url(#paint15_linear_0_1)"/>
                <path d="M193.58 186.808C192.657 186.418 192.124 185.716 192.124 184.919V112.947L338.55 177.349C339.206 177.63 339.719 178.036 340.026 178.504C340.416 179.051 340.56 179.519 340.56 180.018V251.429L193.58 186.808Z" fill="url(#paint16_linear_0_1)"/>
                <path d="M292.442 283.178L179.53 238.209C175.777 236.539 171.121 236.57 167.408 238.302L126.736 251.601C122.244 253.693 123.146 263.917 127.7 265.93L238.375 315.114C242.334 316.862 247.215 316.831 251.133 315.02L290.473 296.711C295.026 294.557 297.056 285.223 292.442 283.178Z" fill="url(#paint17_linear_0_1)"/>
                <path d="M290.329 281.742L179.53 232.496C175.777 230.825 171.121 230.857 167.408 232.589L127.577 251.117C123.085 253.209 123.146 258.188 127.7 260.202L238.355 309.385C242.313 311.134 247.195 311.102 251.112 309.292L290.452 290.982C295.026 288.86 294.944 283.787 290.329 281.742Z" fill="url(#paint18_linear_0_1)"/>
                <path d="M190.729 242.922L183.878 239.879L177.315 242.922L184.166 245.982L190.729 242.922Z" fill="url(#paint19_linear_0_1)"/>
                <path d="M200.779 247.465L193.908 244.421L187.345 247.48L194.216 250.524L200.779 247.465Z" fill="url(#paint20_linear_0_1)"/>
                <path d="M210.809 252.007L203.958 248.963L197.374 252.022L204.245 255.066L210.809 252.007Z" fill="url(#paint21_linear_0_1)"/>
                <path d="M220.859 256.549L213.988 253.505L207.425 256.565L214.275 259.608L220.859 256.549Z" fill="url(#paint22_linear_0_1)"/>
                <path d="M230.889 261.107L224.038 258.048L217.454 261.107L224.325 264.151L230.889 261.107Z" fill="url(#paint23_linear_0_1)"/>
                <path d="M240.919 265.649L234.068 262.605L227.505 265.649L234.355 268.708L240.919 265.649Z" fill="url(#paint24_linear_0_1)"/>
                <path d="M250.969 270.191L244.098 267.148L237.534 270.207L244.385 273.251L250.969 270.191Z" fill="url(#paint25_linear_0_1)"/>
                <path d="M260.999 274.734L254.148 271.69L247.564 274.749L254.435 277.793L260.999 274.734Z" fill="url(#paint26_linear_0_1)"/>
                <path d="M271.049 279.276L264.178 276.232L257.614 279.291L264.465 282.335L271.049 279.276Z" fill="url(#paint27_linear_0_1)"/>
                <path d="M179.038 248.167L172.187 245.123L165.624 248.167L172.474 251.226L179.038 248.167Z" fill="url(#paint28_linear_0_1)"/>
                <path d="M189.088 252.709L182.217 249.665L175.654 252.725L182.504 255.769L189.088 252.709Z" fill="url(#paint29_linear_0_1)"/>
                <path d="M199.118 257.251L192.267 254.208L185.683 257.267L192.554 260.311L199.118 257.251Z" fill="url(#paint30_linear_0_1)"/>
                <path d="M209.148 261.809L202.297 258.75L195.734 261.809L202.584 264.853L209.148 261.809Z" fill="url(#paint31_linear_0_1)"/>
                <path d="M219.198 266.352L212.327 263.292L205.763 266.352L212.634 269.395L219.198 266.352Z" fill="url(#paint32_linear_0_1)"/>
                <path d="M229.228 270.894L222.377 267.85L215.814 270.894L222.664 273.953L229.228 270.894Z" fill="url(#paint33_linear_0_1)"/>
                <path d="M239.278 275.436L232.407 272.392L225.843 275.452L232.694 278.495L239.278 275.436Z" fill="url(#paint34_linear_0_1)"/>
                <path d="M249.307 279.978L242.457 276.934L235.873 279.994L242.744 283.037L249.307 279.978Z" fill="url(#paint35_linear_0_1)"/>
                <path d="M259.337 284.52L252.487 281.461L245.923 284.52L252.774 287.564L259.337 284.52Z" fill="url(#paint36_linear_0_1)"/>
                <path d="M167.347 253.412L160.496 250.368L153.912 253.412L160.783 256.471L167.347 253.412Z" fill="url(#paint37_linear_0_1)"/>
                <path d="M177.397 257.954L170.526 254.91L163.962 257.969L170.813 261.013L177.397 257.954Z" fill="url(#paint38_linear_0_1)"/>
                <path d="M187.427 262.496L180.576 259.452L173.992 262.512L180.863 265.555L187.427 262.496Z" fill="url(#paint39_linear_0_1)"/>
                <path d="M197.456 267.054L190.606 263.995L184.042 267.054L190.893 270.098L197.456 267.054Z" fill="url(#paint40_linear_0_1)"/>
                <path d="M207.507 271.596L200.636 268.537L194.072 271.596L200.923 274.655L207.507 271.596Z" fill="url(#paint41_linear_0_1)"/>
                <path d="M217.536 276.138L210.686 273.095L204.102 276.138L210.973 279.198L217.536 276.138Z" fill="url(#paint42_linear_0_1)"/>
                <path d="M227.587 280.681L220.716 277.637L214.152 280.696L221.003 283.74L227.587 280.681Z" fill="url(#paint43_linear_0_1)"/>
                <path d="M237.616 285.223L230.745 282.179L224.182 285.238L231.053 288.282L237.616 285.223Z" fill="url(#paint44_linear_0_1)"/>
                <path d="M247.646 289.765L240.796 286.706L234.232 289.765L241.083 292.809L247.646 289.765Z" fill="url(#paint45_linear_0_1)"/>
                <path d="M155.656 258.656L148.805 255.613L142.221 258.672L149.092 261.716L155.656 258.656Z" fill="url(#paint46_linear_0_1)"/>
                <path d="M165.685 263.198L158.835 260.139L152.271 263.198L159.122 266.242L165.685 263.198Z" fill="url(#paint47_linear_0_1)"/>
                <path d="M175.736 267.741L168.865 264.697L162.301 267.756L169.172 270.8L175.736 267.741Z" fill="url(#paint48_linear_0_1)"/>
                <path d="M195.816 276.841L188.945 273.781L182.381 276.841L189.232 279.9L195.816 276.841Z" fill="url(#paint49_linear_0_1)"/>
                <path d="M205.845 281.383L198.995 278.339L192.411 281.383L199.282 284.442L205.845 281.383Z" fill="url(#paint50_linear_0_1)"/>
                <path d="M215.875 285.925L209.024 282.866L202.461 285.925L209.312 288.969L215.875 285.925Z" fill="url(#paint51_linear_0_1)"/>
                <path d="M225.925 290.467L219.054 287.424L212.491 290.483L219.341 293.527L225.925 290.467Z" fill="url(#paint52_linear_0_1)"/>
                <path d="M235.955 295.025L229.105 291.966L222.521 295.025L229.392 298.069L235.955 295.025Z" fill="url(#paint53_linear_0_1)"/>
                <path d="M205.845 281.383L178.915 269.239L172.351 272.299L199.282 284.442L205.845 281.383Z" fill="url(#paint54_linear_0_1)"/>
                <g opacity="0.68">
                <path d="M240.57 150.627L325.033 188.51L240.57 150.627ZM240.57 158.946C242.826 159.93 325.033 197.313 325.033 197.313L240.57 158.946ZM240.57 166.829C242.826 167.812 325.033 205.196 325.033 205.196L240.57 166.829ZM204.04 159.43L325.053 213.094L204.04 159.43ZM204.04 167.328L325.053 220.992L204.04 167.328ZM204.04 175.211L325.053 228.874L204.04 175.211Z" fill="#D6D6D6"/>
                <path d="M240.57 150.627L325.033 188.51M240.57 158.946C242.826 159.93 325.033 197.313 325.033 197.313M240.57 166.829C242.826 167.812 325.033 205.196 325.033 205.196M204.04 159.43L325.053 213.094M204.04 167.328L325.053 220.992M204.04 175.211L325.053 228.874" stroke="white" stroke-width="3.66663" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <path opacity="0.68" d="M224.756 154.95L227.648 162.77L231.402 164.472L222.131 139.575L217.906 137.656L208.676 154.139L212.306 155.793L215.137 150.58L224.756 154.95ZM215.855 148.816L218.521 144.04C219.034 143.025 219.485 141.964 219.895 140.918L219.977 140.949C220.387 142.323 220.777 143.743 221.392 145.366L224.059 152.531L215.855 148.816Z" fill="white"/>
                <path d="M395.918 280.712L395.897 280.228L395.856 279.744L395.774 279.245L395.692 278.776V278.761V278.714L395.569 278.183L395.426 277.637L395.262 277.075L395.057 276.466C395.036 276.404 394.995 276.326 394.974 276.263C394.974 276.248 394.954 276.216 394.954 276.201L394.831 275.857L394.564 275.233L394.277 274.593L393.949 273.953L393.764 273.61C393.744 273.578 393.744 273.563 393.723 273.532L393.6 273.298L393.19 272.579L392.739 271.815L392.247 271.05L392.103 270.847L391.98 270.675L391.467 269.91L390.462 268.552L390.195 268.225L388.985 266.742L388.062 265.618C387.96 265.493 387.837 265.368 387.714 265.243L386.955 264.432L385.929 263.323L384.863 262.262L384.494 261.903C384.411 261.825 384.329 261.731 384.227 261.653C383.673 261.107 383.078 260.561 382.504 260.03C382.237 259.78 381.95 259.546 381.684 259.296C381.519 259.14 381.335 259 381.171 258.844C380.986 258.687 380.822 258.516 380.617 258.36L378.545 256.612C378.402 256.487 378.258 256.377 378.094 256.252C377.869 256.065 377.622 255.878 377.397 255.691L376.105 254.66C375.612 254.27 375.079 253.896 374.566 253.505C374.279 253.302 374.013 253.084 373.746 252.881L373.336 252.569C372.331 251.835 371.285 251.086 370.218 250.368C370.157 250.337 370.095 250.29 370.054 250.259C369.808 250.087 369.541 249.915 369.275 249.744L366.793 248.089L366.095 247.652C365.624 247.34 365.131 247.043 364.639 246.747L363.101 245.794C362.691 245.545 362.26 245.311 361.85 245.061C361.316 244.749 360.804 244.437 360.25 244.14C359.901 243.953 359.573 243.75 359.224 243.547L357.255 242.47L355.779 241.674C355.594 241.58 355.43 241.486 355.245 241.393C353.994 240.737 352.722 240.113 351.451 239.488C351.369 239.457 351.307 239.41 351.225 239.379L351.205 239.364C349.851 238.708 348.477 238.068 347.103 237.459L346.139 237.038C345.092 236.57 344.046 236.133 343.021 235.711C342.939 235.68 342.857 235.649 342.795 235.617C341.77 235.196 340.744 234.79 339.739 234.416L339.103 234.166C339.083 234.166 339.062 234.15 339.042 234.15C337.811 233.682 336.601 233.26 335.391 232.839C335.37 232.823 335.329 232.823 335.309 232.808L334.345 232.496L331.884 231.7C331.822 231.684 331.74 231.653 331.678 231.637C331.289 231.512 330.899 231.419 330.509 231.309L328.499 230.732C328.397 230.701 328.315 230.669 328.212 230.654C327.822 230.545 327.433 230.466 327.043 230.357C326.448 230.201 325.853 230.045 325.279 229.92C325.156 229.889 325.033 229.858 324.93 229.827C324.541 229.733 324.172 229.67 323.802 229.592C323.249 229.468 322.715 229.358 322.182 229.249C322.059 229.218 321.936 229.187 321.813 229.171L320.746 228.984C320.233 228.89 319.741 228.812 319.249 228.734C319.126 228.718 318.982 228.687 318.859 228.671C318.511 228.625 318.182 228.593 317.834 228.547L316.439 228.375L316.07 228.328C315.742 228.297 315.434 228.281 315.106 228.25L313.793 228.141C313.67 228.141 313.568 228.125 313.444 228.11C313.137 228.094 312.829 228.094 312.521 228.078C312.111 228.063 311.681 228.047 311.27 228.047C311.168 228.047 311.045 228.031 310.942 228.031C310.655 228.031 310.388 228.047 310.122 228.063C309.712 228.078 309.301 228.078 308.891 228.11C308.789 228.11 308.665 228.11 308.563 228.125C308.337 228.141 308.132 228.172 307.886 228.203C307.455 228.25 307.025 228.281 306.594 228.344C306.471 228.359 306.327 228.359 306.225 228.39C306.061 228.422 305.917 228.453 305.773 228.484C305.261 228.578 304.768 228.671 304.297 228.781L303.845 228.874L303.599 228.968C302.861 229.171 302.143 229.405 301.507 229.686L293.036 233.432C293.672 233.151 294.39 232.917 295.128 232.714C295.354 232.652 295.6 232.589 295.826 232.542C296.298 232.433 296.79 232.324 297.303 232.246L298.143 232.105C298.554 232.043 298.984 232.012 299.436 231.965C299.764 231.934 300.092 231.902 300.441 231.887C300.851 231.856 301.261 231.856 301.671 231.84C302.041 231.824 302.43 231.824 302.82 231.824C303.23 231.824 303.64 231.84 304.071 231.856L305.322 231.902C305.753 231.934 306.204 231.965 306.635 232.012C307.086 232.043 307.517 232.09 307.968 232.137C308.419 232.183 308.891 232.246 309.363 232.308L310.758 232.496L312.255 232.745C312.727 232.823 313.219 232.917 313.691 233.011L315.331 
                233.354C315.824 233.463 316.295 233.557 316.788 233.682C317.383 233.822 317.977 233.978 318.572 234.135C319.064 234.259 319.536 234.369 320.028 234.509C320.685 234.681 321.362 234.884 322.038 235.087C322.49 235.227 322.961 235.352 323.413 235.493C324.233 235.742 325.054 236.023 325.894 236.289C326.243 236.398 326.571 236.507 326.92 236.632C328.13 237.038 329.34 237.475 330.571 237.943L331.289 238.224L334.324 239.426L337.688 240.846C339.411 241.596 341.093 242.392 342.775 243.188L342.959 243.281C344.436 243.999 345.892 244.733 347.328 245.498L348.805 246.294L351.799 247.949L353.399 248.869L356.189 250.555C356.681 250.852 357.153 251.148 357.645 251.461C358.732 252.147 359.778 252.85 360.824 253.537L361.604 254.052C362.86 254.915 364.098 255.794 365.316 256.69C365.6 256.89 365.873 257.098 366.136 257.314C367.1 258.032 368.044 258.766 368.967 259.499L369.664 260.061L372.72 262.637C372.884 262.793 373.069 262.949 373.233 263.089C374.218 263.963 375.141 264.837 376.043 265.696L376.412 266.071C377.151 266.804 377.828 267.522 378.504 268.24C378.751 268.521 379.017 268.786 379.263 269.067C379.715 269.567 380.125 270.066 380.535 270.566L381.766 272.049C382.401 272.876 383.017 273.688 383.55 274.484C383.591 274.546 383.632 274.593 383.673 274.655C384.268 275.561 384.822 276.451 385.273 277.325C385.293 277.356 385.293 277.371 385.314 277.403C385.765 278.251 386.162 279.116 386.504 279.994C386.504 280.009 386.524 280.041 386.524 280.056C386.852 280.915 387.098 281.742 387.262 282.554V282.569C387.427 283.381 387.509 284.177 387.509 284.942C387.509 285.379 387.468 285.785 387.427 286.191C387.43 286.217 387.423 286.245 387.406 286.269C387.344 286.674 387.262 287.049 387.139 287.424C387.016 287.798 386.873 288.157 386.709 288.501V288.516C386.565 288.813 386.38 289.094 386.196 289.375C386.114 289.5 386.011 289.624 385.909 289.749C385.806 289.89 385.683 290.03 385.56 290.171C385.172 290.606 384.725 291.009 384.227 291.373C384.145 291.435 384.042 291.498 383.96 291.56C383.427 291.935 382.832 292.262 382.176 292.559L390.647 288.813C391.303 288.516 391.877 288.188 392.431 287.814C392.513 287.751 392.616 287.689 392.698 287.627C393.196 287.262 393.643 286.86 394.031 286.425C394.072 286.393 394.113 286.362 394.154 286.315C394.236 286.222 394.298 286.112 394.38 286.003C394.482 285.878 394.564 285.753 394.667 285.629C394.708 285.582 394.749 285.519 394.79 285.473C394.933 285.254 395.057 285.02 395.18 284.786V284.77V284.754L395.426 284.193L395.61 283.677C395.672 283.506 395.713 283.318 395.754 283.147C395.795 282.991 395.815 282.819 395.856 282.663C395.856 282.616 395.877 282.569 395.877 282.522C395.877 282.491 395.877 282.476 395.897 282.444C395.918 282.366 395.918 282.273 395.938 282.195C395.959 282.039 395.979 281.882 395.979 281.711C395.979 281.555 396 281.383 396 281.227V281.196C395.918 281.008 395.918 280.868 395.918 280.712Z" fill="url(#paint55_linear_0_1)"/>
                <path d="M337.626 240.815C365.193 252.928 387.488 272.673 387.447 284.911C387.406 297.148 365.029 297.257 337.462 285.145C332.786 283.1 328.253 280.821 323.987 278.402L297.938 282.725L303.476 264.276C293.693 255.925 287.58 247.449 287.621 241.049C287.662 228.812 310.04 228.703 337.626 240.815Z" fill="url(#paint56_linear_0_1)"/>
                <path d="M317.932 256.071C316.017 254.147 315.643 251.908 317.097 251.07C318.551 250.232 321.282 251.112 323.197 253.036C325.112 254.96 325.486 257.199 324.032 258.037C322.579 258.875 319.848 257.995 317.932 256.071Z" fill="#F6F7F9"/>
                <path d="M333.231 262.622C331.316 260.698 330.942 258.459 332.396 257.621C333.849 256.783 336.58 257.663 338.495 259.587C340.411 261.511 340.785 263.75 339.331 264.588C337.877 265.426 335.146 264.546 333.231 262.622Z" fill="#F6F7F9"/>
                <path d="M348.53 269.173C346.615 267.249 346.241 265.01 347.694 264.172C349.148 263.334 351.879 264.214 353.794 266.138C355.709 268.062 356.083 270.302 354.63 271.14C353.176 271.978 350.445 271.097 348.53 269.173Z" fill="#F6F7F9"/>
                <path d="M386.811 284.911C386.852 272.829 364.639 253.24 337.298 241.221C329.074 237.615 321.074 235.009 313.957 233.573C320.131 235.118 326.797 237.428 333.586 240.409C361.275 252.569 383.755 272.533 383.714 284.911C383.694 288.985 381.294 291.888 376.781 293.402C379.673 293.027 382.012 292.231 383.673 291.045C385.745 289.578 386.811 287.517 386.811 284.911Z" fill="white"/>
                <path d="M140.088 295.025V347.175L133.114 350V297.819L140.088 295.025Z" fill="url(#paint57_linear_0_1)"/>
                <path d="M140.088 295.025L133.114 297.819V350L84.0323 322.575V270.425L140.088 295.025Z" fill="url(#paint58_linear_0_1)"/>
                <path d="M133.114 297.819V350L77.0997 325.369V273.219L84.0323 276.279L133.114 297.819Z" fill="url(#paint59_linear_0_1)"/>
                <path d="M140.088 295.025L133.114 297.819L84.0323 276.279L77.0997 273.219L84.0323 270.425L140.088 295.025Z" fill="url(#paint60_linear_0_1)"/>
                <path d="M95.9285 311.352L112.358 324.198" stroke="white" stroke-width="3.57164" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M106.317 302.877C104.86 300.627 105.095 298.271 106.842 297.616C108.59 296.96 111.188 298.253 112.645 300.503C114.102 302.753 113.867 305.108 112.12 305.764C110.372 306.419 107.774 305.127 106.317 302.877Z" stroke="white" stroke-width="3.57164" stroke-linejoin="round"/>
                <path d="M89.3698 308.965C87.9124 306.715 88.1477 304.359 89.8952 303.704C91.6427 303.048 94.2407 304.341 95.698 306.591C97.1553 308.841 96.9201 311.196 95.1726 311.852C93.4251 312.507 90.8271 311.215 89.3698 308.965Z" stroke="white" stroke-width="3.57164" stroke-linejoin="round"/>
                <path d="M112.693 327.687C111.236 325.437 111.471 323.081 113.219 322.426C114.966 321.77 117.564 323.063 119.022 325.313C120.479 327.563 120.244 329.918 118.496 330.574C116.749 331.229 114.151 329.937 112.693 327.687Z" stroke="white" stroke-width="3.57164" stroke-linejoin="round"/>
                <path d="M94.5133 305.171L105.61 301.425" stroke="white" stroke-width="3.57164" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M243.298 22.992L241.985 22.3833L241.821 22.3052L240.632 21.8057L239.114 21.197L237.596 20.6507L236.099 20.1668L234.601 19.7297C234.499 19.6985 234.396 19.6829 234.294 19.6517C234.253 19.6361 234.212 19.6361 234.171 19.6205L233.104 19.3551L231.566 19.0273L230.027 18.762L228.387 18.5591L227.259 18.4654C227.197 18.4654 227.156 18.4498 227.094 18.4498C226.971 18.4498 226.848 18.4342 226.725 18.4186L224.961 18.3718L223.013 18.4342C222.289 18.4794 221.57 18.5576 220.859 18.6683C220.839 18.6683 220.818 18.6839 220.798 18.6839C220.777 18.6839 220.736 18.6996 220.716 18.6996C219.875 18.84 219.034 18.9961 218.234 19.2146C217.167 19.4956 216.162 19.8546 215.198 20.2761L185.601 33.3564C187.283 32.6071 189.129 32.0764 191.119 31.7643C191.139 31.7643 191.18 31.7487 191.201 31.7487C193.17 31.4365 195.282 31.3584 197.498 31.4989C197.559 31.4989 197.6 31.5145 197.662 31.5145C199.856 31.6706 202.174 32.0452 204.574 32.654C204.615 32.6696 204.656 32.6696 204.697 32.6852C207.138 33.3252 209.64 34.1837 212.224 35.3231C212.716 35.5416 213.209 35.7758 213.701 36.0099L215.014 36.6187C215.075 36.6499 215.116 36.6655 215.178 36.6967L244.775 23.6164C244.282 23.4603 243.79 23.2262 243.298 22.992Z" fill="url(#paint61_linear_0_1)"/>
                <path d="M300.379 70.7087L300.502 70.8023C302.061 72.051 303.558 73.3778 304.974 74.7826C305.035 74.8294 305.076 74.8919 305.117 74.9387C306.43 76.2498 307.64 77.6234 308.789 79.0438C308.932 79.2311 309.096 79.4028 309.24 79.5902C310.429 81.1042 311.537 82.6651 312.501 84.2572C312.501 84.2728 312.521 84.2729 312.521 84.2885C313.519 85.9165 314.403 87.5838 315.167 89.2833C315.167 89.2989 315.167 89.3145 315.188 89.3145C315.916 90.9608 316.512 92.6393 316.972 94.3406C316.993 94.3875 316.993 94.4187 317.013 94.4655C317.465 96.1357 317.752 97.8058 317.895 99.4292L347.472 86.3332C347.472 86.2864 347.472 86.2396 347.451 86.1927C347.431 85.8493 347.39 85.4903 347.349 85.147C347.308 84.7879 347.246 84.4445 347.205 84.0855L347 83.0085L346.754 81.9159C346.713 81.7286 346.651 81.5413 346.61 81.354C346.61 81.3071 346.59 81.2759 346.569 81.2291L346.446 80.792C346.344 80.4174 346.221 80.0428 346.097 79.6682L345.708 78.5287L345.277 77.4049C345.133 77.0303 344.969 76.6557 344.805 76.281C344.785 76.2498 344.785 76.2342 344.764 76.203C344.764 76.1874 344.744 76.1718 344.744 76.1718L344.313 75.2196C344.149 74.8606 343.964 74.5172 343.78 74.1582C343.616 73.8148 343.431 73.4714 343.246 73.1436C343.062 72.8003 342.877 72.4725 342.672 72.1291C342.488 71.8169 342.303 71.4891 342.098 71.1769C342.098 71.1769 342.098 71.1613 342.077 71.1613C342.057 71.1301 342.057 71.1145 342.036 71.0833L341.359 70.0062L340.498 68.7263C340.047 68.0863 339.575 67.4464 339.103 66.822C339.021 66.7128 338.919 66.6035 338.837 66.4942C338.693 66.3069 338.529 66.1352 338.385 65.9479L336.888 64.1373C336.355 63.5285 335.781 62.9198 335.227 62.3422L334.735 61.8427C334.673 61.7959 334.632 61.7335 334.57 61.6867C334.386 61.515 334.222 61.3433 334.037 61.1716C333.688 60.8282 333.319 60.4848 332.95 60.1414C332.601 59.8136 332.232 59.5014 331.863 59.1736L330.755 58.2527L330.079 57.7064L329.956 57.6127C329.832 57.5191 329.73 57.4254 329.607 57.3474C329.217 57.0352 328.807 56.7386 328.417 56.442L327.187 55.5679C326.776 55.287 326.346 55.006 325.915 54.7251C325.607 54.5221 325.3 54.3348 324.992 54.1475C324.951 54.1319 324.93 54.1007 324.889 54.0851C324.807 54.0383 324.746 53.9914 324.664 53.9446C324.254 53.6949 323.843 53.4607 323.413 53.211C323.002 52.9769 322.592 52.7583 322.182 52.5398L320.972 51.9311L319.762 51.3691C319.659 51.3223 319.577 51.2911 319.475 51.2443L289.878 64.3246C291.724 65.1362 293.529 66.0884 295.272 67.1498C295.313 67.1654 295.333 67.1966 295.375 67.2122C297.138 68.2893 298.8 69.4599 300.379 70.7087Z" fill="url(#paint62_linear_0_1)"/>
                <path d="M266.619 25.5207L266.803 25.6611C268.895 27.3469 270.905 29.142 272.792 31.0306L272.997 31.2336C274.782 33.0442 276.464 34.9485 278.023 36.9152C278.166 37.1025 278.33 37.2742 278.474 37.4615C280.074 39.5219 281.571 41.6447 282.863 43.8144C282.884 43.8612 282.925 43.908 282.945 43.9549C284.278 46.1557 285.447 48.4034 286.411 50.6511C286.432 50.6823 286.432 50.7136 286.452 50.7604C287.416 53.0081 288.216 55.2714 288.791 57.5191C288.811 57.5659 288.811 57.5971 288.832 57.6439C289.406 59.9072 289.775 62.1705 289.919 64.3714L319.516 51.2911C319.495 51.0569 319.495 50.8384 319.475 50.6043L319.331 49.1995L319.126 47.7791L318.859 46.343L318.531 44.8758C318.511 44.7665 318.47 44.6729 318.449 44.5636C318.449 44.5168 318.429 44.4856 318.408 44.4387C318.326 44.0797 318.223 43.7363 318.121 43.3773C317.977 42.8778 317.813 42.3628 317.649 41.8633C317.485 41.3482 317.3 40.8487 317.116 40.3336L316.542 38.8195L316.049 37.6645C316.029 37.6332 316.029 37.602 316.008 37.5552C315.967 37.4771 315.947 37.3991 315.906 37.3211C315.701 36.8372 315.475 36.3533 315.249 35.8694L314.552 34.449C314.322 33.9885 314.082 33.5306 313.834 33.0754L313.055 31.7018L312.542 30.8433C312.521 30.7965 312.48 30.7497 312.46 30.7029C312.378 30.5624 312.296 30.4375 312.214 30.297L311.27 28.8142L310.163 27.1752C309.568 26.3167 308.953 25.4738 308.296 24.6466L308.05 24.3656C307.907 24.1783 307.763 24.0066 307.619 23.8349C306.881 22.8984 306.122 21.9618 305.322 21.0565C304.584 20.2292 303.845 19.4176 303.066 18.6215C302.922 18.4654 302.758 18.3093 302.594 18.1532L302.389 17.9503C302.061 17.6381 301.753 17.3104 301.425 16.9982L299.989 15.6558C299.518 15.2187 299.025 14.7973 298.554 14.3759C298.082 13.9544 297.59 13.5486 297.097 13.1428C296.872 12.9554 296.626 12.7681 296.4 12.5808C296.339 12.534 296.277 12.4872 296.236 12.4404C296.031 12.2687 295.805 12.097 295.6 11.9253L294.021 10.739C293.484 10.3459 292.937 9.9608 292.38 9.58391L290.719 8.47567L289.611 7.78888C289.55 7.75766 289.508 7.72644 289.447 7.69522C289.303 7.61718 289.18 7.52353 289.037 7.44548C288.483 7.11769 287.95 6.80551 287.375 6.49333L285.755 5.61923C285.222 5.33827 284.688 5.07292 284.155 4.82317L282.555 4.08955C282.432 4.02712 282.309 3.98029 282.186 3.93346C281.796 3.76176 281.386 3.59006 280.997 3.43397L279.479 2.82522L277.961 2.27891C277.469 2.10721 276.956 1.95112 276.464 1.79503C275.951 1.63894 275.459 1.49846 274.966 1.35798C274.864 1.32676 274.761 1.31116 274.659 1.27994C274.618 1.26433 274.577 1.26433 274.536 1.24872L273.469 0.983366C272.962 0.859666 272.449 0.750329 271.931 0.655579L270.393 0.390224C269.839 0.312179 269.305 0.234136 268.752 0.18731L267.624 0.0936548C267.562 0.0936548 267.521 0.0780449 267.459 0.0780449C267.336 0.0624359 267.213 0.0624364 267.09 0.0468274C266.503 0.0159036 265.915 0.000285009 265.326 0C264.67 0 264.014 0.0312194 263.378 0.0624373C262.654 0.10763 261.935 0.185816 261.224 0.296572C261.224 0.296572 261.183 0.312179 261.163 0.312179C261.142 0.312179 261.101 0.327789 261.081 0.327789C260.24 0.46827 259.399 0.62436 258.599 0.842886C257.532 1.12385 256.527 1.48285 255.563 1.9043L225.966 14.9846C227.648 14.2354 229.494 13.7047 231.484 13.3925C231.504 13.3925 231.545 13.3769 231.566 13.3769C233.535 13.0647 235.647 12.9867 237.863 13.1271C237.924 13.1271 237.965 13.1428 238.027 13.1428C240.221 13.2988 242.539 13.6735 244.939 14.2822C244.98 14.2978 245.021 14.2978 245.062 14.3134C247.503 14.9534 250.005 15.8119 252.589 16.9513C255.071 18.044 257.491 19.3239 259.83 20.7443C259.891 20.7755 259.932 20.8068 259.994 20.8536C262.27 22.274 264.506 23.8349 266.619 25.5207Z" fill="url(#paint63_linear_0_1)"/>
                <path d="M383.386 124.731L383.324 123.701L383.222 122.671L383.078 121.625L382.873 120.564C382.873 120.548 382.873 120.532 382.853 120.517V120.486L382.627 119.487L382.34 118.378L381.991 117.255L381.602 116.115L381.253 115.21C381.253 115.194 381.232 115.163 381.232 115.147L381.171 114.991L380.699 113.883L380.207 112.79L379.694 111.745L379.14 110.699L378.689 109.887C378.689 109.872 378.669 109.856 378.669 109.84C378.627 109.794 378.607 109.731 378.586 109.684L377.971 108.654L377.253 107.53L376.392 106.25L375.387 104.892C375.325 104.814 375.264 104.736 375.223 104.658C375.141 104.565 375.079 104.471 375.018 104.377C374.341 103.519 373.643 102.66 372.926 101.833L371.182 99.9443L371.162 99.9286C371.162 99.9286 371.162 99.913 371.141 99.913L369.89 98.6643C369.541 98.3209 369.172 97.9775 368.803 97.6497C368.452 97.3201 368.089 96.9974 367.716 96.682L366.629 95.7611C366.567 95.7142 366.506 95.6518 366.444 95.605C366.424 95.5738 366.383 95.5581 366.362 95.5269L365.501 94.8401L364.311 93.9504L363.08 93.0763C362.67 92.7954 362.26 92.5144 361.829 92.249L361.214 91.8744C361.173 91.8432 361.111 91.812 361.07 91.7808C360.906 91.6715 360.742 91.5779 360.578 91.4686C360.168 91.2188 359.758 90.9847 359.347 90.7506L358.137 90.095C357.748 89.8921 357.358 89.6892 356.948 89.5019C356.558 89.3145 356.168 89.1272 355.758 88.9555C355.676 88.9087 355.573 88.8775 355.491 88.8307C355.225 88.7058 354.938 88.5965 354.671 88.4873C354.302 88.3312 353.953 88.1907 353.584 88.0658C353.215 87.9253 352.846 87.8005 352.476 87.6756C352.128 87.5507 351.779 87.4415 351.43 87.3322C351.41 87.3322 351.389 87.3166 351.369 87.3166C351.348 87.3166 351.328 87.301 351.328 87.301C350.918 87.1761 350.528 87.0669 350.138 86.9576L348.887 86.6454C348.436 86.5362 348.005 86.4425 347.554 86.3645H347.513L317.916 99.4448C319.23 99.6909 320.518 100.009 321.772 100.397C321.792 100.397 321.792 100.413 321.813 100.413C323.146 100.818 324.5 101.318 325.874 101.927C327.781 102.769 329.648 103.753 331.453 104.877C331.494 104.908 331.555 104.939 331.596 104.97C333.381 106.079 335.083 107.296 336.724 108.623C336.745 108.654 336.786 108.67 336.806 108.701C338.468 110.043 340.047 111.495 341.524 113.025L341.544 113.04C343 114.554 344.354 116.131 345.605 117.77C345.667 117.848 345.728 117.926 345.769 118.004C346.979 119.627 348.087 121.282 349.072 122.967C349.092 122.983 349.092 123.014 349.113 123.03C350.097 124.763 350.959 126.511 351.656 128.275C351.656 128.29 351.676 128.321 351.676 128.337C352.374 130.101 352.907 131.865 353.276 133.597V133.628C353.645 135.392 353.83 137.125 353.83 138.811C353.83 140.465 353.625 141.979 353.256 143.384C353.235 143.431 353.235 143.478 353.215 143.525C352.846 144.898 352.312 146.162 351.635 147.271C351.635 147.286 351.615 147.302 351.615 147.317C351.041 148.254 350.282 149.034 349.523 149.784C349.256 150.033 349.031 150.283 348.743 150.517C347.82 151.267 346.815 151.938 345.687 152.437L375.284 139.357C376.412 138.857 377.417 138.186 378.34 137.437C378.607 137.218 378.853 136.953 379.12 136.703C379.448 136.376 379.838 136.095 380.145 135.736C380.535 135.283 380.884 134.799 381.191 134.284C381.191 134.268 381.212 134.253 381.212 134.237C381.212 134.222 381.232 134.206 381.232 134.19C381.458 133.831 381.663 133.472 381.848 133.082C382.032 132.723 382.176 132.348 382.34 131.974C382.484 131.63 382.607 131.256 382.709 130.897L382.832 130.444C382.853 130.397 382.853 130.366 382.873 130.319L382.996 129.867C383.078 129.539 383.14 129.195 383.201 128.852C383.263 128.524 383.304 128.181 383.345 127.837C383.386 127.51 383.406 127.182 383.427 126.839C383.448 126.495 383.448 126.167 383.468 125.808V125.746C383.406 125.371 383.406 125.043 383.386 124.731Z" fill="url(#paint64_linear_0_1)"/>
                <path d="M252.589 16.967C272.608 25.7548 288.811 46.5772 289.919 64.3558C304.85 70.9116 316.87 86.2084 317.895 99.4292C320.398 99.8974 323.084 100.693 325.853 101.911C341.318 108.701 353.871 125.262 353.83 138.779C353.789 152.297 341.134 157.697 325.689 150.908L324.971 150.595L213.516 101.63L211.999 100.959C191.365 91.89 174.608 69.8189 174.669 51.7594C174.731 33.6373 191.59 26.3167 212.224 35.3855C213.209 35.8226 214.193 36.3221 215.178 36.7591C215.014 35.5885 215.014 34.4958 215.014 33.3252C215.096 15.2031 231.935 7.89815 252.589 16.967Z" fill="url(#paint65_linear_0_1)"/>
                <path d="M380.473 130.241L380.084 131.428L379.653 132.427L379.12 133.394C378.792 133.925 378.484 134.346 378.156 134.752C378.033 134.893 377.869 135.033 377.725 135.158L377.274 135.564L376.638 136.173C375.756 136.891 374.936 137.406 374.095 137.78L354.548 146.428C354.938 145.6 355.245 144.726 355.491 143.837C355.779 142.744 355.963 141.651 356.066 140.559L380.884 129.57L380.597 129.851C380.576 129.867 380.494 130.21 380.473 130.241Z" fill="#E8E8E8"/>
                <path d="M213.25 37.5552C212.265 37.1182 211.281 36.6187 210.296 36.1816C200.656 31.9516 191.837 31.2804 185.191 33.6217C192.042 30.3907 201.641 30.7185 212.245 35.3856C212.532 35.5104 212.819 35.6509 213.106 35.7758C213.127 36.3689 213.168 36.9621 213.25 37.5552ZM351.881 139.56C351.922 126.042 339.37 109.481 323.905 102.691C321.136 101.474 318.449 100.694 315.947 100.225C314.921 87.0201 302.902 71.7076 287.97 65.1519C286.863 47.3732 270.659 26.5509 250.641 17.763C241.001 13.533 232.181 12.8618 225.536 15.2032C232.386 11.9721 241.985 12.2999 252.589 16.967C272.608 25.7548 288.811 46.5772 289.919 64.3558C304.85 70.9116 316.87 86.2084 317.895 99.4292C320.398 99.8974 323.084 100.694 325.853 101.911C341.318 108.701 353.871 125.262 353.83 138.779C353.809 146.069 350.118 150.986 344.313 152.921C348.969 150.595 351.861 146.006 351.881 139.56Z" fill="white"/>
                <path d="M226.684 46.7333V62.1706L264.301 78.8409V75.0323L231.053 60.2975V48.6844L226.684 46.7333Z" fill="url(#paint66_linear_0_1)"/>
                <path d="M231.053 48.6844V60.2975L264.301 75.0323V63.4193L231.053 48.6844Z" fill="url(#paint67_linear_0_1)"/>
                <path d="M231.053 60.2975L226.684 62.1706V46.7333L231.053 48.6844V60.2975Z" fill="url(#paint68_linear_0_1)"/>
                <path d="M252.774 63.2944V65.4016L258.804 68.0707V65.9635L252.774 63.2944Z" fill="url(#paint69_linear_0_1)"/>
                <path d="M243.872 59.4702V61.5774L249.902 64.2465V62.1393L243.872 59.4702Z" fill="url(#paint70_linear_0_1)"/>
                <path d="M234.97 55.646V57.7376L240.98 60.4223V58.3151L234.97 55.646Z" fill="url(#paint71_linear_0_1)"/>
                <path d="M255.399 66.5723V70.3808C255.399 70.8335 255.112 71.255 254.62 71.5047L251.953 72.9095C251.802 72.9869 251.678 73.0914 251.592 73.2139C251.506 73.3364 251.461 73.4731 251.461 73.6119V86.2083C251.461 87.2229 252.158 88.1439 253.307 88.659L331.576 123.046C334.96 124.528 337.032 127.276 337.032 130.241V165.689M237.411 58.8302V62.4203C237.411 62.8573 237.124 63.2475 236.632 63.4817L234.191 64.6211C233.576 64.9021 233.207 65.4016 233.207 65.9479V80.9949C233.207 82.1344 231.586 82.868 230.274 82.3061L168.844 56.0362C167.142 55.3182 165.07 56.2391 165.07 57.722V153.842M246.621 62.7949V66.4318C246.621 66.9157 246.292 67.3527 245.759 67.5868L243.257 68.7107C242.984 68.8355 242.757 69.0115 242.599 69.222C242.441 69.4324 242.357 69.6702 242.354 69.9126V122" stroke="#A8A8A8" stroke-width="2.3331" stroke-miterlimit="10"/>
                <path d="M138.591 173.962L182.976 198.437C184.555 199.108 190.565 195.19 191.816 194.425C192.76 193.863 193.375 192.989 193.375 191.944V165.315C193.375 162.302 191.242 159.524 187.775 158.041L138.96 137.187C137.483 136.563 135.801 136.766 134.673 137.484C133.853 137.999 128.028 139.841 128.028 140.762L133.299 167.078C133.279 169.919 135.309 172.557 138.591 173.962Z" fill="url(#paint72_linear_0_1)"/>
                <path d="M186.565 168.639V195.284C186.565 197.094 184.658 198.39 182.545 198.468C181.827 198.484 181.068 198.359 180.371 198.047L131.802 177.287C130.099 176.553 128.725 175.476 127.802 174.227C126.961 173.072 126.51 171.746 126.51 170.403V143.041C126.51 141.761 127.577 140.746 128.971 140.356C129.956 140.044 131.125 140.075 132.171 140.512L180.986 161.381C182.709 162.115 184.104 163.176 185.068 164.425C186.032 165.689 186.565 167.125 186.565 168.639Z" fill="url(#paint73_linear_0_1)"/>
                <path d="M182.545 198.468C181.827 198.484 181.068 198.359 180.371 198.047L131.802 177.287C130.099 176.553 128.725 175.476 127.802 174.227L152.066 159.477L164.619 163.488L182.545 198.468Z" fill="url(#paint74_linear_0_1)"/>
                <path d="M185.047 164.425L154.794 172.167C152.846 172.666 150.733 172.011 149.769 170.622L128.91 140.34C129.894 140.028 131.063 140.059 132.109 140.496L180.925 161.366C182.689 162.115 184.083 163.176 185.047 164.425Z" fill="url(#paint75_linear_0_1)"/>
                <path d="M274.249 259.608V296.243C274.249 297.288 273.613 298.163 272.69 298.709C271.439 299.474 265.449 303.407 263.87 302.72C265.798 302.517 267.46 301.253 267.46 299.583V262.949C267.46 259.936 265.326 257.158 261.881 255.675L213.045 234.821C211.629 234.213 210.009 234.384 208.901 235.04C208.963 234.119 214.747 232.293 215.547 231.793C216.716 231.075 218.377 230.857 219.834 231.481L268.67 252.335C272.115 253.802 274.249 256.58 274.249 259.608Z" fill="url(#paint76_linear_0_1)"/>
                <path d="M267.439 262.949V299.583C267.444 300.349 267.082 301.089 266.422 301.667C265.761 302.244 264.847 302.619 263.85 302.721L219.464 278.261C216.183 276.856 214.173 274.219 214.173 271.362L208.881 235.056V235.04C209.988 234.384 211.609 234.213 213.024 234.822L261.86 255.66C265.306 257.142 267.439 259.921 267.439 262.949Z" fill="url(#paint77_linear_0_1)"/>
                <path d="M267.439 262.949V299.583C267.444 300.349 267.082 301.089 266.422 301.667C265.761 302.244 264.847 302.619 263.85 302.72C262.988 302.814 262.086 302.705 261.245 302.346L212.675 281.601C209.394 280.197 207.363 277.559 207.363 274.702V237.35C207.363 236.382 207.978 235.539 208.881 235.056V235.04C209.988 234.384 211.609 234.213 213.024 234.821L261.86 255.659C265.306 257.142 267.439 259.921 267.439 262.949Z" fill="url(#paint78_linear_0_1)"/>
                <path d="M247.646 274.25C247.646 279.416 242.129 281.086 235.34 277.965C228.551 274.843 223.033 268.115 223.033 262.949C223.033 257.782 228.551 256.112 235.34 259.234C242.129 262.356 247.646 269.083 247.646 274.25ZM245.554 273.282C245.554 268.989 240.98 263.417 235.34 260.826C229.699 258.235 225.125 259.608 225.125 263.901C225.125 268.193 229.699 273.766 235.34 276.357C240.98 278.948 245.554 277.574 245.554 273.282ZM231.996 271.143L238.683 270.129L231.996 262.964V271.143Z" fill="white"/>
                <path d="M194.093 226.377V263.011C194.093 264.057 193.457 264.931 192.534 265.477C191.283 266.242 185.294 270.176 183.714 269.489C185.642 269.286 187.304 268.022 187.304 266.352V229.717C187.304 226.705 185.171 223.926 181.725 222.443L132.889 201.59C131.474 200.981 129.853 201.153 128.746 201.808C128.807 200.887 134.591 199.061 135.391 198.562C136.56 197.844 138.222 197.625 139.678 198.25L188.514 219.103C191.96 220.586 194.093 223.364 194.093 226.377Z" fill="url(#paint79_linear_0_1)"/>
                <path d="M187.283 229.717V266.352C187.288 267.117 186.926 267.858 186.266 268.435C185.605 269.013 184.691 269.387 183.694 269.489L139.309 245.03C136.027 243.625 134.017 240.987 134.017 238.131L128.725 201.824V201.809C129.833 201.153 131.453 200.981 132.868 201.59L181.704 222.444C185.15 223.926 187.283 226.705 187.283 229.717Z" fill="url(#paint80_linear_0_1)"/>
                <path d="M187.283 229.717V266.352C187.288 267.117 186.926 267.858 186.266 268.435C185.605 269.013 184.691 269.387 183.694 269.489C182.832 269.583 181.93 269.473 181.089 269.114L132.52 248.37C129.238 246.965 127.207 244.327 127.207 241.471V204.119C127.207 203.151 127.823 202.308 128.725 201.824V201.808C129.833 201.153 131.453 200.981 132.868 201.59L181.704 222.443C185.15 223.926 187.283 226.705 187.283 229.717Z" fill="url(#paint81_linear_0_1)"/>
                <path d="M164.27 234.244L154.569 219.119L145.872 226.19L151.718 228.749V237.506L158.425 240.441V231.684L164.27 234.244ZM166.547 239.145V247.964L143.595 237.912V229.093L138.181 226.736V241.518L143.595 243.89L166.547 253.927L171.962 256.299V241.518L166.547 239.145Z" fill="white"/>
                <path d="M271.603 189.165V225.799C271.603 226.845 270.967 227.719 270.044 228.266C268.793 229.03 262.804 232.964 261.224 232.277C263.152 232.074 264.814 230.81 264.814 229.14V192.505C264.814 189.493 262.68 186.715 259.235 185.232L210.378 164.378C208.963 163.769 207.343 163.941 206.235 164.597C206.297 163.676 212.081 161.849 212.881 161.35C214.05 160.632 215.711 160.413 217.167 161.038L266.003 181.891C269.47 183.374 271.603 186.153 271.603 189.165Z" fill="url(#paint82_linear_0_1)"/>
                <path d="M264.793 192.505V229.14C264.798 229.905 264.436 230.646 263.776 231.223C263.115 231.801 262.201 232.175 261.204 232.277C260.342 232.371 259.44 232.262 258.599 231.903L210.03 211.158C206.748 209.753 204.717 207.115 204.717 204.259V166.907C204.717 165.939 205.333 165.096 206.235 164.612V164.597C207.343 163.941 208.963 163.769 210.378 164.378L259.214 185.232C262.66 186.715 264.793 189.493 264.793 192.505Z" fill="url(#paint83_linear_0_1)"/>
                <path d="M234.294 196.985L225.966 181.891L217.639 190.024L222.91 192.224V206.335L229.022 208.895V194.784L234.294 196.985ZM249.636 206.101L241.308 214.233L233.002 199.139L238.252 201.34V187.23L244.364 189.789V203.9L249.636 206.101Z" fill="white"/>
                <defs>
                <linearGradient id="paint0_linear_0_1" x1="45.3853" y1="147.748" x2="35.9854" y2="116.096" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint1_linear_0_1" x1="158.001" y1="102.811" x2="17.9988" y2="102.811" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint2_linear_0_1" x1="30.2999" y1="83.8736" x2="26.4138" y2="217.372" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint3_linear_0_1" x1="53.1518" y1="242.1" x2="59.8363" y2="152.433" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint4_linear_0_1" x1="148.511" y1="191.62" x2="104.024" y2="130.241" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint5_linear_0_1" x1="40.0648" y1="183.087" x2="8.78861" y2="183.087" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint6_linear_0_1" x1="40.0648" y1="183.087" x2="8.788" y2="183.087" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint7_linear_0_1" x1="66.483" y1="139.657" x2="6.05434" y2="139.657" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint8_linear_0_1" x1="9.91675" y1="212.918" x2="21.0565" y2="145.515" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint9_linear_0_1" x1="66.483" y1="182.035" x2="29.7836" y2="182.035" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="#898888"/>
                </linearGradient>
                <linearGradient id="paint10_linear_0_1" x1="228.71" y1="225.366" x2="302.115" y2="225.366" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint11_linear_0_1" x1="279.726" y1="239.767" x2="302.115" y2="239.767" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint12_linear_0_1" x1="228.71" y1="233.639" x2="279.726" y2="233.639" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint13_linear_0_1" x1="350.979" y1="245.204" x2="348.689" y2="187.695" gradientUnits="userSpaceOnUse">
                <stop stop-color="#3F3F3F"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint14_linear_0_1" x1="188.733" y1="140.355" x2="353.748" y2="140.355" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint15_linear_0_1" x1="186.82" y1="182.055" x2="345.885" y2="182.055" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint16_linear_0_1" x1="253.335" y1="199.828" x2="272.195" y2="155.715" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint17_linear_0_1" x1="139.842" y1="254.884" x2="256.227" y2="318.182" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint18_linear_0_1" x1="252.035" y1="294.992" x2="157.752" y2="204.112" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint19_linear_0_1" x1="177.309" y1="242.925" x2="190.738" y2="242.925" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint20_linear_0_1" x1="187.347" y1="247.47" x2="200.775" y2="247.47" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint21_linear_0_1" x1="197.384" y1="252.015" x2="210.813" y2="252.015" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint22_linear_0_1" x1="207.422" y1="256.56" x2="220.851" y2="256.56" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint23_linear_0_1" x1="217.46" y1="261.105" x2="230.888" y2="261.105" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint24_linear_0_1" x1="227.497" y1="265.65" x2="240.926" y2="265.65" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint25_linear_0_1" x1="237.535" y1="270.196" x2="250.964" y2="270.196" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint26_linear_0_1" x1="247.572" y1="274.741" x2="261.001" y2="274.741" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint27_linear_0_1" x1="257.61" y1="279.286" x2="271.039" y2="279.286" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint28_linear_0_1" x1="165.616" y1="248.17" x2="179.044" y2="248.17" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint29_linear_0_1" x1="175.653" y1="252.715" x2="189.082" y2="252.715" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint30_linear_0_1" x1="185.691" y1="257.261" x2="199.12" y2="257.261" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint31_linear_0_1" x1="195.728" y1="261.806" x2="209.157" y2="261.806" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint32_linear_0_1" x1="205.766" y1="266.351" x2="219.195" y2="266.351" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint33_linear_0_1" x1="215.804" y1="270.896" x2="229.233" y2="270.896" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint34_linear_0_1" x1="225.841" y1="275.441" x2="239.27" y2="275.441" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint35_linear_0_1" x1="235.879" y1="279.986" x2="249.308" y2="279.986" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint36_linear_0_1" x1="245.917" y1="284.531" x2="259.346" y2="284.531" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint37_linear_0_1" x1="153.922" y1="253.416" x2="167.351" y2="253.416" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint38_linear_0_1" x1="163.96" y1="257.961" x2="177.389" y2="257.961" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint39_linear_0_1" x1="173.998" y1="262.506" x2="187.426" y2="262.506" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint40_linear_0_1" x1="184.035" y1="267.051" x2="197.464" y2="267.051" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint41_linear_0_1" x1="194.073" y1="271.596" x2="207.502" y2="271.596" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint42_linear_0_1" x1="204.11" y1="276.141" x2="217.539" y2="276.141" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint43_linear_0_1" x1="214.148" y1="280.686" x2="227.577" y2="280.686" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint44_linear_0_1" x1="224.186" y1="285.231" x2="237.615" y2="285.231" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint45_linear_0_1" x1="234.224" y1="289.776" x2="247.652" y2="289.776" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint46_linear_0_1" x1="142.229" y1="258.661" x2="155.658" y2="258.661" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint47_linear_0_1" x1="152.267" y1="263.206" x2="165.695" y2="263.206" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint48_linear_0_1" x1="162.304" y1="267.751" x2="175.733" y2="267.751" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint49_linear_0_1" x1="182.38" y1="276.841" x2="195.808" y2="276.841" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint50_linear_0_1" x1="192.417" y1="281.386" x2="205.846" y2="281.386" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint51_linear_0_1" x1="202.455" y1="285.931" x2="215.884" y2="285.931" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint52_linear_0_1" x1="212.492" y1="290.476" x2="225.921" y2="290.476" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint53_linear_0_1" x1="222.53" y1="295.021" x2="235.959" y2="295.021" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint54_linear_0_1" x1="172.342" y1="276.841" x2="205.846" y2="276.841" gradientUnits="userSpaceOnUse">
                <stop stop-color="#898989"/>
                <stop offset="1" stop-color="#8B8C8B"/>
                </linearGradient>
                <linearGradient id="paint55_linear_0_1" x1="386.505" y1="287.819" x2="344.901" y2="227.281" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FCFC1A"/>
                <stop offset="0.993" stop-color="#FF8103"/>
                </linearGradient>
                <linearGradient id="paint56_linear_0_1" x1="287.613" y1="262.981" x2="387.435" y2="262.981" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FCFC1A"/>
                <stop offset="0.993" stop-color="#FF8103"/>
                </linearGradient>
                <linearGradient id="paint57_linear_0_1" x1="129.978" y1="345.232" x2="138.139" y2="296.905" gradientUnits="userSpaceOnUse">
                <stop stop-color="#149648"/>
                <stop offset="0.993" stop-color="#5ED91A"/>
                </linearGradient>
                <linearGradient id="paint58_linear_0_1" x1="140.095" y1="310.216" x2="84.0347" y2="310.216" gradientUnits="userSpaceOnUse">
                <stop stop-color="#149648"/>
                <stop offset="0.993" stop-color="#5ED91A"/>
                </linearGradient>
                <linearGradient id="paint59_linear_0_1" x1="133.118" y1="311.614" x2="77.0999" y2="311.614" gradientUnits="userSpaceOnUse">
                <stop stop-color="#149648"/>
                <stop offset="0.993" stop-color="#5ED91A"/>
                </linearGradient>
                <linearGradient id="paint60_linear_0_1" x1="140.095" y1="284.126" x2="77.0999" y2="284.126" gradientUnits="userSpaceOnUse">
                <stop stop-color="#149648"/>
                <stop offset="0.993" stop-color="#5ED91A"/>
                </linearGradient>
                <linearGradient id="paint61_linear_0_1" x1="221.015" y1="31.3566" x2="196.511" y2="10.9479" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint62_linear_0_1" x1="336.931" y1="92.7994" x2="320.322" y2="59.699" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint63_linear_0_1" x1="303.6" y1="58.8332" x2="274.38" y2="4.56302" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint64_linear_0_1" x1="367.834" y1="138.136" x2="348.615" y2="95.097" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint65_linear_0_1" x1="259.096" y1="110.346" x2="276.237" y2="20.6449" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E1E1E1"/>
                <stop offset="0.995" stop-color="white"/>
                </linearGradient>
                <linearGradient id="paint66_linear_0_1" x1="233.543" y1="68.7697" x2="245.38" y2="58.5427" gradientUnits="userSpaceOnUse">
                <stop stop-color="#165AB2"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint67_linear_0_1" x1="246.54" y1="66.7544" x2="247.85" y2="56.998" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint68_linear_0_1" x1="222.615" y1="56.6495" x2="229.776" y2="50.4617" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#0E538C"/>
                </linearGradient>
                <linearGradient id="paint69_linear_0_1" x1="255.577" y1="66.5701" x2="255.815" y2="64.8022" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E13D3D"/>
                <stop offset="0.995" stop-color="#F06162"/>
                </linearGradient>
                <linearGradient id="paint70_linear_0_1" x1="242.206" y1="60.2441" x2="250.355" y2="65.0913" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FCFC1A"/>
                <stop offset="0.993" stop-color="#FF8103"/>
                </linearGradient>
                <linearGradient id="paint71_linear_0_1" x1="232.606" y1="56.1007" x2="241.461" y2="61.5829" gradientUnits="userSpaceOnUse">
                <stop stop-color="#149648"/>
                <stop offset="0.993" stop-color="#5ED91A"/>
                </linearGradient>
                <linearGradient id="paint72_linear_0_1" x1="193.359" y1="167.657" x2="128.01" y2="167.657" gradientUnits="userSpaceOnUse">
                <stop stop-color="#EAB465"/>
                <stop offset="1" stop-color="#C4791E"/>
                </linearGradient>
                <linearGradient id="paint73_linear_0_1" x1="129.776" y1="174.999" x2="191.642" y2="152.153" gradientUnits="userSpaceOnUse">
                <stop stop-color="#EAB465"/>
                <stop offset="1" stop-color="#C4791E"/>
                </linearGradient>
                <linearGradient id="paint74_linear_0_1" x1="155.358" y1="186.089" x2="161.248" y2="172.686" gradientUnits="userSpaceOnUse">
                <stop stop-color="#EAB465"/>
                <stop offset="1" stop-color="#C4791E"/>
                </linearGradient>
                <linearGradient id="paint75_linear_0_1" x1="148.698" y1="173.683" x2="154.42" y2="148.33" gradientUnits="userSpaceOnUse">
                <stop stop-color="#EAB465"/>
                <stop offset="1" stop-color="#C4791E"/>
                </linearGradient>
                <linearGradient id="paint76_linear_0_1" x1="243.551" y1="252.034" x2="252.68" y2="294.022" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E13D3D"/>
                <stop offset="0.995" stop-color="#BC282F"/>
                </linearGradient>
                <linearGradient id="paint77_linear_0_1" x1="267.432" y1="268.577" x2="208.878" y2="268.577" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E13D3D"/>
                <stop offset="0.995" stop-color="#F06162"/>
                </linearGradient>
                <linearGradient id="paint78_linear_0_1" x1="267.432" y1="268.592" x2="207.359" y2="268.592" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E13D3D"/>
                <stop offset="0.995" stop-color="#F06162"/>
                </linearGradient>
                <linearGradient id="paint79_linear_0_1" x1="156.432" y1="222.241" x2="178.634" y2="250.496" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint80_linear_0_1" x1="187.278" y1="235.349" x2="128.724" y2="235.349" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint81_linear_0_1" x1="187.278" y1="235.364" x2="127.206" y2="235.364" gradientUnits="userSpaceOnUse">
                <stop stop-color="#053F9B"/>
                <stop offset="1" stop-color="#3084D7"/>
                </linearGradient>
                <linearGradient id="paint82_linear_0_1" x1="271.596" y1="196.519" x2="206.232" y2="196.519" gradientUnits="userSpaceOnUse">
                <stop stop-color="#149648"/>
                <stop offset="0.993" stop-color="#5ED91A"/>
                </linearGradient>
                <linearGradient id="paint83_linear_0_1" x1="248.58" y1="223.063" x2="235.743" y2="183.434" gradientUnits="userSpaceOnUse">
                <stop stop-color="#149648"/>
                <stop offset="0.993" stop-color="#5ED91A"/>
                </linearGradient>
                <clipPath id="clip0_0_1">
                <rect width="1000" height="1000" fill="white" transform="translate(-302 -325)"/>
                </clipPath>
                </defs>
                </svg>
                
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
               <svg height=59 width=100 viewBox="0 0 965 570" width="965" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g transform="translate(46 75)"><path d="m131.171547 490.0113 279.821032-74.870571c11.34871-3.037056 18.083033-14.684324 15.043355-26.016753l-100.189161-373.3735494c-3.041419-11.33242961-14.705419-18.05709159-26.054129-15.02177468l-279.8227743 74.87057038c-11.34696776 3.0370564-18.08303227 14.684324-15.04161292 26.0167537l100.18916122 373.373549c3.039677 11.33243 14.705419 18.057092 26.054129 15.021775" fill="#fff"/><path d="m239.004321 14.8859266c-43.004903 11.5063732-86.009806 23.0144859-129.016451 34.5208591-25.1169681 6.7194437-50.2339358 13.4406268-75.3526455 20.1618099-16.8619355 4.5120986-38.94793546 10.0835141-33.9032903 33.2128024 7.10883871 32.590085 17.3897419 64.802712 26.0314839 97.01012 15.8341935 59.010387 31.6683871 118.020775 47.5025806 177.029423 8.8420645 32.950148 16.3741936 66.616943 26.6115483 99.1705 4.285161 13.628486 17.610968 19.135542 30.940258 15.954112 3.809613-.909725 7.579161-2.028183 11.360903-3.040535 21.188904-5.668824 42.377807-11.337648 63.56671-17.006472 56.508387-15.120922 113.016774-30.240105 169.525161-45.359288 11.730194-3.139684 23.60671-5.955831 35.242839-9.431226 13.306645-3.971134 21.795097-15.564479 18.614323-29.535634-.890129-3.906774-2.085097-7.768324-3.123291-11.635091-13.324064-49.653958-26.646387-99.307916-39.970451-148.961873-12.770129-47.587507-25.538516-95.175014-38.308645-142.7625215-.733355-2.732655-1.46671-5.4670493-2.200065-8.1997042-.735097-2.7430916-9.155613-.5166127-8.413548 2.2508309 9.024967 33.6267888 18.048193 67.2553168 27.071419 100.8821058 14.827355 55.256683 29.652968 110.513366 44.480323 165.76831 3.851419 14.350352 7.833483 28.672873 11.554258 43.056274 2.635548 10.19136.243871 21.205472-10.918452 25.246183-3.51 1.271529-7.35271 1.967303-10.955032 2.932691-49.070323 13.129267-98.140645 26.258535-147.210968 39.387802-26.547097 7.10212-53.094194 14.205979-79.64129 21.309838-13.494774 3.609331-27.243871 8.505846-41.006904 10.970627-18.269419 3.27362-21.903096-12.993591-25.402645-26.030669-4.769419-17.777042-9.5388384-35.552345-14.3099997-53.327648-15.0067742-55.931584-30.0152903-111.861429-45.0238064-167.793014-11.6239355-43.320669-23.247871-86.641338-34.8735484-129.962007-3.52567743-13.1379646-6.67509678-28.1145139 10.6205806-33.6720139 17.3200646-5.5644577 35.3734839-9.4642746 52.9443871-14.1659718 51.3505158-13.7398099 102.7027738-27.4796197 154.0532908-41.2194296 3.522193-.9427746 7.044387-1.8855493 10.56658-2.8265845 5.002839-1.3393662 3.997742-5.2861479-1.055613-3.9346056" fill="#5d7183" stroke="#587185" stroke-width="4"/></g><path d="m349.029583 166.403012c-35.884799 9.652829-71.77134 19.303909-107.65788 28.956737-4.828067 1.299049-4.331675 3.563207.597412 2.237932 35.886541-9.652829 71.773081-19.305657 107.65788-28.956737 4.829809-1.29905 4.333417-3.564955-.597412-2.237932" fill="#5d7183"/><path d="m362.631696 217.27284c-70.305907 18.83454-140.610072 37.669081-210.915979 56.503621-9.81118 2.629169-19.624103 5.258338-29.435283 7.885765-5.020606 1.345076-3.978495 5.422118 1.089163 4.064846 70.304164-18.83454 140.610071-37.66908 210.914236-56.50362 9.812923-2.627427 19.624103-5.256597 29.437026-7.885766 5.018863-1.343333 3.976752-5.422117-1.089163-4.064846" fill="#5d7183"/><path d="m762.357819 547.270962-279.598434-74.910245c-11.339611-3.038666-18.068534-14.692105-15.029553-26.03054l100.108837-373.5714041c3.03724-11.3384348 14.69363-18.0666602 26.0315-15.0297349l300.129831 80.411518-105.60894 394.100671c-3.038981 11.338435-14.69363 18.06666-26.033241 15.029735" fill="#fff"/><path d="m404.397507 374.234045c-70.249459 18.843159-140.500659 37.686319-210.750118 56.529479-9.805287 2.630372-19.608833 5.259002-29.41412 7.889374-5.121178 1.373581-3.780373 6.494877 1.368665 5.11258 70.2512-18.843159 140.500659-37.686319 210.751859-56.529479 9.803546-2.628629 19.608834-5.259002 29.41238-7.889375 5.121177-1.37358 3.782113-6.493133-1.368666-5.112579" fill="#5d7183"/><path d="m418.857362 427.331255c-70.356917 18.81266-140.712091 37.625321-211.069009 56.437981-9.818299 2.626115-19.638342 5.25049-29.456641 7.876605-4.916125 1.313928-4.178444 4.357715.810926 3.022904 70.356917-18.81266 140.712091-37.625321 211.069009-56.437981 9.818299-2.624375 19.638342-5.25049 29.456641-7.876605 4.916125-1.313928 4.178444-4.357715-.810926-3.022904" fill="#5d7183"/><path d="m378.954089 326.396183-216.806185 58.184257c-6.507724 1.74729-13.196702-2.122583-14.941274-8.640449l-6.788318-25.371499c-1.742829-6.519611 2.11928-13.219014 8.627003-14.964559l216.806186-58.184257c6.507723-1.747291 13.198444 2.120837 14.941273 8.640449l6.788319 25.371499c1.744571 6.517865-2.11928 13.219013-8.627004 14.964559" fill="#eee"/><g fill="#5d7183"><g transform="matrix(.97437006 -.22495105 .22495105 .97437006 402.100569 173.881548)"><path d="m30.8138248 27.8536898c15.6883228-.5196601 31.4502081.8105487 46.974892 3.0308461 14.9834743 2.1430301 29.9737042 5.1435752 44.3446582 9.9970195 1.405944.4749664 4.26212-1.5771611 2.138566-2.293777-14.632926-4.9420744-29.9159049-7.9706478-45.1726112-10.1523116-15.8407022-2.2657486-31.8960868-3.5550513-47.9011787-3.0255433-1.9711739.0651469-2.8674351 2.5255787-.3843263 2.4437663"/><path d="m49.3711319 54.4727654c12.6957645.9311054 25.4306878 2.638132 37.7393817 6.100237 1.4180037.3985951 4.2961822-1.7810738 2.1454554-2.386056-12.5752755-3.5369401-25.5993722-5.3101366-38.570002-6.2617231-1.639402-.1197361-3.7728086 2.3671503-1.3148351 2.5475421"/><path d="m1.61427547 2.80474376c14.36718653-.83093444 28.77527353-.21204069 43.09784143.94026793 1.625604.13120017 3.7241651-1.9474612 1.298401-2.14227358-14.6252307-1.17682582-29.3456478-1.78379229-44.01549711-.93562953-1.93793417.11198398-2.84592251 2.28010002-.38074532 2.13763518"/></g><path d="m674.768976 83.3586182c-.297977 0-.601183-.0382908-.904388-.1200939l-42.077554-11.2627234c-1.859309-.4960402-2.962349-2.4053599-2.463977-4.2624648.496629-1.8553644 2.399503-2.9623173 4.267525-2.4610556l42.079297 11.2609829c1.859309.4977807 2.962349 2.4071004 2.463977 4.2642053-.418214 1.5542593-1.826201 2.5811495-3.36488 2.5811495zm-110.493876 6.3371312c-.297977 0-.601182-.0382908-.904387-.1200939-1.85931-.4960402-2.962349-2.4053599-2.463978-4.2624648l3.479889-12.973627c2.896132-10.7980121 12.727646-18.3395637 23.906157-18.3395637.878249 0 1.765211.0469933 2.63649.1409798 1.913329.2071186 3.296921 1.9232437 3.089556 3.8360443-.205622 1.9110602-1.932497 3.2895298-3.838856 3.0858922-.622093-.0678791-1.258127-.1009485-1.88719-.1009485-8.029709 0-15.090555 5.4198919-17.172912 13.1790051l-3.481631 12.973627c-.416472 1.5559998-1.824459 2.5811495-3.363138 2.5811495zm194.654211 16.1848346c-.297977 0-.601182-.038291-.904387-.118353l-42.079297-11.2627238c-1.861052-.4960402-2.962349-2.4053599-2.463977-4.2624648.496629-1.8553644 2.396018-2.9675388 4.267525-2.4610556l42.079296 11.2609829c1.861053.4977807 2.964092 2.4071003 2.46572 4.2642053-.418214 1.554259-1.824458 2.579409-3.36488 2.579409zm84.158593 22.523706c-.297977 0-.601182-.03829-.904387-.118353l-42.079297-11.262723c-1.861052-.496041-2.962349-2.40536-2.463977-4.262465.496629-1.855365 2.399502-2.962318 4.267525-2.461056l42.079296 11.260983c1.861053.497781 2.964092 2.4071 2.463978 4.262465-.416472 1.556-1.822716 2.581149-3.363138 2.581149zm-301.364992 45.351999c-.297978 0-.601183-.038291-.902645-.120094-1.861053-.49778-2.962349-2.4071-2.463978-4.264205l11.274352-42.0294c.500114-1.855364 2.413443-2.960576 4.269268-2.461055 1.859309.49778 2.962349 2.4071 2.463977 4.264205l-11.276094 42.0294c-.416472 1.554259-1.826201 2.581149-3.36488 2.581149zm341.3811 10.070487c-.297978 0-.602925-.038291-.904388-.120094-1.85931-.497781-2.962349-2.407101-2.463977-4.262465l5.684225-21.185268c.404273-1.514228.609895-3.068487.609895-4.615785 0-4.516576-1.711192-8.829515-4.818174-12.146893-1.315631-1.404577-1.242444-3.606299.162058-4.920371 1.404502-1.314071 3.610581-1.242711 4.926213.161866 4.321544 4.612304 6.700136 10.617001 6.700136 16.905398 0 2.154729-.28578 4.312939-.846883 6.415454l-5.685968 21.187008c-.416471 1.554259-1.824458 2.58115-3.363137 2.58115zm-363.929804 73.988312c-.297977 0-.602925-.03829-.904388-.120093-1.859309-.497781-2.962349-2.40536-2.463977-4.262465l11.276094-42.03114c.498372-1.855365 2.402988-2.960577 4.267525-2.461056 1.861053.497781 2.96235 2.4071 2.463978 4.264205l-11.274352 42.0294c-.418214 1.556-1.824458 2.581149-3.36488 2.581149zm341.379358 10.070487c-.297978 0-.602926-.038291-.902646-.120094-1.861052-.49604-2.964091-2.40536-2.463977-4.262465l11.274352-42.029399c.496629-1.855365 2.409958-2.964058 4.267525-2.461056 1.861052.497781 2.964092 2.40536 2.46572 4.262465l-11.276094 42.029399c-.416472 1.556-1.824459 2.58115-3.36488 2.58115zm-363.929804 73.988313c-.297978 0-.601183-.038291-.904388-.120094-1.85931-.49604-2.962349-2.40536-2.463977-4.262465l11.276094-42.0294c.498372-1.857105 2.409958-2.962317 4.267525-2.461055 1.85931.49604 2.962349 2.40536 2.463978 4.262465l-11.276095 42.029399c-.416471 1.556-1.824458 2.58115-3.363137 2.58115zm341.379357 10.070486c-.297977 0-.601182-.038291-.904387-.118353-1.85931-.497781-2.962349-2.407101-2.463978-4.264206l11.276095-42.029399c.496629-1.855365 2.399502-2.962318 4.267525-2.461056 1.859309.49604 2.962349 2.40536 2.463977 4.262465l-11.276094 42.03114c-.416472 1.554259-1.824459 2.579409-3.363138 2.579409zm-363.929803 73.990053c-.297978 0-.602926-.03829-.902646-.120093-1.861052-.497781-2.964091-2.407101-2.463977-4.262465l11.274352-42.03114c.498372-1.857105 2.402988-2.962318 4.267525-2.461056 1.861052.497781 2.964092 2.40536 2.463977 4.262465l-11.274351 42.03114c-.416472 1.554259-1.826201 2.581149-3.36488 2.581149zm341.379357 10.070487c-.297977 0-.59944-.038291-.902645-.120094-1.861052-.497781-2.962349-2.40536-2.463977-4.262465l11.274351-42.03114c.498372-1.855364 2.409958-2.964058 4.269268-2.461056 1.85931.497781 2.962349 2.407101 2.463977 4.262465l-11.276094 42.03114c-.416471 1.55426-1.826201 2.58115-3.36488 2.58115zm-305.430381 47.694701c-.297977 0-.601182-.038291-.904388-.120094l-27.445292-7.344876c-5.738244-1.535114-10.734159-5.080496-14.069415-9.981721-1.082129-1.59081-.669142-3.755982.925298-4.836828 1.589213-1.082586 3.760441-.666608 4.840827.924202 2.396018 3.521015 5.983945 6.067355 10.10858 7.170826l27.445293 7.344877c1.859309.49778 2.962349 2.405359 2.463977 4.262464-.418214 1.556-1.826201 2.58115-3.36488 2.58115zm84.158593 22.523706c-.297977 0-.601183-.038291-.904388-.120094l-42.077554-11.262723c-1.859309-.49604-2.962349-2.40536-2.463977-4.262465.498372-1.855364 2.411701-2.964058 4.267525-2.461056l42.079297 11.262724c1.859309.497781 2.962349 2.40536 2.463977 4.262465-.418214 1.555999-1.824458 2.581149-3.36488 2.581149zm198.721342 13.840392c-.297978 0-.601183-.038291-.904388-.120094-1.859309-.49778-2.962349-2.40536-2.463977-4.262465l11.276094-42.029399c.496629-1.855365 2.404731-2.962317 4.267525-2.461056 1.861053.49604 2.962349 2.40536 2.463978 4.262465l-11.274352 42.0294c-.418214 1.554259-1.824459 2.581149-3.36488 2.581149zm-114.561007 8.683315c-.297977 0-.601182-.038291-.904387-.120094l-42.079297-11.262724c-1.861052-.49604-2.962349-2.40536-2.463977-4.262465.496629-1.857105 2.408215-2.965798 4.267525-2.461055l42.079296 11.262723c1.861053.49604 2.964092 2.40536 2.463978 4.262465-.416472 1.556-1.824459 2.58115-3.363138 2.58115zm89.679018 23.252972c-2.162515 0-4.323287-.285441-6.426555-.84936l-42.077554-11.262723c-1.861052-.496041-2.964091-2.40536-2.463977-4.262465.498371-1.855365 2.402988-2.964058 4.267525-2.461056l42.079296 11.262724c1.800063.482116 3.652402.684013 5.499514.588286 1.911587-.07136 3.560047 1.38021 3.655887 3.299973.099326 1.919762-1.380106 3.555825-3.302148 3.653292-.409501.020886-.820744.031329-1.231988.031329z" stroke="#587185" stroke-width="5"/><g transform="translate(0 301)"><path d="m34.1738277 13.5177271c9.6079345-3.94211616 19.3279967-7.55497743 29.1594077-10.84264867 2.2417735-.74956302 1.6655622-3.19499207-.6237098-2.42998252-10.1600073 3.39823585-20.2071082 7.13548231-30.136631 11.20930049-2.4123009.9893906-.2608524 2.8267143 1.6009331 2.0633307"/><path d="m2.6936731 62.8177793c22.8351712-8.9419408 45.9717889-17.1636001 69.3846672-24.6418393 2.2470759-.7180424 1.6756653-2.9677093-.6304406-2.2310068-23.7434463 7.5842288-47.2137804 15.9103849-70.37243609 24.9784683-2.42023063.9479353-.258945 2.6295875 1.61820949 1.8943778"/><path d="m74.9363357 56.3334148c-7.78677 2.4032128-15.4854828 5.0513834-23.1000695 7.937557-2.4420141.9257392-.2641715 2.6736709 1.6164781 1.9612071 7.2898759-2.7633084 14.6591605-5.2893864 22.1133574-7.5890525 2.2698308-.7008727 1.6840934-3.0237209-.629766-2.3097116"/></g></g><g transform="translate(825 68)"><path d="m87.6688965 2.38941243c-37.1456666-9.95181481-75.3253333 12.09118517-85.27888885 49.23511107v.0017408c-9.95355555 37.1439259 12.09118515 75.3253337 49.23511115 85.2771477 37.1456666 9.953556 75.3270742-12.089444 85.2788892-49.2351107 9.953555-37.1456666-12.089445-75.3253333-49.2351115-85.27888887" fill="#e3e3e3"/><g fill="#fff" transform="translate(17.682491 28.2761)"><path d="m78.4098498 46.8710529c2.2995186 3.0288889 4.5990371 6.0577778 6.8968149 9.0866667 1.5823333 2.0819259 4.8375185 1.3351481 6.6513703.1201111 3.3021852-2.2124815 6.6043704-4.424963 9.908296-6.6374445 1.577111-1.0566296 1.977482-3.243.417778-4.4667407-1.733778-1.363-4.4110369-.6127408-6.0368888.4752222-3.3021852 2.2124815-6.6043704 4.424963-9.9065555 6.6374445 2.2159629.040037 4.4336666.080074 6.6496296.1201111-2.2977778-3.0288889-4.5972963-6.0577778-6.8968148-9.0866667-2.3726297-3.1246296-10.3574074.2297778-7.6836297 3.7512963"/><path d="m93.5281832 52.8365714c5.8332222-20.1299259-3.625963-41.6106667-23.3555185-49.66507406-17.7015926-7.22581481-37.9620741-1.6067037-50.9932593 11.80744446-2.249037 2.3151852 6.0281852 1.7215926 7.7637037-.0644074 13.5255556-13.92244447 34.6494444-13.43155558 48.4361111-.094 10.5958889 10.2512222 13.8197407 25.2511852 9.7777407 39.198-.7589629 2.6145926 7.6105186 1.4465555 8.3712223-1.181963"/><path d="m9.81073873 31.7857936c-4.42496297 19.3535556 4.66866667 39.1614445 22.74799997 47.7711482 18.0218889 8.5818518 38.9960741 3.3126296 52.3841111-10.9179259 3.6294445-3.8574815-4.4058148-5.4102223-7.0639259-2.585-12.2356667 13.0068148-31.7894074 15.0695926-46.2027407 4.1742963-12.1834445-9.2102593-16.6745556-24.4504445-13.3375556-39.0448149.9539259-4.1708148-7.6557778-3.2116666-8.52788887.6022963"/><path d="m24.8768498 38.4145344c-2.2995185-3.0288889-4.599037-6.0577778-6.8985555-9.0866667-1.4865926-1.9600741-4.9576296-1.0635926-6.6061111.0417778-3.30218521 2.2124815-6.60611114 4.4232222-9.90829632 6.6357037-1.47440741.9887407-2.11151852 2.9279259-.51874074 4.0994444 1.68329629 1.235926 4.46325925.4647778 6.01077777-.5727037 3.30392589-2.2124814 6.60611109-4.4249629 9.90829629-6.6374444-2.202037.0139259-4.4058148.0278518-6.6078518.040037 2.2995185 3.0288889 4.599037 6.0577778 6.8985555 9.0866667 2.1654815 2.8530741 10.2129259-.3272593 7.7219259-3.6068148"/></g></g><path d="m348.517467 2.38507622c-37.067391 9.93253778-59.063941 48.03158508-49.133097 85.09881558 9.932581 37.0654932 48.031793 59.0636852 85.099184 49.1311472s59.06394-48.031585 49.131359-85.0988156c-9.930843-37.0672306-48.031792-59.063685-85.097446-49.13114718" fill="#96e296"/><g fill="#fff"><path d="m329.94185 83.6590836c25.084462-6.7665468 50.167193-13.5330937 75.249923-20.2996405 7.671286-2.0690085 5.57471-10.0992716-2.134663-8.0180617-25.082731 6.7665468-50.165461 13.5330937-75.248192 20.2996405-7.671285 2.0690086-5.576441 10.0975286 2.132932 8.0180617"/><path d="m350.117012 33.1691282c6.733234 25.352166 13.466468 50.7060819 20.199701 76.0582478 1.450022 5.454356 14.0215 2.08235 12.566275-3.396504-6.733234-25.3539161-13.466467-50.7060821-20.201436-76.0582481-1.448287-5.4543555-14.019765-2.0823494-12.56454 3.3965043"/></g></g></svg>
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
               <svg height=50 width=100 viewBox="0 0 306 152" width="306" xmlns="http://www.w3.org/2000/svg"><g fill="none" transform="translate(3 3)"><path d="m226.410191 145.572403c-20.1875 0-39.600863-8.532328-53.262069-23.409052-4.047414-4.407327-10.924569-15.05862-21.810776-32.0711204-13.30388-20.7918103-31.524569-49.2672414-40.890518-57.7142242-9.975862-8.9969827-23.4099133-14.1568965-36.8577582-14.1568965-30.3573276 0-55.0547413 24.6974138-55.0547413 55.0547414 0 30.3577587 24.6974137 55.0551727 55.0547413 55.0551727 13.3521552 0 26.2297414-4.839224 36.2599142-13.625862 7.114655-6.232759 12.402586-13.912931 16.636638-20.6043107 2.54612-4.0228448 7.871551-5.2198276 11.894396-2.674569 4.023276 2.5465518 5.22069 7.8715518 2.675 11.8948277-4.607327 7.280603-11.026724 16.628017-19.844827 24.353017-13.175432 11.541379-30.0879315 17.898276-47.6211212 17.898276-39.864224 0-72.29612059-32.432328-72.29612059-72.2965517 0-39.8642242 32.43189659-72.29612074 72.29612059-72.29612074 17.9185345 0 35.1090522 6.60387931 48.4047412 18.59482754 11.090517 10.0021552 28.503448 37.2150863 43.86638 61.2250001 8.234482 12.8685345 16.749137 26.1762928 19.9875 29.7021548 10.404741 11.330604 25.189224 17.829311 40.5625 17.829311 30.357327 0 55.055172-24.697414 55.055172-55.0551727 0-30.3573276-24.697845-55.0547414-55.055172-55.0547414-14.724138 0-29.668535 6.4155172-39.975863 17.1616379-2.238793 2.3340517-6.930603 8.4625-12.872844 16.8133621-2.760776 3.8788793-8.143104 4.7862069-12.021983 2.025431-3.87931-2.7599137-4.786638-8.1426724-2.025862-12.0219828 6.689655-9.4012931 11.561207-15.7103448 14.478017-18.7517241 13.696121-14.2788793 32.801724-22.46810344 52.418535-22.46810344 39.864655 0 72.296551 32.43189654 72.296551 72.29612074 0 39.8642237-32.431896 72.2965517-72.296551 72.2965517" fill="#bbdff5"/><path d="m226.410191 140.399989c-15.346983 0-31.736638-2.74612-47.227587-18.236638-4.231034-4.231034-10.924569-15.05862-21.810776-32.0711204-13.303879-20.7918103-31.109913-48.7961207-40.028448-57.7142242-13.869396-13.8693965-30.3064653-18.8982758-43.7543102-18.8982758-30.3573276 0-55.0547413 29.4387931-55.0547413 59.7961207 0 30.3577587 24.6974137 55.0551727 55.0547413 55.0551727 13.3521552 0 26.2297414-4.839224 36.2599142-13.625862 7.114655-6.232759 12.402586-13.912931 16.636638-20.6043107 2.54612-4.0228448 7.871551-5.2198276 11.894396-2.674569 4.023276 2.5465518 5.22069 7.8715518 2.675 11.8948277-4.607327 7.280603-9.733621 12.317672-18.551724 20.042672-13.175431 11.54138-29.6568966 17.898276-47.1900862 17.898276-39.8642241 0-67.98577582-28.121983-67.98577582-67.9862067 0-39.8642242 30.70775862-72.29612074 70.57198272-72.29612074 11.7556034 0 30.7987073 6.60387931 44.0943963 18.59482754 11.090517 10.0021552 28.503448 37.2150863 43.86638 61.2250001 8.234482 12.8685345 16.749137 26.1762928 19.9875 29.7021548 10.404741 11.330604 25.189224 17.829311 40.5625 17.829311 30.357327 0 61.520689-24.697414 61.520689-55.0551727 0-35.7758621-31.163362-60.2271552-61.520689-60.2271552-14.724138 0-27.944397 7.2775862-38.251725 18.0237069-2.238793 2.3340517-8.654741 12.7728448-14.596982 21.1237069-2.760776 3.8788793-8.143104 4.7862069-12.021983 2.025431-3.87931-2.7599137-4.786638-8.1426724-2.025862-12.0219828 6.689655-9.4012931 11.561207-15.7103448 14.478017-18.7517241 13.696121-14.2788793 32.801724-22.46810344 52.418535-22.46810344 39.864655 0 72.296551 32.43189654 72.296551 72.29612074 0 39.8642237-32.431896 67.1241377-72.296551 67.1241377" fill="#def3f9"/><path d="m226.790794 144.890938c-14.417241-.068966-28.562931-4.417242-40.468535-12.572414-5.040948-3.453018-9.8375-7.555604-13.692672-12.318104-2.878879-3.557327-5.418103-7.399138-7.948707-11.206465-7.976724-12.0017244-15.582758-24.246552-23.448276-36.3211209-7.200862-11.0538794-14.44181-22.1862069-22.652586-32.5267242-2.944396-3.7081897-6.034483-7.2198276-9.745259-10.1823276-5.590517-4.462931-12.0737064-7.7974138-18.9219823-9.8508621-12.150431-3.6426724-25.3392241-3.0267241-37.1120689 1.6771552-22.0741379 8.8198276-36.5172413 31.2262931-35.225431 54.9810345 1.2905173 23.7392241 18.3853448 44.5146551 41.3374999 50.5806031 12.7012931 3.356897 26.474138 2.112931 38.3788793-3.443534 6.4875-3.028017 12.295259-7.285345 17.259052-12.434052 5.02112-5.208189 8.872845-11.149138 12.918534-17.0978447 4.744397-6.9767241 15.059052-1.7956896 13.759483 6.0495687-.521121 3.144828-3.107328 6.104311-4.869397 8.675862-2.121982 3.097414-4.362931 6.113362-6.770689 8.995259-9.888793 11.836638-22.718104 20.701293-37.7129312 24.656897-25.0728449 6.613793-52.2767241-1.37888-69.9943965-20.235776-16.91767242-18.005604-23.4909483-43.9948279-17.08017242-67.8754314 6.29224142-23.4375 24.74870692-42.6862069 47.99827582-49.74051725 26.1357758-7.93060344 55.6698273.26767242 73.6413793 20.92112065 9.060345 10.412069 16.696121 22.1146553 24.264224 33.6250001 8.922845 13.5711207 17.456897 27.3965517 26.449138 40.9219829 3.013793 4.53319 5.968535 9.169827 9.889655 12.98319 4.921983 4.786637 10.713362 8.644827 17.029311 11.336206 11.763362 5.0125 25.090517 5.883621 37.402586 2.418535 22.744396-6.400862 39.671983-27.0452587 40.956465-50.7185346 1.289655-23.7685345-13.194396-46.1172414-35.320689-54.8163794-11.767242-4.6262931-24.966811-5.0336206-37.024138-1.2590517-12.102155 3.7887931-21.913793 11.1931035-29.555173 21.1737069-2.133189 2.7857759-4.20862 5.6155173-6.258189 8.4633621-2.37069 3.2939655-5.005604 6.4047414-9.534483 5.0849138-3.450431-1.0060345-5.842673-4.3862069-5.772845-7.9581896.07069-3.5831897 2.803017-6.4056035 4.796983-9.1474139 3.368103-4.6314655 6.743534-9.3594827 10.64181-13.5689655 4.909483-5.3017241 10.756466-9.7978448 17.047845-13.3375 23.560345-13.25474137 53.123707-11.80689654 75.294397 3.5961207 20.195689 14.0310345 32.039224 38.0090518 30.82112 62.5793104-1.203017 24.2732758-15.047414 46.7607758-36.186638 58.7612068-10.522414 5.973707-22.502586 9.080172-34.591379 9.130173-.899138.003879-2.162931 1.368103-.760776 1.362517 23.906897-.098724 46.63319-11.715535 60.451724-31.28838 14.163793-20.0612065 17.212931-46.6995685 7.851293-69.4219823-9.113362-22.1202587-29.100862-38.80387938-52.538793-43.68750007-25.766379-5.36810345-54.141379 3.81853448-71.138362 24.15301727-4.281465 5.1219827-8.444827 10.5495689-12.125862 16.1159482-3.13319 4.7383622-1.500431 11.2215518 3.810776 13.5599139 2.374138 1.0456896 5.106897 1.0603448 7.52931.1625 2.859483-1.0599138 4.417673-3.2284483 6.133621-5.6163793 3.5625-4.9581897 7.075431-10.1568966 11.285345-14.6025863 10.303017-10.8801724 25.583189-17.1900862 40.555172-16.6961207 12.614655.4159483 24.852155 5.3267242 34.264655 13.7375 18.981897 16.962069 23.811638 45.6625001 11.130173 67.8060343-6.093966 10.640949-15.767673 19.046121-27.18319 23.534052-13.114224 5.155603-28.086638 4.748276-40.975431-.901724-6.69181-2.933621-12.8-7.210776-17.804741-12.537069-3.80388-4.047845-6.740517-9.032328-9.777155-13.6525863-9.09569-13.8387931-17.819828-27.9181035-26.974569-41.7189655-7.442673-11.2202587-14.958621-22.7818966-24.160345-32.6685346-9.146121-9.8271551-21.509483-16.74137928-34.4866381-20.00560342-24.3262931-6.11853448-50.6284482.79396552-68.825431 18.03189652-17.68405171 16.7521552-25.96034483 41.7586208-21.67241379 65.7517242 4.21681036 23.5943961 20.44094829 44.0827591 42.36336199 53.7331901 24.800431 10.917241 54.525 7.031465 75.6926729-9.921121 5.815517-4.657328 10.857758-10.175431 15.334913-16.116379 2.107328-2.796552 4.092673-5.681466 5.996121-8.620259 1.57931-2.437931 2.928017-4.737069 2.628879-7.7538794-.552586-5.5659482-6.085345-9.112931-11.412931-8.0073275-2.459914.5107758-4.665086 1.875862-6.147414 3.9150862-2.115948 2.9103448-3.913362 6.0482758-6.053017 8.9512927-9.644827 13.084052-22.8974136 22.725-39.3349136 24.749569-12.9314655 1.592242-26.1534482-1.634913-36.9206896-8.959913-21.1124999-14.363363-29.6517241-42.4452591-19.7862068-66.0737074 10.3288793-24.7375 37.9780171-38.5538793 63.9172413-31.3094828 7.4021551 2.0672414 14.3836207 5.6771552 20.2965517 10.5935345 3.755603 3.1224138 6.856897 6.924138 9.839655 10.7698276 8.357328 10.7754311 15.809052 22.2676725 23.221983 33.7021552 7.820259 12.0625 15.377586 24.3056039 23.430172 36.2155169 2.318104 3.428449 4.644828 6.930173 7.394828 10.034483 4.511638 5.093104 9.915948 9.496983 15.69569 13.071121 11.535775 7.133189 24.942241 10.906034 38.493965 10.971138.901724.004293 2.164655-1.355621.760776-1.362517" fill="#5d7183" stroke="#587185" stroke-width="5"/></g></svg>
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
               <svg  height=42 width=100 viewBox="0 0 406 170" width="406" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(58 31)"><path d="m253.202 106.999h-206.702c-20.71 0-37.5-16.789-37.5-37.5v-23c0-20.71 16.79-37.5 37.5-37.5h206.702c20.711 0 37.5 16.79 37.5 37.5v23c0 20.711-16.789 37.5-37.5 37.5" fill="#d5f2f8"/><g fill="#5d7183"><path d="m39.5 4c-19.574 0-35.5 15.925-35.5 35.5v23c0 19.574 15.926 35.5 35.5 35.5h206.702c19.575 0 35.5-15.926 35.5-35.5v-23c0-19.575-15.925-35.5-35.5-35.5zm206.702 98h-206.702c-21.78 0-39.5-17.72-39.5-39.5v-23c0-21.781 17.72-39.5 39.5-39.5h206.702c21.78 0 39.5 17.719 39.5 39.5v23c0 21.78-17.72 39.5-39.5 39.5z"/><path d="m41.01 73.094c-1.381 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m54.865 67.355c-.639 0-1.28-.244-1.767-.732l-27.712-27.712c-.976-.976-.976-2.559 0-3.535.976-.977 2.56-.977 3.535 0l27.712 27.711c.976.976.976 2.56 0 3.536-.488.488-1.128.732-1.768.732"/><path d="m60.604 53.5h-39.189c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.189c1.381 0 2.5 1.119 2.5 2.5 0 1.38-1.119 2.5-2.5 2.5"/><path d="m27.154 67.355c-.64 0-1.28-.244-1.768-.732-.976-.976-.976-2.56 0-3.536l27.712-27.711c.975-.977 2.559-.977 3.535 0 .976.976.976 2.559 0 3.535l-27.712 27.712c-.487.488-1.128.732-1.767.732"/><path d="m91.693 73.094c-1.381 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m105.548 67.355c-.639 0-1.279-.244-1.767-.732l-27.711-27.712c-.977-.976-.977-2.559 0-3.535.975-.977 2.559-.977 3.535 0l27.711 27.711c.976.976.976 2.56 0 3.536-.488.488-1.128.732-1.768.732"/><path d="m111.288 53.5h-39.19c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.19c1.38 0 2.5 1.119 2.5 2.5 0 1.38-1.12 2.5-2.5 2.5"/><path d="m77.837 67.355c-.639 0-1.279-.244-1.767-.732-.977-.976-.977-2.56 0-3.536l27.711-27.711c.976-.977 2.558-.977 3.535 0 .976.976.976 2.559 0 3.535l-27.711 27.712c-.488.488-1.128.732-1.768.732"/><path d="m142.376 73.094c-1.38 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.12-2.5 2.5-2.5 1.381 0 2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m156.232 67.355c-.64 0-1.279-.244-1.768-.732l-27.711-27.712c-.976-.976-.976-2.559 0-3.535.977-.977 2.559-.977 3.536 0l27.711 27.711c.976.976.976 2.56 0 3.536-.489.488-1.128.732-1.768.732"/><path d="m161.971 53.5h-39.189c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.189c1.381 0 2.5 1.119 2.5 2.5 0 1.38-1.119 2.5-2.5 2.5"/><path d="m128.521 67.355c-.64 0-1.279-.244-1.768-.732-.976-.976-.976-2.56 0-3.536l27.711-27.711c.977-.977 2.559-.977 3.536 0 .976.976.976 2.559 0 3.535l-27.711 27.712c-.489.488-1.128.732-1.768.732"/><path d="m194.009 73.094c-1.381 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m207.865 67.355c-.64 0-1.28-.244-1.768-.732l-27.711-27.712c-.976-.976-.976-2.559 0-3.535.977-.977 2.559-.977 3.535 0l27.711 27.711c.977.976.977 2.56 0 3.536-.488.488-1.128.732-1.767.732"/><path d="m213.604 53.5h-39.189c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.189c1.381 0 2.5 1.119 2.5 2.5 0 1.38-1.119 2.5-2.5 2.5"/><path d="m180.154 67.355c-.64 0-1.279-.244-1.768-.732-.976-.976-.976-2.56 0-3.536l27.711-27.711c.977-.977 2.559-.977 3.535 0 .977.976.977 2.559 0 3.535l-27.711 27.712c-.488.488-1.128.732-1.767.732"/><path d="m244.693 73.094c-1.381 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m258.548 67.355c-.639 0-1.279-.244-1.767-.732l-27.711-27.712c-.977-.976-.977-2.559 0-3.535.976-.977 2.558-.977 3.535 0l27.711 27.711c.976.976.976 2.56 0 3.536-.488.488-1.128.732-1.768.732"/><path d="m264.288 53.5h-39.19c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.19c1.38 0 2.5 1.119 2.5 2.5 0 1.38-1.12 2.5-2.5 2.5"/><path d="m230.837 67.355c-.639 0-1.279-.244-1.767-.732-.977-.976-.977-2.56 0-3.536l27.711-27.711c.976-.977 2.558-.977 3.535 0 .976.976.976 2.559 0 3.535l-27.711 27.712c-.488.488-1.128.732-1.768.732"/></g></g></svg>
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
                <svg height=94 width=100 viewBox="0 0 590 556" width="590" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(2 2)"><g transform="translate(167)"><path d="m317.372969 61.441858 60.001 306.109c1.461 7.452-3.415 14.681-10.89 16.146l-275.8020004 54.061c-7.475 1.465-14.718-3.388-16.179-10.84l-9.351-47.708-4.927-26.338-56.98000003-290.695c-1.461-7.452 3.415-14.68 10.89000003-16.146l217.0290004-42.54 86.195 57.888z" fill="#e5e5e5"/><path d="m65.2819686 379.874858-4.811-25.689-55.57900003-283.544c-1.424-7.268 3.178-14.289 10.28000003-15.681l206.1880004-40.415 3.573 2.468 10.533 53.738c1.538 7.847 9.147 12.962 16.994 11.423l43.024-8.433c5.961-1.168 11.74 2.717 12.908 8.677l56.275 287.095c1.424 7.268-3.178 14.289-10.28 15.681l-264.5450004 51.854c-7.102 1.392-14.014-3.372-15.438-10.64z" fill="#fff"/><path d="m314.792969 61.248858c6.418 32.745 12.837 65.491 19.256 98.237 10.6 54.077 21.199 108.154 31.799 162.231 2.804 14.304 5.608 28.608 8.411 42.912 1.363 6.949.187 14.994-7.933 17.141-3.779.999-7.755 1.52-11.588 2.272-48.172 9.442-96.345 18.885-144.518 28.327-25.776 5.053-51.552 10.105-77.328 15.158-13.637 2.673-27.265 5.762-40.9760004 8.031-4.747.786-9.234-.381-12.428-4.265-2.934-3.568-3.301-8.752-4.16-13.134-2.451-12.504-4.902-25.008-7.353-37.513-2.262-11.539-4.297-23.122-6.558-34.661-8.536-43.548-17.073-87.097-25.609-130.645-9.305-47.476-18.611-94.951-27.91700003-142.427-.762-3.888-1.686-7.783-2.293-11.7-1.321-8.51 3.555-13.993 11.23300003-15.498 18.065-3.541 36.129-7.082 54.194-10.623 49.8730004-9.776 99.7450004-19.551 149.6180004-29.327 3.326-.652 6.653-1.304 9.979-1.956-.626-.088-1.252-.175-1.878-.263 25.137 16.882 50.274 33.764 75.41 50.646 1.718 1.153 10.353 5.748 10.639 7.057.309 1.412 5.159.215 4.83-1.294-.279-1.277-4.28-3.071-5.242-3.717-4.797-3.222-9.594-6.443-14.391-9.665-13.024-8.747-26.049-17.494-39.073-26.241-8.847-5.942-17.525-12.376-26.645-17.895-2.909-1.76-6.418-.255-9.622.373-54.089 10.602-108.177 21.204-162.2660004 31.806-15.985 3.134-32.057 5.984-47.983 9.406-10.20400003 2.192-15.23300003 10.325-13.29500003 20.211 1.184 6.039 2.368 12.078 3.551 18.118 11.03900003 56.314 22.07700003 112.628 33.11600003 168.943 7.388 37.695 15.003 75.353 22.066 113.111 1.861 9.951 3.767 19.889 5.715 29.824 1.497 7.641 2.995 15.282 4.493 22.923.916 4.673 1.285 10.549 3.969 14.616 4.946 7.492 13.08 6.904 20.641 5.422 7.3550004-1.441 14.7110004-2.883 22.0660004-4.325l173.91-34.089c21.936-4.299 43.871-8.599 65.807-12.899 3.805-.745 7.791-1.249 11.523-2.338 7.858-2.294 12.891-9.331 11.651-17.527-.157-1.039-.407-2.073-.609-3.104-9.153-46.698-18.306-93.396-27.46-140.093-10.053-51.287-20.105-102.574-30.158-153.861-.588-2.999-1.176-5.999-1.764-8.999-.274-1.398-5.131-.239-4.83 1.294" fill="#5d7183" stroke="#587185" stroke-width="6"/><path d="m230.850969 2.678858 11.372 58.02c1.539 7.847 9.147 12.962 16.995 11.423l58.019-11.372z" fill="#fff" stroke="#5d7183" stroke-width="10"/><path d="m230.435969 2.325858c3.632 18.527 7.263 37.053 10.894 55.58 2.01 10.253 9.675 16.01 20.233 14.108 9.605-1.731 19.166-3.757 28.744-5.634 9.506-1.864 19.013-3.727 28.52-5.591.281-.055 3.792-1.151 2.674-1.902-25.14-16.9-50.28-33.8-75.42-50.7-3.655-2.457-7.31-4.914-10.966-7.371-1.209-.813-5.43 1.12-4.529 1.726 25.141 16.9 50.281 33.8 75.421 50.7 3.655 2.457 7.31 4.914 10.965 7.371.892-.634 1.783-1.268 2.674-1.903-17.877 3.505-35.753 7.009-53.63 10.513-4.456.873-8.566 1.766-12.846-.803-4.258-2.557-6.026-6.787-6.93-11.401-1.922-9.807-3.845-19.613-5.767-29.419-1.736-8.856-3.471-17.712-5.207-26.568-.24-1.225-5.1-.083-4.83 1.294" fill="#5d7183"/></g><path d="m581.624956 172.765174c-7.737 28.056-31.778 52.343-62.697 47.634-1.433-.219-5.654 2.09-2.991 2.495 33.721 5.136 61.85-19.403 70.505-50.783.439-1.593-4.388-.903-4.817.654" fill="#5d7183" stroke="#587184" stroke-width="3"/><path d="m208.305713 263.24123c-29.36-11.048-53.002-34.411-64.437-63.619-.58-1.482-5.344-.019-4.83 1.294 11.597 29.621 35.608 53.283 65.376 64.485 1.295.487 5.686-1.485 3.891-2.16" fill="#5d7183" stroke="#587184" stroke-width="3"/><path d="m337.506 529.150845c51.412-3.294 103.869-6.526 153.948 3.557 7.338 1.478 16.319 5.319 15.02 11.417-55.581 9.07-147.979 8.553-222.135 9.063-27.3.188-50.546-3.176-76.318-11.465-.007-1.576-.014-3.151-.021-4.726 43.548-4.702 86-5.058 129.506-7.846" fill="#eee"/><g fill="#5d7183"><path d="m383.766 410.651845c-1.387 21.774-6.43 51.624-31.75 57.223-21.113 4.668-45.053-6.925-59.385-21.961-1.09-1.145-5.67.611-4.498 1.84 15.821 16.6 41.775 27.778 64.771 22.292 27.456-6.549 34.114-35.492 35.678-60.049.117-1.827-4.719-.854-4.816.655" stroke="#587184" stroke-width="3"/><path d="m405.818 407.645845c-4.029 50.801-29.282 99.891-70.4 130.483-2.137 1.59 2.678 1.524 3.838.662 41.513-30.886 67.307-80.47 71.378-131.8.144-1.814-4.696-.862-4.816.655" stroke="#587184" stroke-width="3"/><path d="m304.122558 196.416016c-1.937.09-3.929-.571-5.495-1.998-3.072-2.799-3.36-7.504-.643-10.486 1.325-1.455 3.158-2.286 5.156-2.338 1.971-.052 3.869.66 5.345 2.004 3.073 2.799 3.362 7.504.643 10.487-1.331 1.463-3.144 2.244-5.006 2.331"/><path d="m408.686558 185.823016c-1.936.09-3.929-.571-5.495-1.998-3.071-2.799-3.36-7.504-.643-10.486 2.718-2.984 7.429-3.132 10.5-.334 1.477 1.344 2.362 3.168 2.493 5.136.133 1.997-.524 3.897-1.849 5.351-1.331 1.462-3.143 2.244-5.006 2.331"/><path d="m386.959558 214.365016c-.212 5.518-3.558 12.917-6.686 16.622-7.481 8.86-19.54 13.122-30.86 10.221-4.926-1.262-24.681-12.388-19.272-19.427 6.199-8.065 22.544-6.902 31.46-8.889 5.05-1.126 9.96-2.799 14.857-4.469 8.128-2.77 10.699.754 10.501 5.942"/></g><path d="m288.624558 224.462016c.236 9.064-5.084 16.555-11.882 16.732-6.798.176-12.5-7.028-12.735-16.092-.236-9.064 5.084-16.555 11.882-16.732 6.798-.176 12.5 7.028 12.735 16.092" fill="#f4cac1"/><path d="m450.363558 207.561016c-.304 9.062-6.06 16.223-12.856 15.995s-12.06-7.759-11.756-16.821 6.06-16.223 12.856-15.995c6.797.228 12.06 7.759 11.756 16.821" fill="#f4cac1"/><g fill="#5d7183" stroke="#587184" stroke-width="3" transform="translate(0 265)"><path d="m152.481698 42.3c-29.493 0-58.9859999 0-88.4799999 0-4.187 0-8.375 0-12.562 0-1.879 0-5.105 2.834-1.853 2.834h88.4789999 12.563c1.878 0 5.104-2.834 1.853-2.834"/><path d="m129.375698 0c-36.7899999 0-73.5789999 0-110.3679999 0-5.255 0-10.50999999 0-15.76499999 0-1.878 0-5.105 2.835-1.853 2.835h110.36699989 15.765c1.879 0 5.105-2.835 1.854-2.835"/><path d="m96.3716981 77.669c-21.999 0-43.998 0-65.996 0-1.879 0-5.105 2.835-1.854 2.835h65.997c1.879 0 5.105-2.835 1.853-2.835"/></g></g></svg>
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
               <svg height=60 width=100 viewBox="0 0 1015 612" width="1015" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><mask id="a" fill="#fff"><path d="m.493.101h740.427v440.075h-740.427z" fill="#fff" fill-rule="evenodd"/></mask><g fill="none" fill-rule="evenodd" transform="translate(2)"><path d="m825.498 74.6511391h-141.422c-12.243 0-22.261-10.017-22.261-22.261 0-12.243 10.018-22.261 22.261-22.261h141.422c12.24 0 22.26 10.018 22.26 22.261 0 12.244-10.02 22.261-22.26 22.261" fill="#fff"/><path d="m751.21 31.9011391c-6.895 0-12.484-4.264-12.484-9.524 0-5.261 5.589-9.525 12.484-9.525h-54.469c6.895 0 12.484 4.264 12.484 9.525 0 5.26-5.589 9.524-12.484 9.524z" fill="#fff"/><path d="m921.208 556.776139v-485.6959999c0-8.793-7.2-15.987-15.99-15.987h-799.832c-8.792 0-15.986 7.194-15.986 15.987v485.6959999z" fill="#fff" stroke="#5d7183" stroke-width="4"/><path d="m91.4 554.776139h827.808v-483.6959999c0-7.713-6.28-13.987-13.99-13.987h-799.832c-7.712 0-13.986 6.274-13.986 13.987zm829.808 4h-831.808c-1.105 0-2-.896-2-2v-485.6959999c0-9.918 8.069-17.987 17.986-17.987h799.832c9.92 0 17.99 8.069 17.99 17.987v485.6959999c0 1.104-.9 2-2 2z" fill="#5d7183" stroke="#5d7183" stroke-width="4"/><path d="m962.968 607.970139h-915.39c-25.053 0-45.436-20.382-45.436-45.436v-2.727c0-1.471 1.193-2.664 2.664-2.664h1000.992c1.47 0 2.66 1.193 2.66 2.664v2.667c0 25.088-20.4 45.496-45.49 45.496" fill="#fff" stroke="#5d7183" stroke-width="4"/><path d="m4.806 559.143139c-.366 0-.664.298-.664.665v2.726c0 23.951 19.485 43.437 43.436 43.437h915.39c23.98 0 43.5-19.513 43.5-43.496v-2.667c0-.367-.3-.665-.67-.665zm958.162 50.828h-915.39c-26.156 0-47.436-21.28-47.436-47.437v-2.726c0-2.573 2.092-4.665 4.664-4.665h1000.992c2.57 0 4.67 2.092 4.67 4.665v2.667c0 26.189-21.31 47.496-47.5 47.496z" fill="#5d7183" stroke="#5d7183" stroke-width="4"/><path d="m392.199 559.157139c1.945 5.65 7.264 9.545 13.429 9.545h199.348c6.165 0 11.484-3.895 13.431-9.545zm212.777 13.545h-199.348c-8.945 0-16.499-6.399-17.964-15.217-.096-.58.068-1.172.448-1.621.38-.448.938-.707 1.526-.707h231.33c.588 0 1.146.259 1.526.707.379.449.543 1.041.447 1.621-1.465 8.818-9.021 15.217-17.965 15.217z" fill="#5d7183"/><path d="m135.091 533.765139h740.427v-440.0749999h-740.427z" fill="#f0f9fc"/><g fill="#fff" transform="translate(134.598 93.589139)"><path d="m-248.247 529.224-54.559-25.391 1146.926-533.775 54.56 25.392z" mask="url(#a)"/><path d="m-81.213 606.961-91.973-42.804 1146.926-533.775 91.98 42.804z" mask="url(#a)"/></g><path d="m137.092 531.765139h736.426v-436.0739999h-736.426zm738.426 4h-740.426c-1.105 0-2-.896-2-2v-440.0739999c0-1.105.895-2 2-2h740.426c1.1 0 2 .895 2 2v440.0739999c0 1.104-.9 2-2 2z" fill="#5d7183"/><path d="m214.729 41.5701391v276.0299999c0 21.688 16.637 39.27 37.159 39.27h199.275 132.293l.17 54.684 82.581-55.054h71.321c22.075 0 40.008-17.82 40.142-39.895.203-33.367.459-76.278.459-81.086 0-24.939 0-169.0099999 0-193.9489999 0-21.688-16.637-39.26999999-37.159-39.26999999h-489.082c-20.522 0-37.159 17.58199999-37.159 39.26999999" fill="#fff"/><path d="m226.535 53.3761391v276.0299999c0 21.688 16.637 39.27 37.159 39.27h199.275 132.292l.171 54.684 82.58-55.055h71.321c22.076 0 40.009-17.819 40.143-39.894.203-33.367.458-76.278.458-81.086 0-24.939 0-169.0099999 0-193.9489999 0-21.688-16.636-39.27-37.158-39.27h-489.082c-20.522 0-37.159 17.582-37.159 39.27" fill="#bbdff5"/><path d="m251.888 4.30013911c-19.387 0-35.159 16.71899999-35.159 37.26999999v276.0299999c0 20.551 15.772 37.27 35.159 37.27h331.567c1.103 0 1.997.892 2 1.994l.159 50.96 79.483-52.988c.328-.22.715-.336 1.109-.336h71.322c20.904 0 38.014-17.005 38.142-37.907.171-28.096.458-75.989.458-81.073v-193.9499999c0-20.551-15.771-37.26999999-35.158-37.26999999zm331.737 409.25399989c-.322 0-.646-.078-.941-.236-.649-.346-1.057-1.022-1.059-1.758l-.164-52.69h-329.573c-21.592 0-39.159-18.513-39.159-41.27v-276.0299999c0-22.756 17.567-41.26999999 39.159-41.26999999h489.082c21.592 0 39.158 18.51399999 39.158 41.26999999v193.9499999c0 5.095-.287 52.997-.458 81.097-.14 23.094-19.046 41.883-42.142 41.883h-70.716l-82.077 54.718c-.335.223-.722.336-1.11.336z" fill="#5d7183"/><path d="m719.529 280.504139h-206.702c-20.71 0-37.5-16.789-37.5-37.5v-23c0-20.71 16.79-37.5 37.5-37.5h206.702c20.711 0 37.5 16.79 37.5 37.5v23c0 20.711-16.789 37.5-37.5 37.5" fill="#fff"/><g fill="#5d7183"><path d="m505.827 177.505139c-19.574 0-35.5 15.925-35.5 35.5v23c0 19.574 15.926 35.5 35.5 35.5h206.702c19.575 0 35.5-15.926 35.5-35.5v-23c0-19.575-15.925-35.5-35.5-35.5zm206.702 98h-206.702c-21.78 0-39.5-17.72-39.5-39.5v-23c0-21.781 17.72-39.5 39.5-39.5h206.702c21.78 0 39.5 17.719 39.5 39.5v23c0 21.78-17.72 39.5-39.5 39.5z"/><path d="m507.337 246.599139c-1.381 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m521.192 240.860139c-.639 0-1.28-.244-1.767-.732l-27.712-27.712c-.976-.976-.976-2.559 0-3.535.976-.977 2.56-.977 3.535 0l27.712 27.711c.976.976.976 2.56 0 3.536-.488.488-1.128.732-1.768.732"/><path d="m526.931 227.005139h-39.189c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.189c1.381 0 2.5 1.119 2.5 2.5 0 1.38-1.119 2.5-2.5 2.5"/><path d="m493.481 240.860139c-.64 0-1.28-.244-1.768-.732-.976-.976-.976-2.56 0-3.536l27.712-27.711c.975-.977 2.559-.977 3.535 0 .976.976.976 2.559 0 3.535l-27.712 27.712c-.487.488-1.128.732-1.767.732"/><path d="m558.02 246.599139c-1.381 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m571.875 240.860139c-.639 0-1.279-.244-1.767-.732l-27.711-27.712c-.977-.976-.977-2.559 0-3.535.975-.977 2.559-.977 3.535 0l27.711 27.711c.976.976.976 2.56 0 3.536-.488.488-1.128.732-1.768.732"/><path d="m577.615 227.005139h-39.19c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.19c1.38 0 2.5 1.119 2.5 2.5 0 1.38-1.12 2.5-2.5 2.5"/><path d="m544.164 240.860139c-.639 0-1.279-.244-1.767-.732-.977-.976-.977-2.56 0-3.536l27.711-27.711c.976-.977 2.558-.977 3.535 0 .976.976.976 2.559 0 3.535l-27.711 27.712c-.488.488-1.128.732-1.768.732"/><path d="m608.703 246.599139c-1.38 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.12-2.5 2.5-2.5 1.381 0 2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m622.559 240.860139c-.64 0-1.279-.244-1.768-.732l-27.711-27.712c-.976-.976-.976-2.559 0-3.535.977-.977 2.559-.977 3.536 0l27.711 27.711c.976.976.976 2.56 0 3.536-.489.488-1.128.732-1.768.732"/><path d="m628.298 227.005139h-39.189c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.189c1.381 0 2.5 1.119 2.5 2.5 0 1.38-1.119 2.5-2.5 2.5"/><path d="m594.848 240.860139c-.64 0-1.279-.244-1.768-.732-.976-.976-.976-2.56 0-3.536l27.711-27.711c.977-.977 2.559-.977 3.536 0 .976.976.976 2.559 0 3.535l-27.711 27.712c-.489.488-1.128.732-1.768.732"/><path d="m660.336 246.599139c-1.381 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m674.192 240.860139c-.64 0-1.28-.244-1.768-.732l-27.711-27.712c-.976-.976-.976-2.559 0-3.535.977-.977 2.559-.977 3.535 0l27.711 27.711c.977.976.977 2.56 0 3.536-.488.488-1.128.732-1.767.732"/><path d="m679.931 227.005139h-39.189c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.189c1.381 0 2.5 1.119 2.5 2.5 0 1.38-1.119 2.5-2.5 2.5"/><path d="m646.481 240.860139c-.64 0-1.279-.244-1.768-.732-.976-.976-.976-2.56 0-3.536l27.711-27.711c.977-.977 2.559-.977 3.535 0 .977.976.977 2.559 0 3.535l-27.711 27.712c-.488.488-1.128.732-1.767.732"/><path d="m711.02 246.599139c-1.381 0-2.5-1.119-2.5-2.5v-39.189c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v39.189c0 1.381-1.119 2.5-2.5 2.5"/><path d="m724.875 240.860139c-.639 0-1.279-.244-1.767-.732l-27.711-27.712c-.977-.976-.977-2.559 0-3.535.976-.977 2.558-.977 3.535 0l27.711 27.711c.976.976.976 2.56 0 3.536-.488.488-1.128.732-1.768.732"/><path d="m730.615 227.005139h-39.19c-1.381 0-2.5-1.12-2.5-2.5 0-1.381 1.119-2.5 2.5-2.5h39.19c1.38 0 2.5 1.119 2.5 2.5 0 1.38-1.12 2.5-2.5 2.5"/><path d="m697.164 240.860139c-.639 0-1.279-.244-1.767-.732-.977-.976-.977-2.56 0-3.536l27.711-27.711c.976-.977 2.558-.977 3.535 0 .976.976.976 2.559 0 3.535l-27.711 27.712c-.488.488-1.128.732-1.768.732"/></g><path d="m573.007 445.492139c0-36.922-29.931-66.854-66.854-66.854-36.922 0-66.854 29.932-66.854 66.854s29.932 66.854 66.854 66.854c36.923 0 66.854-29.932 66.854-66.854" fill="#fff"/><path d="m579.897 452.382139c0-36.923-29.932-66.854-66.854-66.854-36.923 0-66.854 29.931-66.854 66.854 0 36.922 29.931 66.853 66.854 66.853 36.922 0 66.854-29.931 66.854-66.853" fill="#bbf9bc"/><path d="m506.153 380.638139c-35.761 0-64.854 29.094-64.854 64.854 0 35.761 29.093 64.854 64.854 64.854s64.854-29.093 64.854-64.854c0-35.76-29.093-64.854-64.854-64.854zm0 133.708c-37.966 0-68.854-30.888-68.854-68.854s30.888-68.854 68.854-68.854 68.854 30.888 68.854 68.854-30.888 68.854-68.854 68.854z" fill="#5d7183"/><path d="m502.421 467.136139c-.575 0-1.15-.219-1.589-.658l-20.212-20.211c-.878-.878-.878-2.3 0-3.178.878-.877 2.3-.877 3.178 0l18.623 18.622 37.55-37.55c.878-.878 2.3-.878 3.178 0 .877.878.877 2.3 0 3.178l-39.139 39.139c-.439.439-1.014.658-1.589.658" fill="#fff"/><path d="m361.791 243.202139 10.386 40.92c.691 2.722-1.366 5.367-4.175 5.367h-37.365c-2.808 0-4.865-2.645-4.174-5.367l10.386-40.92c.463-1.823-.316-3.729-1.914-4.721-5.966-3.703-9.834-9.649-9.834-16.355 0-11.229 10.843-20.331 24.219-20.331s24.219 9.102 24.219 20.331c0 6.706-3.869 12.652-9.834 16.355-1.598.992-2.377 2.898-1.914 4.721zm67.926-74.086h-3.274c-1.854 0-128.054 0-128.054 0-2.675 0-4.867-2.157-4.87-4.833 0-.03 0-.06 0-.091 0-41.403 25.555-76.3829999 55.801-76.3829999 28.537 0 52.092 28.7339999 54.753 67.0289999l17.824-.046c-2.3-47.682-33.581-80.5729999-72.577-80.5729999-40.544 0-72.304 39.5229999-72.304 89.9729999v.052c.002 2.682-2.137 4.872-4.819 4.872h-3.275c-2.689 0-4.87 2.18-4.87 4.87v123c0 2.689 2.181 4.869 4.87 4.869h160.795c2.69 0 4.87-2.18 4.87-4.869v-123c0-2.69-2.18-4.87-4.87-4.87z" fill="#fff"/><g fill="#5d7183"><path d="m343.532 198.007139c-12.252 0-22.22 8.223-22.22 18.331 0 5.807 3.24 11.148 8.889 14.655 2.353 1.46 3.477 4.238 2.798 6.913l-10.386 40.92c-.177.695-.025 1.418.415 1.984s1.104.89 1.821.89h37.365c.717 0 1.381-.324 1.821-.89s.591-1.289.415-1.984l-10.386-40.921c-.679-2.674.446-5.452 2.798-6.912 5.649-3.507 8.889-8.848 8.889-14.655 0-10.108-9.967-18.331-22.219-18.331zm18.682 87.693h-37.365c-1.96 0-3.775-.887-4.979-2.434-1.203-1.548-1.617-3.525-1.134-5.425l10.386-40.919c.248-.977-.166-1.994-1.03-2.53-6.75-4.19-10.78-10.939-10.78-18.054 0-12.313 11.762-22.331 26.22-22.331 14.457 0 26.219 10.018 26.219 22.331 0 7.114-4.03 13.864-10.78 18.054-.864.536-1.278 1.552-1.03 2.53l10.386 40.919c.482 1.901.068 3.878-1.135 5.425s-3.018 2.434-4.978 2.434zm-99.08-120.373c-1.583 0-2.87 1.287-2.87 2.87v123c0 1.583 1.287 2.87 2.87 2.87h160.795c1.582 0 2.87-1.287 2.87-2.87v-123c0-1.583-1.288-2.87-2.87-2.87h-131.328c-3.784 0-6.867-3.064-6.871-6.83 0-42.581 26.47-78.4759999 57.801-78.4759999 29.151 0 53.242 28.6839999 56.602 67.0239999l13.857-.036c-2.993-44.5-32.356-76.5779999-70.459-76.5779999-39.423 0-70.304 38.6419999-70.304 87.9729999.002 1.896-.712 3.63-2.011 4.93-1.284 1.285-2.991 1.993-4.808 1.993zm160.795 132.74h-160.795c-3.788 0-6.87-3.082-6.87-6.87v-123c0-3.788 3.082-6.87 6.87-6.87h3.274c.748 0 1.45-.291 1.978-.82.543-.543.842-1.271.841-2.05 0-51.627 32.638-92.0259999 74.304-92.0259999 40.907 0 72.27 34.6859999 74.575 82.4759999.026.546-.172 1.078-.548 1.474-.377.396-.898.621-1.444.623l-17.824.045c-.002 0-.004 0-.005 0-1.051 0-1.923-.813-1.996-1.861-2.581-37.151-25.262-65.1669999-52.758-65.1669999-29.163 0-53.801 34.0629999-53.801 74.3829999.002 1.652 1.29 2.923 2.871 2.923h131.328c3.788 0 6.87 3.082 6.87 6.87v123c0 3.788-3.082 6.87-6.87 6.87z"/><path d="m425.835 139.960139c-.43 0-.864-.139-1.23-.424-.87-.679-1.025-1.936-.345-2.807 4.729-6.058 6.647-13.93 5.005-20.543-.266-1.072.387-2.157 1.459-2.423 1.071-.268 2.157.387 2.423 1.459 1.961 7.897-.183 16.857-5.734 23.969-.395.504-.983.769-1.578.769"/><path d="m428.498 147.227139c-.624 0-1.239-.292-1.629-.839-.642-.899-.433-2.148.467-2.79l1.757-1.257c6.584-4.721 13.393-9.602 21.24-12.248 1.049-.356 2.181.21 2.534 1.256.353 1.047-.209 2.182-1.256 2.534-7.281 2.456-13.842 7.16-20.188 11.708l-1.765 1.264c-.352.251-.758.372-1.16.372"/><path d="m455.247 156.801139c-.26 0-.525-.051-.781-.159-6.043-2.568-15.312-5.3-25.147-3.729-1.092.176-2.117-.569-2.291-1.659-.174-1.091.569-2.117 1.66-2.291 10.773-1.72 20.816 1.224 27.343 3.997 1.016.432 1.49 1.607 1.058 2.623-.324.761-1.063 1.218-1.842 1.218"/><path d="m492.21 119.328139c.665.15 1.484.2 2.609.2 4.145 0 6.703-2.05 6.703-5.5 0-3.1-2.2-4.95-6.089-4.95-1.585 0-2.66.15-3.223.3zm-7.725-15.301c2.404-.399 5.781-.7 10.539-.7 4.809 0 8.237.9 10.539 2.7 2.201 1.701 3.684 4.501 3.684 7.801s-1.125 6.1-3.172 8c-2.66 2.45-6.6 3.551-11.205 3.551-1.022 0-1.944-.05-2.66-.15v12.05h-7.725z"/><path d="m527.923 122.928139-2.149-7.15c-.613-2-1.228-4.5-1.739-6.501h-.103c-.511 2.001-1.023 4.551-1.585 6.501l-2.047 7.15zm-8.749 5.701-2.455 8.65h-8.084l10.539-33.702h10.233l10.693 33.702h-8.391l-2.66-8.65z"/><path d="m544.961 129.429139c2.098 1.05 5.322 2.1 8.648 2.1 3.581 0 5.474-1.45 5.474-3.65 0-2.1-1.637-3.3-5.782-4.75-5.73-1.951-9.465-5.051-9.465-9.951 0-5.751 4.911-10.151 13.047-10.151 3.888 0 6.753.8 8.8 1.701l-1.739 6.15c-1.382-.65-3.838-1.601-7.214-1.601-3.377 0-5.015 1.501-5.015 3.251 0 2.15 1.945 3.1 6.396 4.75 6.089 2.2 8.953 5.301 8.953 10.051 0 5.65-4.451 10.45-13.916 10.45-3.94 0-7.828-1-9.773-2.05z"/><path d="m572.591 129.429139c2.098 1.05 5.32 2.1 8.647 2.1 3.581 0 5.474-1.45 5.474-3.65 0-2.1-1.637-3.3-5.782-4.75-5.729-1.951-9.465-5.051-9.465-9.951 0-5.751 4.912-10.151 13.047-10.151 3.888 0 6.753.8 8.8 1.701l-1.739 6.15c-1.382-.65-3.838-1.601-7.214-1.601-3.377 0-5.015 1.501-5.015 3.251 0 2.15 1.944 3.1 6.396 4.75 6.088 2.2 8.953 5.301 8.953 10.051 0 5.65-4.451 10.45-13.916 10.45-3.94 0-7.828-1-9.772-2.05z"/><path d="m605.54 137.279139-8.185-33.702h8.34l2.608 13.901c.768 4.001 1.484 8.351 2.047 11.751h.102c.563-3.65 1.381-7.701 2.251-11.851l2.916-13.801h8.29l2.762 14.201c.768 3.951 1.33 7.551 1.842 11.301h.103c.51-3.75 1.278-7.7 1.995-11.701l2.813-13.801h7.931l-8.903 33.702h-8.442l-2.916-14.501c-.665-3.399-1.227-6.55-1.637-10.4h-.102c-.614 3.8-1.177 7.001-1.995 10.4l-3.275 14.501z"/><path d="m651.641 120.528139c0 6.601 3.172 11.251 8.391 11.251 5.269 0 8.288-4.9 8.288-11.451 0-6.05-2.968-11.25-8.34-11.25-5.27 0-8.339 4.9-8.339 11.45zm24.916-.45c0 11.051-6.856 17.751-16.935 17.751-10.233 0-16.218-7.55-16.218-17.151 0-10.1 6.599-17.651 16.781-17.651 10.591 0 16.372 7.751 16.372 17.051z"/><path d="m689.401 118.528139h3.069c3.889 0 6.191-1.9 6.191-4.85 0-3.1-2.149-4.651-5.73-4.7-1.894 0-2.968.15-3.53.25zm-7.726-14.501c2.507-.399 6.241-.7 10.386-.7 5.116 0 8.697.75 11.153 2.651 2.047 1.6 3.172 3.95 3.172 7.05 0 4.3-3.12 7.25-6.088 8.3v.151c2.404.949 3.735 3.2 4.605 6.3 1.074 3.8 2.149 8.2 2.814 9.5h-7.981c-.564-.95-1.382-3.7-2.406-7.85-.92-4.2-2.404-5.35-5.576-5.401h-2.353v13.251h-7.726z"/><path d="m719.843 131.529139c.665.15 1.739.15 2.711.15 7.061.05 11.665-3.75 11.665-11.8.052-7.001-4.143-10.701-10.847-10.701-1.739 0-2.864.15-3.529.3zm-7.828-27.502c2.865-.45 6.6-.7 10.539-.7 6.549 0 10.796 1.151 14.121 3.6 3.581 2.601 5.833 6.751 5.833 12.702 0 6.45-2.405 10.9-5.73 13.65-3.633 2.95-9.159 4.351-15.912 4.351-4.042 0-6.907-.25-8.851-.5z"/></g></g></svg>
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
                <svg width=84 height=74 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="#1ea6ff" class="fa-primary" d="M390.6 185.4C403.1 197.9 403.1 218.1 390.6 230.6L278.6 342.6C266.1 355.1 245.9 355.1 233.4 342.6L121.4 230.6C108.9 218.1 108.9 197.9 121.4 185.4C133.9 172.9 154.1 172.9 166.6 185.4L223.1 242.7V32C223.1 14.33 238.3 0 255.1 0C273.7 0 288 14.33 288 32V242.7L345.4 185.4C357.9 172.9 378.1 172.9 390.6 185.4H390.6z"/><path fill="#1ea6ff" class="fa-secondary" d="M480 224C497.7 224 512 238.3 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 238.3 14.33 224 32 224C49.67 224 64 238.3 64 256C64 362 149.1 448 256 448C362 448 448 362 448 256C448 238.3 462.3 224 480 224z"/></svg>
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
            <div class="col-lg-3 col-md-6">
              <div class="counter">
                <div class="counter-icon">
                  <svg width=70 height=50 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="#fff" class="fa-primary" d="M256.1 279L296 318.1V184C296 170.7 306.7 160 320 160C333.3 160 344 170.7 344 184V318.1L383 279C392.4 269.7 407.6 269.7 416.1 279C426.3 288.4 426.3 303.6 416.1 312.1L336.1 392.1C327.6 402.3 312.4 402.3 303 392.1L223 312.1C213.7 303.6 213.7 288.4 223 279C232.4 269.7 247.6 269.7 256.1 279V279z"/><path fill="#fff" class="fa-secondary" d="M144 480C64.47 480 0 415.5 0 336C0 273.2 40.17 219.8 96.2 200.1C96.07 197.4 96 194.7 96 192C96 103.6 167.6 32 256 32C315.3 32 367 64.25 394.7 112.2C409.9 101.1 428.3 96 448 96C501 96 544 138.1 544 192C544 204.2 541.7 215.8 537.6 226.6C596 238.4 640 290.1 640 352C640 422.7 582.7 480 512 480H144zM303 392.1C312.4 402.3 327.6 402.3 336.1 392.1L416.1 312.1C426.3 303.6 426.3 288.4 416.1 279C407.6 269.7 392.4 269.7 383 279L344 318.1V184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184V318.1L256.1 279C247.6 269.7 232.4 269.7 223 279C213.7 288.4 213.7 303.6 223 312.1L303 392.1z"/></svg>
                </div>
                <div class="counter-content">
                  <h3>Downloads</h3>
                  <span class="counter-value" data-counter="1387">1387</span>
                </div>
              </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-3 col-md-6">
              <div class="counter blue">
                <div class="counter-icon">
                  <svg width=70 height=50 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="#fff" class="fa-primary" d="M223 296.1C213.7 287.6 213.7 272.4 223 263L303 183C312.4 173.7 327.6 173.7 336.1 183L416.1 263C426.3 272.4 426.3 287.6 416.1 296.1C407.6 306.3 392.4 306.3 383 296.1L344 257.9V392C344 405.3 333.3 416 320 416C306.7 416 296 405.3 296 392V257.9L256.1 296.1C247.6 306.3 232.4 306.3 223 296.1V296.1z"/><path fill="#fff" class="fa-secondary" d="M144 480C64.47 480 0 415.5 0 336C0 273.2 40.17 219.8 96.2 200.1C96.07 197.4 96 194.7 96 192C96 103.6 167.6 32 256 32C315.3 32 367 64.25 394.7 112.2C409.9 101.1 428.3 96 448 96C501 96 544 138.1 544 192C544 204.2 541.7 215.8 537.6 226.6C596 238.4 640 290.1 640 352C640 422.7 582.7 480 512 480H144zM223 263C213.7 272.4 213.7 287.6 223 296.1C232.4 306.3 247.6 306.3 256.1 296.1L296 257.9V392C296 405.3 306.7 416 320 416C333.3 416 344 405.3 344 392V257.9L383 296.1C392.4 306.3 407.6 306.3 416.1 296.1C426.3 287.6 426.3 272.4 416.1 263L336.1 183C327.6 173.7 312.4 173.7 303 183L223 263z"/></svg>
                </div>
                <div class="counter-content">
                  <h3>Uploads</h3>
                  <span class="counter-value" data-counter="1310">1310</span>
                </div>
              </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-3 col-md-6 mtop-fix">
              <div class="counter">
                <div class="counter-icon">
                  <svg width=70 height=50 clip-rule="evenodd" fill-rule="evenodd" height="512" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 48 48" width="512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="_Linear1" gradientTransform="matrix(48 48 -48 48 360 648)" gradientUnits="userSpaceOnUse" x1="0" x2="1" y1="0" y2="0"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#fff"/></linearGradient><g transform="translate(-360 -648)"><g id="SOLID-GRADIENT"><path d="m379.391 671.082c-.13-.055-.271-.081-.412-.077-6.457.179-11.892 4.953-12.873 11.373-.001.006-.002.012-.003.019-.413 3.091-.391 6.282-.202 9.266v.003c.087 1.312 1.177 2.332 2.492 2.332 5.505.002 25.708.002 31.214.002 1.316 0 2.407-1.021 2.494-2.334 0-.001 0-.003.001-.004.186-2.988.207-6.185-.256-9.274 0-.001 0-.002 0-.003-.983-6.436-6.459-11.212-12.944-11.335-.135-.002-.27.023-.395.074-1.391.565-2.913.876-4.507.876-1.632 0-3.189-.326-4.609-.918zm4.609-21.082c-5.519 0-10 4.481-10 10s4.481 10 10 10 10-4.481 10-10-4.481-10-10-10z" fill="url(#_Linear1)"/></g></g></svg>
                </div>
                <div class="counter-content">
                  <h3>Unique users</h3>
                  <span class="counter-value" data-counter="1387">1387</span>
                </div>
              </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-3 col-md-6 mtop-fix">
              <div class="counter blue">
                <div class="counter-icon">
                  <svg width=70 height=50 clip-rule="evenodd" fill-rule="evenodd" height="512" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 48 48" width="512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="_Linear1" gradientTransform="matrix(48 48 -48 48 432 576)" gradientUnits="userSpaceOnUse" x1="0" x2="1" y1="0" y2="0"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#fff"/></linearGradient><g transform="translate(-432 -576)"><g id="SOLID-GRADIENT"><path d="m436 597.95v4.1c-1.141.232-2 1.24-2 2.45v9c0 1.381 1.119 2.5 2.5 2.5h39c1.381 0 2.5-1.119 2.5-2.5v-9c0-1.21-.859-2.218-2-2.45v-4.1c1.141-.232 2-1.24 2-2.45v-9c0-1.381-1.119-2.5-2.5-2.5h-39c-1.381 0-2.5 1.119-2.5 2.5v9c0 1.21.859 2.218 2 2.45zm35 8.05c-1.656 0-3 1.344-3 3s1.344 3 3 3 3-1.344 3-3-1.344-3-3-3zm-8 0c-1.656 0-3 1.344-3 3s1.344 3 3 3 3-1.344 3-3-1.344-3-3-3zm8 2c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm-8 0c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm-23 2h16c.552 0 1-.448 1-1s-.448-1-1-1h-16c-.552 0-1 .448-1 1s.448 1 1 1zm-2-8h36v-4h-36zm33-14c-1.656 0-3 1.344-3 3s1.344 3 3 3 3-1.344 3-3-1.344-3-3-3zm-8 0c-1.656 0-3 1.344-3 3s1.344 3 3 3 3-1.344 3-3-1.344-3-3-3zm8 2c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm-8 0c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm-23 2h16c.552 0 1-.448 1-1s-.448-1-1-1h-16c-.552 0-1 .448-1 1s.448 1 1 1z" fill="url(#_Linear1)"/></g></g></svg>
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
            <svg class="file-fa-small-icon-close-it" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#fff" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
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
                          >
                          <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">">
                            <linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                            <stop offset="0%"  />
                            <stop offset="100%"/>
                          </linearGradient>
                          <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
                      
                      </a>
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
                      <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">  <linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                        <stop offset="0%"  />
                        <stop offset="100%"/>
                      </linearGradient><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/></svg>
                    </div>
                  </div>
                  <!-- /.history__list -->

                  <div class="history__list">
                    <div class="history-info">
                      <div class="company-logo">
                        <a href="#"
                          >
                          
                          <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">"><linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                            <stop offset="0%"  />
                            <stop offset="100%"/>
                          </linearGradient><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
                          
                          </a
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
                      <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">  <linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                        <stop offset="0%"  />
                        <stop offset="100%"/>
                      </linearGradient><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/></svg>
                    </div>
                  </div>
                  <!-- /.history__list -->

                  <div class="history__list">
                    <div class="history-info">
                      <div class="company-logo">
                        <a href="#"
                          >
                          <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">"><linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                            <stop offset="0%"  />
                            <stop offset="100%"/>
                          </linearGradient><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
                          
                          </a
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
                      <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">  <linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                        <stop offset="0%"  />
                        <stop offset="100%"/>
                      </linearGradient><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/></svg>
                    </div>
                  </div>
                  <!-- /.history__list -->

                  <div class="history__list">
                    <div class="history-info">
                      <div class="company-logo">
                        <a href="#"
                          >
                          <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">"><linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                            <stop offset="0%"  />
                            <stop offset="100%"/>
                          </linearGradient><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
                          </a
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
                      <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">  <linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                        <stop offset="0%"  />
                        <stop offset="100%"/>
                      </linearGradient><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/></svg>
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
            <svg class="file-fa-small-icon-close-it" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#fff" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
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
            <svg class="file-fa-small-icon-close-it" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#fff" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
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
            <svg class="file-fa-small-icon-close-it" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#fff" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
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
                    
                      <span>
                        <svg class="file-fa-check-icon"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337l-17 17-17-17-64 -64-17-17L160 222.1l17 17 47 47L335 175l17-17L385.9 192l-17 17z"/></svg>

                      </span>
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
                      <span>
                        <svg class="file-fa-check-icon"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337l-17 17-17-17-64 -64-17-17L160 222.1l17 17 47 47L335 175l17-17L385.9 192l-17 17z"/></svg>
                      </span>
                      <span>Expiry Date</span>
                    </a>
                  </li>


                  <!-- 6 -->
                  <li class="nav-item">
                    <a
                      class="nav-link nav-with-icon hiddenmobile"
                      id="expireSetting-tab"
                      data-toggle="tab"
                      href="#expireSetting"
                      role="tab"
                      aria-controls="expireSetting"
                      aria-selected="false"
                    >
                      <span>
                        <svg class="file-fa-check-icon"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337l-17 17-17-17-64 -64-17-17L160 222.1l17 17 47 47L335 175l17-17L385.9 192l-17 17z"/></svg>
                      </span>
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
                                >
                                
                                <svg class="file-fa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">"><linearGradient id="lgrad-two" x1="100%" y1="100%" x2="0%" y2="0%" >
                                  <stop offset="0%"  />
                                  <stop offset="100%"/>
                                </linearGradient><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
                            
                            </a>
                            </div>
                            <div class="info">
                              <h4 class="history-title">
                                <a href="#">ava.png</a>
                              </h4>
                            </div>
                          </div>

                          <div class="history-time file-size">
                            <span>8mb</span>
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
                          <svg class="file-fa-small-icon-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
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
            <svg class="file-fa-small-icon-close-it" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#fff" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
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
                  <svg class="file-fa-medium-refresh" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"/></svg>
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
        <div class="footer-item">
          <img class="footer-icon-img" src="/img/uploadbiz_icon.svg" alt="">
          <img class="footer-icon-logo" src="./img/logo_small.svg" alt="">
        </div>

       

        

        <ul class="footer-item">
          <li class="footer-list-item footer-title">Contact</li>
          <li class="footer-list-item">Email: info@dns.io</li>
          <li class="footer-list-item">Twitter: @whatsmydns</li>
          <li class="footer-list-item">Legal</li>
          <li class="footer-list-item">Privacy Policy</li>
        </ul>
      </div>

      <!-- <div style="margin: 0 auto">
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
      </div> -->
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
              message: `<div><svg class="file-fa-small-icon-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg> <p>${files[i].name} has been added to your upload queue</p></div>`,
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
              message: `<div><svg class="file-fa-small-icon-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg> <p>${this.files[i].name} has been added to your upload queue</p></div>`,
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
    <script src="./js/tab.js?v=1243233.332322532223.4344224222221.2422531"></script>
  </body>
</html>
