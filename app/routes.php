<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//llamamos al controlador RESTFUL  Esto enrutara a todos los metodos a la vez



Route::get('/', function()
{	
    return View::make('login');	

});
//login
Route::post('login', 'UserLogin@user');
//logout
Route::get('logout', function()
{
    return Redirect::to('/');
});
// ruta de administracion
Route::get('admin', array('before' => 'auth', function()
{
    return View::make('dashboard.index');	
}
));


//rutas del sistema
Route::controller('package', 'PackageController');
Route::controller('users', 'UsersController');
Route::controller('user/getuser', 'getuserController');

/* crear tablas en laravel a pata
Route::get('createtable', function () 
{
	Schema::create('products', function ($table)
	{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->integer('quantity');
			$table->integer('price');
			$table->timestamps();
	});
});//*/

/* llenar tabla de base de dato a pata 
Route::get('registrar', function()
{

	$product = new Product;
	$product->name = "tv";
	$product->description = "pantalla plana 45°";
	$product->quantity = 5;
	$product->price = 45000;
	// guardamos
	$product->save();
	return "El registro fue agregado.";
});//*/

Route::get('buscar', function () {
	// $product = Product::find(2); //find id
	$product = Product::where('name', '=' ,'Cinta')->get(); // where
	return  'La cantidad del producto es: ' . $product[0]['quantity'];
});

Route::get('update', function() {

	$product = Product::find(2);
	$product->description = "pantalla plana 50°";
	// guardamos
	$product->save();
	return "El registro fue actualizado.";
});

Route::get('delete', function() {

	$product = Product::find(2);
	$product->delete();
	return "El registro fue eliminado.";
});
