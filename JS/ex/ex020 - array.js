let num = [5,8,2,9,3]

console.log('Vetor inicial: '+num)
num[3]=7
console.log('num[3]=7: '+num)
num.push(10)
console.log('push 10: '+num)

/*
for (c=0;c<num.length;c++) {
    console.log(num[c])
};

for(c in num) {
    console.log(num[c])
}
*/

num.sort()

for(c in num) {
    console.log(num[c])
}

console.log('num.sort(): '+num)

let d = num.indexOf(5)
console.log('num.indexOf(5): '+d)
console.log('num.length: '+num.length)