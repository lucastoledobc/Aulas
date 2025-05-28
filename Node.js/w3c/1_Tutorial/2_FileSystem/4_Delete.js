var fs = require('fs');

fs.unlink('create.txt', function (err) {
  if (err) throw err;
  console.log('File deleted!');
}); 