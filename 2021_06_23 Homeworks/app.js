// For and While
// Atspausdinkite skaičių stulpelį nuo 1 iki 100.
for (let i = 1; i <= 100; i++) {
    console.log('Task1 "for" ' + i);
    
}

let i = 1;
while (i <= 100) {
    console.log('Task1 "while" ' +i);
    i++;
    
}

// Atspausdinkite skaičių stulpelį nuo 11 iki 33.
for (let i = 11; i <= 33; i++) {
    console.log('Task2 "for" ' + i);
    
}

i = 11;
while (i <= 33) {
    console.log('Task2 "while" ' +i);
    i++;
}

// Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100.
for (let i = 1; i <= 100; i++) {
    if (i % 2 == 0) {
      console.log('Task3 "for" ' + i);
    }
  }

i = 2;
while (i <= 100) {
    console.log('Task3 "while" ' + i);
    i += 2;
    
}

// Naudodami ciklą parodykite sumą nuo 1 iki 100.
let sum = 0;
for (let i = 1; i <= 100; i++) {
    sum += i;

}
console.log('Task3 "for" ' + sum);

sum = 0,
i = 1;
while (i <= 100) {
    sum += i;
    i++;
        
}
console.log('Task3 "while" ' + sum);

// For ir masyvai
// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane.
let arr = [1, 2, 3, 4, 5];
for (let i = 0; i <= arr.length - 1; i++) {
	document.write(arr[i]);
}

// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.
sum = 0;
for (let i = 0; i < arr.length; i++) {
  sum += arr[i];
}
console.log('Task5 ' + sum);

//////////////////mokytojo pvz////////////////

// For and While

// Atspausdinkite skaičių stulpelį nuo 1 iki 100.
for (let i = 1; i <= 100; i++) {
	console.log('for', i);
}

let i = 1;

while (i <= 100) {
	console.log('while', i);

	i++;
}

// Atspausdinkite skaičių stulpelį nuo 11 iki 33.
for (let i = 11; i <= 33; i++) {
	console.log('for', i);
}

i = 11;

while (i <= 33) {
	console.log('while', i);
	i++;
}

// Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100.
for (let i = 0; i <= 100; i++) {
	if (i % 2 == 0) {
		console.log('for', i );
	}
}

for (let i = 0; i <= 100; i+=2) {
	console.log('for', i);
}

// Naudodami ciklą parodykite sumą nuo 1 iki 100.
let result = 0,
	count  = 1;

while (count != 100) {
	result += count; // result = result + count;

	count++;
}

// For ir masyvai
// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane.

let things = [1, 2, 3, 4, 5];

for (let i = things.length - 1; i >= 0; i--) {
	console.log(things[i]);
}

for (let i = 0; i < things.length; i++) {
	console.log(things[i]);
}

// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.
// things = [1, 2, 3, 4, 5];

result = 0;

for (let i = 0; i < things.length; i++) {
	result += things[i];
} 

console.log(result);