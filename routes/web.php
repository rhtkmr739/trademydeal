<?php


require_once __DIR__ . '/jetstream.php';
require_once __DIR__ . '/routes.php';

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Frontpage;
use App\Http\Livewire\Sellerdashboard;
use App\Http\Livewire\Userdashboard;
use App\Http\Livewire\Product;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Manageleads;
use App\Http\Livewire\Admin\Employee;


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

Route::get('/',  [Frontpage::class, 'render'])->name('frontpage');


// Route::get('/categories', function () {
//     dd('dashboard');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/sellerdashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Sellerdashboard page routes
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
        ->get('/sellerdashboard',  [Sellerdashboard::class, 'render'])
        ->name('render');

// Sellerdashboard route for create seller
Route::middleware(['auth:sanctum', 'verified'])
        ->get('/seller/create',  [Sellerdashboard::class, 'createSeller']);

// Sellerdashboard route for add seller
Route::middleware(['auth:sanctum', 'verified'])
        ->post('/seller/addSeller',  [Sellerdashboard::class, 'addSeller']);


// Seller route for create product
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
        ->get('/seller/createProduct',  [Product::class, 'createProduct']);

 // Seller route for add Product
 Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
 ->post('/seller/addProduct',  [Product::class, 'addProduct']);
 
// Seller route for get industry by category id
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
        ->post('/seller/getIndustries',  [Product::class, 'getIndustries']);

// Seller route for get Markets by category id
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
        ->post('/seller/getMarkets',  [Product::class, 'getMarkets']);

// Seller route for get Markets by category id
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
        ->post('/seller/getCurrentSellerDetails',  [Sellerdashboard::class, 'getCurrentSellerDetails']);

// Seller route for get Markets by category id
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser'])
        ->get('/restrict-account',  [Sellerdashboard::class, 'restrictAccount']);

        
 // Seller route for catalog
 Route::middleware(['auth:sanctum', 'verified'])
 ->get('/seller/catalog/{sellerCatalogUrl}',  [Sellerdashboard::class, 'showSellerCatalog']);
 
               

// Userdashboard page routes
Route::middleware(['auth:sanctum', 'verified'])
        ->get('/userdashboard',  [Userdashboard::class, 'render'])
        ->name('render');



// ADMIN USERS GROUP ROUTES LISTING
Route::group(['namespace' => 'Admin',  'prefix' => 'admin', 'middleware' => ['auth:sanctum', 'verified']], function() {
     
// ADMIN Userdashboard page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
        ->get('/dashboard',  [Dashboard::class, 'render'])
        ->name('render');

// ADMIN create lead page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->get('/create-new-lead',  [Manageleads::class, 'createNewLead'])
->name('render');

// ADMIN create lead page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->post('/save-new-lead',  [Manageleads::class, 'saveNewLead'])
->name('render');

// ADMIN verified list lead page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->get('/verified-leads',  [Manageleads::class, 'getVerifiedLeads'])
->name('render');

// ADMIN create employee page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->get('/create-employee',  [Employee::class, 'createEmployee'])
->name('render');

// save employee data route
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->post('/save-employee',  [Employee::class, 'saveEmployee'])
->name('render');

// Employee list page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->get('/employee-lists',  [Employee::class, 'getEmployeeList'])
->name('render');



});


// Employee USERS GROUP ROUTES LISTING
Route::group(['namespace' => 'Employee',  'prefix' => 'employee', 'middleware' => ['auth:sanctum', 'verified']], function() {
        

// Employee Userdashboard page routes
Route::middleware(['auth:sanctum', 'verified','isEmployeeUser'])
        ->get('/dashboard',  [Employee::class, 'dashboard'])
        ->name('render');

// Employee create lead page routes
Route::middleware(['auth:sanctum', 'verified','isEmployeeUser'])
->get('/create-new-lead',  [Manageleads::class, 'createNewLead'])
->name('render');

// Employee create lead page routes
Route::middleware(['auth:sanctum', 'verified','isEmployeeUser'])
->post('/save-new-lead',  [Manageleads::class, 'saveNewLead'])
->name('render');

// Employee create seller page routes
Route::middleware(['auth:sanctum', 'verified','isEmployeeUser'])
        ->get('/create-seller',  [Employee::class, 'createSeller'])
        ->name('render');

// Employee route for add seller
Route::middleware(['auth:sanctum', 'verified','isEmployeeUser'])
        ->post('/addSeller',  [Employee::class, 'addSeller']);

// Employee verified list lead page routes
Route::middleware(['auth:sanctum', 'verified','isEmployeeUser'])
->get('/verified-leads',  [Employee::class, 'getEmployeesVerifiedLeads'])
->name('render');

// Employee seller list page routes
Route::middleware(['auth:sanctum', 'verified','isEmployeeUser'])
->get('/seller-list',  [Employee::class, 'getSellerList'])
->name('render');



});