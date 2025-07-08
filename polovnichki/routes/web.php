use App\Http\Controllers\CarController;
use App\Http\Controllers\OrderController;

Route::resource('cars', CarController::class);
Route::resource('orders', OrderController::class);

// Маршрут для оформления заказа по автомобилю:
Route::get('/buy/{car}', [OrderController::class, 'create'])->name('orders.create');
Route::post('/buy/{car}', [OrderController::class, 'store'])->name('orders.store');