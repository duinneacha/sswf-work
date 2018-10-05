

for (loopCounter = 0; loopCounter <= 100; loopCounter++) {

  if (loopCounter % 15 === 0) {
    console.log("FizzBuzz");
  } else if (loopCounter % 3 === 0) {
    console.log("Fizz");
  } else if (loopCounter % 5 === 0) {
    console.log("Buzz");
  } else {
    console.log(loopCounter);
  }

}