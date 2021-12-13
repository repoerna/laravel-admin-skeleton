<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Boilerplate 
---
### Installed Package
|package|usage|documentation|
|---|---|---|
|jetstream|authentication|https://jetstream.laravel.com/2.x/introduction.html|
|jetstrap|jetstream bootstrap|https://github.com/nascent-africa/jetstrap|
|laravel-permission|role and permission|https://spatie.be/docs/laravel-permission/v5/introduction|
|laravel-generator|ui scaffolding|https://infyom.com/open-source/laravelgenerator/docs/8.0/introduction|

---
### Useful Resource
---
### Useful Command
#### Generate UI
```sh
php artisan infyom:scaffold --fromTable --tableName=users --seeder --skip=model User --softDelete --datatables=true --paginate=30 --ignoreFields=password,remember_token,two_factor_recovery_codes,two_factor_secret,current_team_id
```

## How to use

Clone the repository with `git clone`

Copy `.env.example` file to `.env` and edit database credentials there
Run `composer install`

Run `php artisan key:generate`

Run `php artisan migrate --seed` (it has some seeded data for your testing)
That's it: launch the main URL using `php artisan serve`
You can login to adminpanel with default credentials `admin@admin.com - password`