-- Faça um programa que calcule o IMC de uma pessoa (IMC = massa em kg / altura em metros elevado ao quadrado) e informe a sua classificação segundo a tabela a seguir, obtida na Wikipédia


classificaIMC :: Double -> String
classificaIMC imc
  | imc < 18.5 = "Abaixo do peso."
  | imc < 24.9 = "Saudável."
  | imc < 29.9 = "Peso em excesso."
  | imc < 34.9 = "Obesidade Grau I."
  | imc < 39.9 = "Obesidade Grau II(severa)."
  | otherwise   = "Obesidade Grau III (mórbida)"

main :: IO ()
main = do
  putStrLn("Insira seu peso(kg):")
  inp1 <- getLine
  putStrLn("Insira sua altura(m):")
  inp2 <- getLine

  let peso = read inp1 :: Double
  let altura = read inp2 :: Double
  let imc = peso/(altura*altura)

  putStrLn (classificaIMC imc)
  