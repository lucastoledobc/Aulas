x1=[1,2,3,5]
print(x1)

x1[3]=4
print(f'{"x1[3]=4: ":.<20}', x1)

x1.append(5)
print(f'{"x1.append(5): ":.<20}', x1)

x1.insert(0,2)
print(f'{"x1.insert(0,2): ":.<20}', x1)

del x1[0]
print(f'{"del x1[0]: ":.<20}', x1)

del x1[0]
print(f'{"del x1[0]: ":.<20}', x1)

x1.pop()
print(f'{"x1.pop(3): ":.<20}', x1)

x1.remove(3)
print(f'{"x1.remove(3): ":.<20}', x1)