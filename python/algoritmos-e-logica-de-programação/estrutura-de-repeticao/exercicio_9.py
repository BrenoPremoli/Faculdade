# 9. Faça um algoritmo que conheça 4 preços de produtos, some-os e mostre o resultado. Pode implementar com o comando while ou for.

produto = 1 # 1.0 inicialização da variável contadora
preco_unidade = 0 # 2.0 inicializa a variável somatória com 0 na maioria dos casos
while produto <= 4:  
  preco = float(input("Digite o preço do produto: "))
  preco_unidade = preco_unidade + preco
  produto = produto + 1 # 3.0 incrementar a variável contadora
                        #deixar o comando na última linha da estrutura 15,60
print(f'O valor da soma total dos preços dos produtos é de: R$ {preco_unidade:.2f}')
print("\n")

preco_unidade = 0
for produto in range (1,5):
  preco = float(input("Digite o preço do produto: "))
  preco_unidade = preco_unidade + preco
print(f'O valor da soma total dos preços dos produtos é de: R$ {preco_unidade:.2f}')