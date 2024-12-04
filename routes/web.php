<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ProductionController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminHumanresourcesController;
use App\Http\Controllers\AdminstoreController;
use App\Http\Controllers\AdminfinanceController;
use App\Http\Controllers\AdminqualityassuranceController;
use App\Http\Controllers\AdminproductionController;
// use App\Http\Controllers\HrdepartmentsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
// Admin HR ROutes //
use App\Http\Controllers\AdminHrdepartmentsController;
use App\Http\Controllers\AdminHrhiringController;
use App\Http\Controllers\adminHrloanController;
use App\Http\Controllers\adminHrattendanceController;
use App\Http\Controllers\adminHrsalaryController;
use App\Http\Controllers\adminHrordersController;
// Admin HR ROutes //

//Admin Qa Routes
use App\Http\Controllers\AdminQACapabilityController;
use App\Http\Controllers\AdminQACshnFrntFuelTnkDLXController;
use App\Http\Controllers\AdminQAGrARearCvrCD100Controller;
use App\Http\Controllers\AdminQAGrCD70Controller;
use App\Http\Controllers\AdminQAGrCG125Controller;
use App\Http\Controllers\AdminQAGrSideCvrDLXController;
use App\Http\Controllers\AdminQAInlineCshnFrntFuelTnkDLXController;
use App\Http\Controllers\AdminQAInlineGrARearCvrCD100Controller;
use App\Http\Controllers\AdminQAInlineGrCD70Controller;
use App\Http\Controllers\AdminQAInlineGrCG125Controller;
use App\Http\Controllers\AdminQAInlineGrSideCvrDLXController;
use App\Http\Controllers\AdminQAInlinePckingRbrCD100Controller;
use App\Http\Controllers\AdminQAInlineRbrHndlCshnCD100Controller;
use App\Http\Controllers\AdminQAInlineRbrMflrMntDLXController;
use App\Http\Controllers\AdminQAInlineT4X440KOKAController;
use App\Http\Controllers\AdminQAInlineT8X150CG125Controller;
use App\Http\Controllers\AdminQAInlineTABreatherCG125Controller;
use App\Http\Controllers\AdminQAInlineTASVControlCG125Controller;
use App\Http\Controllers\AdminQAInlineTBBreatherCD70Controller;
use App\Http\Controllers\AdminQAInlineTBBreatherCG125Controller;
use App\Http\Controllers\AdminQAInlineTBreatherDLXController;
use App\Http\Controllers\AdminQAInlineTBreatherKOKAController;
use App\Http\Controllers\AdminQAInlineTBreatherPridorController;
use App\Http\Controllers\AdminQAInlineTBtryBreatherCD100Controller;
use App\Http\Controllers\AdminQAInlineTBtryBreatherCD70Controller;
use App\Http\Controllers\AdminQAInlineTBtryBreatherCG125Controller;
use App\Http\Controllers\AdminQAInlineTBtryBreatherDLXController;
use App\Http\Controllers\AdminQAInlineTBtryBreatherKOKAController;
use App\Http\Controllers\AdminQAInlineTBtryBreatherKSWController;
use App\Http\Controllers\AdminQAInlineTCompFuelDeluxeController;
use App\Http\Controllers\AdminQAInlineTCompFuelKOKAController;
use App\Http\Controllers\AdminQAInlineTFuelCD100Controller;
use App\Http\Controllers\AdminQAInlineTFuelCD70Controller;
use App\Http\Controllers\AdminQAInlineTSuctionCG125Controller;
use App\Http\Controllers\AdminQAInlineTSuctionKOKAController;
use App\Http\Controllers\AdminQAInlineTubeFuelCG125Controller;
use App\Http\Controllers\AdminQAInlineUndrRbrHndlCD100Controller;
use App\Http\Controllers\AdminQAInspectorController;
use App\Http\Controllers\AdminQAMonthlyCshnFrntFuelTnkDLXController;
use App\Http\Controllers\AdminQAMonthlyGrARearCvrCD100Controller;
use App\Http\Controllers\AdminQAMonthlyGrCD70Controller;
use App\Http\Controllers\AdminQAMonthlyGrCG125Controller;
use App\Http\Controllers\AdminQAMonthlyGrSideCvrDLXController;
use App\Http\Controllers\AdminQAMonthlyPckingRbrCD100Controller;
use App\Http\Controllers\AdminQAMonthlyRbrHndlCshnCD100Controller;
use App\Http\Controllers\AdminQAMonthlyRbrMflrMntDLXController;
use App\Http\Controllers\AdminQAMonthlyT4X440KOKAController;
use App\Http\Controllers\AdminQAMonthlyT8X150CG125Controller;
use App\Http\Controllers\AdminQAMonthlyTABreatherCG125Controller;
use App\Http\Controllers\AdminQAMonthlyTASVControlCG125Controller;
use App\Http\Controllers\AdminQAMonthlyTBBreatherCD70Controller;
use App\Http\Controllers\AdminQAMonthlyTBBreatherCG125Controller;
use App\Http\Controllers\AdminQAMonthlyTBreatherDLXController;
use App\Http\Controllers\AdminQAMonthlyTBreatherKOKAController;
use App\Http\Controllers\AdminQAMonthlyTBreatherPridorController;
use App\Http\Controllers\AdminQAMonthlyTBtryBreatherCD100Controller;
use App\Http\Controllers\AdminQAMonthlyTBtryBreatherCD70Controller;
use App\Http\Controllers\AdminQAMonthlyTBtryBreatherCG125Controller;
use App\Http\Controllers\AdminQAMonthlyTBtryBreatherDLXController;
use App\Http\Controllers\AdminQAMonthlyTBtryBreatherKOKAController;
use App\Http\Controllers\AdminQAMonthlyTBtryBreatherKSWController;
use App\Http\Controllers\AdminQAMonthlyTCompFuelDLXController;
use App\Http\Controllers\AdminQAMonthlyTCompFuelKOKAController;
use App\Http\Controllers\AdminQAMonthlyTFuelCD100Controller;
use App\Http\Controllers\AdminQAMonthlyTFuelCD70Controller;
use App\Http\Controllers\AdminQAMonthlyTFuelCG125Controller;
use App\Http\Controllers\AdminQAMonthlyTSuctionCG125Controller;
use App\Http\Controllers\AdminQAMonthlyTSuctionKOKAController;
use App\Http\Controllers\AdminQAMonthlyUndrRbrHndlCD100Controller;
use App\Http\Controllers\AdminQAPChartController;
use App\Http\Controllers\AdminQAPckingRbrCD100Controller;
use App\Http\Controllers\AdminQARbrHndlCshnCD100Controller;
use App\Http\Controllers\AdminQARbrMflrMntDLXController;
use App\Http\Controllers\AdminQASummaryController;
use App\Http\Controllers\AdminQAT4X440KOKAController;
use App\Http\Controllers\AdminQAT8X150CG125Controller;
use App\Http\Controllers\AdminQATABreatherCG125Controller;
use App\Http\Controllers\AdminQATASVControlCG125Controller;
use App\Http\Controllers\AdminQATBBreatherCD70Controller;
use App\Http\Controllers\AdminQATBBreatherCG125Controller;
use App\Http\Controllers\AdminQATBreatherDLXController;
use App\Http\Controllers\AdminQATBreatherKOKAController;
use App\Http\Controllers\AdminQATBreatherPridorController;
use App\Http\Controllers\AdminQATBtryBreatherCD100Controller;
use App\Http\Controllers\AdminQATBtryBreatherCD70Controller;
use App\Http\Controllers\AdminQATBtryBreatherCG125Controller;
use App\Http\Controllers\AdminQATBtryBreatherDLXController;
use App\Http\Controllers\AdminQATBtryBreatherKOKAController;
use App\Http\Controllers\AdminQATBtryBreatherKSWController;
use App\Http\Controllers\AdminQATCompFuelDLXController;
use App\Http\Controllers\AdminQATCompFuelKOKAController;
use App\Http\Controllers\AdminQATFuelCD100Controller;
use App\Http\Controllers\AdminQATFuelCD70Controller;
use App\Http\Controllers\AdminQATFuelCG125Controller;
use App\Http\Controllers\AdminQATotalInspectionController;
use App\Http\Controllers\AdminQATSuctionCG125Controller;
use App\Http\Controllers\AdminQATSuctionKOKAController;
use App\Http\Controllers\AdminQAUndrRbrHndlCD100Controller;
use App\Http\Controllers\AdminQAXRController;

//Qa Routes
use App\Http\Controllers\QACapabilityController;
use App\Http\Controllers\QACshnFrntFuelTnkDLXController;
use App\Http\Controllers\QAGrARearCvrCD100Controller;
use App\Http\Controllers\QAGrCD70Controller;
use App\Http\Controllers\QAGrCG125Controller;
use App\Http\Controllers\QAGrSideCvrDLXController;
use App\Http\Controllers\QAInlineCshnFrntFuelTnkDLXController;
use App\Http\Controllers\QAInlineGrARearCvrCD100Controller;
use App\Http\Controllers\QAInlineGrCD70Controller;
use App\Http\Controllers\QAInlineGrCG125Controller;
use App\Http\Controllers\QAInlineGrSideCvrDLXController;
use App\Http\Controllers\QAInlinePckingRbrCD100Controller;
use App\Http\Controllers\QAInlineRbrHndlCshnCD100Controller;
use App\Http\Controllers\QAInlineRbrMflrMntDLXController;
use App\Http\Controllers\QAInlineT4X440KOKAController;
use App\Http\Controllers\QAInlineT8X150CG125Controller;
use App\Http\Controllers\QAInlineTABreatherCG125Controller;
use App\Http\Controllers\QAInlineTASVControlCG125Controller;
use App\Http\Controllers\QAInlineTBBreatherCD70Controller;
use App\Http\Controllers\QAInlineTBBreatherCG125Controller;
use App\Http\Controllers\QAInlineTBreatherDLXController;
use App\Http\Controllers\QAInlineTBreatherKOKAController;
use App\Http\Controllers\QAInlineTBreatherPridorController;
use App\Http\Controllers\QAInlineTBtryBreatherCD100Controller;
use App\Http\Controllers\QAInlineTBtryBreatherCD70Controller;
use App\Http\Controllers\QAInlineTBtryBreatherCG125Controller;
use App\Http\Controllers\QAInlineTBtryBreatherDLXController;
use App\Http\Controllers\QAInlineTBtryBreatherKOKAController;
use App\Http\Controllers\QAInlineTBtryBreatherKSWController;
use App\Http\Controllers\QAInlineTCompFuelDeluxeController;
use App\Http\Controllers\QAInlineTCompFuelKOKAController;
use App\Http\Controllers\QAInlineTFuelCD100Controller;
use App\Http\Controllers\QAInlineTFuelCD70Controller;
use App\Http\Controllers\QAInlineTSuctionCG125Controller;
use App\Http\Controllers\QAInlineTSuctionKOKAController;
use App\Http\Controllers\QAInlineTubeFuelCG125Controller;
use App\Http\Controllers\QAInlineUndrRbrHndlCD100Controller;
use App\Http\Controllers\QAInspectorController;
use App\Http\Controllers\QAMonthlyCshnFrntFuelTnkDLXController;
use App\Http\Controllers\QAMonthlyGrARearCvrCD100Controller;
use App\Http\Controllers\QAMonthlyGrCD70Controller;
use App\Http\Controllers\QAMonthlyGrCG125Controller;
use App\Http\Controllers\QAMonthlyGrSideCvrDLXController;
use App\Http\Controllers\QAMonthlyPckingRbrCD100Controller;
use App\Http\Controllers\QAMonthlyRbrHndlCshnCD100Controller;
use App\Http\Controllers\QAMonthlyRbrMflrMntDLXController;
use App\Http\Controllers\QAMonthlyT4X440KOKAController;
use App\Http\Controllers\QAMonthlyT8X150CG125Controller;
use App\Http\Controllers\QAMonthlyTABreatherCG125Controller;
use App\Http\Controllers\QAMonthlyTASVControlCG125Controller;
use App\Http\Controllers\QAMonthlyTBBreatherCD70Controller;
use App\Http\Controllers\QAMonthlyTBBreatherCG125Controller;
use App\Http\Controllers\QAMonthlyTBreatherDLXController;
use App\Http\Controllers\QAMonthlyTBreatherKOKAController;
use App\Http\Controllers\QAMonthlyTBreatherPridorController;
use App\Http\Controllers\QAMonthlyTBtryBreatherCD100Controller;
use App\Http\Controllers\QAMonthlyTBtryBreatherCD70Controller;
use App\Http\Controllers\QAMonthlyTBtryBreatherCG125Controller;
use App\Http\Controllers\QAMonthlyTBtryBreatherDLXController;
use App\Http\Controllers\QAMonthlyTBtryBreatherKOKAController;
use App\Http\Controllers\QAMonthlyTBtryBreatherKSWController;
use App\Http\Controllers\QAMonthlyTCompFuelDLXController;
use App\Http\Controllers\QAMonthlyTCompFuelKOKAController;
use App\Http\Controllers\QAMonthlyTFuelCD100Controller;
use App\Http\Controllers\QAMonthlyTFuelCD70Controller;
use App\Http\Controllers\QAMonthlyTFuelCG125Controller;
use App\Http\Controllers\QAMonthlyTSuctionCG125Controller;
use App\Http\Controllers\QAMonthlyTSuctionKOKAController;
use App\Http\Controllers\QAMonthlyUndrRbrHndlCD100Controller;
use App\Http\Controllers\QAPChartController;
use App\Http\Controllers\QAPckingRbrCD100Controller;
use App\Http\Controllers\QARbrHndlCshnCD100Controller;
use App\Http\Controllers\QARbrMflrMntDLXController;
use App\Http\Controllers\QASummaryController;
use App\Http\Controllers\QAT4X440KOKAController;
use App\Http\Controllers\QAT8X150CG125Controller;
use App\Http\Controllers\QATABreatherCG125Controller;
use App\Http\Controllers\QATASVControlCG125Controller;
use App\Http\Controllers\QATBBreatherCD70Controller;
use App\Http\Controllers\QATBBreatherCG125Controller;
use App\Http\Controllers\QATBreatherDLXController;
use App\Http\Controllers\QATBreatherKOKAController;
use App\Http\Controllers\QATBreatherPridorController;
use App\Http\Controllers\QATBtryBreatherCD100Controller;
use App\Http\Controllers\QATBtryBreatherCD70Controller;
use App\Http\Controllers\QATBtryBreatherCG125Controller;
use App\Http\Controllers\QATBtryBreatherDLXController;
use App\Http\Controllers\QATBtryBreatherKOKAController;
use App\Http\Controllers\QATBtryBreatherKSWController;
use App\Http\Controllers\QATCompFuelDLXController;
use App\Http\Controllers\QATCompFuelKOKAController;
use App\Http\Controllers\QATFuelCD100Controller;
use App\Http\Controllers\QATFuelCD70Controller;
use App\Http\Controllers\QATFuelCG125Controller;
use App\Http\Controllers\QATotalInspectionController;
use App\Http\Controllers\QATSuctionCG125Controller;
use App\Http\Controllers\QATSuctionKOKAController;
use App\Http\Controllers\QAUndrRbrHndlCD100Controller;
use App\Http\Controllers\QAXRController;
use App\Http\Controllers\QualityAssuranceController;

// HR Routes //
use App\Http\Controllers\HrattendanceController;
// use App\Http\Controllers\HrcurrentjobController;
use App\Http\Controllers\HrdepartmentsController;
use App\Http\Controllers\HrEmployeeController;
use App\Http\Controllers\HrloanController;
use App\Http\Controllers\HrordersController;
use App\Http\Controllers\HrsalaryController;

// Finance //
use App\Http\Controllers\financeemployeeController;
use App\Http\Controllers\financeloanController;
use App\Http\Controllers\financeorderController;
use App\Http\Controllers\financesalaryController;
use App\Http\Controllers\FinanceExpenseController;
use App\Http\Controllers\FinanceFundController;
use App\Http\Controllers\FinancePaymentController;
use App\Http\Controllers\FinanceReceiptController;
use App\Http\Controllers\FinancePayslipController;
use App\Http\Controllers\FinanceSaleInvoiceController;
use App\Http\Controllers\FinancePurchaseInvoiceController;

// Admin Finance Routes//
use App\Http\Controllers\adminfinanceorderController;
use App\Http\Controllers\adminfinanceloanController;
use App\Http\Controllers\adminfinancesalaryController;
use App\Http\Controllers\adminfinanceemployeeController;
use App\Http\Controllers\AdminFinanceExpenseController;
use App\Http\Controllers\AdminFinanceFundController;
use App\Http\Controllers\AdminFinancePaymentController;
use App\Http\Controllers\AdminFinanceReceiptController;
use App\Http\Controllers\AdminFinancePayslipController;
use App\Http\Controllers\AdminFinanceSaleInvoiceController;
use App\Http\Controllers\AdminFinancePurchaseInvoiceController;
// Admin Finance Routes//

use App\Http\Controllers\finishgodsController;
// use App\Http\Controllers\rawmaterialController;





// Store Controllers //
use App\Http\Controllers\StoreController;
use App\Http\Controllers\RawMaterialController;
use App\Http\Controllers\RawMaterialOutController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SubsupplierController;
use App\Http\Controllers\SubpurchaseController;
use App\Http\Controllers\SuborderController;
use App\Http\Controllers\StoreProductController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\StationaryController;
use App\Http\Controllers\ParticularController;
use App\Http\Controllers\RawbrandController;
use App\Http\Controllers\RawbrandprodController;
use App\Http\Controllers\RawMaterialProductController;

// Admin Store Controllers
use App\Http\Controllers\AdminRawMaterialController;
use App\Http\Controllers\AdminInventoryController;
use App\Http\Controllers\AdminSubsupplierController;
use App\Http\Controllers\AdminSubpurchaseController;
use App\Http\Controllers\AdminSuborderController;
use App\Http\Controllers\AdminStoreProductController;
use App\Http\Controllers\AdminVendorController;
use App\Http\Controllers\AdminStationaryController;
use App\Http\Controllers\AdminParticularController;
use App\Http\Controllers\AdminRawbrandController;
use App\Http\Controllers\AdminRawbrandprodController;
use App\Http\Controllers\AdminRawMaterialProductController;
use App\Http\Controllers\adminStationaryorderController;
use App\Http\Controllers\FinancestoreOrdercontroller;
use App\Http\Controllers\finishproductsController;
use App\Http\Controllers\ProductionOrdercontroller;
use App\Http\Controllers\QualityOrdercontroller;
use App\Http\Controllers\stockcontroller;
use App\Http\Controllers\StoreOrderController;
use App\Http\Controllers\StorestationarycategoryController;
use App\Http\Controllers\StoreStationaryProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for dRawbrandprodControllera| Here is where you can register web routes for dRawbrandprodControlleration. Thesetion. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'roles:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'Adminlogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

// Human Rresources
Route::get('/admin/humanresources', [AdminHumanresourcesController::class, 'index'])->name('admin.humanresources.index');


