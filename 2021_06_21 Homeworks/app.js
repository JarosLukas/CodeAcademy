// Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.
let arr = ['a', 'b', 'c',];
console.log(arr);

// Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.
// Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.
console.log(arr[0], arr[1], arr[2]);

let arr_1 = ['a', 'b', 'c', 'd',]
console.log(`${arr_1[0]} + ${arr_1[1]}, ${arr_1[2]} + ${arr_1[3]}`);

// Sukurkite masyvą su elementais 2, 5, 3, 9. 
// Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. 
// Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.
let arr_2 = [2, 5, 3, 9,]
let multi = arr_2[0] * arr_2[1] + arr_2[2] * arr_2[3];
console.log(multi);

// Daugialypiai masyvai
// Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.
let multiArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]
console.log(multiArray[1][0]);

// Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos.
console.log(multiArray[0].concat(multiArray[1]));

// Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.
console.log(multiArray[0].reverse());

// Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.
let arr_3 = [1, 2, 3];
arr_3.push(4, 5, 6);
arr_3.unshift(-1, -2, -3);
console.log(arr_3);

// Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.
let a = ['html', 'css', 'js'];
console.log(a[0], a[arr.length-1]);

// Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.
let num = [3, 4, 1, 2, 7];
num.sort();
console.log(num);

// Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.
let num_1 = [1, 2, 3, 4, 5];
num_1.splice(-2);
console.log(num_1);



// // Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.
// let arr = ['a', 'b', 'c', 'd'];

// console.log(arr);

// // Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.
// // Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.
// // 
// // arr.push('d');

// console.log(arr[0] + ' + ' + arr[1] + ', ' + arr[2] + ' + ' + arr[3]);

// // Sukurkite masyvą su elementais 2, 5, 3, 9. 
// // Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. 
// // Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.

// arr = [2, 5, 3, 9];

// let result = arr[0] * arr[1] + arr[2] * arr[3];

// console.log(result);

// // Daugialypiai masyvai
// // Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.
// arr = [
// 	[1, 2, 3],
// 	[4, 5, 6], 
// 	[7, 8, 9]
// ];

// console.log(arr[1][0]);

// // Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos.
// let arr_a = [1, 2, 3],
// 	arr_b = [4, 5, 6];

// console.log(arr_a.concat(arr_b));

// // Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.
// arr = [1, 2, 3];

// console.log(arr.reverse());

// // Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.
// arr = [1, 2, 3];

// // arr.push(4);
// // arr.push(5);
// // arr.push(6);
// arr.push(4, 5, 6);
// arr.unshift(-1, -2, -3);

// // Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.

// arr = ['html', 'css', 'js', 'php', 'python'];

// console.log(arr);

// console.log(arr[0]);
// console.log(arr[arr.length - 1]);

// console.log(arr);

// console.log(arr.shift());
// console.log(arr.pop());

// console.log(arr);

// // Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.
// console.log([3, 4, 1, 2, 7].sort());

// // Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.
// console.log([1, 2, 3, 4, 5].slice(0,3));