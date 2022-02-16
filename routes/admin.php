<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/users/{user}/posts',[UsersController::class, 'showPosts'])->name('users.showPosts');
    Route::resource('/users', UsersController::class);
    Route::resource('/roles',RolesController::class);
    Route::resource('/posts',PostsController::class);



});


?>
