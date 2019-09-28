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

module.exports = router;
