<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\GantiController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\ReturController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TransaksiController;

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

Auth::routes();
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
    Route::get('/admin/admin', [AuthController::class, 'admin']);

    Route::get('ad_mitra', [MitraController::class, 'ad_mitra']);
    Route::get('ad_mitra/{id}', [MitraController::class, 'ad_mitra_det']);

    Route::get('ad_stok', [StokController::class, 'ad_stok']);

    Route::get('ad_deposit', [DepositController::class, 'ad_deposit']);
    Route::get('ad_deposit/{id}', [DepositController::class, 'ad_deposit_det']);

    Route::get('ad_refund', [RefundController::class, 'ad_refund']);
    Route::get('ad_refund/{id}', [RefundController::class, 'ad_refund_det']);

    Route::get('ad_trmitra', [TransaksiController::class, 'ad_trmitra']);
    Route::get('ad_trmitra/{id}', [TransaksiController::class, 'ad_trmitra_det']);
    Route::get('ad_cetak/{id}', [TransaksiController::class, 'ad_cetak']);
    Route::get('ad_cetak_pdf', [TransaksiController::class, 'ad_trmitra_cetak']);

    Route::get('ad_tabungan', [TabunganController::class, 'ad_tabungan']);
    Route::get('ad_tabungan/{id}', [TabunganController::class, 'ad_tabungan_det']);

    Route::get('ad_trtamu', [TransaksiController::class, 'ad_trtamu']);
    Route::get('ad_trtamu/{id}', [TransaksiController::class, 'ad_trtamu_det']);
    Route::get('ad_cetak_tab', [TransaksiController::class, 'ad_cetak_tab']);

});

Route::group(['middleware' => ['auth', 'CheckRole:head']], function () {
    Route::get('/ho/head', [AuthController::class, 'head']);

    Route::get('ho_mitra', [MitraController::class, 'ho_mitra']);
    Route::get('ho_mitra/create', [MitraController::class, 'ho_mitra_c']);
    Route::post('ho_mitra', [MitraController::class, 'ho_mitra_s']);
    Route::get('ho_mitra/{id}', [MitraController::class, 'ho_mitra_det']);
    Route::get('ho_mitra/{id}/edit', [MitraController::class, 'ho_mitra_e']);
    Route::post('ho_mitra/{id}', [MitraController::class, 'ho_mitra_u']);

    Route::get('ho_stok', [StokController::class, 'ho_stok']);
    Route::get('ho_stok/create', [StokController::class, 'ho_stok_c']);
    Route::post('ho_stok', [StokController::class, 'ho_stok_s']);
    Route::get('ho_stok/{id}/edit', [StokController::class, 'ho_stok_e']);
    Route::post('ho_stok/{id}', [StokController::class, 'ho_stok_u']);

    Route::get('ho_trmitra', [TransaksiController::class, 'ho_trmitra']);
    Route::get('ho_trmitra/{id}', [TransaksiController::class, 'ho_trmitra_det']);
    Route::get('ho_trmitra_c', [TransaksiController::class, 'ho_trmitra_c']);
    Route::get('ho_trmitra_cetak', [TransaksiController::class, 'ho_trmitra_cetak']);

    Route::get('ho_produk', [GantiController::class, 'ho_produk']);
    Route::get('ho_produk/create', [GantiController::class, 'ho_produk_c']);
    Route::post('ho_produk', [GantiController::class, 'ho_produk_s']);
    Route::get('ho_produk/{id}', [GantiController::class, 'ho_produk_det']);
    Route::get('ho_produk/{id}/edit', [GantiController::class, 'ho_produk_e']);
    Route::post('ho_produk/{id}', [GantiController::class, 'ho_produk_u']);

    Route::get('ho_refund', [RefundController::class, 'ho_refund']);
    Route::get('ho_refund/{id}', [RefundController::class, 'ho_refund_det']);
    Route::get('ho_refund/{id}/edit', [RefundController::class, 'ho_refund_e']);
    Route::post('ho_refund/{id}', [RefundController::class, 'ho_refund_u']);

    Route::get('ho_tabungan', [TabunganController::class, 'ho_tabungan']);
    Route::get('ho_tabungan/{id}', [TabunganController::class, 'ho_tabungan_det']);

    Route::get('ho_trtamu', [TransaksiController::class, 'ho_trtamu']);
    Route::get('ho_trtamu/{id}', [TransaksiController::class, 'ho_trtamu_det']);

    Route::get('ho_deposit', [DepositController::class, 'ho_deposit']);
    Route::get('ho_deposit/{id}', [DepositController::class, 'ho_deposit_det']);
    Route::get('ho_deposit_c', [DepositController::class, 'ho_deposit_c']);
    Route::post('ho_deposit', [DepositController::class, 'ho_deposit_s']);

    Route::get('ho_retur', [ReturController::class, 'ho_retur']);
    Route::get('ho_retur/{id}', [ReturController::class, 'ho_retur_det']);
});

Route::group(['middleware' => ['auth', 'CheckRole:cabang']], function () {
    Route::get('/kc/cabang', [AuthController::class, 'cabang']);

    Route::get('kc_stok', [StokController::class, 'kc_stok']);
    Route::get('kc_stok/{id}', [StokController::class, 'kc_stok_det']);

    Route::get('kc_refund', [RefundController::class, 'kc_refund']);
    Route::get('kc_refund/{id}', [RefundController::class, 'kc_refund_det']);

    Route::get('kc_tabungan', [TabunganController::class, 'kc_tabungan']);
    Route::get('kc_tabungan/{id}', [TabunganController::class, 'kc_tabungan_det']);

    Route::get('kc_trtamu', [TransaksiController::class, 'kc_trtamu']);
    Route::get('kc_trtamu/{id}', [TransaksiController::class, 'kc_trtamu_det']);
});

Route::group(['middleware' => ['auth', 'CheckRole:kasir']], function () {
    Route::get('/kasir/kasir', [AuthController::class, 'kasir']);

    Route::get('ka_stok', [StokController::class, 'ka_stok']);
    Route::get('ka_stok/{id}', [StokController::class, 'ka_stok_det']);

    Route::get('ka_refund', [RefundController::class, 'ka_refund']);
    Route::get('ka_refund/{id}', [RefundController::class, 'ka_refund_det']);

    Route::get('ka_tabungan', [TabunganController::class, 'ka_tabungan']);
    Route::get('ka_tabungan/{id}', [TabunganController::class, 'ka_tabungan_det']);

    Route::get('ka_trtamu', [TransaksiController::class, 'ka_trtamu']);
    Route::get('ka_trtamu/{id}', [TransaksiController::class, 'ka_trtamu_det']);
});
