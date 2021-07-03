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
- `DB::insert`
- `DB::select`
- `DB::update`
- `DB::delete`


