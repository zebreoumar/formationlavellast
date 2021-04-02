<?php


use App\Http\Controllers\MainController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MainController::class,'afficherAcceuil'])->name('acceuil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('procedure/{param}', [MainController::class,'afficherProcedure'])->name('procedure');

Route::middleware(["auth","isAdmin"])->group(function(){
    Route::get('ajouterProduit', [MainController::class,'ajouterProduit'])->name('produit');
    Route::get('produits/ajouterss',           [MainController::class,'ajouterProduit'])->name('ajouter-produit');

    Route::get('ajouterProduitEncore', [MainController::class,'ajouterProduitEncore'])->name('a.p');
    Route::get('deleteProduit/{parame}',     [MainController::class,'deleteProduit'])->name('delete-produit');
    Route::get('produits/modifier/{produit}',[ProduitController::class,'edit'])->name('modifier-produit');
    Route::post('produits/enregistrer',      [MainController::class,'enregistrerProduit'])->name('enregistrer-produit');
    Route::post('modifierProduit',           [MainController::class,'updateProduit'])->name('update-produit');
    Route::get('ajoutercommande/{parame}',   [MainController::class,'ajouterCommande'])->name('ajouter-commande');
    Route::get('deleteCommande/{parame}',    [MainController::class,'deleteCommande'])->name('delete-commande');
});
 
Route::get('produit/liste',              [MainController::class,'getList'])->name('produit.liste');

Route::get('excel-export',           [MainController::class,'excelExport'])->name('export-produit');
