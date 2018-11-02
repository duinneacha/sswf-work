// The Word Guesser

// ASCII Art found on github user account: juliemdyer - Thank you!
hangman = [`
  +---+
  |   |
  O   |
      |
      |
      |
=========
`, `
  +---+
  |   |
  O   |
  |   |
      |
      |
=========
`, `
  +---+
  |   |
  O   |
 /|   |
      |
      |
=========
`, `
  +---+
  |   |
  O   |
 /|\\\  |
      |
      |
=========
`, `
  +---+
  |   |
  O   |
 /|\\\  |
 /    |
      |
=========
`, `
  +---+
  |   |
  O   |
 /|\\\  |
 / \\\  |
      |
=========
`];

//appendectomy
//const wordLetters = ["A", "P", "P", "E", "N", "D", "E", "C", "T", "O", "M", "Y"];
//const guessLetters = ["_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_"];

// Fox
const wordLetters = ["F", "F", "O", "X", "F"];
const guessLetters = ["_", "_", "_", "_", "_"];
const guessArray = [];

// This control will exit the program if it reaches 6.
var timesIncorrect = 0;

// Total won or lost in dollars
var totalWon = 0;

// Get Randum Number Function
const getRandumNumber = () => {
    var min = 1;
    var max = 100;
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


// Guess Letter Function - passes in the letter to be found
const guessLetter = (letter) => {

    // First check of this letter has been processed before
    var alreadyProcessed = false;
    var alreadyFound = false;
    for (var gLoop = 0; gLoop < guessArray.length; gLoop++) {

        if (letter === guessArray[gLoop]) {
            // console.log("Already processed : " + letter);
            alreadyProcessed = true;
        }
    }

    // If letter processed before - do not proceed - exit the function
    if (alreadyProcessed) {
        return;
    }

    console.log("\n\nSearching for : " + letter)
    var correctGuess = false;
    var moreToGuess = false;
    var currentWin = 0;
    var timesFound = 0;
    var finished = false;

    for (var loopWordCounter = 0; loopWordCounter < wordLetters.length; loopWordCounter++) {

        // Check for letter
        if (wordLetters[loopWordCounter] == letter) {

            //console.log("\nLetter Found -> " + letter + " at position: " + loopWordCounter);
            guessLetters[loopWordCounter] = letter;
            correctGuess = true;
            timesFound = timesFound + 1;
            //console.log("TimesFound: " + timesFound + " Lettter: " + letter);
            if (timesFound === 1) {
                currentWin = getRandumNumber();
                console.log("Current Win: " + currentWin + " dollars  for letter: " + letter);
            }


            //totalWon = totalWon + currentWin;
            //console.log("Current Win: " + currentWin + " Running Total: " + totalWon + " for letter: " + letter)
        }
        if (guessLetters[loopWordCounter] == '_') {
            moreToGuess = true;
        }
    }
    if (timesFound > 0) {
        totalWon = totalWon + (currentWin * timesFound);
        console.log(`Current Win: ${currentWin} (timesWon ${timesFound}) SubTotal = ${(currentWin * timesFound)}  Running Total: ${totalWon} dollars for letter: ${letter}`);

    }

    if (correctGuess) {
        console.log(`Good Job!, Correct Letter: ${letter}`);
        console.log(guessLetters.join(''));
        if (!moreToGuess) {

            if (totalWon < 0) {
                console.log(`You eventually guessed right but you owe: ${(totalWon * -1)} dollars`);
            } else {
                console.log(`YOU WON!  ${totalWon} dollars`);
                finished = true;
            }

            // Exit now that you have won!!!!!!!
            process.exit();

        }
    } else {
        console.log(`Incorrect Choice - for letter: ${letter} `);
        timesIncorrect++;
        console.log(hangman[(timesIncorrect - 1)]);
        if (timesIncorrect === 6) {
            console.log(`You have reached 6 incorrect guesses - GAME OVER!`);
            console.log(`The correct word was ${wordLetters.join('')} `);
            process.exit();
        } else {
            console.log(`You have ${6 - timesIncorrect} chances remaining!`);
        }

        if (!finished) {
            currentWin = (getRandumNumber() * -1);
            totalWon = totalWon + currentWin;
            console.log(`Current Win: ${currentWin} Running Total: ${totalWon} dollars`);
        }

    }

    // Push the letter to the guessArray for future check to see if this letter is processed again
    guessArray.push(letter);
    //console.table(guessArray);
}



guessLetter('J');

// guessLetter('J');
guessLetter('K');
guessLetter('L');
guessLetter('M');
guessLetter('N');
guessLetter('D');
guessLetter('U');
//guessLetter('Z');
// guessLetter('O');


guessLetter('F');
guessLetter('F');
guessLetter('O');
guessLetter('X');
guessLetter('J');
guessLetter('J');
guessLetter('J');
guessLetter('J');
guessLetter('J');


// guessLetter('A');
// guessLetter('P');
// guessLetter('P');
// guessLetter('E');
// guessLetter('N');
// guessLetter('D');
// guessLetter('E');
// guessLetter('C');
// guessLetter('T');
// guessLetter('O');
// guessLetter('M');
// guessLetter('Y');
