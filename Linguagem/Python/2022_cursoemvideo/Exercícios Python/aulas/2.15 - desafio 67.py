x1=1

while True:
    if x1==0:
        break
    x1=int(input('Quer ver a tabuada de qual valor? '))
    for c in range(1,11):
        print(f'{x1} x {c} = {x1*c}')
print('cabô')
