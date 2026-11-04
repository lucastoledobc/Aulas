-- Faça um programa para determinar o número de dígitos de um número inteiro positivo informado

loop :: Double -> Int
loop n
  | n < 10    = 1 
  | otherwise = 1 + loop (n / 10) 

main :: IO ()
main = do
  putStrLn "Num: "
  inp1 <- getLine

  let valor = read inp1 :: Double
  let count = loop valor

  putStrLn (show count)