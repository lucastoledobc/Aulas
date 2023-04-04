let num = [5,8,2,9,3]
num[3]=7
num.push(10)
/*for (c=0;c<num.length;c++) {
    console.log(num[c])
};

for(c in num) {
    console.log(num[c])
}*/
num.sort()
for(c in num) {
    console.log(num[c])
}
let d = num.indexOf(5)
console.log(d)
console.log(num.length)