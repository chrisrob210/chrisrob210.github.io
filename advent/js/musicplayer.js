const songlist = [];
const songinfo = document.getElementById("songinfo");
// variables for playlist control
let currentSong = null;
let currentIndex = 0;
let isSonglistLoaded = false;
//Audio Element controls
let audio = document.getElementById("audioplayer");

/* ---EVENT LISTENERS--- */
//media elements
document.getElementById("back").addEventListener("click", clickHandler);
document.getElementById("play").addEventListener("click", clickHandler);
document.getElementById("next").addEventListener("click", clickHandler);
//audio element
audio.addEventListener('loadeddata', setSongInfo);

function song(artist, title, url){
    this.artist = artist;
    this.title = title;
    this.url = url;
}

function clickHandler(e){
    if (songlist.length == 0)
        LoadSongList();

    if (this.id === "back"){
        previousSong();
    }
    if (this.id === "next"){
        nextSong();
    }
    if (this.id ==="play"){
        playSong();
    }
}

/* ---Promises--- */
ReadFile = function(file) {
    return new Promise((resolve, reject) => {
        let rawFile = new XMLHttpRequest();
        let allText = "";
        rawFile.open("GET", file, true);
        rawFile.onload = function() {
            resolve(rawFile.responseText);
        }
        rawFile.send();
        rawFile.onerror = function(e) {
            console.log(e);
        }
});
}

ParseFile = function (file) {
    return new Promise((resolve, reject) => {
        resolve(file.split(/\r?\n/));
        
    });
}

ConvertToSongs = function (element){
    return new Promise((resolve,reject) =>{
    let tracks = [];
    for (i = 0; i < element.length; i++)
        {
            item = element[i].split("%");
            tracks.push(new song(item[0], item[1], item[2]));
        }
    resolve(tracks);
    });
}

AddToSongList = function (tracks){
    return new Promise((resolve,reject) => {
        resolve(tracks.forEach(element => songlist.push(element)));
    });
}

/* Load songlist using promises */

function LoadSongList(){
    ReadFile('js/songlist.txt').then((result) => { 
        console.log("1. ReadFile Promise Completed");
        ParseFile(result).then((line) =>{
            console.log("2. ParseFile Promise Completed");
            ConvertToSongs(line).then((tracks) => {
                console.log("3. ConvertToSongs Promise Complete");
                AddToSongList(tracks).then( () => {
                    console.log("4. AddToSongList Promise Complete");
                    isSonglistLoaded = true;
                    randomSong();
                });
            });
        });
    });
    //randomSong();
}




function setSong(){
    currentSong = songlist[currentIndex];
    audio.src = currentSong.url;
}

function randomSong(){
    index = Math.floor(Math.random() * songlist.length);
    currentSong = songlist[index];
    console.log("Random Song - %s - %s", currentSong.artist, currentSong.title);
    audio.src = currentSong.url;
}

function nextSong(){
    if (!audio.pause){
        audio.pause();
    }
    if (currentIndex < songlist.length-1)
        currentIndex++;
    else{
        currentIndex = 0;
    }
    setSong();
    playSong();
}

function previousSong(){
    if (!audio.pause){
        audio.pause();
    }
    if (currentIndex < 1)
        currentIndex = songlist.length-1;
    else{
        currentIndex--;
    }
    setSong();
    playSong();
}

function playSong() {
    
    if (audio.paused){
        audio.play();
    }
    else {
        audio.pause();
    }
    
}

function setSongInfo(){
    if (isSonglistLoaded){
    songinfo.innerHTML = currentSong.artist + " - " + currentSong.title;
    }
    
}

function convertDuration(dur){
    var minutes = "0" + Math.floor(dur / 60);
    var seconds = "0" + Math.floor(dur % 60);
    var playtime = minutes.substr(-2) + ":" + seconds.substr(-2);
    return playtime;
}

function listTracks(){
    console.log("---TRACKLIST---[ Artist | Title | URL ]");
    songlist.forEach(element => console.log("%s - %s : %s", element.artist, element.title, element.url));
}







