from socket import*
import sys #Importo esto para terminar la ejecucion del codigo despues

IPServidor = "localhost"
puertoServidor = 9099

#Inicio el socket cliente 
socketCliente = socket(AF_INET, SOCK_STREAM)
socketCliente.connect ((IPServidor, puertoServidor))

while True:
    #Escribo
    message = input()
    if message != "Adios":
        #envio
        socketCliente.send(message.encode())

        #recibo
        response = socketCliente.recv(4096).decode()
        print ("Servidor: ", response)

    else: 
        socketCliente.send(message.encode())
        #Cerrar soket
        socketCliente.close()
        sys.exit()
