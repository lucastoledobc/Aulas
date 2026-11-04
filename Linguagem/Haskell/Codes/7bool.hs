-- Como o valor de w seria avaliado pelo interpretador Python?

main :: IO ()
main = do
  let 
    x = 10
    y = -2
    z = 5
    w = x * y < z / x || x / y > z * x && z * y < x
  
  putStrLn (show w)

-- True