// Stationary Order //
Route::get('/stationaryorderrr', [adminStationaryorderController::class, 'indexxx'])->name('adminstoreorder.index');
Route::get('/admin/stationaryorderrr/create', [adminStationaryorderController::class, 'create'])->name('adminstoreorder.create');
Route::post('/admin/stationaryorderrr', [adminStationaryorderController::class, 'store'])->name('adminstoreorder.store');
Route::get('/admin/stationaryorderrr/{id}', [adminStationaryorderController::class, 'show'])->name('adminstoreorder.show');
Route::get('/admin/stationaryorderrr/{id}/edit', [adminStationaryorderController::class, 'edit'])->name('adminstoreorder.edit');
Route::put('/admin/stationaryorderrr/{id}', [adminStationaryorderController::class, 'update'])->name('adminstoreorder.update');
Route::delete('/admin/stationaryorderrr/{id}', [adminStationaryorderController::class, 'destroy'])->name('adminstoreorder.destroy');
Route::get('/admin/stationaryorderrr/search_data', [adminStationaryorderController::class, 'search'])->name('adminstoreorderrr.search');
// Stationary Order //






     //Product Routes
     Route::get('/admin/production/product', [AdminProductController::class, 'index'])->name('adminproduct.index');
     Route::get('/admin/production/product/create', [AdminProductController::class, 'create'])->name('adminproduct.create');
     Route::post('/admin/production/product', [AdminProductController::class, 'store'])->name('adminproduct.store');
     Route::get('/admin/production/product/{product}', [AdminProductController::class, 'show'])->name('adminproduct.show');
     Route::get('/admin/production/product/{product}/edit', [AdminProductController::class, 'edit'])->name('adminproduct.edit');
     Route::put('/admin/production/product/{product}', [AdminProductController::class, 'update'])->name('adminproduct.update');
     Route::delete('/admin/production/product/{product}', [AdminProductController::class, 'destroy'])->name('adminproduct.destroy');
     // Order Routes
     Route::get('/admin/production/order', [AdminOrderController::class, 'index'])->name('adminorder.index');
     Route::get('/admin/production/order/create', [AdminOrderController::class, 'create'])->name('adminorder.create');
     Route::post('/admin/production/order', [AdminOrderController::class, 'store'])->name('adminorder.store');
     Route::get('/admin/production/order/{order}', [AdminOrderController::class, 'show'])->name('adminorder.show');
     Route::get('/admin/production/order/{order}/edit', [AdminOrderController::class, 'edit'])->name('adminorder.edit');
     Route::put('/admin/production/order/{order}', [AdminOrderController::class, 'update'])->name('adminorder.update');
     Route::delete('/admin/production/order/{order}', [AdminOrderController::class, 'destroy'])->name('adminorder.destroy');


     // Admin Store Routes

 // Inventory routes
 Route::get('/admin/store/inventory', [AdminInventoryController::class, 'index'])->name('admininventory.index');
 Route::get('/admin/store/inventory/create', [AdminInventoryController::class, 'create'])->name('admininventory.create');
 Route::post('/admin/store/inventory', [AdminInventoryController::class, 'store'])->name('admininventory.store');
 Route::get('/admin/store/inventory/{id}', [AdminInventoryController::class, 'show'])->name('admininventory.show');
 Route::get('/admin/store/inventory/{id}/edit', [AdminInventoryController::class, 'edit'])->name('admininventory.edit');
 Route::put('/admin/store/inventory/{id}', [AdminInventoryController::class, 'update'])->name('admininventory.update');
 Route::delete('/admin/store/inventory/{id}', [AdminInventoryController::class, 'destroy'])->name('admininventory.destroy');
 Route::get('/admin/store/inventoryy/search_data', [AdminInventoryController::class, 'search'])->name('admininventory.search');

 // Subsupplier routes
 Route::get('/admin/store/subsupplier', [AdminSubsupplierController::class, 'index'])->name('adminsubsupplier.index');
 Route::get('/admin/store/subsupplier/create', [AdminSubsupplierController::class, 'create'])->name('adminsubsupplier.create');
 Route::post('/admin/store/subsupplier', [AdminSubsupplierController::class, 'store'])->name('adminsubsupplier.store');
 Route::get('/admin/store/subsupplier/{id}', [AdminSubsupplierController::class, 'show'])->name('adminsubsupplier.show');
 Route::get('/admin/store/subsupplier/{id}/edit', [AdminSubsupplierController::class, 'edit'])->name('adminsubsupplier.edit');
 Route::put('/admin/store/subsupplier/{id}', [AdminSubsupplierController::class, 'update'])->name('adminsubsupplier.update');
 Route::delete('/admin/store/subsupplier/{id}', [AdminSubsupplierController::class, 'destroy'])->name('adminsubsupplier.destroy');
 Route::get('/admin/store/subsupplierrr/search_data', [AdminSubsupplierController::class, 'search'])->name('adminsubsupplier.search');

 // Subsupplier purchase order routes
 Route::get('/admin/store/subsupplierr/purchase', [AdminSubpurchaseController::class, 'index'])->name('adminsubpurchase.index');
 Route::get('/admin/store/subsupplier/purchase/create', [AdminSubpurchaseController::class, 'create'])->name('adminsubpurchase.create');
 Route::post('/admin/store/subsupplier/purchase', [AdminSubpurchaseController::class, 'store'])->name('adminsubpurchase.store');
 Route::get('/admin/store/subsupplier/purchase/{id}', [AdminSubpurchaseController::class, 'show'])->name('adminsubpurchase.show');
 Route::get('/admin/store/subsupplier/purchase/{id}/edit', [AdminSubpurchaseController::class, 'edit'])->name('adminsubpurchase.edit');
 Route::put('/admin/store/subsupplier/purchase/{id}', [AdminSubpurchaseController::class, 'update'])->name('adminsubpurchase.update');
 Route::delete('/admin/store/subsupplier/purchase/{id}', [AdminSubpurchaseController::class, 'destroy'])->name('adminsubpurchase.destroy');
 Route::get('/admin/store/subsupplierrrrrr/search_data', [AdminSubpurchaseController::class, 'search'])->name('adminsubpurchase.search');

 // Subsupplier order received routes
 Route::get('/admin/store/subsupplierrr/order', [AdminSuborderController::class, 'index'])->name('adminsuborder.index');
 Route::get('/admin/store/subsupplier/order/create', [AdminSuborderController::class, 'create'])->name('adminsuborder.create');
 Route::post('/admin/store/subsupplier/order', [AdminSuborderController::class, 'store'])->name('adminsuborder.store');
 Route::get('/admin/store/subsupplier/order/{id}', [AdminSuborderController::class, 'show'])->name('adminsuborder.show');
 Route::get('/admin/store/subsupplier/order/{id}/edit', [AdminSuborderController::class, 'edit'])->name('adminsuborder.edit');
 Route::put('/admin/store/subsupplier/order/{id}', [AdminSuborderController::class, 'update'])->name('adminsuborder.update');
 Route::delete('/admin/store/subsupplier/order/{id}', [AdminSuborderController::class, 'destroy'])->name('adminsuborder.destroy');
 Route::get('/admin/store/subsupplierr/search_data', [AdminSuborderController::class, 'search'])->name('adminsuborder.search');

 // Product routes
 Route::get('/admin/store/product', [AdminStoreProductController::class, 'index'])->name('adminstoreproduct.index');
 Route::get('/admin/store/product/create', [AdminStoreProductController::class, 'create'])->name('adminstoreproduct.create');
 Route::post('/admin/store/product', [AdminStoreProductController::class, 'store'])->name('adminstoreproduct.store');
 Route::get('/admin/store/product/{id}', [AdminStoreProductController::class, 'show'])->name('adminstoreproduct.show');
 Route::get('/admin/store/product/{id}/edit', [AdminStoreProductController::class, 'edit'])->name('adminstoreproduct.edit');
 Route::put('/admin/store/product/{id}', [AdminStoreProductController::class, 'update'])->name('adminstoreproduct.update');
 Route::delete('/admin/store/product/{id}', [AdminStoreProductController::class, 'destroy'])->name('adminstoreproduct.destroy');
 Route::get('/admin/store/productt/search_data', [AdminStoreProductController::class, 'search'])->name('adminstoreproduct.search');

 // Vendor routes
 Route::get('/admin/store/vendor', [AdminVendorController::class, 'index'])->name('adminvendor.index');
 Route::get('/admin/store/vendor/create', [AdminVendorController::class, 'create'])->name('adminvendor.create');
 Route::post('/admin/store/vendor', [AdminVendorController::class, 'store'])->name('adminvendor.store');
 Route::get('/admin/store/vendor/{id}', [AdminVendorController::class, 'show'])->name('adminvendor.show');
 Route::get('/admin/store/vendor/{id}/edit', [AdminVendorController::class, 'edit'])->name('adminvendor.edit');
 Route::put('/admin/store/vendor/{id}', [AdminVendorController::class, 'update'])->name('adminvendor.update');
 Route::delete('/admin/store/vendor/{id}', [AdminVendorController::class, 'destroy'])->name('adminvendor.destroy');
 Route::get('/admin/store/vender/search_data', [AdminVendorController::class, 'search'])->name('adminvendor.search');

 // Stationary routes
 Route::get('/admin/store/stationary', [AdminStationaryController::class, 'index'])->name('adminstationary.index');
 Route::get('/admin/store/stationary/create', [AdminStationaryController::class, 'create'])->name('adminstationary.create');
 Route::post('/admin/store/stationary', [AdminStationaryController::class, 'store'])->name('adminstationary.store');
 Route::get('/admin/store/stationary/{id}', [AdminStationaryController::class, 'show'])->name('adminstationary.show');
 Route::get('/admin/store/stationary/{id}/edit', [AdminStationaryController::class, 'edit'])->name('adminstationary.edit');
 Route::put('/admin/store/stationary/{id}', [AdminStationaryController::class, 'update'])->name('adminstationary.update');
 Route::delete('/admin/store/stationary/{id}', [AdminStationaryController::class, 'destroy'])->name('adminstationary.destroy');
 Route::get('/admin/store/stationaryy/search_data', [AdminStationaryController::class, 'search'])->name('adminstationary.search');

 // Stationary Particular routes
 Route::get('/admin/store/particular', [AdminParticularController::class, 'index'])->name('adminparticular.index');
 Route::get('/admin/store/particular/create', [AdminParticularController::class, 'create'])->name('adminparticular.create');
 Route::post('/admin/store/particular', [AdminParticularController::class, 'store'])->name('adminparticular.store');
 Route::get('/admin/store/particular/{id}', [AdminParticularController::class, 'show'])->name('adminparticular.show');
 Route::get('/admin/store/particular/{id}/edit', [AdminParticularController::class, 'edit'])->name('adminparticular.edit');
 Route::put('/admin/store/particular/{id}', [AdminParticularController::class, 'update'])->name('adminparticular.update');
 Route::delete('/admin/store/particular/{id}', [AdminParticularController::class, 'destroy'])->name('adminparticular.destroy');
 Route::get('/admin/store/particularr/search_data', [AdminParticularController::class, 'search'])->name('adminparticular.search');


 /// Quantity In Raw Metherial Products //

 // Route::get('/admin/store/rawbrandproduct', [AdminRawbrandprodController::class, 'index'])->name('adminrawbrandproduct.indexx');
 Route::get('/admin/store/rawbrandproduct', [AdminRawbrandprodController::class, 'index'])->name('adminrawbrandprod.indexx');

 Route::get('/admin/store/rawbrandproduct/quantityout', [AdminRawbrandprodController::class, 'showQuantityOutForm'])->name('adminquantityout.show');
 Route::post('/admin/store/rawbrandproduct/quantityout', [AdminRawbrandprodController::class, 'storeQuantityOut'])->name('adminquantityout.store');

 Route::get('/admin/store/rawbrandproduct/create', [AdminRawbrandprodController::class, 'create'])->name('adminrawbrandprod.create');
 Route::post('/admin/store/rawbrandproduct', [AdminRawbrandprodController::class, 'store'])->name('adminrawbrandprod.store');
 Route::get('/admin/store/rawbrandproduct/{id}', [AdminRawbrandprodController::class, 'show'])->name('adminrawbrandprod.show');
 Route::get('/admin/store/rawbrandproduct/{id}/edit', [AdminRawbrandprodController::class, 'edit'])->name('adminrawbrandprod.edit');
 Route::put('/admin/store/rawbrandproduct/{id}', [AdminRawbrandprodController::class, 'update'])->name('adminrawbrandprod.update');
 Route::delete('/admin/store/rawbrandproduct/{id}', [AdminRawbrandprodController::class, 'destroy'])->name('adminrawbrandprod.destroy');
 Route::get('/admin/store/rawbrandproductt/search_data', [AdminRawbrandprodController::class, 'searchh'])->name('adminrawbrandprod.search');

 // Raw Material Brand //

 Route::get('/admin/store/rawmaterialbrand', [AdminRawbrandController::class, 'index'])->name('adminrawbrand.index');
 Route::get('/admin/store/rawmaterialbrand/create', [AdminRawbrandController::class, 'create'])->name('adminrawbrand.create');
 Route::post('/admin/store/rawmaterialbrand', [AdminRawbrandController::class, 'store'])->name('adminrawbrand.store');
 Route::get('/admin/store/rawmaterialbrand/{id}', [AdminRawbrandController::class, 'show'])->name('adminrawbrand.show');
 Route::get('/admin/store/rawmaterialbrand/{id}/edit', [AdminRawbrandController::class, 'edit'])->name('adminrawbrand.edit');
 Route::put('/admin/store/rawmaterialbrand/{id}', [AdminRawbrandController::class, 'update'])->name('adminrawbrand.update');
 Route::delete('/admin/store/rawmaterialbrand/{id}', [AdminRawbrandController::class, 'destroy'])->name('adminrawbrand.destroy');
 Route::get('/admin/store/rawmaterialbrandd/search_data', [AdminRawbrandController::class, 'search'])->name('adminrawbrand.search');


 Route::get('/admin/store/rawmaterialproduct', [AdminRawMaterialProductController::class, 'index'])->name('adminrawmaterialproduct.index');
 Route::get('/admin/store/rawmaterialproduct/create', [AdminRawMaterialProductController::class, 'create'])->name('adminrawmaterialproduct.create');
 Route::post('/admin/store/rawmaterialproduct', [AdminRawMaterialProductController::class, 'store'])->name('adminrawmaterialproduct.store');
 Route::get('/admin/store/rawmaterialproduct/{id}', [AdminRawMaterialProductController::class, 'show'])->name('adminrawmaterialproduct.show');
 Route::get('/admin/store/rawmaterialproduct/{id}/edit', [AdminRawMaterialProductController::class, 'edit'])->name('adminrawmaterialproduct.edit');
 Route::put('/admin/store/rawmaterialproduct/{id}', [AdminRawMaterialProductController::class, 'update'])->name('adminrawmaterialproduct.update');
 Route::delete('/admin/store/rawmaterialproduct/{id}', [AdminRawMaterialProductController::class, 'destroy'])->name('adminrawmaterialproduct.destroy');
 Route::get('/admin/store/rawmaterialproductt/search_data', [AdminRawMaterialProductController::class, 'search'])->name('adminrawmaterialproduct.search');

 // Raw material  routes

