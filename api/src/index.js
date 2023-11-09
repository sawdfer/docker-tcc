const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
  host: "mysql-container",
  user: "root",
  password: "sawdfer",
  database: 'tcc',
  insecureAuth: true
});

connection.connect();

app.get('/wait_list', function(req, res) {
  connection.query('SELECT * FROM wait_list', function (error, results) {

    if (error) { 
      throw error
    };

    res.send(results.map(item => ({ placa: item.placa, chegada: item.chegada, status: item.status })));
  });
});


app.listen(9001, '0.0.0.0', function() {
  console.log('Listening on port 9001');
});