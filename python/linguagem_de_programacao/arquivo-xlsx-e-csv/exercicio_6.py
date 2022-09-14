# 6. Crie um programa que carregue o arquivo Propaganda.csv, por meio da biblioteca Pandas. Gere um histograma, referente a coluna TV, utilizando a biblioteca Matplotlib, apresente na cor verde.

import pandas as pd
df = pd.read_csv('Propaganda.csv')
import matplotlib.pyplot as plt
plt.hist(df['TV'],6, rwidth=0.6, color = 'green')
plt.title('Propaganda Via TV')
plt.xlabel('Custo')
plt.ylabel('Frequência Absoluta')
plt.show()