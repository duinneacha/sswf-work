
const calculateSupply = (age, amountPerDay) => {

  const maxAge = 88;

  // Average Year is 365.2425 days long
  const daysPerYear = 365.2425;

  let amountNeeded = Math.round((((maxAge - age) * daysPerYear) * amountPerDay));

  console.log(`You will need ${amountNeeded} to last you until the ripe old age of ${maxAge}`);

};


calculateSupply(20, 5.2);
calculateSupply(48, 25);
calculateSupply(45, 9.2323232);




