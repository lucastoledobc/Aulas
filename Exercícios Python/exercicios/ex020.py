import random
from typing import List

print('Vamos colocar em ordem!')

a1=str(input('Qual nome do primeiro grupo: '))
a2=str(input('E o segundo: '))
a3=str(input('Terceiro: '))
a4=str(input('ùltimo agora: '))

b1: list[str]=[a1,a2,a3,a4]
random.shuffle(b1)

print(f'\nA ordem de apresentação será: {b1}')