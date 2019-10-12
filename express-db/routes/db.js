var express = require('express');
var router = express.Router();
var mysql = require('mysql');
const { check, validationResult } = require('express-validator/check');

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
    error: "",
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
  connection.query(updateSql, [updateData, id], function(error, results, fields) {
    res.redirect('/db');
  });
  connection.end();
});

router.post('/insert', [check('name').isLength({ min: 1}).withMessage('名前を入力してください！')], function(req, res, next) {
  const errors = validationResult(req);
  if(!errors.isEmpty()) {
    const error_array = errors.array();
    var data = {
      title: 'DB操作練習',
      error: error_array,
      content: []
    }
    res.render('db', data)
  } else {
    var name = req.body.name;
    var mail = req.body.mail;
    var age = req.body.age;
    var insertData = {
      'name': name,
      'mail': mail,
      'age': age
    };

    var connection = mysql.createConnection(mysql_setting);
    connection.connect(function(error) {console.log(error);});

    var insertSql = 'INSERT INTO mydata SET ?';
    connection.query(insertSql, insertData, function(error, results, fields) {
      res.redirect('/db');
    });
    connection.end();
  }
});


router.post('/delete', function(req, res, next) {
  var id = req.body.id;

  var connection = mysql.createConnection(mysql_setting);
  connection.connect(function(error) {console.log(error);});

  var deleteSql = 'DELETE FROM mydata WHERE id = ?';
  connection.query(deleteSql, id, function(error, results, fields) {
    res.redirect('/db');
  });
  connection.end();
});

module.exports = router;
