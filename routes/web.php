<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
|--------------------------------------------------------------------------
| Checklist turned into home page after login
|--------------------------------------------------------------------------
|

*/

Route::get('/', [
		 'uses' => 'CheckListController@getchecklist',
		 'as' => '/',
		'middleware' => 'auth',
		 ]);

/*
|--------------------------------------------------------------------------
| Routes for pictures in form of Flipbook
|--------------------------------------------------------------------------
|

*/

Route::get('/flipbook', 'FlipBookController@index')->name('flipbook.index')->middleware('auth');
Route::get('/flipbook/create', 'FlipBookController@create')->name('flipbook.create')->middleware('auth');
Route::post('flipbook', 'FlipBookController@store')->name('flipbook.store')->middleware('auth');
//->name('books.index');

Route::get('/flipbook', 'FlipBookController@index')->name('rudra.flipbook.index')->middleware('auth');
Route::get('/flipbook/{id}', 'FlipBookController@show')->name('flipbook.show')->middleware('auth');


//Route::get('/flipbook/confirm-delete/{id}', 'FlipBookController@getConfirmDelete');
Route::get('/flipbook/delete/{id}', 'FlipBookController@getDelete')->name('flipbook.delete')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Routes for authorization
|--------------------------------------------------------------------------
|

*/



Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');





/*
|--------------------------------------------------------------------------
| Routes to update contacts
|--------------------------------------------------------------------------
|

*/

Route::resource('contacts', 'ContactController');


/*
|--------------------------------------------------------------------------
| Routes to update inventory serial numbers
|--------------------------------------------------------------------------
|

*/
Route::resource('inventory', 'InventoryController');

/*
|--------------------------------------------------------------------------
| Route to testlogin status
|--------------------------------------------------------------------------
|
*/




Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user)
        dump($user->toArray());
    else
        dump('You are not logged in.');

    return;
});

/*
|--------------------------------------------------------------------------
| Route to Debug
|--------------------------------------------------------------------------
|

*/

Route::get('/debug', function() {

echo '<pre>';
echo '<h1>Environment</h1>';
echo App::environment().'</h1>';
echo '<h1>Debugging?</h1>';
if(config('app.debug')) echo "Yes"; else echo "No";
echo '<h1>Database Config</h1>';
/*
The following line will output your MySQL credentials.
Uncomment it only if you're having a hard time connecting to the database and y
ou
need to confirm your credentials.
When you're done debugging, comment it back out so you don't accidentally leave
it
running on your live server, making your credentials public.
*/
//print_r(config('database.connections.mysql'));
echo '<h1>Test Database Connection</h1>';
try {
$results = DB::select('SHOW DATABASES;');
echo '<strong style="background-color:green; padding:5px;">Connection confi
rmed</strong>';
echo "<br><br>Your Databases:<br><br>";
print_r($results);
}
catch (Exception $e) {
echo '<strong style="background-color:crimson; padding:5px;">Caught excepti
on: ', $e->getMessage(), "</strong>\n";
}
echo '</pre>';
});



Route::get('/home', 'HomeController@index');
