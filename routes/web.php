<?php

use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Material\Show as MaterialShow;
use App\Http\Livewire\Material\Index as MaterialIndex;
use App\Http\Livewire\Requirement\Index as RequirementIndex;
use App\Http\Livewire\Requirement\Create as RequirementCreate;
use App\Http\Livewire\Supplier\Index as SupplierIndex;
use App\Http\Livewire\Supplier\Show as SupplierShow;

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

Route::get('/', HomeComponent::class);

//Supplier Routes

    // Suppliers List
    Route::get('/supplier', SupplierIndex::class);

    // Supplier Information
    Route::get('/supplier/{id}', SupplierShow::class);

//Supplier Routes End

// Material Routes

    // Suppliers List
    Route::get('/material', MaterialIndex::class);

    // Material Information
    Route::get('/supplier/{supplier_id}/material/{id}', MaterialShow::class);

// Material Routes End

// Requirements Route  
    Route::get('/requirements', RequirementIndex::class);
