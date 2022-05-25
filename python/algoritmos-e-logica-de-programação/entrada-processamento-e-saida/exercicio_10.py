# 10. Faça um programa que calcule e mostre a área de um círculo. Sabe-se que: Área = p * raio 2 (o número 2 significa potência, ou seja, raio é elevado ao quadrado)

#entrada
p = 3.14
raio = float(input("Valor do raio do círculo: "))

#processamento
area = p * (raio ** 2)

#saída
print("A área do círculo é: ",area)