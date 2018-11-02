// The Cash Register

const shoppingCart = {
   banana: "1.25",
   handkerchief: ".99",
   Tshirt: "25.01",
   apple: "0.60",
   naglene: "10.34",
   proteinShake: "22.36"
};


const cashRegister = (cartForParty) => {
    
   const values = Object.values(cartForParty)
   
   var cartTotal = 0;
   for (valueLoop = 0; valueLoop < values.length; valueLoop++) {
      cartTotal = cartTotal + parseFloat(values[valueLoop]);
   }

   return cartTotal;
}


total = cashRegister(shoppingCart);

console.log(`The total Price of the shopping cart is ${total}`);
