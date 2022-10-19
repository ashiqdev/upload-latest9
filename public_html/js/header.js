// var slider = tns({
//   container: '.my-slider',
//   items: 3,
//   slideBy: 'page',
//   autoplay: true
// });

$(function() {
  $('#action').click(function() {
    $('.fileIcon').css('opacity', '1');
    $('.fileIcon-wrapper').addClass('open');
    setTimeout(() => {
      $('.main-icon').css('opacity', '0');
    }, 900)
    

  });
})

$(document).ready(function () {
  if ($(window).width() <= 767) { 
    $('.content-slider').slick({
      dots: true,
  
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
  
  
      customPaging: function (slider, i) {
        var slidernav = $(slider.$slides[i]).data('slidernav');
        console.log({ slidernav });
  
        return '<a><img src=' + slidernav + '></a>';
      },
    });
  } else {
    $('.content-slider').slick({
      dots: true,
  
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      draggable: false,
      swipe: false,
      swipeToSlide: false,
      touchMove: false,
      draggable: false,
      accessibility: false,
      arrows: false,
  
      customPaging: function (slider, i) {
        var slidernav = $(slider.$slides[i]).data('slidernav');
        console.log({ slidernav });
  
        return '<a><img src=' + slidernav + '></a>';
      },
    });
  }
 

  // slider.slick("slickSetOption", "touchMove", false);
});


$('.video-cap-icon-wrapper').click(function() {
  console.log('hello');
  $('.video-cap-icon-wrapper').hide();
  $('.video-cap-click-wrapper').show();

})

$('.button-group.toggle-button-group > div').click(function () {
  console.log('clicked');
  $('.button-group > div.active').not(this).removeClass('active');
  $(this).addClass('active');
});

// $('.mic-btn').click(function () {
//   console.log('mic btn clicked');
//   $('.upload-border-file').css('display', 'block').animate(
//     {
//       opacity: 0,
//       right: '400px',
//     },
//     1200,
//     'linear',
//     function () {
//       $(this).remove();
//     }
//   );

//   const dropArea = document.querySelector('.drop-area');
//   console.log({ dropArea });

//   $('#mic_content').appendTo(dropArea).addClass('fadeInRightModified').css('opacity', '1');
// });

// $('#inbox-card-demo').animate(
//   {
//     opacity: 0, // animate slideUp
//     left: '200px',
//   },
//   'slow',
//   'linear',
//   function () {
//     $(this).remove();
//     $('.inbox-card-wrapper').addClass('fadeInUpmodified');
//   }
// );

$('.nav--item').click(function () {
  var val = $(this).attr('data-tab-target');
  console.log(val);

  $('.nav--item').removeClass('-is--active');
  $(this).addClass('-is--active');

  $('.tabset--content').attr('data-active-tab', val);
});

function counter() {
  var options = {
    useEasing: true,
    useGrouping: true,
    separator: ',',
    decimal: '.',
    prefix: '',
    suffix: '',
  };

  var counteEl = $('[data-counter]');

  if (counteEl) {
    counteEl.each(function () {
      var val = $(this).data('counter');

      var countup = new CountUp(this, 0, val, 0, 2.5, options);
      $(this).appear(
        function () {
          countup.start();
        },
        {
          accX: 0,
          accY: 0,
        }
      );
    });
  }
}

counter();

