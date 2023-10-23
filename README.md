# CoffeeshopWebsite

Spesifikasi Kebutuhan Perangkat Lunak
Untuk
Website E-Commerce 
Coffee Shop 

Versi 1.0 Disetujui


Disusun Oleh : 

Intan Rachmalia Dewi (22091397021) 

Frida Nur Cahyani (22091397036) 

Maharani Sekar Hapsari (22091397037)


D4 Manajemen Informatika
Fakultas Vokasi 
Universitas Negeri Surabaya
2023 

Daftar Isi
1. Pengantar
   
1.1	Tujuan
  	
1.2	Konvensi Dokumen

1.3	Audiens Yang Dituju	

1.4	Lingkup Produk	

1.5	Referensi	

2. Deskripsi Keseluruhan
   
2.1	Perspektif Produk
  	
2.2	Fungsi Produk	

2.3	Kelas dan Karakteristik Pengguna

2.4	Lingkungan Pengembangan	

2.5	Kendala Desain dan Implementasi	

2.6	Dokumentasi Pengguna	

2.7	Asumsi dan Dependensi	

3. Persyaratan Antarmuka
   
3.1	Antarmuka Pengguna
  	
3.2	Antarmuka Perangkat Keras	

3.3	Antarmuka Perangkat Lunak	

3.4	Antarmuka Komunikasi	

4. Fitur Sistem
    
4.1	Deskripsi dan Prioritas
   	
4.2	Fitur Sistem	

4.3	Persyaratan Fungsional	

5. Persyaratan Fungsional Lainnya
    
5.1	Persyaratan Performa
   	
5.2	Persyaratan Keamanan Pengguna	

5.3	Persyaratan Keamanan Website	

5.4	Atribut Kualitas Perangkat Lunak	

5.5	Proses Bisnis	

6. Persyaratan Lainnya
    
7. Penjelasan HTML

8. Penjelasan CSS

 
Riwayat Perubahan

Nama	Tanggal	Alasan Perubahan	Versi
Deploy Pertama ke Github	12 September 2023	Upload Program ke Github	1.0.0
Optimisasi Website	-	Perbaikan CSS Pada Website	1.0.1
 
1.	Pengantar

1.1	Tujuan

Tujuan pembuatan website Coffee Shop antara lain :
1.	Memungkinkan pembeli untuk mengakses informasi dengan mudah mengenai kafe, seperti menu, lokasi, dan jam operasional tanpa harus datang ke kafe.
2.	Memungkinkan kafe untuk berbagi promosi, diskon, menu baru secara 		lebih cepat yang dapat meningkatkan minat dan partisipasi pembeli.
3.	Meningkatkan jangkauan pasar karena website dapat dilihat oleh pembeli dari berbagai tempat tidak hanya oleh orang yang berada di sekitar kafe.
4.	Memudahkan pemilik cafe dalam memahami preferensi pembeli dan mengoptimalkan pengalaman pengguna karena adanya web dapat diketahui jumlah dan perilaku pembeli. Informasi ini dapat digunakan untuk meningkatkan strategi pemasaran dan pengelolaan kafe.

1.2	Konvensi Dokumen

Dokumen SRS ini memiliki fitur istilah-istilah yang mungkin jaang ditemukan oleh pembaca. Pembaca dapat melihatnya di Appendix A (Glossary) untuk daftar dari istilah-istilah dan difinisinya masing-masing.

1.3	Audiens Yang Dituju 

Dokumen ini ditujukan untuk semua orang terutama individu yang mencari tempat nyaman untuk menikmati waktu santai dengan menikmati berbagai jenis kopi dan makanan ringan. Selain itu, orang orang yang ingin memesan makanan dari Coffee Shop dengan cara yang praktis dan cepat ataupun tertarik untuk mendapatkan informasi terbaru tentang promosi, acara khusus, dan produk baru dari Cofee Shop Kopi Asmara. Pembaca yang tertarik dengan Web Kopi Asmara ini dapat membaca lebih lanjut bagian 3 yaitu System Features yang menjelaskan mengenai informasi yang tercantum dalam gambaran umum projek, atau bagian 4 dan 5 yang menjelaskan detail mengenai kebutuhan fungsional dan non fungsional dari web ini.

1.4	Lingkup Produk

Web Coffee Shop Kopi Asmara adalah sebuah website yang berfungsi untuk menyediakan pengalaman pengguna yang intuitif dan efisien bagi para pelanggan untuk memesan makanan dan minuman dari kedai kopi. Software ini didesain dengan tujuan utama memfasilitasi proses pemesanan secara online, memungkinkan pengguna menjelajahi menu, membuat pesanan, memilih opsi pengiriman dan pengambilan barang sendiri, dan melakukan pembayaran. Pengguna dari aplikasi terdiri dari pelanggan yang ingin menikmati produk dari kedai Kopi Asmara dengan cara yang lebih praktis dan cepat.
Pada jangka panjang, website ini mungkin akan dikembangkan lebih lanjut untuk memasukkan fitur-fitur tambahan seperti integrasi dengan pembayaran pihak ketiga, pembaruan menu secara berkala, atau pemberian rekomendasi berdasarkan preferensi pelanggan. Tujuannya adalah untuk terus meningkatkan pengalaman pembeli dan meningkatkan efisiensi operasional dari perspektif pelanggan.

