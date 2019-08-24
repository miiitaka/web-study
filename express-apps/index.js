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

app.engine("ejs", ejs.renderFile);
app.use(express.static("public"));
app.use(session(session_option));
app.use("/", index2);
app.get("/", (request, response) => {
  let message = "メッセージ";
  if (request.session.message !== undefined) {
    message = "最後の" + request.session.message;
  }
  response.render("index.ejs", {
    title: "トップページ",
    link: {
      href: "other?name=tasaki",
      text: "その他"
    }
  });
});
app.get("/other", (request, response) => {
  let name = request.query.name;
  response.render("index.ejs", {
    title: "その他",
    link: {
      href: "/",
      text: name
    }
  });
});
app.listen(3000, () => {
  console.log("Server Start");
});
