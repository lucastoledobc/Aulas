let lista = document.getElementById('flist')
let v =[]


function adicionar() {
    var n = document.getElementById('txtn')
    n = Number(n.value)
    if (v.indexOf(n)==-1) {
        v.push(n)
        let item = document.createElement('option')
        item.text = `Valor ${n} adicionado`
        lista.appendChild(item) 
    } else {
        alert('Número já adicionado')
    }
    n = ''
    n.focus()
}

function contar() {
    if (v.length==0) {alert('Digite algum valor antes')}
    else {
    v.sort()
    var res = document.getElementById('res2')
    let a1 = v.length
    let a2 = v[v.length-1]
    let a3 = v[0]
    let a4 = 0
    for (c in v) {a4 += v[c]}
    let a5 = a4/a1

    res.innerHTML = `<br>Ao todo, temos ${a1} números cadastrados.`
    res.innerHTML += `<br>O maior valor informado foi ${a2}.`
    res.innerHTML += `<br>O menor valor informado foi ${a3}.`
    res.innerHTML += `<br>Somando todos os valores temos ${a4}.`
    res.innerHTML += `<br>A média dos valores digitados é ${a5}.`
    }
}

function limpar() {
    var res = document.getElementById('res2')
    res.innerHTML = ''
    lista.innerHTML = ''
    v=[]
}