let express = require("express");
let ejs = require("ejs");
let app = express();

app.engine("ejs", ejs.renderFile);
app.use(express.static("public"));
app.get("/", (request, response) => {
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
