// Parasšykitė funkciją kuri grąžina stulpelį su lyginiais skaičiais nuo x iki x.
function evenNumbers(x, y) {
    if (x < y) {
        for (let i = x; i < y; i++) {
            if (i % 2 === 0) {
                console.log(i);
            }
        }
    } else if (x > y) {
        alert('Įveskite mažesnį x skaičių');
    } else if (isNaN) {
        alert('Įveskite skaičių');
    }
}
let x = +prompt('Įveskite x skaičių');
    y = +prompt('Įveskite y skaičių');
    evenNumbers(x, y);

// Parasšykitė funkciją kuri patikrina ar duotas skaičius yra daugiau nei 3 ir mažiau nei 10
function compare(a) {
    if (a > 3 && a < 10) {
        document.write(`Jūsų skaičius ${a} yra didesnis už 3, bet mažesnis už 10!`);
        console.log(`Jūsų skaičius ${a} yra didesnis už 3, bet mažesnis už 10!`);
    } else {
        document.write('Klaida!');
        console.log(a);
    }
}
let a = +prompt('Įveskite x, kad atitiktų x > 3 ir x < 10');
compare(a);

// Antras būdas iškviesti funkcija.
// compare(+prompt('Įveskite skaičių'));


// Parasšykitė funkciją kuri grąžina teigiamų masyvo skaičių sumą
function sumPositive(array) {
    let sum = 0;
    for (let i = 0; i < array.length; i++) {
        if (array[i] > 0) {
            sum += array[i];
        }
    }
    return sum;
}
let sum_result = sumPositive( [ 1, 2, 3, 4, 5, -2, 23, -1, -13, 10,-52 ] );
console.log(sum_result);

///////////////////////// mokytojo pvz/////////////////////////////

// Parasšykitė funkciją kuri grąžina stulpelį su lyginiais skaičiais nuo x iki x.
function eventNumbers(start, end) {
	let result = [];

	for (let i = start; i <= end; i++) {
		if (i % 2 == 0) {
			result.push(i);
		}
	}

	return result;
}

// Parasšykitė funkciją kuri patikrina ar duotas skaičius yra daugiau nei 3 ir mažiau nei 10
function checkNumber(number) {
	// if (number > 3 && number < 10) {
	// 	return true;
	// }

	// return false;

	return number > 3 && number < 10;
}

// Parasšykitė funkciją kuri grąžina teigiamų masyvo skaičių sumą
function sumEvenNumbers(arr) {
	if (Array.isArray(arr) == false) {
		return 0;
	}

	let sum = 0;

	for (let value of arr) {
		if (typeof value === 'number' && value > 0) {
			sum += value;
		}
	}

	return sum;
}

function sumEvenNumbersV2(arr = []) {
	let sum = 0;

	if (Array.isArray(arr)) {
		for (let value of arr) {
			if (typeof value === 'number' && value > 0) {
				sum += value;
			}
		}
	}

	return sum;
}