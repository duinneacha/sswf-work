

const DrEvil = (number) => {
  if (number !== 1000000) {
    console.log(`DrEvil(${number}): ${number} dollars`);
  } else {
    console.log(`DrEvil(${number}): ${number} dollars (pinky)`);
  }

};

DrEvil(10);
DrEvil(1000000);
