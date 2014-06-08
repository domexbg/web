/*
// we need to handle http requests
    var http = require('http');
    
    // this function creates our server and starts listening to port 1337
    http.createServer(function (req, res) {
    
      // send plain text content
      res.writeHead(200, {'Content-Type': 'text/plain'});
    
      // print out Hello World
      res.end('Hello World\n');}).listen(1337, '127.0.0.1');
    
    // display message in the console
    console.log('Server running at http://127.0.0.1:1337/');
*/

    // load the express module
    var express = require('express');
    
    // declare our app
    var app = express();
    
    // handle get requests at the / route
    app.get('/', function(req, res){
      res.send('Hello World\n');    // some voodoo magic
    });
    
    // listen for requests
    var server = app.listen(1337, function() {
        console.log('Listening on port %d', server.address().port);
    });