var http = require('http')
var request = require('request')

http.createServer(function (req, res) {
  var data = ''
  req.setEncoding('utf8')
  req.on('data', function (chunk) {
    console.log('data')
    data += chunk
  })
  req.on('end', function () {
    // this will print uninitialized memory from the client
    console.log('Client sent:\n', data)
  })
  res.end()
}).listen(8000)

request({
  method: 'POST',
  uri: 'http://localhost:8000',
  multipart: [{ body: 1000 }]
},
function (err, res, body) {
  if (err) return console.error('upload failed:', err)
  console.log('sent')
})