<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CityCountryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyCityController;
use App\Http\Controllers\CompanyCountryController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Import\ImportCountryController;
use App\Http\Controllers\Pdf\CompanyPdfController;
use App\Http\Controllers\PermanentScreenSessionController;
use App\Http\Controllers\TestingJavaScriptController;

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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
*/


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::post('users/{user}/change-password', [ChangePasswordController::class, 'changePassword'])->name('users.change.password');

Route::resource('countries', CountryController::class);
Route::get('countries/delete/{id}', [CountryController::class, 'delete'])->name('delete-country');

Route::resource('cities', CityController::class);
Route::get('cities/delete/{id}', [CityController::class, 'delete'])->name('delete-city');
Route::get('ajax-autocomplete-search-countries', [CityController::class,'selectSearchCountries']);

Route::resource('companies', CompanyController::class);
Route::get('companies/delete/{id}', [CompanyController::class, 'delete'])->name('delete-company');
Route::get('ajax-autocomplete-search-cities', [CompanyController::class,'selectSearchCities']);


Route::get('/balance-sheets', [App\Http\Controllers\BalanceSheetController::class, 'index'])->name('bilansi');
Route::get('ajax-autocomplete-search-companies', [CompanyController::class,'selectSearchCompanies']);

//    =============  1. COMPANY EDIT ===================

//    -----  1.1. CITY EDIT -----
// azuriranje grada iz companies-edit  
Route::get('companies/{company}/edit/cities/{city}/edit', [CompanyCityController::class, 'edit'])->name('edit-city-from-company-edit');
Route::put('companies/{company}/edit/cities/{city}/edit', [CompanyCityController::class, 'update'])->name('update-city-from-company-edit');


//    ----- 1.1.1. COUNTRY EDIT ------
// azuriranje drzave iz companies-edit iz city edit ekrana 
Route::get('companies/{company}/edit/cities/{city}/edit/countries/{country}/edit', [CompanyCountryController::class, 'edit'])->name('edit-country-from-company-edit');
Route::put('companies/{company}/edit/cities/{city}/edit/countries/{country}/edit', [CompanyCountryController::class, 'update'])->name('update-country-from-company-edit');

//    ----- 1.1.2. COUNTRY CREATE ------
// kreiranje drzave iz companies-edit   
Route::get('companies/{company}/edit/cities/{city}/edit/countries/create', [CompanyCountryController::class, 'create'])->name('create-country-from-company-edit');
Route::post('companies/{company}/edit/cities/{city}/edit/countries/create', [CompanyCountryController::class, 'store'])->name('store-country-from-company-edit');

//    ----- END CITY EDIT -----


//    ----- 1.2. CITY CREATE -----
// kreiranje grada iz companies-edit  
Route::get('companies/{company}/edit/cities/create', [CompanyCityController::class, 'create'])->name('create-city-from-company-edit');
Route::post('companies/{company}/edit/cities/create', [CompanyCityController::class, 'store'])->name('store-city-from-company-edit');


//   ------ 1.2.1. COUNTRY EDIT -----
// azuriranje drzave iz companies-edit iz city create ekrana   
Route::get('companies/{company}/edit/cities/create/countries/{country}/edit', [CompanyCountryController::class, 'edit1'])->name('edit-country-from-company-edit_1');
Route::put('companies/{company}/edit/cities/create/countries/{country}/edit', [CompanyCountryController::class, 'update1'])->name('update-country-from-company-edit_1');

//   ------ 1.2.2. COUNTRY CREATE ------
// kreiranje drzave iz companies-edit iz city create ekrana    
Route::get('companies/{company}/edit/cities/create/countries/create', [CompanyCountryController::class, 'create1'])->name('create-country-from-company-edit_1');
Route::post('companies/{company}/edit/cities/create/countries/create', [CompanyCountryController::class, 'store1'])->name('store-country-from-company-edit_1');


//    ====================  END COMPANY EDIT ======================


//    =============  1. COMPANY CREATE ===================
//    ----- 1.1. CITY CREATE -----
// kreiranje grada iz companies-create  
Route::get('companies/create/cities/create', [CompanyCityController::class, 'createC'])->name('create-city-from-company-create');
Route::post('companies/create/cities/create', [CompanyCityController::class, 'storeC'])->name('store-city-from-company-create');

