a1=input('Digite uma frase: ')
b1=a1.lower()
print(f'''
Nessa frase tem {b1.count('a')} letras A.
A primeira letra A aparece na posição {b1.find('a')+1}.
E a última letra A aparece na posição {b1.rfind('a')+1}.''')