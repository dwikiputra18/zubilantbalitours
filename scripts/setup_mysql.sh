#!/bin/bash
# Setup MySQL untuk project Zubilant Bali Tours
echo "==> Membuat database zubilantbalitours..."
mysql -e "CREATE DATABASE IF NOT EXISTS zubilantbalitours CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

echo "==> Mengubah auth method root ke mysql_native_password (tanpa password)..."
mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY ''; FLUSH PRIVILEGES;"

echo "==> Verifikasi..."
mysql -u root -e "SHOW DATABASES LIKE 'zubilantbalitours';"

echo "==> Selesai! Sekarang coba php artisan migrate"
