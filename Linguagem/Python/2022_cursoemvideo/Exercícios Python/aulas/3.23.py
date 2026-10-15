try:
    a=input('a = ')
    b=input('b = ')
    print(f'd = a/b = {int(a)/int(b)}')
except ZeroDivisionError:
    print('Impossível dividir por zero.')
except Exception as erro:
    print(f'Falhou: {erro.__context__} ')
else:
    print('Fim')
finally:
    print('Volte sempre!')