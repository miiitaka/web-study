var express = require("express");
var router = express.Router();
var https = require("https");
var parseString = require("xml2js").parseString;

router.get("/", (request, response, next) => {
  var option = {
    host: "news.google.com",
    port: 443,
    path: "/rss?ie=utf-8&oe=utf-8&hl=ja&gl=JP&ceid=JP:ja"
  };
  https.get(option, (res) => {
    var body = "";
    res.on("data", (data) => {
      body += data;
    });
    res.on("end", () => {
      parseString(body.trim(), (error, result) => {
        var data = {
          title: "XMLお試し",
          content: result.rss.channel[0].item
        };
        response.render("xmlPrac", data);
      });
    });
  });
});

module.exports = router;
