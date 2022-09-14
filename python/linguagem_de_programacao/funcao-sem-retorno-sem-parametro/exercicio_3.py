# 3. (Função sem retorno sem parâmetro) Faça uma função/método que receba três números inteiros a, b, c que sejam divisíveis por a. O valores b e c representam o intervalo da estrutura de repetição. Apresente a quantidade e os números divisíveis. Não pode usar vetor e função pronta da linguagem Python.

def dividirNumeros():  
  divisivel = 0
  a = int(input('Digite o número que irá dividir: '))
  b = int(input('Digite o primeiro número do intervalo: '))
  c = int(input('Digite o segundo número do intervalo: '))
  print()
  if b % a == 0:
    print('Este valor é divísivel:',b)
  while b < c:
    b = b + 1
    if b % a == 0:
      divisivel = divisivel + 1
      print('Este valor é divísivel:',b)
  print()
  print('Quantidade de números divísiveis:',divisivel)

def main():
  dividirNumeros()

main()
#===================================================================
print()
def dividirNumeros():  
  a = int(input('Digite o número que irá dividir: '))
  b = int(input('Digite o primeiro número do intervalo: '))
  c = int(input('Digite o segundo número do intervalo: '))
  cont = 0
  print()
  while b <= c:
    if b % a == 0:
      print('Este valor é divísivel:',b)
      cont = cont + 1
    b = b + 1
  print()
  print('Quantidade de números divísiveis:',cont)

def main():
  dividirNumeros()

main()
