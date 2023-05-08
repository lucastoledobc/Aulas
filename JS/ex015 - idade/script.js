function verificar() {
    var data = new Date().getFullYear()
    var ano = document.getElementById('txtano')
    var res = document.getElementById('res')
    var img = document.createElement('img')
    
    if (ano.value.length == 0 || ano.value > data)
        alert('ERRO. Verifique o ano')
    else {
        var sex = document.getElementsByName('radsex')
        var idade = data - Number(ano.value)
        var gen = ''
        if (sex[0].checked) {
            gen = 'homem'
            if (idade <18)
                img.setAttribute('src', 'img/azulclaro.png')
            else
                {img.setAttribute('src', 'img/azulescuro.png')}
        }
        else {gen = 'mulher'
            if (idade <18)
                img.setAttribute('src', 'img/rosaclaro.png')
            else
                img.setAttribute('src', 'img/rosaescuro.png')
        }    

        res.innerHTML = `Essa pessoa tem ${idade} anos e é ${gen}.`

        
        res.appendChild(img)

        img.style.padding = '10px'
        img.style.display = 'block'
        img.style.margin = 'auto'
        img.style.borderRadius = '50%'
    }
}