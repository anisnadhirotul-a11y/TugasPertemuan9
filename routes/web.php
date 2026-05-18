<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| ROUTE ANGGOTA
|--------------------------------------------------------------------------
*/

Route::get('/anggota', function () {

    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '081298765432',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '082134567890',
            'alamat' => 'Surabaya',
            'status' => 'Nonaktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Rina Maharani',
            'email' => 'rina@email.com',
            'telepon' => '081355577788',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Dedi Kurniawan',
            'email' => 'dedi@email.com',
            'telepon' => '081377788899',
            'alamat' => 'Semarang',
            'status' => 'Aktif'
        ]
    ];

    return view('anggota.index', compact('anggota_list'));

})->name('anggota.index');


Route::get('/anggota/{id}', function ($id) {

    $anggota_list = [
        1 => [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ]
    ];

    if (!isset($anggota_list[$id])) {
        abort(404, 'Data anggota tidak ditemukan');
    }

    $anggota = $anggota_list[$id];

    return view('anggota.show', compact('anggota'));

})->name('anggota.show');


/*
|--------------------------------------------------------------------------
| ROUTE KATEGORI
|--------------------------------------------------------------------------
*/

Route::get('/kategori', [KategoriController::class, 'index'])
    ->name('kategori.index');

Route::get('/kategori/{id}', [KategoriController::class, 'show'])
    ->name('kategori.show');

Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])
    ->name('kategori.search');