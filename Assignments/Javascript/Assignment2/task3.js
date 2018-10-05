

const mixUp = (str1, str2) => {

  newStr1 = str2.slice(0, 2) + str1.slice(2, str1.length);
  newStr2 = str1.slice(0, 2) + str2.slice(2, str2.length);

  console.log(newStr1, newStr2);
};

mixUp("hairy", "buck");
mixUp("Aidan", "Dennehy");
