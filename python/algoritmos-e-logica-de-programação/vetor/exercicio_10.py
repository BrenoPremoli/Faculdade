# 11. Faça um programa que:
# preencha um vetor com sete números inteiros
# não use nenhuma função pronta da linguagem Python.

# Calcule e mostre:
# os números múltiplos de 2;
# os números múltiplos de 3;
# os números múltiplos de 2 e de 3.

inteiros = [] 
m2 = []
m3 = []
m23 = []
for i in range(7):
  inteiros.append(int(input('Digite um número inteiro: ')))
  if inteiros[i] % 2 == 0:
    m2.append(inteiros[i])
    if inteiros[i] % 3 == 0:
      m3.append(inteiros[i])
      if inteiros[i] % 2 == 0 and inteiros[i] % 3 == 0:
        m23.append(inteiros[i])
  elif inteiros[i] % 3 == 0:
    m3.append(inteiros[i])
    if inteiros[i] % 2 == 0 and inteiros[i] % 3 == 0:
      m23.append(inteiros[i])
  elif inteiros[i] % 2 == 0 and inteiros[i] % 3 == 0:
    m23.append(inteiros[i])
print('Múltiplos de 2:',m2)
print('Múltiplos de 3:',m3)
print('Múltiplos de 2 e 3:',m23)