(function ($, window, document) {
  'use strict';
  $(window).on('scroll load', function () {
    if ($(this).scrollTop() >= 30) {
      if ($('.site-header.header_trans-fixed').length) {
        $('.site-header.header_trans-fixed')
          .not('.fixed-dark')
          .addClass('pix-header-fixed');
        $('.fixed-dark').addClass('bg-fixed-dark');
        $('.sticky-logo, .header-button-scroll').show();
        $('.main-logo, .header-button-default').hide();
        $('.sticky-logo').attr('src', '../img/logo_small.png');
        // $('bar').addClass('red');
      }
      if ($('.right-menu.modern').length) {
        $('.right-menu.modern')
          .closest('.fixed-header')
          .addClass('fixed-header-scroll');
      }
    } else {
      if ($('.site-header.header_trans-fixed').length) {
        $('.site-header.header_trans-fixed')
          .not('.fixed-dark')
          .removeClass('pix-header-fixed');
        $('.fixed-dark').removeClass('bg-fixed-dark');
        $('.sticky-logo, .header-button-scroll').hide();
        $('.main-logo, .header-button-default').show();
      }
      if ($('.right-menu.modern').length) {
        $('.right-menu.modern')
          .closest('.fixed-header')
          .removeClass('fixed-header-scroll');
      }
    }
  });

  if ($(window).width() >= $('.menu-wrapper').data('top')) {
    $('.site-main-menu li:not(.menu-item-has-children) > a[href^="#"]').on(
      'click',
      function (e) {
        e.preventDefault();
        var elem = $(this).attr('href');
        if ($(elem).length) {
          $('html,body').animate(
            {
              scrollTop:
                $(elem).offset().top -
                $('.header_trans-fixed').outerHeight() -
                $('#wpadminbar').outerHeight(),
            },
            'slow'
          );
        }
      }
    );
  }
  $('.open-search').on('click', function () {
    $('body').css('overflow', 'hidden');
    $('.site-search').addClass('open');
  });
  $('.close-search').on('click', function () {
    $('body').css('overflow', '');
    $('.site-search').removeClass('open');
  });

  $('.toggle-menu').on('click', function (e) {
    e.preventDefault();
    var mask = '<div class="mask-overlay">';
    $(mask).hide().appendTo('body').fadeIn('fast');
    $('html')
      .addClass('no-scroll sidebar-open')
      .height(window.innerHeight + 'px');
    if ($('#wpadminbar').length) {
      $('.sidebar-open .site-nav').css('top', '46px');
    } else {
      $('.sidebar-open .site-nav').css('top', '0');
    }
  });

  $('.close-menu, .mask-overlay').on('click', function (e) {
    e.preventDefault();

    $('html').removeClass('no-scroll sidebar-open').height('auto');
    $('.mask-overlay').remove();
  });

  function toggleAsideMenu() {
    $('.aside-nav').on('click', function () {
      $('.aside-menu').toggleClass('active-menu');
      $('.site-header').toggleClass('active-menu');
      return false;
    });
    $('.menu-wrapper:not(.unit) .menu-item-has-children > a').on(
      'click',
      function (e) {
        e.preventDefault();
      }
    );
    var dataTop = $('.menu-wrapper').data('top');
    if (window.outerWidth >= dataTop) {
      $('.menu-wrapper').on('click', function (e) {
        if (!e.target.closest('.aside-menu')) {
          $('.sub-menu-open').slideUp(250);
        }
      });
      $('.aside-menu .menu-item-has-children a').addClass('hide-drop');
      $('.aside-menu .menu-item a').on('click', function () {
        if ($(this).parent().hasClass('menu-item-has-children')) {
          if ($(this).hasClass('hide-drop')) {
            if ($(this).closest('.sub-menu').length) {
              $(this)
                .removeClass('hide-drop')
                .next('.sub-menu')
                .slideDown(250)
                .removeClass('sub-menu-open');
              $(this)
                .parent()
                .siblings()
                .find('.sub-menu')
                .slideUp(250)
                .addClass('sub-menu-open');
            } else {
              $('.menu-item-has-children a')
                .addClass('hide-drop')
                .next('.sub-menu')
                .hide(250)
                .removeClass('sub-menu-open');
              $(this)
                .removeClass('hide-drop')
                .next('.sub-menu')
                .slideToggle(250)
                .toggleClass('sub-menu-open');
            }
          } else {
            $(this)
              .addClass('hide-drop')
              .next('.sub-menu')
              .hide(250)
              .find('.menu-item-has-children a')
              .addClass('hide-drop')
              .next('.sub-menu')
              .hide(250);
            $(this).next('.sub-menu').removeClass('sub-menu-open');
          }
        }
      });
    } else {
      $('.menu-item-has-children a').removeClass('hide-drop');
    }
    if ($('.aside-fix').length && $(window).width() > dataTop) {
      var logoWidth = $('.logo span, .logo img').outerWidth();
      $('.logo').css('top', logoWidth + 'px');
    }
  }

  function fixedMobileMenu() {
    var headerHeight = $('.site-header')
      .not('.header_trans-fixed')
      .outerHeight();
    var offsetTop;
    var dataTop = $('.menu-wrapper').data('top');
    var adminbarHeight = $('#wpadminbar').outerHeight();
    if ($('#wpadminbar').length) {
      offsetTop = adminbarHeight + headerHeight;
      $('.site-header').css('margin-top', adminbarHeight);
    } else {
      offsetTop = headerHeight;
    }
    if ($(window).width() < dataTop) {
      $('.menu-wrapper').css('padding-top', offsetTop + 'px');
    } else {
      if (
        $('#wpadminbar').length &&
        $('.site-header').hasClass('header_trans-fixed')
      ) {
        $('.menu-wrapper').css('padding-top', adminbarHeight + 'px');
      } else {
        $('.menu-wrapper').css('padding-top', '0');
      }
    }
    if ($('#wpadminbar').length && $(window).width() < 768) {
      $('#wpadminbar').css({
        position: 'fixed',
        top: '0',
      });
    }
  }

  function menuArrows() {
    var mobW = $('.menu-wrapper').attr('data-top');
    if (
      window.outerWidth < mobW ||
      $('.site-header').hasClass('topmenu-arrow')
    ) {
      if (!$('.menu-item-has-children i').length) {
        $('header .menu-item-has-children').append(
          '<i class="fa fa-angle-down"></i>'
        );
        $('header .menu-item-has-children i').addClass('hide-drop');
      }
      $('header .menu-item-has-children i').on('click', function () {
        if (!$(this).hasClass('animation')) {
          $(this).parent().toggleClass('is-open');
          $(this).addClass('animation');
          $(this)
            .parent()
            .siblings()
            .removeClass('is-open')
            .find('.fa')
            .removeClass('hide-drop')
            .prev('.sub-menu')
            .slideUp(250);
          if ($(this).hasClass('hide-drop')) {
            if ($(this).closest('.sub-menu').length) {
              $(this)
                .removeClass('hide-drop')
                .prev('.sub-menu')
                .slideToggle(250);
            } else {
              $('.menu-item-has-children i')
                .addClass('hide-drop')
                .next('.sub-menu')
                .hide(250);
              $(this)
                .removeClass('hide-drop')
                .prev('.sub-menu')
                .slideToggle(250);
            }
          } else {
            $(this)
              .addClass('hide-drop')
              .prev('.sub-menu')
              .hide(100)
              .find('.menu-item-has-children a')
              .addClass('hide-drop')
              .prev('.sub-menu')
              .hide(250);
          }
        }
        setTimeout(removeClass, 250);

        function removeClass() {
          $('header .site-main-menu i').removeClass('animation');
        }
      });
    } else {
      $('header .menu-item-has-children i').remove();
    }
  }
  $('.search-icon-wrapper.ico-style .close-search').on('click', function () {
    $(this).parent().toggleClass('is-active');
    if ($(this).parent().hasClass('is-active')) {
      setTimeout(function () {
        $('.search-icon-wrapper.ico-style .search-field').focus();
      }, 300);
    }
  });
  $(document).on('click', function (e) {
    if (!$(e.target).closest('.search-icon-wrapper.ico-style').length) {
      $('.ico-style .close-search').parent().removeClass('is-active');
    }
    e.stopPropagation();
  });

  function calcOffsetMenu() {
    var offsetAdditionalMenu = $('#wpadminbar').length
      ? $('#wpadminbar').outerHeight()
      : 0;
    $('.additional-inner-wrap').css('top', offsetAdditionalMenu + 'px');
  }
  $('.additional-nav').on('click', function (e) {
    e.preventDefault();
    $('.additional-menu-wrapper').addClass('menu-open');
    $('.menu-wrapper').addClass('additional-menu-open');
  });
  $('.additional-nav-close, .additional-menu-overlay').on('click', function () {
    $('.additional-menu-wrapper').removeClass('menu-open');
    $('.menu-wrapper').removeClass('additional-menu-open');
  });
  $(window).on('load', function () {
    toggleAsideMenu();
  });
  $(window).on('scroll', function () {});
  $(window).on('load resize', function () {
    fixedMobileMenu();
    menuArrows();
    calcOffsetMenu();
  });
  window.addEventListener('orientationchange', function () {
    calcOffsetMenu();
    fixedMobileMenu();
    menuArrows();
  });
})(jQuery, window, document);