// Store Routes End //

    // Quality Assurance
    Route::get('/admin/qualityassurance', [AdminqualityassuranceController::class, 'index'])->name('admin.qualityassurance.index');
    // Route::resource('admin/file-upload',QualityAssuranceController::class);


    // Inspectors Controller


    Route::resource('admin/inspectors',AdminQAInspectorController::class);
    // In your routes/web.php or routes/api.php file
    Route::get('admin/total/inspectors', [AdminQATotalInspectionController::class, 'index'])->name('admininspectors.index');
    Route::get('admin/total/inspectors/create', [AdminQATotalInspectionController::class, 'create'])->name('admininspectors.create');
    Route::post('admin/total/inspectors', [AdminQATotalInspectionController::class, 'store'])->name('admininspectors.store');
    Route::get('admin/total/inspectors/{id}', [AdminQATotalInspectionController::class, 'show'])->name('admininspectors.show');
    Route::get('admin/total/inspectors/{id}/edit', [AdminQATotalInspectionController::class, 'edit'])->name('admininspectors.edit');
    Route::put('admin/total/inspectors/{id}', [AdminQATotalInspectionController::class, 'update'])->name('admininspectors.update');
    Route::delete('admin/total/inspectors/{id}', [AdminQATotalInspectionController::class, 'destroy'])->name('admininspectors.destroy');


    // Final Rejection Controllers



    Route::resource('admin/product/tfuelCG-125',AdminQATFuelCG125Controller::class);
    Route::name('adminfinal.tfuelCG-125.index')->get('admin/product/tfuelCG-125',[AdminQATFuelCG125Controller::class,'index']);

    Route::resource('admin/product/tfuelCD-100',AdminQATFuelCD100Controller::class);
    Route::name('adminfinal.tfuelCD-100.index')->get('admin/product/tfuelCD-100',[AdminQATFuelCD100Controller::class,'index']);


    Route::resource('admin/product/tfuelCD-70',AdminQATFuelCD70Controller::class);
    Route::name('adminfinal.tfuelCD-70.index')->get('admin/product/tfuelCD-70',[AdminQATFuelCD70Controller::class,'index']);


    Route::resource('admin/product/tubeCompFuelDeluxe',AdminQATCompFuelDLXController::class);
    Route::name('adminfinal.tubeCompFuelDeluxe.index')->get('admin/product/tubeCompFuelDeluxe',[AdminQATCompFuelDLXController::class,'index']);


    Route::resource('admin/product/tASVCG125',AdminQATASVControlCG125Controller::class);
    Route::get('admin/product/tASV-CG125',[AdminQATASVControlCG125Controller::class,'index'])->name('adminfinal.tASV-CG125.index');


    Route::resource('admin/product/tbBreather-CD70',AdminQATBBreatherCD70Controller::class);
    Route::name('adminfinal.tbBreather-CD70.index')->get('admin/product/tbBreather-CD70',[AdminQATBBreatherCD70Controller::class,'index']);


    Route::resource('/admin/product/tbBreather-CG125',AdminQATBBreatherCG125Controller::class);
    Route::name('adminfinal.tbBreather-CG125.index')->get('admin/product/tbBreather-CG125',[AdminQATBBreatherCG125Controller::class,'index']);


    Route::resource('/admin/product/taBreather-CG125',AdminQATABreatherCG125Controller::class);
    Route::name('adminfinal.taBreather-CG125.index')->get('admin/product/taBreather-CG125',[AdminQATABreatherCG125Controller::class,'index']);


    Route::resource('/admin/product/tSuctionCG125',AdminQATSuctionCG125Controller::class);
    Route::name('adminfinal.tSuctionCG125.index')->get('admin/product/tSuctionCG125',[AdminQATSuctionCG125Controller::class,'index']);


    Route::resource('/admin/product/t8X150CG125',AdminQAT8X150CG125Controller::class);
    Route::name('adminfinal.t8X150CG125.index')->get('admin/product/t8X150CG125',[AdminQAT8X150CG125Controller::class,'index']);


    Route::resource('/admin/product/tBreatherPridor',AdminQATBreatherPridorController::class);
    Route::name('adminfinal.tBreatherPridor.index')->get('admin/product/tBreatherPridor',[AdminQATBreatherPridorController::class,'index']);


    Route::resource('admin/product/tBreatherDeluxe',AdminQATBreatherDLXController::class);
    Route::name('adminfinal.tBreatherDeluxe.index')->get('admin/product/tBreatherDeluxe',[AdminQATBreatherDLXController::class,'index']);


    Route::resource('admin/product/t4X440KOKA',AdminQAT4X440KOKAController::class);
    Route::name('adminfinal.t4X440KOKA.index')->get('admin/product/t4X440KOKA',[AdminQAT4X440KOKAController::class,'index']);


    Route::resource('admin/product/tBreatherKOKA',AdminQATBreatherKOKAController::class);
    Route::name('adminfinal.tBreatherKOKA.index')->get('admin/product/tBreatherKOKA',[AdminQATBreatherKOKAController::class,'index']);


    Route::resource('admin/product/tSuctionKOKA',AdminQATSuctionKOKAController::class);
    Route::name('adminfinal.tSuctionKOKA.index')->get('admin/product/tSuctionKOKA',[AdminQATSuctionKOKAController::class,'index']);


    Route::resource('admin/product/CshnFrntFuelTnkDLX',AdminQACshnFrntFuelTnkDLXController::class);
    Route::name('adminfinal.CshnFrntFuelTnkDLX.index')->get('admin/product/CshnFrntFuelTnkDLX',[AdminQACshnFrntFuelTnkDLXController::class,'index']);


    Route::resource('admin/product/RbrMflrMntDLX',AdminQARbrMflrMntDLXController::class);
    Route::name('adminfinal.RbrMflrMntDLX.index')->get('admin/product/RbrMflrMntDLX',[AdminQARbrMflrMntDLXController::class,'index']);


    Route::resource('admin/product/GrmtSideCvrDLX',AdminQAGrSideCvrDLXController::class);
    Route::name('adminfinal.GrmtSideCvrDLX.index')->get('admin/product/GrmtSideCvrDLX',[AdminQAGrSideCvrDLXController::class,'index']);


    Route::resource('admin/product/GrmtARearCvrCD100',AdminQAGrARearCvrCD100Controller::class);
    Route::name('adminfinal.GrmtARearCvrCD100.index')->get('admin/product/GrmtARearCvrCD100',[AdminQAGrARearCvrCD100Controller::class,'index']);


    Route::resource('admin/product/RbrHndlCshnCD100',AdminQARbrHndlCshnCD100Controller::class);
    Route::name('adminfinal.RbrHndlCshnCD100.index')->get('admin/product/RbrHndlCshnCD100',[AdminQARbrHndlCshnCD100Controller::class,'index']);


    Route::resource('admin/product/UndrRbrHndlCD100',AdminQAUndrRbrHndlCD100Controller::class);
    Route::name('adminfinal.UndrRbrHndlCD100.index')->get('admin/product/UndrRbrHndlCD100',[AdminQAUndrRbrHndlCD100Controller::class,'index']);


    Route::resource('admin/product/PckngRbrCD100',AdminQAPckingRbrCD100Controller::class);
    Route::name('adminfinal.PckngRbrCD100.index')->get('admin/product/PckngRbrCD100',[AdminQAPckingRbrCD100Controller::class,'index']);


    Route::resource('admin/product/GrmtCD70',AdminQAGrCD70Controller::class);
    Route::name('adminfinal.GrmtCD70.index')->get('admin/product/GrmtCD70',[AdminQAGrCD70Controller::class,'index']);


    Route::resource('admin/product/GrmtCG125',AdminQAGrCG125Controller::class);
    Route::name('adminfinal.GrmtCG125.index')->get('admin/product/GrmtCG125',[AdminQAGrCG125Controller::class,'index']);


    Route::resource('admin/product/tBtryBreatherDLX',AdminQATBtryBreatherDLXController::class);
    Route::name('adminfinal.tBtryBreatherDLX.index')->get('admin/product/tBtryBreatherDLX',[AdminQATBtryBreatherDLXController::class,'index']);


    Route::resource('admin/product/tBtryBreatherCD70',AdminQATBtryBreatherCD70Controller::class);
    Route::name('adminfinal.tBtryBreatherCD70.index')->get('admin/product/tBtryBreatherCD70',[AdminQATBtryBreatherCD70Controller::class,'index']);


    Route::resource('admin/product/tBtryBreatherCG125',AdminQATBtryBreatherCG125Controller::class);
    Route::name('adminfinal.tBtryBreatherCG125.index')->get('admin/product/tBtryBreatherCG125',[AdminQATBtryBreatherCG125Controller::class,'index']);


    Route::resource('admin/product/tBtryBreatherCD100',AdminQATBtryBreatherCD100Controller::class);
    Route::name('adminfinal.tBtryBreatherCD100.index')->get('admin/product/tBtryBreatherCD100',[AdminQATBtryBreatherCD100Controller::class,'index']);


    Route::resource('admin/product/tBtryBreatherKSW',AdminQATBtryBreatherKSWController::class);
    Route::name('adminfinal.tBtryBreatherKSW.index')->get('admin/product/tBtryBreatherKSW',[AdminQATBtryBreatherKSWController::class,'index']);


    Route::resource('admin/product/tBtryBreatherKOKA',AdminQATBtryBreatherKOKAController::class);
    Route::name('adminfinal.tBtryBreatherKOKA.index')->get('admin/product/tBtryBreatherKOKA',[AdminQATBtryBreatherKOKAController::class,'index']);


    Route::resource('admin/product/tCompfuelKOKA',AdminQATCompFuelKOKAController::class);
    Route::name('adminfinal.tCompfuelKOKA.index')->get('admin/product/tCompfuelKOKA',[AdminQATCompFuelKOKAController::class,'index']);







    // Inline Rejection Controllers

    Route::resource('admin/inline/tfuelCG125',AdminQAInlineTubeFuelCG125Controller::class);
    Route::name('admininline.tfuelCG125.index')->get('admin/inline/tfuelCG125',[AdminQAInlineTubeFuelCG125Controller::class,'index']);


    Route::resource('admin/inline/tCompFuelDLX',AdminQAInlineTCompFuelDeluxeController::class);
    Route::name('admininline.tCompFuelDLX.index')->get('admin/inline/tCompFuelDLX',[AdminQAInlineTCompFuelDeluxeController::class,'index']);


    Route::resource('admin/inline/tfuel-CD-100',AdminQAInlineTFuelCD100Controller::class);
    Route::name('admininline.tfuelCD-100.index')->get('admin/inline/tfuelCD-100',[AdminQAInlineTFuelCD100Controller::class,'index']);


    Route::resource('admin/inline/tfuel-CD-70',AdminQAInlineTFuelCD70Controller::class);
    Route::name('admininline.tfuelCD-70.index')->get('admin/inline/tfuelCD-70',[AdminQAInlineTFuelCD70Controller::class,'index']);


    Route::resource('admin/inline/tASV-CG125',AdminQAInlineTASVControlCG125Controller::class);
    Route::name('admininline.tASV-CG125.index')->get('admin/inline/tASV-CG125',[AdminQAInlineTASVControlCG125Controller::class,'index']);


    Route::resource('admin/inline/tbBreather-CD70',AdminQAInlineTBBreatherCD70Controller::class);
    Route::name('admininline.tbBreather-CD70.index')->get('admin/inline/tbBreather-CD70',[AdminQAInlineTBBreatherCD70Controller::class,'index']);


    Route::resource('/admin/inline/tbBreather-CG125',AdminQAInlineTBBreatherCG125Controller::class);
    Route::name('admininline.tbBreather-CG125.index')->get('admin/inline/tbBreather-CG125',[AdminQAInlineTBBreatherCG125Controller::class,'index']);


    Route::resource('/admin/inline/taBreather-CG125',AdminQAInlineTABreatherCG125Controller::class);
    Route::name('admininline.taBreather-CG125.index')->get('admin/inline/taBreather-CG125',[AdminQAInlineTABreatherCG125Controller::class,'index']);


    Route::resource('/admin/inline/tSuctionCG125',AdminQAInlineTSuctionCG125Controller::class);
    Route::name('admininline.tSuctionCG125.index')->get('admin/inline/tSuctionCG125',[AdminQAInlineTSuctionCG125Controller::class,'index']);


    Route::resource('/admin/inline/t8X150CG125',AdminQAInlineT8X150CG125Controller::class);
    Route::name('admininline.t8X150CG125.index')->get('admin/inline/t8X150CG125',[AdminQAInlineT8X150CG125Controller::class,'index']);


    Route::resource('/admin/inline/tBreatherPridor',AdminQAInlineTBreatherPridorController::class);
    Route::name('admininline.tBreatherPridor.index')->get('admin/inline/tBreatherPridor',[AdminQAInlineTBreatherPridorController::class,'index']);


    Route::resource('admin/inline/tBreatherDeluxe',AdminQAInlineTBreatherDLXController::class);
    Route::name('admininline.tBreatherDeluxe.index')->get('admin/inline/tBreatherDeluxe',[AdminQAInlineTBreatherDLXController::class,'index']);


    Route::resource('admin/inline/t4X440KOKA',AdminQAInlineT4X440KOKAController::class);
    Route::name('admininline.t4X440KOKA.index')->get('admin/inline/t4X440KOKA',[AdminQAInlineT4X440KOKAController::class,'index']);


    Route::resource('admin/inline/tBreatherKOKA',AdminQAInlineTBreatherKOKAController::class);
    Route::name('admininline.tBreatherKOKA.index')->get('admin/inline/tBreatherKOKA',[AdminQAInlineTBreatherKOKAController::class,'index']);


    Route::resource('admin/inline/tSuctionKOKA',AdminQAInlineTSuctionKOKAController::class);
    Route::name('admininline.tSuctionKOKA.index')->get('admin/inline/tSuctionKOKA',[AdminQAInlineTSuctionKOKAController::class,'index']);


    Route::resource('admin/inline/CshnFrntFuelTnkDLX',AdminQAInlineCshnFrntFuelTnkDLXController::class);
    Route::name('admininline.CshnFrntFuelTnkDLX.index')->get('admin/inline/CshnFrntFuelTnkDLX',[AdminQAInlineCshnFrntFuelTnkDLXController::class,'index']);


    Route::resource('admin/inline/RbrMflrMntDLX',AdminQAInlineRbrMflrMntDLXController::class);
    Route::name('admininline.RbrMflrMntDLX.index')->get('admin/inline/RbrMflrMntDLX',[AdminQAInlineRbrMflrMntDLXController::class,'index']);


    Route::resource('admin/inline/GrmtSideCvrDLX',AdminQAInlineGrSideCvrDLXController::class);
    Route::name('admininline.GrmtSideCvrDLX.index')->get('admin/inline/GrmtSideCvrDLX',[AdminQAInlineGrSideCvrDLXController::class,'index']);


    Route::resource('admin/inline/GrmtARearCvrCD100',AdminQAInlineGrARearCvrCD100Controller::class);
    Route::name('admininline.GrmtARearCvrCD100.index')->get('admin/inline/GrmtARearCvrCD100',[AdminQAInlineGrARearCvrCD100Controller::class,'index']);


    Route::resource('admin/inline/RbrHndlCshnCD100',AdminQAInlineRbrHndlCshnCD100Controller::class);
    Route::name('admininline.RbrHndlCshnCD100.index')->get('admin/inline/RbrHndlCshnCD100',[AdminQAInlineRbrHndlCshnCD100Controller::class,'index']);


    Route::resource('admin/inline/UndrRbrHndlCD100',AdminQAInlineUndrRbrHndlCD100Controller::class);
    Route::name('admininline.UndrRbrHndlCD100.index')->get('admin/inline/UndrRbrHndlCD100',[AdminQAInlineUndrRbrHndlCD100Controller::class,'index']);


    Route::resource('admin/inline/PckngRbrCD100',AdminQAInlinePckingRbrCD100Controller::class);
    Route::name('admininline.PckngRbrCD100.index')->get('admin/inline/PckngRbrCD100',[AdminQAInlinePckingRbrCD100Controller::class,'index']);


    Route::resource('admin/inline/GrmtCD70',AdminQAInlineGrCD70Controller::class);
    Route::name('admininline.GrmtCD70.index')->get('admin/inline/GrmtCD70',[AdminQAInlineGrCD70Controller::class,'index']);


    Route::resource('admin/inline/GrmtCG125',AdminQAInlineGrCG125Controller::class);
    Route::name('admininline.GrmtCG125.index')->get('admin/inline/GrmtCG125',[AdminQAInlineGrCG125Controller::class,'index']);


    Route::resource('admin/inline/tBtryBreatherDLX',AdminQAInlineTBtryBreatherDLXController::class);
    Route::name('admininline.tBtryBreatherDLX.index')->get('admin/inline/tBtryBreatherDLX',[AdminQAInlineTBtryBreatherDLXController::class,'index']);


    Route::resource('admin/inline/tBtryBreatherCD70',AdminQAInlineTBtryBreatherCD70Controller::class);
    Route::name('admininline.tBtryBreatherCD70.index')->get('admin/inline/tBtryBreatherCD70',[AdminQAInlineTBtryBreatherCD70Controller::class,'index']);


    Route::resource('admin/inline/tBtryBreatherCG125',AdminQAInlineTBtryBreatherCG125Controller::class);
    Route::name('admininline.tBtryBreatherCG125.index')->get('admin/inline/tBtryBreatherCG125',[AdminQAInlineTBtryBreatherCG125Controller::class,'index']);


    Route::resource('admin/inline/tBtryBreatherCD100',AdminQAInlineTBtryBreatherCD100Controller::class);
    Route::name('admininline.tBtryBreatherCD100.index')->get('admin/inline/tBtryBreatherCD100',[AdminQAInlineTBtryBreatherCD100Controller::class,'index']);


    Route::resource('admin/inline/tBtryBreatherKSW',AdminQAInlineTBtryBreatherKSWController::class);
    Route::name('admininline.tBtryBreatherKSW.index')->get('admin/inline/tBtryBreatherKSW',[AdminQAInlineTBtryBreatherKSWController::class,'index']);


    Route::resource('admin/inline/tBtryBreatherKOKA',AdminQAInlineTBtryBreatherKOKAController::class);
    Route::name('admininline.tBtryBreatherKOKA.index')->get('admin/inline/tBtryBreatherKOKA',[AdminQAInlineTBtryBreatherKOKAController::class,'index']);


    Route::resource('admin/inline/tCompfuelKOKA',AdminQAInlineTCompFuelKOKAController::class);
    Route::name('admininline.tCompfuelKOKA.index')->get('admin/inline/tCompfuelKOKA',[AdminQAInlineTCompFuelKOKAController::class,'index']);






    // Monthly Results Controllers

    Route::resource('admin/monthly/tCompFuelDLX',AdminQAMonthlyTCompFuelDLXController::class);
    Route::name('adminmonthly.tCompFuelDLX.index')->get('admin/monthly/tCompFuelDLX',[AdminQAMonthlyTCompFuelDLXController::class,'index']);
    Route::get('monthly/tCompFuelDLX/search_data', [AdminQAMonthlyTCompFuelDLXController::class,'search_data'])->name('adminsearch.tCompFuelDLX');



    Route::resource('admin/monthly/tfuelCG125',AdminQAMonthlyTFuelCG125Controller::class);
    Route::name('adminmonthly.tfuelCG125.index')->get('admin/monthly/tfuelCG125',[AdminQAMonthlyTFuelCG125Controller::class,'index']);
    Route::get('monthly/tfuelCG125/search_data', [AdminQAMonthlyTFuelCG125Controller::class,'search_data'])->name('adminsearch.tfuelCG125');



    Route::resource('admin/monthly/tfuelCD-100',AdminQAMonthlyTFuelCD100Controller::class);
    Route::name('adminmonthly.tfuelCD-100.index')->get('admin/monthly/tfuelCD-100',[AdminQAMonthlyTFuelCD100Controller::class,'index']);
    Route::get('monthly/tfuelCD-100/search_data', [AdminQAMonthlyTFuelCD100Controller::class,'search_data'])->name('adminsearch.tfuelCD100');



    Route::resource('admin/monthly/tfuelCD-70',AdminQAMonthlyTFuelCD70Controller::class);
    Route::name('adminmonthly.tfuelCD-70.index')->get('admin/monthly/tfuelCD-70',[AdminQAMonthlyTFuelCD70Controller::class,'index']);
    Route::get('monthly/tfuelCD70/search_data', [AdminQAMonthlyTFuelCD70Controller::class,'search_data'])->name('adminsearch.tfuelCD70');



    Route::resource('admin/monthly/tASV-CG125',AdminQAMonthlyTASVControlCG125Controller::class);
    Route::name('adminmonthly.tASV-CG125.index')->get('admin/monthly/tASV-CG125',[AdminQAMonthlyTASVControlCG125Controller::class,'index']);
    Route::get('monthly/tASV-CG125/search_data', [AdminQAMonthlyTASVControlCG125Controller::class,'search_data'])->name('adminsearch.tASVCG125');



    Route::resource('admin/monthly/tbBreather-CD70',AdminQAMonthlyTBBreatherCD70Controller::class);
    Route::name('adminmonthly.tbBreather-CD70.index')->get('admin/monthly/tbBreather-CD70',[AdminQAMonthlyTBBreatherCD70Controller::class,'index']);
    Route::get('monthly/tbBreather-CD70/search_data', [AdminQAMonthlyTBBreatherCD70Controller::class,'search_data'])->name('adminsearch.tbBreather-CD70');



    Route::resource('/admin/monthly/tbBreather-CG125',AdminQAMonthlyTBBreatherCG125Controller::class);
    Route::name('adminmonthly.tbBreather-CG125.index')->get('admin/monthly/tbBreather-CG125',[AdminQAMonthlyTBBreatherCG125Controller::class,'index']);
    Route::get('monthly/tbBreather-CG125/search_data', [AdminQAMonthlyTBBreatherCG125Controller::class,'search_data'])->name('adminsearch.tbBreather-CG125');



    Route::resource('/admin/monthly/taBreather-CG125',AdminQAMonthlyTABreatherCG125Controller::class);
    Route::name('adminmonthly.taBreather-CG125.index')->get('admin/monthly/taBreather-CG125',[AdminQAMonthlyTABreatherCG125Controller::class,'index']);
    Route::get('monthly/taBreather-CG125/search_data', [AdminQAMonthlyTABreatherCG125Controller::class,'search_data'])->name('adminsearch.taBreather-CG125');



    Route::resource('/admin/monthly/tSuctionCG125',AdminQAMonthlyTSuctionCG125Controller::class);
    Route::name('adminmonthly.tSuctionCG125.index')->get('admin/monthly/tSuctionCG125',[AdminQAMonthlyTSuctionCG125Controller::class,'index']);
    Route::get('monthly/tSuctionCG125/search_data', [AdminQAMonthlyTSuctionCG125Controller::class,'search_data'])->name('adminsearch.tSuctionCG125');



    Route::resource('/admin/monthly/t8X150CG125',AdminQAMonthlyT8X150CG125Controller::class);
    Route::name('adminmonthly.t8X150CG125.index')->get('admin/monthly/t8X150CG125',[AdminQAMonthlyT8X150CG125Controller::class,'index']);
    Route::get('monthly/t8X150CG125/search_data', [AdminQAMonthlyT8X150CG125Controller::class,'search_data'])->name('adminsearch.t8X150CG125');



    Route::resource('/admin/monthly/tBreatherPridor',AdminQAMonthlyTBreatherPridorController::class);
    Route::name('adminmonthly.tBreatherPridor.index')->get('admin/monthly/tBreatherPridor',[AdminQAMonthlyTBreatherPridorController::class,'index']);
    Route::get('monthly/tBreatherPridor/search_data', [AdminQAMonthlyTBreatherPridorController::class,'search_data'])->name('adminsearch.tBreatherPridor');



    Route::resource('admin/monthly/tBreatherDeluxe',AdminQAMonthlyTBreatherDLXController::class);
    Route::name('adminmonthly.tBreatherDeluxe.index')->get('admin/monthly/tBreatherDeluxe',[AdminQAMonthlyTBreatherDLXController::class,'index']);
    Route::get('monthly/tBreatherDeluxe/search_data', [AdminQAMonthlyTBreatherDLXController::class,'search_data'])->name('adminsearch.tBreatherDeluxe');



    Route::resource('admin/monthly/t4X440KOKA',AdminQAMonthlyT4X440KOKAController::class);
    Route::name('adminmonthly.t4X440KOKA.index')->get('admin/monthly/t4X440KOKA',[AdminQAMonthlyT4X440KOKAController::class,'index']);
    Route::get('monthly/t4X440KOKA/search_data', [AdminQAMonthlyT4X440KOKAController::class,'search_data'])->name('adminsearch.t4X440KOKA');



    Route::resource('admin/monthly/tBreatherKOKA',AdminQAMonthlyTBreatherKOKAController::class);
    Route::name('adminmonthly.tBreatherKOKA.index')->get('admin/monthly/tBreatherKOKA',[AdminQAMonthlyTBreatherKOKAController::class,'index']);
    Route::get('monthly/tBreatherKOKA/search_data', [AdminQAMonthlyTBreatherKOKAController::class,'search_data'])->name('adminsearch.tBreatherKOKA');



    Route::resource('admin/monthly/tSuctionKOKA',AdminQAMonthlyTSuctionKOKAController::class);
    Route::name('adminmonthly.tSuctionKOKA.index')->get('admin/monthly/tSuctionKOKA',[AdminQAMonthlyTSuctionKOKAController::class,'index']);
    Route::get('monthly/tSuctionKOKA/search_data', [AdminQAMonthlyTSuctionKOKAController::class,'search_data'])->name('adminsearch.tSuctionKOKA');



    Route::resource('admin/monthly/CshnFrntFuelTnkDLX',AdminQAMonthlyCshnFrntFuelTnkDLXController::class);
    Route::name('adminmonthly.CshnFrntFuelTnkDLX.index')->get('admin/monthly/CshnFrntFuelTnkDLX',[AdminQAMonthlyCshnFrntFuelTnkDLXController::class,'index']);
    Route::get('monthly/CshnFrntFuelTnkDLX/search_data', [AdminQAMonthlyCshnFrntFuelTnkDLXController::class,'search_data'])->name('adminsearch.CshnFrntFuelTnkDLX');



    Route::resource('admin/monthly/RbrMflrMntDLX',AdminQAMonthlyRbrMflrMntDLXController::class);
    Route::name('adminmonthly.RbrMflrMntDLX.index')->get('admin/monthly/RbrMflrMntDLX',[AdminQAMonthlyRbrMflrMntDLXController::class,'index']);
    Route::get('monthly/RbrMflrMntDLX/search_data', [AdminQAMonthlyRbrMflrMntDLXController::class,'search_data'])->name('adminsearch.RbrMflrMntDLX');



    Route::resource('admin/monthly/GrmtSideCvrDLX',AdminQAMonthlyGrSideCvrDLXController::class);
    Route::name('adminmonthly.GrmtSideCvrDLX.index')->get('admin/monthly/GrmtSideCvrDLX',[AdminQAMonthlyGrSideCvrDLXController::class,'index']);
    Route::get('monthly/GrmtSideCvrDLX/search_data', [AdminQAMonthlyGrSideCvrDLXController::class,'search_data'])->name('adminsearch.GrmtSideCvrDLX');



    Route::resource('admin/monthly/GrmtARearCvrCD100',AdminQAMonthlyGrARearCvrCD100Controller::class);
    Route::name('adminmonthly.GrmtARearCvrCD100.index')->get('admin/monthly/GrmtARearCvrCD100',[AdminQAMonthlyGrARearCvrCD100Controller::class,'index']);
    Route::get('monthly/GrmtARearCvrCD100/search_data', [AdminQAMonthlyGrARearCvrCD100Controller::class,'search_data'])->name('adminsearch.GrmtARearCvrCD100');



    Route::resource('admin/monthly/RbrHndlCshnCD100',AdminQAMonthlyRbrHndlCshnCD100Controller::class);
    Route::name('adminmonthly.RbrHndlCshnCD100.index')->get('admin/monthly/RbrHndlCshnCD100',[AdminQAMonthlyRbrHndlCshnCD100Controller::class,'index']);
    Route::get('monthly/RbrHndlCshnCD100/search_data', [AdminQAMonthlyRbrHndlCshnCD100Controller::class,'search_data'])->name('adminsearch.RbrHndlCshnCD100');



    Route::resource('admin/monthly/UndrRbrHndlCD100',AdminQAMonthlyUndrRbrHndlCD100Controller::class);
    Route::name('adminmonthly.UndrRbrHndlCD100.index')->get('admin/monthly/UndrRbrHndlCD100',[AdminQAMonthlyUndrRbrHndlCD100Controller::class,'index']);
    Route::get('monthly/UndrRbrHndlCD100/search_data', [AdminQAMonthlyUndrRbrHndlCD100Controller::class,'search_data'])->name('adminsearch.UndrRbrHndlCD100');



    Route::resource('admin/monthly/PckngRbrCD100',AdminQAMonthlyPckingRbrCD100Controller::class);
    Route::name('adminmonthly.PckngRbrCD100.index')->get('admin/monthly/PckngRbrCD100',[AdminQAMonthlyPckingRbrCD100Controller::class,'index']);
    Route::get('monthly/PckngRbrCD100/search_data', [AdminQAMonthlyPckingRbrCD100Controller::class,'search_data'])->name('adminsearch.PckngRbrCD100');



    Route::resource('admin/monthly/GrmtCD70',AdminQAMonthlyGrCD70Controller::class);
    Route::name('adminmonthly.GrmtCD70.index')->get('admin/monthly/GrmtCD70',[AdminQAMonthlyGrCD70Controller::class,'index']);
    Route::get('monthly/GrmtCD70/search_data', [AdminQAMonthlyGrCD70Controller::class,'search_data'])->name('adminsearch.GrmtCD70');



    Route::resource('admin/monthly/GrmtCG125',AdminQAMonthlyGrCG125Controller::class);
    Route::name('adminmonthly.GrmtCG125.index')->get('admin/monthly/GrmtCG125',[AdminQAMonthlyGrCG125Controller::class,'index']);
    Route::get('monthly/GrmtCG125/search_data', [AdminQAMonthlyGrCG125Controller::class,'search_data'])->name('adminsearch.GrmtCG125');



    Route::resource('admin/monthly/tBtryBreatherDLX',AdminQAMonthlyTBtryBreatherDLXController::class);
    Route::name('adminmonthly.tBtryBreatherDLX.index')->get('admin/monthly/tBtryBreatherDLX',[AdminQAMonthlyTBtryBreatherDLXController::class,'index']);
    Route::get('monthly/tBtryBreatherDLX/search_data', [AdminQAMonthlyTBtryBreatherDLXController::class,'search_data'])->name('adminsearch.tBtryBreatherDLX');



    Route::resource('admin/monthly/tBtryBreatherCD70',AdminQAMonthlyTBtryBreatherCD70Controller::class);
    Route::name('adminmonthly.tBtryBreatherCD70.index')->get('admin/monthly/tBtryBreatherCD70',[AdminQAMonthlyTBtryBreatherCD70Controller::class,'index']);
    Route::get('monthly/tBtryBreatherCD70/search_data', [AdminQAMonthlyTBtryBreatherCD70Controller::class,'search_data'])->name('adminsearch.tBtryBreatherCD70');



    Route::resource('admin/monthly/tBtryBreatherCG125',AdminQAMonthlyTBtryBreatherCG125Controller::class);
    Route::name('adminmonthly.tBtryBreatherCG125.index')->get('admin/monthly/tBtryBreatherCG125',[AdminQAMonthlyTBtryBreatherCG125Controller::class,'index']);
    Route::get('monthly/tBtryBreatherCG125/search_data', [AdminQAMonthlyTBtryBreatherCG125Controller::class,'search_data'])->name('adminsearch.tBtryBreatherCG125');



    Route::resource('admin/monthly/tBtryBreatherCD100',AdminQAMonthlyTBtryBreatherCD100Controller::class);
    Route::name('adminmonthly.tBtryBreatherCD100.index')->get('admin/monthly/tBtryBreatherCD100',[AdminQAMonthlyTBtryBreatherCD100Controller::class,'index']);
    Route::get('monthly/tBtryBreatherCD100/search_data', [AdminQAMonthlyTBtryBreatherCD100Controller::class,'search_data'])->name('adminsearch.tBtryBreatherCD100');



    Route::resource('admin/monthly/tBtryBreatherKSW',AdminQAMonthlyTBtryBreatherKSWController::class);
    Route::name('adminmonthly.tBtryBreatherKSW.index')->get('admin/monthly/tBtryBreatherKSW',[AdminQAMonthlyTBtryBreatherKSWController::class,'index']);
    Route::get('monthly/tBtryBreatherKSW/search_data', [AdminQAMonthlyTBtryBreatherKSWController::class,'search_data'])->name('adminsearch.tBtryBreatherKSW');



    Route::resource('admin/monthly/tBtryBreatherKOKA',AdminQAMonthlyTBtryBreatherKOKAController::class);
    Route::name('adminmonthly.tBtryBreatherKOKA.index')->get('admin/monthly/tBtryBreatherKOKA',[AdminQAMonthlyTBtryBreatherKOKAController::class,'index']);
    Route::get('monthly/tBtryBreatherKOKA/search_data', [AdminQAMonthlyTBtryBreatherKOKAController::class,'search_data'])->name('adminsearch.tBtryBreatherKOKA');



    Route::resource('admin/monthly/tCompfuelKOKA',AdminQAMonthlyTCompFuelKOKAController::class);
    Route::name('adminmonthly.tCompfuelKOKA.index')->get('admin/monthly/tCompfuelKOKA',[AdminQAMonthlyTCompFuelKOKAController::class,'index']);
    Route::get('monthly/tCompfuelKOKA/search_data', [AdminQAMonthlyTCompFuelKOKAController::class,'search_data'])->name('adminsearch.tCompfuelKOKA');



    // Summary Controller



    Route::resource('admin/summary/quality',AdminQASummaryController::class);
    Route::name('adminmonthly.summary.index')->get('admin/summary/quality',[AdminQASummaryController::class,'index']);
    Route::get('admin/summary/search_data', [AdminQASummaryController::class,'search_data'])->name('adminsearch.summary');


    // X-R chart controller

    Route::resource('admin/XR', AdminQAXRController::class);
    Route::get('XR/search_data',[AdminQAXRController::class,'search_data'])->name('adminsearch.xr');

    // Capability Report

    Route::resource('admin/capability', AdminQACapabilityController::class);
    Route::get('capability/search_data',[AdminQACapabilityController::class,'search_data'])->name('adminsearch.capability');

    Route::resource('admin/pchart', AdminQAPChartController::class);
    Route::get('pchart/search_data',[AdminQAPChartController::class,'search_data'])->name('adminsearch.pchart');



    // Store
    Route::get('/admin/store', [AdminstoreController::class, 'index'])->name('admin.store.index');

    // Production
    Route::get('/admin/production', [AdminproductionController::class, 'index'])->name('admin.production.index');

     // Admin Production Controllers
    //Product Router
    Route::get('/admin/production/product', [AdminProductController::class, 'index'])->name('adminproduct.index');
    Route::get('/admin/production/product/create', [AdminProductController::class, 'create'])->name('adminproduct.create');
    Route::post('/admin/production/product', [AdminProductController::class, 'store'])->name('adminproduct.store');
    Route::get('/admin/production/product/{product}', [AdminProductController::class, 'show'])->name('adminproduct.show');
    Route::get('/admin/production/product/{product}/edit', [AdminProductController::class, 'edit'])->name('adminproduct.edit');
    Route::put('/admin/production/product/{product}', [AdminProductController::class, 'update'])->name('adminproduct.update');
    Route::delete('/admin/production/product/{product}', [AdminProductController::class, 'destroy'])->name('adminproduct.destroy');
    // Order Router
    Route::get('/admin/production/order', [AdminOrderController::class, 'index'])->name('adminorder.index');
    Route::get('/admin/production/order/create', [AdminOrderController::class, 'create'])->name('adminorder.create');
    Route::post('/admin/production/order', [AdminOrderController::class, 'store'])->name('adminorder.store');
    Route::get('/admin/production/order/{order}', [AdminOrderController::class, 'show'])->name('adminorder.show');
    Route::get('/admin/production/order/{order}/edit', [AdminOrderController::class, 'edit'])->name('adminorder.edit');
    Route::put('/admin/production/order/{order}', [AdminOrderController::class, 'update'])->name('adminorder.update');
    Route::delete('/admin/production/order/{order}', [AdminOrderController::class, 'destroy'])->name('adminorder.destroy');

    // Finance




      // Admin Hr ROutes  //


         // Add Departments Routes
