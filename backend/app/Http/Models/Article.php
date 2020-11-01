<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Uuid;

class Article extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $carbon;
    protected $now;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name', 'email', 'title', 'body', 'links',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // newした時に自動的にuuidを設定する。
        $this->attributes['id'] = Uuid::uuid4()->toString();
    }

    // linksはまだ対応していない
    public function post(String $user_id, String $name, String $email, String $title, String $body)
    {
        // DBへ新しい下書きを登録
        $this->user_id = $user_id;
        $this->name = $name;
        $this->email = $email;
        $this->title = $title;
        $this->body = $body;
        $this->save();
    }

    public function getArticles()
    {
        return $this->orderBy('updated_at', 'desc')->get();
    }

    public function getArticleWithId(String $id)
    {
        return $this->where('id', $id)->get();
    }
}
