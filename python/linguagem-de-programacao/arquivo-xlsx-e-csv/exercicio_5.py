# 5. Crie um programa que carregue o arquivo Propaganda.csv, por meio da biblioteca Pandas. Gere um histograma, referente a coluna Vendas, utilizando a biblioteca plotly.

import pandas as pd
df = pd.read_csv('Propaganda.csv')
import plotly.express as px
fig = px.histogram(df, x='Vendas')
fig.show()