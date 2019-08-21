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

<b>Configurando database</b>

- config/database
- CREATE DATA BASE agenda;

<b>Criar Migration </b>

- php artisan make:migration create_contatos_table
- O código acima utiliza o comando artisan do Laravel para criar uma migration, ela nada mais é que uma classe que irá tornar possível a manipulação da tabela de alunos que será criada na base de dados, além do comando php artisan make:migration criar_tabela_alunos , ele faz uma chamada para –create=aluno que define o nome da tabela a ser criada na base de dados a partir dessa migration.

<b>Criando Model</b>

- php artisan make:model Contato

<b>Campos que podem ser preenchidos Model Contato</b>

- protected \$fillable = ['saudacao', 'nome', 'telefone', 'email', 'data_nascimento', 'avatar', 'nota'];

<b>Criando as Tabelas no database</b>

- php artisan migrate

<b>Erro de migrate Solucão</b>

- SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `ag_users` add unique `users_email_unique`(`email`))

- Para resolver isso siga os passos abaixo:
  Edite o arquivo app\Providers\AppServiceProvider.php
  Adicione o namespace use Illuminate\Support\Facades\Schema;
  Dentro do método boot adicione Schema::defaultStringLength(191);
  Resultado final do arquivo:

use Illuminate\Support\Facades\Schema;

public function boot()
{
Schema::defaultStringLength(191);
}

<b>Criar Factory Contato</b>

- Pupular a base de dados para testes
- php artisan make:factory ContatoFactory

<b>Executar um factory (sedeer)</b>

- php artisan make:seeder UsersTableSeeder
- php artisan make:seeder ContatosTableSeeder

<b> Atualizar o Composer</b>

- composer dump-autoload

<b>Alterar o DatabaseSeeder</b>

- \$this->call([
  ContatosTableSeeder::class,
  UsersTableSeeder::class,
  ]);

<b>Executar o migrate e Seeder</b>

- php artisan migrate:refresh --seed

<b>Criando as Validações campos Tabela Contatos </b>

- php artisan make:request ContatoRequest
