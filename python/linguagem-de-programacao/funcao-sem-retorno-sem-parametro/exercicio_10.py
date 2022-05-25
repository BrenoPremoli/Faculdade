# 10. (Função sem retorno sem parâmetro) Faça uma função/método que leia um valor inteiro e positivo N e mostre o valor de S, obtido pelo seguinte cálculo:
# S = 1 + 1/1! + 1/2! + 1/3! + ... + 1/N!
# Observvação: Não pode usar vetor e função pronta da linguagem Python.

def calcular():
  n = int(input('Informe o valor de N termos: '))
  fat = 1
  cont = 1
  soma = 1
  while cont <= n:
    fat = cont * fat
    cont = cont + 1
    soma = soma + (1 / fat)
  print()
  print('Fatorial de {}: {}'.format(n, fat))
  print('Cálculo da fatorial: {:.3f}'.format(soma))

def main():
  calcular()

main()
