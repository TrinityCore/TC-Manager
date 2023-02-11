<?php

use App\Http\Controllers\PageController;
use App\Models\TrinityCore\Auth\Account;
use App\Models\TrinityCore\Auth\RbacLinkedPermission;
use App\Models\TrinityCore\Auth\RbacPermission;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home']);

Route::get('/perms', function () {

    /**
     $granted = Account::find(5)->rbac_account_permissions()
    ->where('granted', true)
    ->select('permissionId')
    ->pluck('permissionId');

    $permissions = RbacPermission::whereIn(
    'id',
    $granted
    )->pluck('id');

    $linked = RbacLinkedPermission::whereIn('id', $permissions)
    ->with('rbac_permission')
    ->get();
     */

});
