const http = require("http");
const fs = require("fs");
const ejs = require("ejs");
const url = require("url");
const indexPage = fs.readFileSync("./object/index.ejs", "UTF-8");
const styleCss = fs.readFileSync("./object/style.css", "UTF-8");

let server = http.createServer(getFromClient);

server.listen(3000);
console.log("Server start!!");

let data = {
  "Hazama": "123-456-7890",
  "Iwata": "123-456-XXXX",
  "Miyawaki": "123-456-YYYY",
  "Takami": "123-456-ZZZZ"
};

/**
 * create server
 * @param Object request
 * @param Object response
 */
function getFromClient(request, response) {
  let urlParts = url.parse(request.url, true);

  switch (urlParts.pathname) {
    case "/object/":
      responseIndex(request, response);
      break;
    case "/object/style.css":
      response.writeHead(200, {"Content-Type": "text/css"});
      response.write(styleCss);
      response.end();
      break;
    default:
      response.writeHead(404, {"Content-Type": "text/plain"});
      response.end("４０４エラー");
      break;
  }
}

function responseIndex(request, response){
  let msg = "Indexページ";
  let content = ejs.render(indexPage, {
    title: "Index",
    data: data,
    filename: "./object/data"
  });
  response.writeHead(200, {"Content-Type": "text/html"});
  response.write(content);
  response.end();
}
