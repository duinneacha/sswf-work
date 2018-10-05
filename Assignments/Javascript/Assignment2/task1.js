

const squareNumber = (number) => {
  let numberSquared = number * number;
  console.log(`The result of squaring the number ${number} is ${numberSquared}`);
  return numberSquared;
};

const halfNumber = (number) => {
  let numberHalved = number / 2;
  console.log(`Half of ${number} is ${numberHalved}`);
  return numberHalved;
};


const percentOf = (number1, number2) => {
  let percentage = (number1 / number2) * 100;
  console.log(`${number1} is ${percentage}% of ${number2}`);
  return percentage;
};


const areaOfCircle = (radius) => {
  circleArea = parseFloat(Math.PI * (radius * radius)).toFixed(2);
  console.log(`The area for a circle with radius ${radius} is ${circleArea}`);
  return circleArea;
};

const allOfTheAbove = (number) => {

  console.log(`Running calculations on ${number}`);
  hlfNum = halfNumber(number);
  sqNum = squareNumber(hlfNum);
  cirRad = areaOfCircle(sqNum);
  resultPercentage = percentOf(cirRad, sqNum);

}

squareNumber(9);
halfNumber(5);

percentOf(2, 4);

areaOfCircle(2);


allOfTheAbove(5);