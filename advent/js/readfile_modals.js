let verses = {};

advent = document.getElementsByClassName("advent");

//adds event listener to every element with class advent
for ( i = 0 ;i < advent.length; i++){
    advent[i].addEventListener("click", clickHandler);
}

window.onload = function() {
    readFile("verses.json").then((result)=>{ verses = result});
}

function readFile(file){
    return new Promise((resolve,reject)=>{
        let rawFile = new XMLHttpRequest();
        let allText = "";
        rawFile.open("GET", file, true);
        rawFile.onload = function() {
            resolve(JSON.parse(rawFile.responseText));
        }
        rawFile.send();
        rawFile.onerror = function(e) {
            console.log(e);
        }
    });
}

function clickHandler(e){
    
    //TESTING formatting Modal
    //retrieves the element's data-date
    let date = this.dataset.date;
    document.getElementById("modalVerseLongTitle").innerHTML = `Day ${date}`;
    document.getElementById("modalVerseText").innerText = `${verses.days[date-1].text}\n\n${verses.days[date-1].verse}`;
    
    $('#modalVerse').modal({backdrop: true, keyboard: true, focus: false, show: false});
    toggle();
}

function toggle(){
    $('#modalVerse').modal('toggle');
}

