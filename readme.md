<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<br>

# Getting Started Laravel

For help getting started with Flutter, view our online
[documentation](https://laravel.com/docs/5.8).

## Resume

<b>Criando o projeto</b>

- composer create-project laravel/laravel agenda_laravel --prefer-dist

<b>Levantar um Servidor local http://localhost:8000 </b>

- php artisan serve

<b>Criar autenticacão automaticamente</b>

- php artisan make:auth

<b>Alterar Rota para login</b>

- app/Http/Controllers/Auth
- router/ -> Route::get('/', 'HomeController@index')->name('home');
