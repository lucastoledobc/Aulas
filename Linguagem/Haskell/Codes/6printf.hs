import Text.Printf (printf)

main :: IO ()
main = do
  putStrLn "Raio:"
  inp1 <- getLine
  
  let raio = read inp1 :: Double
  let circu = 2 * pi * raio
  let area = pi * raio * raio

  printf "O valor de raio dado foi de %.2f metros.\nA circunferência terá o valor de %.2f metros e a área desse círculo é %.2f m².\n" raio circu area  