// MÉTODO Main() implícita

using HerancaCliente;

Cliente c = new Cliente();
c.Codigo = 1;
c.Nome = "Bia";
c.Endereco = "Rua Denuncio David, 436";
c.Mostrar();
System.Console.WriteLine();

ClienteFisico cf = new ClienteFisico();
cf.Codigo = 2;
cf.Nome = "Breno";
cf.Endereco = "Rua Denuncio David, 436";
cf.Cpf = 123;
cf.Rg = 12;
cf.Mostrar();

ClienteFisico cf2 = new ClienteFisico(22, "Léo", "Rua do Léo", 222, 22); // pelo construtor 

ClienteJuridico cj = new ClienteJuridico();
cj.Codigo = 3;
cj.Nome = "Mercado Imperial LTDA";
cj.Endereco = "Rua Denuncio David, 436";
cj.Cnpj = 222;
cj.Ie = 22;
cj.Mostrar();
