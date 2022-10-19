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