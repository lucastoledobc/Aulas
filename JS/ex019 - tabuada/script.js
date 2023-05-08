function contar() {
    var n = document.getElementById('num')
    var res = document.getElementById('res')

    if (n.value.length == 0) {
        alert('Erro. A caixa está vazia')
    } else {
        n = Number(n.value)
        res.innerHTML = 'Segue a Tabuada: <br>'
        for (c=1;c<=10;c++){
            res.innerHTML += `${n} x ${c} = ${n*c}<br>`
        }
    }
}