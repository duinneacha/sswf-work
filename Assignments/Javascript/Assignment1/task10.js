

const isPalindrome = (word) => {
  let lengthOfString = Math.floor(word.length / 2);
  for (var loopCounter = 0; loopCounter < lengthOfString; loopCounter++)
    if (word[loopCounter] !== word[word.length - loopCounter - 1]) {
      return false;
    }

  return true;


};

var wordToVerify = "abba";
// var wordToVerify = "madam";
var wordToVerify = "Aidan";


let isPalin = isPalindrome(wordToVerify);
if (isPalin) {
  console.log(`${wordToVerify} is a Palindrome`);
} else {
  console.log(`${wordToVerify} is a not Palindrome`);
}

