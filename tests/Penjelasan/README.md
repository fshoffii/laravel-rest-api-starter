# Module Belajar Rest Api

- **Nama**: Shofi Fitriany Hidayah
- **NIM**: 362558302062
- **Kelas / Prodi**: 2A / D4 Teknologi Rekayasa Perangkat Lunak
- **Mata Kuliah**: Interopabilitas

---

## 1. Ringkasan Aktivitas
Menggunakan Postman sebagai platfrom perangkat lunak mandiri (bisa diinstal di komputer atau diakses lewat web) yang menyediakan berbagai alat (tools) siap pakai. Di gunakannya untuk berinteraksi, menguji, dan mengelola API yang sudah atau sedang dibuat dengan framework tadi. Disini saya menggunakan CRUD (Create, Read/View, Update, dan juga Delete)

## 2. Bukti Tangkapan Uji Coba Postman
[Sertakan minimal 2 screenshot bukti aplikasi profil berjalan di emulator atau HP fisik Anda]
![Screenshot Error Update Task](./Screenshoot/Error%20Ketika%20Update%20Taks.png)
![Screenshot Error Task](./Screenshoot/Error%20Taks.png)
![Screenshot Hapus Task](./Screenshoot/Error%20Taks.png)
![Screenshot Sebelum Hapus Task](./Screenshoot/Sebelum%20Hapus%20Task.png)
![Screenshot Sebelum Update Task](./Screenshoot/Sebelum%20Update%20Task.png)
![Screenshot Sesudah Task](./Screenshoot/Sesudah%20Upload%20Taks.png)
![Screenshot Sesudah Upload Task](./Screenshoot/Sesudah%20Upload%20Taks.png)
![Screenshot Simpan Task](./Screenshoot/Simpan%20Taks.png)


## 3. Kendala yang Dihadapi & Solusinya
- Terjadinya error ketika melakukan pengujian di postman, ada beberapa error http status code yang ada di postman, sebelum itu ada banyak http status code, yaitu:
1. Kelompok 2xx (Success / Berhasil) 
- Artinya permintaan Anda diterima dengan baik oleh server dan diproses tanpa masalah.
- **200 (OK)**: Request berhasil dan server mengembalikan data yang diminta. (Paling sering muncul saat Anda melakukan method GET [1]).
- **201 (Created)**: Request berhasil dan ada data baru yang tercipta di server. (Sering muncul setelah Anda melakukan method POST untuk membuat user baru, produk baru, dll).
- **204 (No Content)**: Request berhasil, tetapi server tidak mengembalikan data apa pun dalam body responnya. (Biasanya muncul setelah Anda berhasil menghapus data via DELETE atau update data via PUT/PATCH).
2. Kelompok 4xx (Client Error / Kesalahan Pengguna) 
- Artinya ada yang salah dengan request yang Anda kirimkan dari Postman (entah salah ketik URL, salah format JSON, atau belum login).
- **400 (Bad Request)**: Server tidak paham dengan request Anda. Biasanya karena ada sintaks error pada JSON yang Anda kirim.
- **401 (Unauthorized)**: Anda belum login atau belum memasukkan token keamanan (API Key/Bearer Token) di tab Authorization.
- **403 (Forbidden)**: Anda sudah login, tetapi akun Anda tidak punya hak akses (izin) untuk membuka halaman atau data tersebut.
- **404 (Not Found)**: Alamat URL API yang Anda ketik di Postman salah atau tidak ditemukan di server.
- **405 (Method Not Allowed)**: Anda salah menggunakan method. Contohnya, sebuah URL seharusnya ditembak menggunakan POST, tetapi Anda menembaknya menggunakan GET.
3. Kelompok 5xx (Server Error / Kesalahan Server) 
- Artinya request dari Postman Anda sudah benar, tetapi sistem atau kode pemrograman di dalam server sedang rusak/eror.
- **500 (Internal Server Error)**: Ada eror atau crash pada kode program di server backend.
- **502 (Bad Gateway) 503 (Service Unavailable)**: Server sedang mati, kelebihan beban (overload), atau sedang dalam perbaikan.
