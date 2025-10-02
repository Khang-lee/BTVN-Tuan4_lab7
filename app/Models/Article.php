namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Tạm mock dữ liệu (demo, chưa kết nối DB)
    public static function findOrFail($id)
    {
        $articles = [
            1 => ['id' => 1, 'title' => 'Bài viết 1', 'body' => 'Nội dung 1'],
            2 => ['id' => 2, 'title' => 'Bài viết 2', 'body' => 'Nội dung 2'],
        ];

        if (!isset($articles[$id])) {
            abort(404, "Article not found");
        }

        return (object) $articles[$id];
    }
}
