# 12. Faça um algoritmo que leia o preço de 20 TV, determine e apresente a média dos preços que possuem valor maior que R$ 1000. Pode implementar com o comando while ou for.

contador = 1
preco_unidade = 0
contTV = 0
while contador <= 20:
  preco = float(input("Digite o preço da TV: "))
  contador = contador + 1
  if preco > 1000:
    preco_unidade = preco_unidade + preco
    contTV = contTV + 1
media = preco_unidade / contTV
print(f'A média do preço de {contTV:.0f} TV(s) é de: R$ {media:.2f}')
print("\n")

preco_unidade = 0
contTV = 0
for contador in range (1,21):
  preco = float(input("Digite o preço da TV: "))
  if preco > 1000:
    preco_unidade = preco_unidade + preco
    contTV = contTV + 1
media = preco_unidade / contTV
print(f'A média do preço de {contTV:.0f} TV(s) é de: R$ {media:.2f}')