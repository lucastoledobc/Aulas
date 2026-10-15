brasil=[{'nome':'lucas', 'uf':20}, {'nome':'toledo', 'uf':13}]

print(brasil)

brasil = sorted(brasil, key=lambda d: d['uf'])

print(brasil)