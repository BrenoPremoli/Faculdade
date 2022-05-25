# 6. Faça um programa que carregue: *um vetor com oito posições com os nomes das lojas; * um outro vetor com quatro posições com os nomes dos produtos; * uma matriz (8 x 4) com os preços de todos os produtos em cada loja. O programa deve mostrar todas as relações (nome da loja - nome do produto e preço), nas quais o preço não ultrapasse R$ 120,00.

loja = [] 
produto = []
matriz = []
for i in range(5):
  loja.append(str(input('Digite o nome da loja: ')))
for i in range(3):
  produto.append(str(input('Digite o nome do produto: ')))
for lin in range(5):
  linha = []
  for col in range(3):
    linha.append(float(input('Digite o preço dos produtos: R$ ')))
  matriz.append(linha)
print()
print('Tabela de informações.')
print()
for lin in range(3):
  print('..........',produto[lin],end='\t''\t')
print()
print()
for lin in range(5):
  for col in range(3):
    print(loja[lin],'R$ 'f'{matriz[lin][col]:.2f}',end='\t''\t')
  print()
print()
for lin in range(5):
  for col in range(3):
    if matriz[lin][col] <= 120:
      print('A loja',loja[lin],'com o produto',produto[col],f'custa R$ {matriz[lin][col]:.2f}.')
