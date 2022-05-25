# 5. (Função sem retorno com parâmetro) Faça uma função/método para a partir de um preço de um produto informado, calcular e apresentar o novo preço reajustado em alguma porcentagem que deve ser informada (digitada) pelo usuário. Aqui deverá ocorrer, PASSAGEM DE PARÂMETRO POR VALOR.

def informar(pre, porcen):
  novo = pre + (pre * porcen / 100)
  print()
  print('O novo preço é R$ {:.2f}'.format(novo)) 

def main():
  preco = float(input('Digite o preço do produto: R$ '))
  porcentagem = float(input('Digite a porcentagem (%) de reajuste: '))
  informar(preco, porcentagem)

main()