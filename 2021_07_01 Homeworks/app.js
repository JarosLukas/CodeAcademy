// Įvestai reikšmėi priklausomai nuo paspausto mygtuko keičiame reigstrą (Didėles/Mažos raidės)
function upper() {
	let uc = document.getElementById('text-editor').value;
	document.getElementById('text-editor').value = uc.toUpperCase();
}
function lower() {
	let lc = document.getElementById('text-editor').value;
	document.getElementById('text-editor').value = lc.toLowerCase();
}
function firstUp() {
	let fp = document.getElementById('text-editor').value;
	document.getElementById('text-editor').value = fp[0].toUpperCase() + fp.slice(1);
}
function firstLow() {
	let fl = document.getElementById('text-editor').value;
	document.getElementById('text-editor').value = fl[0].toLowerCase() + fl.slice(1);
}
// Pazpaudžius mygtuką užblokokite/atblokokite
function myFunctionB() {
    document.getElementById("text").disabled = true;
}
function myFunctionUn() {
    document.getElementById("text").disabled = false;
}
// Paspaudžius ant mygtuko turi "iškristi" meniu su punktais. Paspaudžius pinktą turi įvykti veiksmas
function red() {
  document.getElementById('id1').style.color = "red";
}
function green() {
  document.getElementById('id1').style.color = "green";
}
function orange() {
  document.getElementById('id1').style.color = "orange";
}

function no_drop() {
  document.getElementById('id1').style.cursor = "no-drop";
}
function none() {
  document.getElementById('id1').style.cursor = "none";
}
function crosshair() {
  document.getElementById('id1').style.cursor = "crosshair";
}

function borderRed() {
    document.getElementById("id1").style.border = "thick dotted red";
}
function borderGreen() {
    document.getElementById("id1").style.border = "solid green";
}
function borderOrange() {
    document.getElementById("id1").style.border = "solid 5px orange";
}
function reset() {
    document.getElementById("id1").style ="border: 0.5px solid rgb(181, 184, 181);";
}
// Paspaudžius mygtuką parodikite informaciją apie save modalineme lange
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    let forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()