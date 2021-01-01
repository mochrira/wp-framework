# WP Framework

WP Framework adalah sebuah framework yang dibuat untuk mempermudah proses pengembangan tema wordpress. 

## Instalasi wp-framework

Terlebih dahulu anda harus menginstall [composer](https://getcomposer.org/). Buat direktori project baru anda, lalu jalankan perintah berikut

```
$ composer init
```

Tambahkan baris berikut sebelum require pada `composer.json` anda.

```
{
    ...
    "minimum-stability": "dev",
    "config": {
        "vendor-dir": "./src/vendor/"
    },
    "repositories": {
        "mochrira/wp-framework": {
            "type": "vcs",
            "url": "https://repository.wajek.id/mochrira/wp-framework.git"
        }
    },
    "require": {
        ...
    }
    ...
}
```

Lalu jalankan perintah berikut

```
composer require mochrira/wp-framework
```

## Instalasi wp-sass

Framework ini menggunakan nodejs dan gulp untuk change detection dan compile sass ke css. Terlebih dahulu install [nodejs]('https://nodejs.org'), lalu jalankan perintah berikut:

```
$ npm install -g gulp
$ npm install git+https://repository.wajek.id/mochrira/wp-sass.git
```

Untuk memulai, buat folder `src` lalu buat file gulpfile.js dengan konten sebagai berikut:

```
require('wp-sass').setup('./src', '<<absolute path for wp-content/themes>>');
```

## Memulai Coding

Buat file direktori kosong bernama `plugins` di dalam direktori `src`. Selanjutnya, buat file `functions.php` di dalam direktori `src` dengan konten sebagai berikut:

```
<?php 

require 'vendor/autoload.php';

WpFramework\Loader::setup([
    'pluginDir' => __DIR__.'/plugins'
]);

?>
```

Sebagai catatan, wordpress membutuhkan minimal `style.css` dan `index.php` untuk memuat tema anda. Anda bisa menggunakan scss, yang akan dicompile oleh paket `wp-sass` menjadi css.

Untuk itu, kita memerlukan `style.scss` sesuai [standar](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/) wordpress dan file kosong `index.php` pada direktori `src`. Berikut adalah contoh file `style.scss`.

```
/*
Theme Name: My Custom Wordpress Theme
Theme URI: https://wordpress.org/themes/twentytwenty/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Our Custom Wordpress Theme
Tags: blog, one-column
Version: 1.0
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: custom-wordpress-theme
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
```

