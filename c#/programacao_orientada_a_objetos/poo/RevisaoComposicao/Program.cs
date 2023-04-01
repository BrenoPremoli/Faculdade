// função Main() Implícita

using RevisaoComposicao;

Contatos c1 = new Contatos("Pedro", "pedro@", "111");
Contatos c2 = new Contatos("Paulo", "paulo@", "222");
Contatos c3 = new Contatos("MaxLanches", "MaxLanches@", "333");
Contatos c4 = new Contatos("BigLanches", "bigLanches@", "444");

List<Contatos> vetClientes = new List<Contatos>();
vetClientes.Add(c1);
vetClientes.Add(c2);
CatalogoContatos cat1 = new CatalogoContatos("Clientes", vetClientes);
System.Console.WriteLine("CATÁLOGO: {0}", cat1.NomeCatalogo);
cat1.ExibirContatos();

List<Contatos> vetLanchonete = new List<Contatos>();
vetLanchonete.Add(c3);
vetLanchonete.Add(c4);
CatalogoContatos cat2 = new CatalogoContatos("Lanchonetes", vetLanchonete);
System.Console.WriteLine("CATÁLOGO: {0}", cat2.NomeCatalogo);
cat2.ExibirContatos();

// as linhas abaixo são opções do programador
cat1 = null; // retirada da referência de memória do objeto
cat2 = null; // retirada da referência de memória do objeto
GC.Collect(); // chamada do coletor de lixo