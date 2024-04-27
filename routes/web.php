<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticiascedeitController;
use App\Http\Controllers\NoticiascetfocController;
use App\Http\Controllers\NoticiasimpactoController;
use App\Http\Controllers\InfocetfocController;
use App\Http\Controllers\InfoimpactoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', 'AdminController@index')->name('index');
/* Route::get('/login', [SessionsController::class, 'login'])
    ->middleware('auth')
    ->name('Admin.index'); */


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'HomeController@inicio')->name('inicio');

//Rutas para Quienes Somos
Route::get('/quienes-somos', 'SomosController@QuienesSomos')->name('Institucion');
Route::get('/Cetfoc', 'SomosController@Cetfoc')->name('CETFOC');
Route::get('/Impacto', 'SomosController@Impacto')->name('IMPACTO');

//Rutas Conocenos de CETFOC, IMPACTO Y CEDEIT
Route::get('/conocenos_cetfoc', 'SomosController@Cetfoc1')->name('conocenos_cetfoc');
Route::get('/conocenos_impacto', 'SomosController@Impacto1')->name('conocenos_impacto');
Route::get('/conocenos_cedeit', 'SomosController@Cedeit')->name('conocenos_cedeit');

//Rutas para Programas
Route::get('/programas', 'ProgramasController@Programas')->name('programas');
Route::get('/postgrado', 'ProgramasController@Ibero')->name('postgrado');
Route::get('/tecnico-laboral', 'ProgramasController@Tecnico_laboral')->name('tecnicolaboral_cetfoc');
Route::get('/tecnico-laboral2', 'ProgramasController@Tecnico_laboral2')->name('tecnicolaboral_impacto');
Route::get('/formacion-continua', 'ProgramasController@Formacion_continua')->name('formacion_continua');

//Rutas para Informacion de cada Programa
Route::get('/infoibero', 'InfocedeitController@Infoibero')->name('infoibero');
Route::get('/infoimpacto/programa{id}', 'ProimpactController@Infoimapacto')->name('proimpacto');
Route::get('/infocetfoc/programa{id}', 'ProcetController@Infocetfoc')->name('procet');
Route::get('/infomagda/programa{id}', 'PromagdalenaController@Infomagda')->name('infomagda2');

Route::get('/infocetfoc', 'InfocetfocController@Infocetfoc')->name('infocetfoc');
Route::post('/insertar','InfocetfocController@store')->name('insertar');
Route::get('/infoimpacto', 'InfoimpactoController@Infoimpacto')->name('infoimpacto');
Route::post('/insertar2','InfoimpactoController@store')->name('insertar2');

//Ruta para Magdalena Preinscripcion
Route::get('/magdalena', 'InfomagdaController@Infomagda')->name('infomagda');
Route::post('/infomagda', 'InfomagdaController@store')->name('insertarmag');
Route::get('/pregrado', 'InfomagdaController@Magda')->name('pregrado');

//Ruta para Magdalena, Ibero Matricula
Route::post('/Matrimagdalena', 'MatrimagdalController@store')->name('Matrimagda');
Route::post('/Matribero', 'MatriberoController@store')->name('Matribero');

//Ruta para Iberoamericana Preinscripcion
Route::get('/iberoamericana', 'InfoiberoController@Infoibero')->name('infoibero');
Route::post('/infoibero', 'InfoiberoController@store')->name('insertaribe');
Route::get('/pregrado1', 'InfoiberoController@Ibero')->name('pregrado1');
Route::get('/infoibero/programa{id}', 'ProiberoController@Infoibero')->name('infoibero2');

//Ruta Noticias Cedeit, Cetfoc, Impacto

//cedeit
Route::get('/Noticias/cedeit', 'NoticiascedeitController@index')->name('noticiascedeit');
Route::get('/Noticias/cedeit1', 'NoticiascedeitController@Noticias')->name('noticedeit');
Route::get('/Noticias/cedeit+/{id}', 'NoticiascedeitController@Vermas')->name('noticedeit+');
Route::get('/quienes-somos/app', 'NoticiascedeitController@index')->name('noticias');

