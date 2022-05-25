# 4. Crie um programa que carregue o arquivo Propaganda.csv, por meio da biblioteca Pandas. Calcule e apresente o valor máximo da coluna do arquivo 'Jornal'.

import pandas as pd
df = pd.read_csv('Propaganda.csv')
print('Valor máximo da coluna do arquivo Jornal: R$ {:.2f}'.format(max(df['Jornal'])))
