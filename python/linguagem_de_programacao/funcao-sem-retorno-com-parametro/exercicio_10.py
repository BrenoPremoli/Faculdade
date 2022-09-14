# 10. (Função sem retorno com parâmetro) Faça uma função/método para verificar se um nome digitado é igual a ‘Ana’, mostre o valor True ou False como resposta. Aqui deverá ocorrer, PASSAGEM DE PARÂMETRO POR VALOR.

def verificar(nome):
  if nome == 'Ana':
    print('True')
  else:
    print('False')

def main():
  people = str(input('Digite um nome: '))
  print()
  verificar(people)

main()
