# 6. Faça um programa que receba um conjunto de valores inteiros, calcule e exiba o maior e o menor valor do conjunto.
# Para encerrar a entrada de dados, deve ser digitado o valor zero;
# Para valores negativos, deve ser enviada uma mensagem;
# Esses valores (zero e negativos) não entrarão na lógica de encontrar o maior e o menor valor.

print("Para encerrar a entrada de dados, deve ser digitado o valor zero.")
n = int(input("Digite um valor: "))
maior = n
menor = 9999999999 #dica de programação
while n != 0:
  if n > 0:
    if n > maior:
      maior = n
    elif n < menor:
      menor = n
  else:
    print('Valores negativos não são aceitos.')
  n = int(input("Digite um valor: "))
print("Maior valor digitado:",maior)
print("Menor valor digitado:",menor)