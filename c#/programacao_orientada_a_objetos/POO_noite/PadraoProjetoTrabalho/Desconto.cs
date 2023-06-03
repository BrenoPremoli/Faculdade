using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PadraoProjetoTrabalho
{
    public interface Desconto
    {
        double Calcula(Orcamento orcamento);
    }
}