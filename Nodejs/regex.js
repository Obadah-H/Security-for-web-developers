var url = require('url');
const http = require('http');
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
	var u = url.parse(req.url, true);
	var id=u.query.id;
	if(id){
		let regexp = /^(\d+)*$/;
	  console.log( regexp.test(id) );
	}
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});