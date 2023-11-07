<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Dokumentasi Instalasi
Instalasi proyek ini dengan menggunakan terminal git bash.
```bash
git clone https://github.com/allfrhmn/prakweb2023_b_213040052_laravel.git project-name
```

Buatlah satu file dengan nama **.env** dan silakan salin semua yang ada di dalam file **.env.example** ke dalam file **.env**. Kemudian, menggunakan terminal git bash untuk generasi kunci baru.

```bash
php artisan key:generate
```

Buatlah satu basis data dan sesuaikan namanya dengan konfigurasi yang ada di file **.env**.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Buatlah **Faker** yang akan digunakan untuk untuk menghasilkan data palsu dalam aplikasi Laravel. Kemudian, aturlah lokalisasi dan menggunakan kode bahasa negara nya adalah _Indonesia_.
```bash
FAKER_LOCALE=id_ID
```

Buatlah pengatur penyimpanan disk yang akan digunakan.
```bash
FILESYSTEM_DISK=public
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

`Terakhir Diedit 07/11/2023`