1.5	Referensi 

Bahan referensi yang digunakan dalam penyelesaian dokumen ini diambil dari beberapa buku seperti : 
Software Engineering: A Practitioner’s Approach, 7th International edition, Roger Pressman, 2009
IEEE. IEEE Std 830-1998 IEEE Recommended Practice for Software Requirements Specifications. IEEE Computer Society, 1998.

2.	Deskripsi Keseluruhan

2.1	Perspektif Produk

Website Coffe Shop ini merupakan platform website online yang dirancang untuk melakukan pembelian kopi secara online pada halaman web melalui smartphone, tablet atauPC yang terkoneksi dengan internet. Website Coffe Shop ini memiliki katalog yang menampilkan beberapa menu kopi yang dapat ditambahkan kedalam keranjang dan dapat dipesan secara online via website. Sehingga dengan adanya Website Coffe Shop ini diharapkan mampu mempermudah pelanggan untuk melakukan pemesanan serta meningkatkan penjualan.

2.2	Fungsi Produk

Website ini digunakan untuk mempermudah customer/pelanggan dalam melakukan pembelian dan pemesanan menu yang ada pada website coffe shop kami.

2.3	Kelas dan Karakteristik Pengguna

Karakteristik dari pengguna website coffe shop adalah sebagai berikut:
a.	Admin: Mengelola pesanan, komunikasi dengan pelanggan, mengelola masalah, dan menganalisis data.
b.	Customer: Membuat pesanan, melakukan pembayaran dan konfirmasi, memantau status pesanan.
 
2.4	Lingkungan Pengembangan

Website Coffee Shop memiliki beberapa teknologi yang dipakai untuk mengembangkan website ini, antara lain :
Bahasa Pemrograman
1.	CSS
2.	Javascript
3.	HTML : HyperText Markup Language
Software Pengembangan
1.	VSCode : Software Pemrograman
2.	Command Prompt
3.	Google Chrome


2.5	Kendala Desain dan Implementasi


2.6	Dokumentasi Pengguna

SRS ini dibagi menjadi beberapa bagian, yaitu :
1.	Pendahuluan yang berisi gambaran umum dari seluruh dokumen SRS. Pendahuluan
SRS berisikan bagian-bagian berikut:
- Tujuan Penulisan Dokumen
- Konvensi Dokumen
- Pembaca yang Dituju
- Lingkup Produk
- Referensi 
3.	Deskripsi umum perangkat lunak yang berisi penjelasan perangkat lunak secara umum. Dijelaskan melalui deskripsi umum sistem, fungsi produk, karakteristik pengguna, batasan, lingkungan operasi.
4.	Kebutuhan Antarmuka Eksternal merincikan deskripsi masukan dan keluaran perangkat
lunak yang dispesifikasikan. Ada berbagai macam antarmuka eksternal, antara lain : antarmuka pengguna, antarmuka perangkat keras, antarmuka perangkat keras, antarmuka komunikasi.
5.	Fungsi Produk berisi fungsi utama dari perangkat lunak.
6.	Kebutuhan Non Fungsional berisi bagian yang menspesifikasikan ukuran kuantitatif yang harus dipenuhi perangkat lunak


2.7	Asumsi dan Dependensi

Asumsi:
Asumsi - asumsi pada Website Coffe Shop adalah sebagai berikut:
a.	Admin dapat mengelola dan melihat sistem secara keseluruhan termasuk mengelola administrasi dan manajemen website coffe shop tidak memiliki wewenang untuk mengubah data data pemesanan dan pembayaran.
b.	Customer memiliki wewenang untuk melakukan pemesanan secara online, mengatur pemesanan, mengubah lokasi, verifikasi pembayaran, memantau pesanan dan memberikan ulasan setelah transaksi. 
Dependensi:


3.	Persyaratan Antarmuka

3.1	Antarmuka Pengguna

Situs web Kopi Asmara ini menawarkan antarmuka pengguna yang ramah dan intuitif. Navigasi yang mudah digunakan memungkinkan pengguna beralih antara halaman dengan lancar, sementara palet warna yang netral memberikan tampilan yang menyenangkan tanpa terlalu mencolok. Tipografi yang jelas dan gambar berkualitas tinggi digunakan untuk memastikan informasi ditampilkan dengan baik. Situs ini juga responsif, memastikan pengalaman yang konsisten di berbagai perangkat, dan penggunaan ikon yang jelas membantu memandu pengguna dengan cepat dan mudah.

3.2	Antarmuka Perangkat Keras

