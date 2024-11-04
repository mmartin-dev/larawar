<?php

use App\Http\Controllers\CuriosidadesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsController;
use App\Models\Computer;

Route::get('/', function () {
    return view ('Bienvenido a esta pagina');
});

Route::get('/biografia', function () {
    return view ('biografia');
});

//Route::get('/estadisticas', function () {
    //return view ('estadisticas');
//});

Route::get('/logros', function () {
    return view ('logros');
});

//Route::get('/curiosidades', function () {
    //return view ('curiosidades');
//});


Route::get('/statscontroller', [StatsController::class, 'index']);
Route::get('/curiosidadescontroller', [CuriosidadesController::class, 'index']);

Route::get('/insertarvalor', function () {
    
    $computer = new Computer;
    $computer->model='Legion';
    $computer->mark='Lenovo';
    $computer->size=16;
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->save();

    return $computer;
});

Route::get('/insertarvalor', function () {
    
    $computer = Computer::find(1);

//EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
return $computer->published_at->format('d-m-Y');
//EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
return $computer->published_at->diffForHumans();
});

    Route::get('/insertarvalor', function () {

        //se aplica filtro WHERE y se establece la columna y valor a encontrar
        //la sentencia devuelve el primer resultado que encuentre (FIRST)
        $computer = Computer::where('model','Envy')->first();
        //como ya se tiene "seleccionado" un registro podemos actualizar el valor
        //de la columna "model" y posteriormente guardarlo en la base de datos
        $computer->model = 'Envy 15';
        $computer->save();
        return $computer;
    
    });


    Route::get('/insertarvalor', function () {

        $computer = Computer::all();
        return $computer;
});  

Route::get('/insertarvalor', function () {

    $computer = Computer::where('id','>=',2)->get();
    return $computer;
    
    // También se puede ordenar los resultados con la sentencia ORDER BY para
    // que los resultados obtenidos esten en un determinado orden
    
    $computer = Computer::where('id','>=',2)->orderBy('id','desc')->get();
    return $computer;
    
    // Las columnas que despliega el resultado puede ser personalizado
    // esto es que se pueden establecer las columnas que se tendrían como
    // resultado
    
    $computer = Computer::where('id','>=',2)
						    ->select('id','model')
						    ->orderBy('id','desc')
						    ->get();
    return $computer;
    
});

Route::get('/insertarvalor', function () {

    $computer = Computer::find(1);
    $computer->delete();
 
      // el método delete borrará de la tabla el registro seleccionado
     
 });

 Route::get('/insertarvalor', function () {

    $computer = Computer::find(1);
    $computer->delete();
 
      // el método delete borrará de la tabla el registro seleccionado
     
 });