Route::get('/admin/humanresources/departments', [AdminHrdepartmentsController::class, 'index'])->name('admin.humanresources.departments.index');
Route::get('/admin/humanresources/departments/create', [AdminHrdepartmentsController::class, 'create'])->name('admin.humanresources.departments.create');
Route::post('/admin/humanresources/departments/store', [AdminHrdepartmentsController::class, 'store'])->name('admin.humanresources.departments.store');
// Departments Edit Routes
Route::get('/admin/humanresources/departments/{id}/edit', [AdminHrdepartmentsController::class, 'edit'])->name('admin.humanresources.departments.edit');
Route::put('/admin/humanresources/departments/{id}/update', [AdminHrdepartmentsController::class, 'update'])->name('admin.humanresources.departments.update');
Route::delete('/admin/humanresources/departments/{id}', [AdminHrdepartmentsController::class, 'destroy'])->name('admin.humanresources.departments.destroy');
// End Departments Routes

// Add Hiring Routes
Route::get('/admin/humanresources/employee', [AdminHrhiringController::class, 'index'])->name('admin.humanresources.employee.index');
Route::get('/admin/humanresources/employee/create', [AdminHrhiringController::class, 'create'])->name('admin.humanresources.employee.create');
Route::post('/admin/humanresources/employee', [AdminHrhiringController::class, 'store'])->name('admin.humanresources.employee.store');
// Edit Hiring Routes
Route::get('/admin/humanresources/employee/{id}', [AdminHrhiringController::class, 'show'])->name('admin.humanresources.employee.show');
Route::get('/admin/humanresources/employee/{id}/edit', [AdminHrhiringController::class, 'edit'])->name('admin.humanresources.employee.edit');
Route::put('/admin/humanresources/employee/{id}', [AdminHrhiringController::class, 'update'])->name('admin.humanresources.employee.update');
Route::delete('/admin/humanresources/employee/{id}', [AdminHrhiringController::class, 'destroy'])->name('admin.humanresources.employee.destroy');
Route::get('/admin/humanresources/employee/search/search_data', [AdminHrhiringController::class, 'search_hiring'])->name('admin.search.employee');
// End Hiring Routes


// Add Loan Routes
Route::get('admin/humanresources/loan', [AdminHrloanController::class, 'index'])->name('admin.humanresources.loan.index');
Route::get('admin/humanresources/loan/create/{id}', [AdminHrloanController::class, 'create'])->name('admin.humanresources.loan.create');
Route::post('admin/humanresources/loan', [AdminHrloanController::class, 'store'])->name('admin.humanresources.loan.store');
// Edit Loan Routes
Route::get('admin/humanresources/loan/{id}', [AdminHrloanController::class, 'show'])->name('admin.humanresources.loan.show');
Route::get('admin/humanresources/loan/{id}/edit', [AdminHrloanController::class, 'edit'])->name('admin.humanresources.loan.edit');
Route::put('admin/humanresources/loan/{id}', [AdminHrloanController::class, 'update'])->name('admin.humanresources.loan.update');
Route::delete('admin/humanresources/loan/{id}', [AdminHrloanController::class, 'destroy'])->name('admin.humanresources.loan.destroy');
Route::get('admin/humanresources/monthly/loan/search_data', [AdminHrloanController::class, 'search_data'])->name('admin.search.loan');
// End Loan Routes
// Add Attendance Routes
Route::get('admin/humanresources/attendance', [adminHrattendanceController::class, 'index'])->name('admin.humanresources.attendance.index');
Route::get('admin/humanresources/attendance/create', [adminHrattendanceController::class, 'create'])->name('admin.humanresources.attendance.create');
Route::post('admin/humanresources/attendance', [adminHrattendanceController::class, 'store'])->name('admin.humanresources.attendance.store');
// Edit Attendance Routes
Route::get('admin/humanresources/attendance/{id}', [adminHrattendanceController::class, 'show'])->name('admin.humanresources.attendance.show');
Route::get('admin/humanresources/attendance/{id}/edit', [adminHrattendanceController::class, 'edit'])->name('admin.humanresources.attendance.edit');
Route::put('admin/humanresources/attendance/{id}', [adminHrattendanceController::class, 'update'])->name('admin.humanresources.attendance.update');
Route::delete('admin/humanresources/attendance/{id}', [adminHrattendanceController::class, 'destroy'])->name('admin.humanresources.attendance.destroy');
// End Attendance Routes

// Add Salary Routes
Route::get('admin/humanresources/salary', [adminHrsalaryController::class, 'index'])->name('admin.humanresources.salary.index');
Route::get('admin/humanresources/salary/create', [adminHrsalaryController::class, 'create'])->name('admin.humanresources.salary.create');
Route::post('admin/humanresources/salary', [adminHrsalaryController::class, 'store'])->name('admin.humanresources.salary.store');
// Edit Salary Routes
Route::get('admin/humanresources/salary/{id}', [adminHrsalaryController::class, 'show'])->name('admin.humanresources.salary.show');
Route::get('admin/humanresources/salary/{id}/edit', [adminHrsalaryController::class, 'edit'])->name('admin.humanresources.salary.edit');
Route::put('admin/humanresources/salary/{id}', [adminHrsalaryController::class, 'update'])->name('admin.humanresources.salary.update');
Route::delete('admin/humanresources/salary/{id}', [adminHrsalaryController::class, 'destroy'])->name('admin.humanresources.salary.destroy');
Route::get('admin/humanresources/salary/search/search_data', [adminHrsalaryController::class, 'search_data'])->name('admin.search.salary');
// End Salary Routes

// Add Orders Routes
Route::get('admin/humanresources/orders', [adminHrordersController::class, 'index'])->name('admin.humanresources.orders.index');
// Edit Orders Routes
Route::get('admin/humanresources/orders/{id}/edit', [adminHrordersController::class, 'edit'])->name('admin.humanresources.orders.edit');
Route::put('admin/humanresources/orders/{id}', [adminHrordersController::class, 'update'])->name('admin.humanresources.orders.update');
Route::delete('admin/humanresources/orders/{id}', [adminHrordersController::class, 'destroy'])->name('admin.humanresources.orders.destroy');
Route::get('admin/humanresources/order/confirmed', [adminHrordersController::class, 'orderconfirmed'])->name('admin.humanresources.orders.confirmed');
Route::get('admin/humanresources/orders/search/search_data', [adminHrordersController::class, 'search_order'])->name('admin.search.order');
// End Orders Routes

// Admin HR ROutes End//

// Funds Route //
Route::get('/admin/finance/fund', [AdminFinanceFundController::class, 'index'])->name('admin.finance.fund.index');
Route::get('/admin/finance/fund/create', [AdminFinanceFundController::class, 'create'])->name('admin.finance.fund.add');
Route::post('/admin/finance/fund/store', [AdminFinanceFundController::class, 'store'])->name('admin.finance.fund.store');
Route::get('/admin/finance/fund/{id}/edit', [AdminFinanceFundController::class, 'edit'])->name('admin.finance.fund.edit');
Route::put('/admin/finance/fund/{id}', [AdminFinanceFundController::class, 'update'])->name('admin.finance.fund.update');
Route::delete('/admin/finance/fund/{id}', [AdminFinanceFundController::class, 'destroy'])->name('admin.finance.fund.destroy');

