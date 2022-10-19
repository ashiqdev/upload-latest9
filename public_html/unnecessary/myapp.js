// var wow = new WOW({
//   boxClass: 'wow',
//   animateClass: 'animated',
//   offset: 60,
//   mobile: false,
//   live: true,
//   scrollContainer: null,
// });
// wow.init();

/* Bootstrap Accordion  */
$('.faq .card').each(function () {
  var $this = $(this);
  $this.on('click', function (e) {
    var has = $this.hasClass('active');
    $('.faq .card').removeClass('active');
    if (has) {
      $this.removeClass('active');
    } else {
      $this.addClass('active');
    }
  });
});

var DEMOSIGNS = DEMOSIGNS || {};

// USE STRICT
('use strict');

DEMOSIGNS.initialize = {
  init: function () {
    DEMOSIGNS.initialize.countup();
    DEMOSIGNS.initialize.sectionBackground();
  },

  //   section background
  sectionBackground: function () {
    // Section Background Image
    $('[data-bg-image]').each(function () {
      var img = $(this).data('bg-image');
      $(this).css({
        backgroundImage: 'url(' + img + ')',
      });
    });
  },

  countup: function () {
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
  },
};

DEMOSIGNS.documentOnReady = {
  init: function () {
    DEMOSIGNS.initialize.init();
  },
};

// Initialize Functions
$(document).ready(DEMOSIGNS.documentOnReady.init);

// video player

//ELEMENT SELECTORS
var player = document.querySelector('.player');
var video = document.querySelector('#video');
var playBtn = document.querySelector('.play-btn');
var volumeBtn = document.querySelector('.volume-btn');
var volumeSlider = document.querySelector('.volume-slider');
var volumeFill = document.querySelector('.volume-filled');
var progressSlider = document.querySelector('.progress');
var progressFill = document.querySelector('.progress-filled');
var textCurrent = document.querySelector('.time-current');
var textTotal = document.querySelector('.time-total');
var speedBtns = document.querySelectorAll('.speed-item');
var fullscreenBtn = document.querySelector('.fullscreen');

//GLOBAL VARS
let lastVolume = 1;
let isMouseDown = false;

//PLAYER FUNCTIONS
function togglePlay() {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
  playBtn.classList.toggle('paused');
}
function togglePlayBtn() {
  playBtn.classList.toggle('playing');
}

function toggleMute() {
  if (video.volume) {
    lastVolume = video.volume;
    video.volume = 0;
    volumeBtn.classList.add('muted');
    volumeFill.style.width = 0;
  } else {
    video.volume = lastVolume;
    volumeBtn.classList.remove('muted');
    volumeFill.style.width = `${lastVolume * 100}%`;
  }
}
function changeVolume(e) {
  volumeBtn.classList.remove('muted');
  let volume = e.offsetX / volumeSlider.offsetWidth;
  volume < 0.1 ? (volume = 0) : (volume = volume);
  volumeFill.style.width = `${volume * 100}%`;
  video.volume = volume;
  if (volume > 0.7) {
    volumeBtn.classList.add('loud');
  } else if (volume < 0.7 && volume > 0) {
    volumeBtn.classList.remove('loud');
  } else if (volume == 0) {
    volumeBtn.classList.add('muted');
  }
  lastVolume = volume;
}
function neatTime(time) {
  // var hours = Math.floor((time % 86400)/3600)
  var minutes = Math.floor((time % 3600) / 60);
  var seconds = Math.floor(time % 60);
  seconds = seconds > 9 ? seconds : `0${seconds}`;
  return `${minutes}:${seconds}`;
}
function updateProgress(e) {
  progressFill.style.width = `${(video.currentTime / video.duration) * 100}%`;
  textCurrent.innerHTML = `${neatTime(video.currentTime)} / ${neatTime(
    video.duration
  )}`;
  // textTotal.innerHTML = neatTime(video.duration);
  // console.log(progressFill.style.width);
}
function setProgress(e) {
  const newTime = e.offsetX / progressSlider.offsetWidth;
  progressFill.style.width = `${newTime * 100}%`;
  video.currentTime = newTime * video.duration;
}
function launchIntoFullscreen(element) {
  if (element.requestFullscreen) {
    element.requestFullscreen();
  } else if (element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if (element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if (element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}
function exitFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
}
var fullscreen = false;
function toggleFullscreen() {
  fullscreen ? exitFullscreen() : launchIntoFullscreen(player);
  fullscreen = !fullscreen;
}
function setSpeed(e) {
  console.log(parseFloat(this.dataset.speed));
  video.playbackRate = this.dataset.speed;
  speedBtns.forEach((speedBtn) => speedBtn.classList.remove('active'));
  this.classList.add('active');
}
function handleKeypress(e) {
  switch (e.key) {
    case ' ':
      togglePlay();
    case 'ArrowRight':
      video.currentTime += 5;
    case 'ArrowLeft':
      video.currentTime -= 5;
    default:
      return;
  }
}


var cssStylesheet = window.document.styleSheets[4];
console.log({ cssStylesheet });
cssStylesheet.insertRule(
  '.animatable{ visibility: hidden; }',
  cssStylesheet.cssRules.length
);

// scroll animation helper
jQuery(function ($) {
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function () {
    console.log('I am ashfef');
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
