<?php

Route::get('/','CalcController@welcome');

Route::get('/search', 'CalcController@search');

Route::get('/add','CalcController@add');
Route::post('/add', 'CalcController@storeAdd');

Route::get('/edit', 'CalcController@edit');
Route::post('/edit', 'CalcController@storeEdit');

Route::get('/delete', 'CalcController@delete');
Route::post('/delete', 'CalcController@storeDelete');

if(config('app.env') == 'local') {
  Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

// Route::get('/debug', function() {
//
// 	echo '<pre>';
//
// 	echo '<h1>Environment</h1>';
// 	echo App::environment().'</h1>';
//
// 	echo '<h1>Debugging?</h1>';
// 	if(config('app.debug')) echo "Yes"; else echo "No";
//
// 	echo '<h1>Database Config</h1>';
//     	echo 'DB defaultStringLength: '.Illuminate\Database\Schema\Builder::$defaultStringLength;
//     	/*
// 	The following commented out line will print your MySQL credentials.
// 	Uncomment this line only if you're facing difficulties connecting to the database and you
//         need to confirm your credentials.
//         When you're done debugging, comment it back out so you don't accidentally leave it
//         running on your production server, making your credentials public.
//         */
// 	//print_r(config('database.connections.mysql'));
//
// 	echo '<h1>Test Database Connection</h1>';
// 	try {
// 		$results = DB::select('SHOW DATABASES;');
// 		echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
// 		echo "<br><br>Your Databases:<br><br>";
// 		print_r($results);
// 	}
// 	catch (Exception $e) {
// 		echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
// 	}
//
// 	echo '</pre>';
//
// });

if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP database a4');
        DB::statement('CREATE database a4');

        return 'Dropped a4; created a4.';
    });

};
