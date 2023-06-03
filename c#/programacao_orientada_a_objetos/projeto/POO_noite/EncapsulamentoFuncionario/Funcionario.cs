using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EncapsulamentoFuncionario
{
    public class Funcionario
    {
        //declaração de atributos encapsulados
        private int codigo;
        private string nome;
        //private double salario;
        //declaração dos métodos

        //declaração do método/propriedade de encapsulamento
        public int Codigo
        {
            set 
            {
                this.codigo = value;
            }
            get
            {
                return this.codigo;
            }
        }
        public string Nome
        {
            get { return nome; }
            set { nome = value; }
        }
        public double Salario { get; set; }        
    }
}