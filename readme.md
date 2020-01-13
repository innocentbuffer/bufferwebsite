## Buffer Media Site

Buffer media site is develop with Laravel framework and some Node package manager(npm). Below are the informations you need to get acquinted with this project:

- Laravel Version [5.8.*].
- npm packages (package.json)
- git

## After Scaffolding
Below are the things done after scaffolding the framework.

- Run "git init"
- Run "npm install"
- Run "php artisan make:auth"
- import the Schema facade in the AppServiceProvider class, and place "Schema::defaultStringLength(191)" in the  boot method
- Run "php artisan migrate"
- Run "php artisan storage:link"


