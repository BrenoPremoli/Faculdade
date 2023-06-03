using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PadraoProjetoTrabalho
{
    public class CalculadoraDeDescontos
    {
        public double Calcula(Orcamento orcamento)
        {
            // verifica primeira regra de possível desconto
            if (orcamento.Itens.Count > 5)
                return orcamento.Valor * 0.1;
            // verifica segunda regra de possível desconto
            else if (orcamento.Valor > 500)
                return orcamento.Valor * 0.07;
            // verifica terceira, quarta, quinta regra de possível desconto
            // assim teria mais vários if a seguir
            return 0;
        }
        // Classe pouca coesa, caso seja inserido novos descontos o que fazer?
        // ???????????????????????????????
    }
}