Adapun antarmuka perangkat keras yang digunakan untuk mengakses website Daysee antara lain:
- Smartphone : Hardware untuk mengakses situs Coffee Shop Kopi Asmara.
- Monitor : Menampilkan halaman website.
- Keyboard : Untuk memasukkan input ke website.
- Mouse / trackpad : Untuk mempermudah navigasi pengguna.
   
3.3	Antarmuka Perangkat Lunak

A. Tampilan Home

Pada tampilan awal, pengguna akan dihadapkan pada tampilan Home yang didalamnya terlihat juga fitur dari web ini. Terdapat About Us, Our Menu, dan Contact. Terdapat juga fitur untuk memesan produk dari Kopi Asmara dengan meng-klik Order Now.
![pic1](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/0be94c5f-c51e-466e-97cc-e4ea9ef8ed02)

B. Tampilan About Us

About Us ini menampilkan informasi mengenai alasan memilih kedai Kopi Asmara.

![pic2](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/129adb5e-089e-49df-8bd8-6d3989fa6652)

C. Tampilan Our Menu

Pada tampilan Our Menu, terdapat daftar menu yang dijual di kedai Kopi Asmara dengan menampilkan gambar, nama produk, dan juga harga. 

![pic3](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/9e84988f-21d9-49ec-8e39-dfb429032e55)

D. Tampilan Contact

Untuk informasi lebih lanjut, terdapat Contact yang dapat dihubungi oleh pembeli apabila mempunyai beberapa pertanyaan. Disini juga terdapat peta yang menampilkan alamat dari kedai Kopi Asmara.

![pic4](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/c5c6cc41-27af-41b0-8f92-ac65d929d6eb)

3.4 Antarmuka Komunikasi

Website Coffee Shop ini membutuhkan laptop, PC, tablet atau smartphone yang terhubung ke jaringan internet untuk beroperasi dengan baik. TCP/IP digunakan sebagai standar komunikasi data yang dipakai dalam proses tukar menukar data antar perangkat yang terhubung dalam jaringan.

4.	Fitur Sistem

4.1	Deskripsi dan Prioritas

4.1.1	Fitur Menu “Home”

Fitur menu home merupakan fitur utama pada Website Coffee Shop. Dengan fitur ini, customer dapat melihat beberapa tampilan awal, seperti rekomendasi produk yang sangat unik dan produk terfavorit. Pada tampilan beranda juga ada beberapa pilihan kategori untuk customer.

4.1.2	Fitur Menu “About Us”

Fitur menu about us ini bertujuan untuk membuat customer lebih mengenal mengenai Coffee Shop Kopi Asmara ini. Pada laman ini akan terdapat sejarah singkat berdirinya Kopi Asmara. 

4.1.3	Fitur Menu “Ours Menu”

Fitur ours menu ini berisikan menu-menu yang ada pada coffeeshop ini. Selain menu juga terdapat harga dan deskripsi singkat mengenai setiap menu. Pada laman ini customer juga dapat menemukan rekomendasi menu terfavorit dan paling populer bagi customer sebelumnya. 

4.1.4	Fitur Menu Checkout

Fitur Menu Checkout merupakan fitur menu dimana customer akan dapat memesan produk secara online. Pesanan tersebut akan dimasukan keranjang terlebih dahulu. Setelah memilih jenis pembayaran, mengecek pesanan, dan konfirmasi alamat pengiriman maka customer baru bisa meng-order pesanan tersebut.

4.1.5	Fitur Menu Contact

Fitur menu contact akan terdapat kontak maupun media sosial pribadi Kopi Asmara sehingga memudahkan Kopi Asmara untuk dapat berinteraksi dengan banyak calon customer.

4.2	Fitur Sistem 

4.3	Persyaratan Fungsional


5.	Persyaratan Fungsional Lainnya

5.1	Persyaratan Performa

Persyaratan hardware dan software :

1.	Minimum windows 7 atau lebih
2.	Google chrome atau browser versi terbaru
3.	Akses internet

5.2	Persyaratan Keamanan Pengguna

1.	Data diri dan password pengguna terjamin keamanannya karena tidak bisa diakses oleh sembarang orang dan password sudah di enkripsi.
2.	Transaksi pembayaran menggunakan mitra pembayaran pihak kedua seperti dana, ovo, spay, gopay.

5.3	Persyaratan Keamanan Website

1.	Website sudah menggunakan domain .com dan SSL sebagai sertifikasi keamanan website agar tidak mudah diretas oleh pihak yang tidak bertanggung jawab.
2.	Karena transaksi menggunakan pihak kedua yaitu ovo, dana, spay, gopay, dan m-banking maka proses transaksi terjamin keamanannya.

5.4	Atribut Kualitas Perangkat Lunak

5.5	Proses Bisnis



6.	Persyaratan Lainnya
   	
Lampiran A : Glosarium























