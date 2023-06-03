// função Main()

using InterfaceAutenticavel;

Gerente g = new Gerente();
g.Nome = "Gerente Bia";
g.Senha = 123;

Diretor d = new Diretor();
d.Nome = "Diretor Ana";
d.Senha = 100;

Cliente c = new Cliente();
c.Nome = "Cliente Leo";
c.Endereco = "Rua Terezina, 75";
c.Senha = 200;

//IAutenticavel ia = new IAutenticavel();//erro

IAutenticavel ia;
ia = g;
Console.WriteLine(g.Nome + " - " +ia.Autenticar(123));

Console.WriteLine(d.Nome + " - " +d.Autenticar(101));

ia = c;
Console.WriteLine(c.Nome + " - " +ia.Autenticar(200));