// Expense
Route::get('/admin/finance/expense', [AdminFinanceExpenseController::class, 'index'])->name('admin.finance.expense.index');
Route::get('/admin/finance/expense/create', [AdminFinanceExpenseController::class, 'create'])->name('admin.finance.expense.add');
Route::post('/admin/finance/expense/store', [AdminFinanceExpenseController::class, 'store'])->name('admin.finance.expense.store');
Route::get('/admin/finance/expense/{id}/edit', [AdminFinanceExpenseController::class, 'edit'])->name('admin.finance.expense.edit');
Route::put('/admin/finance/expense/{id}', [AdminFinanceExpenseController::class, 'update'])->name('admin.finance.expense.update');
Route::delete('/admin/finance/expense/{id}', [AdminFinanceExpenseController::class, 'destroy'])->name('admin.finance.expense.destroy');


  // receipts
  Route::get('/admin/finance/receipt', [AdminFinanceReceiptController::class, 'index'])->name('admin.finance.receipt.index');
  Route::get('/admin/finance/receipt/create', [AdminFinanceReceiptController::class, 'create'])->name('admin.finance.receipt.add');
  Route::post('/admin/finance/receipt/store', [AdminFinanceReceiptController::class, 'store'])->name('admin.finance.receipt.store');
  Route::get('/admin/finance/receipt/{id}/edit', [AdminFinanceReceiptController::class, 'edit'])->name('admin.finance.receipt.edit');
  Route::put('/admin/finance/receipt/{id}', [AdminFinanceReceiptController::class, 'update'])->name('admin.finance.receipt.update');
  Route::delete('/admin/finance/receipt/{id}', [AdminFinanceReceiptController::class, 'destroy'])->name('admin.finance.receipt.destroy');


  // payments
  Route::get('/admin/finance/payment', [AdminFinancePaymentController::class, 'index'])->name('admin.finance.payment.index');
  Route::get('/admin/finance/payment/create', [AdminFinancePaymentController::class, 'create'])->name('admin.finance.payment.add');
  Route::post('/admin/finance/payment/store', [AdminFinancePaymentController::class, 'store'])->name('admin.finance.payment.store');
  Route::get('/admin/finance/payment/{id}/edit', [AdminFinancePaymentController::class, 'edit'])->name('admin.finance.payment.edit');
  Route::put('/admin/finance/payment/{id}', [AdminFinancePaymentController::class, 'update'])->name('admin.finance.payment.update');
  Route::delete('/admin/finance/payment/{id}', [AdminFinancePaymentController::class, 'destroy'])->name('admin.finance.payment.destroy');
// payslip
Route::get('/admin/finance/payslip', [AdminFinancePayslipController::class, 'index'])->name('admin.finance.payslip.index');
Route::get('/admin/finance/payslip/create', [AdminFinancePayslipController::class, 'create'])->name('admin.finance.payslip.add');
Route::post('/admin/finance/payslip/store', [AdminFinancePayslipController::class, 'store'])->name('admin.finance.payslip.store');
Route::get('/admin/finance/payslip/{id}/edit', [AdminFinancePayslipController::class, 'edit'])->name('admin.finance.payslip.edit');
Route::put('/admin/finance/payslip/{id}', [AdminFinancePayslipController::class, 'update'])->name('admin.finance.payslip.update');
Route::delete('/admin/finance/payslip/{id}', [AdminFinancePayslipController::class, 'destroy'])->name('finance.payslip.destroy');

// sale_invoice
Route::get('/admin/finance/sale_invoice', [AdminFinanceSaleInvoiceController::class, 'index'])->name('admin.finance.sale_invoice.index');
Route::get('/admin/finance/sale_invoice/create', [AdminFinanceSaleInvoiceController::class, 'create'])->name('admin.finance.sale_invoice.add');
Route::post('/admin/finance/sale_invoice/store', [AdminFinanceSaleInvoiceController::class, 'store'])->name('admin.finance.sale_invoice.store');
Route::get('/admin/finance/sale_invoice/{id}/edit', [AdminFinanceSaleInvoiceController::class, 'edit'])->name('admin.finance.sale_invoice.edit');
Route::put('/admin/finance/sale_invoice/{id}', [AdminFinanceSaleInvoiceController::class, 'update'])->name('admin.finance.sale_invoice.update');
Route::delete('/admin/finance/sale_invoice/{id}', [AdminFinanceSaleInvoiceController::class, 'destroy'])->name('admin.finance.sale_invoice.destroy');

// purchase_invoice
Route::get('/admin/finance/purchase_invoice', [AdminFinancePurchaseInvoiceController::class, 'index'])->name('admin.finance.purchase_invoice.index');
Route::get('/admin/finance/purchase_invoice/create', [AdminFinancePurchaseInvoiceController::class, 'create'])->name('admin.finance.purchase_invoice.add');
Route::post('/admin/finance/purchase_invoice/store', [AdminFinancePurchaseInvoiceController::class, 'store'])->name('admin.finance.purchase_invoice.store');
Route::get('/admin/finance/purchase_invoice/{id}/edit', [AdminFinancePurchaseInvoiceController::class, 'edit'])->name('admin.finance.purchase_invoice.edit');
Route::put('/admin/finance/purchase_invoice/{id}', [AdminFinancePurchaseInvoiceController::class, 'update'])->name('admin.finance.purchase_invoice.update');
Route::delete('/admin/finance/purchase_invoice/{id}', [AdminFinancePurchaseInvoiceController::class, 'destroy'])->name('admin.finance.purchase_invoice.destroy');


 //admin finance route start
 Route::get('/admin/finance', [AdminfinanceController::class, 'index'])->name('admin.finance.index');
 Route::get('admin/finance/purchaseorders', [adminfinanceorderController::class, 'index'])->name('adminfinance.orders.index');
 Route::get('admin/finance/purchaseorders/create', [adminfinanceorderController::class, 'create'])->name('adminfinance.orders.create');
 Route::post('admin/finance/purchaseorders', [adminfinanceorderController::class, 'store'])->name('adminfinance.orders.store');
 Route::get('admin/finance/purchaseorders/{id}', [adminfinanceorderController::class, 'show'])->name('adminfinance.orders.show');
 Route::get('admin/finance/purchaseorders/{id}/edit', [adminfinanceorderController::class, 'edit'])->name('adminfinance.orders.edit');
 Route::put('admin/finance/purchaseorders/{id}', [adminfinanceorderController::class, 'update'])->name('adminfinance.orders.update');
 Route::delete('admin/finance/purchaseorders/{id}', [adminfinanceorderController::class, 'destroy'])->name('adminfinance.orders.destroy');
 Route::get('admin/finance/purchaseorder/confirmed', [adminfinanceorderController::class, 'orderconfirmed'])->name('adminfinance.orders.orderconfirmed');
 Route::get('admin/finance/purchaseorders/search/search_data', [adminfinanceorderController::class, 'search_order'])->name('adminfinancesearch.order');
 Route::put('admin/finance/purchaseorders/{id}/confirm', [adminfinanceorderController::class, 'confirmOrder'])->name('adminorders.confirm');
 Route::get('admin/finance/employees', [adminfinanceemployeeController::class, 'index'])->name('adminfinance.employees.index');
 Route::get('admin/finance/employee/search/search_data', [adminfinanceemployeeController::class, 'search_hiring'])->name('adminfinancesearch.employees');
 Route::get('admin/finance/salary', [adminfinancesalaryController::class, 'index'])->name('adminfinance.salary.index');
 Route::get('admin/finance/salary/search/search_data', [adminfinancesalaryController::class, 'search_data'])->name('adminfinancesearch.salary');
 Route::get('admin/finance/loan', [adminfinanceloanController::class, 'index'])->name('adminfinance.loan.index');
 Route::get('admin/finance/monthly/loan/search_data', [adminfinanceloancontroller::class, 'search_data'])->name('adminfinancesearch.loan');
 //admin finance route End

});






Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');



//Human Resources Dashboard
//Human Resources Dashboard
Route::middleware(['auth', 'roles:hr'])->group(function(){
    Route::get('/hr/dashboard', [HrController::class, 'HrDashboard'])->name('hr.dashboard.index');
    Route::get('/hr/logout', [HrController::class, 'hrlogout'])->name('hr.logout');
    Route::get('/hr/profile', [HrController::class, 'hrProfile'])->name('hr.profile');
    Route::post('/hr/profile/store', [HrController::class, 'hrProfileStore'])->name('hr.profile.store');
    Route::get('/hr/change/password', [HrController::class, 'hrChangePassword'])->name('hr.change.password');
    Route::post('/hr/password/update', [HrController::class, 'hrPasswordUpdate'])->name('hr.password.update');




    //Add Departments Routes
    Route::get('/hr/departments', [HrdepartmentsController::class, 'index'])->name('hr.departments.index');
    Route::get('/hr/departments/create', [HrdepartmentsController::class, 'create'])->name('hr.departments.create');
    Route::post('/hr/departments/store', [HrdepartmentsController::class, 'store'])->name('hr.departments.store');
    //Departments Edit Routes
    Route::get('hr/departments/{id}/edit', [HrdepartmentsController::class, 'edit'])->name('hr.departments.edit');
    Route::put('hr/departments/{id}/update', [HrdepartmentsController::class, 'update'])->name('hr.departments.update');
    Route::delete('hr/departments/{id}', [HrdepartmentsController::class, 'destroy'])->name('hr.departments.destroy');
    // End Departments Routes

    // Add Hiring Routes
    Route::get('hr/employee', [HrEmployeeController::class, 'index'])->name('hr.employee.index');
    Route::get('hr/employee/create', [HrEmployeeController::class, 'create'])->name('hr.employee.create');
    Route::post('hr/employee', [HrEmployeeController::class, 'store'])->name('hr.employee.store');
    // Edit employee Routes
    Route::get('hr/employee/{id}', [HrEmployeeController::class, 'show'])->name('hr.employee.show');
    Route::get('hr/employee/{id}/edit', [HrEmployeeController::class, 'edit'])->name('hr.employee.edit');
    Route::put('hr/employee/{id}', [HrEmployeeController::class, 'update'])->name('hr.employee.update');
    Route::delete('hr/employee/{id}', [HrEmployeeController::class, 'destroy'])->name('hr.employee.destroy');
    Route::get('hr/employee/search/search_data', [HrEmployeeController::class, 'Employee_hiring'])->name('search.employee');
    // End Hiring Routes

    // Add Loan Routes
    Route::get('hr/loan', [HrloanController::class, 'index'])->name('hr.loan.index');
    // Route::get('hr/loan/create', [HrloanController::class, 'create'])->name('hr.loan.create');
    Route::get('hr/loan/add/{id}', [HrLoanController::class, 'create'])->name('hr.loan.add');

    Route::post('hr/loan', [HrloanController::class, 'store'])->name('hr.loan.store');
    // Edit Loan Routes
    Route::get('hr/loan/{id}', [HrloanController::class, 'show'])->name('hr.loan.show');
    Route::get('hr/loan/{id}/edit', [HrloanController::class, 'edit'])->name('hr.loan.edit');
    Route::put('hr/loan/{id}', [HrloanController::class, 'update'])->name('hr.loan.update');
    Route::delete('hr/loan/{id}', [HrloanController::class, 'destroy'])->name('hr.loan.destroy');
    Route::get('hr/monthly/loan/search_data', [HrloanController::class, 'search_data'])->name('search.loan');
    // End Loan Routes

    // Add Attendance Routes
    Route::get('hr/attendance', [HrattendanceController::class, 'index'])->name('hr.attendance.index');
    Route::get('hr/attendance/create', [HrattendanceController::class, 'create'])->name('hr.attendance.create');
    Route::post('hr/attendance', [HrattendanceController::class, 'store'])->name('hr.attendance.store');
    // Edit Attendance Routes
    Route::get('hr/attendance/{id}', [HrattendanceController::class, 'show'])->name('hr.attendance.show');
    Route::get('hr/attendance/{id}/edit', [HrattendanceController::class, 'edit'])->name('hr.attendance.edit');
    Route::put('hr/attendance/{id}', [HrattendanceController::class, 'update'])->name('hr.attendance.update');
    Route::delete('hr/attendance/{id}', [HrattendanceController::class, 'destroy'])->name('hr.attendance.destroy');
    // End Attendance Routes

    // Add Salary Routes
    Route::get('hr/salary', [HrsalaryController::class, 'index'])->name('hr.salary.index');
    Route::get('hr/salary/create', [HrsalaryController::class, 'create'])->name('hr.salary.create');
    Route::post('hr/salary', [HrsalaryController::class, 'store'])->name('hr.salary.store');
    // Edit Salary Routes
    Route::get('hr/salary/{id}', [HrsalaryController::class, 'show'])->name('hr.salary.show');
    Route::get('hr/salary/{id}/edit', [HrsalaryController::class, 'edit'])->name('hr.salary.edit');
    Route::put('hr/salary/{id}', [HrsalaryController::class, 'update'])->name('hr.salary.update');
    Route::delete('hr/salary/{id}', [HrsalaryController::class, 'destroy'])->name('hr.salary.destroy');
    Route::get('hr/salary/search/search_data', [HrsalaryController::class, 'search_data'])->name('search.salary');
    // End Salary Routes

    // Add Orders Routes
//     Route::get('hr/order', [HrordersController::class, 'index'])->name('hr.order.index');
// Route::get('hr/order/create', [StoreOrderController::class, 'create'])->name('hr.order.create');
//     Route::post('hr/order', [StoreOrderController::class, 'store'])->name('hr.order.store');
//     // Edit Orders Routes
//     Route::get('hr/order/{id}', [HrordersController::class, 'show'])->name('hr.order.show');
//     Route::get('hr/order/{id}/edit', [HrordersController::class, 'edit'])->name('hr.order.edit');
//     Route::put('hr/order/{id}', [HrordersController::class, 'update'])->name('hr.order.update');
//     Route::delete('hr/order/{id}', [HrordersController::class, 'destroy'])->name('hr.order.destroy');
//     // Route::get('hr/order/confirmed', [HrordersController::class, 'orderconfirmed']);
//     Route::get('hr/order/search/search_data', [HrordersController::class, 'search_order'])->name('search.order');

    // Order Tbale
Route::get('/hr/order', [HrordersController::class, 'index'])->name('hr.order.index');
Route::get('/hr/order/create', [HrordersController::class, 'create'])->name('hr.order.create');
Route::post('/hr/order', [HrordersController::class, 'store'])->name('hr.order.store');
Route::get('/hr/order/{id}', [HrordersController::class, 'show'])->name('hr.order.show');
Route::get('/hr/order/{id}/edit', [HrordersController::class, 'edit'])->name('hr.order.edit');
Route::put('/hr/order/{id}', [HrordersController::class, 'update'])->name('hr.order.update');
Route::delete('/hr/order/{id}', [HrordersController::class, 'destroy'])->name('hr.order.destroy');
Route::get('/hr/orderrr/search_data', [HrordersController::class, 'search'])->name('hr.order.search');

    // End Orders Routes

});

Route::get('/hr/hr_login', [HrController::class, 'HrLogin'])->name('hr.hr_login');



