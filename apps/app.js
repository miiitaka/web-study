const http = require("http");
const fs = require("fs");
const ejs = require("ejs");
const url = require("url");
const indexPage = fs.readFileSync("./index.ejs", "UTF-8");
const styleCss = fs.readFileSync("./style.css", "UTF-8");

let server = http.createServer(getFromClient);

server.listen(3000);
console.log("Server start!!");

/**
 * create server
 * @param Object request
 * @param Object response
 */
function getFromClient(request, response) {
  let urlParts = url.parse(request.url);
  switch (urlParts.pathname) {
    case "/":
      let content = ejs.render(indexPage, {
        title: "タイトル",
        content: "コンテンツ"
      });
      response.writeHead(200, {"Content-Type": "text/html"});
      response.write(content);
      response.end();
      break;

    case "/style.css":
      response.writeHead(200, {"Content-Type": "text/css"});
      response.write(styleCss);
      response.end();
      break;

    default:
      break;
  }
}
