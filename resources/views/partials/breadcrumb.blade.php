<nav style="margin:10px 0; font-size:14px;">
    <a href="{{ route('articles.index') }}">Trang chủ</a>
    @if(Route::is('articles.create'))
        > Thêm bài viết
    @elseif(Route::is('articles.edit'))
        > Sửa bài viết
    @elseif(Route::is('articles.show'))
        > Xem bài viết
    @endif
</nav>
