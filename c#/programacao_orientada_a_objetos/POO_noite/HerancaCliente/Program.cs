// método Main()
using HerancaCliente;

Cliente c = new Cliente();
c.Codigo = 1;
c.Nome = "Bia";
c.Endereco = "Rua Terezina, 75";
c.Mostrar();

ClienteFisico cf = new ClienteFisico();
cf.Codigo = 2;
cf.Nome = "Lia";
cf.Endereco = "Rua Pará";
cf.Cpf = 123;
cf.Rg = 12;
cf.Mostrar();

ClienteFisico cf2 = new ClienteFisico(22,"Leo","Rua do Leo",222,22);

ClienteJuridico cj = new ClienteJuridico();
cj.Codigo = 3;
cj.Nome = "Empresa S/A";
cj.Endereco = "Rua Parana";
cj.Cnpj = 111;
cj.Ie = 11;
