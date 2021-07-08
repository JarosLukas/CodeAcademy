// Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert funkciją.
let number = 3;
alert(number);

// Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.
let a = 10;
let b = 2;

let sum = a + b;
let subtract = a - b;
let multiply = a * b;
let divide = a / b;
document.write(`${a} + ${b} = ${sum}`);
document.write('<br>');
document.write(`${a} - ${b} = ${subtract}`);
document.write('<br>');
document.write(`${a} * ${b} = ${multiply}`);
document.write('<br>');
document.write(`${a} / ${b} = ${divide}`);
document.write('<br>');

// Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo vertę.
let c = 15;
let d = 2;

let result = c + d;
alert(result);

// Sukurkite kintamuosius a = 17 ir b = 10. Atimkite kintamąjį b iš a ir priskirkite rezultatą kintamajam c. Tada sukurkite kintamąjį d, priskirkite jam reikšmę 7. Sudėkite kintamuosius c ir d ir priskirkite rezultatą kintamajam result.
let A = 17;
let B = 10;
let D = 7;

let C = A - B;
let RESULT = C + D;
alert(RESULT);

// Sukurkite kintamąjį str ir priskirkite jam „Hello World!” reikšmę. Parodykite šio kintamojo reikšmę ekrane.
let = 'Hello World!';
document.write(let);
document.write('<br>');

// Sukurkite kintamuosius str1 = ‘Hello’ ir str2 = ‘World!’. Naudodami šiuos kintamuosius parodykite frazę „Hello World!“.
let str1 = 'Hello';
let str2 = 'World!';
document.write(str1 + ' ' + str2);
document.write('<br>');

// Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę „Hello, %name%!“.
let NAME = 'Jaros';
document.write('Hello '+ NAME);
document.write('<br>');

// Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite ‘I’m %age% old!’
let age = '34';
document.write("I'm "+ age + ' old');
document.write('<br>');

// Paklauskite vartotojo vardo naudodamiesi prompt metodais. Su alert parodykite pranešimą „Your name %name%“ kur %name% - įvestas vardas.
let ask = prompt('What is your name?');
alert('Your name '+ ask);