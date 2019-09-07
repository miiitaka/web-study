var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  var data = {
    title: 'Ajax'
  };
  res.render('ajax', data);
});

module.exports = router;
