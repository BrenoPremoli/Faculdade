# 3. Faça um algoritmo que mostre os valores de 0 a 15. Pode implementar com o comando while ou for.

contador = 0
while contador <= 10:
  print("5 X",contador,"=", 5 * contador)
  contador = contador + 1
print("\n")
for contador in range(0,11):
  print("5 X",contador,"=", 5 * contador)