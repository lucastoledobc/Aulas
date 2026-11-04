-- Faça um programa que calcule o IMC de uma pessoa (IMC = massa em kg / altura em metros elevado ao quadrado) e informe a sua classificação segundo a tabela a seguir, obtida na Wikipédia


main :: IO ()
main = do
  putStrLn "Insira seu peso(kg):"
  inp1 <- getLine
  putStrLn "Insira sua altura(m):"
  inp2 <- getLine

  let peso = read inp1 :: Double
  let altura = read inp2 :: Double
  let imc = peso / (altura * altura)

  let classificacao = 
        if imc < 18.5 
          then "Abaixo do peso."
          else if imc < 24.9 
            then "Saudável."
            else if imc < 29.9 
              then "Peso em excesso."
              else if imc < 34.9 
                then "Obesidade Grau I."
                else if imc < 39.9 
                  then "Obesidade Grau II (severa)."
                  else "Obesidade Grau III (mórbida)"

  putStrLn classificacao