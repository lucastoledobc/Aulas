console.log(a1)
//console.log(a2,a3) erro



var a1 = 'var 1'
var a1 = 'var 2'

let a2 = 'let 1'
//let a2 = 'teste2' (erro)

a3 = 'n1'
a3 = 'n2'

console.log('A',a1,a2,a3)



if (2==2) {
    var b1 = 'var 1'
    let b2 = 'let 1'
    b3 = 'n1'
}

console.log("B",b1,b3)
//console.log(b2) erro



var c1 = 'var 1'
let c2 = 'let 1'
c3 = 'n1'

if (2==2) {
    var c1 = 'var 2'
    let c2 = 'let 2'
    c3 = 'n2'
}

console.log("C",c1,c2,c3)



if (2==2) {
    var d1 = 'var 1'
    let d2 = 'let 1'
    d3 = 'n1'
}
var d1 = 'var 2'
let d2 = 'let 2'
d3 = 'n2'

console.log("D",d1,d2,d3)