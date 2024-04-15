import random

z1=random.randint(1,5)
z2=random.randint(1,5)
z3=random.randint(1,5)
z4=random.randint(1,5)
z5=random.randint(1,5)

y1=(z1,z2,z3,z4,z5)

print(y1)

y2=sorted(y1)

print(y2)

print(f'O menor é {y2[0]} e o maior é {y2[4]}.')