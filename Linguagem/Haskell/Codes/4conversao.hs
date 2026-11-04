main :: IO ()
main = do
  -- Int para Double
  let 
    inteiro :: Int
    inteiro = 10
    
    resultado :: Double
    resultado = fromIntegral inteiro + 5.5
      
  print resultado

  -- Double para Int
  let 
    piu = 3.5
    arredondado = round piu  -- Vira 4 (Int)
    paraBaixo   = floor pi   -- Vira 3 (Int)
    paraCima    = ceiling pi -- Vira 4 (Int)
  
  print [arredondado, paraBaixo, paraCima]

  -- String para outros
  let 
    meuInt = read "42" :: Int    
    meuBool = read "True" :: Bool  
    meuDouble = read "3.1415" :: Double
  
  print (meuInt, meuBool, meuDouble)

  -- outros para String
  let 
    textoInt    = show 123       -- Vira "123"
    textoBool   = show False     -- Vira "False"
    textoDouble = show 3.14      -- Vira "3.14"
  
  putStrLn (textoInt ++ " " ++ textoBool ++ " " ++ textoDouble)
  