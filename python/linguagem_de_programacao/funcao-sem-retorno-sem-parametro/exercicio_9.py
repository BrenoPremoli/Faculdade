# 9. (Função sem retorno sem parâmetro) Faça uma função/método que leia cinco valores inteiros, determine e mostre o maior e o menor deles. Não pode usar vetor e função pronta da linguagem Python.

def mostrarNumero():
  menor = 0
  maior = 0
  for n in range(5):
    n = int(input('Digite um número: '))
    if n > maior:
      maior = n
    elif n < menor:
      menor = n
  print()
  print('O menor número digitado foi: {}'.format(menor))
  print('O maior número digitado foi: {}'.format(maior))

def main():
  mostrarNumero()
main()
