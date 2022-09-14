# 11. Faça um algoritmo que conheça 4 preços de produtos, calcule e mostre a média aritmética dos preços. Pode implementar com o comando while ou for.

produto = 1
preco_unidade = 0
while produto <= 4:
  preco = float(input("Digite o preço do produto: "))
  preco_unidade = preco_unidade + preco
  produto = produto + 1
media = preco_unidade / 4
print(f'O valor médio dos preços dos produtos é de: R$ {media:.2f}')
print("\n")

preco_unidade = 0
for produto in range (1,5):
  preco = float(input("Digite o preço do produto: "))
  preco_unidade = preco_unidade + preco
media = preco_unidade / 4
print(f'O valor médio dos preços dos produtos é de: R$ {media:.2f}')