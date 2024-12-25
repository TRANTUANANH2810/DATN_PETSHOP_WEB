<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SignInController;
use App\Http\Controllers\Admin\StaffsController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Staff\ContactsController;
use App\Http\Controllers\Staff\PetsController;
use App\Http\Controllers\Staff\SignInController as StaffSigninController;
use App\Http\Controllers\Staff\ServicesController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\StaffMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Admin\ContactsController;

// Admin
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', function () {
        return view('admins.products.index');
    });

    Route::get('admin/products', [ProductsController::class, 'index'])->name('admin.products.index');
    Route::get('admin/products/create', [ProductsController::class, 'create'])->name('admin.products.create');
    Route::post('admin/products/store', [ProductsController::class, 'store'])->name('admin.products.store');
    Route::get('admin/products/edit/{id}', [ProductsController::class, 'edit'])->name('admin.products.edit');
    Route::put('admin/products/{id}', [ProductsController::class, 'update'])->name('admin.products.update');
    Route::delete('admin/products/{id}', [ProductsController::class, 'destroy'])->name('admin.products.destroy');
    Route::delete('/product-images/{id}', [ProductsController::class, 'destroyImage'])->name('admin.products.destroyImage');

    Route::get('/admin/revenue', [RevenueController::class, 'getRevenueData'])->name('admin.revenue');

    Route::get('orders', [OrdersController::class, 'index'])->name('admin.orders.index');
    Route::delete('orders/{id}', [OrdersController::class, 'destroy'])->name('admin.orders.destroy');
    Route::post('admin/orders/{id}/ship', [OrdersController::class, 'ship'])->name('admin.orders.ship');
    Route::post('admin/orders/{id}/cancel', [OrdersController::class, 'cancel'])->name('admin.orders.cancel');


    Route::get('admin/categories', [CategoriesController::class, 'index'])->name('admin.categories.index');
    Route::post('admin/categories', [CategoriesController::class, 'store'])->name('admin.categories.store');
    Route::delete('admin/categories/{id}', [CategoriesController::class, 'destroy'])->name('admin.categories.destroy');

    Route::get('admin/staffs', [StaffsController::class, 'index'])->name('admin.staffs.index');
    Route::post('admin/staffs', [StaffsController::class, 'store'])->name('admin.staffs.store');
    Route::delete('admin/staffs/{id}', [StaffsController::class, 'destroy'])->name('admin.staffs.destroy');

    Route::get('admin/blogs', [BlogsController::class, 'index'])->name('admin.blogs.index');
    Route::get('admin/blogs/create', [BlogsController::class, 'create'])->name('admin.blogs.create');
    Route::post('admin/blogs/store', [BlogsController::class, 'store'])->name('admin.blogs.store');
    Route::get('admin/blogs/edit/{slug}', [BlogsController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('admin/blogs/{slug}', [BlogsController::class, 'update'])->name('admin.blogs.update');
    Route::delete('admin/blogs/{id}', [BlogsController::class, 'destroy'])->name('admin.blogs.destroy');

//    Route::get('admin/contacts', [ContactsController::class, 'index'])->name('admin.contacts.index');
//    Route::get('admin/contacts/view/{id}', [ContactsController::class, 'view'])->name('admin.contacts.view');
//    Route::post('/contacts/{id}/toggle-status', [ContactsController::class, 'toggleStatus'])->name('contacts.toggleStatus');

    Route::get('/import-products', [ProductsController::class, 'importProducts'])->name('import');
    Route::post('/upload-products', [ProductsController::class, 'uploadProducts'])->name('products.upload');
    Route::post('admin/logout', [SigninController::class, 'logout'])->name('admin.logout');

});
Route::get('/admin/signin', [SignInController::class, 'create'])->name('admin.signin');
Route::post('/admin/signin', [SignInController::class, 'store'])->name('admin.signin.store');

// Nhân viên
Route::get('/staff/signin', [StaffSigninController::class, 'create'])->name('staff.signin');
Route::post('/staff/signin', [StaffSigninController::class, 'store'])->name('staff.signin.store');
Route::middleware([StaffMiddleware::class])->group(function () {
    Route::get('/staff', function () {
        return view('staffs.contacts.index');
    });
    Route::get('staff/contacts', [ContactsController::class, 'index'])->name('staff.contacts.index');
    Route::get('staff/contacts/view/{id}', [ContactsController::class, 'view'])->name('staff.contacts.view');
    Route::post('/contacts/{id}/toggle-status', [ContactsController::class, 'toggleStatus'])->name('contacts.toggleStatus');

    Route::get('staff/pets', [PetsController::class, 'index'])->name('staff.pets.index');
    Route::get('staff/pets/create', [PetSController::class, 'create'])->name('staff.pets.create');
    Route::post('staff/pets/store', [PetsController::class, 'store'])->name('staff.pets.store');
    Route::put('staff/pets/{id}', [PetsController::class, 'update'])->name('staff.pets.update');
    Route::get('staff/pets/edit/{id}', [PetsController::class, 'edit'])->name('staff.pets.edit');
    Route::delete('admin/pets/{id}', [PetsController::class, 'destroy'])->name('staff.pets.destroy');

    Route::get('staff/services', [ServicesController::class, 'index'])->name('staff.services.index');
    Route::post('/staff/bookings/{id}/update-status', [ServicesController::class, 'updateStatus'])->name('bookings.update-status');

    Route::post('staff/logout', [StaffSigninController::class, 'logout'])->name('staff.logout');
});

// Người dùng
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('introduce', [IntroduceController::class, 'index'])->name('introduce');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'store'])->name('contact.send');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/category/{id}', [ShopController::class, 'filterByCategory'])->name('shop.byCategory');
Route::get('shop/{id}', [ShopController::class, 'show'])->name('product.detail');
Route::get('/shop/filterByPrice', [ShopController::class, 'filterByPrice'])->name('products.filterByPrice');


Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('service/grooming', [ServiceController::class, 'grooming'])->name('service.grooming');
Route::get('service/pet-travel', [ServiceController::class, 'travel'])->name('service.pet-travel');
Route::get('service/clinical', [ServiceController::class, 'clinical'])->name('service.clinical');
Route::get('service/pet-hotel', [ServiceController::class, 'hotel'])->name('service.pet-hotel');

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/email-verified', function () {
        return view('auth.verified');
    })->name('verification.success');

    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::put('account/update', [UserController::class, 'update'])->name('user.account.update');

    Route::get('/register-service', [ServiceController::class, 'registerService'])->name('register.service');
    Route::post('/booking', [ServiceController::class, 'store'])->name('booking.store');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update/{id}/{action}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('/momo_payment', [PaymentController::class, 'momoPayment'])->name('momo-payment.create');
    Route::get('/payment/callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');
    Route::get('/order-history', [OrderHistoryController::class, 'index'])->name('orders.history');
    Route::get('/orders/{id}', [OrderHistoryController::class, 'show'])->name('orders.show');
    Route::post('/payment/cod', [PaymentController::class, 'codPayment'])->name('payment.cod');
});

