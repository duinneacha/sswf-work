
const verbing = (word) => {

  if (word.length > 3) {

    if (word.slice(word.length - 3, word.length) === 'ing') {
      word += 'ly';
    } else {
      word += 'ing';
    }
  }

  console.log(word);
};

verbing("swimming");
verbing("walk");
verbing("go");
verbing("ferret");
