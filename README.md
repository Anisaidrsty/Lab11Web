# Praktikum 11: PHP Framework (Codeigniter)
# Langkah-langkah
1. Mengaktifkan Ekstensi
- Aktifkan ekstensi tersebut melalui XAMPP Control Panel pada bagian Apache dengan cara klik Config -> PHP.ini seperti berikut.
<img width="497" alt="image" src="https://user-images.githubusercontent.com/101643559/172397801-5232ed17-3729-4986-9298-ddb5f1bb1280.png">
- Lalu pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan seperti berikut. Kemudian simpan kembali filenya dan restart Apache web server.
<img width="722" alt="image" src="https://user-images.githubusercontent.com/101643559/172398538-5d8873ff-0424-4eba-9382-71ecd0d0fd96.png">
2. Instalasi CodeIgniter 4

- Codeigniter dapat didownload dari website https://codeigniter.com/download

- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.

- Ubah nama directory framework-4.x.xx menjadi ci4.

- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/ Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual seperti berikut.
<img width="764" alt="image" src="https://user-images.githubusercontent.com/101643559/172403066-d58acd22-4bae-4bb9-9581-6ac9fa18f75a.png">
3. Menjalankan CLI (Command Line Interface)

Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt, lalu arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (C:\xampp\htdocs\Lab11_php_ci\ci4). Kemudian setelah itu jalankan perintah untuk memanggil CLI Codeigniter

<img width="627" alt="image" src="https://user-images.githubusercontent.com/101643559/172404920-994a7cb3-5303-406a-b2d7-347a9e64a315.png">

4. Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

<img width="781" alt="image" src="https://user-images.githubusercontent.com/101643559/172405231-2b4ccef3-bdaa-4e6b-b91c-670d6dabd1ee.png">

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. Kemudian mengubah nama file env menjadi .env lalu setelah itu buka file tersebut dan ubah nilai variable CI_ENVORNMENT menjadi development. Setelah mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. maka hapus tanda tagar (#) pada awal baris CI_ENVIRONMENT. Dan yang terakhir, ubah kode pada file app/Controller/Home.php kemudian hilangkan titik koma (;) pada akhir kode seperti berikut.

<img width="668" alt="image" src="https://user-images.githubusercontent.com/101643559/172406028-969c978b-e5a7-46b1-9410-3673bb5b16ec.png">
Maka hasilnya akan terjadi error seperti berikut.
<img width="793" alt="image" src="https://user-images.githubusercontent.com/101643559/172406279-c25f710d-4273-4cca-950e-1b31d1d459a1.png">

5. Membuat Route Baru.
Menambahkan kode di dalam Routes.php seperti berikut.

<img width="487" alt="image" src="https://user-images.githubusercontent.com/101643559/172407965-d1c0bed2-dfbc-4ae6-b31b-603832537dcd.png">

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

<img width="952" alt="image" src="https://user-images.githubusercontent.com/101643559/172408344-1e03f39f-b087-46f1-ad1b-09c6b905f5a3.png">

6. Membuat Controller

Selanjutnya adalah membuat Controller Page. Buat file dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

<img width="598" alt="image" src="https://user-images.githubusercontent.com/101643559/172408661-42229ebe-f004-4340-a3f2-253cbb1cd023.png">

7. Auto Routing

Secara default fitur autoroute pada Codeigniter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variablenya. Untuk menonaktifkan ubah nilai true menjadi false

<img width="609" alt="image" src="https://user-images.githubusercontent.com/101643559/172408906-f3b3a1b6-48f4-4c50-9d1a-cf7558bab89e.png">

8. Membuat View

Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.

<img width="441" alt="image" src="https://user-images.githubusercontent.com/101643559/172411281-b77a9585-0e2a-43b1-a211-02b5c7898a26.png">

Ubah method about pada class Controller Page menjadi seperti berikut:

<img width="422" alt="image" src="https://user-images.githubusercontent.com/101643559/172412428-b91f1da2-f829-4b77-898d-3eeba0087deb.png">

Maka hasilnya akan seperti berikut

<img width="587" alt="image" src="https://user-images.githubusercontent.com/101643559/172412603-7ede144a-5d6c-47c2-b593-a3799cb58ee9.png">
9. Membuat Layout Web dengan CSS

Pada dasarnya layout web dengan css dapat diimplementasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout) Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

<img width="611" alt="image" src="https://user-images.githubusercontent.com/101643559/172413074-f3431c02-3563-48ad-8dca-c74207a47607.png">

Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php
<img width="632" alt="image" src="https://user-images.githubusercontent.com/101643559/172413424-7426b24b-750c-4eff-850a-362354ced5a0.png">

Maka hasilnya seperti berikut

<img width="460" alt="image" src="https://user-images.githubusercontent.com/101643559/172413610-37e214e1-1857-4fb4-b347-e02d0bf9bb63.png">

PERTANYAAN DAN TUGAS

Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

<img width="759" alt="image" src="https://user-images.githubusercontent.com/101643559/172417979-e267b96f-2568-4df6-98ea-ac1b2f9ee068.png">
<img width="959" alt="image" src="https://user-images.githubusercontent.com/101643559/172418627-5d6c6a3b-2d1c-49cd-a25e-1caf7327b244.png">


#Praktikum 12: Framework Lanjutan (CRUD)
Langkah-langkah Praktikum

Persiapan

Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP seperti berikut.

<img width="502" alt="image" src="https://user-images.githubusercontent.com/101643559/173361187-cb7822a4-a1e8-44ab-9ca8-f52f4eb39e3e.png">

