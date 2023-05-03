let amigo ={
    nome: 'José',
    peso: 85.4,
    sexo: 'M',
    engordar (p=0) {
        this.peso+=p
    }
}

console.log(amigo)

amigo.engordar(2)

console.log(`${amigo.nome} agora pesa ${amigo.peso}`)