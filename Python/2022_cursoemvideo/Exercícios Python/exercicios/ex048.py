y1=0
for c in range (1,500, 2):
    print(c, end=' ')
    if c%3==0:
        y1+=c
    else:
        y1+=0
print(f'\ny1={y1}')