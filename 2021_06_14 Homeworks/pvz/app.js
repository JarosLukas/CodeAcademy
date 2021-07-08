// Darbingi žmonės
const people = 1761463;

// 2017 Lietuvos biudžetas
const budget = 8487300000;

// Įveskite savo bazinį DU
let salary =+prompt("Įveskite savo bazinį DU");
console.log(salary);

// Skaičiavimai
let result =(salary * people * 100/ budget);
console.log(result);

// Kad nebūtų galimybės vesti minusinius skaičius
if (result <=0) {
    alert('DU turi būti nurodytas teigiamais skaičiais');
    location.reload();
}
// Kad nurodoma DU suma neviršytų biudžeto
if (result >100) {
    alert('Per mažai lėšų biudžete gauti tokias išmokas');
    location.reload();
};
// Kad DU nebūtų vedami žodžiais
if (isNaN(result)) {
    alert('DU turi būti nurodytas skaitmenimis');
    location.reload();
};
//Rezultato rodymas ekrane
document.write(result);