Lampiran B : Model Analisis
A.	Flowchart
		 ![image](https://github.com/Maharani-SH/CoffeeshopWebsite/assets/124522757/aadc43e9-2c45-41cb-af62-6507f874cc1a)









B.	Use Case Diagram

 ![image](https://github.com/Maharani-SH/CoffeeshopWebsite/assets/124522757/cd03ca25-4b5e-49a1-8c9d-636223de480e)



C.	Data Flow Diagram 
-	Level 0
-	
 ![image](https://github.com/Maharani-SH/CoffeeshopWebsite/assets/124522757/0da1caed-8b8c-42fa-825f-877aec964c10)






-	Level 1
-	Level 2
-	Level 2.1

Lampiran C : Daftar Fitur Yang Akan Ditentukan

Pada lampiran ini berisi mengenai fitur-fitur yang belum ditentukan pada website daysee, antara lain yaitu pembuatan IP agar website Daysee agar dapat digunakan pada aplikasi mobile, dan membuat Daysee menjadi aplikasi yang dapat digunakan pada android.


 8. Penjelasan CSS

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/d31df2c8-dc7a-43d9-8f62-c1ea844b4589)

:root adalah pseudo-class yang mengacu pada elemen root dari dokumen HTML, yaitu <html>. Dalam CSS, :root digunakan untuk mendefinisikan variabel CSS global seperti --primary (warna utama) yang disini menggunakan kode heksa (ditandai dengan tanda pagar) sehingga memberikan warna biru dan --bg (warna background) yang juga menggunakan kode heksa berwarna hitam tua. Variabel ini bisa digunakan di seluruh halaman web untuk mengontrol properti seperti warna, latar belakang, dan lainnya.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/ddca2f65-86fc-4414-b19a-d05262c83a6f)

Kode * dalam CSS adalah selektor universal, yang berarti memilih semua elemen di halaman web. Didalamnya terdapat beberapa property seperti margin, padding, box-sizing, outline, border, dan text-decoration. Terdapat margin: 0 untuk menghapus margin (ruang kosong) di sekitar elemen, sehingga elemen akan mulai tepat dari tepi kontainer induknya, padding: 0 untuk menghapus padding (ruang di dalam elemen) sehingga konten elemen akan mulai dari tepi elemen itu sendiri, box-sizing: border-box untuk menentukan cara browser menghitung lebar dan tinggi elemen, sehingga termasuk padding dan border dalam pengukuran total, bukan menambahkannya. Selanjutnya ada outline: none untuk menghilangkan garis luar (outline) yang muncul saat elemen mendapatkan fokus, border: none untuk menghapus semua border dari elemen, text-decoration: none untuk menghapus dekorasi teks seperti garis bawah pada tautan.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/669786fd-5a73-4c0c-8ca6-18fad7f978a2)

html { scroll-behavior: smooth; } adalah aturan CSS yang mengubah perilaku scroll pada elemen <html> di halaman web. Dengan pengaturan ini, ketika pengguna mengklik tautan di halaman web, halaman akan menggulir ke bagian yang dituju dengan gerakan yang lebih halus dan tidak terlalu tiba-tiba.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/6171011c-c2f4-4848-a29e-8fbd40c86945)

Body adalah selektor yang memilih elemen <body> dalam dokumen HTML. Didalamnya terdapat font-family yang mengatur jenis font untuk digunakan di selutuh web menggunakan Poppins, jika tidak tersedia maka akan menggunakan sans-serif. Selanjutnya background-color yang mengatur latar belakang untuk <body>, disini kami menggunakan sesuai background yang sudah didefinisikan sebelumnya yaitu warna hitam. Kemudian color: #fff yang mengatur warna teks di dalam body menjadi putih. Terakhir min-height: 2200px yang menentukan tinggi minimum untuk memastikan konten halaman dapat ditampilkan dengan baik tanpa harus menggulir terlalu jauh.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/e7798f14-3516-4b11-82f1-932772fd449a)

Kode CSS tersebut adalah aturan untuk elemen dengan kelas navbar. .navbar adalah selektor untuk elemen dengan kelas navbar, didalamnya terdapat display: flex yang mengatur elemen navbar untuk menggunakan model tata letak flexbox, justify-content: space-between untuk mengatur ruang di sekitar elemen di dalam navbar agar terdistribusi secara merata, sehingga elemen akan berada di sebelah kiri dan kanan, align-items: center yang mengatur elemen di dalam navbar agar berada di tengah secara vertical. 
Selanjutnya terdapat padding: 1.4rem 7% yang memberi jarak sekitar elemen navbar, background-color: rgb(1, 1, 1, 0.8) untuk menentukan warna latar belakang dengan nilai rgba yang hampir hitam, sehingga sedikit transparan. border-bottom: 1px solid #1082a8 untuk menambahkan garis bawah dengan warna biru, position: fixed untuk mengunci elemen navbar di tempatnya, sehingga tetap berada di atas bahkan saat pengguna menggulir halaman, top: 0; left: 0; right: 0 untuk menempatkan elemen navbar di seluruh lebar halaman, z-index: 9999 untuk mengatur tumpukan z-indeks, sehingga elemen "navbar" akan selalu berada di atas elemen lainnya.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/d446e378-755c-4014-bbdf-5cbc7aac15fa)

