Nama : Ahmad Samsul Arifin

Nim : 2409116113

Mini Project 2 Pemrograamn Berbasis Web


# Website Portfolio Ahmad Samsul Arifin


## Deskripsi Project
Website portfolio yang sebelumnya dibuat menggunakan HTML, CSS, Bootstrap, dan Vue JS pada mini project 1, pada mini project 2 ini dikembangkan menjadi website dinamis menggunakan php dan mysql. Data seperti profile, about, skills, experience, dan certificates tidak lagi ditulis langsung di kode, tetapi diambil dari database.


## Tujuan Project
- Mengubah website statis menjadi dinamis
- Menghubungkan website dengan database mysql
- Menggunakan PHP untuk mengambil data dari database
- Menampilkan data ke halaman website secara otomatis


## Struktur Folder
- index.php
- style.css
- koneksi.php
- portfolio.sql
- assets
  - foto saya.jpeg
  - sertifikat makrab.png
  - setifikat aplikasi.jpg
  - sertifikat ic.jpg
  - sertifikat Hrd.png
 
## Penjelasan Code 

### Koneksi Database

File koneksi.php digunakan untuk menghubungkan website dengan database:

<img width="479" height="234" alt="image" src="https://github.com/user-attachments/assets/9603c75c-6a4c-46b8-a292-7235a02be0c7" />

Jika koneksi gagal, maka akan muncul pesan error.

### Data diambil dari Database

Data diambil menggunakan query SQL di dalam PHP:

<img width="663" height="99" alt="image" src="https://github.com/user-attachments/assets/868f639d-1f1a-40d1-b195-547a476df8e1" />

Penjelasan tambahan:
kenapa beda dari yang lain ini penjelasannya,
LIMIT 1 digunakan untuk data tunggal (profile dan about)
Data yang jumlahnya banyak seperti skills, experiences, dan certificates ditampilkan menggunakan while

### Navbar
Fitur:
- MyPortfolio
- Menu: Home, About, Certificates, Contact
- Tombol Let’s Talk
Penjelasannya:
Navbar dibuat menggunakan Bootstrap:
- nav class="navbar navbar-expand-lg navbar-dark navTop sticky-top"
- navbar-expand-lg: responsive
- sticky-top: tetap di atas saat scroll

### Home
Fitur:
- Nama
- Role
- Deskripsi
- Foto
- Tombol navigasi
Penjelasannya:
Data kesemuanya diambil dari database:
<img width="186" height="23" alt="image" src="https://github.com/user-attachments/assets/6326e4be-c79b-4fe6-92ed-4df45f987bf0" />
<img width="186" height="26" alt="image" src="https://github.com/user-attachments/assets/e05f93c9-74a6-49d4-a75b-ce5d3d5b2f29" />
<img width="208" height="23" alt="image" src="https://github.com/user-attachments/assets/f2ddb1cc-3a71-48ad-a55a-f59c0e03bc12" />

dan layoutnya menggunakan Bootstrap grid (row, col-lg-6).

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/fe3f140d-9c2b-4136-8fa9-81ec735cf2a8" />


### About Me
Fitur:
- Quick Info (Fokus, Minat, Tujuan)
- Deskripsi
- Skills
- Experience

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/cab6e0aa-47e4-4dc4-aa14-2d0165627311" />


Penjelasannya:
Data kesemuanya diambil dari database:

a. Quick Info


<img width="804" height="311" alt="image" src="https://github.com/user-attachments/assets/a19218d8-6f68-4b1a-9fb5-7ebe3780533e" />


<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/2090ef3e-b892-40ac-96ba-4a6e9daaccf1" />


b. Deskripsi


<img width="586" height="32" alt="image" src="https://github.com/user-attachments/assets/82772308-e009-4464-affa-64b539a1ea6f" />


<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/2c975e9b-e7cf-44a2-80a3-04b09d74bdce" />


c. Skills


Menggunakan perulangan:


<img width="491" height="23" alt="image" src="https://github.com/user-attachments/assets/cc327814-3a35-4d4b-b1ec-e2b6169df25a" />


<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/2a963117-0b5b-43cb-90c2-1a7259859dcc" />


d. Experience


<img width="519" height="26" alt="image" src="https://github.com/user-attachments/assets/de397ef9-d788-43ef-b22f-3ec5706c4d7c" />

dan ditampilkan dalam bentuk timeline sederhana.

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/37baffb8-e0af-4759-a2bc-6fd301082deb" />


### Certificates
Fitur:
- Daftar sertifikat
- Grid layout
- Tombol lihat sertifikat
Penjelasannya:
Data kesemuanya diambil dari database:
<img width="488" height="27" alt="image" src="https://github.com/user-attachments/assets/2e8e297e-755b-4128-a57b-b59af56b82ab" />


yang otamtis menampilkan:
- Judul
- Tahun
- Link gambar

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/aab91ce6-e4da-4984-81c4-5c67f8839714" />


<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/ce237f6f-da70-475f-beae-5591d2c5e6b7" />


### Database
Database disimpan dalam file:
portfolio.sql

yang berisikan tabel:

- profile
- about
- skills
- experiences
- certificates


### Teknologi yang Digunakan
- HTML: Digunakan untuk struktur website
- CSS: Digunakan untuk styling tampilan
- Bootstrap 5: Digunakan untuk layout dan responsive design
- PHP: Digunakan untuk mengambil data dari database
- MySQL: Digunakan untuk menyimpan data




