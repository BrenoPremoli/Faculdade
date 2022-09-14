# 3. (Função sem retorno com parâmetro) Faça um programa contendo uma função/método para subtrair dois números e apresentar o resultado. Aqui deverá ocorrer, PASSAGEM DE PARÂMETRO POR VALOR.

def subtrai(numero1, numero2):
  res = numero1 - numero2
  print()
  print('Resultado da subtração: {}'.format(res))

def main():
  n1 = int(input('Digite um número: '))
  n2 = int(input('Digite outro número: '))
  subtrai(n1, n2)

main()