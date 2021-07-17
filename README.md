example:
git clone https://github.com/Bazsmagister/server-fetched-partials.git

cd [into_the_cloned_repo]

composer install

//linux
cp .env.example .env

//windows
copy .env.example .env

edit .env file with database credentials

php artisan key:generate

php artisan migrate

php artisan serve

my source:

https://laracasts.com/series/javascript-techniques-for-server-side-developers/episodes/1

# workflow:

in routes.web:

//
Route::get('/', function () {
// \$users = App\User::inRandomOrder()->limit(5)->get();
return view('sponsorships');
});
//

//
Route::get('/partials/developers', function () {
$users = App\User::inRandomOrder()->limit(5)->get();
return view('\_developers', ['users' => $users]);
});
//

# we need users:

php artisan make:seeder UserSeeder

into the run method :

factory(App\User::class, 10)->create();

In web developer console check XHR , and Response payload. It is html.