//cetfoc
Route::get('/Noticias/cetfoc', 'NoticiascetfocController@index')->name('noticiascetfoc');
Route::get('/Noticias/cetfoc1', 'NoticiascetfocController@Noticias')->name('noticet');
Route::get('/Noticias/cetfoc1+{id}', 'NoticiascetfocController@Vermas')->name('noticet+');
Route::get('/quienes-somos/cetfoc', 'NoticiascetfocController@index')->name('noticias');

//impacto
Route::get('/Noticias/impacto', 'NoticiasimpactoController@index')->name('noticiasimpacto');
Route::get('/Noticias/impacto1', 'NoticiasimpactoController@Noticias')->name('noticmpacto');
Route::get('/Noticias/impacto1+{id}', 'NoticiasimpactoController@Vermas')->name('noticmpac+');
Route::get('/quienes-somos/impacto', 'NoticiasimpactoController@index')->name('noticias');

// Ruta para buscar noticias
Route::get('/noticias/search', 'NoticiascedeitController@search')->name('noticias.search');
//Ruta para Admisiones -Requisitos cetfoc, impacto, cedeit
//cetfoc
Route::get('/Rcetfoc','MatricetfocController@index')->name('Rcetfoc');
Route::post('/matricetfoc','MatricetfocController@store')->name('matricetfoc1');
//impacto
Route::get('/Rimpacto','MatrimpactoController@index')->name('Rimpacto');
Route::post('/matrimpacto', 'MatrimpactoController@store')->name('matrimpacto');
//cedeit
Route::get('/Rcedeit','MatricedeitController@index')->name('Rcedeit');
Route::post('/matricedeit','MatricedeitController@store')->name('matricedeit');

//Ruta de convenios
Route::get('/Convenios','ConveniosController@index')->name('Convenios');

