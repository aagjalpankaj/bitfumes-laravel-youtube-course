## Install and Setup
- `global require laravel/installer`
- `laravel new <project name>`
- `php artisan serve`
- `laravel --version` // Check Laravel Installer version
- `php artisan --version` // Check Laravel Framework version

## Routes and Blade File
- `git init`
- `git remote add origin <github repo http url>`
- https://gist.github.com/sarthaksavvy
- Routes: Any url hit goes through route 
- Blade: Laravel templating engine
- .gitignore
- vendor & composer.json
- .env


## What the heck is MVC?
- Model View Controller
- Model: `app/Models`
- View: `resources/views`
- Controller: `app/Http/Controllers`
- `php artisan`
- `php artisan make:controller UserController`

## Database Connection & Migrations
- `.env` >> Database settings
- Wherever you do changes in .env file you need to restart the server.
- `php artisan migrate`

## Raw SQL Queries
- `DB::insert` // C
- `DB::select` // R
- `DB::update` // U
- `DB::delete` // D

## Eloquent ORM Crud
- `dd()`
- `bcrypt()`
- laravel facade
- `User::all()`
- `$user = new User(); $user->save();`
- `User::where('id', 3)->update()`
- `User::where('id', 3)->delete()`
- Model $hidden fields

## Mass Assignment Security
- `User::create( [ 'name' => 'Pankaj', 'email' => 'a@b.lcl', 'password' => 'pass' ] )`
- [58:07]
- $fillable, $guarded

## Accessor & Mutators
- Getter & setters
- `set<Camelcase fieldname>Attribute`

## Install First Party Package - Laravel UI
- `composer require laravel/ui`
- `php artisan ui:auth`
- `php artisan ui bootstrap|vue|react`


## Blade Template Engine
- `php artisan route:list`
- @yeild
- @section
- @auth
- @extends


## Laravel Configurations
- `config` directory
- Service providers

## All Configurations
- auth.php
- broadcasting.php
- cache.php
- cors.php
- database.php
- filesystems.php
- hashing.php
- logging.php
- mail.php
- services.php
- view.php

## Upload Image for User
- CSRF
- `@csrf`
- `request()->all()`
- `$request->image->store('images')`

## Store User Avatar
- `php artisan migrate:refresh`
- 

## Show User Avatar
- `php artisan storage:link`
- 

## Remove old Image
- 

## Flash session
- 

## Blade include subview
- `@include`
- laravel component