.navbar .navbar-logo span adalah selector CSS yang memilih elemen <span> yang berada di dalam elemen dengan kelas navbar-logo yang sendiri berada di dalam elemen dengan kelas navbar, color: var(--primary) untuk mengatur warna teks dari elemen <span> menjadi nilai dari variabel CSS --primary yang telah didefinisikan sebelumnya.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/3b8cc736-9d34-4f9b-8d69-68933047f0c8)

Kode CSS .navbar .navbar-nav a adalah selector CSS yang memilih elemen <a> yang berada di dalam elemen dengan kelas navbar-nav yang sendiri berada di dalam elemen dengan kelas navbar. color: #fff yang mengatur warna teks dari elemen <a> menjadi putih, display: inline-block yang mengatur elemen <a> untuk ditampilkan sebagai blok yang memungkinkan pengaturan margin, padding, dan dimensi lainnya, font-size yang menetapkan ukuran font sebesar 1.3 rem, margin: 0 1rem untuk mengatur margin pada sisi kanan dan kiri dari elemen <a>, dengan nol di atas dan bawahnya. Ini memberikan jarak horizontal antar tautan pada navbar.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/e5b5d22d-8aa1-4a49-a7ce-ce38fcf25910)

.navbar .navbar-nav a:hover adalah selector CSS yang memilih elemen <a> ketika pengguna melakukan hover (mengarahkan kursor mouse ke atasnya) yang berada di dalam elemen dengan kelas navbar-nav yang sendiri berada di dalam elemen dengan kelas navbar. color: var(--primary) maksudnya ketika elemen <a> dalam navbar-nav di-hover, warna teks akan diubah menjadi nilai dari variabel CSS –primary.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/9604ba95-5327-4f06-91f8-7a5cdb2236c0)

Kode .navbar .navbar-nav a::after adalah selector CSS yang memilih pseudoelemen ::after dari elemen <a> yang berada di dalam elemen dengan kelas navbar-nav yang sendiri berada di dalam elemen dengan kelas navbar. content: "" menetapkan konten menjadi string kosong, display: block menetapkan tampilan sebagai blok, padding-bottom: 0.5rem untuk menambahkan jarak di bawah, border-bottom: 0.1rem solid var(--primary) untuk menambahkan garis bawah dengan ketebalan 0.1 rem dan warna sesuai dengan nilai dari variabel CSS –primary, transform: scaleX(0) akan memiliki skala horizontal (lebar) 0 pada awalnya, sehingga tidak terlihat. transition: 0.2s linear untuk mengatur transisi animasi selama 0.2 detik dengan percepatan linier ketika terjadi perubahan.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/426ca62f-2ff4-4a1b-9f10-99512cd2d541)

Kode ini menghasilkan efek animasi di mana garis bawah yang muncul saat mengarahkan kursor ke tautan pada navbar akan memanjang secara horizontal hingga setengah lebarnya. Ini memberikan umpan balik visual kepada pengguna ketika mereka mengarahkan kursor mouse ke atas tautan pada navbar.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/aa627efa-5589-4753-a51a-bf99f8f6c35f)

.navbar .navbar-extra a  adalah selector CSS yang memilih elemen <a> yang berada di dalam elemen dengan kelas navbar-extra, yang sendiri berada di dalam elemen dengan kelas navbar. color: #fff yang mengatur warna teks dari elemen <a> menjadi putih, margin: 0 0.5rem untuk menetapkan margin pada sisi kiri dan kanan dari elemen <a>, dengan nol di atas dan bawahnya. Ini memberikan jarak horizontal antar tautan pada navbar-extra.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/7a1ab323-91d2-40a0-8e5c-f0a24d81ae38)

color: var(--primary) memberikan efek visual ketika pengguna mengarahkan kursor ke tautan pada navbar-extra, warna teks akan diubah menjadi nilai dari variabel CSS --primary yang telah didefinisikan sebelumnya.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/72534c3b-c556-433f-a5ec-6b1f51f39949)

.hero adalah selector CSS yang memilih elemen dengan kelas hero. min-height: 100vh untuk menetapkan tinggi minimum elemen hero sebesar 100% dari ketinggian viewport (tinggi layar pengguna), display: flex untuk mengatur elemen hero agar menggunakan model tata letak flexbox, align-items: center untuk mengatur elemen agar berada di tengah secara vertical, background-image: url("../IMG/background.jpg") untuk menetapkan gambar latar belakang, background-repeat: no-repeat untuk mengatur gambar latar belakang untuk tidak diulang, background-size: cover untuk menyesuaikan ukuran gambar latar belakang agar selalu menutupi seluruh area elemen hero, background-position: center untuk memposisikan gambar latar belakang di tengah-tengah, position: relative untuk mengatur posisi elemen hero sebagai relatif terhadap posisi normalnya dalam halaman.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/161d17ee-a22e-468d-8975-a70f1878af11)

