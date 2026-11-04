-- Faça um programa que leia o nome, a idade, a altura, o peso e a nacionalidade do usuário e escreva essas informações na forma de um parágrafo de apresentação


main :: IO()
main = do
  print "Informe seus dados, como:"
  print "Nome: "
  nome <- getLine
  print "Idade: "
  idade <- getLine
  print "altura: "
  altura <- getLine
  print "peso: "
  peso <- getLine
  print "nacio: "
  nacio <- getLine

  putStrLn ("Olá, sou " ++ nome ++ " e tenho " ++ idade ++ " anos. Sou " ++ nacio ++ ", tenho " ++ altura ++ " m de altura e peso " ++ peso ++ " kg.")