// datepicker

// $(function () {
//   $('#datepicker').datepicker();

//   $('#datepicker').on('changeDate', function (e) {
//     $(this).datepicker('hide');
//   });

//   if (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
//     $('.upper-wrapper').css('overflow', 'visible');
//   }
// });

if ($('#datepicker').length) {
  if (/Mobi/.test(navigator.userAgent)) {
    // if mobile device, use native pickers
    $('.date input').attr('type', 'date');
    $('.time input').attr('type', 'time');
  } else {
    // if desktop device, use DateTimePicker
    $('#datepicker').datetimepicker({
      useCurrent: false,
      format: 'DD-MMM-YYYY',
      showTodayButton: true,
      icons: {
        next: 'fa fa-chevron-right',
        previous: 'fa fa-chevron-left',
        today: 'todayText',
      },
    });
    $('#timepicker').datetimepicker({
      format: 'LT',
      icons: {
        up: 'fa fa-chevron-up',
        down: 'fa fa-chevron-down',
      },
    });
  }
}

// scroll animation helper
jQuery(function ($) {
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function () {
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
      $animatables = $('.animatable');

    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }

    // Check all animatables and animate them if necessary
    $animatables.each(function (i) {
      var $animatable = $(this);

      // smaller devices

      if ($(window).width() <= 767) {
        if ($animatable.offset().top + $animatable.height() - 250 < offset) {
          $animatable.removeClass('animatable').addClass('animated');
        }
      } else {
        // larger devices
        if ($animatable.offset().top + $animatable.height() - 50 < offset) {
          $animatable.removeClass('animatable').addClass('animated');
        }
      }

      // larger devices

      // if ($animatable.offset().top + $animatable.height() - 50 < offset) {
      //   $animatable.removeClass('animatable').addClass('animated');
      // }
    });
  };

  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');
});

