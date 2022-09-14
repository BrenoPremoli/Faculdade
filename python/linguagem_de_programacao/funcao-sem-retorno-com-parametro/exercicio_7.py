# 7. (Função sem retorno com parâmetro) Faça uma função/método para calcular a tabuada de um número informado pelo usuário. Crie outra função que calcule a tabuada de um intervalo, por exemplo realize as taduabas do 3 ao 8. Aqui deverá ocorrer para as duas funções, PASSAGEM DE PARÂMETRO POR VALOR.

def calcular(num):
  for i in range(11):
    print(num,'x',i,' = ',num * i)
    i = i + 1
  print()

def digitar(n1, n2):
  for i in range(n1, n2 + 1):
    print()
    for j in range(11):
      print(i,'x', j,' = ', j * i)
  print()

def main():
  numero = int(input('Digite um número para saber a tabuada: '))
  calcular(numero)
  numero1 = int(input('Digite o número do início da tabuada: '))
  numero2 = int(input('Digite o número do fim da tabuada: '))
  digitar(numero1, numero2)

main()

