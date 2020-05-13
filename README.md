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
    return view('_developers', ['users' => $users]);
});
//

# we need users:

php artisan make:seeder UserSeeder

into the run method :

factory(App\User::class, 10)->create();

In web developer console check XHR , and Response payload. It is html.
