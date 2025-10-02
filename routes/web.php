<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
//Route show
Route::get('/articles/show/{article}', [ArticleController::class, 'show'])
    ->name('articles.show');
//Tạo đầy đủ 7 route
Route::resource('articles', ArticleController::class);
// 1. Route có tham số động (bắt chỉ số)
Route::get('/articles/page/{page}', function ($page) {
    return "Trang bài viết số: " . (int)$page;
})->whereNumber('page')->name('articles.page');

// 2. Tham số tùy chọn + regex slug
Route::get('/articles/slug/{slug?}', function ($slug = 'khong-co-slug') {
    return "Slug: " . $slug;
})->where('slug', '[a-z0-9-]+')->name('articles.slug');

// 3. Route group với prefix 'admin'
Route::prefix('admin')->group(function () {
    Route::get('/articles', fn() => 'Quản trị bài viết')
        ->name('admin.articles.index');
});
?>