Kode CSS ini menambahkan elemen pseudo setelah elemen dengan kelas hero untuk menciptakan efek overlay pada latar belakang. Content: “” untuk menetapkan konten menjadi string kosong, display: block untuk mengatur tampilan sebagai blok, position: absolute untuk mengatur posisi secara terpisah dari elemen aslinya, width: 100% untuk menetapkan lebar sebesar 100% dari lebar elemen hero, height: 30% untuk menetapkan tinggi sebesar 30% dari tinggi elemen hero, bottom: 0 untuk memposisikan pseudoelemen ::after di bagian bawah elemen hero. background: untuk menetapkan latar belakang pada pseudoelemen ::after menggunakan gradien linear.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/e71850e2-93bd-4318-bbe3-dcf194886abb)

.hero .content: Ini adalah selector CSS yang memilih elemen dengan kelas content yang berada di dalam elemen dengan kelas hero. padding: 1.4rem 7% untuk menetapkan jarak di sekitar konten dengan 1.4 rem di atas dan bawah, serta 7% dari lebar elemen di sisi kanan dan kiri, max-width: 60rem untuk memastikan bahwa konten tidak melebar terlalu lebar pada tampilan layar yang lebih besar.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/4a2a50ed-3fc3-4768-9514-ada6dbc4bf46)

Kode CSS ini adalah aturan yang berlaku untuk elemen h1 yang berada di kelas content, sedangkan kelas content berada di kelas hero. Font-size untuk menentukan font h1 sebesar 5em, color untuk mengatur warna teks menjadi putih, text shadow untuk menambahkan bayangan pada teks sesuai warna rgba, line-height: 1.2 untuk menetapkan tinggi garis (line-height) elemen h1 sebesar 1.2. Ini mempengaruhi jarak antar baris dalam teks.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/21fad52c-aa10-40d9-9459-963ee895afea)

Kode CSS .hero .content h1 span untuk memilih elemen <span> yang berada pada h1, h1 berada pada kelas content, sedangkan content berada pada kelas hero. Color untuk mengatur warna teks, disini menggunakan warna primary atau biru.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/80b32923-5ec9-4850-a4b7-c1026d6d3772)

Kode .hero .content p adalah aturan yang berlaku untuk elemen p, elemen p ada di kelas content, content berada di kelas hero. Font-size menetapkan ukuran font sebesar 1.6rem, margin-top untuk menetapkan jarak dari atas elemen sebesar 1 rem, line-height untuk menetapkan tinggi garis (line-height) sebesar 1.4, font-weight untuk memberikan efek tebal pada huruf, text-shadow memberikan bayagan pada huruf, offset horizontal 1 piksel, offset vertikal 1 piksel, dan radius bayangan 3 piksel. Bayangan ini memiliki warna gelap dengan tingkat transparansi sebesar 0.5. mix-blend-mode : different artinya dapat menciptakan efek warna tergantung pada latar belakangnya.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/8e11640a-9fcd-41db-a42d-b1e611953fbb)

Kode .hero .content .cta berlaku untuk elemen kelas .cta. margin-top menetapkan jarak dari atas elemen sebesar 1 rem, display untuk mengatur elemen cta agar ditampilkan sebagai blok yang memungkinkan pengaturan margin, padding, dan dimensi lainnya. Padding untuk menetapkan ruang di dalam elemen dengan 1rem atas bawah, 3rem kanan kiri. Font-size untuk menentukan ukuran sebesar 1.4rem, color agar tulisan menjadi putih, background-color agar warna latar belakang berwaran sesuai warna primary, border-radius memberikan efek pada bagian sudut agar tidak terlalu kotak, box-shadow untuk memberikan bayangan.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/5f1f7a13-0020-4039-9ea0-2d38a8386292)

.about .menu .contact artinya kode didalamnya berlaku untuk kelas about, menu, dan contact. Padding untuk menetapkan ruang di sekitar konten dengan 8 rem di atas dan bawah, 7% dari lebar elemen di sisi kanan dan kiri, serta 1.4 rem di bawah.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/139ea3dd-6eb3-49fe-b144-c5dfc31f764b)

Sama seperti sebelumnya ini berlaku pada kelas about, menu, dan contact tetapi pada elemen h2. Text-align untuk mengatur teks dalam h2 menjadi rata tengah (center), font-size untuk ukuran huruf sebesar 2.6rem,  margin-bottom untuk memberikan jarak dari bawah sebanyak 3 rem.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/81b54d67-dcb4-409a-85a0-d947384f13bd)

Kode CSS tersebut berlaku untuk elemen span pada elemen h2 kelas about, menu, dan contact. Color untuk mengatur warna tulisan menjadi warna primary yaitu biru.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/74f0ffe0-dcf5-4eca-a804-c8f13ec9ec29)

