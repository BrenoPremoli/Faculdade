# 13. Sabe-se que:
# pé = 12 polegadas
# 1 jarda = 3 pés
# 1 milha = 1760 jardas
# Faça um programa que receba uma medida em pés, faça as conversões a seguir e mostre os resultados.
# Polegadas;
# Jardas;
# Milhas.

#entrada
pes = float(input("Escolha uma uma medida em pés: "))

#processamento
polegadas = pes * 12
jardas = pes / 3
milhas = jardas * 1760

#saída
print("Polegada(s):",polegadas)
print("Jarda(s):",jardas)
print("Milha(s):",milhas)