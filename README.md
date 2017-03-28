# Belajar Membuat RESTful API dengan PHP

RESTful API sederhana menggunakan PHP, konsep MVC & PSR-4 Autoloading Standard,

masih tahap pengembangan, belum ada Authentication, API Key, Hash Token, dll :D

## fitur yang sudah ada
1. Routing
2. Request Method Handler (GET, POST, PUT, DELETE)
3. Http Response Code Handler
4. JSON Output (View)
5. PDO Integration (Model)
6. PSR-4 Autoloading Standard (Controller)

## Contoh penggunaan API

test menggunakan Postman [https://www.getpostman.com/]

#### Semua Artikel
Endpoint = http://localhost/api/public/artikel

Method = GET

#### 1 Artikel
Endpoint = http://localhost/api/public/artikel/{id}

Method = GET

#### Tambah Artikel Baru
Endpoint = http://localhost/api/public/artikel

Method = POST

#### Ubah Artikel
Endpoint = http://localhost/api/public/artikel/{id}

Method = PUT

#### Hapus Artikel
Endpoint = http://localhost/api/public/artikel/{id}

Method = DELETE


### WebHade Creative Free Course

Pelatihan Membuat Website Gratis

informasi lengkap kunjungi [ http://webhade.id/freecourse/ ]