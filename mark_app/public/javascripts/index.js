var express = require('express');
var router = express.Router();
var mysql = require('mysql');
var knex = require('knex')({
  dialect: 'mysql',
  connection: {
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'my-markdown-db',
    charset: 'UTF-8'
  }
});
var bookshelf = require('bookshelf')(knex);
bookshelf.plugin('pagination');

var user = bookshelf.Model.extends({
  tableName: 'users'
});

var markData = bookshelf.Model.extends({
  tableName: 'markdata',
  hashTimestamps: true,
  user: function() {return this.belongsTo(user)}
});

router.get('/', function(req, res, next) {
  if( req.session.login === null ){
    res.redirect('/login');
    return;
  }
  new markData(['title'])
    .orderBy('create_at', 'DESC')
    .where('user_id', '=', req.session.login.id)
    .fetchPage({
      page: 1,
      pageSize: 10,
      withRelated: ['users']
    })
    .then((collection) => {
      var data = {
        title: 'MarkDown Search',
        login: req.session.login,
        message: '最近の投稿データ',
        form: {find: ''},
        content: collection.toArray()
      };
    };)
});

router.post('/', function(req, res, next) {
  new markData()
    .orderBy('create_at', 'DESC')
    .where('content', 'LIKE', '%' + req.body.find + '%')
    .fetchAll({
      withRelated: ['users']
    })
    .then((collection) => {
      var data = {
        title: 'MarkDown Search',
        login: req.session.login,
	message: '『' + req.body.find + '』で検索された投稿データ',
        form: req.body,
        content: collection.toArray()
      };
    };)
});

module.exports = router();






