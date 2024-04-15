a1=input('Digite a cidade que você nasceu: ').strip().capitalize()
b1=a1.split()[0]
print(f"Sua cidade {a1} começa com apalavra Santo? {'Santo' in b1}")

print(a1[:5]=='Santo')