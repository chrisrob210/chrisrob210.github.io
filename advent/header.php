<nav class="navbar navbar-expand-lg p-0 navbar-light bg-light bg-gradient">
    <div class="container position-relative justify-content-center align-content-center">
        <!--div id="musicplayer" class="d-flex justify-content-center">
            <audio id="audioplayer" hidden="true"></audio>
            <i class="fas fa-angle-double-left align-self-center media-button" id="back"></i>
            <i class="fas fa-play mx-3 align-self-center media-button" id="play"></i>
            <i class="fas fa-angle-double-right align-self-center media-button" id="next"></i>
            <div id="songinfo" class="flex-grow-1 align-self-center text-left"></div>
            -->
        <!-- <iframe src="musicplayer.html" class="d-flex frame-player"></iframe> -->
        <div id="musicplayer" class="navbar m-0">
            <audio autoplay id="audioplayer" hidden="true" src="audio/silence.mp3"></audio>
            <i class="fas fa-angle-double-left align-self-center media-button" id="back"></i>
            <i class="fas fa-play align-self-center media-button" id="play"></i>
            <i class="fas fa-angle-double-right align-self-center media-button" id="next"></i>
            <div id="songinfo" class="flex-grow-1 align-self-center text-left">
                <i class="fas fa-long-arrow-alt-left align-self-center"></i></i>&nbsp; Click to Play Music
            </div>
        </div>

        <div id="countdown" class="countdown-text">
        </div>
    </div>
</nav>