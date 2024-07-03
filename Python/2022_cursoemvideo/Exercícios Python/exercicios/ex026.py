a1=input('Digite uma frase: ').strip()
b1=a1.lower()
print(f"A letra A aparece {b1.count('a')} vez(es)."
      f"\nA primeira letra A apareceu na posição {b1.find('a')+1}"
      f"\nA última letra A apareceu na posição {b1.rfind('a')+1}")