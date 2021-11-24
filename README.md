<p align="center">
<img src="public/img/logo2.png" width="100">
</p>

## About eJadwal

eJadwal adalah aplikasi sistem penjadwalan online untuk KBM di SMKN 1 Krangkeng

Instalasi:
1. Install Composer: https://getcomposer.org/Composer-Setup.exe
2. Install Git: https://git-scm.com/download/win
3. Install xampp : https://www.apachefriends.org/xampp-files/7.4.23/xampp-windows-x64-7.4.23-0-VC15-installer.exe
4. buka git bash
<pre>
<code>
-> cd c:/xampp/htdocs/ejadwal
-> git clone https://github.com/smkn1krangkeng/eJadwal.git
-> cd ejadwal
-> composer install
-> cp .env.example .env
-> php artisan key:generate
// buka file .env setting database:
DB_DATABASE=ejadwal
DB_USERNAME=ejadwal
DB_PASSWORD=ejadwal
-> php artisan migrate
-> php artisan db:seed
// optional
untuk reset database gunakan perintah: php artisan migrate:fresh --seed
-> php artisan route:cache
-> php artisan config:cache
-> php artisan view:cache
-> php artisan storage:link

//akses aplikasi via http://localhost:8000
-> php artisan serve

//untuk update aplikasi gunakan perintah
-> git pull origin master
</code>
</pre>

Login default:
admin@test.id / 12345678
