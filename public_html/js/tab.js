$(".nav--item").click(function(){
	var val = $(this).attr('data-tab-target');
	console.log(val);
	
	$('.nav--item').removeClass('-is--active');
	$(this).addClass('-is--active');
	
	$(".tabset--content").attr('data-active-tab', val);

});




// // $('.set-password-btn').click(function(e) {
// //   e.preventDefault();
// //   $('.password-btn-text').text('ACTIVATED');
// // })

// // set up basic variables for app

// const record = document.querySelector('.record');
// const stop = document.querySelector('.stop');
// const soundClips = document.querySelector('.sound-clips');
// const fileContainer = document.querySelector('.file-container');
// const canvas = document.querySelector('.visualizer');
// const mainSection = document.querySelector('.main-controls');

// // disable stop button while not recording

// stop.disabled = true;

// // visualiser setup - create web audio api context and canvas

// let audioCtx;
// const canvasCtx = canvas.getContext("2d");

// //main block for doing the audio recording

// if (navigator.mediaDevices.getUserMedia) {
//   console.log('getUserMedia supported.');

//   const constraints = { audio: true };
//   let chunks = [];

//   let onSuccess = function(stream) {
//     const mediaRecorder = new MediaRecorder(stream);

//     visualize(stream);

//     record.onclick = function() {
//       mediaRecorder.start();
//       console.log(mediaRecorder.state);
//       console.log("recorder started");
//       record.style.background = "red";

//       stop.disabled = false;
//       record.disabled = true;
//     }

//     stop.onclick = function() {
//       mediaRecorder.stop();
//       console.log(mediaRecorder.state);
//       console.log("recorder stopped");
//       record.style.background = "";
//       record.style.color = "";
//       // mediaRecorder.requestData();

//       stop.disabled = true;
//       record.disabled = false;
//     }



//     mediaRecorder.onstop = function(e) {
//       console.log("data available after MediaRecorder.stop() called.");

//       const clipName = prompt('Enter a name for your sound clip?','My unnamed clip');

//       const clipContainer = document.createElement('article');
//       const clipLabel = document.createElement('p');
//       const audio = document.createElement('audio');
//       const deleteButton = document.createElement('button');

//       clipContainer.classList.add('clip');
//       audio.setAttribute('controls', '');
//       deleteButton.textContent = 'Delete';
//       deleteButton.className = 'delete';

//       if(clipName === null) {
//         clipLabel.textContent = 'My unnamed clip';
//       } else {
//         clipLabel.textContent = clipName;
//       }

//       clipContainer.appendChild(audio);
//       clipContainer.appendChild(clipLabel);
//       clipContainer.appendChild(deleteButton);

//       soundClips.appendChild(clipContainer);

//       audio.controls = true;
//       const blob = new Blob(chunks, { 'type' : 'audio/ogg; codecs=opus' });
//       chunks = [];
//       const audioURL = window.URL.createObjectURL(blob);
//       audio.src = audioURL;
//       console.log("recorder stopped");

//       deleteButton.onclick = function(e) {
//         e.target.closest(".clip").remove();
//       }

//       clipLabel.onclick = function() {
//         const existingName = clipLabel.textContent;
//         const newClipName = prompt('Enter a new name for your sound clip?');
//         if(newClipName === null) {
//           clipLabel.textContent = existingName;
//         } else {
//           clipLabel.textContent = newClipName;
//         }
//       }
//     }

//     mediaRecorder.ondataavailable = function(e) {
//       chunks.push(e.data);
//     }
//   }

//   let onError = function(err) {
//     console.log('The following error occured: ' + err);
//   }

//   navigator.mediaDevices.getUserMedia(constraints).then(onSuccess, onError);

// } else {
//    console.log('getUserMedia not supported on your browser!');
// }

// function visualize(stream) {
//   if(!audioCtx) {
//     audioCtx = new AudioContext();
//   }

//   const source = audioCtx.createMediaStreamSource(stream);

//   const analyser = audioCtx.createAnalyser();
//   analyser.fftSize = 2048;
//   const bufferLength = analyser.frequencyBinCount;
//   const dataArray = new Uint8Array(bufferLength);

//   source.connect(analyser);
//   //analyser.connect(audioCtx.destination);

//   draw()

//   function draw() {
//     const WIDTH = canvas.width
//     const HEIGHT = canvas.height;

//     requestAnimationFrame(draw);

//     analyser.getByteTimeDomainData(dataArray);

//     canvasCtx.fillStyle = 'rgb(200, 200, 200)';
//     canvasCtx.fillRect(0, 0, WIDTH, HEIGHT);

//     canvasCtx.lineWidth = 2;
//     canvasCtx.strokeStyle = 'rgb(0, 0, 0)';

//     canvasCtx.beginPath();

//     let sliceWidth = WIDTH * 1.0 / bufferLength;
//     let x = 0;


//     for(let i = 0; i < bufferLength; i++) {

//       let v = dataArray[i] / 128.0;
//       let y = v * HEIGHT/2;

//       if(i === 0) {
//         canvasCtx.moveTo(x, y);
//       } else {
//         canvasCtx.lineTo(x, y);
//       }

//       x += sliceWidth;
//     }

//     canvasCtx.lineTo(canvas.width, canvas.height/2);
//     canvasCtx.stroke();

//   }
// }

