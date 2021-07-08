let salary = prompt('Įveskite bazinio užmokesčio dydį');

let money = 8487300000;

let people = 1761463;

let result = people * salary * 100 / money;

document.write(result.toFixed(2) + '% Lietuvos biudžeto');