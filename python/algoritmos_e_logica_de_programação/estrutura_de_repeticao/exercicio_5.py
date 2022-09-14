# 5. Faça um algoritmo que calcule e mostre a tabuada do 5. Pode implementar com o comando while ou for.

contador = 0
while contador <= 50:
  print(contador)
  contador = contador + 5
print("\n")
for contador in range(0,11):
  contador = contador * 5
  print(contador)