// Quality Routes
Route::middleware(['auth', 'roles:qa'])->group(function(){
    Route::get('/qa/dashboard', [QualityController::class, 'QualityDashboard'])->name('qa.dashboard.index');

    Route::get('/qa/logout', [QualityController::class, 'qualitylogout'])->name('qa.logout');
    Route::get('/qa/profile', [QualityController::class, 'qualityProfile'])->name('qa.profile');
    Route::post('/qa/profile/store', [QualityController::class, 'qualityProfileStore'])->name('qa.profile.store');
    Route::get('/qa/change/password', [QualityController::class, 'qualityChangePassword'])->name('qa.change.password');
    Route::post('/qa/password/update', [QualityController::class, 'qualityPasswordUpdate'])->name('qa.password.update');

    Route::resource('qa/file-upload',QualityAssuranceController::class);



// Inspectors Controller
// Order Tbale
Route::get('/qa/order', [QualityOrdercontroller::class, 'index'])->name('quality.order.index');
Route::get('/qa/order/create', [QualityOrdercontroller::class, 'create'])->name('quality.order.create');
Route::post('/qa/order', [QualityOrdercontroller::class, 'store'])->name('quality.order.store');
Route::get('/qa/order/{id}', [QualityOrdercontroller::class, 'show'])->name('quality.order.show');
Route::get('/qa/order/{id}/edit', [QualityOrdercontroller::class, 'edit'])->name('quality.order.edit');
Route::put('/qa/order/{id}', [QualityOrdercontroller::class, 'update'])->name('quality.order.update');
Route::delete('/qa/order/{id}', [QualityOrdercontroller::class, 'destroy'])->name('quality.order.destroy');
Route::get('/qa/storeorderrr/search_data', [QualityOrdercontroller::class, 'search'])->name('quality.order.search');


Route::resource('qa/inspectors',QAInspectorController::class);
Route::resource('qa/total/inspectors',QATotalInspectionController::class);

// Final Rejection Controllers



Route::resource('qa/product/tfuelCG-125',QATFuelCG125Controller::class);
Route::name('final.tfuelCG-125.index')->get('qa/product/tfuelCG-125',[QATFuelCG125Controller::class,'index']);

Route::resource('qa/product/tfuelCD-100',QATFuelCD100Controller::class);
Route::name('final.tfuelCD-100.index')->get('qa/product/tfuelCD-100',[QATFuelCD100Controller::class,'index']);


Route::resource('qa/product/tfuelCD-70',QATFuelCD70Controller::class);
Route::name('final.tfuelCD-70.index')->get('qa/product/tfuelCD-70',[QATFuelCD70Controller::class,'index']);


Route::resource('qa/product/tubeCompFuelDeluxe',QATCompFuelDLXController::class);
Route::name('final.tubeCompFuelDeluxe.index')->get('qa/product/tubeCompFuelDeluxe',[QATCompFuelDLXController::class,'index']);


Route::resource('qa/product/tASV-CG125',QATASVControlCG125Controller::class);
Route::name('final.tASV-CG125.index')->get('qa/product/tASV-CG125',[QATASVControlCG125Controller::class,'index']);


Route::resource('qa/product/tbBreather-CD70',QATBBreatherCD70Controller::class);
Route::name('final.tbBreather-CD70.index')->get('qa/product/tbBreather-CD70',[QATBBreatherCD70Controller::class,'index']);


Route::resource('/qa/product/tbBreather-CG125',QATBBreatherCG125Controller::class);
Route::name('final.tbBreather-CG125.index')->get('qa/product/tbBreather-CG125',[QATBBreatherCG125Controller::class,'index']);


Route::resource('/qa/product/taBreather-CG125',QATABreatherCG125Controller::class);
Route::name('final.taBreather-CG125.index')->get('qa/product/taBreather-CG125',[QATABreatherCG125Controller::class,'index']);


Route::resource('/qa/product/tSuctionCG125',QATSuctionCG125Controller::class);
Route::name('final.tSuctionCG125.index')->get('qa/product/tSuctionCG125',[QATSuctionCG125Controller::class,'index']);


Route::resource('/qa/product/t8X150CG125',QAT8X150CG125Controller::class);
Route::name('final.t8X150CG125.index')->get('qa/product/t8X150CG125',[QAT8X150CG125Controller::class,'index']);


Route::resource('/qa/product/tBreatherPridor',QATBreatherPridorController::class);
Route::name('final.tBreatherPridor.index')->get('qa/product/tBreatherPridor',[QATBreatherPridorController::class,'index']);


Route::resource('qa/product/tBreatherDeluxe',QATBreatherDLXController::class);
Route::name('final.tBreatherDeluxe.index')->get('qa/product/tBreatherDeluxe',[QATBreatherDLXController::class,'index']);


Route::resource('qa/product/t4X440KOKA',QAT4X440KOKAController::class);
Route::name('final.t4X440KOKA.index')->get('qa/product/t4X440KOKA',[QAT4X440KOKAController::class,'index']);


Route::resource('qa/product/tBreatherKOKA',QATBreatherKOKAController::class);
Route::name('final.tBreatherKOKA.index')->get('qa/product/tBreatherKOKA',[QATBreatherKOKAController::class,'index']);


Route::resource('qa/product/tSuctionKOKA',QATSuctionKOKAController::class);
Route::name('final.tSuctionKOKA.index')->get('qa/product/tSuctionKOKA',[QATSuctionKOKAController::class,'index']);


Route::resource('qa/product/CshnFrntFuelTnkDLX',QACshnFrntFuelTnkDLXController::class);
Route::name('final.CshnFrntFuelTnkDLX.index')->get('qa/product/CshnFrntFuelTnkDLX',[QACshnFrntFuelTnkDLXController::class,'index']);


Route::resource('qa/product/RbrMflrMntDLX',QARbrMflrMntDLXController::class);
Route::name('final.RbrMflrMntDLX.index')->get('qa/product/RbrMflrMntDLX',[QARbrMflrMntDLXController::class,'index']);


Route::resource('qa/product/GrmtSideCvrDLX',QAGrSideCvrDLXController::class);
Route::name('final.GrmtSideCvrDLX.index')->get('qa/product/GrmtSideCvrDLX',[QAGrSideCvrDLXController::class,'index']);


Route::resource('qa/product/GrmtARearCvrCD100',QAGrARearCvrCD100Controller::class);
Route::name('final.GrmtARearCvrCD100.index')->get('qa/product/GrmtARearCvrCD100',[QAGrARearCvrCD100Controller::class,'index']);


Route::resource('qa/product/RbrHndlCshnCD100',QARbrHndlCshnCD100Controller::class);
Route::name('final.RbrHndlCshnCD100.index')->get('qa/product/RbrHndlCshnCD100',[QARbrHndlCshnCD100Controller::class,'index']);


Route::resource('qa/product/UndrRbrHndlCD100',QAUndrRbrHndlCD100Controller::class);
Route::name('final.UndrRbrHndlCD100.index')->get('qa/product/UndrRbrHndlCD100',[QAUndrRbrHndlCD100Controller::class,'index']);


Route::resource('qa/product/PckngRbrCD100',QAPckingRbrCD100Controller::class);
Route::name('final.PckngRbrCD100.index')->get('qa/product/PckngRbrCD100',[QAPckingRbrCD100Controller::class,'index']);


Route::resource('qa/product/GrmtCD70',QAGrCD70Controller::class);
Route::name('final.GrmtCD70.index')->get('qa/product/GrmtCD70',[QAGrCD70Controller::class,'index']);


Route::resource('qa/product/GrmtCG125',QAGrCG125Controller::class);
Route::name('final.GrmtCG125.index')->get('qa/product/GrmtCG125',[QAGrCG125Controller::class,'index']);


Route::resource('qa/product/tBtryBreatherDLX',QATBtryBreatherDLXController::class);
Route::name('final.tBtryBreatherDLX.index')->get('qa/product/tBtryBreatherDLX',[QATBtryBreatherDLXController::class,'index']);


Route::resource('qa/product/tBtryBreatherCD70',QATBtryBreatherCD70Controller::class);
Route::name('final.tBtryBreatherCD70.index')->get('qa/product/tBtryBreatherCD70',[QATBtryBreatherCD70Controller::class,'index']);


Route::resource('qa/product/tBtryBreatherCG125',QATBtryBreatherCG125Controller::class);
Route::name('final.tBtryBreatherCG125.index')->get('qa/product/tBtryBreatherCG125',[QATBtryBreatherCG125Controller::class,'index']);


Route::resource('qa/product/tBtryBreatherCD100',QATBtryBreatherCD100Controller::class);
Route::name('final.tBtryBreatherCD100.index')->get('qa/product/tBtryBreatherCD100',[QATBtryBreatherCD100Controller::class,'index']);


Route::resource('qa/product/tBtryBreatherKSW',QATBtryBreatherKSWController::class);
Route::name('final.tBtryBreatherKSW.index')->get('qa/product/tBtryBreatherKSW',[QATBtryBreatherKSWController::class,'index']);


Route::resource('qa/product/tBtryBreatherKOKA',QATBtryBreatherKOKAController::class);
Route::name('final.tBtryBreatherKOKA.index')->get('qa/product/tBtryBreatherKOKA',[QATBtryBreatherKOKAController::class,'index']);


Route::resource('qa/product/tCompfuelKOKA',QATCompFuelKOKAController::class);
Route::name('final.tCompfuelKOKA.index')->get('qa/product/tCompfuelKOKA',[QATCompFuelKOKAController::class,'index']);







// Inline Rejection Controllers

Route::resource('qa/inline/tfuelCG125',QAInlineTubeFuelCG125Controller::class);
Route::name('inline.tfuelCG125.index')->get('qa/inline/tfuelCG125',[QAInlineTubeFuelCG125Controller::class,'index']);


Route::resource('qa/inline/tCompFuelDLX',QAInlineTCompFuelDeluxeController::class);
Route::name('inline.tCompFuelDLX.index')->get('qa/inline/tCompFuelDLX',[QAInlineTCompFuelDeluxeController::class,'index']);


Route::resource('qa/inline/tfuelCD-100',QAInlineTFuelCD100Controller::class);
Route::name('inline.tfuelCD-100.index')->get('qa/inline/tfuelCD-100',[QAInlineTFuelCD100Controller::class,'index']);


Route::resource('qa/inline/tfuelCD-70',QAInlineTFuelCD70Controller::class);
Route::name('inline.tfuelCD-70.index')->get('qa/inline/tfuelCD-70',[QAInlineTFuelCD70Controller::class,'index']);


Route::resource('qa/inline/tASV-CG125',QAInlineTASVControlCG125Controller::class);
Route::name('inline.tASV-CG125.index')->get('qa/inline/tASV-CG125',[QAInlineTASVControlCG125Controller::class,'index']);


Route::resource('qa/inline/tbBreather-CD70',QAInlineTBBreatherCD70Controller::class);
Route::name('inline.tbBreather-CD70.index')->get('qa/inline/tbBreather-CD70',[QAInlineTBBreatherCD70Controller::class,'index']);


Route::resource('/qa/inline/tbBreather-CG125',QAInlineTBBreatherCG125Controller::class);
Route::name('inline.tbBreather-CG125.index')->get('qa/inline/tbBreather-CG125',[QAInlineTBBreatherCG125Controller::class,'index']);


Route::resource('/qa/inline/taBreather-CG125',QAInlineTABreatherCG125Controller::class);
Route::name('inline.taBreather-CG125.index')->get('qa/inline/taBreather-CG125',[QAInlineTABreatherCG125Controller::class,'index']);


Route::resource('/qa/inline/tSuctionCG125',QAInlineTSuctionCG125Controller::class);
Route::name('inline.tSuctionCG125.index')->get('qa/inline/tSuctionCG125',[QAInlineTSuctionCG125Controller::class,'index']);


Route::resource('/qa/inline/t8X150CG125',QAInlineT8X150CG125Controller::class);
Route::name('inline.t8X150CG125.index')->get('qa/inline/t8X150CG125',[QAInlineT8X150CG125Controller::class,'index']);


Route::resource('/qa/inline/tBreatherPridor',QAInlineTBreatherPridorController::class);
Route::name('inline.tBreatherPridor.index')->get('qa/inline/tBreatherPridor',[QAInlineTBreatherPridorController::class,'index']);


Route::resource('qa/inline/tBreatherDeluxe',QAInlineTBreatherDLXController::class);
Route::name('inline.tBreatherDeluxe.index')->get('qa/inline/tBreatherDeluxe',[QAInlineTBreatherDLXController::class,'index']);


Route::resource('qa/inline/t4X440KOKA',QAInlineT4X440KOKAController::class);
Route::name('inline.t4X440KOKA.index')->get('qa/inline/t4X440KOKA',[QAInlineT4X440KOKAController::class,'index']);


Route::resource('qa/inline/tBreatherKOKA',QAInlineTBreatherKOKAController::class);
Route::name('inline.tBreatherKOKA.index')->get('qa/inline/tBreatherKOKA',[QAInlineTBreatherKOKAController::class,'index']);


Route::resource('qa/inline/tSuctionKOKA',QAInlineTSuctionKOKAController::class);
Route::name('inline.tSuctionKOKA.index')->get('qa/inline/tSuctionKOKA',[QAInlineTSuctionKOKAController::class,'index']);


Route::resource('qa/inline/CshnFrntFuelTnkDLX',QAInlineCshnFrntFuelTnkDLXController::class);
Route::name('inline.CshnFrntFuelTnkDLX.index')->get('qa/inline/CshnFrntFuelTnkDLX',[QAInlineCshnFrntFuelTnkDLXController::class,'index']);


Route::resource('qa/inline/RbrMflrMntDLX',QAInlineRbrMflrMntDLXController::class);
Route::name('inline.RbrMflrMntDLX.index')->get('qa/inline/RbrMflrMntDLX',[QAInlineRbrMflrMntDLXController::class,'index']);


Route::resource('qa/inline/GrmtSideCvrDLX',QAInlineGrSideCvrDLXController::class);
Route::name('inline.GrmtSideCvrDLX.index')->get('qa/inline/GrmtSideCvrDLX',[QAInlineGrSideCvrDLXController::class,'index']);


Route::resource('qa/inline/GrmtARearCvrCD100',QAInlineGrARearCvrCD100Controller::class);
Route::name('inline.GrmtARearCvrCD100.index')->get('qa/inline/GrmtARearCvrCD100',[QAInlineGrARearCvrCD100Controller::class,'index']);


Route::resource('qa/inline/RbrHndlCshnCD100',QAInlineRbrHndlCshnCD100Controller::class);
Route::name('inline.RbrHndlCshnCD100.index')->get('qa/inline/RbrHndlCshnCD100',[QAInlineRbrHndlCshnCD100Controller::class,'index']);


Route::resource('qa/inline/UndrRbrHndlCD100',QAInlineUndrRbrHndlCD100Controller::class);
Route::name('inline.UndrRbrHndlCD100.index')->get('qa/inline/UndrRbrHndlCD100',[QAInlineUndrRbrHndlCD100Controller::class,'index']);


Route::resource('qa/inline/PckngRbrCD100',QAInlinePckingRbrCD100Controller::class);
Route::name('inline.PckngRbrCD100.index')->get('qa/inline/PckngRbrCD100',[QAInlinePckingRbrCD100Controller::class,'index']);


Route::resource('qa/inline/GrmtCD70',QAInlineGrCD70Controller::class);
Route::name('inline.GrmtCD70.index')->get('qa/inline/GrmtCD70',[QAInlineGrCD70Controller::class,'index']);


Route::resource('qa/inline/GrmtCG125',QAInlineGrCG125Controller::class);
Route::name('inline.GrmtCG125.index')->get('qa/inline/GrmtCG125',[QAInlineGrCG125Controller::class,'index']);


Route::resource('qa/inline/tBtryBreatherDLX',QAInlineTBtryBreatherDLXController::class);
Route::name('inline.tBtryBreatherDLX.index')->get('qa/inline/tBtryBreatherDLX',[QAInlineTBtryBreatherDLXController::class,'index']);


Route::resource('qa/inline/tBtryBreatherCD70',QAInlineTBtryBreatherCD70Controller::class);
Route::name('inline.tBtryBreatherCD70.index')->get('qa/inline/tBtryBreatherCD70',[QAInlineTBtryBreatherCD70Controller::class,'index']);


Route::resource('qa/inline/tBtryBreatherCG125',QAInlineTBtryBreatherCG125Controller::class);
Route::name('inline.tBtryBreatherCG125.index')->get('qa/inline/tBtryBreatherCG125',[QAInlineTBtryBreatherCG125Controller::class,'index']);


Route::resource('qa/inline/tBtryBreatherCD100',QAInlineTBtryBreatherCD100Controller::class);
Route::name('inline.tBtryBreatherCD100.index')->get('qa/inline/tBtryBreatherCD100',[QAInlineTBtryBreatherCD100Controller::class,'index']);


Route::resource('qa/inline/tBtryBreatherKSW',QAInlineTBtryBreatherKSWController::class);
Route::name('inline.tBtryBreatherKSW.index')->get('qa/inline/tBtryBreatherKSW',[QAInlineTBtryBreatherKSWController::class,'index']);


Route::resource('qa/inline/tBtryBreatherKOKA',QAInlineTBtryBreatherKOKAController::class);
Route::name('inline.tBtryBreatherKOKA.index')->get('qa/inline/tBtryBreatherKOKA',[QAInlineTBtryBreatherKOKAController::class,'index']);


Route::resource('qa/inline/tCompfuelKOKA',QAInlineTCompFuelKOKAController::class);
Route::name('inline.tCompfuelKOKA.index')->get('qa/inline/tCompfuelKOKA',[QAInlineTCompFuelKOKAController::class,'index']);






// Monthly Results Controllers

Route::resource('qa/monthly/tCompFuelDLX',QAMonthlyTCompFuelDLXController::class);
Route::name('monthly.tCompFuelDLX.index')->get('qa/monthly/tCompFuelDLX',[QAMonthlyTCompFuelDLXController::class,'index']);
Route::get('monthly/tCompFuelDLX/search_data', [QAMonthlyTCompFuelDLXController::class,'search_data'])->name('search.tCompFuelDLX');



Route::resource('qa/monthly/tfuelCG125',QAMonthlyTFuelCG125Controller::class);
Route::name('monthly.tfuelCG125.index')->get('qa/monthly/tfuelCG125',[QAMonthlyTFuelCG125Controller::class,'index']);
Route::get('monthly/tfuelCG125/search_data', [QAMonthlyTFuelCG125Controller::class,'search_data'])->name('search.tfuelCG125');



Route::resource('qa/monthly/tfuelCD-100',QAMonthlyTFuelCD100Controller::class);
Route::name('monthly.tfuelCD-100.index')->get('qa/monthly/tfuelCD-100',[QAMonthlyTFuelCD100Controller::class,'index']);
Route::get('monthly/tfuelCD-100/search_data', [QAMonthlyTFuelCD100Controller::class,'search_data'])->name('search.tfuelCD100');



Route::resource('qa/monthly/tfuelCD-70',QAMonthlyTFuelCD70Controller::class);
Route::name('monthly.tfuelCD-70.index')->get('qa/monthly/tfuelCD-70',[QAMonthlyTFuelCD70Controller::class,'index']);
Route::get('monthly/tfuelCD70/search_data', [QAMonthlyTFuelCD70Controller::class,'search_data'])->name('search.tfuelCD70');



Route::resource('qa/monthly/tASV-CG125',QAMonthlyTASVControlCG125Controller::class);
Route::name('monthly.tASV-CG125.index')->get('qa/monthly/tASV-CG125',[QAMonthlyTASVControlCG125Controller::class,'index']);
Route::get('monthly/tASV-CG125/search_data', [QAMonthlyTASVControlCG125Controller::class,'search_data'])->name('search.tASV-CG125');



Route::resource('qa/monthly/tbBreather-CD70',QAMonthlyTBBreatherCD70Controller::class);
Route::name('monthly.tbBreather-CD70.index')->get('qa/monthly/tbBreather-CD70',[QAMonthlyTBBreatherCD70Controller::class,'index']);
Route::get('monthly/tbBreather-CD70/search_data', [QAMonthlyTBBreatherCD70Controller::class,'search_data'])->name('search.tbBreather-CD70');



Route::resource('/qa/monthly/tbBreather-CG125',QAMonthlyTBBreatherCG125Controller::class);
Route::name('monthly.tbBreather-CG125.index')->get('qa/monthly/tbBreather-CG125',[QAMonthlyTBBreatherCG125Controller::class,'index']);
Route::get('monthly/tbBreather-CG125/search_data', [QAMonthlyTBBreatherCG125Controller::class,'search_data'])->name('search.tbBreather-CG125');



Route::resource('/qa/monthly/taBreather-CG125',QAMonthlyTABreatherCG125Controller::class);
Route::name('monthly.taBreather-CG125.index')->get('qa/monthly/taBreather-CG125',[QAMonthlyTABreatherCG125Controller::class,'index']);
Route::get('monthly/taBreather-CG125/search_data', [QAMonthlyTABreatherCG125Controller::class,'search_data'])->name('search.taBreather-CG125');



Route::resource('/qa/monthly/tSuctionCG125',QAMonthlyTSuctionCG125Controller::class);
Route::name('monthly.tSuctionCG125.index')->get('qa/monthly/tSuctionCG125',[QAMonthlyTSuctionCG125Controller::class,'index']);
Route::get('monthly/tSuctionCG125/search_data', [QAMonthlyTSuctionCG125Controller::class,'search_data'])->name('search.tSuctionCG125');



Route::resource('/qa/monthly/t8X150CG125',QAMonthlyT8X150CG125Controller::class);
Route::name('monthly.t8X150CG125.index')->get('qa/monthly/t8X150CG125',[QAMonthlyT8X150CG125Controller::class,'index']);
Route::get('monthly/t8X150CG125/search_data', [QAMonthlyT8X150CG125Controller::class,'search_data'])->name('search.t8X150CG125');



Route::resource('/qa/monthly/tBreatherPridor',QAMonthlyTBreatherPridorController::class);
Route::name('monthly.tBreatherPridor.index')->get('qa/monthly/tBreatherPridor',[QAMonthlyTBreatherPridorController::class,'index']);
Route::get('monthly/tBreatherPridor/search_data', [QAMonthlyTBreatherPridorController::class,'search_data'])->name('search.tBreatherPridor');



Route::resource('qa/monthly/tBreatherDeluxe',QAMonthlyTBreatherDLXController::class);
Route::name('monthly.tBreatherDeluxe.index')->get('qa/monthly/tBreatherDeluxe',[QAMonthlyTBreatherDLXController::class,'index']);
Route::get('monthly/tBreatherDeluxe/search_data', [QAMonthlyTBreatherDLXController::class,'search_data'])->name('search.tBreatherDeluxe');



Route::resource('qa/monthly/t4X440KOKA',QAMonthlyT4X440KOKAController::class);
Route::name('monthly.t4X440KOKA.index')->get('qa/monthly/t4X440KOKA',[QAMonthlyT4X440KOKAController::class,'index']);
Route::get('monthly/t4X440KOKA/search_data', [QAMonthlyT4X440KOKAController::class,'search_data'])->name('search.t4X440KOKA');



Route::resource('qa/monthly/tBreatherKOKA',QAMonthlyTBreatherKOKAController::class);
Route::name('monthly.tBreatherKOKA.index')->get('qa/monthly/tBreatherKOKA',[QAMonthlyTBreatherKOKAController::class,'index']);
Route::get('monthly/tBreatherKOKA/search_data', [QAMonthlyTBreatherKOKAController::class,'search_data'])->name('search.tBreatherKOKA');



Route::resource('qa/monthly/tSuctionKOKA',QAMonthlyTSuctionKOKAController::class);
Route::name('monthly.tSuctionKOKA.index')->get('qa/monthly/tSuctionKOKA',[QAMonthlyTSuctionKOKAController::class,'index']);
Route::get('monthly/tSuctionKOKA/search_data', [QAMonthlyTSuctionKOKAController::class,'search_data'])->name('search.tSuctionKOKA');



Route::resource('qa/monthly/CshnFrntFuelTnkDLX',QAMonthlyCshnFrntFuelTnkDLXController::class);
Route::name('monthly.CshnFrntFuelTnkDLX.index')->get('qa/monthly/CshnFrntFuelTnkDLX',[QAMonthlyCshnFrntFuelTnkDLXController::class,'index']);
Route::get('monthly/CshnFrntFuelTnkDLX/search_data', [QAMonthlyCshnFrntFuelTnkDLXController::class,'search_data'])->name('search.CshnFrntFuelTnkDLX');



Route::resource('qa/monthly/RbrMflrMntDLX',QAMonthlyRbrMflrMntDLXController::class);
Route::name('monthly.RbrMflrMntDLX.index')->get('qa/monthly/RbrMflrMntDLX',[QAMonthlyRbrMflrMntDLXController::class,'index']);
Route::get('monthly/RbrMflrMntDLX/search_data', [QAMonthlyRbrMflrMntDLXController::class,'search_data'])->name('search.RbrMflrMntDLX');



Route::resource('qa/monthly/GrmtSideCvrDLX',QAMonthlyGrSideCvrDLXController::class);
Route::name('monthly.GrmtSideCvrDLX.index')->get('qa/monthly/GrmtSideCvrDLX',[QAMonthlyGrSideCvrDLXController::class,'index']);
Route::get('monthly/GrmtSideCvrDLX/search_data', [QAMonthlyGrSideCvrDLXController::class,'search_data'])->name('search.GrmtSideCvrDLX');



Route::resource('qa/monthly/GrmtARearCvrCD100',QAMonthlyGrARearCvrCD100Controller::class);
Route::name('monthly.GrmtARearCvrCD100.index')->get('qa/monthly/GrmtARearCvrCD100',[QAMonthlyGrARearCvrCD100Controller::class,'index']);
Route::get('monthly/GrmtARearCvrCD100/search_data', [QAMonthlyGrARearCvrCD100Controller::class,'search_data'])->name('search.GrmtARearCvrCD100');



Route::resource('qa/monthly/RbrHndlCshnCD100',QAMonthlyRbrHndlCshnCD100Controller::class);
Route::name('monthly.RbrHndlCshnCD100.index')->get('qa/monthly/RbrHndlCshnCD100',[QAMonthlyRbrHndlCshnCD100Controller::class,'index']);
Route::get('monthly/RbrHndlCshnCD100/search_data', [QAMonthlyRbrHndlCshnCD100Controller::class,'search_data'])->name('search.RbrHndlCshnCD100');



Route::resource('qa/monthly/UndrRbrHndlCD100',QAMonthlyUndrRbrHndlCD100Controller::class);
Route::name('monthly.UndrRbrHndlCD100.index')->get('qa/monthly/UndrRbrHndlCD100',[QAMonthlyUndrRbrHndlCD100Controller::class,'index']);
Route::get('monthly/UndrRbrHndlCD100/search_data', [QAMonthlyUndrRbrHndlCD100Controller::class,'search_data'])->name('search.UndrRbrHndlCD100');



Route::resource('qa/monthly/PckngRbrCD100',QAMonthlyPckingRbrCD100Controller::class);
Route::name('monthly.PckngRbrCD100.index')->get('qa/monthly/PckngRbrCD100',[QAMonthlyPckingRbrCD100Controller::class,'index']);
Route::get('monthly/PckngRbrCD100/search_data', [QAMonthlyPckingRbrCD100Controller::class,'search_data'])->name('search.PckngRbrCD100');



Route::resource('qa/monthly/GrmtCD70',QAMonthlyGrCD70Controller::class);
Route::name('monthly.GrmtCD70.index')->get('qa/monthly/GrmtCD70',[QAMonthlyGrCD70Controller::class,'index']);
Route::get('monthly/GrmtCD70/search_data', [QAMonthlyGrCD70Controller::class,'search_data'])->name('search.GrmtCD70');



Route::resource('qa/monthly/GrmtCG125',QAMonthlyGrCG125Controller::class);
Route::name('monthly.GrmtCG125.index')->get('qa/monthly/GrmtCG125',[QAMonthlyGrCG125Controller::class,'index']);
Route::get('monthly/GrmtCG125/search_data', [QAMonthlyGrCG125Controller::class,'search_data'])->name('search.GrmtCG125');



Route::resource('qa/monthly/tBtryBreatherDLX',QAMonthlyTBtryBreatherDLXController::class);
Route::name('monthly.tBtryBreatherDLX.index')->get('qa/monthly/tBtryBreatherDLX',[QAMonthlyTBtryBreatherDLXController::class,'index']);
Route::get('monthly/tBtryBreatherDLX/search_data', [QAMonthlyTBtryBreatherDLXController::class,'search_data'])->name('search.tBtryBreatherDLX');



Route::resource('qa/monthly/tBtryBreatherCD70',QAMonthlyTBtryBreatherCD70Controller::class);
Route::name('monthly.tBtryBreatherCD70.index')->get('qa/monthly/tBtryBreatherCD70',[QAMonthlyTBtryBreatherCD70Controller::class,'index']);
Route::get('monthly/tBtryBreatherCD70/search_data', [QAMonthlyTBtryBreatherCD70Controller::class,'search_data'])->name('search.tBtryBreatherCD70');



Route::resource('qa/monthly/tBtryBreatherCG125',QAMonthlyTBtryBreatherCG125Controller::class);
Route::name('monthly.tBtryBreatherCG125.index')->get('qa/monthly/tBtryBreatherCG125',[QAMonthlyTBtryBreatherCG125Controller::class,'index']);
Route::get('monthly/tBtryBreatherCG125/search_data', [QAMonthlyTBtryBreatherCG125Controller::class,'search_data'])->name('search.tBtryBreatherCG125');



Route::resource('qa/monthly/tBtryBreatherCD100',QAMonthlyTBtryBreatherCD100Controller::class);
Route::name('monthly.tBtryBreatherCD100.index')->get('qa/monthly/tBtryBreatherCD100',[QAMonthlyTBtryBreatherCD100Controller::class,'index']);
Route::get('monthly/tBtryBreatherCD100/search_data', [QAMonthlyTBtryBreatherCD100Controller::class,'search_data'])->name('search.tBtryBreatherCD100');



Route::resource('qa/monthly/tBtryBreatherKSW',QAMonthlyTBtryBreatherKSWController::class);
Route::name('monthly.tBtryBreatherKSW.index')->get('qa/monthly/tBtryBreatherKSW',[QAMonthlyTBtryBreatherKSWController::class,'index']);
Route::get('monthly/tBtryBreatherKSW/search_data', [QAMonthlyTBtryBreatherKSWController::class,'search_data'])->name('search.tBtryBreatherKSW');



Route::resource('qa/monthly/tBtryBreatherKOKA',QAMonthlyTBtryBreatherKOKAController::class);
Route::name('monthly.tBtryBreatherKOKA.index')->get('qa/monthly/tBtryBreatherKOKA',[QAMonthlyTBtryBreatherKOKAController::class,'index']);
Route::get('monthly/tBtryBreatherKOKA/search_data', [QAMonthlyTBtryBreatherKOKAController::class,'search_data'])->name('search.tBtryBreatherKOKA');



Route::resource('qa/monthly/tCompfuelKOKA',QAMonthlyTCompFuelKOKAController::class);
Route::name('monthly.tCompfuelKOKA.index')->get('qa/monthly/tCompfuelKOKA',[QAMonthlyTCompFuelKOKAController::class,'index']);
Route::get('monthly/tCompfuelKOKA/search_data', [QAMonthlyTCompFuelKOKAController::class,'search_data'])->name('search.tCompfuelKOKA');



// Summary Controller



Route::resource('qa/summary/quality',QASummaryController::class);
Route::name('monthly.summary.index')->get('qa/summary/quality',[QASummaryController::class,'index']);
Route::get('qa/summary/search_data', [QASummaryController::class,'search_data'])->name('search.summary');


// X-R chart controller

Route::resource('qa/XR', QAXRController::class);
Route::get('XR/search_data',[QAXRController::class,'search_data'])->name('search.xr');

// Capability Report

Route::resource('qa/capability', QACapabilityController::class);
Route::get('capability/search_data',[QACapabilityController::class,'search_data'])->name('search.capability');

Route::resource('qa/pchart', QAPChartController::class);
Route::get('pchart/search_data',[QAPChartController::class,'search_data'])->name('search.pchart');




});

