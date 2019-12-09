<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */
$video = $atts['video'];
?>

<div class="fw-container-fluid <?php echo $atts['class'];?>"<? if ( !empty( $atts['bg'] ) ) : ?> style="background-image: url('<?php echo $atts['bg']['url'] ; ?>');" <? endif; ?>>
    <div class="fw-row cont">
        <div id="playu" class="block">
            <p><?php echo $atts['text'];?></p>
            <div class="but"></div>
        </div>
        <div id="pauseu"></div>
        <div class="youtube" id="youtube"></div>
    </div>
</div>

<script>
    onYouTubePlayerAPIReady = function () {
        player = new YT.Player('youtube', {
            videoId: '<?= $video; ?>',
            events: {
                'onReady': onPlayerReadyFunction,
            }
        });
    };
    onPlayerReadyFunction = function() {
        var playu = $('#playu');
        var pauseu = $('#pauseu');
        var video_block = $('.section-big-video .youtube');
        player.playVideo();
        video_block.animate({opacity: "1"}, 300);
        playu.hide();
        pauseu.show();
        playu.on('click',function(){
            player.playVideo();
            video_block.animate({opacity: "1"}, 300);
            playu.hide();
            pauseu.show();
        });
        pauseu.on('click',function(){
            player.pauseVideo();
            video_block.animate({opacity: "0"}, 300);
            playu.show();
            pauseu.hide();
        });
    };
    document.addEventListener("DOMContentLoaded", function(){
        $('#playu').on('click', function () {
            console.log(3);
            let video_play_button = $(this);
            if (!video_play_button.hasClass('initialized')) {
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/player_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                let youtube = video_play_button.parent().find('.youtube');
                youtube.html(youtube.data('embeded'));
                video_play_button.addClass('initialized');
            }
        });
    });

</script>