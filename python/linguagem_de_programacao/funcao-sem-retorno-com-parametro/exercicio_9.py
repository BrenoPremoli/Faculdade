# 9. (Função sem retorno com parâmetro) Faça uma função/método sem parâmetro, para ler um valor e chamar/criar OUTRA função (com parâmetro) que mostre se o valor é par ou ímpar.

def ler():
  valor = int(input('Digite um número: '))
  print()
  mostrar(valor)

def mostrar(num):
  if num % 2 == 0:
    print('Par')
  else:
    print('Ímpar')

def main():
  ler()
  
main()
