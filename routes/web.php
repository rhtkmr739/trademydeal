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
use App\Http\Livewire\Admin\Promotional;
use App\Http\Controllers\SendEmailController;


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

// Seller route for get verified all leads
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
->get('/seller/verified-leads',  [Sellerdashboard::class, 'getVerifiedLeads']);

// Seller route for get verified all leads
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
->post('/seller/search-load-more-seller-verified-lead',  [Sellerdashboard::class, 'searchLoadMoreSellerVerifiedLead']);


// Seller route for get purchased all leads
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
->get('/seller/purchased-leads',  [Sellerdashboard::class, 'getPurchasedLeads']);

// Seller route for purchase lead
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
        ->post('/seller/purchase-lead',  [Sellerdashboard::class, 'purchaseLead']);

//Added by shankar START
//Route for load more option on purchase list

Route::middleware(['auth:sanctum','verified','isSellerUser','isSellerActive'])
->post('/seller/search-load-more-seller-purchased-lead',[Sellerdashboard::class,'searchLoadMoreSellerPurchasedLead']);

//Seller route for view-purchased leads details
Route::middleware(['auth:sanctum','verified','isSellerUser','isSellerActive'])
->post('/seller/view-purchased-lead-details',[Sellerdashboard::class,'viewPurchasedLeadsDetails']);

//Seller Route for edit profile
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
->get('/seller/dashboard-myprofile',  [Sellerdashboard::class, 'editSellerProfile']); 

//Seller Route for change password
Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
->get('/seller/change-password',  [Sellerdashboard::class, 'changePassword']);

Route::middleware(['auth:sanctum', 'verified', 'isSellerUser', 'isSellerActive'])
->post('/seller/changePassword',  [Sellerdashboard::class, 'updateSellerPassword']); 

//Added by shankar END

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

// Promotional user list page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->get('/promotional-users',  [Promotional::class, 'getPromotionalUsers'])
->name('render');

// Promotional email page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->get('/promotional-emails',  [Promotional::class, 'renderPromotionalEmailCenter'])
->name('render');

// Promotional groups page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->get('/promotional-groups',  [Promotional::class, 'getPromotionalGroups'])
->name('render');

// Promotional groups page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->post('/create-promotional-group',  [Promotional::class, 'createPromotionalGroup'])
->name('render');

// Promotional groups page routes
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->post('/get-promotional-user-by-group-id',  [Promotional::class, 'getPromotionalUserByGroupId'])
->name('render');


// Admin route for sending mail otp 
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->post('/send-mail-otp',  [SendEmailController::class, 'sendMailOTP']);

// Admin route for verifying mail otp 
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->post('/verify-mail-otp',  [SendEmailController::class, 'verifyMailOTP']);

// Admin route for sending mail after verified OTP 
Route::middleware(['auth:sanctum', 'verified','isAdminUser'])
->post('/send-verified-mail',  [SendEmailController::class, 'sendVerifiedMail']);

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

Route::get('send-email', [SendEmailController::class, 'index']);