Route::get('/quality/quality_login', [QualityController::class, 'qualityLogin'])->name('quality.quality_login');


// Store Routes
Route::middleware(['auth', 'roles:store'])->group(function(){
    Route::get('/store/dashboard', [StoreController::class, 'StoreDashboard'])->name('store.dashboard');
    Route::get('/store/logout', [StoreController::class, 'Storelogout'])->name('store.logout');
    Route::get('/store/profile', [StoreController::class, 'StoreProfile'])->name('store.profile');
    Route::post('/store/profile/store', [StoreController::class, 'StoreProfileStore'])->name('store.profile.store');
    Route::get('/store/change/password', [StoreController::class, 'StoreChangePassword'])->name('store.change.password');
    Route::post('/store/password/update', [StoreController::class, 'StorePasswordUpdate'])->name('store.password.update');
   // Raw materials routes
Route::get('/store/raw-material_in', [RawMaterialController::class, 'index'])->name('raw-material.index');
Route::get('/store/raw-material_in/create', [RawMaterialController::class, 'create'])->name('raw-material.create');
Route::post('/store/raw-material_in', [RawMaterialController::class, 'store'])->name('raw-material.store');
Route::get('/store/raw-material_in/{id}', [RawMaterialController::class, 'show'])->name('raw-material.show');
Route::get('/store/raw-material_in/{id}/edit', [RawMaterialController::class, 'edit'])->name('raw-material.edit');
Route::put('/store/raw-material_in/{id}', [RawMaterialController::class, 'update'])->name('raw-material.update');
Route::delete('/store/raw-material_in/{id}', [RawMaterialController::class, 'destroy'])->name('raw-material.destroy');
Route::get('/store/raw-material_in/search_data', [RawMaterialController::class, 'search'])->name('raw-material.search');


Route::get('/store/raw-materialout', [RawMaterialOutController::class, 'index'])->name('raw-materialout.index');
Route::get('/store/raw-materialout/create', [RawMaterialOutController::class, 'create'])->name('raw-materialout.create');
Route::post('/store/raw-materialout', [RawMaterialOutController::class, 'store'])->name('raw-materialout.store');
Route::get('/store/raw-materialout/{id}', [RawMaterialOutController::class, 'show'])->name('raw-materialout.show');
Route::get('/store/raw-materialout/{id}/edit', [RawMaterialOutController::class, 'edit'])->name('raw-materialout.edit');
Route::put('/store/raw-materialout/{id}', [RawMaterialOutController::class, 'update'])->name('raw-materialout.update');
Route::delete('/store/raw-materialout/{id}', [RawMaterialOutController::class, 'edit'])->name('raw-materialout.qi');
Route::get('/store/raw-materialoutt/search_data', [RawMaterialOutController::class, 'search'])->name('raw-materialout.search');
Route::get('/store/raw-materialoutt/search_data/title', [RawMaterialOutController::class, 'Title'])->name('raw-materialout.title.search');
// Route::get('/store/raw-materialout/fetch-quantity', [RawMaterialOutController::class, 'fetchQuantity'])->name('fetch.quantity');




// Inventory routes
Route::get('/store/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/store/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/store/inventory', [InventoryController::class, 'store'])->name('inventory.store');
Route::get('/store/inventory/{id}', [InventoryController::class, 'show'])->name('inventory.show');
Route::get('/store/inventory/{id}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::put('/store/inventory/{id}', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('/store/inventory/{id}', [InventoryController::class, 'destroy'])->name('inventory.destroy');
Route::get('/store/inventoryy/search_data', [InventoryController::class, 'search'])->name('inventory.search');

// Subsupplier routes
Route::get('/store/subsupplier', [SubsupplierController::class, 'index'])->name('subsupplier.index');
Route::get('/store/subsupplier/create', [SubsupplierController::class, 'create'])->name('subsupplier.create');
Route::post('/store/subsupplier', [SubsupplierController::class, 'store'])->name('subsupplier.store');
Route::get('/store/subsupplier/{id}', [SubsupplierController::class, 'show'])->name('subsupplier.show');
Route::get('/store/subsupplier/{id}/edit', [SubsupplierController::class, 'edit'])->name('subsupplier.edit');
Route::put('/store/subsupplier/{id}', [SubsupplierController::class, 'update'])->name('subsupplier.update');
Route::delete('/store/subsupplier/{id}', [SubsupplierController::class, 'destroy'])->name('subsupplier.destroy');
Route::get('/store/subsupplierrr/search_data', [SubsupplierController::class, 'search'])->name('subsupplier.search');

// Subsupplier purchase order routes
Route::get('/store/subsupplierr/purchase', [SubpurchaseController::class, 'index'])->name('subpurchase.index');
Route::get('/store/subsupplier/purchase/create', [SubpurchaseController::class, 'create'])->name('subpurchase.create');
Route::post('/store/subsupplier/purchase', [SubpurchaseController::class, 'store'])->name('subpurchase.store');
Route::get('/store/subsupplier/purchase/{id}', [SubpurchaseController::class, 'show'])->name('subpurchase.show');
Route::get('/store/subsupplier/purchase/{id}/edit', [SubpurchaseController::class, 'edit'])->name('subpurchase.edit');
Route::put('/store/subsupplier/purchase/{id}', [SubpurchaseController::class, 'update'])->name('subpurchase.update');
Route::delete('/store/subsupplier/purchase/{id}', [SubpurchaseController::class, 'destroy'])->name('subpurchase.destroy');
Route::get('/store/subsupplierrrrrr/search_data', [SubpurchaseController::class, 'search'])->name('subpurchase.search');

// Subsupplier order received routes
Route::get('/store/subsupplierrr/order', [SuborderController::class, 'index'])->name('suborder.index');
Route::get('/store/subsupplier/order/create', [SuborderController::class, 'create'])->name('suborder.create');
Route::post('/store/subsupplier/order', [SuborderController::class, 'store'])->name('suborder.store');
Route::get('/store/subsupplier/order/{id}', [SuborderController::class, 'show'])->name('suborder.show');
Route::get('/store/subsupplier/order/{id}/edit', [SuborderController::class, 'edit'])->name('suborder.edit');
Route::put('/store/subsupplier/order/{id}', [SuborderController::class, 'update'])->name('suborder.update');
Route::delete('/store/subsupplier/order/{id}', [SuborderController::class, 'destroy'])->name('suborder.destroy');
Route::get('/store/subsupplierr/search_data', [SuborderController::class, 'search'])->name('suborder.search');

// Product routes
Route::get('/store/product', [StoreProductController::class, 'index'])->name('storeproduct.index');
Route::get('/store/product/create', [StoreProductController::class, 'create'])->name('storeproduct.create');
Route::post('/store/product', [StoreProductController::class, 'store'])->name('storeproduct.store');
Route::get('/store/product/{id}', [StoreProductController::class, 'show'])->name('storeproduct.show');
Route::get('/store/product/{id}/edit', [StoreProductController::class, 'edit'])->name('storeproduct.edit');
Route::put('/store/product/{id}', [StoreProductController::class, 'update'])->name('storeproduct.update');
Route::delete('/store/product/{id}', [StoreProductController::class, 'destroy'])->name('storeproduct.destroy');
Route::get('/store/productt/search_data', [StoreProductController::class, 'search'])->name('storeproduct.search');

// Vendor routes
Route::get('/store/vendor', [VendorController::class, 'index'])->name('vendor.index');
Route::get('/store/vendor/create', [VendorController::class, 'create'])->name('vendor.create');
Route::post('/store/vendor', [VendorController::class, 'store'])->name('vendor.store');
Route::get('/store/vendor/{id}', [VendorController::class, 'show'])->name('vendor.show');
Route::get('/store/vendor/{id}/edit', [VendorController::class, 'edit'])->name('vendor.edit');
Route::put('/store/vendor/{id}', [VendorController::class, 'update'])->name('vendor.update');
Route::delete('/store/vendor/{id}', [VendorController::class, 'destroy'])->name('vendor.destroy');
Route::get('/store/vender/search_data', [VendorController::class, 'search'])->name('vendor.search');

// Stationary routes
Route::get('/store/stationary', [StationaryController::class, 'index'])->name('stationary.index');
Route::get('/store/stationary/create', [StationaryController::class, 'create'])->name('stationary.create');
Route::post('/store/stationary', [StationaryController::class, 'store'])->name('stationary.store');
Route::get('/store/stationary/{id}', [StationaryController::class, 'show'])->name('stationary.show');
Route::get('/store/stationary/{id}/edit', [StationaryController::class, 'edit'])->name('stationary.edit');
Route::put('/store/stationary/{id}', [StationaryController::class, 'update'])->name('stationary.update');
Route::delete('/store/stationary/{id}', [StationaryController::class, 'destroy'])->name('stationary.destroy');
Route::get('/store/stationaryy/search_data', [StationaryController::class, 'search'])->name('stationary.search');

// Stationary Particular routes
Route::get('/store/particular', [ParticularController::class, 'index'])->name('particular.index');
Route::get('/store/particular/create', [ParticularController::class, 'create'])->name('particular.create');
Route::post('/store/particular', [ParticularController::class, 'store'])->name('particular.store');
Route::get('/store/particular/{id}', [ParticularController::class, 'show'])->name('particular.show');
Route::get('/store/particular/{id}/edit', [ParticularController::class, 'edit'])->name('particular.edit');
Route::put('/store/particular/{id}', [ParticularController::class, 'update'])->name('particular.update');
Route::delete('/store/particular/{id}', [ParticularController::class, 'destroy'])->name('particular.destroy');
Route::get('/store/particular/search_data', [ParticularController::class, 'search'])->name('particular.search');


/// Quantity In Raw Metherial Products //

// Route::get('/store/rawbrandproduct', [RawbrandprodController::class, 'index'])->name('rawbrandproduct.indexx');
Route::get('/store/rawbrandproduct', [RawbrandprodController::class, 'index'])->name('rawbrandprod.indexx');

Route::get('/store/rawbrandproduct/quantityout', [RawbrandprodController::class, 'showQuantityOutForm'])->name('quantityout.show');
Route::post('/store/rawbrandproduct/quantityout', [RawbrandprodController::class, 'storeQuantityOut'])->name('quantityout.store');

Route::get('/store/rawbrandproduct/create', [RawbrandprodController::class, 'create'])->name('rawbrandprod.create');
Route::post('/store/rawbrandproduct', [RawbrandprodController::class, 'store'])->name('rawbrandprod.store');
Route::get('/store/rawbrandproduct/{id}', [RawbrandprodController::class, 'show'])->name('rawbrandprod.show');
Route::get('/store/rawbrandproduct/{id}/edit', [RawbrandprodController::class, 'edit'])->name('rawbrandprod.edit');
Route::put('/store/rawbrandproduct/{id}', [RawbrandprodController::class, 'update'])->name('rawbrandprod.update');
Route::delete('/store/rawbrandproduct/{id}', [RawbrandprodController::class, 'destroy'])->name('rawbrandprod.destroy');
Route::get('/store/rawbrandproduct/search_data', [RawbrandprodController::class, 'search'])->name('rawbrandprod.search');

// Raw Material Brand //

Route::get('/store/rawmaterialbrand', [RawbrandController::class, 'index'])->name('rawbrand.index');
Route::get('/store/rawmaterialbrand/create', [RawbrandController::class, 'create'])->name('rawbrand.create');
Route::post('/store/rawmaterialbrand', [RawbrandController::class, 'store'])->name('rawbrand.store');
Route::get('/store/rawmaterialbrand/{id}', [RawbrandController::class, 'show'])->name('rawbrand.show');
Route::get('/store/rawmaterialbrand/{id}/edit', [RawbrandController::class, 'edit'])->name('rawbrand.edit');
Route::put('/store/rawmaterialbrand/{id}', [RawbrandController::class, 'update'])->name('rawbrand.update');
Route::delete('/store/rawmaterialbrand/{id}', [RawbrandController::class, 'destroy'])->name('rawbrand.destroy');
Route::get('/store/rawmaterialbrandd/search_data', [RawbrandController::class, 'search'])->name('rawbrand.search');

// raw-materialbrand.index


// Order Tbale
Route::get('/store/order', [StoreOrderController::class, 'index'])->name('store.order.index');
Route::get('/store/order/create', [StoreOrderController::class, 'create'])->name('store.order.create');
Route::post('/store/order', [StoreOrderController::class, 'store'])->name('store.order.store');
Route::get('/store/order/{id}', [StoreOrderController::class, 'show'])->name('store.order.show');
Route::get('/store/order/{id}/edit', [StoreOrderController::class, 'edit'])->name('store.order.edit');
Route::put('/store/order/{id}', [StoreOrderController::class, 'update'])->name('store.order.update');
Route::delete('/store/order/{id}', [StoreOrderController::class, 'destroy'])->name('store.order.destroy');
Route::get('/store/orderrr/search_data', [StoreOrderController::class, 'search'])->name('store.order.search');


Route::get('/store/rawmaterialproduct', [RawMaterialProductController::class, 'index'])->name('rawmaterialproduct.index');
Route::get('/store/rawmaterialproduct/create', [RawMaterialProductController::class, 'create'])->name('rawmaterialproduct.create');
Route::post('/store/rawmaterialproduct', [RawMaterialProductController::class, 'store'])->name('rawmaterialproduct.store');
Route::get('/store/rawmaterialproduct/{id}', [RawMaterialProductController::class, 'show'])->name('rawmaterialproduct.show');
Route::get('/store/rawmaterialproduct/{id}/edit', [RawMaterialProductController::class, 'edit'])->name('rawmaterialproduct.edit');
Route::put('/store/rawmaterialproduct/{id}', [RawMaterialProductController::class, 'update'])->name('rawmaterialproduct.update');
Route::delete('/store/rawmaterialproduct/{id}', [RawMaterialProductController::class, 'destroy'])->name('rawmaterialproduct.destroy');
Route::get('/store/rawmaterialproductt/search_data', [RawMaterialProductController::class, 'search'])->name('rawmaterialproduct.search');

Route::get('/store/stationaryproduct', [StoreStationaryProductController::class, 'index'])->name('stock.index');
Route::get('/store/stationaryproduct/create', [StoreStationaryProductController::class, 'create'])->name('stock.create');
Route::post('/store/stationaryproduct', [StoreStationaryProductController::class, 'store'])->name('stock.store');
Route::get('/store/stationaryproduct/{id}', [StoreStationaryProductController::class, 'show'])->name('stock.show');
Route::get('/store/stationaryproduct/{id}/edit', [StoreStationaryProductController::class, 'edit'])->name('stock.edit');
Route::put('/store/stationaryproduct/{id}', [StoreStationaryProductController::class, 'update'])->name('stock.update');
Route::delete('/store/stationaryproduct/{id}', [StoreStationaryProductController::class, 'destroy'])->name('stock.destroy');
Route::get('/store/stationaryproduct/search_data', [StoreStationaryProductController::class, 'searchh'])->name('stock.search');

Route::get('/store/stationarycategory', [StorestationarycategoryController::class, 'index'])->name('stationarycategory.index');
Route::get('/store/stationarycategory/create', [StorestationarycategoryController::class, 'create'])->name('stationarycategory.create');
Route::post('/store/stationarycategory', [StorestationarycategoryController::class, 'store'])->name('stationarycategory.store');
Route::get('/store/stationarycategory/{id}', [StorestationarycategoryController::class, 'show'])->name('stationarycategory.show');
Route::get('/store/stationarycategory/{id}/edit', [StorestationarycategoryController::class, 'edit'])->name('stationarycategory.edit');
Route::put('/store/stationarycategory/{id}', [StorestationarycategoryController::class, 'update'])->name('stationarycategory.update');
Route::delete('/store/stationarycategory/{id}', [StorestationarycategoryController::class, 'destroy'])->name('stationarycategory.destroy');
Route::get('/store/searcch_data', [StorestationarycategoryController::class, 'searchh'])->name('stationarycategory.search');



// Route::get('/store/stationaryproduct', [StoreStationaryProductController::class, 'index'])->name('stationaryproduct.index');
// Route::get('/store/stationaryproduct/create', [StoreStationaryProductController::class, 'create'])->name('stationaryproduct.create');
// Route::post('/store/stationaryproduct', [StoreStationaryProductController::class, 'store'])->name('stationaryproduct.store');
// Route::get('/store/stationaryproduct/{id}', [StoreStationaryProductController::class, 'show'])->name('stationaryproduct.show');
// Route::get('/store/stationaryproduct/{id}/edit', [StoreStationaryProductController::class, 'edit'])->name('stationaryproduct.edit');
// Route::put('/store/stationaryproduct/{id}', [StoreStationaryProductController::class, 'update'])->name('stationaryproduct.update');
// Route::delete('/store/stationaryproduct/{id}', [StoreStationaryProductController::class, 'destroy'])->name('stationaryproduct.destroy');
// Route::get('/store/search_data', [StoreStationaryProductController::class, 'searchh'])->name('stationaryproduct.search');

});

Route::get('/store/store_login', [StoreController::class, 'Storelogin'])->name('store.store_login');


//Finance Routes
Route::middleware(['auth', 'roles:finance'])->group(function(){
    Route::get('/finance/dashboard', [FinanceController::class, 'FinanceDashboard'])->name('finance.dashboard.index');
    Route::get('/finance/logout', [FinanceController::class, 'financelogout'])->name('finance.logout');
    Route::get('/finance/profile', [FinanceController::class, 'financeProfile'])->name('finance.profile');
    Route::post('/finance/profile/store', [FinanceController::class, 'financeProfileStore'])->name('finance.profile.store');
    Route::get('/finance/change/password', [FinanceController::class, 'financeChangePassword'])->name('finance.change.password');
    Route::post('/finance/password/update', [FinanceController::class, 'financePasswordUpdate'])->name('finance.password.update');

    Route::get('/finance/purchaseorders', [financeorderController::class, 'index'])->name('finance.orders.index');
    Route::get('/finance/purchaseorders/create', [financeorderController::class, 'create'])->name('finance.orders.create');
    Route::post('/finance/purchaseorders', [financeorderController::class, 'store'])->name('finance.orders.store');
    Route::get('/finance/purchaseorders/{id}', [financeorderController::class, 'show'])->name('finance.orders.show');
    Route::get('/finance/purchaseorders/{id}/edit', [financeorderController::class, 'edit'])->name('finance.orders.edit');
    Route::put('/finance/purchaseorders/{id}', [financeorderController::class, 'update'])->name('finance.orders.update');
    Route::delete('/finance/purchaseorders/{id}', [financeorderController::class, 'destroy'])->name('finance.orders.destroy');
    Route::patch('/purchase-orders/{id}/confirm', [financeorderController::class, 'updateStatus'])->name('purchase-orders.confirm');
    Route::get('/purchase-orders/confirmed', [financeorderController::class, 'showConfirmedOrders'])->name('purchase-orders.confirmed');


    Route::get('finance/purchaseorders/search/search_data', [financeorderController::class, 'search_order'])->name('financesearch.order');
    // Route::get('/finance/purchaseorder/confirmed', [financeorderController::class, 'orderconfirmed'])->name('finance.orders.orderconfirmed');
    // Route::put('/finance/purchaseorders/{id}/confirm', [financeorderController::class, 'confirmOrder'])->name('orders.confirm');



    Route::get('/finance/employees', [financeemployeeController::class, 'index'])->name('finance.employees.index');
    Route::get('/finance/employee/search/search_data', [financeemployeeController::class, 'search_hiring'])->name('financesearch.employees');


    Route::get('/finance/salary', [financesalaryController::class, 'index'])->name('finance.salary.index');
    Route::get('/finance/salary/{id}/edit', [financesalaryController::class, 'edit'])->name('finance.salary.edit');
    Route::put('/finance/salary/{id}/update', [financesalaryController::class, 'update'])->name('finance.salary.update');
    // Route::get('/finance/salary', [financesalaryController::class, 'index'])->name('finance.salary.index');
    Route::get('/finance/salary/search/search_data', [financesalaryController::class, 'search_data'])->name('financesearch.salary');


    Route::get('/finance/loan', [financeloanController::class, 'index'])->name('finance.loan.index');
    Route::get('/finance/monthly/loan/search_data', [financeloancontroller::class, 'search_data'])->name('financesearch.loan');
// Order Tbale
Route::get('/finance/order', [FinancestoreOrdercontroller::class, 'index'])->name('finance.order.index');
Route::get('/finance/order/create', [FinancestoreOrdercontroller::class, 'create'])->name('finance.order.create');
Route::post('/finance/order', [FinancestoreOrdercontroller::class, 'store'])->name('finance.order.store');
Route::get('/finance/order/{id}', [FinancestoreOrdercontroller::class, 'show'])->name('finance.order.show');
Route::get('/finance/order/{id}/edit', [FinancestoreOrdercontroller::class, 'edit'])->name('finance.order.edit');
Route::put('/finance/order/{id}', [FinancestoreOrdercontroller::class, 'update'])->name('finance.order.update');
Route::delete('/finance/order/{id}', [FinancestoreOrdercontroller::class, 'destroy'])->name('finance.order.destroy');
Route::get('/finance/storeorderrr/search_data', [FinancestoreOrdercontroller::class, 'search'])->name('finance.order.search');

// Funds Route //
Route::get('/finance/fund', [FinanceFundController::class, 'index'])->name('finance.fund.index');
Route::get('/finance/fund/create', [FinanceFundController::class, 'create'])->name('finance.fund.add');
Route::post('/finance/fund/store', [FinanceFundController::class, 'store'])->name('finance.fund.store');
Route::get('/finance/fund/{id}/edit', [FinanceFundController::class, 'edit'])->name('finance.fund.edit');
Route::put('/finance/fund/{id}', [FinanceFundController::class, 'update'])->name('finance.fund.update');
Route::delete('/finance/fund/{id}', [FinanceFundController::class, 'destroy'])->name('finance.fund.destroy');

// Expense
Route::get('/finance/expense', [FinanceExpenseController::class, 'index'])->name('finance.expense.index');
Route::get('/finance/expense/create', [FinanceExpenseController::class, 'create'])->name('finance.expense.add');
Route::post('/finance/expense/store', [FinanceExpenseController::class, 'store'])->name('finance.expense.store');
Route::get('/finance/expense/{id}/edit', [FinanceExpenseController::class, 'edit'])->name('finance.expense.edit');
Route::put('/finance/expense/{id}', [FinanceExpenseController::class, 'update'])->name('finance.expense.update');
Route::delete('/finance/expense/{id}', [FinanceExpenseController::class, 'destroy'])->name('finance.expense.destroy');


  // receipts
  Route::get('/finance/receipt', [FinanceReceiptController::class, 'index'])->name('finance.receipt.index');
  Route::get('/finance/receipt/create', [FinanceReceiptController::class, 'create'])->name('finance.receipt.add');
  Route::post('/finance/receipt/store', [FinanceReceiptController::class, 'store'])->name('finance.receipt.store');
  Route::get('/finance/receipt/{id}/edit', [FinanceReceiptController::class, 'edit'])->name('finance.receipt.edit');
  Route::put('/finance/receipt/{id}', [FinanceReceiptController::class, 'update'])->name('finance.receipt.update');
  Route::delete('/finance/receipt/{id}', [FinanceReceiptController::class, 'destroy'])->name('finance.receipt.destroy');


  // payments
  Route::get('/finance/payment', [FinancePaymentController::class, 'index'])->name('finance.payment.index');
  Route::get('/finance/payment/create', [FinancePaymentController::class, 'create'])->name('finance.payment.add');
  Route::post('/finance/payment/store', [FinancePaymentController::class, 'store'])->name('finance.payment.store');
  Route::get('/finance/payment/{id}/edit', [FinancePaymentController::class, 'edit'])->name('finance.payment.edit');
  Route::put('/finance/payment/{id}', [FinancePaymentController::class, 'update'])->name('finance.payment.update');
  Route::delete('/finance/payment/{id}', [FinancePaymentController::class, 'destroy'])->name('finance.payment.destroy');
// payslip
Route::get('/finance/payslip', [FinancePayslipController::class, 'index'])->name('finance.payslip.index');
Route::get('/finance/payslip/create', [FinancePayslipController::class, 'create'])->name('finance.payslip.add');
Route::post('/finance/payslip/store', [FinancePayslipController::class, 'store'])->name('finance.payslip.store');
Route::get('/finance/payslip/{id}/edit', [FinancePayslipController::class, 'edit'])->name('finance.payslip.edit');
Route::put('/finance/payslip/{id}', [FinancePayslipController::class, 'update'])->name('finance.payslip.update');
Route::delete('/finance/payslip/{id}', [FinancePayslipController::class, 'destroy'])->name('finance.payslip.destroy');

// sale_invoice
Route::get('/finance/sale_invoice', [FinanceSaleInvoiceController::class, 'index'])->name('finance.sale_invoice.index');
Route::get('/finance/sale_invoice/create', [FinanceSaleInvoiceController::class, 'create'])->name('finance.sale_invoice.add');
Route::post('/finance/sale_invoice/store', [FinanceSaleInvoiceController::class, 'store'])->name('finance.sale_invoice.store');
Route::get('/finance/sale_invoice/{id}/edit', [FinanceSaleInvoiceController::class, 'edit'])->name('finance.sale_invoice.edit');
Route::put('/finance/sale_invoice/{id}', [FinanceSaleInvoiceController::class, 'update'])->name('finance.sale_invoice.update');
Route::delete('/finance/sale_invoice/{id}', [FinanceSaleInvoiceController::class, 'destroy'])->name('finance.sale_invoice.destroy');

// purchase_invoice
Route::get('/finance/purchase_invoice', [FinancePurchaseInvoiceController::class, 'index'])->name('finance.purchase_invoice.index');
Route::get('/finance/purchase_invoice/create', [FinancePurchaseInvoiceController::class, 'create'])->name('finance.purchase_invoice.add');
Route::post('/finance/purchase_invoice/store', [FinancePurchaseInvoiceController::class, 'store'])->name('finance.purchase_invoice.store');
Route::get('/finance/purchase_invoice/{id}/edit', [FinancePurchaseInvoiceController::class, 'edit'])->name('finance.purchase_invoice.edit');
Route::put('/finance/purchase_invoice/{id}', [FinancePurchaseInvoiceController::class, 'update'])->name('finance.purchase_invoice.update');
Route::delete('/finance/purchase_invoice/{id}', [FinancePurchaseInvoiceController::class, 'destroy'])->name('finance.purchase_invoice.destroy');
});
Route::get('/finance/finance_login', [FinanceController::class, 'financeLogin'])->name('finance.finance_login');


// Production Routes
Route::middleware(['auth', 'roles:production'])->group(function(){
    Route::get('/production/dashboard', [ProductionController::class, 'ProductionDashboard'])->name('production.dashboard.index');

    Route::get('/production/logout', [ProductionController::class, 'productionlogout'])->name('production.logout');
    Route::get('/production/profile', [ProductionController::class, 'productionProfile'])->name('production.profile');
    Route::post('/production/profile/store', [ProductionController::class, 'productionProfileStore'])->name('production.profile.store');
    Route::get('/production/change/password', [ProductionController::class, 'productionChangePassword'])->name('production.change.password');
    Route::post('/production/password/update', [ProductionController::class, 'productionPasswordUpdate'])->name('production.password.update');

      // Product Route
     Route::get('/production/product', [ProductController::class, 'index'])->name('product.index');
     Route::get('/production/product/create', [ProductController::class, 'create'])->name('product.create');
     Route::post('/production/product', [ProductController::class, 'store'])->name('product.store');
     Route::get('/production/product/{product}', [ProductController::class, 'show'])->name('product.show');
     Route::get('/production/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
     Route::put('/production/product/{product}', [ProductController::class, 'update'])->name('product.update');
     Route::delete('/production/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

     //Order Route
      // Order Route
    Route::get('/production/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/production/order/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/production/order', [OrderController::class, 'store'])->name('order.store');
    Route::get('/production/order/{order}', [OrderController::class, 'show'])->name('order.show');
    Route::get('/production/order/{order}/edit', [OrderController::class, 'edit'])->name('order.edit');
    Route::put('/production/order/{order}', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/production/order/{order}', [OrderController::class, 'destroy'])->name('order.destroy');

    //FinishGoods Products Routes
Route::get('/production/finishgoodsproducts', [finishproductsController::class, 'index'])->name('finishgoodsproducts.index');
Route::get('/production/finishgoodsproducts/create', [finishproductsController::class, 'create'])->name('finishgoodsproducts.create');
Route::post('/production/finishgoodsproducts', [finishproductsController::class, 'store'])->name('finishgoodsproducts.store');
Route::get('/production/finishgoodsproducts/{id}', [finishproductsController::class, 'show'])->name('finishgoodsproducts.show');
Route::get('/production/finishgoodsproducts/{id}/edit', [finishproductsController::class, 'edit'])->name('finishgoodsproducts.edit');
Route::put('/production/finishgoodsproducts/{id}', [finishproductsController::class, 'update'])->name('finishgoodsproducts.update');
Route::delete('/production/finishgoodsproducts/{id}', [finishproductsController::class, 'destroy'])->name('finishgoodsproducts.destroy');
Route::get('/production/finishgoodsproductss/search_data', [finishproductsController::class, 'search'])->name('finishgoodsproducts.search');


// Order Tbale
Route::get('/production/storeorder', [ProductionOrdercontroller::class, 'index'])->name('production.storeorder.index');
Route::get('/production/storeorder/create', [ProductionOrdercontroller::class, 'create'])->name('production.storeorderrr.create');
Route::post('/production/storeorder', [ProductionOrdercontroller::class, 'store'])->name('production.storeorder.store');
Route::get('/production/storeorder/{id}', [ProductionOrdercontroller::class, 'show'])->name('production.storeorder.show');
Route::get('/production/storeorder/{id}/edit', [ProductionOrdercontroller::class, 'edit'])->name('production.storeorder.edit');
Route::put('/production/storeorder/{id}', [ProductionOrdercontroller::class, 'update'])->name('production.storeorder.update');
Route::delete('/production/storeorder/{id}', [ProductionOrdercontroller::class, 'destroy'])->name('production.storeorder.destroy');
Route::get('/production/storeorderrr/search_data', [ProductionOrdercontroller::class, 'search'])->name('store.storeorder.search');

//Rawmaterial
Route::get('/production/rawmaterial', [rawmaterialController::class, 'index'])->name('rawmaterial.index');
Route::get('/production/rawmaterial/create', [rawmaterialController::class, 'create'])->name('rawmaterial.create');
Route::post('/production/rawmaterial', [rawmaterialController::class, 'store'])->name('rawmaterial.store');
Route::get('/production/rawmaterial/{id}', [rawmaterialController::class, 'show'])->name('rawmaterial.show');
Route::get('/production/rawmaterial/{id}/edit', [rawmaterialController::class, 'edit'])->name('rawmaterial.edit');
Route::put('/production/rawmaterial/{id}', [rawmaterialController::class, 'update'])->name('rawmaterial.update');
Route::delete('/production/rawmaterial/{id}', [rawmaterialController::class, 'destroy'])->name('rawmaterial.destroy');
Route::get('/production/rawmaterialll/search_data', [rawmaterialController::class, 'search'])->name('rawmaterial.search');
Route::get('/production/dashboard', [productionController::class, 'ProductionDashboard'])->name('production.dashboard');
//Finishgods Routes
Route::get('/production/finishgods', [finishgodsController::class, 'index'])->name('finishgods.index');
Route::get('/production/finishgods/create', [finishgodsController::class, 'create'])->name('finishgods.create');
Route::post('/production/finishgods', [finishgodsController::class, 'store'])->name('finishgods.store');
Route::get('/production/finishgods/{id}', [finishgodsController::class, 'show'])->name('finishgods.show');
Route::get('/production/finishgods/{id}/edit', [finishgodsController::class, 'edit'])->name('finishgods.edit');
Route::put('/production/finishgods/{id}', [finishgodsController::class, 'update'])->name('finishgods.update');
Route::delete('/production/finishgods/{id}', [finishgodsController::class, 'destroy'])->name('finishgods.destroy');
Route::get('/production/finishgodsll/search_data', [finishgodsController::class, 'search'])->name('finishgods.search');

//Rawmaterial
Route::get('/production/rawmaterial', [rawmaterialController::class, 'index'])->name('rawmaterial.index');
Route::get('/production/rawmaterial/create', [rawmaterialController::class, 'create'])->name('rawmaterial.create');
Route::post('/production/rawmaterial', [rawmaterialController::class, 'store'])->name('rawmaterial.store');
Route::get('/production/rawmaterial/{id}', [rawmaterialController::class, 'show'])->name('rawmaterial.show');
Route::get('/production/rawmaterial/{id}/edit', [rawmaterialController::class, 'edit'])->name('rawmaterial.edit');
Route::put('/production/rawmaterial/{id}', [rawmaterialController::class, 'update'])->name('rawmaterial.update');
Route::delete('/production/rawmaterial/{id}', [rawmaterialController::class, 'destroy'])->name('rawmaterial.destroy');
Route::get('/production/rawmaterialll/search_data', [rawmaterialController::class, 'search'])->name('rawmaterial.search');

});

Route::get('/production/production_login', [ProductionController::class, 'productionLogin'])->name('production.production_login');
