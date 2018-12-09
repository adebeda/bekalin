<?php

use App\Http\Middleware\CheckStatus;

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

Route::get('/coba', function(){
	return view ('order.checkout');
});



// pemesanan

Route::get('/menu', 'PemesananController@showMenuPaketMakanan');
Route::get('/detail/{id}', 'PemesananController@showDetailPaketMakanan');

Route::get('/gizi', 'AsistenGiziController@showFormGizi');
Route::get('/giziTimeline', 'AsistenGiziController@showTimeline');
Auth::routes();
Route::get('/adminGizi', 'AsistenGiziController@showAdminGizi');
Route::post('/adminGizi', 'AsistenGiziController@setAdminGizi');
Route::post('/jawabAdminGizi/{id}', 'AsistenGiziController@setJawabAdminGizi');
Route::get('/', 'AsistenGiziController@showHalamanUtama');






Route::get('/pengguna', 'penggunaController@viewPengguna');
Route::get('/pengguna2/{id}', 'penggunaController@viewPengguna2');
Route::get('/pengguna/akses/{id}', 'PenggunaController@viewAksesPengguna');
Route::post('/pengguna/akses', 'penggunaController@editAksesPengguna');

// Route::get('/home', 'HomeController@index')->name('welcome');

Route::get('/settingProfil', 'ProfilController@getProfil');
Route::get('/showProfilAnak', 'ProfilController@showProfilAnak');
Route::post('/settingProfilku', 'ProfilController@setProfil');
Route::get('/settingProfilAnak/{id}', 'ProfilController@getProfilAnak');
Route::post('/settingProfilAnak/{id}', 'ProfilController@setProfilAnak');
Route::get('/showProfil','ProfilController@showProfil');

Route::get('admin/routes', 'HomeController@showAdmin')->middleware('admin');

Route::get('/admin', 'PaketController@index')->name('index')->middleware('auth');
Route::get('/posts/details/{id}', 'PaketController@details')->name('posts.details');
Route::get('/add', 'PaketController@add')->name('add');
Route::get('/getPaket/{id}', 'PaketController@getPaket');
Route::post('/setPaket', 'PaketController@setPaket');
Route::get('/edit', 'PaketController@edit')->name('edit');
Route::post('/update/{id}', 'PaketController@update')->name('update');
Route::post('/setEditPaket/{id}', 'PaketController@setEditPaket')->name('ubah');
Route::get('/delete/{id}', 'PaketController@delete')->name('delete');


Route::get('/keranjang/{id}', 'PemesananController@viewKeranjang');





Route::get('/tampilan', function () {
    return redirect('shop');
});

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');


Route::get('/checkout', 'PemesananController@viewCheckout');
Route::post('/setPesanan', 'PemesananController@setPesanan');

Route::get('/pemesanan', 'PemesananController@viewPemesanan');
Route::get('/kurir', 'kurirController@viewKurir');

Route::get('/pengiriman/{id}', 'PemesananController@kirimPesanan');

Route::post('/setKritiksaran', 'PemesananController@setKritiksaran');
Route::get('/getKritiksaran', 'PemesananController@getKritiksaran');

Route::get('/tambahAnak', 'ProfilController@formAnak');
Route::post('/tambahAnak', 'ProfilController@addAnak');