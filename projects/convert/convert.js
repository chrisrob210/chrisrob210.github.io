function convertTemp(){
    var temp = 0;
    if (document.getElementById("c").value.length > 0){
        var cTemp = Number(document.getElementById("c").value);
        temp = (cTemp * (9/5)) + 32;
        temp = Math.round(temp * 100) / 100;
        document.getElementById("f").value = temp;
    }
    if (document.getElementById("f").value.length > 0) {
        var fTemp = Number(document.getElementById("f").value);
        temp = (fTemp - 32) * (5/9);
        temp = Math.round(temp * 100) / 100;
        document.getElementById("c").value = temp;
    }
    return false;
}

function clearTemp(){
    document.getElementById("c").value = "";
    document.getElementById("f").value = "";
    return false;
}

function convertWeight(){
    var temp = 0;
    if (document.getElementById("kilo").value.length > 0){
        var kTemp = Number(document.getElementById("kilo").value);
        temp = kTemp / 0.45359237;
        temp = Math.round(temp * 100) / 100;
        document.getElementById("lb").value = temp;
    }
    if (document.getElementById("lb").value.length > 0) {
        var lbTemp = Number(document.getElementById("lb").value);
        temp = lbTemp * 0.45359237;
        temp = Math.round(temp * 100) / 100;
        document.getElementById("kilo").value = temp;
    }
    return false;
}

function clearWeight(){
    document.getElementById("kilo").value = "";
    document.getElementById("lb").value = "";
    return false;
}