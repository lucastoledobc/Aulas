main :: IO ()
main = do
  putStrLn "Nome: "
  nome <- getLine
  
  putStrLn ("Olá, " ++ nome ++ ".")