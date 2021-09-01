

# 📌 Deprecated
Onyet CBT with native PHP 7.X is deprecated. Furthermore, the Onyet CBT version is being developed in Codeigniter 4.x and Laravel versions, possibly in the future it will be developed using Pyhton (Django). Thank you for your cooperation and assistance so far.

## 🎊 Tentang OnyetCBT

OnyetCBT adalah Aplikasi opensource yang diperuntukan untuk instansi seperti sekolah, madrasah, ataupun yang lain, OnyetCBT ini biasa digunakan untuk PTS/PAS/USBN/SIMULASI UNBK. Aplikasi ini kembali guna keperluan lebih lanjut. Aplikasi ini masih bersifat Open Source dengan lisensi MIT atau harap jangan menghilangkan nama yang sudah berkontribusi dalam pembuatan dan pengembangan aplikasi ini.

Fitur OnyetCBT:

- [Responsive - Bootstrap 3]
- [Pengelolaan Mudah]
- [3 Jenjang Pendidikan]
- [Role : Admin, Guru, Pengawas, Proktor, Siswa]
- [Pengumuman]
- [E-Learning, Tugas dan Komentar]
- [Absen Harian]
- [Meeting Room]
- [Aplikasi Android - Harap kontak kami]

## 🛠 Requirement

- PHP Version : PHP 7.x, Rekomendasi PHP 7.4
- PHP Imagick
- Jitsi Server: Optional
- MariaDB Version : 10.x

## 🎭 Admin Login

```bash
http://yourdomainroot/mobile_login.php

user		: admin
password	: adminpassword
```

## 🧬 Proses Pemasangan

### XAMPP

- Unduh [XAMPP](https://www.apachefriends.org/download.html)
- Lakukan [pemasangan XAMPP](https://www.wikihow.com/Install-the-Apache-Web-Server-on-a-Windows-PC)
- Unduh ZIP file atau Clone Repositori ini
- Masuk pada direktori/ folder XAMPP yang telah terpasang dan letakan semua file dalam repositori ini ke dalam folder ``htdocs``
- Jalankan XAMPP dan akse alamat XAMPP, biasanya ``http://localhost/_install.php``

### LARAGON

- Unduh [Laragon](https://laragon.org/download/index.html)
- Pasang atau ekstrak Laragon
- Unduh ZIP file atau Clone Repositori ini
- Masuk pada direktori/ folder Laragon yang telah terpasang dan letakan semua file dalam repositori ini ke dalam folder ``www``
- Jalankan Laragon dan akse alamat Laragon, biasanya ``http://localhost/_install.php``

### Apache Linux Server

- Siapkan semua package yang dibutuhkan : Apache/Apache2, MariaDB/MySQL, PHP 7.X, PHP7.X-FPM, PHP-Imagick dan kebutuhan webserver lainnya.
- Masuk ke Linux server menggunakan ssh/tls/filezilla
- Unduh ZIP file atau Clone Repositori ini
- Masuk pada dan unggah hasil clone repositori ini ke direktori/ folder ``/var/www/html``
- Mulai ulang / restart Apache/Apache2 dan akses melalui alamat web yang terhubung ke server tersebut.

Akses halaman instalasi atau pemasangan.
```bash
http://yourdomainroot/_install.php
```

## 🧨 Kerentanan Aplikasi

Jika anda mendapati bahwa aplikasi ini memeiliki kerentanan keamanan atau ada fungsi yang tidak berkerja dengan optimal maka anda bisa membuat issue pada repositori ini.


## 🎁 Kontribusi

Semua kontribusi perbaikan atau ide yang anda ingin tuangkan atau kembangkan silahkan lakukan pullrequest.

## 👔 Lisensi

OnyetCBT adalah perangkat lunak bersumber terbuka yang dilisensikan di bawah [Lisensi MIT](https://opensource.org/licenses/MIT).
<b>Kami harap jangan menghilangkan tulisan OCBT pada config.ocbt.php dan copyright = Onyet App.</b>
