#entrada
angulo = float(input("Digite o ângulo (em graus): "))
altura = float(input("Digite a altura: "))

#processamento
import math 
radiano = angulo * math.pi / 180
escada = altura / math.sin(radiano)

#saída
print("Medida da escada: ",escada)