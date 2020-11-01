<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Uuid;

class Draft extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $carbon;
    protected $now;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name', 'email', 'title', 'summary', 'body', 'links', 'submitted'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // newした時に自動的にuuidを設定する。
        $this->attributes['id'] = Uuid::uuid4()->toString();
    }

    // linksはまだ対応していない
    public function post(String $user_id, String $name, String $email, String $title, String $summary, String $body)
    {
        // DBへ新しい下書きを登録
        $this->user_id = $user_id;
        $this->name = $name;
        $this->email = $email;
        $this->title = $title;
        $this->summary = $summary;
        $this->body = $body;
        $this->save();
    }

    // linksはまだ対応していない
    public function edit(String $id, String $name, String $email, String $title, String $summary, String $body)
    {
        // DBへ下書きの編集を適用
        $draft = Draft::find($id);
        $draft->name = $name;
        $draft->email = $email;
        $draft->title = $title;
        $draft->summary = $summary;
        $draft->body = $body;
        $draft->save();
    }

    public function getDrafts(String $user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('updated_at', 'desc')->get();
    }

    public function getDraftWithId(String $id)
    {
        return $this->where('id', $id)->get();
    }

    public function getDraftWithIds(Array $ids)
    {
        return $this->find($ids);
    }

    public function checkDraft(String $id)
    {
        return $this->where('id', $id)->first();
    }

    public function checkUser(String $user_id)
    {
        return $this->where('user_id', $user_id)->first();
    }
}
