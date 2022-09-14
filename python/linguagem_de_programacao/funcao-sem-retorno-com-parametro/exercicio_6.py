# 6. (Função sem retorno com parâmetro) Faça uma função/método para a partir de um valor inicial e um valor final realizar o acumulo desse valores e apresentar o resultado. Não use vetor. Aqui deverá ocorrer para as duas variáveis, PASSAGEM DE PARÂMETRO POR VALOR.

def somar(a, b):
  soma = a
  while a < b:
    a = a + 1
    soma = soma + a
  print()
  print('Soma: {}'.format(soma))

def main():
  a1 = int(input('Digite o primeiro número: '))
  b1 = int(input('Digite o segundo número: '))
  somar(a1, b1)

main()