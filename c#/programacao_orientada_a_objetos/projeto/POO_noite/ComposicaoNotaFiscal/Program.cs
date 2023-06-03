//função Main() implícita

using ComposicaoNotaFiscal;

ItemNf it1 = new ItemNf(10);
ItemNf it2 = new ItemNf(15);

List<ItemNf> vi= new List<ItemNf>();
vi.Add(it1);
vi.Add(it2);

NotaFiscal nf = new NotaFiscal(1,"24/03/2023",vi);

foreach (ItemNf it in nf.VetItem)
    Console.WriteLine("Quantidade: " + it.Quantidade);

nf = null;
GC.Collect();