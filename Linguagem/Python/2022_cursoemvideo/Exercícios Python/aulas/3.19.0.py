x1={'aaa':'111',
    'bb':'aea'
}

print(x1.values(),"\n",
      x1.keys(),'\n',
      x1.items()
)

for k,v in x1.items():
    print(f'O {k} é {v}')