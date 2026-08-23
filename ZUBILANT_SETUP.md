# Zubilant Bali Tours

## URL

- Website: http://localhost:8003/
- Admin panel: http://localhost:8003/zubilantbalitoursadmin

## Admin Login

- Email: `admin@zubilantbalitours.com`
- Password awal: `zubilant2026`

> Ganti password awal setelah login.

## Database

Aplikasi lokal menggunakan SQLite:

```text
database/zubilantbalitours.sqlite
```

Database telah dibuat menggunakan seluruh migration Laravel dan site `Zubilant Bali Tours` telah diseed dengan site ID `4`.

## Menjalankan Aplikasi

```bash
cd /home/dwiki/Documents/website/zubilantbalitours
php artisan serve --host=127.0.0.1 --port=8003
```

## Seeder

Untuk membuat atau memperbarui akun admin dan data site:

```bash
php artisan db:seed --force
```

## Import & Export Tour Packages

Di panel admin, buka **Tour Packages** lalu gunakan tombol **Import** atau **Export**.
Export menghasilkan file CSV yang dapat diimpor ke website lain dengan struktur yang sama.

- `slug` digunakan sebagai kunci update; slug yang sudah ada akan diperbarui, slug baru akan dibuat.
- `category_slug` dapat berisi slug atau nama kategori yang sudah ada.
- `thumbnail` berisi path media; file gambar tidak ikut dikirim dalam CSV.
- `site_id` selalu diset ke site utama saat import.
- Import dan export berjalan melalui queue, jadi jalankan worker di environment lokal:

```bash
php artisan queue:work
```

## Validasi

- Frontend build berhasil.
- PHP tidak memiliki syntax error.
- 64 route Laravel berhasil terdaftar.
- Halaman utama merespons HTTP `200`.
