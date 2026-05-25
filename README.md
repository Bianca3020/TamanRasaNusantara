# 🍛 Taman Rasa Nusantara - Website Resep Makanan Tradisional Indonesia

Taman Rasa Nusantara adalah website resep makanan khas Indonesia berbasis Laravel yang dirancang untuk memperkenalkan kekayaan kuliner Nusantara secara modern, interaktif, dan responsif.  
Website ini memungkinkan pengguna menjelajahi berbagai resep tradisional berdasarkan kategori daerah, melihat detail resep secara cepat melalui modal interaktif, serta menyediakan dashboard admin untuk mengelola data resep secara lengkap.

---

# ✨ Fitur Utama Website

## 👨‍🍳 Katalog Resep Nusantara
Pengguna dapat melihat berbagai resep makanan tradisional Indonesia dengan tampilan card modern dan responsive.

## 🔍 Live Search Resep
Pencarian resep dilakukan secara real-time menggunakan AJAX tanpa reload halaman.

## 🏷️ Filter Kategori
Resep dapat difilter berdasarkan kategori daerah/kuliner seperti:
- Jawa Barat
- Jawa Tengah
- Jawa Timur
- Sumatera
- dan lainnya

Kategori otomatis diurutkan secara alfabetis (A-Z).

## ⚡ Quick View / Modal Detail
Pengguna dapat melihat detail resep secara instan melalui modal popup tanpa berpindah halaman.

Isi detail resep:
- Gambar makanan
- Deskripsi
- Bahan-bahan
- Langkah memasak bertahap

## 🔐 Sistem Admin Sederhana
Admin memiliki akses khusus untuk:
- Menambahkan resep
- Mengedit resep
- Menghapus resep

## 🖼️ Upload Gambar Resep
Admin dapat mengupload gambar makanan dengan validasi file:
- JPG
- JPEG
- PNG
- WEBP

## 📱 Responsive Design
Website sudah dioptimalkan untuk:
- Desktop
- Tablet
- Mobile Phone

Menggunakan Bootstrap 5 dengan desain modern dan clean UI.

## 🎨 Tampilan Modern
Website menggunakan:
- Bootstrap 5
- Google Fonts (Poppins)
- Hover animation
- Smooth transition
- Modal interaktif

---

# 🛠️ Teknologi yang Digunakan

- Laravel 12
- PHP 8.2
- MySQL
- Bootstrap 5
- jQuery AJAX
- HTML5
- CSS3

---

# ⚙️ Cara Menjalankan Project

## 1. Clone Repository

```bash
git clone https://github.com/Bianca3020/TamanRasaNusantara.git
```

## 2. Masuk ke Folder Project

```bash
cd TamanRasaNusantara
```

## 3. Install Dependency Laravel

```bash
composer install
```

## 4. Copy File .env

```bash
cp .env.example .env
```

## 5. Generate App Key

```bash
php artisan key:generate
```

## 6. Atur Database pada File .env

Contoh konfigurasi:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=taman_rasa_nusantara
DB_USERNAME=root
DB_PASSWORD=
```

## 7. Jalankan Migration

```bash
php artisan migrate
```

## 8. Jalankan Laravel Server

```bash
php artisan serve
```

## 9. Buka Website

```bash
http://127.0.0.1:8000
```

---

# 🔑 Sistem Login Admin

Halaman login admin:

```bash
http://127.0.0.1:8000/admin/login
```

Admin dapat:
- Menambah resep
- Mengedit resep
- Menghapus resep
- Mengelola data kuliner

---

# 📂 Struktur Fitur Resep

Setiap resep memiliki data:
- Nama resep
- Deskripsi
- Kategori
- Bahan-bahan
- Langkah memasak
- Gambar makanan

---

# 📸 Fitur Tampilan Website

# 🏠 Homepage
<p align="center"> <img src="screenshots/homepage.png" width="700"> </p>
# 🍽️ Daftar Resep
<p align="center"> <img src="screenshots/recipes-list.png" width="700"> </p>
# 🔍 Search & Filter Kategori
<p align="center"> <img src="screenshots/search-filter.png" width="700"> </p>
# ⚡ Quick View / Detail Resep (Modal)
<p align="center"> <img src="screenshots/quick-view.png" width="700"> </p>
# 🔐 Login Admin
<p align="center"> <img src="screenshots/login-admin.png" width="700"> </p>
# 🛠️ Admin Dashboard
<p align="center"> <img src="screenshots/admin-dashboard.png" width="700"> </p>
# 🏠 Homepage Admin
<p align="center"> <img src="screenshots/homepage-admin.png" width="700"> </p>
# ➕ Tambah Resep (Admin)
<p align="center"> <img src="screenshots/add-recipe.png" width="700"> </p>
# ✏️ Edit Resep (Admin)
<p align="center"> <img src="screenshots/edit-recipe.png" width="700"> </p>
# 🗑️ Delete Modal
<p align="center"> <img src="screenshots/delete-modal.png" width="700"> </p>
# 📱 Mobile View (Responsive)
<p align="center"> <img src="screenshots/mobile-view.png" width="350"> </p>
---

# 🗄️ Struktur Database

## Tabel recipes

| Field | Type |
|---|---|
| id | bigint |
| nama | string |
| deskripsi | text |
| bahan | text |
| langkah | text |
| kategori | string |
| gambar | string |
| created_at | timestamp |
| updated_at | timestamp |

---

# 💡 Keunggulan Website

- UI modern dan clean
- Responsive mobile friendly
- AJAX live search
- Quick view recipe
- CRUD admin lengkap
- Desain interaktif
- Mudah dikembangkan

---

# 👩‍💻 Developer

Developed by Bianca Putri 🌷

Project Website Resep Tradisional Indonesia  
"Taman Rasa Nusantara"
