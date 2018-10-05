
const fixStart = (str1) => {
  var newString = "";
  theFirstCharacter = str1.charAt(0);

  for (loopCounter = 0; loopCounter < str1.length; loopCounter++) {
    var currentLetter = str1.charAt(loopCounter);

    if (str1.charAt(loopCounter) === theFirstCharacter && loopCounter !== 0) {
      newString += "*";
    } else {
      newString += currentLetter;
    }
  }
  console.log(newString);
};

fixStart("bubble");
fixStart("mammal");
fixStart("a");
fixStart("aa");