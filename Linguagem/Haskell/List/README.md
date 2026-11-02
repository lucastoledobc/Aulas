# List

lostNumbers = [4,8,15,16,23,42]  

## juntando listas ++

ghci> [1,2,3,4] ++ [9,10,11,12]  
[1,2,3,4,9,10,11,12]  

ghci> "hello" ++ " " ++ "world"  
"hello world"  

ghci> ['w','o'] ++ ['o','t']  
"woot"  


## adicionando na lista :
````
ghci> 'A':" SMALL CAT"  
"A SMALL CAT"  

ghci> 5:[1,2,3,4,5]  
[5,1,2,3,4,5]  
````

## pegar da lista !!
````
ghci> "Steve Buscemi" !! 6  
'B'  

ghci> [9.4,33.2,96.2,11.2,23.25] !! 1  
33.2  
````


## comparar listas

Ele verifica o primeiro, se for igual vê o próximo.
````
ghci> [3,2,1] > [2,10,100]  
True  

ghci> [3,4,2] > [3,4]  
True  
````

## Range
````
ghci> [1..10]  
[1,2,3,4,5,6,7,8,9,10]  

ghci> ['a'..'z']  
"abcdefghijklmnopqrstuvwxyz"  

ghci> ['K'..'Z']  
"KLMNOPQRSTUVWXYZ"  

ghci> [3,6..20]  
[3,6,9,12,15,18]  
````

## list comprehension
````
ghci> [x*2 | x <- [1..10]]  
[2,4,6,8,10,12,14,16,18,20]  

ghci> [x*2 | x <- [1..10], x*2 >= 12]  
[12,14,16,18,20] 

boomBangs xs = [ if x < 10 then "BOOM!" else "BANG!" | x <- xs, odd x]  
ghci> boomBangs [7..13]  
["BOOM!","BOOM!","BANG!","BANG!"]  

ghci> nouns = ["hobo","frog","pope"]  
ghci> adjectives = ["lazy","grouchy","scheming"]  
ghci> [adjective ++ " " ++ noun | adjective <- adjectives, noun <- nouns]  
["lazy hobo","lazy frog","lazy pope","grouchy hobo","grouchy frog",  
"grouchy pope","scheming hobo","scheming frog","scheming pope"]  

ghci> let xxs = [[1,3,5,2,3,1,2,4,5],[1,2,3,4,5,6,7,8,9],[1,2,4,2,1,6,3,1,3,2,3,6]]  
ghci> [ [ x | x <- xs, even x ] | xs <- xxs]  
[[2,2,4],[2,4,6,8],[2,4,2,6,2,6]]  

````