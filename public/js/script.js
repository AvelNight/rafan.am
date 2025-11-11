function initVideo() {

    let $videoContent = $('#video-content');

    let video = document.createElement('video');
    let canPlayWebM = !!video.canPlayType && video.canPlayType('video/webm; codecs="vp8, vorbis"');

    let videoFile = (canPlayWebM === 'probably' || canPlayWebM === 'maybe')
        ? '/images/vbackgraund.webm'
        : '/images/vbackgraund.mp4';

    $videoContent.attr('src', videoFile);

    $videoContent.on('loadedmetadata', function () {
        $videoContent.removeClass('invisible')
    });
}

(function ($) {

    $('.change-lang').on('click', function (event) {
        let lang = $(this).data('lang');
        window.location.search = '?lang=' + lang;
    })

    initVideo();

})(jQuery);
