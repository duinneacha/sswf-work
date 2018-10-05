
for (outerLoopCounter = 0; outerLoopCounter <= 7; outerLoopCounter++) {
  var innerLoopString = "";

  for (innerLoopCounter = 0; innerLoopCounter < outerLoopCounter; innerLoopCounter++) {
    innerLoopString = innerLoopString + "#";
  }
  console.log(innerLoopString);
}