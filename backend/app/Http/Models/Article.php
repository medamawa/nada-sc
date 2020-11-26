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
        'name', 'email', 'title', 'summary', 'body', 'links',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // newした時に自動的にuuidを設定する。
        $this->attributes['id'] = Uuid::uuid4()->toString();
    }

    public function post(String $user_id, String $name, String $email, String $title, String $summary, String $body, String $links = null)
    {
        // DBへ新しい下書きを登録
        $this->user_id = $user_id;
        $this->name = $name;
        $this->email = $email;
        $this->title = $title;
        $this->summary = $summary;
        $this->body = $body;
        $this->links = $links;
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

    public function getCommitteeArticles()
    {
        // " role = 2 " は委員会を表している
        return $this->join('users', 'articles.user_id', '=', 'users.id')->where('users.role', '=', 2)->orderBy('articles.updated_at', 'desc')->get();
    }

    public function getClubArticles()
    {
        // " role = 3 " はクラブを表している
        return $this->join('users', 'articles.user_id', '=', 'users.id')->where('users.role', '=', 3)->orderBy('articles.updated_at', 'desc')->get();
    }

    public function getPersonalArticles()
    {
        // " role = 3 " はクラブを表している
        return $this->join('users', 'articles.user_id', '=', 'users.id')->where('users.role', '=', 4)->orderBy('articles.updated_at', 'desc')->get();
    }
}
