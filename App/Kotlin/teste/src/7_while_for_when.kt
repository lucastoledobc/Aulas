fun main () {
    var num = 0

    while (num <5) {
        println(num)
        num++
    }

    println("Fim1: $num")

    for (num in 6..10)
        println(num)
        num++

    println("Fim2: $num")


    when (num) {
        1 -> println("n vai rolar")
        6 -> println("o 'for' usa um índice mas depois retorna ao valor inicial dele!")
        else -> println("Interessante")
    }


    val num2 = 2

    var texto = when(num2) {
        1 -> "um"
        2 -> "dois"
        else -> "Não é 1 nem 2"
    }

    println(texto)

}
