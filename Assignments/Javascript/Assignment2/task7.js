

var topChoices = ["Dolly Parton", "blue", "Egg Fried Rice", "Strictly Come Dancing", "Jazz"];

for (var loopCounter = 0; loopCounter < topChoices.length; loopCounter++) {
  console.log(`My #${loopCounter + 1} choice is ${topChoices[loopCounter]}`);
}

console.log("_______________________________________________________________________\n");

for (var loopCounter = 0; loopCounter < topChoices.length; loopCounter++) {

  if (loopCounter === 0) {
    var preFix = "1st";
  } else if (loopCounter === 1) {
    var preFix = "2nd";
  } else if (loopCounter === 2) {
    var preFix = "3rd";
  } else if (loopCounter === 3) {
    var preFix = "4th";
  } else if (loopCounter === 4) {
    var preFix = "5th";
  } else if (loopCounter === 5) {
    var preFix = "6th";
  } else if (loopCounter === 6) {
    var preFix = "7th";
  } else if (loopCounter === 7) {
    var preFix = "8th";
  } else if (loopCounter === 8) {
    var preFix = "9th";
  } else if (loopCounter === 9) {
    var preFix = "10th";
  }
  console.log(`My ${preFix} choice is ${topChoices[loopCounter]}`);
}

