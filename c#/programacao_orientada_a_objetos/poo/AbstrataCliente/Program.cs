// Método Main()

using AbstrataCliente;

// Cliente c = new Cliente(1, "James"); (Superclasse)
// Não é possível instanciar em objeto da classe abstrata

ClienteFisico cf = new ClienteFisico(2, "Julian", 123);
cf.Mostrar();