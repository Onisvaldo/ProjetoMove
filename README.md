<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




https://dontpad.com/php/laravel

_____________________________________________________

https://blog.infnet.com.br/back-end/como-funciona-laravel/


Leitura do artigo
______________________________________________________

Framework - melhores práticas - e coloco dentro de uma plataforma	

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

O que é Laravel?
Assim como todo framework, o Laravel foi desenvolvido para oferecer um conjunto de funcionalidades, ferramentas e recursos para facilitar e agilizar tarefas comuns do desenvolvimento. Isso inclui mecanismos como a criação de sessões, gerenciamento de cache, localização e autenticação.

O Laravel é um framework especialmente desenvolvido para PHP, uma das linguagens de programação mais utilizadas no mundo – em especial no desenvolvimento web.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


O que é Model–View–Presenter (MVP) ?
Model–View–Presenter (MVP) é uma variação do padrão Model–View–Controller (MVC) que se concentra na construção de interfaces de usuário. Um exemplo de aplicação do padrão MVP seria em um aplicativo Android, na tela de login: Model (Modelo) – contém a lógica para validar as credenciais do usuário.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


O que é API ?

é um catálogo de serviços que é disponibilizado a um cliente.

o que é REST - defina restful e restless

Estado representacional - ou seja, grava ou nao grava no banco.
Ex. CEP - get - consulta - restless
Atualização de endereço - restful - grava no banco de dados

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Conceito de monolítico versus microsserviços  

Microsserviços - APIs
Monoçlítico - Interfaçe acoplada

diferencie backend de frontend 



Backend - Provê acesso a API - Catálogo de serviços
Frontend - Consumir Serviçoc - Tem interface gráfica

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Dentro do  MVC (Model-View-Controller) tem um padrão de designer de projeto chamado facade, explique o que ele faz?

padrões de designer - Melhores práticas que deram certo e podem ser reutilizadas

facade, explique o que ele faz?

padrões de designer - melhores práticas que deram certo e podem ser reutilizadas

Facade - fachada - interface única que facilita a implementação de um sistema

 
Composer - defina e faça a instalação 
___________________________________


	
https://getcomposer.org/download/


Atualize ou recuperar a vendor

______________________________________

composer update



primeiro passo 

criacao das tables
***************************************
php artisan migrate

criação de uma migration
***************************************
php artisan make:model Produtos -m




############################
colocar sem a pasta vendor - moodle ou para vcs terem backup do projeto
##############################

para retornar a vendor:

composer update        

