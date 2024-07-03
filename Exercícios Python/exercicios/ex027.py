a1=input('Digite seu nome completo: ').strip()

print(f"Muito prazer em te conhecer! Seu primeiro nome é {a1.split()[0]} e seu último nome é {a1.split()[a1.count(' ')]}.")