// video player
const art = new window.Artplayer({
  container: '.image-video-container',
  url: 'https://upload.dnscheck.io/img/video.mp4',
  volume: 0.5,
  isLive: false,
  muted: true,
  autoplay: true,
  autoSize: true,
  // autoMini: true,
  screenshot: true,
  setting: true,
  loop: true,
  flip: true,
  playbackRate: true,
  aspectRatio: true,
  fullscreen: true,
  subtitleOffset: true,
  miniProgressBar: true,
  mutex: true,
  backdrop: true,
  playsInline: true,
  autoPlayback: true,
  // airplay: true,
  theme: '#23ade5',
  lang: navigator.language.toLowerCase(),
  whitelist: ['*'],
  // moreVideoAttr: {
  //     crossOrigin: 'anonymous',
  // },
  // layers: [
  //   {
  //     tooltip: 'Provided by Upload.biz',
  //     html: '<img width="100" src="https://upload.dnscheck.io/img/icon.png">',
  //     click: function () {
  //       window.open('https://upload.dnscheck.io');
  //       console.info('You clicked on the custom layer');
  //     },
  //     style: {
  //       position: 'absolute',
  //       bottom: '55px',
  //       right: '50px',
  //       opacity: '.9',
  //     },
  //   },
  // ],

  controls: [
    {
      position: 'right',
      html: '<img width="20" src="https://upload.dnscheck.io/img/icon.png">',
      tooltip: 'Provided by Upload.biz',
      click: function () {
        console.info('You clicked on the custom control');
      },
    },
  ],
});
// end of video player

const captcha = document.querySelector('.captcha'),
  reloadBtn = document.querySelector('.reload-btn'),
  inputField = document.querySelector('.input-area input'),
  checkBtn = document.querySelector('.check-btn'),
  statusTxt = document.querySelector('.status-text');

//storing all captcha characters in array
let allCharacters = [
  'A',
  'B',
  'C',
  'D',
  'E',
  'F',
  'G',
  'H',
  'I',
  'J',
  'K',
  'L',
  'M',
  'N',
  'O',
  'P',
  'Q',
  'R',
  'S',
  'T',
  'U',
  'V',
  'W',
  'X',
  'Y',
  'Z',
  'a',
  'b',
  'c',
  'd',
  'e',
  'f',
  'g',
  'h',
  'i',
  'j',
  'k',
  'l',
  'm',
  'n',
  'o',
  'p',
  'q',
  'r',
  's',
  't',
  'u',
  'v',
  'w',
  'x',
  'y',
  'z',
  0,
  1,
  2,
  3,
  4,
  5,
  6,
  7,
  8,
  9,
];
function getCaptcha() {
  for (let i = 0; i < 6; i++) {
    //getting 6 random characters from the array
    let randomCharacter =
      allCharacters[Math.floor(Math.random() * allCharacters.length)];
    captcha.innerText += ` ${randomCharacter}`; //passing 6 random characters inside captcha innerText
  }
}
getCaptcha(); //calling getCaptcha when the page open
//calling getCaptcha & removeContent on the reload btn click
reloadBtn.addEventListener('click', () => {
  removeContent();
  getCaptcha();
});

function removeContent() {
  inputField.value = '';
  captcha.innerText = '';
  statusTxt.style.display = 'none';
}
