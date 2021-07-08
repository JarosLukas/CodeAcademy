// for-in
// Sukurkite objektą green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.
let obj = {green: 'žalia', red: 'raudona', blue: 'mėlyna'};

for (let key in obj) {
  console.log(`${key}: ${obj[key]}`);
};

// Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300.
// Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.
let workers = {
    Mantas: 200,
    Paulius: 300,
    Mindaugas: 300
};
for (let key in workers) {
    console.log(`${key} - ${workers[key]} EU atlyginimas.`);
};

// Sukurkite objektą su savaitės dienomis. 
// Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios 
// (1 -> pirmadienis ir t.t.). 
// Parodykite dabartinę savaitės dieną.
let weekdays = {
    1: 'Pirmadienis',
    2: 'Antradienis',
    3: 'Trečiadienis',
    4: 'Ketvirtadienis',
    5: 'Penktadienis',
    6: 'Šeštadienis',
    0: 'Sekmadienis'
};
let day = new Date();
let dayName = weekdays[day.getDay()];
console.log(dayName);

// Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris. 
// Atspausdinkite savaitės dieną naudojant sita kintamajį.
day = 4;
console.log(weekdays[day]);

// Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. 
// Parodykite žodį jQuery.
obj = {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'};
console.log(obj.js[0]);
// console.log(obj.values(obj)[0][0]);

// Sukurkite objektą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai atitinkamai. 
// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
let weekdaysEn = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
obj = {
    lt: Object.values(weekdays),
    en: weekdaysEn
}
console.log(obj.lt[1], obj.en[2]);
// console.log(obj.values(obj)[0][1], obj.values(obj)[1][2]);

// Sukurkite kintamsios lang ir day (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną
let lang = weekdays;
    day = new Date().getDay();
console.log(lang[day]);