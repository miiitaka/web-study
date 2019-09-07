var express = require("express");
var router = express.Router();

var data = [
  {name: "田崎",age: 25,mail: "tasaki@example.com"},
  {name: "山田",age: 24,mail: "yamada@example.com"},
  {name: "田中",age: 26,mail: "tanaka@example.com"}
];

router.get("/", (request, response, next) => {
  var n = request.query.id;
  response.json(data[n]);
});

module.exports = router;