Kode .about .row adalah aturan yang berlaku untuk elemen dengan kelas row yang berada di dalam elemen dengan kelas about. display: flex untuk mengatur model tata letak flexbox yang dapat diatur secara fleksibel.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/a160c31b-6b13-4b37-9efa-a42fd340db20)

.about .row .about-img adalah salektor CSS yang memilih kelas about-img yang ada di kelas row, kelas row berada di kelas about. flex untuk mengubah ukurannya sesuai dengan kebutuhan kontainer flexbox. Angka 1 untuk flex grow (pertumbuhan) dan 1 kedua untuk flex shrink (penyusutan), artinya elemen dapat tumbuh dan menyusut seiring dengan fleksibilitas.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/65c43c37-b864-4da9-a4af-6e6130d3786d)

Kode CSS ini adalah aturan yang berlaku untuk elemen img yang berada di dalam elemen dengan kelas about-img, kelas ini berada di kelas row, kelas row berada di kelas about. width untuk menetapkan lebar elemen <img> sebesar 100% dari lebar elemen about-img.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/58b212c7-22e0-487b-8ee8-82270b01004e)

Kode .about .row .content berlaku untuk elemen dengan kelas content yang berada di kelas row, kelas row berada di kelas about. flex untuk mengatur fleksibilitas dari elemen, 1 pertama untuk pertumbuhan, 1 kedua untuk penyusutan, 35rem adalah ukuran awal elemen. padding untuk memberikan jarak 0 di atas dan di bawah, serta 1 di kiri dan kanan.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/e47901f4-06bf-4ad5-b762-46d7b4c4afc5)

.about .row .content h3 artinya kode CSS ini berlaku untuk elemen h3 yang ada pada kelas content. Font-size untuk menentukan ukuran huruf pada h3 sebesar 1.8rem, margin-bottom artinya menambah jarak dari bawah elemen sebesar 1rem.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/16c6bbed-a91a-4521-81ee-905f25e0feda)

.about .row .content p artinya kode CSS ini berlaku untuk elemen p yang ada pada kelas content. Margin-bottom untuk menambah jarak di bawah elemen p sebanyak 0.8rem, font-size untuk ukuran huruf sebesar 1.3rem, font-weight untuk mengatur ketebalan huruf sebesar 100, line-height sebesar 1.6 yang mempengaruhi jarak antar baris dalam teks.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/bee9ad03-711b-44a1-b176-2542c2c93a29)

Selanjutnya .menu h2, .contact h2 adalah selector CSS yang memilih elemen h2 yang berada di dalam elemen dengan kelas menu dan contact. Margin-bottom untuk menambah jarak atau ruang di bawah elemen sebesar 1rem di bawah h2.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/0e680398-3c09-42c8-9744-00045de5e451)

Kemudian .menu p, .contact p adalah selector CSS yang memilih elemen p yang berada di dalam elemen dengan kelas menu dan contact. Text-align untuk mengatur rata teks, disini center atau rata tengah. Max-width untuk menetapkan lebar maksimum <p> sebesar 30rem, margin: auto agar margin otomatis pada sisi kiri dan kanan, font-weight untuk ketebalan huruf sebesar 100, line-weight sebesar 1.6 yang mempengaruhi jarak antar baris dalam teks.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/ed33c406-6e3e-4c42-8a17-6f05ce55b2af)

Kode .menu .row berarti aturan didalamnya berlaku untuk kelas row yang ada di kelas menu. Display flex digunakan agar elemen dapat diatur secara felsibel, flex-wrap memungkinkan elemen dalam row untuk melintas baris jika diperlukan, ketika ruang horizontal tidak mencukupi. Margin-top untuk memberikan jarak di atas elemen sebanyak 5rem, justify-content untuk mengatur elemen secara horizontal agar berada di tengah.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/8bb841ba-6e69-4233-9e55-97af5a70dd15)

.menu .row .menu-card adalah selector CSS yang memilih elemen dengan kelas menu-card yang berada di dalam elemen dengan kelas row, row terdapat dalam kelas menu. Text-align mengatur teks menjadi rata tengah, padding-bottom untuk memberikan jarak di bawah menu-card sebesar 4rem.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/709559c6-f5f7-4b29-9752-630caae6448e)

.menu .row .menu-card img adalah selector CSS yang memilih elemen <img> yang berada di dalam elemen dengan kelas menu-card. Border-radius untuk mengatur sudut setengah dari ukuran elemen, 50% akan membentuk lingkaran, width untuk menetapkan lebar gambar sebesar 20% dari lebar menu-card.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/353dc7e7-9552-4d1c-ac21-7c267eebcf9a)

Kode .menu .row .menu-card .menu-card-title adalah selector CSS yang memilih elemen dengan kelas menu-card-title yang berada di dalam elemen dengan kelas menu-card, margin-top untuk menetapkan margin 1 rem di atas elemen, dan 1 rem di bawah elemen, dengan margin otomatis di sisi kiri dan kanan.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/3951bb36-3549-4827-bc75-848ebed1d62f)