- Langkah 1
Membuat database kemudian membuat Tabel dan masukkan kode pada database query seperti berikut.

<img width="737" alt="image" src="https://user-images.githubusercontent.com/101643559/173361669-2a6a0934-3068-4f58-80b3-28f83d0f558e.png">

- Langkah 2 Konfigurasi koneksi database

Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Kemudian melakukan konfigurasi dengan cara mengubah beberapa kode pada file htdocs\lab11_php_ci\ci4\.env. Lalu cari pada line DATABASE dan hilangkan tanda pagar (#) didepan seperti berikut ini.

<img width="593" alt="image" src="https://user-images.githubusercontent.com/101643559/173362822-11be4668-9f9f-4d1c-a6f4-8d4a4da8cbfa.png">

- Langkah 3 Membuat Model

Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php lalu masukkan kode seperti berikut.

<img width="575" alt="image" src="https://user-images.githubusercontent.com/101643559/173363792-edabc54b-14c1-43f6-bc2b-82d31c42d90e.png">

- Langkah 4 Membuat Controller

Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers lalu masukkan kode seperti berikut

<img width="525" alt="image" src="https://user-images.githubusercontent.com/101643559/173364325-aa619926-fdf4-4bd1-9fcb-4e0263e5351b.png">

- Langkah 5 Membuat View

Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.

<img width="670" alt="image" src="https://user-images.githubusercontent.com/101643559/173365172-2d38f144-2b8d-4ba1-97cf-1b7ccea52f75.png">

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel maka hasilnya akan seperti berikut.

<img width="444" alt="image" src="https://user-images.githubusercontent.com/101643559/173366906-791adc5c-7bf1-42e7-8a6a-6c1a242e2bf4.png">

Terlihat belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database query agar dapat ditampilkan datanya seperti berikut.

<img width="923" alt="image" src="https://user-images.githubusercontent.com/101643559/173366992-168bae97-fe2f-4b4a-8f13-1e38c7e7e754.png">

Lalu refresh kembali browser, sehingga akan ditampilkan hasilnya seperti berikut.

<img width="436" alt="image" src="https://user-images.githubusercontent.com/101643559/173367162-ff40d4dd-9092-44ea-abab-ba01d0e099ad.png">

Langkah 6 Membuat Tampilan Detail Artikel

Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().

<img width="484" alt="image" src="https://user-images.githubusercontent.com/101643559/173368174-e572b2ab-f2b9-4572-8343-57e3d1fc0fcb.png">

- Langkah 7 Membuat View Detail

Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php seperti berikut.

<img width="631" alt="image" src="https://user-images.githubusercontent.com/101643559/173369021-09562b87-c3cf-46b8-abaa-eb902cb47bb8.png">

- Langkah 8 Membuat Routing untuk artikel detail

Buka kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail maka hasilnya akan seperti berikut.

<img width="452" alt="image" src="https://user-images.githubusercontent.com/101643559/173369505-2cfdf5e1-ee71-4f6a-a189-0668ac4082c7.png">

- Langkah 9 Membuat Menu Admin

Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index() seperti berikut.

<img width="514" alt="image" src="https://user-images.githubusercontent.com/101643559/173370114-9d75ae80-d90f-4ae0-a018-d6c6bcf3ea54.png">

Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php seperti berikut.

<img width="908" alt="image" src="https://user-images.githubusercontent.com/101643559/173371389-9a264080-6561-442e-aebb-1e594ec0cdf8.png">

Setelah itu tambahkan routing untuk menu admin seperti berikut.

<img width="577" alt="image" src="https://user-images.githubusercontent.com/101643559/173372405-ed0571b6-37a8-4504-b45d-c63411d4a4f3.png">

Kemudian akses menu admin dengan url http://localhost:8080/admin/artikel seperti berikut.
<img width="495" alt="image" src="https://user-images.githubusercontent.com/101643559/173372462-3546f870-7478-4b1a-9ea3-469d4c1a8628.png">

Langkah 10 Menambah Data Artikel

Tambahkan fungsi/method baru pada Controller Artikel dengan nama add() seperti berikut.

<img width="575" alt="image" src="https://user-images.githubusercontent.com/101643559/173373305-17223226-04ba-4b67-8de6-6f594383979c.png">

Kemudian buat view untuk form tambah dengan nama form_add.php seperti berikut.

<img width="688" alt="image" src="https://user-images.githubusercontent.com/101643559/173373781-e65b4277-42f0-4192-926b-00753204e20e.png">\

<img width="495" alt="image" src="https://user-images.githubusercontent.com/101643559/173374323-0395a83c-03c9-4b0f-a3f6-8fc49ecf06a4.png">

- Langkah 11 Mengubah Data

Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

<img width="487" alt="image" src="https://user-images.githubusercontent.com/101643559/174069873-c472d875-0be9-410e-9f27-874630370cee.png">

Kemudian buat view untuk form tambah dengan nama form_edit.php
<img width="479" alt="image" src="https://user-images.githubusercontent.com/101643559/174070287-e111f3e8-3573-47f5-acb8-d2a08f81c593.png">

Setelah itu, lalu klik Ubah pada salah satu judul artikel, maka hasilnya akan seperti berikut.

<img width="459" alt="image" src="https://user-images.githubusercontent.com/101643559/174070348-843493f5-47a4-4a01-ad5e-645a35b0740f.png">

- Langkah 12 Menghapus Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete() seperti berikut.

<img width="522" alt="image" src="https://user-images.githubusercontent.com/101643559/174070664-7c5a4e82-3221-46f3-ab9a-f9f3c90b9b73.png">

