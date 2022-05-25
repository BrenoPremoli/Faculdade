# 8. (Função sem retorno com parâmetro) Faça uma função/método que calcule a média de um aluno que realizou duas provas (P1 e P2), a partir desta média, chame/crie OUTRA função que verifique se esta média aprova ou reprova o aluno. Aqui deverá ocorrer nas duas funções, PASSAGEM DE PARÂMETRO POR VALOR.

def calcularMedia(p1, p2):
  media = (p1 + p2) / 2
  print('Média: {:.2f}'.format(media))
  print()
  aprovar(media)

def aprovar(medi):
  if medi >= 6:
    print('Aprovado')
  else:
    print('Reprovado')

def main():
  prova1 = float(input('Digite a nota da prova 1: '))
  prova2 = float(input('Digite a nota da prova 2: '))
  calcularMedia(prova1, prova2)

main()