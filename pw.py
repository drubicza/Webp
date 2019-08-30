import os
import sys

print '\x1b[1;32mSilahkan Masukkan Username & Password Anda'
print '\x1b[1;32mJika Tidak Tahu Silahkan Contact Whatsapp 085888090947'
Username = 'J4CKOP'
Password = 'AkuGans'

def restart():
    ngulang = sys.executable
    os.execl(ngulang, ngulang, *sys.argv)

def main():
    uname = raw_input('Username: ')
    if uname == Username:
        pwd = raw_input('Password: ')
        if pwd == Password:
            print '\x1b[1;32mAlhmdllh sudah masuk juga..',
            sys.exit()
        else:
            print '\x1b[1;32mMaaf Masukkan Password  Anda salah... [?]\x1b[00m'
            print 'Silahkan segera log-in kembali...!!\n'
            restart()
    else:
        print '\x1b[1;32mMaaf Masukkan Username Anda salah... [?]\x1b[00m'
        print 'Silahkan segera log-in kembali...!!\n'
        restart()

try:
    main()
except KeyboardInterrupt:
    os.system('sh run.sh')

os.system('clear')
