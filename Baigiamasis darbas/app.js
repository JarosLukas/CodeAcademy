document.getElementById("randomButton").addEventListener("click", randomImage);

function randomImage() {
    let imageArray = new Array();
    imageArray[0] = "images/training/Back (1).jpg";
    imageArray[1] = "images/training/Back (2).jpg";
    imageArray[2] = "images/training/Back (3).jpg";

    let number = Math.floor(Math.random()*imageArray.length);

    return document.getElementById("randomButton").innerHTML = '<img src="'+imageArray[number]+'" style="width:170px" />';
}

document.getElementById("randomButton2").addEventListener("click", randomImage2);

function randomImage2() {
    let imageArray_2 = new Array();
    imageArray_2[0] = "images/training/Chest (1).jpg";
    imageArray_2[1] = "images/training/Chest (2).jpg";
    imageArray_2[2] = "images/training/Chest (3).jpg";

    let number = Math.floor(Math.random()*imageArray_2.length);

    return document.getElementById("randomButton2").innerHTML = '<img src="'+imageArray_2[number]+'" style="width:170px" />';
}

document.getElementById("randomButton3").addEventListener("click", randomImage3);

function randomImage3() {
    let imageArray_3 = new Array();
    imageArray_3[0] = "images/training/Core (1).jpg";
    imageArray_3[1] = "images/training/Core (2).jpg"; 
    imageArray_3[2] = "images/training/Core (3).jpg";

    let number = Math.floor(Math.random()*imageArray_3.length);

    return document.getElementById("randomButton3").innerHTML = '<img src="'+imageArray_3[number]+'" style="width:170px" />';
}

document.getElementById("randomButton4").addEventListener("click", randomImage4);

function randomImage4() {
    let imageArray_4 = new Array();
    imageArray_4[0] = "images/training/Legs (1).jpg";
    imageArray_4[1] = "images/training/Legs (2).jpg";
    imageArray_4[2] = "images/training/Legs (3).jpg";

    let number = Math.floor(Math.random()*imageArray_4.length);

    return document.getElementById("randomButton4").innerHTML = '<img src="'+imageArray_4[number]+'" style="width:170px" />';
}

document.getElementById("randomButton5").addEventListener("click", randomImage5);

function randomImage5() {
    let imageArray_5 = new Array();
    imageArray_5[0] = "images/training/Cardio (1).jpg";
    imageArray_5[1] = "images/training/Cardio (2).jpg";
    imageArray_5[2] = "images/training/Cardio (3).jpg";

    let number = Math.floor(Math.random()*imageArray_5.length);

    return document.getElementById("randomButton5").innerHTML = '<img src="'+imageArray_5[number]+'" style="width:170px" />';
}

document.getElementById("randomButton").addEventListener("click", getText);

function getText() {
    
    return document.getElementById("text").innerHTML = '<p><strong>Atlik pratimus, kurie buvo parinkti burtu keliu</strong></p>';
}