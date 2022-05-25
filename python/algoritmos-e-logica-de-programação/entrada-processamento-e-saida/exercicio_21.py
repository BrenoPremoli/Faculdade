#entrada
hora = float(input("Digite as horas: "))

#processamento
h = hora // 1
minutos = hora - h
conversao = (h * 60) + (minutos * 100)

#saída
print("Total de minutos:",conversao)