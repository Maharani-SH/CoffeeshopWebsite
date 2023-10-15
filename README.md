# CoffeeshopWebsite

Spesifikasi Kebutuhan Perangkat Lunak
Untuk
Website E-Commerce 
Coffee Shop 

Versi 1.0 Disetujui


Disusun Oleh : Intan Rachmalia Dewi (22091397021) 
Frida Nur Cahyani (22091397036) 
Maharani Sekar Hapsari (22091397037)

D4 Manajemen Informatika
Fakultas Vokasi 
Universitas Negeri Surabaya
2023 
Daftar Isi
1.	Pengantar	1
1.1	Tujuan	1
1.2	Konvensi Dokumen	1
1.3	Audiens Yang Dituju	1
1.4	Lingkup Produk	2
1.5	Referensi	2
2.	Deskripsi Keseluruhan	3
2.1	Perspektif Produk	3
2.2	Fungsi Produk	3
2.3	Kelas dan Karakteristik Pengguna	3
2.4	Lingkungan Pengembangan	4
2.5	Kendala Desain dan Implementasi	4
2.6	Dokumentasi Pengguna	4
2.7	Asumsi dan Dependensi	5
3.	Persyaratan Antarmuka	6
3.1	Antarmuka Pengguna	6
3.2	Antarmuka Perangkat Keras	6
3.3	Antarmuka Perangkat Lunak	7
3.4	Antarmuka Komunikasi	11
4.	Fitur Sistem	11
4.1	Deskripsi dan Prioritas	11
4.2	Fitur Sistem	11
4.3	Persyaratan Fungsional	12
5.	Persyaratan Fungsional Lainnya	12
5.1	Persyaratan Performa	12
5.2	Persyaratan Keamanan Pengguna	12
5.3	Persyaratan Keamanan Website	13
5.4	Atribut Kualitas Perangkat Lunak	13
5.5	Proses Bisnis	14
6.	Persyaratan Lainnya	14

 
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
●	Tujuan Penulisan Dokumen
●	Konvensi Dokumen
●	Pembaca yang Dituju
●	Lingkup Produk
●	Referensi 
2.	Deskripsi umum perangkat lunak yang berisi penjelasan perangkat lunak secara umum. Dijelaskan melalui deskripsi umum sistem, fungsi produk, karakteristik pengguna, batasan, lingkungan operasi.
3.	Kebutuhan Antarmuka Eksternal merincikan deskripsi masukan dan keluaran perangkat
lunak yang dispesifikasikan. Ada berbagai macam antarmuka eksternal, antara lain : antarmuka pengguna, antarmuka perangkat keras, antarmuka perangkat keras, antarmuka komunikasi.
4.	Fungsi Produk berisi fungsi utama dari perangkat lunak.
5.	Kebutuhan Non Fungsional berisi bagian yang menspesifikasikan ukuran kuantitatif yang harus dipenuhi perangkat lunak


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
 
B. Tampilan About Us

About Us ini menampilkan informasi mengenai alasan memilih kedai Kopi Asmara.
 
C. Tampilan Our Menu

Pada tampilan Our Menu, terdapat daftar menu yang dijual di kedai Kopi Asmara dengan menampilkan gambar, nama produk, dan juga harga. 

D. Tampilan Contact

Untuk informasi lebih lanjut, terdapat Contact yang dapat dihubungi oleh pembeli apabila mempunyai beberapa pertanyaan. Disini juga terdapat peta yang menampilkan alamat dari kedai Kopi Asmara.
 
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
