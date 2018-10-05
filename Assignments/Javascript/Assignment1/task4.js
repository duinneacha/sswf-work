

const celciusToFaranheit = (celciusTemperature) => {
  let faranheitTemperature = celciusTemperature * (9 / 5) + 32;
  console.log(`${celciusTemperature}°C is ${faranheitTemperature}°F`);
};

const faranheitToCelcius = (faranheitTemperature) => {
  let celciusTemperature = Math.round((((faranheitTemperature - 32) * 5) / 9));
  console.log(`${faranheitTemperature}°F is ${celciusTemperature}°C`);
};

celciusToFaranheit(25);
faranheitToCelcius(99);
