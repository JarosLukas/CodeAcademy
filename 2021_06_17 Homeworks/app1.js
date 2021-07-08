// Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert funkciją.

let num = 3;

alert(num);
console.log(num);
document.write(num);

// Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.

// let a = 10;
// let b = 2;

let a = 10,
	b = 2;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % 3);

// Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo vertę.

let c = 15,
	d = 2;

let result = c + d;

console.log(result);

// Sukurkite kintamuosius a = 17 ir b = 10. Atimkite kintamąjį b iš a ir priskirkite rezultatą kintamajam c. Tada sukurkite kintamąjį d, priskirkite jam reikšmę 7. Sudėkite kintamuosius c ir d ir priskirkite rezultatą kintamajam result.

// a = 17,
// b = 10;

a = 17;
b = 10;

c = a - b;

d = 7;

result = c + d;

console.log(result);

// Sukurkite kintamąjį str ir priskirkite jam „Hello World!” reikšmę. Parodykite šio kintamojo reikšmę ekrane.

let str = 'Hello World!';

console.log(str);

// Sukurkite kintamuosius str1 = ‘Hello’ ir str2 = ‘World!’. Naudodami šiuos kintamuosius parodykite frazę „Hello World!“.

let str1 = 'Hello', 
	str2 = 'World!';

console.log(str1 + ' ' + str2);

// Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę „Hello, %name%!“.

let name = 'Kirilas';

// alert('Hello, ' + name + ' !');
alert(`Hello, ${name} !`);

// Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite ‘I’m %age% old!’

let age = 28;

alert('I’m ' + age + ' old!');

// Paklauskite vartotojo vardo naudodamiesi prompt metodais. Su alert parodykite pranešimą „Your name %name%“ kur %name% - įvestas vardas.

name = prompt('What is your name ?');

alert('Your name ' + name);