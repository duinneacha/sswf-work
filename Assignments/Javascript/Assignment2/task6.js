

const notBad = (str) => {

  var notWordFound = str.indexOf('not');
  var badWordFound = str.indexOf('bad');

  //console.log(notWordFound);
  //console.log(badWordFound);

  if (notWordFound === -1 || badWordFound === -1 || badWordFound < notWordFound) {
    return str;
  }

  newStr = str.slice(0, notWordFound) + "good" + str.slice(badWordFound + 3);
  return newStr;
};


console.log(notBad("The dinner is not that bad"));
console.log("The bad man was not right");
console.log(notBad("The sun shone in Florence"));
