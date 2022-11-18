from socket import*

direccionSERVER = "localhost"
puertoSERVER = 9099

socketServidor = socket (AF_INET, SOCK_STREAM)

#Abro conexion
socketServidor.bind ((direccionSERVER, puertoSERVER))
socketServidor.listen(1)
print ("El servidor esta corriendo  ")

while True:
    Connection, addr = socketServidor.accept()
    print("Se ha conecto un cliente", addr)
    while True:

        mensajerecibido = ConeConnectionxion.recv(4096).decode() 
        print ("Cliente: ", mensajerecibido)
        
        #mandamos un mensaje al cliente
        Connection.send(input().encode())
        
        #Termino la conexion si me dicen adios
        if mensajerecibido == "chau":
            break

    print("La conexion termino", addr)

    Connection.close()
