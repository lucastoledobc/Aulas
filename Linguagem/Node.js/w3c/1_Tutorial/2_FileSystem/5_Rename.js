var fs = require('fs');

fs.rename('update.txt', 'update1.txt', function (err) {
  if (err) throw err;
  console.log('File Renamed!');
}); 