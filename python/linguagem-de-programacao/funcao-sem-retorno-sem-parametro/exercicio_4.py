# 4. (Função sem retorno sem parâmetro) Faça uma função/método que leia um único valor representado em segundos, converta-o e apresente o resultado em horas, minutos e segundos.

def contarSegundos():
  segundos = int(input('Digite o valor em segundos: '))
  h = segundos // 3600
  r = segundos % 3600
  m = r // 60
  s = r % 60
  print('Horas:',h)
  print('Minutos:',m)
  print('Segundos:',s)

def main():
  contarSegundos()

main()