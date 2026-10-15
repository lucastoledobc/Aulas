y1={}

y1['nome']=str(input('Nome: '))
y1['nota']=float(input(f'Noda do {y1["nome"]}: '))
if y1['nota']<5:
    y1['situação']='Reprovado'
elif 5<=y1["nota"]<7:
    y1["situação"]='Recuperação'
elif y1["nota"]>=7:
    y1["situaçãp"]='Aprovado'

for k,v in y1.items():
    print(f'- {k} é igual a {v}')