# 2. (Função sem retorno sem parâmetro) Faça uma função/método que leia dois valores positivos e apresente a soma dos N números existentes entre eles (inclusive).

def somarNumeros():
  soma = 0
  a = int(input('Digite o primeiro número: '))
  b = int(input('Digite o segundo número: '))
  soma = soma + a
  while a < b:
    a = a + 1
    soma = soma + a
  print()
  print('Soma: {}'.format(soma))

def main():
  somarNumeros()
  
main()

  