//Ruta Administrador
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

    Route::post('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


Route::get('/admin', [SessionsController::class, 'index'])
    ->middleware('auth')
    ->name('admin.index');
//Ruta admin Noticias Cedeit, Cetfoc, Impacto
Route::get('/admin/noticedeit', 'NoticiascedeitController@create')->name('noticiascre');
Route::get('/admin/noticetfoc', 'NoticiascetfocController@create')->name('noticiascre2');
Route::get('/admin/notimpacto', 'NoticiasimpactoController@create')->name('noticiascre3');

//->Cedeit Metodos
Route::post('/admin/noticedeit/store', 'NoticiascedeitController@store')->name('create1');
Route::get('/admin/noticedeit/{id}/edit', 'NoticiascedeitController@edit')->name('edit_noticia');
Route::patch('/admin/noticedeit/update/{id}', 'NoticiascedeitController@update')->name('update_noticia');
Route::delete('/admin/noticedeit/{id}/destroy', 'NoticiascedeitController@destroy')->name('delete_noti');

//->Cetfoc Metodos
Route::post('/admin/noticetfoc/store', 'NoticiascetfocController@store')->name('create');
Route::get('/admin/noticetfoc/{id}/edit', 'NoticiascetfocController@edit')->name('edit_no');
Route::patch('/admin/noticetfoc/update/{id}', 'NoticiascetfocController@update')->name('update_no');
Route::delete('/admin/noticetfocd/destroy/{id}', 'NoticiascetfocController@destroy')->name('delete_no');

//->Impacto Metodos
Route::post('/admin/notimpacto/store', 'NoticiasimpactoController@store')->name('create2');
Route::get('/admin/notimpacto', 'NoticiasimpactoController@create')->name('notimpacto');
Route::get('/admin/notimpacto/{id}/edit', 'NoticiasimpactoController@edit')->name('edit_not');
Route::patch('/admin/notimpacto/update/{id}', 'NoticiasimpactoController@update')->name('update_not');
Route::delete('/admin/notimpactod/destroy/{id}', 'NoticiasimpactoController@destroy')->name('delete_not');

//Ruta admin Preinscrpcion Cedeit, Cetfoc, Impacto
Route::get('/admin/Precedeit', 'PrecedeitController@Precedeit')->name('Precedeit');
Route::get('/admin/Precetfoc', 'PrecetfocController@Precetfoc')->name('Precetfoc');
Route::get('/admin/Preimpacto', 'PreimpactoController@Preimpacto')->name('Preimpacto');

//Ruta admin Matricula Cedeit, Cetfoc, Impacto
Route::get('/admin/Matricetfoc','MatricetfocController@create')->name('matricetfoc');
Route::get('/admin/Matrimpacto','MatrimpactoController@create')->name('matrimpacto2');
Route::get('/admin/Matricedeit','MatricedeitController@create')->name('matricedeit3');

// Ruta para buscar matriculados
Route::get('/matriculados/search', 'MatricetfocController@search')->name('matriculados.search');
Route::get('/matriculados/search2', 'MatrimpactoController@search')->name('matriculados.search2');
Route::get('/matriculados/search3', 'MatricedeitController@search')->name('matriculados.search3');

//Ruta admin Preinscrpcion Magdalena e Ibero
Route::get('/admin/Premagda', 'InfomagdaController@Premagda')->name('Premagda');
Route::get('/admin/Preibero', 'InfoiberoController@Preibero')->name('Preibero');

//Ruta admin Cursos Cetfoc, Impacto, Cedeit, Magdalena
//->Cedeit
Route::get('/admin/curscedeit', 'ProcedeitController@index')->name('curscedeit');
Route::post('/admin/curscedeit/store', 'ProcedeitController@store')->name('createcedeit');
Route::get('/admin/curscedeit/{id}/edit', 'ProcedeitController@edit')->name('editcedeit');
Route::patch('/admin/curscedeit/update/{id}', 'ProcedeitController@update')->name('updatecedeit');
Route::delete('/admin/curscedeit/destroy/{id}', 'ProcedeitController@destroy')->name('destroycedeit');

//->Cetfoc Metodos
Route::get('/admin/curscetfoc', 'ProcetController@index')->name('curscetfoc');
Route::post('/admin/curscetfoc/store', 'ProcetController@store')->name('createcurs');
Route::get('/admin/curscetfoc/{id}/edit', 'ProcetController@edit')->name('edit');
Route::patch('/admin/curscetfoc/update/{id}', 'ProcetController@update')->name('update_cur');
Route::delete('/admin/curscetfocd/destroy/{id}', 'ProcetController@destroy')->name('delete_cur');

//->Impacto Metodos
Route::get('/admin/cursimpacto', 'ProimpactController@index')->name('cursimpacto');
Route::post('/admin/cursimpacto/store', 'ProimpactController@store')->name('createcurs1');
Route::get('/admin/cursimpacto/{id}/edit', 'ProimpactController@edit')->name('edit1');
Route::patch('/admin/cursimpacto/update/{id}', 'ProimpactController@update')->name('update1');
Route::delete('/admin/cursimpactod/destroy/{id}', 'ProimpactController@destroy')->name('delete1');

//->Magdalena Metodos
Route::get('/admin/cursmagdalena', 'PromagdalenaController@index')->name('cursmagdalena');
Route::post('/admin/cursmagdalena/store', 'PromagdalenaController@store')->name('createcurs2');
Route::get('/admin/cursmagdalena/{id}/edit', 'PromagdalenaController@edit')->name('edit2');
Route::patch('/admin/cursmagdalena/update/{id}', 'PromagdalenaController@update')->name('update2');
Route::delete('/admin/cursmagdalenad/destroy/{id}', 'PromagdalenaController@destroy')->name('delete2');

//->Ibero Metodos
Route::get('/admin/cursibero', 'ProiberoController@index')->name('cursibero');
Route::post('/admin/cursibero/store', 'ProiberoController@store')->name('createcurs3');
Route::get('/admin/cursibero/{id}/edit', 'ProiberoController@edit')->name('edit3');
Route::patch('/admin/cursibero/update/{id}', 'ProiberoController@update')->name('update3');
Route::delete('/admin/cursibero/destroy/{id}', 'ProiberoController@destroy')->name('delete3');

//Ruta Matricula IBERO y MAGDALENA
Route::get('/admin/Matribero','MatriberoController@create')->name('matribero');
Route::get('/admin/Matrimagdalena','MatrimagdalController@create')->name('matrimagdal');

Route::get('Imagenes/{filename}', function ($filename) {
    $path = public_path('Imagenes/' . $filename);

    if (!file_exists($path)) {
        abort(404); // Retorna un error 404 si la imagen no existe
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return response($file, 200)->header('Content-Type', $type);
})->name('images.show');
//Ruta Usuarios
Route::get('/admin/users', 'RegisterController@index' )->name('users');
Route::get('/users/search', 'RegisterController@search')->name('register.search');



