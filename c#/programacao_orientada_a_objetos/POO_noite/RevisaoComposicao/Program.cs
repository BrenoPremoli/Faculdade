// função Main() implícita
using RevisaoComposicao;

Contatos c1 = new Contatos("Pedro","pedro@","111");
Contatos c2 = new Contatos("Paulo","paulo@","222");
Contatos c3 = new Contatos("Max Lanches","max@","333");
Contatos c4 = new Contatos("Big Lanches","big@","444");

List<Contatos> vet1 = new List<Contatos>();
vet1.Add(c1);
vet1.Add(c2);
CatalogoContatos cat1 = new CatalogoContatos("TurmaPOO",vet1);
Console.WriteLine("\nNome do catalogo: " + cat1.NomeCatalogo + "................");
cat1.ExibirContatos();

List<Contatos> vet2 = new List<Contatos>();
vet2.Add(c3);
vet2.Add(c4);
CatalogoContatos cat2 = new CatalogoContatos("Lanchonetes",vet2);
Console.WriteLine("\nNome do catalogo: " + cat2.NomeCatalogo + "................");
cat2.ExibirContatos();

//as linhas abaixo são opções do programador
cat1 = null; //retirada da referência de memória do objeto
cat2 = null;
GC.Collect();//chamada do coletor de lixo