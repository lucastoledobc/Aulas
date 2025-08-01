# ArchLinux

Documentação: https://wiki.archlinux.org/title/Main_page

## Instalação

Download: https://archlinux.org/download/

digite linuxinstall  

ou  

loadkeys br-abnt2

iwctl
adapter phy0 set-property Powered on
station wlan0 connect NET_5Gzz
quit

ping -c 4 google.com

fdisk -l

mount /dev/sda4 /mnt 
mount /dev/sda5 /mnt/home
mount /dev/sda1 /mnt/boot/efi 

lsblk

pacstrap /mnt base base-devel linux linux-firmware nano dhcpcd
genfstab -U -p /mnt >> /mnt/etc/fstab
cat /mnt/etc/fstab

pacman -S grub efibootmgr
grub-install --target=x86_64-efi --efi-directory=/boot/efi --bootloader-id=arch_grub --recheck
grub-mkconfig -o /boot/grub/grub.cfg

sudo dhcpcd (para internet)


## Comandos:

yay -Syu → atualiza os arquivos do sistema
yay -Si →  mostra a informação de um pacote
yay -Ss →  busca pelo programa
sudo systemctl enable --now <programa>
sudo setxkbmap -model abnt2 -layout br -variant abnt2

makepkg -si → instala o pacote

systemctl status
systemctl enable/disable processo.service
systemctl start/stop processo.service

ps aux | grep -i nome -> pega o id do processo
kill id -> mata o processo

### wpc_supplicant:
- ligue o wpa com:
sudo wpa_supplicant -B -i interface -c /etc/wpa_supplicant/wpa_supplicant.conf
(interface é wlan0)

* se for o primeiro acesso, crie o arquivo de conf
sudo nano /etc/wpa_supplicant/wpa_supplicant.conf
ctrl_interface=/run/wpa_supplicant
update_config=1

- inicie: sudo wpa_cli 
- isso vai abrir a interface, daí segue:
> scan
OK
<3>CTRL-EVENT-SCAN-RESULTS
> scan_results
> add_network
0
> set_network 0 ssid "MYSSID"
> set_network 0 psk "passphrase"
> enable_network 0
> save_config
OK
> quit
