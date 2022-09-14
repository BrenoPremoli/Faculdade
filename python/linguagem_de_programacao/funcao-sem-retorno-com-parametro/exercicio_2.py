# 2. (Função sem retorno com parâmetro) Faça um programa contendo uma função/método, sem parâmetro, que leia um nome e diga 'Olá nome, tudo bem?'. Crie outra função com o parâmetro nome, para que a mesma receba da main o nome digitado e apresente a mesma frase, este é um exemplo de PASSAGEM DE PARÂMETRO POR VALOR

def apresentar(nome):
  print('Olá {}, tudo bem?'.format(nome))

def digitar():
  no = input('Digite um nome: ')
  apresentar(no) #argumento

def main():
  digitar()

main()

  