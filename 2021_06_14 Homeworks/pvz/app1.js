// Paprašytų įvesti bazinio užmokesčio dydį
// 
// Paskaičiuotų kiek % tai sudarytų Lietuvos biudžeto, 
// jei visi dirbantys  piliečiai gautų tokias išmokas
// 
// Document.write() atspausdinkime rezultatą;
// 
// Duomenys:
// Darbingi žmonės: 1761463
// 2017 Lietuvos biudžetas: 8487300000

const BUDGET = 8487300000;
const WORKING_PEOPLE = 1761463;

let basic_salary_amount = prompt('Įveskite bazinio užmokesčio dydį');

// console.log(basic_salary_amount);

let result = ((WORKING_PEOPLE * basic_salary_amount) / BUDGET) * 100;

document.write(result.toFixed(2) + ' %');