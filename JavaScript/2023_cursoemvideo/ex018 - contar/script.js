function contar() {
    var ini = document.getElementById('txti')
    var fim = document.getElementById('txtf')
    var pas = document.getElementById('txtp')
    var res = document.getElementById('res')

    if (ini.value.length == 0 || fim.value.length == 0 || pas.value.length == 0) {
        alert('Erro. Alguma caixa está vazia')
    } else {
        res.innerHTML = 'Contando: '
        ini = Number(ini.value)
        fim = Number(fim.value)
        pas = Number(pas.value)
        if (ini > fim) {
            alert('Erro. O início ta maior que o fim.')
        } if (pas<=0) {
            alert('Erro. O passo não pode ser menor do que 1')
            pas = 1
        }
        else {
            while (ini <= fim) {
                res.innerHTML += `👉 ${ini} `
                ini += pas
            }
        res.innerHTML += `👍`
        }
    }


}