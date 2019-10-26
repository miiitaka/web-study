//var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var bodyParser = require('body-parser');
var session = require('express-session');
var validator = require('express-validator');

var indexRouter = require('./routes/index');
var loginRouter = require('./routes/login');
var addRouter = require('./routes/add');
var markRouter = require('./routes/mark');

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));
app.use(validator());

app.use('/', indexRouter);
app.use('/login', loginRouter);
app.use('/add', addRouter);
app.use('/mark', markRouter);

var option = {
  secret: 'abc',
  resave: false,
  saveUninitialized: false,
  cookie: {maxAge: 60*60*1000}
};
app.use(session(option));

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
