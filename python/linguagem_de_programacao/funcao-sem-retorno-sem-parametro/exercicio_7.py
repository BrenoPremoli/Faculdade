# 7. (Função sem retorno sem parâmetro) Faça uma função/método que leia três notas de um aluno e uma letra, se a letra for igual a A, deverá calcular a média aritimética das notas dos alunos, se for P, deverá calcular a média ponderada, com pesos 5, 3 e 2. A média deve ser mostrada ao final.
#N1, N2 e N3 são notas.
#P1, P2 e P3 são pesos.
# Média ponderada = (N1 * P1 + N2 * P2 + N3 * P3 ) / (P1 + P2 + P3)

def calcularMedia():
  p1 = 5
  p2 = 3
  p3 = 2
  n1 = float(input('Digite a primeira nota: '))
  n2 = float(input('Digite a segunda nota: '))
  n3 = float(input('Digite a terceira nota: '))
  nota = str(input('Digite "A" para calcular a média aritmética ou digite "P" para calcular a média ponderada: '))
  print()
  if nota == 'A' or nota == 'a':
    mediaA = (n1 + n2 + n3) / 3
    print('Sua média aritmética foi de: %2.2f' %mediaA)
  elif nota == 'P' or nota == 'p':
    mediaP = ((n1 * p1) + (n2 * p2) + (n3 * p3)) / (p1 + p2 + p3)
    print('Sua média ponderada foi de: %2.2f' %mediaP)
  else:
    print('Erro de comando.')

def main():
  calcularMedia()

main()

