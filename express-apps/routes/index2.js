let express = require("express");
let ejs = require("ejs");
let session = require("express-session");
let session_option = {
  secret: "keyboard cat",
  resave: false,
  saveUninitialized: false,
  cookie: {maxAge: 60*60*1000}
};
let app = express();
let router = express.Router();

router.get("/", (request, response, next) => {
  let message = "メッセージ";
  if (request.session.message !== undefined) {
    message = "最後の" + request.session.message;
  }
  response.render("index.ejs", {
    title: "session",
    contents: message
  });
});
router.post("/", (request, response, next) => {
  let message = request.body["message"];
  request.session.message = message;
  response.render("index.ejs", {
    title: "セッション設定",
    contents: message
  });
});
module.exports = router;

app.listen(3000, () => {
  console.log("Server Start!");
});
