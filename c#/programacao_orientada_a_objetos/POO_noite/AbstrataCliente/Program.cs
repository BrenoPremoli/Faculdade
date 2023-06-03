// método Main()

using AbstrataCliente;

//Cliente c = new Cliente(1, "Ana");
//Não é possível instanciar um objeto da classe abstrata

ClienteFisico cf = new ClienteFisico(2, "Bia", 222);
cf.Mostrar();
