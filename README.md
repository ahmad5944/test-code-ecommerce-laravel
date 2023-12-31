<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Mad Mart Information
- **[Laravel Version 8.0](https://laravel.com/docs/8.x)**
- **[Php ^7.3](https://www.php.net/docs.php)**
- **Mysql**
- **[Jquery 3.7.0](https://jquery.com/)**
- **[Datatable](https://datatables.net/)**
- **[Bootstrap 5](https://getbootstrap.com/docs/5.0/getting-started/introduction/)**
- **[Argon Template](https://www.creative-tim.com/product/argon-dashboard)**
- **[Karma Template](https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/)**

### Step by step
- **Run In Terminal**
```bash
    composer require laravel/fortify
    composer Install
```
- **Change Database Name In .env "DB_DATABASE=db_name**
- **Add In .env**
```bash
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.gmail.com
  MAIL_PORT=587
  MAIL_USERNAME=ahmaddaffa1899@gmail.com
  MAIL_PASSWORD=bzmylalhmwhdsjaq
  MAIL_ENCRYPTION=tls
  MAIL_FROM_ADDRESS="ahmaddaffa1899@gmail.com"
  MAIL_FROM_NAME="Mad Mart"
```
- **Run In Terminal**
```bash
    php artisan key:generate
    php artisan optimize
    php artisan migrate
    php artisan db:seed PermissionSeeder
    php artisan db:seed RoleSeeder
    php artisan db:seed ModelHasRoleSeeder
    php artisan db:seed RoleHasPermissionSeeder
    php artisan db:seed UserSeeder
    php artisan storage:link
    php artisan serve
```
## Laravel Package You Have Install
- **composer require realrashid/sweet-alert**
- **composer require laravelcollective/html**
- **composer require maatwebsite/excel**
- **composer require laravel/fortify**
- **composer require laravel/ui**

## Note
- **Database Documentation In public/assets/Mad Mart Database Documentation.pdf**
- **Image In public/assets/product And public/assets/users**
- **Database In database/test.sql**
- **Check email after register**
- **If you find an error when **php artisan optimize** just ignore it**
