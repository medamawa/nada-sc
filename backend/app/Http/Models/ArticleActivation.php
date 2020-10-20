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

    public function isOk(String $draft_id)
    {
        // draft_idが既に登録されているかどうかチェック
        $activation = $this->where('draft_id', $draft_id)->first();
        
        if ($activation) {
            return false;
        }

        return true;
    }
}
