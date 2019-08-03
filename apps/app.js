const http = require("http");
const fs = require("fs");
const ejs = require("ejs");
const url = require("url");
const qs = require("querystring");
const indexPage = fs.readFileSync("./index.ejs", "UTF-8");
const otherPage = fs.readFileSync("./other.ejs", "UTF-8");
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
  let urlParts = url.parse(request.url, true);

  switch (urlParts.pathname) {
    case "/":
      responseIndex(request, response);
      break;
    case "/other":
      responseOther(request, response);
      break;
    case "/style.css":
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
    content: msg
  });
  response.writeHead(200, {"Content-Type": "text/html"});
  response.write(content);
  response.end();
}

function responseOther(request, response){
  let msg = "Otherページ";
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
        console.log(postData.msg);
        content = ejs.render(otherPage, {
          title: "Other",
          content: postData.msg
        });
        response.writeHead(200, {"Content-Type": "text/html"});
        response.write(content);
        response.end();
      });
  }
}







