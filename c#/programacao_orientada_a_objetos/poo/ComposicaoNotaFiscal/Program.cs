// Função Main() implícita

using ComposicaoNotaFiscal;

ItemNotaFiscal item1 = new ItemNotaFiscal(10);
ItemNotaFiscal item2 = new ItemNotaFiscal(20);

List<ItemNotaFiscal> vi = new List<ItemNotaFiscal>();
vi.Add(item1);
vi.Add(item2);

NotaFiscal nf = new NotaFiscal(1, "24/03/2023", vi);

foreach(ItemNotaFiscal item in nf.VetItem)
{
    System.Console.WriteLine("Quantidade: {0}", item.Quantidade);
}

nf = null;
GC.Collect();