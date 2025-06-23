// Function to check if a number is even or odd
function checkEvenOdd(numbers) {
    for (let i = 0; i < numbers.length; i++) {
        console.log(numbers[i] % 2 == 0?`${numbers[i]} is Even`:`${numbers[i]} is Odd`)
    }
}

// Example array
let numArray = [12, 7, 9, 4, 15, 22, 31];

// Call the function
checkEvenOdd(numArray);


// Function to find and display the factors of a number
function findFactors(number) {
    console.log("Factors of " + number + " are:");
    for (let i = 1; i <= number; i++) {
        if (number % i === 0) {
            console.log(i);
        }
    }
}

// Example usage
let num = 28;
findFactors(num);

function multiplyPrimeByTwo(arr) {
    for (let i = 0; i < arr.length; i++) {
        let num = arr[i];
        let isPrime = true;

        if (num < 2) {
            isPrime = false;
        } else {
            for (let j = 2; j <= Math.sqrt(num); j++) {
                if (num % j === 0) {
                    isPrime = false;
                    break;
                }
            }
        }

        if (isPrime) {
            arr[i] = num * 2;
            console.log(num + " is prime, multiplied to " + arr[i]);
        }
    }

    return arr;
}

// Example usage
let a = [3, 4, 6, 7, 9, 2];
let updated = multiplyPrimeByTwo(a);
console.log("Updated array:", updated);


