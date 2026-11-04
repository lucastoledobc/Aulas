type Coor = (Int, Int)
data Animal = Mamifero | Ave
type Mapa = (Animal, Coor)
data Biblioteca = Biblioteca { tipo1 :: Animal, tipo2 :: Mapa}

main :: IO ()
main = do
  putStrLn "Digite o primeiro número:"
  input1 <- getLine
  
  putStrLn "Digite o segundo número:"
  input2 <- getLine
  
  let num1 = read input1 :: Int
  let num2 = read input2 :: Int
  let soma = num1 + num2
  let somaStr = show soma
  
  putStrLn ("A soma é: " ++ show soma)
  putStrLn ("A soma é: " ++ somaStr)
  

  let coor = (2, 3) :: Coor
  