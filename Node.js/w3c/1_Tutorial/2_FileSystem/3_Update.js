var fs = require('fs');

// Substitui o original por esse
fs.writeFile('update.txt', 'Hello content!', function (err) {
  if (err) throw err;
  console.log('Saved!');
}); 

fs.writeFile('update.txt', 'Hello content2!', function (err) {
  if (err) throw err;
  console.log('Saved!');
});


// Adiciona o texto ao arquivo 
fs.appendFile('update2.txt', 'Hello,', function (err) {
  if (err) throw err;
  console.log('Saved!');
});
fs.appendFile('update2.txt', ' World!', function (err) {
  if (err) throw err;
  console.log('Saved!');
});

// Em ambos casos se o arquivo é criado se ele não existir.