Kode CSS ini adalah bagian dari aturan media query yang berlaku untuk layar dengan lebar maksimum 1366 piksel (pada perangkat seperti laptop). html { font-size: 75%; }: di dalam media query ini, aturan ini mengatur ukuran font pada elemen html menjadi 75% dari ukuran default. Ini bisa digunakan untuk mengatur tata letak dan elemen-elemen pada halaman agar lebih responsif pada layar dengan lebar yang lebih sempit, seperti pada laptop.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/7ac64780-ed71-47bb-9340-e2610d4687ab)

Kode @media (max-width: 768px) di atas adalah bagian dari aturan media query yang berlaku untuk layar dengan lebar maksimum 768 piksel (pada perangkat seperti tablet). html { font-size: 62.5%; }: di dalam media query ini, aturan ini mengatur ukuran font pada elemen html menjadi 62.5% dari ukuran default. Ini sering digunakan untuk mempermudah pengaturan ukuran font pada perangkat dengan layar lebih kecil, seperti tablet. #menu { display: inline-block; }: Aturan ini mengubah tata letak dari elemen dengan id "menu". Elemen ini akan ditampilkan sebagai blok yang mengikuti aliran teks di dalam dokumen.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/e58625d9-c121-40a6-b834-516a01a65524)

.navbar .navbar-nav adalah selector CSS yang memilih elemen degan kelas navbar-nav. Display absolute mengatur elemen untuk memiliki posisi absolut. Ini berarti elemen akan ditempatkan relatif terhadap elemen yang terdekat dengan posisi yang diatur, top 100% untuk memposisikan elemen di bawah elemen induk, right -100% agar elemen ke luar layar sebelah kanan, background-color untuk memeberi latar belakang putih, width untuk lebar dan height untuk tinggi elemen, transition untuk menambahkan transisi selama 0.3 detik pada perubahan propertinya, memberikan efek animasi saat perubahan terjadi.
.navbar .navbar-nav.active adalah selector CSS yang memilih elemen dengan kelas navbar-nav yang juga memiliki kelas active saat elemen tersebut aktif. right: 0 untuk memposisikan elemen tepat di sebelah kanan, menampilkannya di dalam layar.
.navbar .navbar-nav a adalah selector CSS yang memilih elemen a. color untuk mengatur warna teks menjadi warna hitam(--bg), display: block untuk mengatur elemen a untuk ditampilkan sebagai blok, sehingga memiliki lebar penuh dari elemen yang mengandungnya, margin: 1.5rem untuk menambahkan margin 1.5 rem di sekeliling, padding: 0.5rem memberikan ruang dalam elemen a sebesar 0.5 rem di sekeliling teks. font-size untuk mengatur ukuran font menjadi 2 rem.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/8750663b-c162-48a6-9e7c-161727b3ba65)

Kode CSS ini menambahkan efek animasi saat mengarahkan kursor ke link di dalam navigasi. Saat kursor berada di atas link, elemen pseudo ::after dari link tersebut akan mengalami transformasi skala horizontal sehingga terlihat seperti garis bawah yang memanjang ke kanan. Transformasi ini memberikan umpan balik visual kepada pengguna bahwa link tersebut dapat diklik.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/8d810127-8fdc-49be-bf8e-f0ca63cd8578)

Kode .about .row mengizinkan elemen dengan kelas row di dalam elemen about untuk melintas baris jika diperlukan, memastikan responsivitas terhadap berbagai ukuran layar. Selanjutnya, .about .row .about-img IMG menetapkan tinggi gambar pada 24 rem dengan object-fit: cover, memastikan gambar mengisi ruang yang tersedia dengan mempertahankan aspek rasio, dan object-position: center untuk memposisikan gambar di tengah elemen.
.about .row .content menghapus padding pada elemen dengan kelas "content", mungkin untuk menyesuaikan tata letak dengan desain keseluruhan. .about .row .content h3 mengatur margin atas elemen h3 sebesar 1 rem dan ukuran font menjadi 2 rem untuk judul dalam konteks "content". Terakhir, .about .row .content p menetapkan ukuran font elemen p di dalam konteks "content" menjadi 1.6 rem.

![image](https://github.com/22091397037MaharaniSekarHapsari/CoffeeshopWebsite/assets/124477151/5b1d9fe6-7685-4519-88e5-2523c4c51b5c)

Kode CSS di atas mendefinisikan aturan tata letak untuk tampilan pada perangkat seluler dengan lebar layar maksimum 450 piksel. Pertama, aturan media query .@media (max-width: 450px) mengatur ukuran font pada elemen html menjadi 55% dari ukuran default, yang membantu menyesuaikan tata letak untuk layar seluler yang lebih kecil. Selanjutnya, pada bagian .menu, teks akan ditampilkan dalam warna putih. Ini mungkin digunakan untuk memastikan teks pada menu tetap terlihat dengan jelas pada latar belakang yang mungkin gelap.
