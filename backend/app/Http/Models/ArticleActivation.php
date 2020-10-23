<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Uuid;

class ArticleActivation extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $carbon;
    protected $now;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'draft_id'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // newした時に自動的にuuidを設定する。
        $this->attributes['id'] = Uuid::uuid4()->toString();
    }

    public function submit(String $draft_id)
    {
        // DBへ新しい下書きのアクティベーションを登録
        $this->draft_id = $draft_id;
        $this->save();
    }

    public function isSubmitted(String $draft_id)
    {
        $activation = $this->where('draft_id', $draft_id)->first();
        
        // draft_idが既に登録されているかどうかチェック
        // draft_idが登録されていなければtrueを返す
        if (!$activation) {
            return true;
        }

        // 「isSubmitted == true」になっているかどうかチェック
        // 「isSubmitted == true」ならfalseを返す
        if ($activation->isSubmitted) {
            return false;
        }

        return true;
    }
}
