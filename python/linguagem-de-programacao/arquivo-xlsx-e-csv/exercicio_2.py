# 2. Crie um programa que carregue o arquivo Vendas.xlsx, por meio da biblioteca Pandas. Calcule e apresente a quantidade mínima da coluna do arquivo 'Quantidade'.

import pandas as pd
df = pd.read_excel('Vendas.xlsx')
print('Quantidade mínima da coluna do arquivo Quantidade:',min(df['Quantidade']))