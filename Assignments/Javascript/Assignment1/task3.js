

const calcCircumfrence = (radius) => {
  circleCircumference = 2 * Math.PI * radius;
  console.log(`The circumference for a circle with radius ${radius} is ${circleCircumference}`);
};

const calcArea = (radius) => {
  circleRadius = Math.pow(Math.PI, 2) * radius;
  console.log(`The area for a circle with a radius og ${radius} is ${circleRadius}`);
};

calcCircumfrence(4.5);
calcArea(4.5);