// window.onresize = function() {
//   canvas.width = mainSection.offsetWidth;
// }

// window.onresize();



$(document).ready(function() {
    $(document).on('submit', '#pass-form', function() {
      // do your things
      console.log('Submitted');
      
      $('.password-btn-text').text('PASSWORD ACTIVATED');
      $('.set-password-btn').addClass('green-gradient-btn');
      $('.set-password-btn').prepend('<i class="material-icons" data-icon="done"></i>');
      $('.set-password-btn').prop('disabled', true);
      return false;
     });
  
  
     $(document).on('submit', '#picktime', function() {
      // do your things
      console.log('Submitted');
      $('.expiry-btn-text').text('ACTIVATED');
      $('.set-expiry-btn').addClass('green-gradient-btn');
      $('.set-expiry-btn').prepend('<i class="material-icons" data-icon="done"></i>');
      $('.set-expiry-btn').prop('disabled', true);
      return false;
     });
  
    //  $('.drop-area')
    //   .css({opacity:0}) /*set opacity to 0*/
  
    // $('.drop-area').css({opacity:1});
  
    // $('.tab-rec-section').css('display', 'block !important');
    // $('.tab-cam-section').css('display', 'block !important');
    // $('.tab-video-section').css('display', 'block !important');
  
    //  $('.slick-dots-loading').addClass('hideIt');
  
      $('.tab-rec-section').addClass('importantRule');
      $('.tab-cam-section').addClass('importantRule-block');
      $('.tab-video-section').addClass('importantRule-block');
  
  
  
  });
  
  
  
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
      
     
    
      // slider.slick("slickSetOption", "touchMove", false);
    });
  
  
    var timePicker = $('#picktime');
  
  function goToNextInput(e) {
    var key = e.which,
      t = $(e.target),
      sib = t.next('input');
    console.log({ sib });
    prev = t.prev('input');
  
  
    //console.log({ key });
  
    // handle backspace
    if (key == 8) {
     
      
      
      // if (!prev || !prev.length) {
      //   prev = timePicker.find('input').eq(1);
      //   console.log({ hero: sib });
      // }
      
      
      if (e.target.classList.contains('latest') && e.target.value !== '') {
        console.log('first first first');
        
        e.target.value = '';
        $('.latest').select().focus();
  
        return;
      } else if (
        e.target.classList.contains('second-latest') &&
        e.target.value !== ''
      ) {
        console.log('second second secoond');
        e.target.value = '';
        $('.second-latest').select().focus();
        return;
      } 
  
      prev.select().focus();
      prev.val('');
    }
  
    if (key != 9 && (key < 48 || key > 57) && (key < 96 || key > 105)) {
      if (e.shiftkey) return false;
  
      if (key == 13) {
        onSubmitHandler();
        return true;
      }
      //console.log({ invalid: key });
      e.preventDefault();
      return false;
    }
  
    if (key === 9) {
      return true;
    }
  
    if (!sib || !sib.length) {
      sib = timePicker.find('input').eq(2);
      console.log({ hero: sib });
    }
  
    if (e.currentTarget.value.length >= 1) {
      //console.log({ classList: e.currentTarget.classList });
      if (e.target.classList.contains('latest')) {
        $('.latest').focus();
  
        return;
      }
  
      sib.select().focus();
    }
  }
  
  function onKeyDown(e) {
    var key = e.which;
  
    if (key === 9 || (key >= 48 && key <= 57) || (key >= 96 && key <= 106)) {
      //console.log({ valid: key });
  
      return true;
    }
  
    e.preventDefault();
    return false;
  }
  
  function onFocus(e) {
    $(e.target).select();
  }
  
  function onlyNumeric(e) {
    var key = e.which;
  
    if (key === 8) return true;
  
    if (
      key === 9 ||
      key === 190 ||
      (key >= 48 && key <= 57) ||
      (key >= 96 && key <= 106)
    ) {
      //console.log({ valid: key });
  
      return true;
    }
  
    e.preventDefault();
    return false;
  }
  
  timePicker.on('keyup', 'input', goToNextInput);
  timePicker.on('keydown', 'input', onKeyDown);
  timePicker.on('click', 'input', onFocus);
  
    
    
    $('.video-cap-icon-wrapper').click(function() {
      console.log('hello');
      $('.video-cap-icon-wrapper').hide();
      $('.video-cap-click-wrapper').slideDown();
    
    })
  
    $('.img-cap-icon-wrapper').click(function() {
      const btnsContainer = document.querySelector('.cam-slider-section');
      console.log('hello');
      $('.img-cap-icon-wrapper').hide();
      // $('.image-cap-click-wrapper').show().addClass('slideInUp');
      $('.image-cap-click-wrapper').slideDown('slow');
    
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
    
  //   $('.nav--item').click(function () {
  //     var val = $(this).attr('data-tab-target');
  //     console.log(val);
    
  //     $('.nav--item').removeClass('-is--active');
  //     $(this).addClass('-is--active');
    
  //     $('.tabset--content').attr('data-active-tab', val);
  //   });
    
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
      // $('.open-search').on('click', function () {
      //   $('body').css('overflow', 'hidden');
      //   $('.site-search').addClass('open');
      // });
      // $('.close-search').on('click', function () {
      //   $('body').css('overflow', '');
      //   $('.site-search').removeClass('open');
      // });
    
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
    