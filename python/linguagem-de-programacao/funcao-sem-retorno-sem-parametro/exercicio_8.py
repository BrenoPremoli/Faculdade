# 8. (Função sem retorno sem parâmetro) Faça uma função/método que leia uma hora de início e de término de um jogo, ambas divididas em dois valores distintos: hora e minuto. Deverá ser apresentado a duração expressa em minutos, considerando que o tempo máximo de duração de um jogo é de 24 horas e que ele pode começar em um dia e terminar no outro.

def calcularTempo():
  hora_ini = int(input('Digite a hora em que começa o jogo: '))
  min_ini = int(input('Digite o minuto em que começa o jogo: '))
  hora_fin = int(input('Digite a hora em que termina o jogo: '))
  min_fin = int(input('Digite o minuto em que termina o jogo: '))
  print()
  if min_fin < min_ini:
    min_fin = min_fin + 60
    hora_fin = hora_fin - 1
  if hora_fin < hora_ini:
    hora_fin = hora_fin + 24
  total_min = min_fin - min_ini
  total_hora = hora_fin - hora_ini
  total = total_hora * 60 + total_min
  print('A duração do jogo é de: {} minutos.'.format(total))

def main():
  calcularTempo()

main()