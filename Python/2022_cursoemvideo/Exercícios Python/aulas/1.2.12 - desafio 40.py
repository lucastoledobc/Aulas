x1=float(input('Qual a nota do teste: '))
x2=float(input('Digite a nota da prova: '))

y1=(x1+x2)/2

print(f'A média do aluno é {y1}.')

if y1<5:
    print('Esse aluno está reprovado.')
elif 5<=y1<7:
    print('Ele está de recuperação.')
elif y1>=7:
    print('Esse aluno foi aprovado diretamente.')