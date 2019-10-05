var express = require('express');
var router = express.Router();
var mysql = require('mysql');
var mysql_setting = {
  host: 'localhost',
  port: 8889,
  user: 'root',
  password: 'root',
  database: 'my-nodeapp-db'
};

/* GET home page. */
router.get('/', function(req, res, next) {
  var data = {
    title: 'DB接続練習',
    content: []
  };
  var connection = mysql.createConnection(mysql_setting);
  connection.connect(function(error) {console.log(error);});
  var sql = 'SELECT * FROM mydata;';
  connection.query(sql, function(error, results, fields){
    if(error === null) {
      data.content = results;
      res.render('db', data);
    }
  });
  connection.end();
});

/* POST home page. */
router.post('/edit', function(req, res, next) {
  var id = req.body.id;
  var name = req.body.name;
  var mail = req.body.mail;
  var age = req.body.age;
  var updateData = {
    'name': name,
    'mail': mail,
    'age': age
  }

  var connection = mysql.createConnection(mysql_setting);
  connection.connect(function(error) {console.log(error);});

  var updateSql = 'UPDATE mydata SET ? WHERE id = ?';
  connection.query(updateSql, [updateData, id] , function(error, results, fields) {
    res.redirect('/db');
  });
  connection.end();
});

module.exports = router;
