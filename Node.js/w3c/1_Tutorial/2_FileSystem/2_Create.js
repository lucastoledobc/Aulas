var fs = require('fs');

fs.open('create.txt', 'w', function (err, file) {
  if (err) throw err;
  console.log('Saved!');
}); 
