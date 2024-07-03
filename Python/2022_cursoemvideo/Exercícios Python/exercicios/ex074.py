import random

y1=(random.randint(1,10),random.randint(1,10),random.randint(1,10),random.randint(1,10),random.randint(1,10))
print(y1)
y2=sorted(y1)
print(y2)
print(f'O menor valor sorteado foi {y2[0]} e o maior é {y2[4]}.')
print(f'O menor valor sorteado foi {min(y1)} e o maior é {max(y1)}.')