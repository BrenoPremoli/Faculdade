using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RevisaoComposicao
{
    public class CatalogoContatos
    {
        public string NomeCatalogo { get; set; }
        public List<Contatos> ListaDeContatos { get; set; }
        public CatalogoContatos(string n, List<Contatos> lista)
        {
            NomeCatalogo = n;
            ListaDeContatos = lista;
            // ou ListaDeContatos = new List<Contatos>();
        }
        public void ExibirContatos()
        {
            foreach (Contatos c in ListaDeContatos)
                c.ListarContatos();
        }
        ~CatalogoContatos()
        {
            ListaDeContatos = null;
        }
    }
}