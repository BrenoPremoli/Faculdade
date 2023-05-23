// Função Main()

using InterfaceAutenticavel;

Gerente g = new Gerente();
g.Nome = "Gerente Cézar";
g.Senha = 111;

Diretor d = new Diretor();
d.Nome = "Diretor Breno";
d.Senha = 222;

Cliente c = new Cliente();
c.Nome = "Josival";
c.Senha = 333;

// IAutenticavel = new IAutenticavel(); ERRO

IAutenticavel ia;
ia = g;
System.Console.WriteLine(g.Nome + " - " + ia.Autenticar(111));
System.Console.WriteLine(d.Nome + " - " + d.Autenticar(223));
ia = c;
System.Console.WriteLine(c.Nome + " - " + ia.Autenticar(334));