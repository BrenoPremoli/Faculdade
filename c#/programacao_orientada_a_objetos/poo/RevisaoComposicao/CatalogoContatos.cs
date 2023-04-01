using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RevisaoComposicao
{
    public class CatalogoContatos
    {
        public string NomeCatalogo { get; set; }
        public List<Contatos> ListaContatos { get; set; }
        public CatalogoContatos(string n, List<Contatos> lista)
        {
            NomeCatalogo = n;
            ListaContatos = lista;
            // ou ListaContatos = new List<Contatos>();
        }
        public void ExibirContatos()
        {
            foreach(Contatos c in ListaContatos)
            {
                c.ListarContatos();
            }
        }
        ~CatalogoContatos()
        {
            ListaContatos = null;
        }
    }
}