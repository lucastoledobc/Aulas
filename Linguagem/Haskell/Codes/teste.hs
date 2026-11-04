-- Faça um programa que recebe uma frase e substitui todas as ocorrências de espaço por “#”.

troca :: String -> String
troca str = [if c == ' ' then '#' else c | c <- str]

main :: IO ()
main = do
  putStrLn "frase:"
  frase <- getLine
  
  -- let fraseModificada = map (\c -> if c == ' ' then '#' else c) frase
  
  let fraseModificada = troca frase

  putStrLn fraseModificada