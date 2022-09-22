var overlayer_element = document.querySelector(".overplayer");
var audioPlayer_element = document.getElementById("player_html5");
var play_icon_radio = document.getElementById("play-icon-radio");
var pause_icon_radio = document.getElementById("pause-icon-radio");
var isPLaying = false;

overlayer_element.addEventListener("click", onclickOverlayer);

function toggleIcon(type) {
    if(type === "play") {
        play_icon_radio.style.display = "block"
        pause_icon_radio.style.display = "none"
    } else {
        play_icon_radio.style.display = "none"
        pause_icon_radio.style.display = "block"
    }
}

function onclickOverlayer() {
    if (isPLaying) {
        audioPlayer_element.pause()
        isPLaying = false
        toggleIcon('play')
    } else {
        audioPlayer_element.play()
        isPLaying = true
        toggleIcon('pause')
    }
}