function ViewPassword(){
    let pw = document.getElementById("password");
    if (pw.type === "password"){
        pw.type = "text";
    }
    else {
        pw.type = "password";
    }
}

function ChooseMethod(){
    let length = document.getElementById("length").value;
    let checkbox = document.getElementById("special");

    console.clear();
    
    if (checkbox.checked){
        console.log("Generate With Special Characters");
        document.getElementById("password").value = GenerateWithSpecial(length);
    }

    if (!checkbox.checked){
        console.log("Generate With No Special Characters");
        document.getElementById("password").value = GenerateNoSpecial(length);
    }
    
    //document.getElementById("result").style.display = "block";
    RevealElement(document.getElementById("result"));
    CombineBorders(document.getElementById("userinput"), document.getElementById("result"));
}

function GenerateNoSpecial(length){
    //ensure the first character is letter or number
    let password = GetCharacter(3);
    for (let i = 1; i < length; i++){
        console.log("Pass # " + i);
        password += GetCharacter(3);
        console.log();
    }
    console.log("password: " + password + "\nlength: " + password.length);
    //alert("password: " + password);
   return password;
}

function GenerateWithSpecial(length){
    let password = GetCharacter(3);
    for (let i = 1; i < length; i++){
        console.log("Pass # " + i);
        password += GetCharacter(4);
        console.log();
    }
    console.log("password: " + password + "\nlength: " + password.length);
    //alert("password: " + password);
    return password;
}

//Randomly Choose 1 to maximum
function RandomChoice(maximum){
    min = Math.ceil(1);
    max = Math.floor(maximum);
    let rndNum = Math.floor(Math.random() * (max - min) + min);
    return rndNum;
}

function GetCharacter(maximum){
    let choice = RandomChoice(maximum);

    if (choice == 1){
        console.log("Letter was chosen");
        return GetRandomLetter();
    }

    else if (choice == 2){
        console.log("Number was chosen");
        return GetRandomNumber();
    }

    else if (choice == 3){
        console.log("Special was chosen");
        return GetRandomSpecial();
    }

    else{
        console.warn("Warning! Choice " +choice+ "was out of bounds! ");
        return GetRandomNumber();
    }
}

function GetRandomLetter(){
    let choice = RandomChoice(3);
    
    //Capital Letters
    if (choice == 1){
    
    min = Math.ceil(65);
    max = Math.floor(91);
    return String.fromCharCode(Math.floor(Math.random() * (max - min) + min));
    }

    //Lowercase Letters
    else if (choice == 2){
    min = Math.ceil(97);
    max = Math.floor(123);
    return String.fromCharCode(Math.floor(Math.random() * (max - min) + min));
    }
    else {
        console.warn("Warning! Choice " +choice+ "was out of bounds! ");
        return "z";
    }
}

function GetRandomNumber(){
    //min = Math.ceil(0);
    //max = Math.floor(10);
    min = 0;
    max = 10;
    num = Math.floor(Math.random() * (max - min) + min);
    return num.toString();
}

function GetRandomSpecial(){
    let choice = RandomChoice(5);

    if (choice == 1){
        return "!";
    }

    else if (choice == 2){
        return "$";
    }

    else if (choice == 3){
        return "@";
    }

    else if (choice == 4){
        return "_";
    }
    else {
        console.warn("Warning! Choice " +choice+ "was out of bounds! ");
        return "!";
    }
}    

    /* 
    *    Manipulate CSS   
    */

    function RevealElement(element){
        element.style.display = "block";
    }

    function CombineBorders(element1, element2){
        element1.style.borderBottom = "none";
        element1.style.borderBottomLeftRadius = 0;
        element1.style.borderBottomRightRadius = 0;
        element2.style.borderTop = "none";
        element2.style.borderTopLeftRadius = 0;
        element2.style.borderTopRightRadius = 0;
    }
