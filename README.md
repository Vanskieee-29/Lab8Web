# Lab8Web

# index.php
Pada index.php ini menampilkan halaman utama yang berjudul Data Barang. Halaman ini berfungsi untuk melihat daftar semua barang yang tersimpan dalam database. Tujuannya untuk menampilkan ringkasan data produk (Barang) yang ada.

Isi/Komponen Utama:
- Judul: "Data Barang".
- Tautan: Tautan + Tambah Barang di atas tabel, yang digunakan untuk mengarahkan pengguna ke halaman penambahan barang baru.
- Tabel Data: Menampilkan daftar barang dengan kolom-kolom berikut:
- Gambar: Menampilkan gambar produk (dengan teks alternatif seperti "HP Samsung Android").
- Nama Barang: Nama lengkap produk.
- Kategori: Kategori produk (contoh: Elektronik).
- Harga Jual: Harga jual produk.
- Harga Beli: Harga beli produk (modal).
- Stok: Jumlah stok barang yang tersedia.
- Aksi: Berisi tautan Ubah dan Hapus untuk setiap baris barang, yang berfungsi untuk memodifikasi atau menghapus data barang tertentu.
<img width="1920" height="1200" alt="index" src="https://github.com/user-attachments/assets/258119d9-626c-4294-9b01-addb7fcc42b6" />

# tambah.php
Pada tambah.php ini menampilkan formulir kosong yang digunakan untuk memasukkan data barang baru ke dalam database. Tujuannya untuk memasukkan data untuk barang baru ke dalam sistem.

Isi/Komponen Utama:
- Judul: "Tambah Barang".
- Formulir Input: Kolom-kolom input yang masih kosong (kecuali Kategori yang mungkin memiliki nilai default atau telah dipilih):
1. Nama Barang
2. Kategori (saat ini terpilih Komputer dalam dropdown).
3. Harga Jual
4. Harga Beli
5. Stok
6. File Gambar (tombol Choose File untuk mengunggah gambar produk).
- Tombol: Tombol Simpan untuk menyimpan data barang baru yang telah diisi.
<img width="1920" height="1200" alt="tambah" src="https://github.com/user-attachments/assets/46d33c73-cac7-4748-8377-506c7cb4278b" />

# ubah.php
Pada ubah.php ini menampilkan formulir yang digunakan untuk memperbarui atau mengedit detail informasi dari barang yang sudah ada. Tujuannya untuk mengedit data barang yang dipilih (dalam contoh ini, "HP Samsung Android").

Isi/Komponen Utama:
- Judul: "Ubah Barang".
- Formulir Input: Kolom-kolom input yang sudah terisi dengan data barang saat ini:
- Nama Barang (HP Samsung Android)
- Kategori (terpilih Elektronik)
- Harga Jual (2400000)
- Harga Beli (2000000)
- Stok (5)
- File Gambar (tombol Choose File untuk mengganti gambar jika diperlukan).
- Tombol: Tombol Simpan untuk menyimpan perubahan yang telah dilakukan pada data barang.
<img width="1920" height="1200" alt="ubah" src="https://github.com/user-attachments/assets/0a8ce24e-ca20-4501-acd5-35fb644a622a" />

# hapus.php
Gambar ini menampilkan pop-up dialog konfirmasi saat pengguna mencoba menghapus salah satu barang dari halaman Data Barang. Tujuan: Meminta konfirmasi dari pengguna sebelum data barang dihapus secara permanen dari database.

Isi/Komponen Utama:
- Dialog Pop-up: Muncul di atas halaman Data Barang.
- Pesan Konfirmasi: Berisi pertanyaan: "localhost says Yakin ingin menghapus?"
- Tombol:
- OK: Untuk melanjutkan proses penghapusan data.
- Cancel: Untuk membatalkan penghapusan dan kembali ke halaman Data Barang
<img width="1920" height="1200" alt="hapus" src="https://github.com/user-attachments/assets/0e25bbff-633d-46d0-b3f5-98bf565dfa76" />
