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

