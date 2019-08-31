var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  var data = {
    title: 'Hello',
    content: '※何か書いて下さい'
  };
  res.render('hello', data);
});

/* POST home page  */
router.post('/', function(req, res, next) {
  var data = {
    title: 'Hello',
    content: 'あなたは ' + req.body['text'] + ' と書きました。'
  };
  res.render('hello', data);
});
module.exports = router;
