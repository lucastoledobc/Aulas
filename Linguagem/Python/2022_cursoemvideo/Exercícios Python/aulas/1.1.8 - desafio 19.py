import random

x1=input('Digite o nome do primeiro aluno: ')
x2=input('Digite o nome do segundo aluno: ')
x3=input('Digite o nome do terceiro aluno: ')

print(f'Então ficamos com:\n1 - {x1}\n2 - {x2}\n3 - {x3}')

y1=random.randint(1,3)

print(f'O escolhido foi {y1}')