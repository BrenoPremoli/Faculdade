# 5. (Função sem retorno sem parâmetro) Faça uma função/método que receba o preço antigo e atual de um produto, determine o percentual de acréscimo entre esses valores e apresente-o.

def calcularAumento():
  precoAntigo = float(input('Digite o preço antigo do produto: R$ '))
  precoNovo = float(input('Divite o preço atual do produto: R$ '))
  acrescimo = ((precoNovo - precoAntigo) / precoAntigo) * 100
  print()
  print('O aumento percentual do produto é de:',acrescimo,'%')

def main():
  calcularAumento()

main()