// Load environment - Development / Test / eventually -> Production
require('./config/config');
const path = require('path');
const http = require('http');

// Handlebars
const hbs = require('hbs');

// Register Partials
hbs.registerPartials.path.join(__dirname, '/views/partials');

// Create the path of the public folder
//const publicPath = path.join(__dirname, './public');

// Require Express Web Framework
const express = require('express');



// Instantiate an express object
const app = express();

// Get the port number from the config file
const port = process.env.PORT;

// Create a server object
const server = http.createServer(app);

// Set up the view engine
app.set('view engine', 'hbs');

// Let app know where the public folder is
app.use(express.static(publicPath));


// Run the server
server.listen(port, () => {
  console.log(`Server started on port ${port}`);
});






