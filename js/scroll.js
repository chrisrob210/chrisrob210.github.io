window.onload = function () {
    anchors = document.getElementsByTagName("a");
    for (i = 0; i < anchors.length; i++) {
        anchors[i].addEventListener('click', smoothScroll);
    }
}

function smoothScroll(event){
    console.log(`fn scroll ${this.hash}`);
    if (this.hash !== ""){
        event.preventDefault();
        var hash = this.hash;
        const href = this.getAttribute("href");
        console.log(`href ${href}`);
        const offsetTop = document.querySelector(href).offsetTop;

        scroll({
            top: offsetTop,
            behavior: "smooth"
        });

        window.location.hash = hash;
    }
}