//    ----- 1.1.1. COUNTRY CREATE -----
// kreiranje drzave iz companies-create  
Route::get('companies/create/cities/create/countries/create', [CompanyCountryController::class, 'createC'])->name('create-country-from-company-create_1');
Route::post('companies/create/cities/create/countries/create', [CompanyCountryController::class, 'storeC'])->name('store-country-from-company-create_1');

//    ----- 1.2. CITY EDIT -----
// azuriranje grada iz companies-create  
Route::get('companies/create/cities/{city}/edit', [CompanyCityController::class, 'editC'])->name('edit-city-from-company-create');
Route::put('companies/create/cities/{city}/edit', [CompanyCityController::class, 'updateC'])->name('update-city-from-company-create');


//    ----- 1.2.1. COUNTRY EDIT -----
//  azuriranje drzave iz companies-create  / cities-create
Route::get('companies/create/cities/create/countries/{country}/edit', [CompanyCountryController::class, 'editC'])->name('edit-country-from-company-create');
Route::put('companies/create/cities/create/countries/{country}/edit', [CompanyCountryController::class, 'updateC'])->name('update-country-from-company-create');

//    ----- 1.2.2. COUNTRY CREATE -----
// kreiranje drzave iz companies-create / city - edit  
Route::get('companies/create/cities/{city}/edit/countries/create', [CompanyCountryController::class, 'create2'])->name('create-country-from-company-create_2');
Route::post('companies/create/cities/{city}/edit/countries/create', [CompanyCountryController::class, 'store2'])->name('store-country-from-company-create_2');

//    ----- 1.2.3. COUNTRY CREATE -----
// azuriranje drzave iz companies-create / city - edit  
Route::get('companies/create/cities/{city}/edit/countries/{country}/edit', [CompanyCountryController::class, 'edit2'])->name('edit-country-from-company-create_2');
Route::put('companies/create/cities/{city}/edit/countries/{country}/edit', [CompanyCountryController::class, 'update2'])->name('update-country-from-company-create_2');


//    =============  END COMPANY CREATE ===================

// =============== CITY - COUNTRY ==================

// Create country from city create: 
Route::get('cities/create/countries/create', [CityCountryController::class, 'create'])->name('create-country-from-city-create');
Route::post('cities/create/countries/create', [CityCountryController::class, 'store'])->name('store-country-from-city-create');

// Edit country from city create:
Route::get('cities/create/countries/{country}/edit', [CityCountryController::class, 'edit'])->name('edit-country-from-city-create');
Route::put('cities/create/countries/{country}/edit', [CityCountryController::class, 'update'])->name('update-country-from-city-create');


// Create country from city edit: 
Route::get('cities/{city}/edit/country/create', [CityCountryController::class, 'create1'])->name('create-country-from-city-edit');
Route::post('cities/{city}/edit/country/create', [CityCountryController::class, 'store1'])->name('store-country-form-city-edit');

// Edit country from city edit:
Route::get('cities/{city}/edit/countries/{country}/edit', [CityCountryController::class, 'edit1'])->name('edit-country-from-city-edit');
Route::put('cities/{city}/edit/countries/{country}/edit', [CityCountryController::class, 'update1'])->name('update-country-from-city-edit');

// Import drzave (csv ili excel):
Route::get('/imports/import-country-form', [ImportCountryController::class, 'importForm'])->name('import.countries.form');
Route::post('/import-countries', [ImportCountryController::class, 'import'])->name('import.countries');

// Pdf stampa - companies:
Route::get('/companies-all-show-pdf', [CompanyPdfController::class, 'showCompaniesAll'])->name('companies-all-show-pdf');
Route::get('/companies-all-generate-pdf', [CompanyPdfController::class, 'createEmployeesAllPDF'])->name('companies-all-generate-pdf');

// AJAX calls for permanent session (fields values)
// Route::post('/permanent-screen-sessions', [PermanentScreenSessionController::class, 'store'])->name('permanent-screen-sessions');
// Route::get('/get-session-info', [PermanentScreenSessionController::class, 'getSession'])->name('get-session-info');

Route::get('/testing-javascript', [TestingJavaScriptController::class, 'index']);