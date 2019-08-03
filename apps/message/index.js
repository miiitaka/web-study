const http = require("http");
const fs = require("fs");
const ejs = require("ejs");
const url = require("url");
const qs = require("querystring");
const indexPage = fs.readFileSync("./message/index.ejs", "UTF-8");
const styleCss = fs.readFileSync("./message/style.css", "UTF-8");

let server = http.createServer(getFromClient);

server.listen(3000);
console.log("Server start!!");

/**
 * create server
 * @param Object request
 * @param Object response
 */
function getFromClient(request, response) {
  let urlParts = url.parse(request.url, true);

  switch (urlParts.pathname) {
    case "/message/":
      responseIndex(request, response);
      break;
    case "/message/style.css":
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
  let content;
  let method = request.method.toUpperCase();

  switch(method){
    case "POST":
      let body = "";
      
      request.on("data", (data) => {
        body += data;
      });

      request.on("end", () => {
        let postData = qs.parse(body);
        content = ejs.render(indexPage, {
          title: "POST",
          message: postData.msg
        });
        response.writeHead(200, {"Content-Type": "text/html"});
        response.write(content);
        response.end();
      });
      break;
    default:
      content = ejs.render(indexPage, {
        title: "Index",
        message: "※メッセージを入力してください"
      });
      response.writeHead(200, {"Content-Type": "text/html"});
      response.write(content);
      response.end();
      break;
  }
}
