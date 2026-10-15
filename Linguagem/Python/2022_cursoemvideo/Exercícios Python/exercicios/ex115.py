def cadastrar(arq, nome='desconhecido', idade=0):
    try:
        a=open(arq,'at')
    except:
        print('Houve um erro no arquivo')
    else:
        try:
            a.write(f'{nome};{idade}\n')
        except:
            print('Erro na hora de escrever.')
        else:
            print('Cadastro feito com sucesso.\n')
            print('-' * 30)
            a.close()

import pasta115
print('-'*30)
print(f'{"MENU PRINCIPAL":^30}')
print('-'*30)

arq = 'arq115.txt'


try:
    a=open(arq,'rt')
    a.close()
    print('Arquivo encontrado')
except FileNotFoundError:
    a=open('arq115.txt', 'wt+')
    a.close()

while True:
    try:
        x1 = int(input(f'1 - Ver pessoas cadastradas\n2 - Cadastrar novas pessoas'
                       f'\n3 - Sair do sistema\n{"-" * 30}\nSua opção: '))
        print('-' * 30)
        if x1==1:
            try:
                a=open('arq115.txt', 'rt')
                print(f'{"PESSOAS CADASTRADAS":^30}')
                print('-' * 30)
                print(a.read())
            except:
                print('Erro ao ler o arquivo')
            break
        elif x1==2:
            print('Novo cadastro:\n')
            nome=str(input('nome: '))
            idade=int(input('idade: '))
            cadastrar('arq115.txt',nome,idade)
        elif x1==3:
            print("Encerrando programa")
            break
        elif x1>3:
            print(f'\nDigite um número válido.\n\n{"-" * 30}')
    except:
        print('-' * 30)
        print(f'\nDigite um número válido.\n\n{"-"*30}')