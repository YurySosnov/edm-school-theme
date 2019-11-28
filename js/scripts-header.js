function onYouTubePlayerAPIReady() {
    player = new YT.Player('Youtube', {
        events: {'onReady': onPlayerReady}
    });
}

function onPlayerReady(event) {
    document.getElementById("playu").addEventListener("click", function () {
        player.playVideo();
        $(".homepage-big-video .cont .youtube").animate({opacity: "1"}, 300);
        $("#playu").hide();
        $("#pauseu").show();
    });
    document.getElementById("pauseu").addEventListener("click", function () {
        player.pauseVideo();
        $(".homepage-big-video .cont .youtube").animate({opacity: "0"}, 300);
        $("#pauseu").hide();
        $("#playu").show();
    });
}