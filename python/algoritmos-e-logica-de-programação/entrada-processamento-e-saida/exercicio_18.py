# 18. Faça um programa que receba a medida do ângulo (em graus) formado por uma escada apoiada no chão e encostada na parede e a altura da parede onde está a ponta da escada. Calcule e mostre a medida dessa escada. Observação: as funções trigonométricas implementadas nas linguagens de programação trabalham com medidas de ângulos em radianos.

#entrada
angulo = float(input("Digite o ângulo (em graus): "))
altura = float(input("Digite a altura: "))

#processamento
import math 
radiano = angulo * math.pi / 180
escada = altura / math.sin(radiano)

#saída
print("Medida da escada: ",escada)