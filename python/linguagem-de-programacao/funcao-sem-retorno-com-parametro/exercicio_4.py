# 4. (Função sem retorno com parâmetro) Faça uma função/método para a partir de um preço de um produto informado, calcular e apresentar o novo preço reajustado em 9%. Aqui deverá ocorrer, PASSAGEM DE PARÂMETRO POR VALOR.

def reajustar(pre): #p é um parâmetro, p está recebendo uma cópia do valor que está na variável preco, na main()
  novo = pre + (pre * 9 / 100)
  print('O novo preço é R$ {:.2f}'.format(novo))
  
def main():
  preco = float(input('Informe o preço do produto: R$ '))
  reajustar(preco) #preco é um argumento

main()