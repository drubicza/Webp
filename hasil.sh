clear
bi='\033[34;1m' #biru
i='\033[32;1m' #ijo
pur='\033[35;1m' #purple
cy='\033[36;1m' #cyan
me='\033[31;1m' #merah
pu='\033[37;1m' #putih
ku='\033[33;1m' #kuning

toilet -f future "WEB PHISING RESULTS"

echo $cy" HASIL MANA YANG INGIN KAMU LIHAT?"
echo $pur"____________________________________"
echo $me"["$pur"1"$me"]"$pu" FACEBOOK SECURE"
echo $me"["$pur"2"$me"]"$pu" FACEBOOK LOGIN"
echo $me"["$pur"3"$me"]"$pu" MOBILE LEGENDS"
echo $me"____________________________________"
echo $me"╭─["$i"root@user"$me"]"
read -p"╰─>> " pil

if [ $pil = 1 ]; then
    echo $me"____________________________________"
    echo $pu" BERIKUT ADALAH HASIL PHISING CEK KEAMANAN FB"
    cd V1
    php hasil.txt
    echo "\n"
fi

if [ $pil = 2 ]; then
    echo $me"____________________________________"
    echo $pu" BERIKUT ADALAH HASIL PHISING CEK LOGIN FB\n\n\n"
    cd V2
    php hasil.txt
    echo "\n\n"
fi

if [ $pil = 3 ]; then
    echo $me"____________________________________"
    echo $pu" BERIKUT ADALAH HASIL PHISING MOBILE LEGENDS\n\n\n"
    cd ML
    php hasil.txt
    echo "\n\n"
fi
